<?php
    session_start();

    if($_SESSION['role'] != 2){
        header('Location: ../../index.php');
    }
    header('Location: ./controller/homepage.php');
?>