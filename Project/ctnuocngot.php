<?php 
	include('menu.php');
  	require_once('datab/dbhelper.php');
  	
?>
<div id="ctng">
	<div class="banner1" style="margin-top: 5rem">
			<img src="./img/ngk.jpg" style="height: 100%; width: 100%;">
		</div>
	<div class="container">
		
		
		<div class="content5">
			<div class="row">
				<?php 
			 	if (isset($_GET['id'])) {
				$id      = $_GET['id'];}
			      $sql =  " select * from product where id =".$_GET['id']." ";

			      $ng =  executeSingleResult($sql) ;
			      if($ng != null) {
			        
							
							$image       = $ng['image_product1'];
							
						
							$title       = $ng['title_product'];
												
							$content     	= $ng['content'];
			      
	      }  ?>
				<div class="col-xs-12 col-md-4" style="margin-top:5rem"><img src="<?=$image?>" style="height:100%;width: 100%;">
				</div>

				<div class=" col-xs-12 col-md-8" style="margin-top: 5rem">
					<div class="container" ><h6 style="color:red; font-size:18px"><strong><?=$title?></strong></h6>
					<p><?=$content?></p></div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	include('footer.php');
?>