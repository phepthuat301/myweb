<?php
	include('../config2.php');
	$tenbaiviet=$_POST['tenbaiviet'];
	$tomtat=$_POST['tomtat'];
	$noidung=$_POST['noidung'];
	$loaitin=$_POST['loaitin'];
	$trangthai=$_POST['trangthai'];
	$anhminhhoa=$_POST['anhminhhoa'];
	$id=$_GET['id'];
	if(isset($_POST['them'])){
		$sql="insert into baiviet(tenbaiviet,anhminhhoa,tomtat,noidung,idloaitin,trangthai)
		values('$tenbaiviet','$anhminhhoa','$tomtat','$noidung','$loaitin','$trangthai')";
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=baiviet&ac=them');
	}elseif(isset($_POST['sua'])){
	    if ($anhminhhoa != '') {
            $sql = "update baiviet set tenbaiviet='$tenbaiviet',anhminhhoa='$anhminhhoa',tomtat='$tomtat',noidung='$noidung',idloaitin='$loaitin',trangthai='$trangthai'
		    where idbaiviet='$id'";
            mysqli_query($conn,$sql);
        }else{
			$sql="update baiviet set tenbaiviet='$tenbaiviet',noidung='$noidung',tomtat='$tomtat',idloaitin='$loaitin',trangthai='$trangthai' where idbaiviet='$id'";
		    mysqli_query($conn,$sql);
	    }
		header('location:../../index.php?quanly=baiviet&ac=sua&id='.$id);
	}else{
		//xoa loai tin
		$sql="delete from baiviet where idbaiviet='$id' ";
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=baiviet&ac=them');
		
	}
?>