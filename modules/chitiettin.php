<?php
$sql="select * from baiviet where idbaiviet='$_GET[id]'";
$baiviet=mysqli_query($conn,$sql);
$dong=mysqli_fetch_array($baiviet);
?>
<div class="container row" style="width:100%; text-align:justify" >
   <h1><?php
    echo $dong['tenbaiviet']?> </h1>
    <?php
    echo $dong['noidung']
    ?>
    <div class="scroll-to-top" style="position:fixed;bottom:20%;left:80%;cursor:pointer;display:none;">
        <img src="./imgs/Scroll to top.gif" width="40" height="40" />
    </div>
</div>
<hr class="" style="border-top:2px solid rgba(2,80,126,0.79);">
<div class="fb-comments container" data-href="https://hocjs.000webhostapp.com/" data-width="auto" data-numposts="5"></div>