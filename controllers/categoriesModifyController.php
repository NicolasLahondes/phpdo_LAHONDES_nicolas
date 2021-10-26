<?php

var_dump($_GET);
$categories = new Categories();
// Select one Category
if (!empty($_GET) && empty($_GET['delete']) && !empty($_GET['id'])) {
    $categories = Categories::takeOneCategory($bddConn, $_GET['id']);
}

require_once "views/categoriesModify.php";
