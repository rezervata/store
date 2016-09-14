<?php

session_name('store');
session_start();

require_once 'libs/Smarty.class.php';
require_once 'logic/db.class.php';
require_once 'logic/client.class.php';
require_once 'logic/error.php';

// Bat svetko in da house

$smarty = new Smarty;
$db = new DB;

//$data = $logic->select("show tables");
//print_r($data);

if(isset($_GET['clExit'])) unset($_SESSION['client']);

if (isset($_GET['cat'])) {
    $data = $db->select("select p.name, p.url, p.price from products p join category c on p.id_cat = c.id_cat where c.url= ?", array($_GET['cat']));
    $smarty->assign('CATPRODUCTS', $data);
}
if (isset($_GET['product'])) {
    $data = $db->select("select id_prod,name,opis,proizvoditel,price,price_2 from products where url= ?", array($_GET['product']));
    $smarty->assign('PRODUCT', $data);
}

if (!empty($_POST)) {
    $res = $db->select("select name, mail, pass from clients where mail= ? and pass= ? ", array($_POST['mail'], md5($_POST['pass'])));

    if (!empty($res)) {
        if ($_POST['mail'] == $res[0]['mail'] && md5($_POST['pass']) == $res[0]['pass']) {
            $_SESSION['client']['logged'] = true;
            $_SESSION['client']['name'] = stripslashes($res[0]['name']);

        } else
            $smarty->assign('ERR', 'Login incorrect.');
    } else
        $smarty->assign('ERR', 'Login incorrect.');
}

if (isset($_GET['adminlogin'])) {
    if (!empty($_POST)) {
        $res = $db->select("select user, pass from users where user= ? and pass= ? ", array($_POST['user'], $_POST['pass']));

        if (!empty($res)) {
            if ($_POST['user'] == $res[0]['user'] && $_POST['pass'] == $res[0]['pass']) {
                $_SESSION['admin'] = 555;
            } else
                $smarty->assign('ERR', 'Login incorrect.');
        } else
            $smarty->assign('ERR', 'Login incorrect.');
    }
}

if (isset($_GET['register']) && !empty($_POST)) {

    $client= new Client($_POST, $db);
    var_dump($client);
    $result = $client->newClient($_POST,$db);
    if($result == 1000){
        $_SESSION['client']['name'] = $_POST['name'];
        $_SESSION['client']['logged'] = true;
    }
    
    $smarty->assign('CLREGISTER', $result);
}

$smarty->assign('CATEGORIES', $db->select("select id_cat,url,name from category order by name"));
$smarty->assign('TOPPRODUCT', $db->select("select id_prod,url,name, opis, proizvoditel, price from products order by name"));
$smarty->display('home.tpl');



//function newClient($data = array(), $db){
//    if(empty($data['name']) || empty($data['mail']) || empty($data['phone']) || empty($data['pass']) || empty($data['pass2'])) return 1001;
//    if($data['pass'] != $data['pass2']) return 1002;
//    
//  
//    $check = $db->select("select cli_id from clients where mail = ?", array($data['mail']));
//    if(!empty($check)) return 1004;
// 
//    
//    $res = $db->insert("insert into clients (name, mail, phone, pass) values ( ? , ? , ? , ?) ", array($_POST['name'], $_POST['mail'], $_POST['phone'], md5($_POST['pass'])));
//    if(!$res) return 1003;
// 
//    return 1000;
//}

print_r($_SESSION);
?>
