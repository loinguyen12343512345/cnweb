<?php 
	include('menu.php');
  	require_once('datab/dbhelper.php');
  	
?>
<div id="chitietvhat">
	<div class="container">
		<br>
		<br>
		<div class="row">
		<div class="col-xs-12 col-md-9">
			<?php 
			 	if (isset($_GET['id'])) {
				$id      = $_GET['id'];}
			      $sql =  " select * from new where id =".$_GET['id']."  ";
			     
			      $vhat =  executeSingleResult($sql) ;
			      if($vhat != null) {
			        
							$title        	   = $vhat['title'];
							$content   		   = $vhat['content'];
							$contenttitle      = $vhat['content_vhat'];
							$title1        	   = $vhat['title_vhat1'];
							
							
			      
	      		}  ?>
			<div class="row">
				<div class="col-md-4" style="background-color: lightgray; border-radius: 10px;">
					<div class="container">
						<p style="margin-top: 2rem;"><b><?=$title?></b></p>
					</div>
				</div>
				<div class="col-md-8">
					<hr style="border-color: black; width: 3rem;">
					<h1><b>Bia Sài Gòn & Đời sống</b></h1>
					<h1><?=$title1?></h1>
					<p style="font-size:14px"><?=$contenttitle?></p>
				</div>

			</div>
			<div class="col-xs-12">
				<p><?=$content?></p>
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