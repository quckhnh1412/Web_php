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
        $banner = $phim_detail['banner'];
        $anhphim = $phim_detail['anhphim'];
        $trailer = $phim_detail['trailer'];
        $rating = round(load_rating($idphim), 1);
    }
    else {
        header("Location: home.php");
        exit(0);
    }

    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
    }
    else {
        $user = "Ẩn danh";
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

                        <div id="poster" class="col-md-6 col-xl-5">
                            <img src="images/<?php echo $anhphim ?>" alt="<?php echo $tenphim ?>" title="<?php echo $tenphim ?>">
                        </div>

                        <div class="col-md-6 col-xl-7">
                            <div id="name" class="h3" style="color: #ff9601; font-weight: bold; text-align: center"><?php echo $tenphim ?></div>

                            <div id="infomation" style="margin-top: 20px; padding: 15px">
                                <ul>
                                    <li><span class="attr">Thời lượng: </span><?php echo $thoiluong.' phút' ?></li>
                                    <li><span class="attr">Diễn viên: </span><?php echo $dienvien ?></li>
                                    <li><span class="attr">Đạo diễn: </span><?php echo $daodien ?></li>
                                    <li><span class="attr">Ngày chiếu: </span><?php echo $ngaychieu ?></li>
                                    <li><span class="attr">Quốc gia: </span><?php echo $quocgia ?></li>
                                    <li><span class="attr">Thể loại: </span><?php echo $theloai ?></li>
                                    <li><span class="attr">Đánh giá: </span><?php if ($rating != 0) echo $rating.'/5 sao'; else echo 'Chưa đánh giá';?></li>
                                </ul>
                            </div>

                            <div style="margin-top: 20px">
                                <a id="watch" class="btn btn-danger" style = "width: 130px;border-radius: 3px;" href="watch.php?idphim=<?php echo $idphim ?>">
                                    <svg width="20" height="20" viewBox="0 0 32 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.70977 0.000246567C1.2542 -0.00773261 0.815067 0.178245 0.492752 0.515209C0.171039 0.852172 -0.00684689 1.31129 0.000201777 1.78759V35.2247C-0.00508187 35.8563 0.313697 36.4418 0.835027 36.7604C1.35694 37.0783 2.00154 37.0802 2.5252 36.7641L31.1407 20.0455C31.7477 19.6889 32.0823 18.9788 31.9826 18.2582C31.9103 17.7138 31.5986 17.2356 31.1407 16.9655L2.5252 0.246976C2.27805 0.0929158 1.99744 0.00822873 1.70977 0.000246567Z" fill="white"/>
                                    </svg>
                                Xem phim
                                </a>
                            </div>

                            <?php
                                if ($user != "Ẩn danh") {
                                    $rating = load_user_rating($user, $idphim);
                                }
                                else {
                                    $rating = 0;
                                }
                            ?>

                            <form action="../controller/detail/danhgia_detail.php?idphim=<?php echo $idphim ?>" method="post">
                                <button style="background-color: #1c1c1c; border: none; margin-top: 20px">
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" <?php if ($rating == 5) echo 'checked = "checked"'?>>
                                        <label for="star5" title="5 sao">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" <?php if ($rating == 4) echo 'checked = "checked"'?>>
                                        <label for="star4" title="4 sao">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" <?php if ($rating == 3) echo 'checked = "checked"'?>>
                                        <label for="star3" title="3 sao">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" <?php if ($rating == 2) echo 'checked = "checked"'?>>
                                        <label for="star2" title="2 sao">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" <?php if ($rating == 1) echo 'checked = "checked"'?>>
                                        <label for="star1" title="1 sao">1 star</label>
                                    </div>
                                </button>
                            </form>
                        </div>

                        <div class="col-12">
                            <div id="description" class="p-3 my-3">
                                <p class="h5 title-1">NỘI DUNG PHIM</p>
                                <p style="text-align: justify; margin: 0px"><?php echo $noidung ?></p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div id="trailer" class="p-3 my-3">
                                <p class="h5 title-1">TRAILER</p>
                                <iframe width="100%" height="450px" src="<?php echo $trailer ?>"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
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