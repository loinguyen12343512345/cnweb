<?php
require_once ('../../datab/dbhelper.php');

$id = $fullname = $username = $password =  '';
if (!empty($_POST)) {
    if (isset($_POST['fullname'])) {
        $fullname = $_POST['fullname'];
        $fullname = str_replace('"', '\\"', $fullname);
    }
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    }
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
        $username = str_replace('"', '\\"', $username);
    }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
        $password = str_replace('"', '\\"', $password);
    }
    

    if (!empty($fullname)) {
        
        //Luu vao database
        if ($id == '') {
            $sql = 'insert into admin(fullname,username,password) values ("'.$fullname.'", "'.$username.'", "'.$password.'", )';
        } else {
            $sql = 'update admin set fullname = "'.$fullname.'", username = "'.$username.'", password = "'.$password.'" where id = '.$id;
        }

        execute($sql);
        // print($sql);
        // exit();
        header('Location: user.php');
        die();
    }
}

if (isset($_GET['id'])) {
    $id      = $_GET['id'];
    $sql     = 'select * from admin where id = '.$id;
    $admin = executeSingleResult($sql);
    if ($admin != null) {
        $fullname       = $admin['fullname'];
        $username       = $admin['username'];
        $password       = $admin['password'];
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>USERS-MANAGE</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #566787;
    background: #f7f5f2;
    font-family: 'Roboto', sans-serif;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
  	min-width: 1000px;
    background: #fff;
    padding: 20px 25px;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    color: #fff;
    background: #40b2cd;		
    padding: 16px 25px;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
}
.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}
.search-box {
    position: relative;
    float: right;
}
.search-box .input-group {
    min-width: 300px;
    position: absolute;
    right: 0;
}
.search-box .input-group-addon, .search-box input {
    border-color: #ddd;
    border-radius: 0;
}	
.search-box input {
    height: 34px;
    padding-right: 35px;
    background: #f4fcfd;
    border: none;
    border-radius: 2px !important;
}
.search-box input:focus {
    background: #fff;
}
.search-box input::placeholder {
    font-style: italic;
}
.search-box .input-group-addon {
    min-width: 35px;
    border: none;
    background: transparent;
    position: absolute;
    right: 0;
    z-index: 9;
    padding: 6px 0;
}
.search-box i {
    color: #a0a5b1;
    font-size: 19px;
    position: relative;
    top: 2px;
}
 
.add button{
    text-align: center;
    width:8rem ;
    display: block;
    height: 2.5rem;
    
    color: white;
    border-radius: 15px;
    background-color: #00FF00;
    border: none;
} 
</style>

</head>
<body>
    <ul class="nav nav-tabs">
      li class="nav-item">
        <a class="nav-link " href="../category/category.php">Manage Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../product/product.php">Manage Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../news/news.php">Manage News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="./user/user.php">Manage Admin</a>
      </li>
    </ul>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Add/Update Admin</h2>
            </div>
            <div class="panel-body">
                <form method="post">
                    <div class="form-group">
                      <label for="name">FullName:</label>
                      <input type="text" name="id" value="<?=$id?>" hidden="true">
                      <input required="true" type="text" class="form-control" id="fullname" name="fullname" value="<?=$fullname?>">
                    </div>

                    <div class="form-group">
                      <label for="username">UserName:</label>
                      <input type="text" name="id" value="<?=$id?>" hidden="true">
                      <input required="true" type="text" class="form-control" id="username" name="username" value="<?=$username?>">
                    </div>
                    <div class="form-group">
                      <label for="password">PassWord:</label>
                      <input type="text" name="id" value="<?=$id?>" hidden="true">
                      <input required="true" type="text" class="form-control" id="password" name="password" value="<?=$password?>">
                    </div>

                  
                    
                    <button class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>