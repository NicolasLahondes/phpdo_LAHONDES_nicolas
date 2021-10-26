<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between ">
            <h1 class="col">DeTouteBeauté.com</h1>
            <ul class="nav col col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li class="px-1"><a href="index.php?action=categories" style="text-decoration: none; color: white;">Catégories</a></li>
                <li class="px-1"><a href="index.php?action=products" style="text-decoration: none; color: white;">Products</a></li>
            </ul>
        </div>
    </div>
</header>

<body>

</body>

</html>

<?php

// autoload all well named classes from /models
spl_autoload_register(function ($class_name) {
    require_once 'models/' . $class_name . '.php';
});

$bddConn = new Connexion('localhost', 'detoutebeaute_bdd', 'root', 'nevolepasmesdonnéescindy');

if (!empty($_GET['action'])) {
    switch ($_GET['action']) {

        case "categories":
            include "controllers/categoriesController.php";
            break;

        case "categoriesModify":
            include "controllers/categoriesModifyController.php";
            break;

        case "addCategory":
            include "controllers/categoriesAddController.php";
            break;

        case "products":
            include "controllers/productsController.php";
            break;

        case "productsModify":
            include "controllers/productsModifyController.php";
            break;

        case "addProduct":
            include "controllers/productsAddController.php";
            break;
    }
}




?>