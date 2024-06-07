<?php

    session_start();

    if ($_SESSION['role'] != 2) {
        header("Location: ../../index.php");
        die();
    }

    // goi cac model
    require_once '../model/get.php';
    require_once '../model/add.php';
    require_once '../model/delete.php';
    require_once '../model/update.php';
    require_once '../../model/connection.php';

    // giao dien them phim moi  ----------------------------
    if (isset($_GET["add-film"])) {
        include_once "../view/add-film.php";
        die();
    }

    // check info them phim
    if (isset($_GET['add']) && isset($_POST['tenphim']) && $_POST['tuoi'] && $_POST['theloai'] && $_POST['quocgia']&& $_POST['theloai']&& $_POST['dienvien']&& $_POST['daodien']&& $_POST['ngaychieu']&& $_POST['thoiluong']&& $_POST['noidung']&& $_POST['trangthai']&& $_POST['trailer']) {
        $tenphim = htmlspecialchars($_POST["tenphim"], ENT_QUOTES);
        $tuoi = intval(htmlspecialchars($_POST['tuoi'],ENT_QUOTES));
        $theloai = htmlspecialchars($_POST["theloai"], ENT_QUOTES);
        $quocgia = htmlspecialchars($_POST["quocgia"], ENT_QUOTES);
        $dienvien = htmlspecialchars($_POST["dienvien"], ENT_QUOTES);
        $daodien = htmlspecialchars($_POST["daodien"], ENT_QUOTES);
        $ngaychieu = htmlspecialchars($_POST["ngaychieu"], ENT_QUOTES);
        $thoiluong = intval(htmlspecialchars($_POST['thoiluong'],ENT_QUOTES));
        $noidung = htmlspecialchars($_POST["noidung"], ENT_QUOTES);
        $trangthai = number_format($_POST["trangthai"]);

        $anhphim ='../../view/images/'.$_FILES['anhphim']['name'];
        move_uploaded_file($_FILES['anhphim']['tmp_name'],$anhphim);
        $anhphim = $_FILES['anhphim']['name'];

        $banner = '../../view/images/'.$_FILES["banner"]["name"];
        move_uploaded_file($_FILES["banner"]["tmp_name"], $banner);
        $banner = $_FILES["banner"]["name"];


        $trailer = htmlspecialchars($_POST["trailer"], ENT_QUOTES);

        $check = isExistFilm($tenphim) == $tenphim ? 1: 0;

        addFilm($tenphim, $tuoi, $theloai, $quocgia, $dienvien, $daodien, $ngaychieu, $thoiluong, $noidung, $trangthai, $banner, $anhphim, $trailer);
        header("Location: ./film.php");
        //die();

        echo "sos";
    }
    // ------------------------------------------------------------------------------------

    // giao dien danh sach cac phim
    if (isset($_GET["id"])) {
        $phim = getFilmById($_GET["id"]);
        include_once "../view/film_detail.php";
        die();
    }

    //---------------------------------
    // update
    if (isset($_GET["update-id"])) {
        $id = $_GET['update-id'];
        $phim = getFilmById($id);
        $_SESSION["update-film-id"] = $id;
        include_once "../view/update-film.php";
        die();
    }
    // update info
    if (isset($_GET['update-film']) && isset($_POST['tenphim']) && $_POST['tuoi'] && $_POST['theloai'] && $_POST['quocgia']&& $_POST['theloai']&& $_POST['dienvien']&& $_POST['daodien']&& $_POST['ngaychieu']&& $_POST['thoiluong']&& $_POST['noidung']&& $_POST['trangthai'] && $_POST['trailer']) {
        $id = intval($_SESSION["update-film-id"]);
        $idphim = $_POST['id'];
        $tenphim = htmlspecialchars(($_POST['tenphim']), ENT_QUOTES);
        $tuoi = $_POST['tuoi'];
        $theloai = $_POST['theloai'];
        $quocgia = $_POST['quocgia'];
        $dienvien = $_POST['dienvien'];
        $daodien = $_POST['daodien'];
        $thoiluong = $_POST['thoiluong'];
        $ngaychieu = $_POST['ngaychieu'];

        $path='../../img/'.$_FILES['anhphim']['name'];
        move_uploaded_file($_FILES['anhphim']['tmp_name'],$path);

        $anhphim=$_FILES['anhphim']['name'];
        $noidung=$_POST['noidung'];
        $trangthai=number_format($_POST['trangthai']);

        $banner = "../../img/".$_FILES["banner"]["name"];
        move_uploaded_file($_FILES["banner"]["tmp_name"], $banner);
        $banner = $_FILES["banner"]["name"];

        $phim = LoadFilmDetailById($idphim);
        if ($anhphim == null) {
            $anhphim = $phim['anhphim'];
        }

        if ($banner == null) {
            $banner = $phim["banner"];
        }

        $rowCount = updateFilm($tenphim,$tuoi,$theloai,$quocgia,$dienvien,$daodien,$ngaychieu,$thoiluong,$noidung,$trangthai,$banner,$anhphim,$trailer,$id);
        if ($rowCount == 1) {
            $_SESSION["mess-error"] = "";
            unset($_SESSION["update-film-id"]);

            header("Location: ./film.php");
        }
        else {
            $_SESSION["mess-error"] = "Update failed";
            header("Location: ./film.php?update-id=".$_SESSION["update-film-id"]);
        }

        die();
    }

    // delete film
    if (isset($_GET["delete-id"])) {
        $id = $_GET["delete-id"];
        $num_del_film = deleteFilm($id);
        header("Location: ../controller/film.php");
        die();
    }

    #
    $listFilms = getFilms();
    require_once "../view/film.php";

?>