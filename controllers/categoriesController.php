<?php

// Add a trainee
if (!empty($_POST) && !empty($_GET['added'])) {
    $array = array('title' => $_POST['title'], 'description' => $_POST['description'], 'picture' => $_POST['picture']);
    Categories::addCategory($bddConn, "category", $array);
}

// Modifying a Category
if (!empty($_POST) && !empty($_POST['id']) && !empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['picture'])) {
    $array = array('id' => $_POST['id'], 'title' => $_POST['title'], 'description' => $_POST['description'], 'picture' => $_POST['picture']);
    Categories::modifyCategories($bddConn, $array);
}


// Delete a trainee
if (!empty($_GET) && !empty($_GET['delete'])) {
    Categories::deleteCategory($bddConn, $_GET['id'], "category");
    header('Location:index.php?action=categories');
}

// get and set the list of all categories into an associative array
$arrayCategories = Categories::listCategories($bddConn, "category", "", 'categories', '', '', '', '');

// Call the categories view
require_once 'views/categoriesView.php';
