<?php
require_once("../../datab/dbhelper.php");
require_once ('../er.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>CATEGORY-MANAGE</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel='shortcut icon' href='https://www.sabeco.com.vn/Data/Sites/1/skins/default/favicon.ico' />
<style>
body {
    color: #566787;
    background-color: #fff;
    font-family: 'Roboto', sans-serif;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    /*min-width: 1000px;*/
    background: #fff;
    padding: 20px 25px;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    color: #fff;
    background: #B22222;        
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
    
    color: red;
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
nav ul li a{
    text-decoration: none;
    color: #black;
}
nav ul li a:hover{
    
    color: #red;
    
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
    <nav class="container text-center" style="margin-top: 3rem">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Manage Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../product/product.php">Manage Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../news/news.php">Manage News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../user/user.php">Manage Admin</a>
      </li>
    </ul>
    </nav>
    <div class="container-lg">
        <div class="table-responsive">
            <div class="table-wrapper">			
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2><b>Category </b>Manager</h2>
                        </div>
                        <div class="col-sm-6">
                            <div class="search-box">
                                <div class="input-group">								
                                    <input type="text" id="search" class="form-control" placeholder="Search">
                                    <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
               <div class="row"> 
              <div class="add col-md-10">
                    <a href="add.php" ><button style="background-color: #00ff00; color: white;" >ADD</button></a>
              </div>
              <div class="add col-md-2" >
                    <a href="../../index.php" ><button style="background-color: #B22222; color: white;" >Home</button></a>
              </div>
              </div>
                <table class="table table-bordered table-hover" style="margin-top: 1rem;">
   
                    <thead >
                        <tr>
                            <th width="50px">id</th>
                            <th>Name</th>
                                                        
                            <th width="50px"></th>
                            <th width="50px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //Lay danh sach danh muc tu database
                        $sql          = 'select * from category';
                        $categoryList    = executeResult($sql);

                        $index = 1;
                        foreach ($categoryList as $item) {
                            echo '<tr>
                                        <td>'.($index++).'</td>
                                        <td>'.$item['name'].'</td>
                                        <td>
                                            <a href="add.php?id='.$item['id'].'"><button class="btn btn-warning" style="color:white">S???a</button></a>

                                        </td>
                                        <td>
                                            <button class="btn btn-danger" onclick="deletecategory('.$item['id'].')">Xo??</button>
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
        function deletecategory(id) {
            var option = confirm('B???n c?? ch???c ch???n mu???n xo?? danh m???c n??y kh??ng?')
            if(!option) {
                return;
            }

            console.log(id)
            //ajax - lenh post
            $.post('deletecategory.php', {
                'id': id,
                'action': 'delete'
            }, function(data) {
                location.reload()
            })
        }
    </script>     
</body>
</html>