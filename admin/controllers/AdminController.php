<?php

/**
 * AdminController.php
 * 
 * Controller backend site(/admin/)
 */
// import models
include_once 'admin/models/CategoriesModel.php';
include_once 'admin/models/ProductsModel.php';
include_once 'admin/models/OrdersModel.php';
include_once 'admin/models/PurchaseModel.php';

//$smarty->setTemplateDir(TemplateAdminPrefix);
//$smarty->assign('templateWebPath', TemplateAdminWebPath);



function indexAction($smarty, $db) {
//include 'admin/models/CategoriesModel.php';
    // get all parent categories
    $rsCategories = getAllMainCategories($db);

    $smarty->assign('pageTitle', 'Admin site');
    $smarty->assign('rsCategories', $rsCategories);

}

function addNewCatAction($smarty, $db) {

    $catName = $_POST['newCategoryName'];
    $catParenId = $_POST['generalCatId'];

    $res = insertCat($db, $catName, $catParenId);

    if ($res) {
        $resData['success'] = 1;
        $resData['message'] = 'Category is created';
    } else {
        $resData['success'] = 0;
        $resData['message'] = 'Error adding category';
    }

    echo json_encode($resData);
    return;
}

/**
 * Page admin category
 * 
 * @param type $smarty
 */
function categoryAction($smarty, $db) {
    $rsMainCategories = getAllMainCategories($db);
//    $rsAllCategories = getAllCategories($db);

    $smarty->assign('pageTitle', 'Admin site');
//    $smarty->assign('rsAllCategories', $rsAllCategories);
    $smarty->assign('rsMainCategories', $rsMainCategories);
}

function productsAction($smarty, $db) {
    $rsCategories = getAllMainCatsWithChildren($db);
    $rsProducts = getProducts($db);

    $smarty->assign('pageTitle', 'Admin site');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);
}
