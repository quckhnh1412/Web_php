<?php
// function updateUser($user,$pass,$email,$sdt,$id){
//     global $conn;

//     $sql = "UPDATE user SET `user`='$user',pass='$pass',email='$email',sdt='$sdt' WHERE id=".$id;
// 	echo $sql;
//      // Prepare statement
//     $stmt = $conn->prepare($sql);
//      // execute the query
//     $stmt->execute();

//     $count = $stmt->rowCount();

//     return $count;
// }
function updateCmt($users, $comment, $films, $id){
    global $conn;

    $sql = "UPDATE binhluan SET tennguoidanhgia = ? , danhgia = ? , idphim = ? WHERE id = ?";
	echo $sql;
     // Prepare statement
    $stmt = $conn->prepare($sql);
     // execute the query
    $stmt->execute(array($users, $comment, $films, $id));

    $count = $stmt->rowCount();

    return $count;
}

function updateUser($user,$pass,$email,$sdt,$id){
    global $conn;

    $sql = "UPDATE user SET `user`='$user',pass='$pass',email='$email',sdt='$sdt' WHERE id=".$id;
	echo $sql;
     // Prepare statement
    $stmt = $conn->prepare($sql);
     // execute the query
    $stmt->execute();

    $count = $stmt->rowCount();

    return $count;
}

function updateFilm($tenphim, $tuoi, $theloai, $quocgia, $dienvien, $daodien, $ngaychieu, $thoiluong, $noidung, $trangthai, $banner, $anhphim, $trailer, $id) {
    global $conn;
    $sql = "UPDATE phim SET `tenphim`='$tenphim',tuoi='$tuoi',theloai='$theloai', quocgia='$quocgia',dienvien='$dienvien',daodien='$daodien',ngaychieu='$ngaychieu',thoiluong='$thoiluong',noidung='$noidung',trangthai='$trangthai',banner='$banner',anhphim='$anhphim',trailer='$trailer' WHERE id='$id'";
    echo $sql;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->rowCount();
}
function UpdateFilmInformation($id,$tenphim,$tuoi,$theloai,$quocgia,$dienvien,$daodien,$thoiluong,$ngaychieu,$noidung,$anhphim,$trangthai){
    global $conn;
    $sql="update phim set tenphim = '".$tenphim."', tuoi = ".$tuoi.", theloai = '".$theloai."', quocgia = '".$quocgia."',dienvien= '".$dienvien."', daodien = '".$daodien."', thoiluong = ".$thoiluong.", ngaychieu = '".$ngaychieu."', noidung = '".$noidung."',anhphim = '".$anhphim."', trangthai = ".$trangthai." where id = ".$id."";
    $conn->exec($sql);
}

?>