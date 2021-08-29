<?php
  include('menu.php');
  require_once ('datab/dbhelper.php');
?>
<style type="text/css">
		a:hover{
			text-decoration: none;
		}
		a{
			text-decoration: none;
		}
		strong{
			color: #fff;
		}
		p{
			color: #fff;
		}
		.huongdan ul{
			margin-left: 20px;
		}
		.huongdan ul li{
			color: #fff;
		}
</style>
<div class="container-fluid" style="padding: 0px;">
	<?php 
			 	if (isset($_GET['id'])) {
				$id      = $_GET['id'];}
			      $sql =  " select * from product where id =".$_GET['id']." ";

			      $spbia =  executeSingleResult($sql) ;
			      if($spbia != null) {
			        
							$title_product        = $spbia['title_product'];
							$image_product1       = $spbia['image_product1'];
							$image_product2       = $spbia['image_product2'];
							$image_product3       = $spbia['image_product3'];
							$video       					= $spbia['video'];
							$docon       					= $spbia['docon'];
							$chai      					  = $spbia['chai'];
							$ml      						  = $spbia['ml'];
							$chungloai       			= $spbia['chungloai'];
							$title_product1       = $spbia['title_product1'];
							$title_product2       = $spbia['title_product2'];						
							$content     					= $spbia['content'];
			      
	      }  ?>
	<div class="anh1" style="height: 690px;">
		<img src="<?=$image_product1?>" width="100%" style="clip-path: polygon(0 0, 100% 0, 100% 80%, 0 80%);">
	</div>
	<div class="anh1" style="height: 690px;">
		<img src="<?=$image_product2?>" width="100%" style="clip-path: polygon(0 0, 100% 0, 100% 80%, 0 80%); ">
	</div>
	<div class="anh1" style="height: 690px;">
		<img src="<?=$image_product3?>" width="100%" style="clip-path: polygon(0 0, 100% 0, 100% 80%, 0 80%);">
	</div>
	
	
 	
	<div class="container-fluid" style="position: absolute; background-color: transparent; width: 100%;top: 107px;">
		<div class="container-fluid contentanh1" style="height: 700px;">
				
			<div class="container">
				<a href="<?=$video?>" style="position: absolute; top: 20%;left: 50%;transform: translate(-50%, -50%)">
					<img src="img/play.png" style="margin-left: 45%;">
					<h1 style="color: #fff;margin-top: 40px; font-size: 50px;text-align: center;" >
						<strong style="color: #fff; "><?=$title_product?> </strong>
					</h1>
					<span style="font-weight: lighter;color: #fff;font-size: 2.6rem;font-family: inherit;"><?=$title_product1?></span>
				</a>
			</div>
		</div>
		<div class="container-fluid contentanh1" style="height: 700px;">
			<div class="row">
				<div class="col-lg-6 col-12">
					
				</div>
				<div class="col-lg-6 col-12">
					<div class="container">
						<div class="row" style="height: 100px;"></div>
						<div class="row">
							<div class="col-lg-4 col-12">
								<div style="height: 150px; width: 150px;border-radius: 50%;border: 1px solid #ffffff66;">
									<div style="font-size: 3.75rem;font-weight: 700; width: 100%;color: #fff;margin-left: 25px;margin-bottom: -10px;margin-top: 15px;"><?=$docon?></div>
									<span style="color: #fff;margin-left: 40px;"> % độ cồn</span>
								</div>
							</div>
							<div class="col-lg-4 col-12">
								<div style="height: 150px; width: 150px;border-radius: 50%;border: 1px solid #ffffff66;">
									<div style="font-size: 3.75rem;font-weight: 700; width: 100%;color: #fff;margin-left: 20px;margin-bottom: -10px;margin-top: 15px;"><?=$ml?></div>
									<span style="color: #fff;margin-left: 65px;text-align: center;"> ml</span>
								</div>
							</div>
							<div class="col-lg-4 col-12">
								<div style="height: 150px; width: 150px;border-radius: 50%;border: 1px solid #ffffff66;">
									<div style="font-size: 3.75rem;font-weight: 700; width: 100%;color: #fff;margin-left: 40px;margin-bottom: -10px;margin-top: 15px;"><?=$chai?></div>
									<span style="color: #fff;margin-left: 50px;">chai/két</span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12" style="margin-top: 90px;">
								<p>
									<span style="font-size: 24px">
										<strong style="color: #fff;">“<?=$title_product2?>” </strong>
									</span>
								</p>
								<p style="color: #fff;font-size: 18px;"><?=$content?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid contentanh1" style="height: 700px;">
			<div class="row">
				<div class="col-lg-6 col-12">
					<div class="container huongdan" style="margin-top: 100px;">
						<p>
							<strong>Chủng loại sản phẩm:</strong>
							<?=$chungloai?>
						</p>
						<p>
							<strong>Thành phần:</strong>
							Nước, malt đại mạch, ngũ cốc, hoa bia.
						</p>
						<p>
							<strong>Bao bì: </strong>
							đóng trong chai thủy tinh màu nâu, 20 chai/két nhựa
						</p>
						<p>
							<strong>Hướng dẫn sử dụng: </strong>
							Ngon hơn khi uống lạnh, tốt nhất ở 10 – 15 độ C.
						</p>
						<p>
							<strong>Hướng dẫn bảo quản:</strong>
						</p>
						<ul>
							<li>Bảo quản nơi khô ráo và thoáng mát. </li>
							<li>Tránh tiếp xúc trực tiếp với nguồn nóng hoặc ánh sáng mặt trời. </li>
						</ul>
						<p>
							<strong>Thị trường:</strong>
							Bia chai Saigon Export được sản xuất và phân phối rộng rãi trên cả nước, đặc biệt từ miền Trung trở vào miền Nam.
						</p>
					</div>
				</div>
				<div class="col-lg-6 col-12">
		
				</div>
			</div>
		</div>
	</div>

<div class="clearfix"></div>

<!--Footer  -->
<footer>
     <div class="mainfooter" role="contentinfo">
      <div class="footer-middle" style="padding-top: 7rem;">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            
            <div class="footer-pad">
              <h4>GIỚI THIỆU</h4>
              <hr class="deep-dark accent-2 mb-4 mt-0 d-inline-block mx-auto bg-white " style="width: 60px;">
              <ul class="list-unstyled">
                <li><a href="#"></a></li>
                <li><a href="#">TỔNG QUAN</a></li>
                <li><a href="#">LỊCH SỬ PHÁT TRIỂN</a></li>
                <li><a href="#">TẦM NHÌN - SỨ MỆNH</a></li>
                <li><a href="#">BAN ĐIỀU HÀNH</a></li>
                <li><a href="#">ĐƠN VỊ THÀNH VIÊN</a></li>
                <li><a href="#">PHÂN PHỐI</a></li>
                <li><a href="#">GIẢI THƯỞNG</a></li>
                <li><a href="#">CÔNG NGHỆ</a></li>
              </ul>
            </div>
          </div>


          <div class="col-md-3 col-sm-6">
            
            <div class="footer-pad">
              <h4>SẢN PHẨM</h4>
              <hr class="deep-dark accent-2 mb-4 mt-0 d-inline-block mx-auto bg-white " style="width: 60px;">
              <ul class="list-unstyled">
                <li><a href="#"> BIA</a></li>
                <li><a href="#">NƯỚC GIẢI KHÁT</a></li>
                <li><a href="#">TỰ CÔNG BỐ SẢN PHẨM</a></li>
                
              </ul>
              
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            
            <div class="footer-pad">
              <h4>CỔ ĐÔNG</h4>
              <hr class="deep-dark accent-2 mb-4 mt-0 d-inline-block mx-auto bg-white " style="width: 60px;">
              <ul class="list-unstyled">
                <li><a href="#">CÔNG BỐ THÔNG TIN</a></li>
                <li><a href="#">BÁO CÁO TÀI CHÍNH</a></li>
                <li><a href="#">ĐẠI HỘI ĐỒNG CỔ ĐÔNG</a></li>
                <li><a href="#">BÁO CÁO THƯỜNG NIÊN</a></li>
                <li><a href="#">QUẢN TRỊ CÔNG TY</a></li>
                <li><a href="#">BẢN TIN NHÀ ĐẦU TƯ</a></li>
                <li><a href="#">THÔNG TIN LIÊN LẠC</a></li>
              </ul>
            </div>
          </div>
            <div class="col-md-3 col-sm-6">
            
            <div class="footer-pad">
              <h4>TRUYỀN THÔNG</h4>
              <hr class="deep-dark accent-2 mb-4 mt-0 d-inline-block mx-auto bg-white  " style="width: 60px;">
              <ul class="list-unstyled">
                <li><a href="#">TIN TỨC - SỰ KIỆN</a></li>
                <li><a href="#">PHIM VĂN HÓA</a></li>
                <li><a href="#">VĂN HÓA - ẨM THỰC</a></li>
                <li><a href="#">TUYỂN DỤNG</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="logo1">
        <img src="img/sabeco-logo.png">
      </div> 
        <div class="row">
          <div class="col-12">
            <p> COPYRIGHT &copy; 2016, TỔNG CÔNG TY CP BIA-RƯỢU-NƯỚC GIẢI KHÁT SÀI GÒN. ALL RIGHTS RESERVED.</p>
          </div>

        </div>  
            
      </div>
   
  </div>
  </div>
</footer>

</html>