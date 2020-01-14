<!DOCTYPE html>
<html lang="en">
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
			<div class="collapse navbar-collapse menu" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link active" href="index.php">Trang Chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="news.php">Tin Tức</a></li>
					<li class="nav-item"><a class="nav-link" href="about.php">Giới Thiệu</a></li>
					<li class="nav-item"><a class="nav-link" href="vision.php">Hình Ảnh</a>
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
	<!-- Carousel -->
	<div id="slides" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1"></li>
			<li data-target="#slides" data-slide-to="2"></li>
			<li data-target="#slides" data-slide-to="3"></li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="./img/carousel1.jpg" height="500px" width="500px">
				<div class="carousel-caption">
					<h1 class="display-3">Hạnh Ngộ</h1>
					<h4>Bếp Cơm Từ Thiện</h4>
					<button type="button" class="btn btn-outline-light btn-lg">
						XEM THÊM</button>
					<button type="button" class="btn btn-primary btn-lg">DONATE</button>
				</div>
			</div>
			<div class="carousel-item">
				<img src="./img/carousel2.jpg" height="500px" width="500px">
			</div>
			<div class="carousel-item">
				<img src="./img/carousel3.jpg" height="500px" width="500px">
			</div>
			<div class="carousel-item">
				<img src="./img/carousel4.jpg" height="500px" width="500px">
			</div>
		</div>
	</div>
	<!--  JUMBOTRON -->
	<div class="container-fluid" id="jumbotron">
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
			<h1>Lời Giới Thiệu</h1>
			<p>Tu Viện Linh Ứng được thành lập vào cuối năm 2014, vẫn còn rất mới với phật tử gần xa, và vẫn
			 đang trong giai đoạn phát triển. Mục đích chính của Tu Viện là giúp đở tất cả phật tử gần xa và 
			hướng dẩn Phật giáo thực hành, thiền, giáo dục, văn hóa và các mục đích từ thiện.</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
			<a href="#">
				<button type="button" class="btn btn-outline-secondary" onclick="location='about.php'">
					Xem Thêm...</button>
			</a>
		</div>
	</div>
	<!-- Hình Ảnh -->
	<hr class="my-4">
	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-md-6">
				<a href="#"> 
				<img id="news"  src="./img/logo3.png" height="400px" width="400px" style="padding:20px">
				</a><br>
				<a href="#">
					<button type="button" class="btn btn-outline-secondary">
						Hình Ảnh Sinh Hoạt</button>
				</a>
			</div>
			<div class="col-md-6">
				<a href="#"> <img id="news"  src="./img/logo3.png" height="400px" width="400px" style="padding:20px">
				</a><br>
				<a href="#">
					<button type="button" class="btn btn-outline-secondary">
						Hình Ảnh Đại Lễ</button>
				</a>
			</div>
		</div>	
	</div>
<?php include('modules/footer.php') ?>
</body>
</html>