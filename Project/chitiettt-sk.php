<?php 
	include('menu.php');
  	require_once('datab/dbhelper.php');
  	$wh = "";
?>

<div id="ctttsk">
	<div class="container">
		<div class="row">

			<div class="com-xs-12 col-md-9">
				<?php 
			 	if (isset($_GET['id'])) {
				$id      = $_GET['id'];}
			      $sql =  " select * from new where id =".$_GET['id']."  ";
			     
			      $ttsk =  executeSingleResult($sql) ;
			      if($ttsk != null) {
			        
							$title        = $ttsk['title'];
							$updated_at   = $ttsk['updated_at'];
							$content      = $ttsk['content'];
							
							
			      
	      		}  ?>
				<br style="width:50px">
				<h6><strong><?=$title?></strong></h6>
				<p style="font-size:12px ;color: lightgray;"><?=$updated_at?></p>
				<p><?=$content?></p>
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