
  <style>  
        body{
		    font-family: 'Londrina Solid', cursive;
		    background-image: url('/img/bg.jpg');
			height: 100%;
		}
		.side-bar ul li{
			background-color: #023b58;
			color : #fff;
		}
		.side-bar{
			height: 100%;
			background-color: #023b58;
			color : #fff;
		}
		.col-10{
			background-color: #fff;
		}
		.side-bar{
			height: 100vh;
		}
		.logo{
			width: 100px;
		}
	</style>

	<div class="col-2 side-bar d-none d-xl-inline-block">
		<ul class="list-group">
			<li class="list-group-item"><a href="#"></a></li>
			<li class="list-group-item">
				<span>
					<i class="bi bi-house"></i>
				</span>
				<a href="./admin/controller/homepage.php" class="text-light" >Home</a>
			</li>
			<li class="list-group-item">
				<span>
					<i class="bi bi-film"></i>
				</span>
				<a href="./admin/controller/film.php" class="text-light">Management Film</a>
			</li>
			<li class="list-group-item">
				<span>
					<i class="bi bi-bookmark-star"></i>
				</span>
				<a href="./admin/controller/category.php" class="text-light">Management Category</a>
			</li>
			<li class="list-group-item">
				<span>
					<i class="bi bi-person-circle"></i>
				</span>
				<a href="./admin/controller/user.php" class="text-light">Management User</a>
			</li>
			<li class="list-group-item">
				<span>
					<i class="bi bi-chat-right-dots"></i>
				</span>
				<a href="./admin/controller/comment.php" class="text-light">Management Comment</a>
			</li>
			<li class="list-group-item">
				<span>
					<i class="bi bi-box-arrow-left"></i>
				</span>
				<a href="/admin/controller/logout.php" class="text-light">Log out</a>
			</li>
		
		</ul>
	</div>
