<?php
  include('menu.php');
  require_once('datab/dbhelper.php');
    
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
    <div class="clearfix"></div>
<!-- tintuc -->
    <div id="sp" style="margin-top: 6.3rem">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
              <div class="col-sm-6 w3-animate-left" style="border-right: 1px solid gray;">
                <div class="sp1">
                <hr class="hrsp" style="width: 70px;border-color: black;">
                <h3>TIN C??? ????NG</h3>
                <div class="tcd">

                  <a href="ctttcodong.php"><figure><img src="./img/hinh-mau.jpg"></figure></a>
                  <a href="">?????i h???i ?????ng c??? ????ng b???t th?????ng (L???y ?? ki???n b???ng v??n b???n)</a>
                  <hr class="hrtt">
                  <div class="row">
                    <div class="aye col-sm-6">
                    <a href="ctttcodong.php"><figure><img src="./img/hinh-mau.jpg"></figure></a>
                    <a href="">B??o c??o qu???n tr??? 6 th??ng ?????u n??m 2018</a></div>
                    <div class="aye col-sm-6" >
                      <a href="ctttcodong.php"><figure><img src="./img/hinh-mau.jpg"></figure></a>
                      <a href="">B??o c??o T??i ch??nh QII/2018</a></div>
                  </div>  
                </div>
                </div>
              </div>
            
            <div class="col-sm-6 w3-animate-right">
                <div class="sp2">
                  <hr class="hrsp" style="width: 70px;border-color: black;">
                  <h3>TIN T???C - S??? KI???N</h3>
                    <div class="ttsk">
                      <div class="ttsk1">
                        <?php
                         $sql= "select * from new where type_of_new = 0 order by id  limit 1";
                        
                        $datas = executeResult($sql);

                        ?>
                        <?php foreach ($datas as $row) {?>
                        <a href="chitiettt-sk.php? id=<?php echo $row['id'] ?>"><figure><img src="<?php echo $row['image']; ?>"></figure></a>
                        <a href="chitiettt-sk.php? id=<?php echo $row['id'] ?>"><?php echo $row['title']; ?></a>
                        <?php }?>
                      </div>
                      <hr class="hrtt">
                      <div class="row">
                        <?php
                         $sql= "select * from new where type_of_new = 0 order by id limit 1,2 ";
                        
                        $datas = executeResult($sql);

                        ?>
                        <?php foreach ($datas as $row) {?>
                        <div class="aye col-sm-6">
                        
                        <a href="chitiettt-sk.php? id=<?php echo $row['id'] ?>"><figure><img src="<?php echo $row['image']; ?>"></figure></a>
                        <a href="chitiettt-sk.php? id=<?php echo $row['id'] ?>"><?php echo $row['title']; ?></a>
                        
                      </div>
                        <?php }?>
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
    <div class="container w3-animate-bottom">
       <hr class="hrprod" style="border-color: black;">
       <h3><b>CA??C SA??N PH????M</b> CU??A BIA SA??I GO??N</h3>
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
                       $sql= "select * from product where id=3";
                      $datas = executeResult($sql); ?>
                      <?php foreach ($datas as $row) {?>
    <li class="nav-item"><a data-toggle="tab" role="tab" class="nav-link" href="#tab3"><div class="brandcol"><figure><div class="brandimg"><img src="<?php echo $row['image_menu']; ?>" alt="Bia Saigon Lager"></div></figure></div></a></li>
    <?php } ?>
     <?php
                       $sql= "select * from product where id=6";
                      $datas = executeResult($sql);?>
                      <?php foreach ($datas as $row) {?>
    <li class="nav-item"><a data-toggle="tab" role="tab" class="nav-link" href="#tab4"><div class="brandcol"><figure><div class="brandimg1"><img src="<?php echo $row['image_menu']; ?>" alt="333"></div></figure></div></a></li>
    <?php } ?>
    <?php
                       $sql= "select * from product where id=5";
                      $datas = executeResult($sql);?>
                      <?php foreach ($datas as $row) {?>
    <li class="nav-item"><a data-toggle="tab" role="tab" class="nav-link" href="#tab5"><div class="brandcol"><figure><div class="brandimg"><img src="<?php echo $row['image_menu']; ?>" alt="Bia L???c Vi???t"></div></figure></div></a></li>
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
</div><a class="link readmore" href="http://www.sabeco.com.vn/san-pham/bia/saigon-special" title="Bia Saigon Special">Xem th??m</a></div>
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
<div class="brand-des"><?php echo $row['content']; ?></div><a class="link readmore" href="http://www.sabeco.com.vn/san-pham/bia/saigon-export" title="Bia Saigon Export">Xem th??m</a></div>
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
<h3 class="brand-name">???<?php echo $row['title_product']; ?>&nbsp;<br>
<?php echo $row['title_product1']; ?>???</h3>
<div class="brand-des">K???t tinh c???a ngh??? thu???t n???u bia l??u ?????i v???i s??? gi??m s??t k??? c??ng c???a c??c b???c th???y n???u bia, t??? h??o ?????ng v??o h??ng ng?? nh???ng lo???i bia ?????t huy ch????ng V??ng qu???c t??? IBA 2019.</div><a class="link readmore" href="http://www.sabeco.com.vn/san-pham/bia/saigon-lager" title="Bia Saigon Lager">Xem th??m</a></div>
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
???<?php echo $row['title_product']; ?>???</h3>
<div class="brand-des">&nbsp;</div>
<p>L?? th????ng hi???u bia lon ?????u ti??n ???????c s???n xu???t t???i th??? tr?????ng Vi???t Nam k??? t??? n??m 1985. Bia 333 l?? th??nh qu??? k???t h???p t??? nh???ng g?? tinh t??y nh???t c???a 3 qu???c gia: v???i hoa bia Hallertau t??? v??ng Bavaria n?????c ?????c, c??ng th???c tr??m n??m k??? th???a t??? Ph??p v?? ???????c ??? b???i t??i n??ng v?? tinh th???n c???a c??c ngh??? nh??n n???u bia Vi???t Nam. Ch??nh c??c y???u t??? ???? ???? mang l???i h????ng bia n???ng n??n v?? v??? bia ?????y ?????n ?????c tr??ng c???a Bia 333. Tr???i nghi???m v??? Bia 333 l?? tr???i nghi???m v??? bia huy???n tho???i, ???? kh??ng ng???ng ???????c k??? th???a v?? g??n gi??? su???t h??n 140 n??m qua.</p><a class="link readmore" href="http://www.sabeco.com.vn/san-pham/bia/333" title="333">Xem th??m</a></div>
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
            <div class="brand-img"><img src="img/sg5.png" alt="Bia L???c Vi???t"></div>
          </div>
          <div class="col-xs-12 col-lg-5" style="margin-top: 10rem;">
            <div class="brand-info"><div class="brand-logo"><span style="font-family: inherit; font-size: 24px;">???<?php echo $row['title_product']; ?> ??? <?php echo $row['title_product1']; ?>???</span><br>
</div>
<div class="brand-des">C??ng th???c Thu???n Vi???t ???n s??u trong th?? vi???n c???a nh?? m??y BiaSaigon Nguy???n Ch?? Thanh l?? m???t kho t??ng ki???n th???c c??ng nh??  nghi??n c???u v??? bia c???a nhi???u th??? h??? c??c b???c th???y n???u bia Vi???t Nam xuy??n su???t b??? d??y l???ch s??? 145 n??m qua.
<p>&nbsp;</p>
????? k??? ni???m d???u m???c th???i gian ?????c bi???t n??y, c??c b???c th???y n???u bia t???i SABECO ???? quy???t ?????nh s??ng t???o ra m???t  c??ng th???c tinh t??y ????? ?????i di???n x???ng ????ng cho di s???n c???a th????ng hi???u. Ph??t ki???n n??y ???? cho m???t k???t qu??? m???  m??n. M???t h????ng v??? bia ?????y say m??, v???n ?????m ???? nh??ng ??m m?????t v?? s???ng kho??i khi???n cho nh???ng kho???nh  kh???c t???n h?????ng c??ng b???n b?? tr??? n??n l??u h??n.
</div><a class="link readmore" href="http://www.sabeco.com.vn/san-pham/bia/lac-viet" title="Bia L???c Vi???t">Xem th??m</a></div>
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
              <h3><b>V??N HO??A</b> & ????M TH????C</h3>
              <div class="row">
              <div class="col-6 w3-animate-left">
                <div class="row">
                <div class="col-6">
                  <?php
                       $sql= "select * from new where id=10";
                      $datas = executeResult($sql);
                      ?>
                      <?php foreach ($datas as $row) {?>
                  <a href="chitietvh-at.php?id=<?php echo $row['id']; ?>"><figure><img style="border-radius: 10px" src="<?php echo $row['image']; ?>"></figure></a>
                </div>
                <div class="col-6" >
                  <hr class="hrprod" style="border-color: black;width: 40px;">
                  <p><?php echo $row['title']; ?><br><a href="chitietvh-at.php?id=<?php echo $row['id']; ?>">Xem th??m</a></p>
                  <?php } ?>
                  </div>
                </div>
                <div id="vh2">
                 <div class="row">
                <?php
                      $sql= "select * from new where id=9";
                      $datas = executeResult($sql);
                      ?>
                      <?php foreach ($datas as $row) {?>
                <div class="col-6" >
                  <hr class="hrprod" style="border-color: black;width: 40px;">
                  <p><?php echo $row['title']; ?>.<br><a href="chitietvh-at.php?id=<?php echo $row['id']; ?>">Xem th??m</a></p>
                </div>
                <div class="col-6">
                  
                  <a href="chitietvh-at.php?id=<?php echo $row['id']; ?>"><figure><img style="border-radius: 10px" src="<?php echo $row['image']; ?>"></figure></a>
                </div>
                </div>
                </div>
                  </div>
<?php } ?>
                  <div class="col-sm-6 w3-animate-right">
                    <?php
                       $sql= "select * from new where id=8";
                      $datas = executeResult($sql);
                      ?>
                      <?php foreach ($datas as $row) {?>
                    <figure style="z-index: -1;"><a href="chitietvh-at.php?id=<?=$id?>"><img style="border-radius: 15px" src="<?php echo $row['image']; ?>"></a></figure>
                    <div class="h1">
                      <hr class="hrsp" style="width: 50px;border-color: WHITE; margin-left: 27PX">
                      <a href="chitietvh-at.php?id=<?php echo $row['id']; ?>" style="text-decoration: none;"><h1 style="z-index:1000; color:#F8F8FF; font-size:20px" ><?php echo $row['title_vhat1']; ?></h1></a>
<?php } ?>
                    </div>
                  </div>
                </div>
          </div>
            </div>

<!-- B??? SUNG TH??M LI??N K???T -->
<div id="kn">
  <div class="container">
    <hr class="hrprod" style="border-color: black;">
   <h3><b>K????T N????I</b></h3>
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
            <h6 style="margin-left:0.5rem;color: white; margin-top: 1.5rem; ">Bia S??i G??n 333</h6>
          </div>
        </div>

        <div class="col-xs-6 col-md-3">
          <a href=""><img src="./img/kn4.jpg"></a>
          <div class="row" style="margin-top:-90px ; margin-left: 1rem;">
            <img src="./img/logosabe.png">
            <h6 style="margin-left:0.5rem;color: white; margin-top: 0.5rem; ">C??ng ty CP N?????c<br>Gi???i Kh??t Ch????ng<br>D????ng</h6>
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
