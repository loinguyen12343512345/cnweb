<?php
  include('menu.php');
  require_once('datab/dbhelper.php');
?>
    <div class="anh"><img src="./img/bannerpage.png" ></div>
    <div class="chuthichthem" >
    </div>
      <div class="contenttt">
        <div class="container">
          <div class="row">
          <div class="col-md-6 clearfix" style=" margin-top: 1rem">
            <hr style="width: 50px;">
             <h4>TIN HOT</h4>
             <?php
                       $sql= "select * from new where id=14";
                      
                      $datas = executeResult($sql);

             ?>
              <?php foreach ($datas as $row) {?>
             <a href="chitiettt-sk.php? id=<?php echo $row['id'] ?>"><img src="<?php echo $row['image']; ?>" style="height: 300px;width: 100%;"></a>
             <div class="container" style="margin-top:30px;">
               <a href=""><h6><?php echo $row['title']; ?> <i class="fa fa-caret-right"></i></h6></a>
               <p>Sau những thành công tại Đà Nẵng (25-26/8) và Vũng Tàu (1-2/9), đại nhạc hội “Beach Festival Twist all Summer” sẽ đổ bộ thành phố biển Nha Trang vào 8-9/9</p>
                <?php }?>
             </div>
          </div>

          <div class="col-md-6 clearfix" style=" margin-top: 5.3rem" >
            
            <div class="row">
              <div class="col-md-6">
                      <?php
                       $sql= "select * from new where id=15";
                      
                      $datas = executeResult($sql);

                      ?>
                      <?php foreach ($datas as $row) {?>
                      
                <a href="chitiettt-sk.php?id=<?php echo $row['id'] ?>"><img src="<?php echo $row['image'] ?>" style="width: 100%;"></a>
                <a href="" style="padding-top: 10px;"><h6><?php echo $row['title'] ?> <i class="fa fa-caret-right"></i></h6></a>
                <hr>
                <?php }?>
              </div>
              <div class="col-md-6">
                 <?php
                       $sql= "select * from new where id=16";
                      
                      $datas = executeResult($sql);

                      ?>
                  <?php foreach ($datas as $row) {?>
                <a href="chitiettt-sk.php?id=<?php echo $row['id'] ?>"><img src="<?php echo $row['image'] ?>" style="width: 100%;"></a>
                <a href=""><h6><?php echo $row['title'] ?> <i class="fa fa-caret-right"></i></h6></a>
                <hr>
                <?php }?>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <?php
                       $sql= "select * from new where id=17";
                      
                      $datas = executeResult($sql);

                      ?>
                  <?php foreach ($datas as $row) {?>
                <a href="chitiettt-sk.php?id=<?php echo $row['id'] ?>"><img src="<?php echo $row['image'] ?>" style="width: 100%;"></a>
                <a href=""><h6><?php echo $row['title'] ?> <i class="fa fa-caret-right"></i></h6></a>
                <hr>
                <?php }?>
              </div>
              <div class="col-md-6">
                <?php
                       $sql= "select * from new where id=18";
                      
                      $datas = executeResult($sql);

                      ?>
                  <?php foreach ($datas as $row) {?>
                <a href="chitiettt-sk.php? id=<?php echo $row['id'] ?>"><img src="<?php echo $row['image'] ?>" style="width: 100%;"></a>
                <a href=""><h6><?php echo $row['title'] ?> <i class="fa fa-caret-right"></i></h6></a>
                <hr>
                <?php }?>
              </div>
              
            </div>
          </div>
          </div>
          <div class="row" style="margin-top:20px">
            <div class="col-md-5 clearfix">
              <hr style="width: 50px;">
             <h4>TIN TỨC - SỰ KIỆN</h4>
             <?php
                       $sql= "select * from new where id=6";
                      
                      $datas = executeResult($sql);

                      ?>
                  <?php foreach ($datas as $row) {?>
             <img src="<?php echo $row['image'] ?>" style="width:100%; height:150px">
             <a href="chitiettt-sk.php? id=<?php echo $row['id'] ?>"><h6><?php echo $row['title'] ?> <i class="fa fa-caret-right"></i></h6></a>
             <?php }?>
            </div>
            <div class="col-md-4 clearfix" style="padding-top: 60px;">
               <?php
                       $sql= "select * from new where id=1 or id=2 or id=3";
                      
                      $datas = executeResult($sql);

                      ?>
                  <?php foreach ($datas as $row) {?>
              <a href=""><h6><?php echo $row['title'] ?> <i class="fa fa-caret-right"></i></h6></a>
              <hr>
              <?php }?>
              
              <a href="tt-sk.php" style="float: right;"><h6>XEM THÊM <i class="fa fa-caret-right"></i></h6></a>

            </div>
            <div class="col-md-3 clearfix ">
              <div class="container" style="background-color: #F5F5F5; margin-top: 28px">
                <h5 style="padding-top: 1rem;">PHIM QUẢNG CÁO</h5>   
                <hr style="width:80px; border-top: 3px solid red; height: 2px;">
                <img src="./img/phimqc.jpg" style="width: 100%">
                <img src="./img/play2.png" style="display: block; margin-left: auto; margin-right: auto; margin-top: -91px; ">  
                <div class="clearfix"></div>
                <div class="ndqc">
                  <a href="" ><h5>BIA SAIGON - TVC 60S <i class="fa fa-caret-right"></i></h5></a>
                <hr>
                <a href=""><h5>BIA SAIGON - TVC 15S <i class="fa fa-caret-right"></i></h5></a>
                <hr>
                <a href=""><h5>BIA SAIGON EXPORT - TVC <i class="fa fa-caret-right"></i></h5></a>
                <hr>   
                </div>     
              </div>
              <div class=" container" style="background-color:#F5F5F5; padding-top:10px ; margin-top:30px">
                <h5>VĂN HÓA & ẨM THỰC</h5> 
                 <?php
                       $sql= "select * from new where id=12";
                      
                      $datas = executeResult($sql);

                      ?>
                  <?php foreach ($datas as $row) {?>  
                <hr style="width:80px; border-top: 3px solid red; height: 2px;">
                <img src="<?php echo $row['image'] ?>" style="width: 100%; height: 200px;">
                <a href="chitiettt-sk.php?id=<?php echo $row['id'] ?>"  ><h6>XEM THÊM <i class="fa fa-caret-right"></i></h6></a>
                <?php }?>
              </div>
              <div class="container" style="margin-top:30px; background-color: #F5F5F5; padding-top: 10px; padding-bottom: 5px;">
                <h5>HÌNH ẢNH HOẠT ĐỘNG</h5>   
                <hr style="width:80px; border-top: 3px solid red; height: 2px;">
              </div>
             </div>
           </div>
           
        </div>
        
      </div>

<?php
  include('footer.php');
?>
