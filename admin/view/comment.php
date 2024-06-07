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
                // add side bar
                include_once '../view/side-bar.php';
            ?>
            <div class="col-10">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <h1>Quản lý Bình luận</h1>
                    </div>
                </div>				
                <div class="row pb-4">
                    <div class="col-10">
                        <form action="#" method="post">
                            <input type="text" name="seach_table" id="search_table" class="col_6" placeholder="Tìm kiếm user">
                            <input type="submit" id="submit_search_table" onclick="javascript:alert('Bạn vừa submit form')" style="display: none;">
                        </form>
                    </div>
                    <div class="add_data col-2">
                        <a class="btn btn-primary" href="./admin/controller/comment.php?add-comment">
                            <i class="fas fa-plus"></i>
                            <span>Thêm bình luận</span>
                        </a>
                    </div>
                </div>
            <div class="row">
                <div class="col-12">
                    <!-- <h3 class="text-secondary mt-5 mb-3">List User</h3> -->
                    <table class="table table-striped table-hover">
                            <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <!-- <th scope="col">Index</th> -->
                                        <!-- <th scope="col">Ten nguoi danh gia</th>
                                        <th scope="col">Danh gia</th> -->
                                        <!-- <th scope="col">ID Phim</th> -->
                                        <th scope="col">Tên Phim</th>
                                        <th scope="col">#Detail</th>
                                        <!-- <th scope="col">#Update</th>
                                        <th scope="col">#Delete</th> -->
                                    </tr>
                            </thead>
                        <tbody>
                        <?php
                            foreach($listComments as $comment){
                        ?>
                                <tr id="<?=$comment['id']?>">
                                    <th scope="row" ><?=$comment['id']?></th>
                                    <!-- <td class="text-primary">//$comment['tennguoidanhgia'];</td>
                                    <td> //$comment['danhgia'];</td> -->
                                    <!-- <td><?php //$comment['idphim']?></td> -->
                                    <td><?= $comment['tenphim']?></td>
                                    <td class="text-primary">
                                        <a href="./admin/controller/comment.php?id=<?=$comment['id']?>" onclick="">View</a>
                                    </td>
                                    <!-- <td class="text-primary">
                                        <a href="./admin/controller/comment.php?update-id=<?=$comment['id']?>" onclick="">Update</a>
                                    </td>
                                    <td class="text-primary">
                                        <a href="./admin/controller/comment.php?delete-id=<?=$comment['id']?>" onclick="">Delete</a>
                                    </td> -->
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
    </div>
</main>
<?php
    include_once '../view/footer.php';
?>