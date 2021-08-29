<?php
require_once("../../datab/dbhelper.php");

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
.add a{
    text-decoration:none
}
.add button:hover{
    background-color: #32CD32;
}
.nav{
    text-align: center;
}
</style>
<script>
$(document).ready(function(){
	// Activate tooltips
	$('[data-toggle="tooltip"]').tooltip();
    
	// Filter table rows based on searched term
    $("#search").on("keyup", function() {
        var term = $(this).val().toLowerCase();
        $("table tbody tr").each(function(){
            $row = $(this);
            var name = $row.find("td:nth-child(2)").text().toLowerCase();
            console.log(name);
            if(name.search(term) < 0){                
                $row.hide();
            } else{
                $row.show();
            }
        });
    });
});
</script>
</head>
<body>
    <div class="container text-center" style="margin-top: 3rem">
    <ul class="nav nav-tabs">
      
      <li class="nav-item">
        <a class="nav-link " href="../product/product.php">Manage Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../news/news.php">Manage News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Manage Admin</a>
      </li>
    </ul>
    </div>
    <div class="container-lg">
        <div class="table-responsive">
            <div class="table-wrapper">			
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2> <b>Admin </b>Manage</body></h2>
                        </div>
                        <div class="col-sm-6">
                            <div class="search-box">
                                <div class="input-group">								
                                    <input type="text" id="search" class="form-control" placeholder="Search">
                                    <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
                                </div>
                            </div>
                        </div> <div class="container">Designer by Lợi and Huy</div>
                    </div>
                  
                </div>
               <div class="row"> 
              <div class="add col-md-10">
                    <a href="add.php" ><button >ADD</button></a>
              </div>
              <div class="add col-md-2" >
                    <a href="../../index.php" ><button style="background-color: pink; color: red;" >Home</button></a>
              </div>
              </div>
                <table class="table table-bordered table-hover" style="margin-top: 1rem;">
   
                    <thead >
                        <tr>
                            <th width="50px">id</th>
                            <th>FullName</th>
                            <th>UserName</th>
                            <th>PassWord</th>
                            <th>Status</th>
                            
                            <th width="50px "></th>
                            <th width="50px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //Lay danh sach admin tu database
                        $sql          = 'select * from admin';
                        $adminList    = executeResult($sql);

                        $index = 1;
                        foreach ($adminList as $item) {
                            $pms = $item['pms'];
                            if( $pms ==  1){
                                            $name = "Admin";
                                        }else{
                                            $name = "User";
                                        }
                            echo '<tr>
                                        <td>'.($index++).'</td>
                                        <td>'.$item['fullname'].'</td>
                                        <td>'.$item['username'].'</td>
                                        <td>'.$item['password'].'</td>
                                        <td> '.$name.'
                                        
                                        </td>
                                        <td>
                                            <a href="add.php?id='.$item['id'].'"><button class="btn btn-warning">Edit</button></a>

                                        </td>
                                        <td>
                                            <button class="btn btn-danger" onclick="deleteadmin('.$item['id'].')">Delete</button>
                                        </td>
                                    </tr>';
                        }
                        ?>
                    </tbody>
                    
                </table>
            </div>
        </div>        
    </div>     
    <script type="text/javascript">
        function deleteadmin(id) {
            var option = confirm('Bạn có chắc chắn muốn xoá danh mục này không?')
            if(!option) {
                return;
            }

            console.log(id)
            //ajax - lenh post
            $.post('deleteuser.php', {
                'id': id,
                'action': 'delete'
            }, function(data) {
                location.reload()
            })
        }
    </script>
</body>
</html>