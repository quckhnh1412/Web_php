<?php 
session_start();
include "../model/connection.php";
include "../model/phim_sql.php";

if (isset($_GET['search']) ) {
    $result = search_film($_GET['search']);
  
}
else{

    $result = get_all_film();
}



?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
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
    <title>Movie Design</title>
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
  <?php include_once("header.php"); ?>
</div>

    <div class="container ">
      <div class="row d-flex justify-content-start my-4">

        <!-- phim mới nhất thì sẽ lấy 3 phim cuối cùng được thêm vào databese -->

        <div class="theme text-center">Kết quả cho "<?php echo $_GET['search'];?>"</div>
        <hr />
      </div>
 



      <div class="row my-4 justify-content-between">
 
      
      <div class="movie-list-container my-5">
        <div class="movie-list-wrapper">
          <div class="movie-list">
            <div class="row ">
          <?php 

          for ($i = 0 ; $i <  count($result) ;$i++){
            echo '<div class="col mb-5 col-lg-2 col-md-4">';
            echo '<div class="movie-list-item">';
            echo '<img class="movie-list-item-img" src="images/'.$result[$i]['anhphim'].'" alt="" />';
            
           
            echo '</br>';
            echo '<div class="movie-title">'.$result[$i]['tenphim'].'</div><div class="center"><a class="enter" href="../view/detail.php?idphim='.$result[$i]['id'].'">CHI TIẾT</a></div></div></div>';
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
  
   
      
 
    </div>

    <script src="app.js"></script>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
</html>
