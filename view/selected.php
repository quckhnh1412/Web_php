<?php 
include "../model/connection.php";
include "../model/phim_sql.php";

if (isset($_GET['genre']) && $_GET['genre'] != 'tổng hợp') {
    $result = get_film_by_genre($_GET['genre']);
}
else{
    $result = get_all_film();
}



$results_per_page = 18;  


$number_of_result = count($result);  

//determine the total number of pages available  
$number_of_page = ceil ($number_of_result / $results_per_page);  

//determine which page number visitor is currently on  
if (!isset( $_GET['page'])){
    $page = 1;  
}else{$page = $_GET['page'];  }
    

//determine the sql LIMIT starting number for the results on the displaying page  
$page_first_result = ($page-1) * $results_per_page;  

//retrieve the selected results from database   
if (isset($_GET['genre']) && $_GET['genre'] != 'tổng hợp'){
    $query = 'SELECT *FROM phim where theloai LIKE "%'.$_GET['genre'].'%" LIMIT  '. $page_first_result . ',' . $results_per_page.' ';  
}
else{
    $query = "SELECT *FROM phim LIMIT " . $page_first_result . ',' . $results_per_page;
}

$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$result= $stmt->fetchALL();
  
//display the retrieved result on the webpage  


//display the link of the pages in URL  


?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css"/>
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
   
        @media print {
            .pageBreak {
                page-break-after: always;
            }
        }

    </style>
  </head>

  <body>
  <div class="header">
      <?php include_once("header.php"); ?>
    </div>

    <div class="container ">
      <div class="row d-flex justify-content-center my-4">

        <!-- phim mới nhất thì sẽ lấy 3 phim cuối cùng được thêm vào databese -->

        <div class="theme text-center">Phim <?php echo $_GET['genre'] ?> </div>
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

   

      <!-- phân trang ở chỗ này  -->
      <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <?php 
      for($p = 1; $p<= $number_of_page; $p++) {  

        if (isset($_GET['genre']) && $_GET['genre'] != 'tổng hợp'){
            if ($p == $page) {
                echo  '<li class="page-item active " aria-current="page" >';
                echo '<a class= "page-link" href = "selected.php?genre='.$_GET['genre'].'&page=' . $p. '">' . $p . ' </a>';  
                echo '</li>';
            }
            else{
                echo  '<li class="page-item" aria-current="page">';
                echo '<a class= "page-link" href = "selected.php?genre='.$_GET['genre'].'&page=' . $p . '">' . $p . ' </a>';  
                echo '</li>';
            }
         
           
        }
        else{
            if ($p == $page) {
                echo  '<li class="page-item active" aria-current="page">';
                echo '<a class= "page-link" href = "selected.php?genre=tổng hợp&page=' . $p . '">' . $p . ' </a>';  
                echo '</li>';
            }
            else {
                echo  '<li class="page-item" aria-current="page">';
                echo '<a class= "page-link" href = "selected.php?genre=tổng hợp&page=' . $p . '">' . $p . ' </a>';  
                echo '</li>';
            }
         
        }
        
    }  
    
    ?>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>


 
    </div>

    <script src="app.js"></script>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
</html>
