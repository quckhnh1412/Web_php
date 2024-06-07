<?php
    
    //get all user information
    function getUsers(){
        global $conn;
        $sql="select * from user";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))

        {
            $data[] = $row;
        }
        return $data;
    }

    //get user by id
    function getUserById($id){
        global $conn;
        $sql="select * from user where id= ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array($id));
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetch();
        return $result;
    }
    //get id user by username
    //get user by id
    function getIdByUsername($username){
        global $conn;
        $sql="select * from user where user = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array($username));
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetch();
        return $result;
    }

	// GET ALL Comments
    function getComments(){
        global $conn;
        $sql="select binhluan.id, tennguoidanhgia, danhgia, idphim, tenphim from binhluan, phim where binhluan.idphim = phim.id order by idphim asc ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $data[] = $row;
        }
        return $data;
    }
    //get cmt theo phim
    function getCommentsByFilm(){
        global $conn;
        $sql="select binhluan.id, tennguoidanhgia, danhgia, idphim, tenphim from binhluan, phim where binhluan.idphim = phim.id group by binhluan.idphim order by idphim asc ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $data[] = $row;
        }
        return $data;
    }
    //get cmt theo phim
    function getCommentsByIdFilm($id){
        global $conn;
        $sql="select binhluan.id, tennguoidanhgia, danhgia, idphim, tenphim from binhluan, phim where binhluan.idphim = ? and binhluan.idphim = phim.id";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array($id));

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $data[] = $row;
        }
        return $data;
    }
    //get cmt by id
    function getCmtById($id){
        global $conn;
        $sql="select * from binhluan where id= ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array($id));
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetch();
        return $result;
    }

    //Get all id and name film 
    function getIdNameFilms(){
        global $conn;
        $sql="select id, tenphim from phim ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $data[] = $row;
        }
        return $data;
    }

    //get film by idphim
    function getFilmById($id){
        global $conn;
        $sql="select * from phim where id= ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array($id));
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetch();
        return $result;
    }
    //get all phim information
    function getFilms(){
        global $conn;
        $sql="select * from phim";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $data[] = $row;
        }
        return $data;
    }

    // get all categories
    function getAllCategories() {
        global $conn;
        $sql = "select distinct theloai from phim";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $data[] = $row;
        }
        return $data;
    }

    // get all film of category
    function getAllFilmsOfCategory($id) {
        global $conn;
        $sql = "SELECT * FROM phim WHERE theloai='$id'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $films = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $films[] = $row;
        }
        return $films;
    }

    // get film user watching
    function getFilmUserWatch($id) {
        global $conn;
        $sql = "SELECT p.tenphim, ct.ngayxem FROM chitietxemphim as ct, phim as p WHERE p.id = ct.idphim and ct.iduser = '$id'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $films = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $films[] = $row;
        }
        return $films;
    }

    function LoadFilmDetailById($id){
        global $conn;
        $sql= "select * from phim where id = ".$id."";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetch();
        return $result;
    }
	
?>