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
                    <div class="col-6">
                        <h1 class="text-center text-secondary mt-5 mb-3">Add User</h1>
                        <form class="border rounded w-100 mb-5 mx-auto px-3 pt-3 bg-light" action="./admin/controller/user.php" method="post">
                            <div class="form-group py-2">
                                <label for="username">Username: </label>
                                <input id="username" name="username" type="text" class="form-control" placeholder="Your username">
                            </div>
                            <div class="form-group py-2">
                                <label for="password">Password</label>
                                <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group py-2">
                                <label for="confirm-pass">Confirm Password:</label>
                                <input id="confirm-pass" name="confirm-pass" type="password" class="form-control" placeholder="Confirm Password">
                            </div>
                            <div class="form-group py-2">
                                <label for="email">Email: </label>
                                <input id="email" name="email" type="text" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group py-2">
                                <label for="phone">Phone: </label>
                                <input id="phone" name="phone" type="text" class="form-control" placeholder="Your phone number">
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