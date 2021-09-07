<?php
	require_once ('../datab/dbhelper.php');
	session_start();

	if (isset($_POST['submit']) && $_POST["username"] != '' && $_POST["password"] != '') 
	{
			// $id_user    = $_POST["id"];
			$usrnm      = $_POST["username"];
			$password   = $_POST["password"];
			$sql		= "select * from admin where username ='$usrnm' and password='$password' " ;
			$user = mysqli_query($con, $sql);
			

			if(mysqli_num_rows($user)>0){
				

				$_SESSION["username"] = $usrnm;
				header("Location: ../admin/category/category.php");
				
			}
			else{
				echo "<script>
					      alert('Nhập sai tên Tài Khoản hoặc Mật Khẩu');
						  window.location='http://localhost/project/login/loginindex.php';
					      </script>";
					    
			}

	}
	else
	{	
		echo "<script>
					      alert('Chưa nhập tài khoản mật khẩu');
						  window.location='http://localhost/project/login/loginindex.php';
					      </script>";
	}

?>