<?php

var_dump($_POST);
var_dump($_GET);
// Add a trainee
if (!empty($_POST) && !empty($_GET['added'])) {
    $array = array('title' => $_POST['title'], 'description' => $_POST['description'], 'picture' => $_POST['picture'], 'price' => $_POST['price']);
    Products::addProduct($bddConn, "article", $array);
}

$arrayProducts = Products::listProducts($bddConn, "article", "", 'products', '', '', '', '');

require_once 'views/productView.php';
