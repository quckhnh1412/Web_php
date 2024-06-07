<?php
if($_SESSION['role'] != 2){
	header('Location: ../../index.php');
	die();
}
?>
<!DOCTYPE html>

<head>
    <meta charset="ISO-8859-1">
    <title>Management Film</title>
    <base href="/">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <style>
        body{
			/*
		    display: flex;
		    width: 100vw;
		    height: 100vh;
		    font-family: 'Londrina Solid', cursive;
			*/
		    background-image: url('./view/img/bg.jpg');
		}
        /* form{
            background-color: #bac1c3;
        } */
	</style>
    <script>
        $(".nav-item").click(function() {
            alert($(this).html())
            console.log($(this).html())
            $(this).addClass("active")
        })
    </script>
</head>

<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-dark">
	        <div class="container-fluid">
	            <a href="./home" class="text-decoration-none">
                <span class="h1 text-uppercase text-primary bg-dark px-2"></span>
                <span class="h1 text-uppercase text-white bg-dark px-2 ml-n1">NETFILM</span>
            </a>
	            <a class="nav-link" href="https://www.facebook.com/">
	                <i class="bi bi-facebook"></i>
	            </a>
	            <a class="nav-link" href="https://www.instagram.com/">
	                <i class="bi bi-instagram"></i>
	            </a>
	            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
	            <div class="collapse navbar-collapse" id="navbarScroll">
	                <ul class="nav navbar-nav ms-auto w-100 justify-content-end">
	                    <li class="nav-item">
	                        <a class="nav-link text-light" href="#">
	                            <i class="bi bi-person-circle"></i>
	                        </a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link text-white " aria-current="page" href="admin/controller/homepage.php">Welcome admin</a>
	                    </li>
	                    <li class="nav-item col-1">
                            <a href="admin/controller/logout.php" class="nav-link text-white btn btn-success">Log out</a>
                        </li>
	                </ul>
	            </div>
	        </div>
	    </nav>
    

