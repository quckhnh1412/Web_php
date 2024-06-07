<?php
session_start();
include_once '../../model/connection.php';
include_once '../../model/user.php';


if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['phone']) ){
    $username = trim(htmlspecialchars($_POST['username'], ENT_QUOTES));
    $password = trim(htmlspecialchars($_POST['password'], ENT_QUOTES));
    $email = trim(htmlspecialchars($_POST['email'], ENT_QUOTES));
    $phone = trim(htmlspecialchars($_POST['phone'], ENT_QUOTES));

    $pass = sha1($password.$username.$password);

    $trung = (isExistUser($username) == $username) ? 1 : 0;  

    //echo $trung;

    if($trung == 0){
        add_user($username, $pass, $email, $phone, 1);
        $_SESSION['mess-error'] = "";

        $loaduser=checkuser($username,$pass);
        $_SESSION['id']=$loaduser['id'];
        $_SESSION['user']=$loaduser['user'];
        $_SESSION['pass']=$loaduser['pass'];
        $_SESSION['role']=$loaduser['role'];
        $_SESSION['sdt']=$loaduser['sdt'];
        $_SESSION['mail']= $loaduser['email'];

        header('location: ../../index.php');
    }
    else{
        $_SESSION['mess-error'] = "User already exists";
        include_once '../../view/signup.php';
    }

    die();
}

$_SESSION['mess-error'] = "";

include_once '../../view/signup.php'
?>