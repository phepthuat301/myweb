<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hạnh Ngộ</title>
    <link href="../img/logo3.png" rel="shortcut icon" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style-login.css">
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
    <script src="https://cdn.tiny.cloud/1/vay56zrvh9veuhcbway7pupzaoycpwvx06k3t4xzzsv3lfgv/tinymce/5/tinymce.min.js" referrerpolicy="origin"/></script></head>
<body>
	<form class="form-group" action="index.php" method="post" enctype="multipart/form-data">
    <h2>Đăng nhập</h2>
        <input class="form-control" type="text" name="username" id="username" placeholder="Enter username..." required="required" />
        <input class="form-control" type="password" name="password" id="password" placeholder="Enter password..." required="required" />
        <input class="form-control btn-dark" type="submit" name="login" id="button" value="Sign in"/>
    </form>
</body>
</html>