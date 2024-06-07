<?php
    // phần này dùng để test user đã đăng nhập
    session_start();
    //$_SESSION['user'] = "user123";

    include "../model/connection.php";
    include_once "../model/phim_sql.php";

    if (isset($_GET['idphim'])) {
        $phim_detail = show_detail($_GET['idphim']);

        $idphim = $phim_detail['id'];
        $tenphim = $phim_detail['tenphim'];
        $theloai = $phim_detail['theloai'];
        $quocgia = $phim_detail['quocgia'];
        $dienvien = $phim_detail['dienvien'];
        $daodien = $phim_detail['daodien'];
        $ngaychieu = $phim_detail['ngaychieu'];
        $thoiluong = $phim_detail['thoiluong'];
        $noidung = $phim_detail['noidung'];
        $anhphim = $phim_detail['anhphim'];
        $trailer = $phim_detail['trailer'];
        $link = $phim_detail['link'];
        $rating = round(load_rating($idphim), 1);
    }
    else {
        header("Location: home.php");
        exit(0);
    }
    $date = date('d-m-y');
    if (isset($_SESSION['id'])) {
        $user = $_SESSION['user'];
        add_watch($_SESSION['id'],$_GET['idphim'], $date);
    }
    else {
        $user = "Ẩn danh";
        //add_watch(0,$_GET['idphim'], $date);
    }
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $tenphim ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/detail.css">
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!-- Thêm header vào tại đây -->
    <div class="header">
      <?php include_once("./header.php"); ?>
    </div>

    <div id="content">
        <div class="container">
            <div class="row justify-content-evenly">

                <div id="left-content" class="col-md-8 col-xl-8 p-2">
                    <div class="row">

                        <div class="col-12">
                            <div id="trailer" class="p-3 my-3">   
                                <iframe width="100%" height="550px" src="<?php echo $link ?>"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>

                        <div id="name" class="h3" style="color: #ff9601; font-weight: bold"><?php echo $tenphim ?></div>

                        <div class="col-12">
                            <div id="description" class="p-3 my-3">
                                <p class="h5 title-1">NỘI DUNG PHIM</p>
                                <p style="text-align: justify; margin: 0px"><?php echo $noidung ?></p>
                            </div>
                        </div>

                        <div class="col-12">
                            <p class="h5 title-1">BÌNH LUẬN</p>
                            <ul id="comments">
                                <li>
                                    <div class="row border rounded comment mx-1">
                                        <div class="col-2 col-xl-1">
                                            <img src="images/avatar.png" alt="avatar" class="rounded-circle" style="width: 100%; max-width: 50px">
                                        </div>
                                        <div class="col-10 col-xl-11">
                                            <p class="user-name"><?php echo $user ?></p>
                                            <?php
                                            if (isset($_SESSION['id'])) {
                                                //$user = $_SESSION['user'];
                                                echo '
                                            <form action="../controller/detail/binhluan_detail.php?idphim='.$idphim.'" method="post">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="danhgia" required>
                                                </div>
                                                <button class="btn btn-primary float-end my-2" title="Gửi bình luận"><i class="bi bi-send"></i> Send</button>
                                            </form>';
                                            
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </li>
                                <?php
                                    $list_comment = load_comment($idphim, 10);

                                    foreach($list_comment as $comment) {
                                        $tennguoidanhgia = $comment['tennguoidanhgia'];
                                        $danhgia = $comment['danhgia'];

                                        echo '<li>
                                                <div class="row border rounded comment mx-1">
                                                    <div class="col-2 col-xl-1">
                                                        <img src="images/avatar.png" alt="avatar" class="rounded-circle" style="width: 100%; max-width: 50px">
                                                    </div>
                                                    <div class="col-10 col-xl-11">
                                                        <p class="user-name">'.$tennguoidanhgia.'</p>
                                                        <p>'.$danhgia.'</p>
                                                    </div>
                                                </div>
                                            </li>';
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div id="right-content" class="col-md-4 col-xl-3 p-2">
                    <div class="h3 title-2">PHIM TƯƠNG TỰ</div>
                    <ul>
                        <?php
                            function displayStars($rating) {
                                $str = '';
                                for($i = 0; $i < $rating; $i++) {
                                    $str = $str.'<i class="bi bi-star-fill"></i>';
                                }
                                return $str;
                            }

                            $list_phim = load_phim($theloai, $idphim, 3);

                            if ($list_phim != null) {
                                foreach($list_phim as $phim) {
                                    $idphim = $phim['id'];
                                    $tenphim = $phim['tenphim'];
                                    $anhphim = $phim['anhphim'];
                                    $ngaychieu = $phim['ngaychieu'];
                                    $rating = round(load_rating($idphim), 0);
    
                                    echo '<li class="item-film">
                                            <div class="row">
                                            <div class="col-5">
                                                <a href="detail.php?idphim='.$idphim.'">
                                                    <img src="images/'.$anhphim.'" alt="'.$tenphim.'" title="'.$tenphim.'">
                                                </a>
                                            </div>
                                            <div class="col-7">
                                                <a href="detail.php?idphim='.$idphim.'" style="color: #fffff3; font-weight: bold; text-decoration: none">'.$tenphim.'</a>
                                                <p style="color: #fffff3">'.$ngaychieu.'</p>
                                                <div class="rating">
                                                    '.displayStars($rating).'
                                                </div>
                                            </div>
                                        </div>
                                    </li>';
                                }
                            }
                        ?>
                    </ul>
                    
                    <div class="h3 title-2">TOP PHIM HAY</div>
                    <ul>
                        <?php
                            $top_phim = load_top_phim(3);

                            if ($top_phim != null) {
                                foreach($top_phim as $phim) {
                                    $idphim = $phim['id'];
                                    $tenphim = $phim['tenphim'];
                                    $anhphim = $phim['anhphim'];
                                    $ngaychieu = $phim['ngaychieu'];
                                    $rating = round(load_rating($idphim), 0);
    
                                    echo '<li class="item-film">
                                            <div class="row">
                                            <div class="col-5">
                                                <a href="detail.php?idphim='.$idphim.'">
                                                    <img src="images/'.$anhphim.'" alt="'.$tenphim.'" title="'.$tenphim.'">
                                                </a>
                                            </div>
                                            <div class="col-7">
                                                <a href="detail.php?idphim='.$idphim.'" style="color: #fffff3; font-weight: bold; text-decoration: none">'.$tenphim.'</a>
                                                <p style="color: #fffff3">'.$ngaychieu.'</p>
                                                <div class="rating">
                                                    '.displayStars($rating).'
                                                </div>
                                            </div>
                                        </div>
                                    </li>';
                                }
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Thêm footer vào tại đây -->
    <div id="footer"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

</body>

</html>