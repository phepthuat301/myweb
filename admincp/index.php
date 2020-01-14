<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hạnh Ngộ</title>
    <link href="../img/logo3.png" rel="shortcut icon" type="image/x-icon">
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
    <script src="https://cdn.tiny.cloud/1/vay56zrvh9veuhcbway7pupzaoycpwvx06k3t4xzzsv3lfgv/tinymce/5/tinymce.min.js" referrerpolicy="origin"/></script>
    <script>
    tinymce.init({
        selector: '.mytextarea'
    });
    </script>
    <link rel="stylesheet" type="text/css" href="css/css.css" />
   <!-- <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script> -->
</head>

<body>
<div id="wrapper">
	<?php
		include('modules/config2.php');
		include('modules/header.php');
		include('modules/menu.php');
		include('modules/content.php');
	?>
</div>
</body>
</html>