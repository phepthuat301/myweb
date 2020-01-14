
<form action="modules/baiviet/xuly.php" method="post" enctype="multipart/form-data">
<div class="content-left">
<table width="auto" border="1">
  <tr>
    <td colspan="2"><div align="center">Thêm bài viết</div></td>
  </tr>
  <tr>
    <td>Tên bài viết</td>
    <td><label>
      <input type="text" name="tenbaiviet" id="tenbaiviet" size="120">
    </label></td>
  </tr>
  <tr>
      <td>Ảnh minh họa(Nhập URL)</td>
      <td><label>
              <input type="text" name="anhminhhoa" id="anhminhhoa" size="120" value="<?php echo $dong['anhminhhoa'] ?>">
              <img src="<?php echo $dong['anhminhhoa']?>">
          </label></td>
  </tr>
  <tr>
    <td>Tóm tắt</td>
    <td><label>
      <textarea style="width: 900px !important;" name="tomtat" class="mytextarea" cols="45" rows="5"></textarea>
    </label></td>
  </tr>
  <tr>
    <td>Nội dụng</td>
    <td><label>
      <textarea style="width: 900px !important; height: 2000px !important;" name="noidung" class="mytextarea" cols="45" rows="5">
         <p style="color:#888888; font-size:10px"> <?php
          date_default_timezone_set("Asia/Bangkok");
          echo "Đăng lúc: " . date("h:i d/m/Y") . "<br>";
          ?> </p><br>
      </textarea>
    </label></td>
  </tr>
  <tr>
    <td>Loại tin</td>
    <td><label>
      <select name="loaitin" id="loaitin">
      <?php
	  $sql="select * from loaitin";
	 $loaitin= mysqli_query($conn,$sql);
	  while($dong=mysqli_fetch_array($loaitin)){
	  ?>
      
      <option value="<?php echo $dong['idloaitin'] ?>"><?php echo $dong['tenloaitin'] ?></option>
     <?php
	  }
	 ?>
      </select>
    </label></td>
  </tr>
  <tr>
    <td>Trạng thái</td>
    <td><label>
      <select name="trangthai" id="trangthai">
        <option value="Hiển thị" selected>Hiển thị</option>
        <option value="Không hiển thị">Không hiển thị</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="them" id="them" value="Thêm">
    </div></td>
  </tr>
</table>
</div>
</form>
