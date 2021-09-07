<?php 
	include('menu.php');
  	require_once('datab/dbhelper.php');
  	
  

	
 ?>


<div id="ttsk">
	<?php
	   
	  //order by id desc xắp theo thứ tự giảm dần(thêm mới hiện trước)
	  
	  	$count = "SELECT count(id) as total FROM new where type_of_new = 0 ";
		$total_records = (executeSingleResult($count)['total']);
		// TÌM LIMIT VÀ CURRENT_PAGE
	    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
		$limit = 9;
		// tổng số trang
		$total_page = ceil($total_records / $limit);
		// Giới hạn current_page trong khoảng 1 đến total_page
		if ($current_page > $total_page){
			$current_page = $total_page;
		}
		else if ($current_page < 1){
			$current_page = 1;
		}
		// Tìm Start
		$start = ($current_page - 1) * $limit;
		$sqlttsk = "SELECT * FROM new where type_of_new = 0 LIMIT $limit OFFSET $start";
		$datas = executeResult($sqlttsk);
	  ?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-9" style="margin-top: 4rem;">
				<hr style="width:50px">
            	<h5>TIN TỨC - SỰ KIỆN</h5>
            	
            	<div class="con1 row">
            		<?php foreach ($datas as $row) {?>
            		<div class="con2 col-xs-12 col-md-4">
            			<figure>
            				<a href="chitiettt-sk.php?id=<?php echo $row['id'] ?>"><img src="<?php echo $row['image']; ?>" style="height: 150px; width: 100%;"></a></figure>
            				<p class="disabled" style="font-size:12px ;color: lightgray;"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $row['updated_at']; ?></p>

            				<a href="chitiettt-sk.php?id=<?php echo $row['id'] ?>"><strong style="font-size: 12px;"><?php echo $row['title']; ?> </strong> </a>
            			<hr >
            		</div>
            		
            	<?php }?>
            		
            	</div>
            	<div class="row2 text-center" style="font-size: 20px; text-align: center;">
				

				<ul class="pagination justify-content-center " >
					<?php if ($current_page > 1 && $total_page > 1){?>
						<li class="page-item"><a class="page-link" style="color: #B22222" href="tt-sk.php?page=<?php echo ($current_page-1); ?>">Prev</a></li>
					<?php }?>
					<?php for ($i = 1; $i <= $total_page; $i++){
                		// Nếu là trang hiện tại thì hiển thị thẻ span
                		// ngược lại hiển thị thẻ a
						if ($i == $current_page){?>
							<li class="page-item"><a class="page-link" style="color: #B22222" href=""><?php echo $i; ?></a></li>
						<?php }
						else{?>
							<li class="page-item"><a class="page-link" style="color: #B22222" href="tt-sk.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
						<?php }
					}?>
					<?php if ($current_page < $total_page && $total_page > 1){?>
						<li class="page-item"><a class="page-link" style="color: #B22222" href="tt-sk.php?page=<?php echo ($current_page+1); ?>"> Next</a></li>
					<?php }?>
				   
				  </ul>
				</div> <!-- end row2 -->

				
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


<div class="clearfix"></div>

<?php
	include('footer.php')
?>