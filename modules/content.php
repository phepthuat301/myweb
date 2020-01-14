<div class="content">
	<div class="content_left">
		<?php
		if(isset($_GET['xem'])){
			$tam=$_GET['xem'];
		}else{
			$tam='';
		}
		if($tam=='chitiet'){
			include('modules/chitiettin.php');
		}elseif($tam=='loaitin'){
			include('modules/chitietloaitin.php');
		}else{
				include('modules/boxtin.php');
		}
		?>
	</div>
	<div class="clear"></div>

