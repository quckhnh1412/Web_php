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

//giao dien chi tiet cmt
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $listDataCmt = getCommentsByIdFilm($id);
    $comment = getCmtById($id);
    
    $name_film = getFilmById($id);
    require "../view/detail-comment.php";

    die();
}

//giao dien add user
if(isset($_GET['add-comment'])){
    $dataIdNameFilms = getIdNameFilms();
    $dataIdNameUsers = getUsers();
    require "../view/add-comment.php";
    
    die();
}
//add user vao he thong
if(!isset($_GET['update']) && isset($_POST['users']) && isset($_POST['comment']) && isset($_POST['films'])){

    $users=htmlspecialchars($_POST['users'],ENT_QUOTES);
    $comment=htmlspecialchars($_POST['comment'],ENT_QUOTES);
    $films=intval(htmlspecialchars($_POST['films'],ENT_QUOTES));

    addCmt($users, $comment, $films);
    header('Location: ./comment.php');

    die(); 
}

//giao dien update user
if(isset($_GET['update-id'])){
    $id = $_GET['update-id'];
    $_SESSION['id-cmt'] = $_GET['update-id'];
    $cmt = getCmtById($id);
    $idUser = intval(getIdByUsername($cmt['tennguoidanhgia'])['id']);
    $nameFilm = getFilmById($cmt['idphim'])['tenphim'];
    $dataIdNameFilms = getIdNameFilms();
    $dataIdNameUsers = getUsers();

    $_SESSION['id-user'] = $id;

    require "../view/update-comment.php";
    die();
}

//update user vao he thong
if(isset($_GET['update']) && isset($_POST['users']) && isset($_POST['comment']) && isset($_POST['films'])){
    $id = intval($_SESSION['id-cmt']);
    $users=htmlspecialchars($_POST['users'],ENT_QUOTES);
    $comment=htmlspecialchars($_POST['comment'],ENT_QUOTES);
    $films=intval(htmlspecialchars($_POST['films'],ENT_QUOTES));

    echo "id".$id;
    echo "name".$users;
    echo "cmt:".$comment;
    echo "id film".$films;

    $count = updateCmt($users, $comment, $films, $id);

    if($count == 1){
        header('Location:./comment.php');
    }
    else{
        header('Location:./comment.php?update=failed');
    }
    //header('Location: ./comment.php');

    die(); 
}

// //update info user vao he thong
// if(isset($_GET['update']) && isset($_POST['username']) && $_POST['password'] && $_POST['email'] && $_POST['phone']){

//     $id = intval($_SESSION['id-user']);
//     $username=htmlspecialchars($_POST['username'],ENT_QUOTES);
//     $password=htmlspecialchars($_POST['password'],ENT_QUOTES);
//     $email=htmlspecialchars($_POST['email'],ENT_QUOTES);
//     $phone= intval(htmlspecialchars($_POST['phone'],ENT_QUOTES));

//     $pass = sha1($password.$username.$password);

//     $count = updateUser($username, $pass, $email, $phone, $id);

//     if($count == 1){
//         $_SESSION['mess-error'] = "";
//         unset($_SESSION['id-user']);

//         header('Location: ./user.php');
//     }
//     else{
//         $_SESSION['mess-error'] = "Update failed";
//         header("Location: ./admin/controllers/user.php?update-id=".$_SESSION['id-user']);
//     }
    
//     die(); 
// }

//delete user
if(isset($_GET['delete-id'])){
    $id = $_GET['delete-id'];

    $num_del_user = deleteCmt($id);

    // $_SESSION['id-user'] = $id;

    // include_once "../view/update-user.php";
    header('Location: ./comment.php');
    die();
}

// $listComments = getCommentsByFilm();
$listComments = getFilms();
require '../view/comment.php';
?>
