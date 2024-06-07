<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">

<head>
    <title>Sign in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>  
        body{
		    display: flex;
		    width: 100vw;
		    height: 100vh;
		    font-family: 'Londrina Solid', cursive;
		    background-image: url('../../view/images/bg.jpg');
		}
        form{
            background-color: #bac1c3;
        }
	</style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-5 ">
                <h2 class="text-center mt-5 mb-3 text-light">Sign in</h2>
                <form th:action="" method="post" class="border rounded w-100 mb-5 mx-auto px-3 pt-3">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input name="username" id="username" type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" id="password" type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button name="submit" type="submit" id="btnSignin" class="btn btn-success px-5">Login</button>
                    </div>
                    <div class="form-group">
                        <p>Create account <a href="signup.php" class="text-light">Click here</a></p>
                    </div>
                </form>
                <div class="error" style="color: red;">
                    <?php 
                        if(isset($_SESSION['mess-error'])){
                            echo $_SESSION['mess-error'];
                        };
                    ?>
                </div>
                <div class="mess-error" style="color: red;"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var username = $("#username");
        var password = $("#password");
        var messError = $(".mess-error");

        $(document).on('click', '#btnSignin', function() {
            if (username.val() == "") {
                messError.text("Please enter your username!!!");
                return false;
            }
            if (password.val() == "") {
                messError.text("Please enter your password!!!");
                return false;
            }
            
            if($("#password").val().length < 6 ) {
                
                messError.text("Password is 6 characters");
                return false;   
            }
            
        })
    </script>
</body>

</html>