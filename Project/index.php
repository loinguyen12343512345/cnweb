<?php
  include('menu.php');
  require_once('datab/dbhelper.php');
    $wh = "";
?>
<!--sildeshow -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height:62rem">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="./img/banner-home-1.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/banner-home-2.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/banner-home-3.png" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/banner-home-4.png" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/banner-home-6.png" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/hinh-ve-nha-may-nguyen-chi-thanh-(mau) ban 5.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div> 
<!-- tintuc -->
    <div id="sp">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-sm-6" style="border-right: 1px solid gray;">
              <div class="sp1">
              <hr class="hrsp" style="width: 70px;border-color: black;">
              <h3>TIN CỔ ĐÔNG</h3>
              <div class="tcd">

                <a href="ctttcodong.php"><figure><img src="./img/hinh-mau.jpg"></figure></a>
                <a href="">Đại hội đồng cổ đông bất thường (Lấy ý kiến bằng văn bản)</a>
                <hr class="hrtt">
                <div class="row">
                  <div class="aye col-sm-6">
                  <a href="ctttcodong.php"><figure><img src="./img/hinh-mau.jpg"></figure></a>
                  <a href="">Báo cáo quản trị 6 tháng đầu năm 2018</a></div>
                  <div class="aye col-sm-6" >
                    <a href="ctttcodong.php"><figure><img src="./img/hinh-mau.jpg"></figure></a>
                    <a href="">Báo cáo Tài chính QII/2018</a></div>
                </div>  
              </div>
              </div>
            </div>
            
          <div class="col-sm-6">
              <div class="sp2">
                <hr class="hrsp" style="width: 70px;border-color: black;">
                <h3>TIN TỨC - SỰ KIỆN</h3>
                  <div class="ttsk">
                    <div class="ttsk1">
                      <?php
                       $sql= "select * from new where id=1";
                      
                      $datas = executeResult($sql);

                      ?>
                      <?php foreach ($datas as $row) {?>
                      <a href="chitiettt-sk.php? id=<?php echo $row['id'] ?>"><figure><img src="<?php echo $row['image']; ?>"></figure></a>
                      <a href="chitiettt-sk.php? id=<?php echo $row['id'] ?>"><?php echo $row['title']; ?></a>
                      <?php }?>
                    </div>
                    <hr class="hrtt">
                    <div class="row">
                      <div class="aye col-sm-6">
                      <?php
                       $sql= "select * from new where id=2 ";
                      
                      $datas = executeResult($sql);

                      ?>
                      <?php foreach ($datas as $row) {?>
                      <a href="chitiettt-sk.php? id=<?php echo $row['id'] ?>"><figure><img src="<?php echo $row['image']; ?>"></figure></a>
                      <a href="chitiettt-sk.php? id=<?php echo $row['id'] ?>"><?php echo $row['title']; ?></a>
                      <?php }?>
                    </div>
                      <div class="aye col-sm-6" >
                        <?php
                       $sql= "select * from new where id=3";
                      
                      $datas = executeResult($sql);

                      ?>
                      <?php foreach ($datas as $row) {?>
                      <a href="chitiettt-sk.php? id=<?php echo $row['id'] ?>"><figure><img src="<?php echo $row['image']; ?>"></figure></a>
                      <a href="chitiettt-sk.php? id=<?php echo $row['id'] ?>"><?php echo $row['title']; ?></a>
                      <?php }?>
                    </div>
                  </div>
              </div>  
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
<!-- TDH -->
  <div id="prod">
    <div class="container">
       <hr class="hrprod" style="border-color: black;">
       <h3><b>CÁC SẢN PHẨM</b> CỦA BIA SÀI GÒN</h3>
      <div class="row">    
       <section class="home-brand clearfix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
  <ul role="tablist" class="nav nav-tabs">
    <?php
                       $sql= "select * from product where id=1";
                      $datas = executeResult($sql);
                      ?>
                      <?php foreach ($datas as $row) {?>
    <li class="nav-item"><a data-toggle="tab" role="tab" class="nav-link active" href="#tab1"><div class="brandcol"><figure><div class="brandimg">
      <img src="<?php echo $row['image_menu']; ?>" alt="Bia Saigon Special"></div></figure></div></a></li>
    <?php } ?>
<?php
                       $sql= "select * from product where id=2";
                      $datas = executeResult($sql);?>
                      <?php foreach ($datas as $row) {?>
    <li class="nav-item"><a data-toggle="tab" role="tab" class="nav-link" href="#tab2"><div class="brandcol"><figure><div class="brandimg"><img src="<?php echo $row['image_menu']; ?>" alt="Bia Saigon Export"></div></figure></div></a></li>
    <?php } ?>
     <?php
                       $sql= "select * from product where id=8";
                      $datas = executeResult($sql); ?>
                      <?php foreach ($datas as $row) {?>
    <li class="nav-item"><a data-toggle="tab" role="tab" class="nav-link" href="#tab3"><div class="brandcol"><figure><div class="brandimg"><img src="<?php echo $row['image_menu']; ?>" alt="Bia Saigon Lager"></div></figure></div></a></li>
    <?php } ?>
     <?php
                       $sql= "select * from product where id=9";
                      $datas = executeResult($sql);?>
                      <?php foreach ($datas as $row) {?>
    <li class="nav-item"><a data-toggle="tab" role="tab" class="nav-link" href="#tab4"><div class="brandcol"><figure><div class="brandimg1"><img src="<?php echo $row['image_menu']; ?>" alt="333"></div></figure></div></a></li>
    <?php } ?>
    <?php
                       $sql= "select * from product where id=10";
                      $datas = executeResult($sql);?>
                      <?php foreach ($datas as $row) {?>
    <li class="nav-item"><a data-toggle="tab" role="tab" class="nav-link" href="#tab5"><div class="brandcol"><figure><div class="brandimg"><img src="<?php echo $row['image_menu']; ?>" alt="Bia Lạc Việt"></div></figure></div></a></li>
    <?php } ?>
  </ul>
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane  active" id="tab1">
      <div class="brand-detail clearfix">
        <div class="row flex flex-wrap">
          <div class="col-xs-12 col-lg-7"> 
            <?php
                       $sql= "select * from product where id=1";
                      $datas = executeResult($sql);
                      ?>
                      <?php foreach ($datas as $row) {?>
            <div class="brand-img "><img src="img/sg1.png" alt="Bia Saigon Special"></div>
          </div>
          <div class="col-xs-12 col-lg-5"style="margin-top: 7rem">
            <div class="brand-info"><div class="brand-logo"><img alt="" src="img/losg.png"></div>
           
<h3 class="brand-name"><?php echo $row['title_product']; ?><br>
<?php echo $row['title_product1']; ?></h3>
<div class="brand-des"><?php echo $row['content']; ?></div>
<div id="gtx-trans" style="position: absolute; left: 293px; top: 81px;">
<div class="gtx-trans-icon">&nbsp;</div>
</div><a class="link readmore" href="http://www.sabeco.com.vn/san-pham/bia/saigon-special" title="Bia Saigon Special">Xem thêm</a></div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    <div role="tabpanel" class="tab-pane" id="tab2" >
      <div class="brand-detail clearfix">
        <div class="row flex flex-wrap">
          <div class="col-xs-12 col-lg-7">
            <?php
                       $sql= "select * from product where id=2";
                      $datas = executeResult($sql);
                      ?>
                      <?php foreach ($datas as $row) {?>
            <div class="brand-img"><img src="img/sg2.png" alt="Bia Saigon Export"></div>
          </div>
          <div class="col-xs-12 col-lg-5" style="margin-top: 10rem">
            <div class="brand-info"><!--<div class="brand-logo"><img alt="" src="/Data/Sites/1/media/logo/export.jpg" /><br />-->
<h3 class="brand-name"><?php echo $row['title_product']; ?><br>
<?php echo $row['title_product1']; ?><br></h3>
<div class="brand-des"><?php echo $row['content']; ?></div><a class="link readmore" href="http://www.sabeco.com.vn/san-pham/bia/saigon-export" title="Bia Saigon Export">Xem thêm</a></div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    <div role="tabpanel" class="tab-pane" id="tab3">
      <div class="brand-detail clearfix">
        <div class="row flex flex-wrap">
          <div class="col-xs-12 col-lg-7">
            <?php
                       $sql= "select * from product where id=8";
                      $datas = executeResult($sql);
                      ?>
                      <?php foreach ($datas as $row) {?>
            <div class="brand-img"><img src="img/sg3.png" alt="Bia Saigon Lager"></div>
          </div>
          <div class="col-xs-12 col-lg-5" style="margin-top: 10rem">
            <div class="brand-info"><!-- <div class="brand-logo"><img alt="" src="/Data/Sites/1/media/logo/logo-lager.jpg" /><br />-->
<h3 class="brand-name">“<?php echo $row['title_product']; ?>&nbsp;<br>
<?php echo $row['title_product1']; ?>”</h3>
<div class="brand-des">Kết tinh của nghệ thuật nấu bia lâu đời với sự giám sát kỳ công của các bậc thầy nấu bia, tự hào đứng vào hàng ngũ những loại bia đạt huy chương Vàng quốc tế IBA 2019.</div><a class="link readmore" href="http://www.sabeco.com.vn/san-pham/bia/saigon-lager" title="Bia Saigon Lager">Xem thêm</a></div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    <div role="tabpanel" class="tab-pane" id="tab4">
      <div class="brand-detail clearfix">
        <div class="row flex flex-wrap">
          <div class="col-xs-12 col-lg-7">
            <?php
                       $sql= "select * from product where id=9";
                      $datas = executeResult($sql);
                      ?>
                      <?php foreach ($datas as $row) {?>
            <div class="brand-img"><img src="img/sg4.png" alt="333"></div>
          </div>
          <div class="col-xs-12 col-lg-5" style="margin-top: 10rem">
            <div class="brand-info"><!--<div class="brand-logo"><img alt="" src="/Data/Sites/1/media/logo/logo-333.jpg" /><br />-->
<h3 class="brand-name">
“<?php echo $row['title_product']; ?>”</h3>
<div class="brand-des">&nbsp;</div>
<p>Là thương hiệu bia lon đầu tiên được sản xuất tại thị trường Việt Nam kể từ năm 1985. Bia 333 là thành quả kết hợp từ những gì tinh túy nhất của 3 quốc gia: với hoa bia Hallertau từ vùng Bavaria nước Đức, công thức trăm năm kế thừa từ Pháp và được ủ bởi tài năng và tinh thần của các nghệ nhân nấu bia Việt Nam. Chính các yếu tố đó đã mang lại hương bia nồng nàn và vị bia đầy đặn đặc trưng của Bia 333. Trải nghiệm vị Bia 333 là trải nghiệm vị bia huyền thoại, đã không ngừng được kế thừa và gìn giữ suốt hơn 140 năm qua.</p><a class="link readmore" href="http://www.sabeco.com.vn/san-pham/bia/333" title="333">Xem thêm</a></div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    <div role="tabpanel" class="tab-pane" id="tab5">
      <div class="brand-detail clearfix">
        <div class="row flex flex-wrap">
          <div class="col-xs-12 col-lg-7">
            <?php
                       $sql= "select * from product where id=10";
                      $datas = executeResult($sql);
                      ?>
                      <?php foreach ($datas as $row) {?>
            <div class="brand-img"><img src="img/sg5.png" alt="Bia Lạc Việt"></div>
          </div>
          <div class="col-xs-12 col-lg-5" style="margin-top: 10rem;">
            <div class="brand-info"><div class="brand-logo"><span style="font-family: inherit; font-size: 24px;">“<?php echo $row['title_product']; ?> – <?php echo $row['title_product1']; ?>”</span><br>
</div>
<div class="brand-des">Công thức Thuần Việt Ẩn sâu trong thư viện của nhà máy BiaSaigon Nguyễn Chí Thanh là một kho tàng kiến thức cũng như  nghiên cứu về bia của nhiều thế hệ các bậc thầy nấu bia Việt Nam xuyên suốt bề dày lịch sử 145 năm qua.
<p>&nbsp;</p>
Để kỷ niệm dấu mốc thời gian đặc biệt này, các bậc thầy nấu bia tại SABECO đã quyết định sáng tạo ra một  công thức tinh túy để đại diện xứng đáng cho di sản của thương hiệu. Phát kiến này đã cho một kết quả mỹ  mãn. Một hương vị bia đầy say mê, vẫn đậm đà nhưng êm mượt và sảng khoái khiến cho những khoảnh  khắc tận hưởng cùng bạn bè trở nên lâu hơn.
</div><a class="link readmore" href="http://www.sabeco.com.vn/san-pham/bia/lac-viet" title="Bia Lạc Việt">Xem thêm</a></div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
  </div></section>
      </div>
    </div>
  </div>
  <div id="vh">
  <div class="container">
              <hr class="hrprod" style="border-color: black;">
              <h3><b>VĂN HÓA</b> & ẨM THỰC</h3>
              <div class="row">
              <div class="col-6">
                <div class="row">
                <div class="col-6">
                  <?php
                       $sql= "select * from new where id=13";
                      $datas = executeResult($sql);
                      ?>
                      <?php foreach ($datas as $row) {?>
                  <a href="chitietvh-at.php?id=<?php echo $row['id']; ?>"><figure><img src="<?php echo $row['image']; ?>"></figure></a>
                </div>
                <div class="col-6" >
                  <hr class="hrprod" style="border-color: black;width: 40px;">
                  <p><?php echo $row['title']; ?><br><a href="chitietvh-at.php?id=<?php echo $row['id']; ?>">Xem thêm</a></p>
                  <?php } ?>
                  </div>
                </div>
                <div id="vh2">
                 <div class="row">
                <?php
                      $sql= "select * from new where id=12";
                      $datas = executeResult($sql);
                      ?>
                      <?php foreach ($datas as $row) {?>
                <div class="col-6" >
                  <hr class="hrprod" style="border-color: black;width: 40px;">
                  <p><?php echo $row['title']; ?>.<br><a href="chitietvh-at.php?id=<?php echo $row['id']; ?>">Xem thêm</a></p>
                </div>
                <div class="col-6">
                  
                  <a href="chitietvh-at.php?id=<?php echo $row['id']; ?>"><figure><img src="<?php echo $row['image']; ?>"></figure></a>
                </div>
                </div>
                </div>
                  </div>
<?php } ?>
                  <div class="col-sm-6">
                    <?php
                       $sql= "select * from new where id=11";
                      $datas = executeResult($sql);
                      ?>
                      <?php foreach ($datas as $row) {?>
                    <figure style="z-index: -1;"><a href="chitietvh-at.php?id=<?=$id?>"><img src="<?php echo $row['image']; ?>"></a></figure>
                    <div class="h1">
                      <hr class="hrsp" style="width: 50px;border-color: WHITE; margin-left: 27PX">
                      <a href="chitietvh-at.php?id=<?php echo $row['id']; ?>" style="text-decoration: none;"><h1 style="z-index:1000; color:#F8F8FF; font-size:20px" ><?php echo $row['title_vhat1']; ?></h1></a>
<?php } ?>
                    </div>
                  </div>
                </div>
          </div>
            </div>

<!-- BỔ SUNG THÊM LIÊN KẾT -->
<div id="kn">
  <div class="container">
    <hr class="hrprod" style="border-color: black;">
   <h3><b>KẾT NỐI</b></h3>
    <div class="row">
      <div class="col-12">
      <div class="row">
        <div class="col-xs-6 col-md-3">
          <a href=""><img src="./img/kn1.jpg"></a>
          <div class="row" style="margin-top:-90px ; margin-left: 1rem;">
            <img src="./img/logosabe.png">
            <h6 style="margin-left:0.5rem;color: white; margin-top: 1.5rem; ">Saigon Special</h6>
          </div>
        </div>

        <div class="col-xs-6 col-md-3">
          <a href=""><img src="./img/kn2.jpg"></a>
          <div class="row" style="margin-top:-90px ; margin-left: 1rem;">
            <img src="./img/logoface.png">
            <h6 style="margin-left:0.5rem;color: white; margin-top: 1.5rem; ">Saigon Special</h6>
          </div>
        </div>

        <div class="col-xs-6 col-md-3">
          <a href=""><img src="./img/kn3.jpg"></a>
          <div class="row" style="margin-top:-90px ; margin-left: 1rem;">
            <img src="./img/logoface.png">
            <h6 style="margin-left:0.5rem;color: white; margin-top: 1.5rem; ">Bia Sài Gòn 333</h6>
          </div>
        </div>

        <div class="col-xs-6 col-md-3">
          <a href=""><img src="./img/kn4.jpg"></a>
          <div class="row" style="margin-top:-90px ; margin-left: 1rem;">
            <img src="./img/logosabe.png">
            <h6 style="margin-left:0.5rem;color: white; margin-top: 0.5rem; ">Công ty CP Nước<br>Giải Khát Chương<br>Dương</h6>
          </div>
        </div>
        
        
      </div>
    </div>
  </div>
</div>          
</div>   

 </body>


<?php
  include('footer.php')
?>
