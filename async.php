<?php

session_name('store');
session_start();

require_once 'logic/db.class.php';
require_once 'admin/core.php';
require_once 'libs/Smarty.class.php';

$smarty = new Smarty;
$db = new DB();
//$core = new Core($db);
// $core->setCart($_SESSION['cart']);

$coreAsync = new \Core($db);

if (isset($_GET['do'])) {

    if ($_GET['do'] == 'addToCart') {
        $id = $_POST['id'];
        
        $_SESSION['cart_step'] = '1';
        
        if (isset($_SESSION['cart'][$id]))
            $_SESSION['cart'][$id] ++;
        else
            $_SESSION['cart'][$id] = 1;

        echo count($_SESSION['cart']);
    }
    if ($_GET['do'] == 'clr') {
        unset($_SESSION['cart']);
        unset($_SESSION['CART_TOTAL']);
        unset($_SESSION['cart_step']);
    }

    if ($_GET['do'] == 'del') {
        unset($_SESSION['cart'][$_POST['id']]);
    }
    if ($_GET['do'] == 'minus') {
        if (isset($_SESSION['cart'][$_POST['id']]) && $_SESSION['cart'][$_POST['id']] > 1)
            $_SESSION['cart'][$_POST['id']] --;
    }
    if ($_GET['do'] == 'plus') {
        if (isset($_SESSION['cart'][$_POST['id']]))
            $_SESSION['cart'][$_POST['id']] ++;
    }

    if ($_GET['do'] == 'addNewCat') {
        if (isset($_POST)) {
            $coreAsync->addNewCat();
        }
    }

    if ($_GET['do'] == 'updateCategory') {
        if (isset($_POST)) {
            $coreAsync->updateCategory();
        }
    }

    if ($_GET['do'] == 'addProduct') {
        if (isset($_POST)) {
            $coreAsync->addProduct($_POST);
        }
    }

    if ($_GET['do'] == 'updateProduct') {
        if (isset($_POST)) {
            $coreAsync->updateProduct();
        }
    }

    // upload image-----------------------------------------------------
    if ($_GET['do'] == 'newItemImage') {
        $val = '';
             $page = $_SERVER['HTTP_REFERER'];
            //  $page = substr($page, 17, 16);
        if (empty($_FILES['nameImg'])) {
            echo 'Моля изберете снимки.';
        } else {
            for ($i = 0; $i < count($_FILES['nameImg']['name']); $i++) {
                $pic['nameImg'] = array(
                    'name' => $_FILES['nameImg']['name'][$i],
                    'type' => $_FILES['nameImg']['type'][$i],
                    'tmp_name' => $_FILES['nameImg']['tmp_name'][$i],
                    'error' => $_FILES['nameImg']['error'][$i],
                    'size' => $_FILES['nameImg']['size'][$i]
                );
                $val .= ' [' . $_FILES['nameImg']['name'][$i] . '] ';
                $val .= $coreAsync->attachImage($_POST, $pic) . '<br>';
            }
       
            $sec = "2";
            header("Refresh: $sec; url=$page");
            echo $val;
            // sleep(20);
            return;
        }//else
    }
//}
//   .........   CART STEPS
    if ($_GET['do'] == 'login') {
        $res = $coreAsync->authUser($_POST);
        $rec_res = $coreAsync->recaptcha($p);
        if ($res['state'] == 'T' && $rec_res['success'] == 1) {
            $_SESSION['client']['id'] = $res['id'];
            $_SESSION['client']['email'] = $res['email'];
            $_SESSION['client']['fname'] = $res['fname'];
            $_SESSION['client']['lname'] = $res['lname'];
            $_SESSION['client']['logged'] = md5('yes');
            $adr = $coreAsync->getUserLocation($u);
            $_SESSION['client']['shipAddr'] = $adr['0']['id'];
            $_SESSION['client']['shipTax'] = $adr['0']['shipping'];
            $_SESSION['cart_step'] = 3;
     
        } else
            unset($_SESSION['client']);
        echo json_encode($res);
        return;
    }
    
    if($_GET['do'] == 'accCreate'){
	$res = $coreAsync->createUser($_POST);
        $rec_res = $coreAsync->recaptcha($p);
        if ($res['state'] == 'T' && $rec_res['success'] == 1) {
            $_SESSION['client'] = $res;
            $uid = array();
        $uid['id'] = $_SESSION['client']['id'];
                    $loc = $coreAsync->newUserLocation($_POST, $uid);

            $_SESSION['cart_step'] = 3;
        }
        
        $smarty->assign('CLREGISTER' , $_SESSION['client']);
    
        return;
        }
    
    if ($_GET['do'] == 'clExit') {
        unset($_SESSION['client']);
        unset($_SESSION['cart_step']);
        unset($_SESSION['cart']);
        unset($_SESSION['CART_TOTAL']);
 //       unset($_SESSION['admin']);
        echo "<p>Successfully logged out.</p>";
        return;
    }
    if ($_GET['do'] == 'newGuestUser') {
        $res = $coreAsync->newGuestUser($_POST);
        if ($res['state'] == 'T'){
            $_SESSION['client'] = $res['data'];
            $_SESSION['cart_step'] = 3;
        }
            echo json_encode($res);
            return;
    }
    if ($_GET['do'] == 'newLocation'){
        $res = '';
        $res = $coreAsync->newUserLocation($_POST, $_SESSION['client']);
         //   if ($res['state'] == 'T')
            echo json_encode($res);
    }
    
//    if ($_GET['do'] == 'shipAddr') {
//        $_SESSION['client']['shipAddr'] = $_GET['id'];
//        $_SESSION['client']['shipTax'] = $_GET['ship'];
//    }
    
    if ($_GET['do'] == 'payMethod')
        $_SESSION['client']['payMethod'] = $_GET['name'];
    
    if ($_GET['do'] == 'cartBuyNow') {
        $res = $coreAsync->cartBuyNow($_SESSION['cart'], $_SESSION['client'], $_SESSION['CART_TOTAL']);
        if ($res['state'] == 'T') {
            unset($_SESSION['cart']);
            unset($_SESSION['cart_step']);
            unset($_SESSION['client']);
            unset($_SESSION['CART_TOTAL']);
        }
        echo json_encode($res);
        return;
    }

    if ($_GET['do'] == 'nextstep') {
            if (isset($_SESSION['client']) && $_SESSION['cart_step'] < 3){
                    $_SESSION['cart_step'] = 3;
            }else{
            
            $_SESSION['cart_step'] = !isset($_POST['step']) || empty($_POST['step']) ? 1 : $_POST['step'];
            
       
        }
    }
    
    if($_GET['do'] == 'admAnOrder') echo $coreAsync->setOrderStatus($_GET);
    if($_GET['do'] == 'itemToBanner' && isset($_GET['id'])){
		$ban_grp = isset($_SESSION['banGRP']) ? $_SESSION['banGRP'] : NULL;
		echo $coreAsync->itemToBanner($_GET['id'], $ban_grp);
	}
    	if($_GET['do'] == 'newBanGrp') $_SESSION['banGRP'] = $coreAsync->myid();

  //  if($_GET['do'] == 'contactUs') echo $core->contactUsMail($_POST);
 //   if($_GET['do'] == 'myInfo') echo $core->updateMyInfo($_POST,$_SESSION);
    
  // if($_GET['do'] == 'run'); 
       	if($_GET['do'] == 'editItem') echo $coreAsync->updateProduct($_POST);

    
}

if (isset($_GET['load'])) {
    if ($_GET['load'] == 'clLogin')
        $smarty->display('login.tpl');
    
    if ($_GET['load'] == 'acc_create')
        $smarty->display('regform.tpl');
    
    if ($_GET['load'] == 'locationNew')
        $smarty->display('locationNew.tpl');
    
    if ($_GET['load'] == 'guestOrder')
        $smarty->display('userGuestData.tpl');
    
    if($_GET['load'] == 'admAnOrder' && isset($_GET['id'])){
         //       echo "gfjnfjmfgmfg";
		$res = $coreAsync->getAnOrder($_GET['id']);
		$smarty->assign("DATA", $res);
		$smarty->display('admAnOrder.tpl');
    }
    
if($_GET['load'] == 'showBanners'){
		if(isset($_GET['del'])) $coreAsync->deleteBanner($_GET['del']);
		$smarty->assign("BANNERS", $coreAsync->getBanners());
		$smarty->display('bannersAdm.tpl');
	}
        
        if($_GET['load'] == 'editItem' && isset($_GET['id'])){
		$smarty->assign("PRODUCT", $coreAsync->getItemById($_GET['id']));
		$smarty->assign("ALLCATS",$coreAsync->getCombCats());
		$smarty->display('itemEdit.tpl');
	}
        
        
        
}

    //   .......... END CART STEPS.......

   