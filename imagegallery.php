<!DOCTYPE html>
<html>
<head>
<title>Hạnh Ngộ</title>
<link href="./img/logo3.png" rel="shortcut icon" type="image/x-icon">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css"
	rel="stylesheet">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<link href="./css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
</head>
<body>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
		<div class="container-fluid">
			<a class="navbar-branch" href="index.php"> <img src="./img/logo3.png"
				height="70" width="70">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link" href="index.php">Trang Chủ</a></li>
					<li class="nav-item"><a class="nav-link" href="about.php">Giới Thiệu</a></li>
					<li class="nav-item"><a class="nav-link active" href="vision.php">Hình Ảnh</a>
					    	<ul class="sub-menu">
								<li><a href="#">Hình Ảnh 1</a></li>
		   	 					<li><a href="#">Hình Ảnh 2</a></li>
		    					<li><a href="#">Hình Ảnh 3</a></li>
    						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="team.php">Đại Lễ</a></li>
					<li class="nav-item"><a class="nav-link" href="connect.php">Liên Hệ</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Image Gallery-->
	<div class="content">
		<a data-fancybox="gallery" href="uploads/tuvien.jpg" data-caption="Caption for single image"><img src="uploads/tuvien.jpg" width=150 height=150></a>
		<a data-fancybox="gallery" href="./img/logo3.png"><img src="./img/logo3.png" width=150 height=150></a>
		<a data-fancybox="gallery" href="./img/logo3.png"><img src="./img/logo3.png" width=150 height=150></a>
	</div>  
	<!-- Footer -->
	<footer>
			<div class="container-fluid padding">
				<div class="row text-center">
					<div class="col-12">
						<hr class="light-100">
					</div>
					<div class="col-md-4">
						<img src="./img/logo3.png" height="150" width="150">
					</div>
					<div class="col-md-8" id="textleft">
						
						<p><i class="fas fa-phone-square" style="margin-right: 20px;"></i>0905212599</p>
						<p><i class="far fa-envelope" style="margin-right: 20px;"></i>bctthanhngo@gmail.com</p>
						<p><i class="fas fa-map-marker-alt" style="margin-right: 20px;"></i>Hội An - Đà Nẵng</p>
					</div>
					<div class="col-12">
						<hr class="light-100">
						<h5>2019 &copy; HẠNH NGỘ</h5>
					</div>
				</div>
			</div>
		</footer>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
		<script type="text/javascript" src="/fancybox/jquery.easing-1.4.pack.js"></script>
		<script src="./JS/main.js"></script>
</body>
</html>