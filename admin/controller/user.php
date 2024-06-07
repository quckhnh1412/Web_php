<?php
    session_start();

    if($_SESSION['role'] != 2){
        header('Location: ../../index.php');
        die();
    }
    
    require_once '../model/get.php';
    require_once '../model/add.php';
    require_once '../model/delete.php';
    require_once '../model/update.php';
    require_once '../../model/connection.php';

    //giao dien chi tiet user
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $user = getUserById($id);
        $listFilmOfUser = getFilmUserWatch($id);

        include_once "../view/detail-user.php";

        die();
    }

    //giao dien add user
    if(isset($_GET['add-user'])){
        include_once "../view/add-user.php";

        die();
    }
    //add user vao he thong
    if(!isset($_GET['update']) && isset($_POST['username']) && $_POST['password'] && $_POST['email'] && $_POST['phone']){

        $username=htmlspecialchars($_POST['username'],ENT_QUOTES);
        $password=htmlspecialchars($_POST['password'],ENT_QUOTES);
        $email=htmlspecialchars($_POST['email'],ENT_QUOTES);
        $phone= intval(htmlspecialchars($_POST['phone'],ENT_QUOTES));

        //echo $username;

        //ma hoa//
        $pass = sha1($password.$username.$password);

        $trung = (isExistUser($username) == $username) ? 1 : 0;  

        if($trung == 0){
            addUser($username, $pass, $email, $phone, 1);
            $_SESSION['mess-error'] = "";
            header('Location: ./user.php');
        }
        else{
            $_SESSION['mess-error'] = "User already exists";
            header('Location: ./user.php?add-user');
        }
        die(); 
    }

    //giao dien update user
    if(isset($_GET['update-id'])){
        $id = $_GET['update-id'];

        $user = getUserById($id);

		$_SESSION['id-user'] = $id;

        include_once "../view/update-user.php";
        die();
    }

    //update info user vao he thong
    if(isset($_GET['update']) && isset($_POST['username']) && $_POST['password'] && $_POST['email'] && $_POST['phone']){

        $id = intval($_SESSION['id-user']);
        $username=htmlspecialchars($_POST['username'],ENT_QUOTES);
        $password=htmlspecialchars($_POST['password'],ENT_QUOTES);
        $email=htmlspecialchars($_POST['email'],ENT_QUOTES);
        $phone= intval(htmlspecialchars($_POST['phone'],ENT_QUOTES));

        $pass = sha1($password.$username.$password);

        $count = updateUser($username, $pass, $email, $phone, $id);

        if($count == 1){
            $_SESSION['mess-error'] = "";
            unset($_SESSION['id-user']);

            header('Location: ./user.php');
        }
        else{
            $_SESSION['mess-error'] = "Update failed";
            header("Location: ./user.php?update-id=".$_SESSION['id-user']);
        }
        
        die(); 
    }

    //delete user
    if(isset($_GET['delete-id'])){
        $id = $_GET['delete-id'];
        deleteChitietxemphimByUser($id);
        $num_del_user = deleteUser($id);

		// $_SESSION['id-user'] = $id;

        // include_once "../view/update-user.php";
        header('Location: ./user.php');
        die();
    }

    $listUsers = getUsers();
    
    require_once '../view/user.php';
?>