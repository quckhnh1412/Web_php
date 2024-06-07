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
                        <h1 class="text-center text-secondary mt-5 mb-3">Detail Comment Film  - <?= $name_film['tenphim'] ?></h1>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                        <th scope="col">Id</th>
                                        <!-- <th scope="col">Index</th> -->
                                        <th scope="col">Ten nguoi danh gia</th>
                                        <th scope="col">Danh gia</th>
                                        <th scope="col">#Update</th>
                                        <th scope="col">#Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach($listDataCmt as $comment){
                            ?>
                                    <tr id="<?=$comment['id']?>">
                                        <th scope="row" ><?=$comment['id']?></th>
                                        <td class="text-primary"><?=$comment['tennguoidanhgia']?></td>
                                        <td><?=$comment['danhgia']?></td>
                                        
                                        <!-- <td class="text-primary">
                                            <a href="./admin/controller/comment.php?id=<?=$comment['id']?>" onclick="">View</a>
                                        </td> -->
                                        <td class="text-primary">
                                            <a href="./admin/controller/comment.php?update-id=<?=$comment['id']?>" onclick="">Update</a>
                                        </td>
                                        <td class="text-primary">
                                            <a href="./admin/controller/comment.php?delete-id=<?=$comment['id']?>" onclick="">Delete</a>
                                        </td>
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