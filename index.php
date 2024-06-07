<?php 
include "./model/connection.php";
include "./model/phim_sql.php";
$top_film = load_top_phim(3);
$result_animation = get_film_by_genre('hoạt hình');
$result_action = get_film_by_genre('Hành động');
$result3 = get_newest_film(5);
$result = get_all_film();
session_start();


?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
      rel="stylesheet"
    />
   
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/font-awesome.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="view/css/style.css">
    <title>NETFILM</title>
    <style>
     body {
        background-color: #424242;
      }
    
      hr {
        width: 1312px;
        height: 0px;
        left: 64px;
        top: 155px;
        color: #ffffff;
        border: 3px solid #ffffff;
      }
    </style>
  </head>

  <body>
    <div class="header">
      <?php include_once("view/header.php"); ?>
    </div>
 
    <div class="container ">
      <div class="row d-flex justify-content-center my-4">

        <!-- phim mới nhất thì sẽ lấy 3 phim cuối cùng được thêm vào databese -->

        <div class="theme text-center">Phim Mới Nhất</div>
        <hr />
      </div>
      <div class="row d-flex justify-content-center mb-4">
        <div
          id="carouselExampleControls"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              
              <a class = "carousel-img" href="view/detail.php?idphim=<?php echo $result3[0]['id']; ?>"> <img src="view/images/<?php echo $result3[0]['banner']; ?>" class="d-block w-100" alt="..." /></a>
              <div class="movie-carousel-name"><?php echo $result3[0]['tenphim']; ?></div>
            </div>
            <div class="carousel-item">
            <a class = "carousel-img" href="view/detail.php?idphim=<?php echo $result3[1]['id']; ?>"> <img src="view/images/<?php echo $result3[1]['banner']; ?>" class="d-block w-100" alt="..." /></a>
            <div class="movie-carousel-name"><?php echo $result3[1]['tenphim']; ?></div>
          </div>
            <div class="carousel-item">
            <a class = "carousel-img" href="view/detail.php?idphim=<?php echo $result3[2]['id']; ?>"> <img src="view/images/<?php echo $result3[2]['banner']; ?>" class="d-block w-100" alt="..." /></a>
            <div class="movie-carousel-name"><?php echo $result3[2]['tenphim']; ?></div>
          </div>
          <div class="carousel-item">
            <a class = "carousel-img" href="view/detail.php?idphim=<?php echo $result3[3]['id']; ?>"> <img src="view/images/<?php echo $result3[3]['banner']; ?>" class="d-block w-100" alt="..." /></a>
            <div class="movie-carousel-name"><?php echo $result3[3]['tenphim']; ?></div>
          </div>
          <div class="carousel-item">
            <a class = "carousel-img" href="view/detail.php?idphim=<?php echo $result3[4]['id']; ?>"> <img src="view/images/<?php echo $result3[4]['banner']; ?>" class="d-block w-100" alt="..." /></a>
            <div class="movie-carousel-name"><?php echo $result3[4]['tenphim']; ?></div>
          </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="next"
          >
            <span
              class="carousel-control-next-icon"
              aria-hidden="true"
              style="font-size: larger"
            ></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>



      <div class="row my-4 justify-content-between">
        <div class="col-2 theme">Phim lẻ</div>
        <div class="col-3 text-white select-all d-flex justify-content-end m-2">
          <a href="view/selected.php?genre=tổng hợp" style="color: rgb(255, 255, 255)">
            Xem tất cả
            <span>
              <svg
                width="15"
                height="27"
                viewBox="0 0 15 34"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M13.7877 16.0083L2.65426 0.751032C2.28941 0.251493 1.69888 0.252184 1.33473 0.75357C0.970884 1.25496 0.697405 2.86543 1.06226 3.36544L10.5624 16.9167L1.06228 29.4801C0.562269 30.3506 0.0622559 32.0916 1.33473 33.0786C1.51724 33.3298 1.7565 33.4556 1.99559 33.4556C2.23418 33.4556 2.47227 33.3308 2.6546 33.0811L13.788 17.8244C13.9637 17.5842 14.0624 17.2573 14.0624 16.9167C14.0621 16.5762 13.963 16.249 13.7877 16.0083Z"
                  fill="white"
                />
                <path
                  d="M13.7877 16.0083L2.65426 0.751032C2.28941 0.251493 1.69888 0.252184 1.33473 0.75357C0.970884 1.25496 0.697405 2.86543 1.06226 3.36544L10.5624 16.9167L1.06228 29.4801C0.562269 30.3506 0.0622559 32.0916 1.33473 33.0786C1.51724 33.3298 1.7565 33.4556 1.99559 33.4556C2.23418 33.4556 2.47227 33.3308 2.6546 33.0811L13.788 17.8244C13.9637 17.5842 14.0624 17.2573 14.0624 16.9167C14.0621 16.5762 13.963 16.249 13.7877 16.0083Z"
                  fill="white"
                />
              </svg>
              <svg
                width="15"
                height="27"
                viewBox="0 0 15 34"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M13.7877 16.0083L2.65426 0.751032C2.28941 0.251493 1.69888 0.252184 1.33473 0.75357C0.970884 1.25496 0.697405 2.86543 1.06226 3.36544L10.5624 16.9167L1.06228 29.4801C0.562269 30.3506 0.0622559 32.0916 1.33473 33.0786C1.51724 33.3298 1.7565 33.4556 1.99559 33.4556C2.23418 33.4556 2.47227 33.3308 2.6546 33.0811L13.788 17.8244C13.9637 17.5842 14.0624 17.2573 14.0624 16.9167C14.0621 16.5762 13.963 16.249 13.7877 16.0083Z"
                  fill="white"
                />
                <path
                  d="M13.7877 16.0083L2.65426 0.751032C2.28941 0.251493 1.69888 0.252184 1.33473 0.75357C0.970884 1.25496 0.697405 2.86543 1.06226 3.36544L10.5624 16.9167L1.06228 29.4801C0.562269 30.3506 0.0622559 32.0916 1.33473 33.0786C1.51724 33.3298 1.7565 33.4556 1.99559 33.4556C2.23418 33.4556 2.47227 33.3308 2.6546 33.0811L13.788 17.8244C13.9637 17.5842 14.0624 17.2573 14.0624 16.9167C14.0621 16.5762 13.963 16.249 13.7877 16.0083Z"
                  fill="white"
                />
              </svg>
            </span>
          </a>
        </div>
        <hr />
      </div>
      <div class="movie-list-container my-5">
        <div class="movie-list-wrapper">
          <div class="movie-list">
            <div class="row ">
          <?php 

          for ($i = count($result)-1 ; $i> count($result) - 6;$i--){
            echo '<div class="col mb-5 col-lg-2 col-md-4">';
            echo '<div class="movie-list-item">';
            echo '<img class="movie-list-item-img" src="view/images/'.$result[$i]['anhphim'].'" alt="" />';
            
           
            echo '</br>';
            echo '<div class="movie-title">'.$result[$i]['tenphim'].'</div><div class="center"><a class="enter" href="view/detail.php?idphim='.$result[$i]['id'].'">CHI TIẾT</a></div></div></div>';
          }
          for ($i = count($result)-6 ; $i > count($result)- 13;$i--){
            echo '<div class="col mb-5 col-lg-2 col-md-4">';
            echo '<div class="movie-list-item">';
            echo '<img class="movie-list-item-img" src="view/images/'.$result[$i]['anhphim'].'" alt="" />';
            
           
            echo '</br>';
            echo '<div class="movie-title">'.$result[$i]['tenphim'].'</div><div class="center"><a class="enter" href="view/detail.php?idphim='.$result[$i]['id'].'">CHI TIẾT</a></div></div></div>';
          }
          
 
         
            ?>
            </div>
    
        </div>
          
        </div>
      </div>
      <div class="movie-list-container my-5">
        <div class="movie-list-wrapper">
          <div class="movie-list">
            <?php

          ?>
          </div>
          <!--<i class="fas fa-chevron-right arrow"></i> -->
        </div>
      </div>
      <div class="row my-4 justify-content-between">
        <div class="col-2 theme">Phim hành động</div>
        <div class="col-3 text-white select-all d-flex justify-content-end m-2">
          <a href="view/selected.php?genre=hành động" >
            Xem tất cả
            <span>
              <svg
                width="15"
                height="27"
                viewBox="0 0 15 34"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M13.7877 16.0083L2.65426 0.751032C2.28941 0.251493 1.69888 0.252184 1.33473 0.75357C0.970884 1.25496 0.697405 2.86543 1.06226 3.36544L10.5624 16.9167L1.06228 29.4801C0.562269 30.3506 0.0622559 32.0916 1.33473 33.0786C1.51724 33.3298 1.7565 33.4556 1.99559 33.4556C2.23418 33.4556 2.47227 33.3308 2.6546 33.0811L13.788 17.8244C13.9637 17.5842 14.0624 17.2573 14.0624 16.9167C14.0621 16.5762 13.963 16.249 13.7877 16.0083Z"
                  fill="white"
                />
                <path
                  d="M13.7877 16.0083L2.65426 0.751032C2.28941 0.251493 1.69888 0.252184 1.33473 0.75357C0.970884 1.25496 0.697405 2.86543 1.06226 3.36544L10.5624 16.9167L1.06228 29.4801C0.562269 30.3506 0.0622559 32.0916 1.33473 33.0786C1.51724 33.3298 1.7565 33.4556 1.99559 33.4556C2.23418 33.4556 2.47227 33.3308 2.6546 33.0811L13.788 17.8244C13.9637 17.5842 14.0624 17.2573 14.0624 16.9167C14.0621 16.5762 13.963 16.249 13.7877 16.0083Z"
                  fill="white"
                />
              </svg>
              <svg
                width="15"
                height="27"
                viewBox="0 0 15 34"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M13.7877 16.0083L2.65426 0.751032C2.28941 0.251493 1.69888 0.252184 1.33473 0.75357C0.970884 1.25496 0.697405 2.86543 1.06226 3.36544L10.5624 16.9167L1.06228 29.4801C0.562269 30.3506 0.0622559 32.0916 1.33473 33.0786C1.51724 33.3298 1.7565 33.4556 1.99559 33.4556C2.23418 33.4556 2.47227 33.3308 2.6546 33.0811L13.788 17.8244C13.9637 17.5842 14.0624 17.2573 14.0624 16.9167C14.0621 16.5762 13.963 16.249 13.7877 16.0083Z"
                  fill="white"
                />
                <path
                  d="M13.7877 16.0083L2.65426 0.751032C2.28941 0.251493 1.69888 0.252184 1.33473 0.75357C0.970884 1.25496 0.697405 2.86543 1.06226 3.36544L10.5624 16.9167L1.06228 29.4801C0.562269 30.3506 0.0622559 32.0916 1.33473 33.0786C1.51724 33.3298 1.7565 33.4556 1.99559 33.4556C2.23418 33.4556 2.47227 33.3308 2.6546 33.0811L13.788 17.8244C13.9637 17.5842 14.0624 17.2573 14.0624 16.9167C14.0621 16.5762 13.963 16.249 13.7877 16.0083Z"
                  fill="white"
                />
              </svg> </span
          ></a>
        </div>
        <hr />
      </div>
      <div class="movie-list-container my-5">
        <div class="movie-list-wrapper">
          <div class="movie-list">
            <div class="row">
            <?php 
            for ($i = count($result_action)-1 ; $i> count($result_action) - 6;$i--){
              echo '<div class="col mb-5 col-lg-2 col-md-4">';
              echo '<div class="movie-list-item">';
              echo '<img class="movie-list-item-img" src="view/images/'.$result_action[$i]['anhphim'].'" alt="" />';
              
             
              echo '</br>';
              echo '<div class="movie-title">'.$result_action[$i]['tenphim'].'</div><div class="center"><a class="enter" href="view/detail.php?idphim='.$result_action[$i]['id'].'">CHI TIẾT</a></div></div></div>';
            }
            for ($i = count($result_action)-6 ; $i > count($result_action)- 13;$i--){
              echo '<div class="col mb-5 col-lg-2 col-md-4">';
              echo '<div class="movie-list-item">';
              echo '<img class="movie-list-item-img" src="view/images/'.$result_action[$i]['anhphim'].'" alt="" />';
              
             
              echo '</br>';
              echo '<div class="movie-title">'.$result_action[$i]['tenphim'].'</div><div class="center"><a class="enter" href="view/detail.php?idphim='.$result_action[$i]['id'].'">CHI TIẾT</a></div></div></div>';
            }
            
         
            ?>
            </div>
          </div>
      
        </div>
        <div class="movie-list-wrapper my-5">
          <div class="movie-list">
            
          </div>
          <i class="fas fa-chevron-right arrow"></i>
        </div>
      </div>
      <div class="row my-4 justify-content-between">
        <div class="col-2 col-sm-1 theme">Phim hoạt hình</div>
        <div class="col-3 text-white select-all d-flex justify-content-end m-2">
          <a href="view/selected.php?genre=hoạt hình" style="color: white">
            Xem tất cả
            <span>
              <svg
                width="15"
                height="27"
                viewBox="0 0 15 34"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M13.7877 16.0083L2.65426 0.751032C2.28941 0.251493 1.69888 0.252184 1.33473 0.75357C0.970884 1.25496 0.697405 2.86543 1.06226 3.36544L10.5624 16.9167L1.06228 29.4801C0.562269 30.3506 0.0622559 32.0916 1.33473 33.0786C1.51724 33.3298 1.7565 33.4556 1.99559 33.4556C2.23418 33.4556 2.47227 33.3308 2.6546 33.0811L13.788 17.8244C13.9637 17.5842 14.0624 17.2573 14.0624 16.9167C14.0621 16.5762 13.963 16.249 13.7877 16.0083Z"
                  fill="white"
                />
                <path
                  d="M13.7877 16.0083L2.65426 0.751032C2.28941 0.251493 1.69888 0.252184 1.33473 0.75357C0.970884 1.25496 0.697405 2.86543 1.06226 3.36544L10.5624 16.9167L1.06228 29.4801C0.562269 30.3506 0.0622559 32.0916 1.33473 33.0786C1.51724 33.3298 1.7565 33.4556 1.99559 33.4556C2.23418 33.4556 2.47227 33.3308 2.6546 33.0811L13.788 17.8244C13.9637 17.5842 14.0624 17.2573 14.0624 16.9167C14.0621 16.5762 13.963 16.249 13.7877 16.0083Z"
                  fill="white"
                />
              </svg>
              <svg
                width="15"
                height="27"
                viewBox="0 0 15 34"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M13.7877 16.0083L2.65426 0.751032C2.28941 0.251493 1.69888 0.252184 1.33473 0.75357C0.970884 1.25496 0.697405 2.86543 1.06226 3.36544L10.5624 16.9167L1.06228 29.4801C0.562269 30.3506 0.0622559 32.0916 1.33473 33.0786C1.51724 33.3298 1.7565 33.4556 1.99559 33.4556C2.23418 33.4556 2.47227 33.3308 2.6546 33.0811L13.788 17.8244C13.9637 17.5842 14.0624 17.2573 14.0624 16.9167C14.0621 16.5762 13.963 16.249 13.7877 16.0083Z"
                  fill="white"
                />
                <path
                  d="M13.7877 16.0083L2.65426 0.751032C2.28941 0.251493 1.69888 0.252184 1.33473 0.75357C0.970884 1.25496 0.697405 2.86543 1.06226 3.36544L10.5624 16.9167L1.06228 29.4801C0.562269 30.3506 0.0622559 32.0916 1.33473 33.0786C1.51724 33.3298 1.7565 33.4556 1.99559 33.4556C2.23418 33.4556 2.47227 33.3308 2.6546 33.0811L13.788 17.8244C13.9637 17.5842 14.0624 17.2573 14.0624 16.9167C14.0621 16.5762 13.963 16.249 13.7877 16.0083Z"
                  fill="white"
                />
              </svg> </span
          ></a>
        </div>
        <hr />
      </div>
      <div class="movie-list-container my-5">
        <div class="movie-list-wrapper">
          <div class="row">
            <?php 
              for ($i = count($result_animation)-1 ; $i> count($result_animation) - 6;$i--){
                echo '<div class="col mb-5 col-lg-2 col-md-4">';
                echo '<div class="movie-list-item">';
                echo '<img class="movie-list-item-img" src="view/images/'.$result_animation[$i]['anhphim'].'" alt="" />';
                
               
                echo '</br>';
                echo '<div class="movie-title">'.$result_animation[$i]['tenphim'].'</div><div class="center"><a class="enter" href="view/detail.php?idphim='.$result_animation[$i]['id'].'">CHI TIẾT</a></div></div></div>';
              }
              for ($i = count($result_animation)-6 ; $i > count($result_animation)- 13;$i--){
                echo '<div class="col mb-5 col-lg-2 col-md-4">';
                echo '<div class="movie-list-item">';
                echo '<img class="movie-list-item-img" src="view/images/'.$result_animation[$i]['anhphim'].'" alt="" />';
                
               
                echo '</br>';
                echo '<div class="movie-title">'.$result_animation[$i]['tenphim'].'</div><div class="center"><a class="enter" href="view/detail.php?idphim='.$result_action[$i]['id'].'">CHI TIẾT</a></div></div></div>';
              }
              
            ?>
            
          </div>
      
        </div>
        <div class="movie-list-wrapper my-5">
          <div class="movie-list">
            
          </div>
      
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
</html>
