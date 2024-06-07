<style>
    main{
        margin-top : 0px;
    }
    .head{
        max-height: 160px;
        height: 60px !important;
    }
</style>
<link href="../../admin/resources/css/admin.css" rel="stylesheet" />

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
                        <form action="./admin/controller/film.php?add" method="post" enctype="multipart/form-data">
                            <div class="thongtin">
                                <label>Tên Phim</label>
                                <input type="text" name="tenphim">
                            </div>
                            <div class="thongtin">
                                <label>Thể Loại</label>
                                <input type="text" name="theloai">
                            </div>
                            <div class="thongtin">
                                <label>Quốc Gia</label>
                                <input type="text" name="quocgia">
                            </div>
                            <div class="thongtin">
                                <label>Đạo Diễn</label>
                                <input type="text" name="daodien">
                            </div>
                            <div class="thongtin">
                                <label>Diễn Viên</label>
                                <input type="text" name="dienvien">
                            </div>
                            <div class="thongtin">
                                <label>Thời Lượng</label>
                                <input type="text" name="thoiluong">
                            </div>
                            <div class="thongtin">
                                <label>Ngày Chiếu</label>
                                <input type="date" name="ngaychieu">
                            </div>
                            <div class="thongtin">
                                <label>Tuổi</label>
                                <input type="text" name="tuoi">
                            </div>
                                <div class="thongtin">
                                    <label>Ảnh Phim</label>
                                    <input name="anhphim" type="file">
                                </div>
                            <div class="thongtin">
                                <label>Banner</label>
                                <input name="banner" type="file" >
                            </div>
                            <div class="thongtin">
                                <label>Trailer</label>
                                <input name="trailer" type="text">
                            </div>
                            <div class="thongtin">
                                <label>Trang Thái</label>
                                <select class="select_loai_phim" name="trangthai">
                                    <option value="1">Phim sắp chiếu</option>
                                    <option value="0">Phim đang chiếu</option>
                                    ?>
                                </select>
                            </div>
                            <div style="height: 100px;" class="thongtin">
                                <label>Nội Dung</label>
                                <input type="text" name="noidung">
                            </div>
                            <div style="top: 10px;" class="thongtin submit_editfilm">
                                <input type="submit" name="addphim" value="add">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </article>
</main>

