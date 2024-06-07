<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style type="text/css">  
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
            <div class="col-12 col-md-8 col-lg-5">
                <h2 class="text-center text-yellow mt-5 mb-3 text-light" >Sign up</h2>
                <form  method="post" action="" class="border rounded w-100 mb-5 mx-auto px-3 pt-3">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" name="username" type="text" class="form-control" placeholder="Enter your Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" name="password" type="password" class="form-control" placeholder="Enter your Password">
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input id="confirm-password" type="password" class="form-control" placeholder="Confirm Password">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" class="form-control" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input id="phone" type="phone" name="phone" class="form-control" placeholder="Enter your phone number">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success px-5">Sign up</button>
                    </div>
                    <div class="form-group">
                        <p>You have account? <a href="./login.php" class="text-light">Click here</a></p>
                    </div>
                    <div class="mess-error" style="color: red;">
                    
                    </div> 
                    <div class="error" style="color: red;">
                        <?php 
                            if(isset($_SESSION['mess-error'])){
                                echo $_SESSION['mess-error'];
                            };
                        ?>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var username = $("#username");
        var password = $("#password");
        var confirm_password = $("#confirm-password");
        var email = $("#email");
        var phone = $("#phone");    
        var messError = $(".mess-error");

        $(document).on('click', '.btn', function() {
            if (username.val() == "") {
                messError.text("Please enter your username!!!");
                return false;
            }
            if (password.val() == "") {
                messError.text("Please enter your password!!!");
                return false;
            }
            if (password.val().length < 6) {
                messError.text("Your password must contain at least 6 characters");
                return false;
            }
            if (confirm_password.val() == "") {
                messError.text("Please enter your confirm password!!!");
                return false;
            }
            if (password.val() != confirm_password.val()) {
                messError.text("Confirm password not correct!!!");
                return false;
            }
            if (email.val() == "") {
                messError.text("Please enter your email!!!");
                return false;
            }
            if (phone.val() == "") {
                messError.text("Please enter your phone number!!!");
                return false;
            }
        })
    </script>
</body>

</html>