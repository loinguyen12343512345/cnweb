<?php
	include('menu.php');
  require_once('datab/dbhelper.php');
  
?>
<div id="prod">
  <?php
   $sql= "select * from product where type_of_product = 1 "; 
  
  $datas = executeResult($sql);

  ?>
	<div class="container">
		<div class="row">
		<div class="com-xs-12 col-md-9">
			<div class="bia">
			<hr style="width:50px; border-color:black;">
            <h5>BIA</h5>
            <hr>
			<div class="row" style="margin-top: 1rem;">
        <?php foreach ($datas as $row) {?>
				<div class="prod col-xs-12 col-md-6" >
					
					
                                      <div class="row" style="margin-top: 3rem">
                                      <div class="col-md-5">
                                        <img src="<?php echo $row['image_menu']; ?>" style="width: 90px; height: 150px;">
                                      </div>
                                      <div class="col-md-7 " style="margin-top:3rem ">
                                        <h6 style="color:red;"><?php echo $row['title_menu']; ?></h6>
                                        <h6 style="font-size: 15px"><?php echo $row['title_product1']; ?></h6>
                                        <a class="" href="chitietsp.php?id=<?php echo $row['id'] ?>" title="Bia Saigon Special">Xem thêm ></a>
                                      </div>
                                      </div>
                    
				</div>
        <?php }?>
				
			</div>
			</div>

			<div class="ngk">
				<hr style="width:50px ;border-color: black; margin-top: 3rem;">
            	<h5>NƯỚC GIẢI KHÁT</h5>
            	<hr>
            	<div class="prod col-xs-12 col-md-6">
            		 <div class="row">


                        <?php 

                              $s_drink= "select * from product where type_of_product = 0 "; 
  
                             $soft_drink = executeResult($s_drink);
                             foreach ($soft_drink as $key ) {
                               $image = $key['image_menu'] ;
                               $name  = $key['title_menu'];
                               $id    = $key['id'];
                               $title =$key['title_product1']
                               ?>
                            

                         
                                      <div class="col-md-5">
                                        <img src="<?=$image?>" style="width: 90px; height: 150px;">
                                      </div>
                                      <div class="col-md-7 " style="margin-top:3rem ">
                                        <h6 style="color:red;"><?=$name?></h6>
                                        <h6 style="font-size: 15px"><?=$title?></h6>
                                        <a class="" href="ctnuocngot.php?id=<?=$id?>" title="Bia Saigon Special">Xem thêm ></a>
                                      </div>
                                  <?php } ?>
                  </div>
            	</div>
			</div>

		</div>

		<div class="com-xs-12 col-md-3 clearfix">
			 <div class="container" style="background-color: #F5F5F5; margin-top: 28px">
                <h5>PHIM QUẢNG CÁO</h5>   
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
		</div>
	</div>
	</div>
</div>



<?php
	include('footer.php')
?>