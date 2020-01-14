<?php
	$tenmaychu='localhost';
	$taikhoan='root';
	$matkhau='1234';
	$csdl='webtintucphp';
	$conn=mysqli_connect($tenmaychu,$taikhoan,$matkhau)or die('Connect fail');
	mysqli_select_db($conn,$csdl);
	?>