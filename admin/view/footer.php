<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
        $(document).ready(function(){
            $(".btn-success").click(function(){
                var username = $("#username").val();
                var password = $("#password").val();
                var confirm_pass = $("#confirm-pass").val();
                var email = $("#email").val();
                var phone = $("#phone").val();

                if(username == ""){
                    $(".mess-error").html("Please enter username");
                    return false;
                }

                if(password == ""){
                    $(".mess-error").html("Please enter password");
                    return false;
                }

                if(password.length < 8){
                    $(".mess-error").html("Your password must contain at least 8 characters");
                    return false;
                }

                if(confirm_pass == ""){
                    $(".mess-error").html("Please enter confirm password");
                    return false;
                }

                if(confirm_pass != password){
                    $(".mess-error").html("Confirm Password not correct");
                    return false;
                }

                if(email == ""){
                    $(".mess-error").html("Please enter email");
                    return false;
                }

                if(phone == ""){
                    $(".mess-error").html("Please enter phone");
                    return false;
                }
            })
        })
    </script>
</html>