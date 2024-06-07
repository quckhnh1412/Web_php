<?php
if($_SESSION['role'] != 2){
    header('Location: ../../index.php');
    die();
}
    include_once '../view/header.php';
?>
<main>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <?php
                include_once '../view/side-bar.php';
            ?>
            <div class="col-10">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <h1 class="text-center text-secondary mt-5 mb-3">Detail User</h1>
                        <h3>Thông tin user </h3>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th scope="row">Id:</th>
                                    <td><?= $user['id'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Username:</th>
                                    <td><?= $user['user'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Email:</th>
                                    <td><?= $user['email'] ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Phone:</th>
                                    <td>+84 <?= $user['sdt'] ?></td>
                                </tr>
                            </tbody>
                            
                        </table>
                    </div>
                    
                </div>
                <div class="row justify-content-center">
                    <div class="col-8">
                        <h3>Chi tiết xem phim </h3>
                        <table class="table table-striped">
                            <thead>
                                        <tr>
                                            <th scope="col">Ten Phim</th>
                                            <th scope="col">Ngay xem</th>
                                        </tr>
                                </thead>
                            <tbody>
                            <?php
                                foreach($listFilmOfUser as $film){
                            ?>
                                    <tr>
                                        <th scope="row" ><?=$film['tenphim']?></th>
                                        <td class="text-primary"><?=$film['ngayxem']?></td>
                                    </tr>
                            <?php
                                }
                            ?>
                        
                            </tbody>
                                
                            </table>
                    </div>
                        
                </div>
            </div>
        </div>
    </div>
</main>
<?php
    include_once '../view/footer.php';
?>