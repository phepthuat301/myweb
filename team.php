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
                    <li class="nav-item"><a class="nav-link" href="news.php">Tin Tức</a></li>
					<li class="nav-item"><a class="nav-link" href="about.php">Giới Thiệu</a></li>
					<li class="nav-item"><a class="nav-link" href="vision.php">Hình Ảnh</a>
					    	<ul class="sub-menu">
								<li><a href="#">Hình Ảnh 1</a></li>
		   	 					<li><a href="#">Hình Ảnh 2</a></li>
		    					<li><a href="#">Hình Ảnh 3</a></li>
    						</ul>
					</li>
					<li class="nav-item"><a class="nav-link active" href="team.php">Đại Lễ</a></li>
					<li class="nav-item"><a class="nav-link" href="connect.php">Liên Hệ</a></li>
				</ul>
			</div>
		</div>
	</nav>
    <?php include('modules/footer.php') ?>
</body>
</html>