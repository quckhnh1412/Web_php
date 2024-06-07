<?php
function deleteChitietxemphimByUser($id){
    global $conn;
    $sql= "delete from chitietxemphim where iduser = ?";
    $stmt= $conn->prepare($sql);
    $stmt->execute(array($id));
    return $stmt->rowCount();
}

function deleteUser($id){
    global $conn;
    $sql= "delete from user where id = ?";
    $stmt= $conn->prepare($sql);
    $stmt->execute(array($id));
    return $stmt->rowCount();
}

function deleteCmt($id){
    global $conn;
    $sql= "delete from binhluan where id = ?";
    $stmt= $conn->prepare($sql);
    $stmt->execute(array($id));
    return $stmt->rowCount();
}

function deleteFilm($id) {
    global $conn;
    $sql = "DELETE FROM phim WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array($id));
    return $stmt->rowCount();
}

?>