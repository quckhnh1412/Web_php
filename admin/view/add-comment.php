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
            <div class="col-10 .bg-white">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <h1 class="text-center text-secondary mt-5 mb-3">Add Comment</h1>
                        <form class="border rounded w-100 mb-5 mx-auto px-3 pt-3 bg-light" action="./admin/controller/comment.php" method="post">
                            <div class="form-group py-2">
                                <label for="films">Choose Film: </label>
                                <select name="films" id="films" class="form-control">
                                    <option value="">None</option>
                                    <?php
                                        foreach($dataIdNameFilms as $item){
                                    ?>
                                        <option value="<?=$item['id']?>"><?=$item['tenphim']?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group py-2">
                                <label for="comment">Comment</label>
                                <input id="comment" name="comment" type="text" class="form-control" placeholder="Enter your comment">
                            </div>
                            <div class="form-group py-2">
                                <label for="users">Choose User: </label>
                                <select name="users" id="users" class="form-control">
                                    <option value="">None</option>
                                    <?php
                                        foreach($dataIdNameUsers as $item){
                                    ?>
                                        <option value="<?=$item['user']?>"><?=$item['user']?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group py-2">
                                <button class="btn btn-success px-5">Add</button>
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
    </div>
</main>
<?php
    include_once '../view/footer.php';
?>