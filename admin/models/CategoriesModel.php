<?php


/*
 * Model for table categories.
 * 
 * 
 */

//$smarty = new \Smarty();
//$db = new \DB();


/**
 * Get children category for categories $catId
 * 
 * 
 * @param integer $catId ID category
 * @return array children categories
 */
function getChildrenForCat($catId, $db) {
    $sql = "SELECT * "
            . "FROM categories "
            . "WHERE parent_id = '{$catId}'";

//    include '../config/db.php';
//
//    $rs = mysqli_query($link, $sql);
//    mysqli_close($link);

    $rs = $db->select($sql);


    return createSnartyRsArray($rs);
}

/**
 * Return parent category and children category
 * 
 * @return array category
 */
function getAllMainCatsWithChildren($db) {
    $sql = "SELECT * "
            . "FROM folders "
            . "WHERE parent = 0";
//$sql = "select id_cat,url,name from category WHERE parent_id = 0 order by name";
//    include '../config/db.php';
//
//    $rs = mysqli_query($link, $sql);
//    mysqli_close($link);


    $rs = $db->select($sql);



    
//    $smartyRs = array();
//    while ($row = $rs->fetch_assoc()) {
//
//        $rsChildren = getChildrenForCat($row['id'], $db);
//
//        if ($rsChildren) {
//            $row['children'] = $rsChildren;
//        }
//
//        $smartyRs[] = $row;
//    }

    return $rs;
}

/**
 * Get children category
 * 
 * @param integer $catId
 * @return array children category
 */
function gerCatById($catId) {
    $catId = intval($catId);
    $sql = "SELECT * FROM categories WHERE id = '{$catId}'";

    include '../config/db.php';

    $rs = mysqli_query($link, $sql);
    mysqli_close($link);

    return mysqli_fetch_assoc($rs);
}

/**
 * Get all parent categories
 * 
 * @return array categories
 */
function getAllMainCategories($db) {

    

    $sql = "SELECT * "
            . "FROM folders "
            . "WHERE parent = 0";



    $rs = $db->select($sql);
    
 

    return $rs;
}

/**
 * Add new category
 * 
 * @param string $catName name category
 * @param integer $catParentId ID parent category
 * @return integer id new category
 */
function insertCat($db, $catName, $catParentId = 0) {

    // create query
    $sql = "INSERT INTO "
            . "category (`parent_id`, `name`, `url`) "
            . "VALUES ('{$catParentId}', '{$catName}', '{$catName}')";
//
//    include '../config/db.php';
//
//    // action query
//    mysqli_query($link, $sql);

    // return id added category
    $id = $db->insert($sql);

//    mysqli_close($link);

    return $id;
}

function getAllCategories($db) {

    $sql = "SELECT * "
            . "FROM categories "
            . "ORDER BY parent_id ASC";

//    include '../config/db.php';

    $rs = mysqli_query($link, $sql);

    mysqli_close($link);
    
  

    if (!$rs) {
            return FALSE;
        }

        $smartyRs = array();
        while ($row = $rs->fetch_assoc()) {

            $smartyRs[] = $row;
        }

        return $smartyRs;

    return $smartyRs;
}
