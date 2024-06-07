<?php
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
                        <div class="col-12">
                            <h1>Quản lý phim</h1>
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
                            <a class="btn btn-primary" href="../../../movie/admin/controller/film.php?add-film">
                                <i class="fas fa-plus"></i>
                                <span>Them phim moi</span>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- <h3 class="text-secondary mt-5 mb-3">List User</h3> -->
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <!-- <th scope="col">Index</th> -->
                                    <th scope="col">The loai</th>
                                    <!--                                    <th scope="col">Quoc gia</th>-->
                                    <!--                                    <th scope="col">Dien vien</th>-->
                                    <!--                                    <th scope="col">Dao dien</th>-->
                                    <!--                                    <th scope="col">Rating</th>-->
                                    <!--                                    <th scope="col">Thoi luong</th>-->
                                    <!--                                    <th scope="col">Noi dung</th>-->
                                    <th scope="col">#Detail</th>
                                    <!-- <th scope="col">#Update</th>
                                    <th scope="col">#Delete</th> -->
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = 0;
                                foreach($categories as $category){
                                    ?>
                                    <tr >
                                        <th scope="row" ><?= $i++ ?></th>
                                        <td class="text-primary"><?php print $category["theloai"] ?></td>

                                        <!-- controller -->
                                        <td class="text-primary">
                                            <a href="./admin/controller/category.php?id=<?= $category['theloai'] ?>" onclick="">View</a>
                                        </td>
<!--                                        <td class="text-primary">-->
<!--                                            <a href="../../../movie/admin/controller/category.php?update-id=2" onclick="">Update</a>-->
<!--                                        </td>-->
<!--                                        <td class="text-primary">-->
<!--                                            <a href="../../../movie/admin/controller/film.php?delete-id=3" onclick="">Delete</a>-->
<!--                                        </td>-->

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