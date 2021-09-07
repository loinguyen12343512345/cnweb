<?php
    require_once ('../datab/dbhelper.php');
    session_start();
if (isset($_POST['submit']))
{
   
    $fullname   = ($_POST['fullname']);
    $username   = ($_POST['username']);
    $password   = ($_POST['password']);
    
   
      
    // Kiểm tra username hoặc email có bị trùng hay không
    $sql = "SELECT * FROM admin WHERE username = '$username' ";
    $check  = mysqli_query($con,$sql);
    
      
    L
    
    if (mysqli_num_rows($check) > 0)
    {
        
        echo '<script language="javascript">alert("Thông tin đăng nhập bị sai"); 
                window.location="registerindex.php";
              </script>';
          
        
        die ();
    }
   
    else {
        
        $sql = "INSERT INTO admin (fullname,username, password) VALUES ('$fullname','$username','$password')";
          
        execute($sql);
        echo "<script>
                alert('Đăng kí tài khoản thành công !!!!!');
                window.location='../login/loginindex.php';
              </script>";
        
    }
}
