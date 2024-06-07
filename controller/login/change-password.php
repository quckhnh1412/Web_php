<?php
session_start();
error_reporting(0);
include_once '../../model/connection.php';
include_once '../../model/user.php';

if(!isset($_SESSION['id'])){
    header('Location: ../../index.php');
}


if(isset($_POST['username']) && isset($_POST['password'])){
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES);
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES);

    $pass = sha1($password.$username.$password);

    $trung = (isExistUser($username) == $username) ? 1 : 0; 
    
    if($trung == 0){
        //khong ton tai username
        $_SESSION['mess-error'] = "Your username is not correct.";
        //header("Location:../change-password.php");
        include_once '../../view/change-password.php';
    }
    else{
        $count = update_password($_SESSION['id'], $pass);
        if($count == 0){
            //update failed
            $_SESSION['mess-error'] = "Update failed.";
            include_once '../../view/change-password.php';
        }
        else{
            //update success
            unset($_SESSION['mess-success']);
            include_once '../../view/change-password.php';
            $_SESSION['pass'] = $pass;
            header('Location: ../../index.php');
        }
    }

    die();
}

unset($_SESSION['mess-error']);

include_once '../../view/change-password.php';


?>