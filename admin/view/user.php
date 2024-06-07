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
                        <h1>Quản lý User</h1>
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
                        <a class="btn btn-primary" href="./admin/controller/user.php?add-user">
                            <i class="fas fa-plus"></i>
                            <span>Add New User</span>
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
                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">#Detail</th>
                                        <th scope="col">#Update</th>
                                        <th scope="col">#Delete</th>
                                    </tr>
                            </thead>
                        <tbody>
                        <?php
                            foreach($listUsers as $user){
                        ?>
                                <tr id="<?=$user['user']?>">
                                    <th scope="row" ><?=$user['id']?></th>
                                    <td class="text-primary"><?=$user['user']?></td>
                                    <td><?=$user['email']?></td>
                                    <td>+84 <?=$user['sdt']?></td>
                                    <td class="text-primary">
                                        <a href="./admin/controller/user.php?id=<?=$user['id']?>" onclick="">View</a>
                                    </td>
                                    <td class="text-primary">
                                        <a href="./admin/controller/user.php?update-id=<?=$user['id']?>" onclick="">Update</a>
                                    </td>
                                    <td class="text-primary">
                                        <a href="./admin/controller/user.php?delete-id=<?=$user['id']?>" onclick="">Delete</a>
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
    </div>
</main>
<?php
    include_once '../view/footer.php';
?>