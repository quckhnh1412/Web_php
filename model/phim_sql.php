<?php
    function show_detail($id) {
        global $conn;
        $sql = "SELECT * FROM phim WHERE id = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetch();
        return $result;
    }

    
    function load_phim($theloai, $id, $limit) {
        global $conn;
        $count = 0;
        $tlarr = explode(", ", $theloai);
        $final = array();
        foreach ($tlarr as $tl) {
            $sql = "SELECT * FROM phim WHERE theloai LIKE '%$tl%' AND id != $id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchALL();
            foreach ($result as $phim) {
                if (!in_array($phim, $final)) {
                    array_push($final, $phim);
                    $count = $count + 1;
                    if ($count == $limit) {
                        return $final;
                    }
                }
            }
        }
        return $final;
    }
    
    function search_film($name){
        global $conn;
        $sql= 'select * from phim where tenphim LIKE "%'.$name.'%"';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result= $stmt->fetchALL();
        return $result;
    }

    function get_all_film(){
        global $conn;
        $sql= 'select * from phim ';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result= $stmt->fetchALL();
        return $result;
    }

    function get_film_by_genre($genre){
        global $conn;
        $sql= 'select * from phim where theloai LIKE "%'.$genre.'%"';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result= $stmt->fetchALL();
        return $result;
    }

    function get_newest_film($limit){
        global $conn;
        $sql= 'SELECT * FROM phim ORDER BY id DESC LIMIT '.$limit;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result= $stmt->fetchALL();
        return $result;
    }

    function load_top_phim($limit) {
        global $conn;
        $sql = "SELECT phim.id, phim.tenphim, phim.anhphim,phim.banner, phim.ngaychieu FROM phim, danhgia WHERE phim.id = danhgia.idphim GROUP BY phim.id ORDER BY AVG(danhgia.sosao) DESC LIMIT $limit";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchALL();
        return $result;
    }

    function load_comment($idphim, $limit) {
        global $conn;
        $sql = "SELECT * FROM binhluan WHERE idphim = $idphim ORDER BY id DESC LIMIT $limit";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchALL();
        return $result;
    }
    
    function add_comment($tennguoidanhgia, $danhgia, $idphim) {
        global $conn;
        $sql = "INSERT INTO binhluan (tennguoidanhgia, danhgia, idphim) VALUES ('$tennguoidanhgia', '$danhgia', '$idphim')";
        $conn->exec($sql);
    }

    function load_user_rating($tennguoidanhgia, $idphim) {
        global $conn;
        $sql= "SELECT sosao FROM danhgia WHERE idphim = $idphim AND tennguoidanhgia = '$tennguoidanhgia' ORDER BY id DESC LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchColumn();
        return $result;
    }

    function load_rating($idphim) {
        global $conn;
        $sql = "SELECT AVG(sosao) FROM danhgia WHERE idphim = $idphim";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchColumn();
        return $result;
    }

    function add_rating($tennguoidanhgia, $idphim, $sosao) {
        global $conn;
        if (load_user_rating($tennguoidanhgia, $idphim) == null)
            $sql= "INSERT INTO danhgia (tennguoidanhgia, idphim, sosao) VALUES ('$tennguoidanhgia', '$idphim', '$sosao')";
        else
            $sql = "UPDATE danhgia SET sosao = $sosao WHERE tennguoidanhgia = '$tennguoidanhgia' AND idphim = '$idphim'";
        $conn->exec($sql);
    }
    function add_watch($iduser, $idphim, $ngayxem){
        global $conn;
        $sql= "INSERT INTO chitietxemphim (iduser,idphim,ngayxem) VALUES ('$iduser','$idphim','$ngayxem')";
        $conn->exec($sql);
    }
?>