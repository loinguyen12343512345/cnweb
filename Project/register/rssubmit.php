<?php
    require_once ('../datab/dbhelper.php');
    session_start();
if (isset($_POST['submit']))
{
    // Lấy thông tin
    // Để an toàn thì ta dùng hàm mssql_escape_string để
    // chống hack sql injection
    $fullname   = ($_POST['fullname']);
    $username   = ($_POST['username']);
    $password   = ($_POST['password']);
    
   
      
    // Kiểm tra username hoặc email có bị trùng hay không
    $sql = "SELECT * FROM admin WHERE username = '$username' ";
    $check  = mysqli_query($con,$sql);
    // Thực thi câu truy vấn
    // $result = mysqli_query($conn, $sql);
      
    // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
    
    if (mysqli_num_rows($check) > 0)
    {
        // Sử dụng javascript để thông báo
        echo '<script language="javascript">alert("Thông tin đăng nhập bị sai"); 
                window.location="registerindex.php";
              </script>';
          
        // Dừng chương trình
        die ();
    }
   
    else {
        // Ngược lại thì thêm bình thường
        $sql = "INSERT INTO admin (fullname,username, password) VALUES ('$fullname','$username','$password')";
          
        execute($sql);
        echo "<script>
                alert('Đăng kí tài khoản thành công !!!!!');
                window.location='../login/loginindex.php';
              </script>";
        
    }
}
