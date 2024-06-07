<?php

function addUser($user,$pass,$email,$sdt,$role){
    global $conn;
    $sql = "INSERT INTO user (user,pass,email,sdt,role) VALUES (?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute(array($user,$pass,$email,$sdt,$role));

    echo $sql;
}

function isExistUser($user){
    global $conn;
    $sql="select * from user where user = '".$user."' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result['user'];
}

function addCmt($tennguoidanhgia, $danhgia, $idphim){
    global $conn;
    $sql= "INSERT INTO binhluan (tennguoidanhgia,danhgia,idphim) VALUES (?, ?, ?)";

    echo $sql;
    $stmt = $conn->prepare($sql);
    $stmt->execute(array($tennguoidanhgia, $danhgia, $idphim));
    
}


function addFilm($tenphim, $tuoi, $theloai, $quocgia, $dienvien, $daodien, $ngaychieu,  $thoiluong, $noidung, $trangthai, $banner, $anhphim, $trailer) {
    global $conn;
    $sql = "insert into phim (tenphim, tuoi, theloai, quocgia, dienvien, daodien, ngaychieu, thoiluong, noidung, trangthai, banner, anhphim, trailer) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->execute(array($tenphim, $tuoi, $theloai, $quocgia, $dienvien, $daodien, $ngaychieu,$thoiluong, $noidung, $trangthai, $banner, $anhphim, $trailer));
    echo $sql;
}

function isExistFilm($film) {
    global $conn;
    $sql = "select * from phim where tenphim='".$film."'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result["tenphim"];
}

?>