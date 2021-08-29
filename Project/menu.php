<?php
require_once('datab/dbhelper.php');
session_start();
if (isset($_SESSION['username'])) {
   $sql = "select pms from admin where username = '".$_SESSION['username']."'" ;

  $check = executeSingleResult($sql);
  if ($check != null) {
    $status = $check['pms'];
  }

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Style -->
    <link rel="stylesheet" href="style.css">
  

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="http://example.com/myicon.ico" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <title>SABECO</title>
  </head>
  <body>
    <script type="text/javascript">
        function displaysearch()
        {
          
          if (document.getElementById("boxxsearch").style.display == "none")
          {
            
            document.getElementById("boxxsearch").style.display = "block";
          }
          else
          {
            document.getElementById("boxxsearch").style.display = "none";
          }
        }
      </script>
    <div class="headerTop">
    </div>
  <!-- navbar -->
   <div cl></div>
   
  
  <nav class="navbar  navbar-expand-xl bg-white sticky-top "  >
      <div class="container">
          <a href="./index.html" class="navbar-brand d-flex align-items-center"> <img src="./img/logo-foo.png" alt=""></a>
          <button class="navbar-toggler bg-secondary" type="button" data-toggle="collapse" data-target="#navbarSupportedContentXL" aria-controls="navbarSupportedContentXL" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon " style="color: black;"></span>
          </button>
          
          
          <div class="collapse navbar-collapse" id="navbarSupportedContentXL">
              <ul class="navbar-nav mr-auto">
                  <div class="oneclick">
                  <a href="./index.php"><i class="fa fa-home"></i></a>
                  </div>

                  <li class="nav-item active">
                      <a class="nav-link " href="introduce.php">GIỚI THIỆU<span class="sr-only">(current)</span></a>
                  </li>

                  <li class="nav-item active">
                      <a class="nav-link " href="product.php">SẢN PHẨM<span class="sr-only">(current)</span></a>
                  </li>
                  
                  <li class="nav-item dropdown">
                      <a class="nav-link " href="codong.php" id="navbarDropdownXL" >
                       CỔ ĐÔNG   
                      </a>
                      <div class="dropdown-content" >
                          <a class="dropdown-item" href="">CÔNG BỐ THÔNG TIN</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">BÁO CÁO TÀI CHÍNH</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">ĐẠI HỘI CỔ ĐÔNG</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">BÁO CÁO THƯỜNG NIÊN</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">BẢN TIN ĐẦU TƯ</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">THÔNG TIN LIÊN LẠC</a>
                      </div>
                  </li>

                  <li class="nav-item dropdown">
                      <a class="nav-link " href="media.php" id="navbarDropdownXL" >
                       TRUYỀN THÔNG   
                      </a>
                      <div class="dropdown-content" >
                          <a class="dropdown-item" href="tt-sk.php">TIN TỨC- SỰ KIỆN</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">PHIM QUẢNG CÁO</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="vh-at.php">VĂN HÓA & ẨM THỰC</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">TUYỂN DỤNG</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">KHUYẾN MÃI</a>
                          
                      </div>
                  </li>

                  <li class="nav-item dropdown">
                      <a class="nav-link " href="phanphoi.php" id="navbarDropdownXL" >
                       PHÂN PHỐI   
                      </a>
                      <div class="dropdown-content" >
                          <a class="dropdown-item" href="phanphoi.php">NỘI ĐỊA</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="phanphoinn.php">NƯỚC NGOÀI</a>
                          
                      </div>
                  </li>
                  
                  <li class="nav-item active">
                      <a class="nav-link " href="contact.php">LIÊN HỆ<span class="sr-only">(current)</span></a>
                  </li>
                  <style type="text/css">
                    .search{
                      position: absolute;
                      top: 75px;
                      right: 100px;
                      background-color: #000; 
                      display: none;
                      animation: moveInLeft 0.5s ease-out;
                    }
                     .search input{
                      float: left;
                      margin-top: 5px;
                      color: #fff;
                      background: none;
                      border: 0px;
                      padding-left: 10px;
                     }
                     .search a{
                        background-color: #000; 
                        border: 0px;
                        size: 10px;
                        height: 30px;
                     }
                    .search input:focus-visible{
                      
                      outline: -webkit-focus-ring-color auto 0px;
                    }
                      @keyframes moveInLeft {
                        0% {
                            opacity: 0;
                            transform: translateX(-50px);
                        }

                        80% {
                            transform: translateX(10px)
                        }

                        100% {
                            opacity: 1;
                            transform: translateX(0);
                        }
                    }

                  </style>
                  
                  <div class="oneclick">
                  <a href="#" onclick="displaysearch()"><i class="fa fa-search"></i></a>
                  <div id="boxxsearch" class="search" >
                    <input style="" type="text" name=""  placeholder="Tìm kiếm">
                    <a href="#" style=" "><i style="margin: 10px; color: #fff;" class="fa fa-search"></i></a>
                  </div>
                  </div>

                  <li class="nav-item active">
                      <a class="nav-link " href="#">EN<span class="sr-only">(current)</span></a>
                  </li>
                  <!--./list.php-->
                  
              </ul>
              
          </div>
      </div>
    </nav>
  
<!-- contact -->
    <div class="contact1" style="width: 170px;">
      <ul>
                  
 
        <?php 
          if (!isset($_SESSION['username'])) { ?>     
          <a href="./login/loginindex.php">
                  <li>
                    <i class='fa fa-user' aria-hidden='true' style='' ></i><span style="">Đăng Nhập</span>
                  </li>
                </a>
        
        <?php } else{ ?>

                
                <a href='./logout.php'>
                  <li>
                    <i class= 'fa fa-sign-out' aria-hidden='true' style='' ></i><span style=''>Xin Chào: <?=$_SESSION['username']?></span>
                  </li>
                </a>
                
                <?php if ($status == 1) {?>
                <a href='./admin/product/product.php'>
                  <li>
                    <i class= 'fa fa-book' aria-hidden='true' style='' ></i><span style=''>Trang quản trị</span>
                  </li>
                </a>
                <?php } ?>

        <?php  } ?>
        

        <!-- 111111111111111111111111111111111111111111111111111 -->
        <a href="">
          <li>
            <i class="fa fa-users" aria-hidden="true" style="" ></i><span style="">Văn Phòng Điện Tử</span>
          </li>
        </a>
        <a href="https://outlook.office.com/mail/inbox">
          <li>
            <i class="fa fa-envelope" aria-hidden="true" style="" ></i><span style="">Thư Điện Tử</span>
          </li>
        </a>
        <a href="./hoidap.php">
          <li>
            <i class="fa fa-question" aria-hidden="true" style="" ></i><span style="">Hỏi Đáp</span>
          </li>
        </a>
        <a href="https://www.facebook.com/bia333.sabeco/">
          <li>
            <i class="fa fa-facebook" aria-hidden="true" style="" ></i><span style="">Facebook</span>
          </li>
        </a>
        <a href="https://www.youtube.com/channel/UCqQNckLeJbv5YggtmqpizEQ">
          <li>
            <i class="fa fa-youtube-square" aria-hidden="true" style="" ></i><span style="">Youtube</span>
          </li>
        </a>
      </ul>

    </div>

<!-- scoll on top -->
<a onclick="topFunction()" id="myBtn" title="Go to top" ><img src="./img/up.png"></a>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>



    