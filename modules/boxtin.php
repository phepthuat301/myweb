<?php
if(isset($_GET['trang'])){
    $trang=$_GET['trang'];
}else{
    $trang='';
}
if($trang =='' || $trang =='1'){
    $trang1=0;
}else{
    $trang1=($trang*5)-5;
}
$sql="select * from baiviet order by idbaiviet desc limit $trang1,5 ";
$baiviet=mysqli_query($conn,$sql);
?>
<div class="content">
    <div class="container-fluid row" style="margin-top:20px">
            <?php
            while($dong=mysqli_fetch_array($baiviet)){
            ?>
                <div class="container row">
                    <div  class="col-lg-5" style="margin-bottom: 10px">
                         <img id="news" src="<?php echo $dong['anhminhhoa']?>" width="400" height="250"/>
                    </div>
                    <div class="col-lg-7">
                        <p class="tieude"><a href="news.php?xem=chitiet&id=<?php echo $dong['idbaiviet'] ?>"><?php echo $dong['tenbaiviet'] ?></a></p>
                        <p class="tomtat"><?php echo $dong['tomtat'] ?></p>
                    </div>
                    <div class="col-md-12">
                        <hr class="" style="border-top:1px solid rgba(0,0,0,.5);">
                    </div>
                </div>

                <?php
            }
            ?>
        </div>
    <div class="trang">
        Trang :
        <?php
        $sql_trang=mysqli_query($conn,"select * from baiviet");
        $count_trang=mysqli_num_rows($sql_trang);
        $a=ceil($count_trang/5);
        for($b=1;$b<=$a;$b++){

            if($trang==$b){

                echo '<a href="news.php?xem=boxtin&trang='.$b.'" style="text-decoration:underline;color:red;font-size:30px;padding:5px;">'.$b.' ' .'</a>';

            }else{
                echo '<a href="news.php?xem=boxtin&trang='.$b.'" style="text-decoration:none;color:#000;font-size:30px;padding:5px;">'.$b.' ' .'</a>';
            }
        }
        ?>
    </div>
</div>

