<?php 
	include('menu.php');
  	require_once('datab/dbhelper.php');
  	
 ?>
<div id="vhat">
							
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-9" style="margin-top: 4rem;">
				<hr style="width: 50px; border: 1 solid black;">
				<h6>VĂN HÓA & ẨM THỰC</h6>
				<div class="row">
					<?php 

                              $sql= "select * from new where type_of_new = 1 order by id desc "; 
  
                             $vhat = executeResult($sql);
                             foreach ($vhat as $key ) 
                             {
                               $image = $key['image'] ;
                               $title  = $key['title'];
                               $id    = $key['id'];
                               
                               $title1 =$key['title_vhat1']
                           	
                              ?>
					<div class="abcd col-xs-12 col-md-4" >
						<figure><a href="chitietvh-at.php?id=<?=$id?>"><img src="<?=$image?>" style="width:100%"></a>
						<div class="container" style="background-color:lightgray; padding-top: 0.5rem; height: 16rem;">
							<hr style="width: 50px; border-color: black;">
							<p style="font-size:14px"><?=$title1?> - <?=$title?></p>
							<a href="chitietvh-at.php?id=<?=$id?>">Xem thêm ></a>
						</div>
						</figure>
					</div>
					
					<?php } ?>
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
	include('footer.php');
?>