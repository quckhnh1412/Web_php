<?php
session_start();
include "model/connect.php";
include_once "model/user.php";
unset($_SESSION['id']);
unset($_SESSION['user']);
unset($_SESSION['role']);
unset($_SESSION['pass']);
unset($_SESSION['sdt']);
unset($_SESSION['mail']);
header('location: ../../index.php') ;
?>