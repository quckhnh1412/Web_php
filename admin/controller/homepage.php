<?php
    session_start();
    
    if($_SESSION['role'] != 2){
        header('Location: ../../index.php');
        die();
    }
    
    require_once '../view/homepage.php';
?>