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
									<span style="color: #fff;margin-left: 40px;"> % ????? c???n</span>
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
									<span style="color: #fff;margin-left: 50px;">chai/k??t</span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12" style="margin-top: 90px;">
								<p>
									<span style="font-size: 24px">
										<strong style="color: #fff;">???<?=$title_product2?>??? </strong>
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
							<strong>Ch???ng lo???i s???n ph???m:</strong>
							<?=$chungloai?>
						</p>
						<p>
							<strong>Th??nh ph???n:</strong>
							N?????c, malt ?????i m???ch, ng?? c???c, hoa bia.
						</p>
						<p>
							<strong>Bao b??: </strong>
							????ng trong chai th???y tinh m??u n??u, 20 chai/k??t nh???a
						</p>
						<p>
							<strong>H?????ng d???n s??? d???ng: </strong>
							Ngon h??n khi u???ng l???nh, t???t nh???t ??? 10 ??? 15 ????? C.
						</p>
						<p>
							<strong>H?????ng d???n b???o qu???n:</strong>
						</p>
						<ul>
							<li>B???o qu???n n??i kh?? r??o v?? tho??ng m??t. </li>
							<li>Tr??nh ti???p x??c tr???c ti???p v???i ngu???n n??ng ho???c ??nh s??ng m???t tr???i. </li>
						</ul>
						<p>
							<strong>Th??? tr?????ng:</strong>
							Bia chai Saigon Export ???????c s???n xu???t v?? ph??n ph???i r???ng r??i tr??n c??? n?????c, ?????c bi???t t??? mi???n Trung tr??? v??o mi???n Nam.
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
              <h4>GI???I THI???U</h4>
              <hr class="deep-dark accent-2 mb-4 mt-0 d-inline-block mx-auto bg-white " style="width: 60px;">
              <ul class="list-unstyled">
                <li><a href="#"></a></li>
                <li><a href="#">T???NG QUAN</a></li>
                <li><a href="#">L???CH S??? PH??T TRI???N</a></li>
                <li><a href="#">T???M NH??N - S??? M???NH</a></li>
                <li><a href="#">BAN ??I???U H??NH</a></li>
                <li><a href="#">????N V??? TH??NH VI??N</a></li>
                <li><a href="#">PH??N PH???I</a></li>
                <li><a href="#">GI???I TH?????NG</a></li>
                <li><a href="#">C??NG NGH???</a></li>
              </ul>
            </div>
          </div>


          <div class="col-md-3 col-sm-6">
            
            <div class="footer-pad">
              <h4>S???N PH???M</h4>
              <hr class="deep-dark accent-2 mb-4 mt-0 d-inline-block mx-auto bg-white " style="width: 60px;">
              <ul class="list-unstyled">
                <li><a href="#"> BIA</a></li>
                <li><a href="#">N?????C GI???I KH??T</a></li>
                <li><a href="#">T??? C??NG B??? S???N PH???M</a></li>
                
              </ul>
              
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            
            <div class="footer-pad">
              <h4>C??? ????NG</h4>
              <hr class="deep-dark accent-2 mb-4 mt-0 d-inline-block mx-auto bg-white " style="width: 60px;">
              <ul class="list-unstyled">
                <li><a href="#">C??NG B??? TH??NG TIN</a></li>
                <li><a href="#">B??O C??O T??I CH??NH</a></li>
                <li><a href="#">?????I H???I ?????NG C??? ????NG</a></li>
                <li><a href="#">B??O C??O TH?????NG NI??N</a></li>
                <li><a href="#">QU???N TR??? C??NG TY</a></li>
                <li><a href="#">B???N TIN NH?? ?????U T??</a></li>
                <li><a href="#">TH??NG TIN LI??N L???C</a></li>
              </ul>
            </div>
          </div>
            <div class="col-md-3 col-sm-6">
            
            <div class="footer-pad">
              <h4>TRUY???N TH??NG</h4>
              <hr class="deep-dark accent-2 mb-4 mt-0 d-inline-block mx-auto bg-white  " style="width: 60px;">
              <ul class="list-unstyled">
                <li><a href="#">TIN T???C - S??? KI???N</a></li>
                <li><a href="#">PHIM V??N H??A</a></li>
                <li><a href="#">V??N H??A - ???M TH???C</a></li>
                <li><a href="#">TUY???N D???NG</a></li>
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
            <p> COPYRIGHT &copy; 2016, T???NG C??NG TY CP BIA-R?????U-N?????C GI???I KH??T S??I G??N. ALL RIGHTS RESERVED.</p>
          </div>

        </div>  
            
      </div>
   
  </div>
  </div>
</footer>

</html>