<style>
    .head{
        max-height: 160px;
        height: 60px !important;
    }
</style>
<main>
    <?php
    require_once "header.php";
    echo '
    <style>
        .li_film{
            color: #fff;
        }
    </style>
    ';
    ?>
    <article class="col_11">
        <div class="head col_12">
            <div class="name_action col_10">
                <h1 class="foot_font">Cap Nhat Phim</h1>
            </div>
            <div class="map_action col_2">
                <a href="admin.php?contro=home">
                    <h1>Trang chủ</h1>
                </a>
                <i class="fas fa-chevron-right"></i>
                <a href="admin.php?contro=film">
                    <h3>Quản lý phim</h3>
                </a>
            </div>
            <div class="col_12">
                <!-- <div class="search_table">
                    <div class="col_6">
                        <form action="#" method="post">
                        <input type="text" name="seach_table" id="search_table" class="col_6" placeholder="Tìm kiếm tên phim">
                        <input type="submit" id="submit_search_table" onclick="javascript:alert('Bạn vừa submit form')" style="display: none;">
                        </form>
                        <script>
                        var search_table = document.getElementById("search_table");
                        search_table.addEventListener("keyup", function(event) {
                          if (event.keyCode === 13) {
                           event.preventDefault();
                           document.getElementById("submit_search_table").click();
                          }
                        });
                        </script>
                    </div>
                    <div class="add_data col_6">
                        <a href="#">
                            <i class="fas fa-plus"></i>
                            <span>Add Film</span>
                        </a>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="col_12">
            <div class="content">
                <div class="admin_acount_manager">
                    <div class="chitietphim">
                        <div class="anhphim" style="background-image: url('../../../movie/view/img/<?php echo $phim['anhphim']; ?>');">
                        </div>
                        <form action="../../admin/controller/film.php?update-film" method="post" enctype="multipart/form-data">
                            <input style="display: none;" type="text" name="id" value="<?php echo $phim['id']; ?>">
                            <div class="thongtin">
                                <label>Tên Phim</label>
                                <input type="text" name="tenphim" value="<?php echo $phim['tenphim']; ?>">
                            </div>
                            <div class="thongtin">
                                <label>Thể Loại</label>
                                <input type="text" name="theloai" value="<?php echo $phim['theloai']; ?>">
                            </div>
                            <div class="thongtin">
                                <label>Quốc Gia</label>
                                <input type="text" name="quocgia" value="<?php echo $phim['quocgia']; ?>">
                            </div>
                            <div class="thongtin">
                                <label>Đạo Diễn</label>
                                <input type="text" name="daodien" value="<?php echo $phim['daodien']; ?>">
                            </div>
                            <div class="thongtin">
                                <label>Diễn Viên</label>
                                <input type="text" name="dienvien" value="<?php echo $phim['dienvien']; ?>">
                            </div>
                            <div class="thongtin">
                                <label>Thời Lượng</label>
                                <input type="text" name="thoiluong" value="<?php echo $phim['thoiluong']; ?>">
                            </div>
                            <div class="thongtin">
                                <label>Ngày Chiếu</label>
                                <input type="text" name="ngaychieu" value="<?php echo $phim['ngaychieu']; ?>">
                            </div>
                            <div class="thongtin">
                                <label>Tuổi</label>
                                <input type="text" name="tuoi" value="<?php echo $phim['tuoi']; ?>">
                            </div>
                            <div class="thongtin">
                                <label>Ảnh Phim</label>
                                <input name="anhphim" type="file" value="<?= $phim['anhphim'] ?>">
                            </div>
                            <div class="thongtin">
                                <label>Banner</label>
                                <input name="banner" type="file" value="<?= $phim['banner'] ?>">
                            </div>
                            <div class="thongtin">
                                <label>Trailer</label>
                                <input name="trailer" type="text" value="<?= $phim['trailer'] ?>">
                            </div>
                            <div class="thongtin">
                                <label>Trang Thái</label>
                                <select class="select_loai_phim" name="trangthai">
                                    <?php if($phim['trangthai']==1)
                                    {
                                        echo '<option value="'.$phim['trangthai'].'">Phim sắp chiếu</option>
                                            <option value="0">Phim đang chiếu</option>';
                                    } else{ echo '<option value="'.$phim['trangthai'].'">Phim đang chiếu</option>
                                        <option value="1">Phim sắp chiếu</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div style="height: 100px;" class="thongtin">
                                <label>Nội Dung</label>
                                <input type="text" name="noidung" value="<?php echo $phim['noidung']; ?>">
                            </div>

                            <div style="top: 10px;" class="thongtin submit_editfilm">
                                <button class="btn btn-success px-5">Update</button>
                            </div>

                            <div class="form-group mess-error text-danger">
                                <?php
                                if(isset($_SESSION['mess-error'])){
                                    echo $_SESSION['mess-error'];
                                }
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </article>
</main>

