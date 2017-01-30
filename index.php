<?php

// error_reporting(0);

session_name('store');
session_start();

require_once 'libs/Smarty.class.php';
require_once 'logic/db.class.php';
require_once 'logic/client.class.php';
require_once 'admin/core.php';
require_once 'logic/error.php';
include_once 'config/config.php';
include_once 'config/mineFunctions.php';    // Some function
include_once 'admin/controllers/AdminController.php';
// require_once 'logic/Image.class.php';

$smarty = new \Smarty();
$db = new \DB();
$user = new \Client(array(), $db);
$core = new \Core($db);


function toSEO($str) {
    $str = str_replace('%', '%25', $str);
//	$str = str_replace('+','%2B',$str);
    return str_replace(' ', '-', $str);
}



if (isset($_GET['adminExit'])) {
    unset($_SESSION['admin']);
 
}
//--------------------------------------------

if (isset($_GET['cat'])) {
    $data = $db->select("select i.id, i.name, i.image, i.price, i.mdesc from items i join folders f on i.cat = f.id where f.name= ?", array($_GET['cat']));
    $smarty->assign('CATPRODUCTS', $data);
}

if (isset($_GET['product'])) {
    $data = $db->select("select id, name, image, mkeys, price, mdesc, data from items where name= ?", array($_GET['product']));
    $smarty->assign('PRODUCT', $data);
}

if (isset($_GET['adminlogin']) && !empty($_POST)) {
    $result = $user->authAdm($_POST, $db);

    if ($result == 1000) {
        $_SESSION['admin']['name'] = $_POST['user'];
        $_SESSION['admin']['logged'] = true;
    }

    $smarty->assign('ADMINLOGIN', $result);
}
//..........orders.......
if(isset($_GET['myorders']) && isset($_SESSION['client'])){
	$smarty->assign("ORDERS",$core->getMyOrders($_SESSION['client']));
}
//......end orders.......

//............KOSHNICA.............

$cart = '';
if (isset($_GET['vCart'])) {
    if (isset($_GET['step']))
        $_SESSION['cart_step'] = $_GET['step'];
    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : '';
   
    $out = array();
    $total = 0;
    if (is_array($cart)) {
        foreach ($cart as $id => $qty) {
            $tmp = $db->select("select id, name, price from items where id=?", array($id));

           
            $out[$id]['id'] = $tmp[0]['id'];
            $out[$id]['name'] = $tmp[0]['name'];
            $out[$id]['price'] = $tmp[0]['price'];
            $out[$id]['qty'] = $qty;
            $out[$id]['sum'] = $qty * $tmp[0]['price'];
            $total += $qty * $tmp[0]['price'];
            $_SESSION['CART_TOTAL'] = $total;
        }
    }   
    
    if (isset($_SESSION['cart_step']) && $_SESSION['cart_step'] == 3 && isset($_SESSION['client'])) {
        $loc = $core->getUserLocation($_SESSION['client']);
        $_SESSION['client']['shipTax'] = $loc[0]['shipping'];
        $smarty->assign("LOCATIONS", $loc);
    }

    $smarty->assign('CART', $out);
    $smarty->assign('CART_TOTAL', $total);
   
}

//...................KOSHNICA END .................

if (isset($_GET['adminCategories'])) {
    $rsCategories = $core->indexAction();
    $rsMainCategories = $core->categoryAction();

    $smarty->assign('pageTitle', 'Admin site');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsMainCategories', $rsMainCategories);
}

if (isset($_GET['addNewCat'])) {
    $core->addNewCatAction();
}

if (isset($_GET['adminProducts'])) {

    $rsCategories = $core->categoryAction();
    $rsProducts = $core->products();

    $smarty->assign('pageTitle', 'Admin site');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts['data']);
    $smarty->assign('PAGES', $rsProducts['pages']);
}

$smarty->assign('CATEGORIES', $db->select("select id, metakeys, name from folders order by name"));
$smarty->assign('TOPPRODUCT', $db->select("select * from items order by id limit 10"));

//...........SEARCH............
if (isset($_GET['search'])) {

    if (!empty($_GET['search'])) {
        $in = $_GET['search'];
        $res = $db->select("select i.* from
                            items i
                            join folders f on i.cat = f.id
                            where
                            i.name LIKE '%$in%' OR i.make LIKE '%$in%' OR i.mkeys LIKE '%$in%' OR i.mdesc LIKE '%$in%' OR i.data LIKE '%$in%' OR f.name LIKE '%$in%'
                            OR f.metakeys like '%$in%'");

        $smarty->assign('CATPRODUCTS', $res);
    }
}
//..........END SEARCH............

if(isset($_GET['admOrders'])){
	$pdata = empty($_POST) ? NULL : $_POST;
	$smarty->assign("ORDERS", $core->getOrders($pdata));
}

if(isset($_GET['admClients'])){
	$pdata = empty($_POST) ? NULL : $_POST;
	$smarty->assign("CLIENTS", $core->getClients($pdata));
}


$smarty->assign("BANNERS", $core->getBanners());
$smarty->assign("LAST5", $core->getLatest());


$smarty->display('home.tpl');

print_r($_SESSION);
