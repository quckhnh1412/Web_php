<?php

    session_start();
    require_once '../model/get.php';
    require_once '../model/add.php';
    require_once '../model/delete.php';
    require_once '../model/update.php';
    require_once '../../model/connection.php';


if ($_SESSION['role'] != 2) {
        header("Location: ../../index.php");
        die();
    }

    // hien cac phim cung the loai
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $pieces = explode("%20", $id);
        $category = implode(" ", $pieces);
        $_SESSION["theloai"] = $category;
        $films = getAllFilmsOfCategory($category);
        include_once "../view/film_of_category.php";
        die();
    }


    // giao dien chi tiet cac the loai
    $categories = getAllCategories();
    require_once "../view/category.php";



?>