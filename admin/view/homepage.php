<?php

if($_SESSION['role'] != 2){
    header('Location: ../../index.php');
    die();
}
    include_once '../view/header.php';
?>
<style>
    .title{
        text-align: center;
    }
</style>
<main>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <?php
                include_once '../view/side-bar.php';
            ?>
            <div class="col-10 text-center">
                <h1>WELCOME TO MANAGEMENT FILM</h1>
            </div>
            
        </div>
    </div>
</main>
<?php
    include_once '../view/footer.php';
?>