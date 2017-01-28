<?php

/*
 * Logic
 *
 */
require_once 'logic/db.class.php';
require_once 'logic/Image.class.php';
require_once 'logic/class.phpmailer.php';
require_once 'logic/mods.php';

function ordStat($type) {
    if ($type == '2')
        return 'checked';
    if ($type == '3')
        return 'executed';
    if ($type == '9')
        return 'canceled';
    return 'pending';
}

function payMethod($k, $a = '0.00') {
    if ($k == 'moneygram')
        return 'MoneyGram<br>Name: <strong>DIMITAR ASENOV KORUDZHIEV</strong><br>Address: <strong>SOFIA, BULGARIA</strong><br>
	Amount: <strong>' . $a . ' &euro;</strong><br>
	<strong>Please, send the MoneyGram number after payment!</strong>';
    elseif ($k == 'wire')
        return 'Bank transfer<br>Name: <strong>DIMITAR KORUDZHIEV</strong><br>
	Amount: <strong>' . $a . ' &euro;</strong><br>
	IBAN: <strong>BG82FINV91501015882657</strong><br>
	BIC/SWIFT: <strong>FINVBGSF</strong><br>
	Card holder: <strong>DIMITAR KORUDZHIEV</strong><br>&nbsp;<br>
	Bank name: <strong>First Investment Bank AD</strong><br>
	Bank address: <strong>37, Dragan Tsankov Blvd., 1797 Sofia, Bulgaria</strong>';
    elseif ($k == 'paypal')
        return 'PayPal<br>E-mail: <strong>evgeniadimitrova555@gmail.com</strong><br>Amount: <strong>' . $a . ' &euro;</strong>';
}

class Core {

    private $db;
    private $cart;
    private $ipp = 9;
    private $p_off = 3;
    private $contactMail = 'hap4eta@gmail.com';
    private $siteMail = 'hap4eta@gmail.com';

    function __construct($db) {
        $this->db = $db;
    }

    private function esc($str) {
        $str = trim($str);
        $str = preg_replace('/\s\s+/', ' ', $str);
        $str = $this->db->escString($str);
        return $str;
    }

    function getDb($db) {
        return $this->db;
    }

    function setDb($db) {
        $this->db = $db;
    }

    function indexAction() {
        // get all parent categories
        $sql = "SELECT * "
                . "FROM folders "
                . "WHERE parent = 0";

        $rsCategories = $this->db->select($sql);

        return $rsCategories;
    }        

    function categoryAction() {


        $sql = "SELECT * "
                . "FROM folders "
                . "WHERE parent = 0";

        $rsMainCategories = $this->db->select($sql);

        return $rsMainCategories;
    }

    function addNewCat() {

        $catName = $_POST['newCategoryName'];
        $catParentId = $_POST['generalCatId'];

        // create query
        $sql = "INSERT INTO "
                . "folders (`parent`, `name`, `metakeys`) "
                . "VALUES ('{$catParentId}', '{$catName}', '{$catName}')";

        // return id added category
        $id = $this->db->insert($sql);

        $resData = array();
        if ($id) {
            $resData['success'] = 1;
            $resData['message'] = 'Category Added';
        } else {
            $resData['success'] = 0;
            $resData['message'] = 'Error adding category';
        }

        echo json_encode($resData);
        return;
    }

    function updateCategory() {

        $itemId = $_POST['id'];
        $parentId = $_POST['parentId'];
        $newName = $_POST['name'];
        $newMetakeys = $_POST['name'];



        $set = array();

        if ($newName) {
            $set[] = "name = '{$newName}'";
            $set[] = "metakeys = '{$newName}'";
        }

        if ($parentId > -1) {
            $set[] = "parent = {$parentId}";
        }

        $setStr = implode($set, ', ');

        $sql = "UPDATE folders "
                . "SET {$setStr} "
                . "WHERE id = {$itemId}";

        $res = $this->db->update($sql);

        $resData = array();
        if ($res) {
            $resData['success'] = 1;
            $resData['message'] = 'The category has been updated';
        } else {
            $resData['success'] = 0;
            $resData['message'] = 'Error change in the data category';
        }

        echo json_encode($resData);
        return;
    }

    /**
     * Page controll products
     *
     * @param type $smarty
     */
    function products() {

        $sql = "SELECT * "
                . "FROM `items` "
                . "ORDER BY id "
                . "LIMIT 10";

        $rsProducts = $this->db->select($sql);

        return $rsProducts;
    }

    function addProduct() {
        $itemName = $_POST['newItemName'];
        $itemPrice = $_POST['newItemPrice'];
        $itemDesc = $_POST['newItemDesc'];
        $itemCatId = $_POST['newItemCatId'];
        $itemMake = $_POST['newItemMake'];
        $itemMkey = $_POST['newItemMkey'];
        $itemData = $_POST['newItemData'];


        $sql = "INSERT INTO items "
                . "SET "
                . "`name` = '{$itemName}', "
                . "`price` = '{$itemPrice}', "
                . "`mdesc` = '{$itemDesc}', "
                . "`cat` = '{$itemCatId}', "
                . "`make` = '{$itemMake}', "
                . "`mkeys` = '{$itemMkey}', "
                . "`data` = '{$itemData}'";

        $res = $this->db->insert($sql);

        $resData = array();
        if ($res) {
            $resData['success'] = 1;
            $resData['message'] = 'Changes are saved successfully';
        } else {
            $resData['success'] = 0;
            $resData['message'] = 'Error change data';
        }

        echo json_encode($resData);
        return;
    }

    function attachImage($p, $f) {

        $id = $this->db->escString($p['itemId']);
        $img = $f['nameImg']['tmp_name'];
        $ext = pathinfo($f['nameImg']['name'], PATHINFO_EXTENSION);

        if (empty($f['nameImg']['name'])) {
            return 'Please select a photo.';
        }

        $img_data = getimagesize($img);

        if ($img_data[2] != IMAGETYPE_JPEG) {
            return 'The photo should be jpg.';
        }

        if ($img_data[0] < 480 && $img_data[1] < 480) {
            return 'The minimum image size must be 480 x 480';
        }

        $target_dir = 'img';

        if (!is_dir($target_dir)) {
            mkdir($target_dir);
        }

        $name = myid();
        $new_name = $name;
        $image = new Image;

        if ($image->process($img, $name, $target_dir, 480, 480) == 'OK' &&
                $image->process($img, "lo-" . $name, $target_dir, 200, 200) == 'OK') {

            $this->db->insert("update items set image='$new_name' where id = $id");
        } else {
            @unlink($target_dir . '/hi-' . $new_name);
            @unlink($target_dir . '/lo-' . $new_name);
            return 'Failed to save image.';
        }

        return 'The photo is attached.';
    }

    function swapImage($id, $swapid) {
        $id = is_numeric($id) ? $id : 0;
        $swapid = is_numeric($swapid) ? $swapid : 0;

        $img = $this->db->getAsoc("select position,itemid from item_images where id=$id");
        $swp = $this->db->getAsoc("select position from item_images where id=$swapid");

        if (count($img) > 0 && count($swp) > 0) {
            $img_pos = $img[0]['position'];
            $swp_pos = $swp[0]['position'];

            $this->db->update("update item_images set position = $img_pos where id = $swapid");
            $this->db->update("update item_images set position = $swp_pos where id = $id");
            return $img[0]['itemid'];
        }

        return 'ERR';
    }

    function deleteItemImage($id) {
        $r = $this->db->getAsoc("select itemid,image from item_images where id=$id");

        if (count($r) > 0) {
            $dir = $r[0]['itemid'];
            $name = $r[0]['image'];
            @unlink("_items/{$dir}/hi-{$name}");
            @unlink("_items/{$dir}/lo-{$name}");
            $this->db->delete("delete from item_images where id=$id");
            return array('state' => 6, 'msg' => 'The photo was deleted', 'class' => 'msg_green');
        } else {
            return array('state' => 2, 'msg' => 'Image not found', 'class' => 'msg_red');
        }
    }

    function updateProduct()
    {
        $itemId = $_POST['itemId'];
        $itemName = $_POST['itemName'];
        $itemPrice = $_POST['itemPrice'];
        $itemDesc = $_POST['itemDesc'];
        $itemCatId = $_POST['itemCatId'];
        $itemMake = $_POST['itemMake'];
        $itemMkey = $_POST['itemMKey'];
        $itemData = $_POST['itemData'];
        $itemStatus = $_POST['itemStatus'];
        $newFileName = null;

         $set = array();


        $set[] = "`cat` = '{$itemCatId}'";
        $set[] = "`make` = '{$itemMake}'";
        if ($itemName) {
            $set[] = "`name` = '{$itemName}'";
        }

        if ($itemPrice > 0) {
            $set[] = "`price` = '{$itemPrice}'";
        }

        if ($itemStatus !== null) {
            $set[] = "`hidden` = '{$itemStatus}'";
        }

        if ($itemDesc) {
            $set[] = "`mdesc` = '{$itemDesc}'";
        }

        if ($itemMkey) {
            $set[] = "`mkeys` = '{$itemMkey}'";
        }

        if ($itemData) {
            $set[] = "`data` = '{$itemData}'";
        }

        if ($newFileName) {
            $set[] = "`image` = '{$newFileName}'";
        }

        $setStr = implode($set, ',');

        $sql = "UPDATE items "
                . "SET {$setStr} "
                . "WHERE id = '{$itemId}'";

        // include '../config/db.php';
        // $rs = mysqli_query($link, $sql);
        // mysqli_close($link);

        // $res = updateProductAction($itemId, $itemName, $itemPrice, $itemStatus, $itemDesc, $itemCatId, $itemMake, $itemMkey, $itemData);

        $res = $this->db->update($sql);

        $resData = array();
        if ($res) {
            $resData['success'] = 1;
            $resData['message'] = 'The changes are successfully saved (update)';
        } else {
            $resData['success'] = 0;
            $resData['message'] = 'Error update data';
        }

        echo json_encode($resData);
        return;
    }

    function updateProductAction($itemId, $itemName, $itemPrice, $itemStatus, $itemDesc, $itemCat, $itemMake, $itemMkey, $itemData, $newFileName = null) {

        $set = array();

        if ($itemName) {
            $set[] = "`name` = '{$itemName}'";
        }

        if ($itemPrice > 0) {
            $set[] = "`price` = '{$itemPrice}'";
        }

        if ($itemStatus !== NULL) {
            $set[] = "`hidden` = {$itemStatus}";
        }

        if ($itemDesc) {
            $set[] = "`mdesc` = '{$itemDesc}'";
        }

        if ($itemCat) {
            $set[] = "`cat` = {$itemCat}";
        }

        if ($itemMake) {
            $set[] = "`make` = {$itemMake}";
        }

        if ($itemMake) {
            $set[] = "`mkey` = {$itemMkey}";
        }

        if ($itemMake) {
            $set[] = "`data` = {$itemData}";
        }

        if ($newFileName) {
            $set[] = "`image` = '{$newFileName}'";
        }

        $setStr = implode($set, ',');

        $sql = "UPDATE products "
                . "SET {$setStr} "
                . "WHERE id = '{$itemId}'";

        include '../config/db.php';
        $rs = mysqli_query($link, $sql);
        mysqli_close($link);

        return $rs;
    }

    function ordersAction($smarty) {

        $rsOrders = getOrders();

        $smarty->assign('pageTitle', 'Orders');
        $smarty->assign('rsOrders', $rsOrders);

        loadTemplate($smarty, 'adminHeader');
        loadTemplate($smarty, 'adminOrders');
        loadTemplate($smarty, 'adminFooter');
    }

    function setorderstatusAction() {
        $itemId = $_POST['itemId'];
        $status = $_POST['status'];

        $res = updateOrderStatus($itemId, $status);

        if ($res) {
            $res['success'] = 1;
        } else {
            $res['success'] = 0;
            $res['message'] = 'Грешка при съхранение на статуса';
        }

        echo json_encode($res);
        return;
    }
    
    function url(){
    $base_url = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
    $base_url .= '://'. $_SERVER['HTTP_HOST'];
    $base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']); 
    return $base_url;
    }
    
//    function getAnOrder($id){
//	$id = $this->esc($id);
//	$r = $this->db->getAsoc("select
//		o.id, o.uid, o.total as subtotal, o.ship_price, o.total + o.ship_price as total, o.pay_method, o.status as o_status, o.ship_code, o.notes, o.input, o.checked, o.dispatched,
//		c.fname, c.lname, c.email, c.phone, c.status as cl_status,
//		l.country, l.state, l.city, l.street, l.zip
//		from orders o
//		join clients c on o.uid = c.id
//		join location l on o.ship_addr = l.id
//		where o.id=$id");
//	$rr = $this->db->getAsoc("select o.qty, o.price, o.qty * o.price as sum, i.name from ord_data o
//		join items i on o.itemid = i.id
//		where o.ordid = $id");
//		
//	if(!empty($r) || !empty($rr)){
//		$ret = $r[0];
//		$ret['cart'] = $rr;
//		return $ret;
//	}
//}
    
    /*** MAILER ***/
function sendMail($to,$body,$sub,$both = false){
	try{
		$mail = new PHPMailer;
		$mail->IsSMTP();
		
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls';
		$mail->Username = 'medicinespeed2@gmail.com';
		$mail->Password = 'Medicine1';
		
		$mail->AddReplyTo('medicinespeed1@gmail.com', 'Medicine Speed Store');
		if($both) $mail->AddAddress($this->siteMail, '');
		$mail->AddAddress($to, '');
		$mail->SetFrom('medicinespeed2@gmail.com', 'Medicine Speed Store');
		$mail->Subject = $sub;
		$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
		$mail->MsgHTML($body);
		if($mail->Send()) return true;			
	} catch(phpmailerException $e){
		return false;							
	}
}

function contactUsMail($p){
	$to = $this->contactMail;
	$name = $this->esc($p['xName']);
	$email = $this->esc($p['xEmail']);
	$sub = $this->esc($p['xSubject']);
	$msg = strip_tags(trim($p['xMessage']));
	$msg = nl2br($msg);
	
	if(empty($name) || empty($email) || empty($sub) || empty($msg)) return json_encode(array('state'=>'F', 'msg'=>'Empty field(s).'));
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) return json_encode(array('state' => 'F', 'msg' => 'Your e-mail address is not valid.'));
	
	$body = file_get_contents('templates/_contactUs.html');
	$body = str_replace(
		array('%%SUB','%%BODY','%%NAME','%%EMAIL'),
		array($sub, $msg, $name, $email),
		$body
	);
	
	$sub = 'Medicine speed - '.$sub;
		
	if($this->sendMail($to,$body,$sub)) return json_encode(array('state' => 'T', 'msg' => 'Thank you for contacting us.'));
	else return json_encode(array('state' => 'F', 'msg' => 'Error sending data.'));
}
    
    function mailOrder($id, $status, $trace=false, $anote=false){
	$order = $this->getAnOrder($id);
	if(!empty($order)){
		$cart = '';
		foreach($order['cart'] as $n){
			$cart .= '<tr>
    	<td style="text-align:left; background:#e3e3e3;">'.stripslashes($n['name']).'</td>
        <td style="text-align:center; background:#e3e3e3;">'.$n['qty'].'</td>
        <td style="text-align:right; background:#e3e3e3;">'.$n['price'].'</td>
        <td style="text-align:right; background:#e3e3e3;">'.($n['qty'] * $n['price']).'</td>
    </tr>';
		}
		
		$note = '';
		if($status == 'new' || $status == '1'){
			$status = 'AWAITING PAYMENT';
			$note = '<p>Your order with the reference id '.$id.' has been placed successfully and will be <strong>shipped as soon as we receive your payment.</strong><br><strong>Please, use this reference number ('.$id.') when you make payment.</strong></p>';
		}
		elseif($status == 'pay' || $status == '2'){
			$status = 'PAYMENT VERIFIED';
			$note = "<p>Your payment on order <strong>$id</strong> has been verified. Your goods will be dispatched as soon as possible.";
		}
		elseif($status == 'send' || $status == '3'){
			$status = 'GOODS DISPATCHED';
			$note = "Your shipment code is <strong>$trace</strong>. You can trace your shipment with it.";
		}
		elseif($status == 'cancel' || $status == '9') $status = 'CANCELED';
		
		if($anote) $anote = "<div style=\"border:#95b6df 1px solid; margin-bottom:4px;\">
	<p style=\"padding:0.2em 1em 0.2em 2em; margin:0; color:#fff; background:#95b6df;\">Madicine now | Special notes</p><p>$anote</p></div>";
	
		$body = file_get_contents('templates/_cartOrderNew.html');
		$body = str_replace(
			array('%%NO','%%DATE','%%CART','%%SUB','%%SHIP','%%TOTAL','%%PAYMENT', '%%STATUS','%%NNOTE', '%%ANOTE'),
			array($id,date("F j, Y, g:i a"),$cart,$order['subtotal'],$order['ship_price'],$order['total'], payMethod($order['pay_method'], $order['total']),$status,$note,$anote),
			$body
		);
		
		$body = str_replace(
			array('%%COUNTRY','%%STATE','%%CITY','%%STR','%%ZIP'),
			array($order['country'], $order['state'], $order['city'], $order['street'], $order['zip'] ? $order['zip'] : '-'),
			$body
		);
		
		$body = str_replace(
			array('%%NAME','%%EMAIL','%%PHONE'),
			array($order['fname'].' '.$order['lname'], $order['email'], $order['phone']),
			$body
		);
	}
	return array('body' => $body, 'email' => $order['email']);
}
/*** end mailer ***/
    
    function getUserLocation($u) {
        $u = isset($_SESSION['client']) ? $_SESSION['client'] : '';
        $res = array();
        $uid = $u['id'];
        $email = $u['email'];
        $res = $this->db->getAsoc("select id,country,shipping,state,city,street,zip from location where clid = $uid");
        return $res;
    }

    function authUser($p) {
        $email = $this->esc($p['email']);
        $pass = $this->esc($p['pass']);
        if (empty($email) || empty($pass))
            return array('state' => 'F', 'msg' => 'Empty filed(s).');
        $r = $this->db->getAsoc("select id,email,fname,lname from clients where email='$email' and pass=md5('$pass') and status > 0");
        if (count($r) > 0)
            return array('state' => 'T', 'msg' => 'Login successfull.', 'id' => $r[0]['id'], 'email' => $r[0]['email'], 'fname' => $r[0]['fname'], 'lname' => $r[0]['lname']);
        else
            return array('state' => 'F', 'msg' => 'Login incorrect.');
    }

    function cartBuyNow($cart, $user, $total) {
        $uid = $user['id'];
        $ship_addr = $user['shipAddr'];
        $ship_tax = $user['shipTax'];
        $payment = $user['payMethod'];

        if (count($cart) > 0) {
            $no = $this->db->insert("insert into orders(uid,total,ship_addr,ship_price,pay_method,input,checked,dispatched) "
                    . "values (?,?,?,?,?,now(),now(),now())", array($uid, $total, $ship_addr, $ship_tax, $payment));

            foreach ($cart as $n => $p) {

                $tmp = $this->db->select("select price from items where id = '$n';");
                $pr = $tmp[0]['price'];
                $sql = "insert into ord_data(ordid, itemid, qty, price) values ($no , $n, $p, $pr);";


                $this->db->update("update items set shopped = shopped + 1 where id= ?", array($n));
                $this->db->insert($sql);
            }

		$ordArr = $this->mailOrder($no,'new');
		$body = $ordArr['body'];
		$email = $ordArr['email'];
		$this->sendMail($email,$body,"Medicine Get - new order ($no)",true);

            return array('state' => 'T', 'msg' => 'Your order has been saved.<br>You can track your order(s) from the Clinet\'s orders menu.', 'no' => $no);
        } else
            return array('state' => 'F', 'msg' => '<p>Empty cart.</p>');
    }

    function getMyOrders($user) {
        $uid = $user['id'];
        $r = $this->db->getAsoc("select id,total,ship_price,(total + ship_price) as all_tax,pay_method,status,input from orders where uid=$uid order by id DESC");
        return $r;
    }

// funkcia   za dobaviane na Address
    function newUserLocation($p, $user) {
        if (!$user)
            return json_encode(array('state' => 'F', 'msg' => 'User not logged.'));
        $country = $this->esc($p['xCountry']);
        $state = $this->esc($p['xState']);
        $city = $this->esc($p['xCity']);
        $street = $this->esc($p['xStreet']);
        $zip = $this->esc($p['xZipcode']);
        $uid = $user['id'];
        if (isset($p['chEurope']) && $p['chEurope'] == 'on')
            $shipping = 10;
        else
            $shipping = 15;

        if (empty($country) || empty($state) || empty($city) || empty($street))
            return json_encode(array('state' => 'F', 'msg' => 'Empty fields.'));
        $r = $this->db->getAsoc("select id from location where country='$country' and state='$state' and city='$city' and street='$street' and clid=$uid");
        if (count($r) > 0)
            return json_encode(array('state' => 'F', 'msg' => 'Address already exists.'));

        $this->db->insert("insert into location(clid,country,shipping,state,city,street,zip) values($uid,'$country',$shipping,'$state','$city','$street','$zip')");
        return array('state' => '6', 'msg' => 'Address created.');
    }

    // funkcia za guest user
    function newGuestUser($p) {
        $fname = $this->esc($p['xFName']);
        $lname = $this->esc($p['xLName']);
        $email = $this->esc($p['xEmail']);
        $phone = $this->esc($p['xPhone']);
        $country = $this->esc($p['xCountry']);
        $state = $this->esc($p['xState']);
        $city = $this->esc($p['xCity']);
        $street = $this->esc($p['xAddress']);
        $zip = $this->esc($p['xZipCode']);

        if (isset($p['chEurope']) && $p['chEurope'] == 'on')
            $ship_tax = 10;
        else
            $ship_tax = 15;

        if (empty($fname) || empty($lname) || empty($email) || empty($phone) || empty($country) || empty($city) || empty($street))
            return array('state' => 'F', 'msg' => 'Empty field(s).');
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            return array('state' => 'F', 'msg' => 'E-mail address is not valid.');
        $no = $this->db->insert("insert into clients(fname,lname,email,phone,registered, status) values('$fname','$lname','$email','$phone',now(),-9)");
        if ($no) {
            $ship = $this->db->insert("insert into location(clid,country,state,city,street,zip,shipping) values($no,'$country','$state','$city','$street','$zip',$ship_tax)");
        } else
            return array('state' => 'F', 'msg' => 'There is a problem saving your data.');

        if (!$ship)
            return array('state' => 'F', 'msg' => 'There is a problem saving your data.');
        $res = array(
            'id' => $no,
            'email' => $email,
            'fname' => $fname,
            'lname' => $lname,
            'shipAddr' => $ship,
            'shipTax' => $ship_tax,
            'guest' => 'OK'
        );
        return array('state' => 'T', 'msg' => 'Data saved.<br>Please, proceed with shopping cart.', 'data' => $res);
    }

// krai funkcia guest user

    function createUser($p) {
        //   function createUser($p,$human){
        $email = $this->esc($p['email']);
        $pass = $this->esc($p['pass']);
        $pass2 = $this->esc($p['pass2']);
        $fname = $this->esc($p['fname']);
        $lname = $this->esc($p['lname']);
        $phone = $this->esc($p['phone']);
//	$equation = md5($p['xEquation']);
        if (empty($email) || empty($pass) || empty($pass2) || empty($fname) || empty($lname) || empty($phone)) {
            return json_encode(array('state' => 'F', 'msg' => 'Empty filed(s). All fields are required.'));
        }
        if ($pass != $pass2)
            return json_encode(array('state' => 'F', 'msg' => 'Passwords do not match.'));
        if (strlen($pass) < 6)
            return json_encode(array('state' => 'F', 'msg' => 'Password is too weak.'));
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            return json_encode(array('state' => 'F', 'msg' => 'E-mail address is not valid.'));
//	if($equation != $human) return json_encode(array('state' => 'F', 'msg' => 'Is the equation too difficult for you?'));

        $rc = $this->db->getAsoc("select id from clients where email = '$email' and status > 0");
        if (count($rc) > 0)
            return json_encode(array('state' => 'F', 'msg' => 'Account already registered.'));

        $id = $this->db->insert("insert into clients(fname,lname,email,phone,pass,registered) values('$fname','$lname','$email','$phone',md5('$pass'),now())");

        	$body = file_get_contents('templates/_accCreate.html');
        $body = str_replace(
                array('%%FNAME', '%%LNAME', '%%EMAIL', '%%PASS'), array($fname, $lname, $email, $pass), $body
        );
	$this->sendMail($email,$body,'Medicine Get - account creation');

        return array('state' => 'T', 'msg' => 'User registered successfully.', 'id' => $id, 'email' => $email);
    }

    /*** BANNERS ***/
    function itemToBanner($id,$grp){
	if(!$grp) return json_encode(array('state'=>'F','msg'=>'No banner group created.'));
	$r = $this->db->getAsoc("select id from banners where itemid=$id");
	if(count($r) > 0) return json_encode(array('state'=>'F','msg'=>'Duplicated product.'));
	
	$this->db->insert("insert into banners(itemid,grp) values($id,'$grp')");
	return json_encode(array('state'=>'T','msg'=>'Product added to banner.'));
	
    }

    function getBanners(){
	$res = array();
//        $r = array();
//	$r = $this->db->getAsoc("select distinct(grp) from banners order by id DESC");
        $r = $this->db->getAsoc("select id, itemid, grp from banners order by id DESC");
	if(count($r) > 0){
		foreach($r as $row){
			$grp = $row['grp'];
			$b = $this->db->getAsoc("select b.id as bid, i.id, i.name, i.image, i.price from banners b join items i on b.itemid=i.id where b.grp='$grp' order by b.id");
			if(count($b) > 0) $res[$grp] = $b;
		}
		return $res;
	}else return NULL;
    }

    function deleteBanner($grp){
	$this->db->delete("delete from banners where grp='$grp'");
    }
/*** end banners ***/
    
    /*** ADM ORDERS ***/
function getOrders($p){
	$sql = '';
	$id = $this->esc($p['id']);
	$from = $this->esc($p['from']);
	$to = $this->esc($p['to']);
	$email = $this->esc($p['email']);
	
	if(!empty($from)) $sql .= " and o.input >= '$from'";
	if(!empty($to)) $sql .= " and o.input <= '$to'";
	if(!empty($id)) $sql .= ' and o.id = '. $id;
	if(!empty($email)) $sql .= " and c.email = '$email'";

	$r = $this->db->getAsoc("select o.id, c.fname, c.lname, o.total + o.ship_price as sum, o.pay_method, o.status, o.input from orders o join clients c on o.uid = c.id where 1=1 $sql order by o.status, o.id desc limit 100");
	return $r;
}

function getClients($p){
	$sql = '';
	$fname = $this->esc($p['fname']);
	$lname = $this->esc($p['lname']);
	$email = $this->esc($p['email']);
	
	if(!empty($fname)) $sql .= " and fname like '%$fname%'";
	if(!empty($lname)) $sql .= " and lname like '%$lname%'";
	if(!empty($email)) $sql .= " and email like '$email'";
	$r = $this->db->getAsoc("select id,fname,lname,email,phone,status,date(registered) as input from clients where 1=1 $sql order by fname,lname limit 100");
	return $r;
}

function getClientById($id){
	$co = $this->db->getAsoc("select count(id) as cnt, ifnull(sum(ship_price + total),0) as amount from orders where uid=$id");
	$r = $this->db->getAsoc("select id,fname,lname,email,phone,status,date(registered) as input from clients where id=$id");
	if(count($r) > 0){
		$out = $r[0];
		if(count($co) > 0){
			$out['orders'] = $co[0]['cnt'];
			$out['amount'] = $co[0]['amount'];
		}else{
			$out['orders'] = 0;
			$out['amount'] = 0.00;
		}
		
		return $out;
	}
	else return false;
}

function getAnOrder($id){
	$id = $this->esc($id);
	$r = $this->db->getAsoc("select
		o.id, o.uid, o.total as subtotal, o.ship_price, o.total + o.ship_price as total, o.pay_method, o.status as o_status, o.ship_code, o.notes, o.input, o.checked, o.dispatched,
		c.fname, c.lname, c.email, c.phone, c.status as cl_status,
		l.country, l.state, l.city, l.street, l.zip
		from orders o
		join clients c on o.uid = c.id
		join location l on o.ship_addr = l.id
		where o.id=$id");
	$rr = $this->db->getAsoc("select o.qty, o.price, o.qty * o.price as sum, i.name from ord_data o
		join items i on o.itemid = i.id
		where o.ordid = $id");
		
	if(!empty($r) || !empty($rr)){
		$ret = $r[0];
		$ret['cart'] = $rr;
		return $ret;
	}
}
function setOrderStatus($g){
	$id = $this->esc($g['id']);
	$status = $this->esc($g['status']);
	$code = $this->esc($g['code']);
	$notes = $this->esc($g['notes']);
	
	if(empty($code) && $status == 3) return json_encode(array('state' => 'F', 'msg' => 'Please provide shipping code.'));
	$r = $this->db->getAsoc("select status as s from orders where id=$id");
	if(empty($r)) return json_encode(array('state' => 'F', 'msg' => 'Order does not exists.'));
	
	if($r[0]['s'] < $status){
		if($status == 2) $this->db->update("update orders set status=$status, notes='$notes', checked=now() where id=$id");
		elseif($status == 3) $this->db->update("update orders set status=$status, notes='$notes', ship_code='$code', dispatched=now() where id=$id");
		else $this->db->update("update orders set status=$status, notes='$notes' where id=$id");
	}
	elseif($r[0]['s'] == $status) return json_encode(array('state' => 'F', 'msg' => 'The order is the same status.'));
	elseif($r[0]['s'] > $status) return json_encode(array('state' => 'F', 'msg' => 'Cannot return to previous status'));
	
	$ordArr = $this->mailOrder($id, $status,$code, $notes);
	$body = $ordArr['body'];
	$email = $ordArr['email'];
	$this->sendMail($email,$body,"Medicine Speed - order $id update",true);
		
	return json_encode(array('state' => 'T', 'msg' => 'Order updated.'));
}
    


/*** end adm orders ***/
/*** LATEST ***/
    function getLatest($lim=10){
	$r = $this->db->getAsoc("select id,name,image,left(data,70) as data from items order by id DESC limit $lim");
	return $r;
    }
        
        
 /*** END LATEST ***/       
        function myid(){
	$a = microtime(false);
	$b = substr($a,2,strlen($a)-1);
	$b = str_replace(" ", "", $b);
	return $b;
}

        
        
}//end class


