<?php
session_start();
if (!isset($_SESSION['username'])){
    echo "<script>
                          alert('Bạn cần đăng nhập vào hệ thống.');
                          window.location='http://localhost/project/index.php';
                          </script>";
    exit();
}?>