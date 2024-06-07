<?php
session_start();
error_reporting(0);

include_once '../../model/connection.php';
include_once '../../model/user.php';


if(isset($_POST['username']) && isset($_POST['password'])){
    $username = trim(htmlspecialchars($_POST['username'], ENT_QUOTES));
    $password = trim(htmlspecialchars($_POST['password'], ENT_QUOTES));

    $pass = sha1($password.$username.$password);

    $checkinfo = checkuser($username,$pass);

    if($checkinfo['role'] == 1 || $checkinfo['role'] == 2){
        $_SESSION['id']=$checkinfo['id'];
        $_SESSION['user']=$checkinfo['user'];
        $_SESSION['pass']=$checkinfo['pass'];
        $_SESSION['role']=$checkinfo['role'];
        $_SESSION['sdt']=$checkinfo['sdt'];
        $_SESSION['mail']= $checkinfo['email'];
    }

    

    //echo "Role: ".$_SESSION['role'];

    if($checkinfo['role']==2){
        header('location: ../../admin/index.php');
    }elseif($checkinfo['role']==1){
        header('location: ../../index.php?success-user') ;
    }else{
        $_SESSION['mess-error'] = "Login failed";
        include_once '../../view/login.php';
        //header('location: login.php') ;
    }

    die();
}

unset($_SESSION['mess-error']);

include_once '../../view/login.php';
?>