<?php
require_once ('../../datab/dbhelper.php');

$id = $title_menu = $image_menu = $video = $image_product1 = $image_product2 = $image_product3 = $title_product = $docon = $chai = $ml= $content = $chungloai = $title_product1 = $title_product2 = $type_of_product = $id_category = '';
if (!empty($_POST)) {
	if (isset($_POST['title_menu'])) {
		$title_menu = $_POST['title_menu'];
		$title_menu = str_replace('"', '\\"', $title_menu);
	}
	if (isset($_POST['id'])) {
		$id = $_POST['id'];
	}
	
	if (isset($_POST['image_menu'])) {
		$image_menu = $_POST['image_menu'];
		$image_menu = str_replace('"', '\\"', $image_menu);
	}
	if (isset($_POST['video'])) {
		$video = $_POST['video'];
		$video = str_replace('"', '\\"', $video);
	}
	if (isset($_POST['image_product1'])) {
		$image_product1 = $_POST['image_product1'];
		$image_product1 = str_replace('"', '\\"', $image_product1);
	}
	if (isset($_POST['image_product2'])) {
		$image_product2 = $_POST['image_product2'];
		$image_product2 = str_replace('"', '\\"', $image_product2);
	}
	if (isset($_POST['image_product3'])) {
		$image_product3 = $_POST['image_product3'];
		$image_product3 = str_replace('"', '\\"', $image_product3);
	}
	if (isset($_POST['title_product'])) {
		$title_product = $_POST['title_product'];
		$title_product = str_replace('"', '\\"', $title_product);
	}
	if (isset($_POST['title_product1'])) {
		$title_product1 = $_POST['title_product1'];
		$title_product1 = str_replace('"', '\\"', $title_product1);
	}
	if (isset($_POST['title_product2'])) {
		$title_product2 = $_POST['title_product2'];
		$title_product2 = str_replace('"', '\\"', $title_product2);
	}
	if (isset($_POST['docon'])) {
		$docon = $_POST['docon'];
		$docon = str_replace('"', '\\"', $docon);
	}
	if (isset($_POST['chai'])) {
		$chai = $_POST['chai'];
		$chai = str_replace('"', '\\"', $chai);
	}
	if (isset($_POST['ml'])) {
		$ml = $_POST['ml'];
		$ml = str_replace('"', '\\"', $ml);
	}
	if (isset($_POST['chungloai'])) {
		$chungloai = $_POST['chungloai'];
		$chungloai = str_replace('"', '\\"', $chungloai);
	}
	
	if (isset($_POST['content'])) {
		$content = $_POST['content'];
		$content = str_replace('"', '\\"', $content);
	}
	if (isset($_POST['type_of_product'])) {
		$type_of_product = $_POST['type_of_product'];
	}
	if (isset($_POST['id_category'])) {
		$id_category = $_POST['id_category'];
	}
	if (!empty($title_menu)) { 
		$created_at = $updated_at = date('Y-m-d H:s:i');
		//Luu vao database
		if ($id == '') {
			$sql = 'insert into product(title_menu, image_menu, video, image_product1, image_product2, image_product3, title_product, docon, chai, ml, chungloai, title_product1, title_product2, content, type_of_product, created_at, updated_at, id_category) values ("'.$title_menu.'", "'.$image_menu.'", "'.$video.'", "'.$image_product1.'", "'.$image_product2.'", "'.$image_product3.'", "'.$title_product.'", "'.$docon.'", "'.$chai.'", "'.$ml.'", "'.$chungloai.'", "'.$title_product1.'",  "'.$title_product2.'", "'.$content.'", '.$type_of_product.', "'.$created_at.'", "'.$updated_at.'", "'.$id_category.'")';
		} else {
			$sql = 'update product set title_menu = "'.$title_menu.'", image_menu = "'.$image_menu.'", content = "'.$content.'", type_of_product = '.$type_of_product.', video = "'.$video.'", image_product1 = "'.$image_product1.'", image_product2 = "'.$image_product2.'", image_product3 = "'.$image_product3.'", title_product = "'.$title_product.'", docon = "'.$docon.'", chai = "'.$chai.'", ml = "'.$ml.'", chungloai = "'.$chungloai.'", title_product1 = "'.$title_product1.'", title_product2 = "'.$title_product2.'", updated_at = "'.$updated_at.'", id_category = "'.$id_category.'" where id = '.$id;
		}

		execute($sql);
		//print_r($sql);exit();
		// print($sql);
		// exit();
		header('Location: product.php');
		die();
	}
}

if (isset($_GET['id'])) {
	$id      = $_GET['id'];
	$sql     = 'select * from product where id = '.$id;
	$product 	 = executeSingleResult($sql);
	if ($product != null) {
		$title_menu      		  = $product['title_menu'];
		$image_menu  	 	 		  = $product['image_menu'];
		$title_product        = $product['title_product'];
		$image_product1       = $product['image_product1'];
		$image_product2       = $product['image_product2'];
		$image_product3       = $product['image_product3'];
		$video       					= $product['video'];
		$docon       					= $product['docon'];
		$chai      					  = $product['chai'];
		$ml      						  = $product['ml'];
		$chungloai       			= $product['chungloai'];
		$title_product1       = $product['title_product1'];
		$title_product2       = $product['title_product2'];
		
		$type_of_product 			= $product['type_of_product']; // check
		$content     					= $product['content'];
		$id_category     			= $product['id_category'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add/Fix Product</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!-- summernote -->
	<!-- include summernote css/js -->
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body>
	 <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link " href="../category/category.php">Manage Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="./product/product.php">Manage Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../news/news.php">Manage News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../user/user.php">Manage Admin</a>
      </li>
    </ul>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Add/Update Product</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					  <label  for="product">List from Category:</label>
					  
					  <select  class="form-control" id="id_category" name="id_category" >

					  	<option >Selection:</option>
					  	
					  	<?php
							$sql          = 'select * from category';
							$categoryList = executeResult($sql);

							foreach ($categoryList as $item) {
								if ($item['id'] == $id_category) {
									echo '<option selected value="'.$item['id'].'">'.$item['name'].'</option>';
								} else {
									echo '<option value="'.$item['id'].'">'.$item['name'].'</option>';
								}
							}
							?>

					  </select>
					</div>

					<div class="form-group">
					  <label for="price">List:</label>
					  <select class="form-control" name="type_of_product" id="type_of_product">
					  	<option>Selection</option>
								<?php if ($type_of_product == 0 ){
									$names = "Nước Ngọt" ;
								}else{
									$names = "Bia" ;
								} ?>
									
					  	<option value="0" <?php if ($type_of_product ==0) { echo "selected";} ?>>Nước Ngọt</option>
					  	<option value="1"	<?php if ($type_of_product ==1) { echo "selected";} ?>>Bia</option>

		
					  </select>
					</div>

					<div class="form-group">
					  <label for="title_menu">Title Menu:</label>
					  <input type="text" name="id" value="<?=$id?>" hidden="true">
					  <input required="true" type="text" class="form-control" id="title_menu" name="title_menu" value="<?=$title_menu?>">
					</div>

					<div class="form-group">
					  <label for="image_menu">Image Menu:</label>
					  <input required="true" type="text" class="form-control" id="image" name="image_menu" value="<?=$image_menu?>" onchange="updateimage()">
					  <img src="<?=$image_menu?>" style="max-width: 200px" id="img_image">
					</div>

					<div class="form-group">
					  <label for="video">Video:</label>
					  
					  <input required="true" type="text" class="form-control" id="video" name="video" value="<?=$video?>">
					</div>

					<div class="form-group">
					  <label for="image_product1">Image1:</label>
					  <input required="true" type="text" class="form-control" id="image" name="image_product1" value="<?=$image_product1?>" onchange="updateimage()">
					  <img src="<?=$image_product1?>" style="max-width: 200px" id="img_image">
					</div>

					<div class="form-group">
					  <label for="image_product2">Image2:</label>
					  <input required="true" type="text" class="form-control" id="image" name="image_product2" value="<?=$image_product2?>" onchange="updateimage()">
					  <img src="<?=$image_product2?>" style="max-width: 200px" id="img_image">
					</div>

					<div class="form-group">
					  <label for="image_product3">Image3:</label>
					  <input required="true" type="text" class="form-control" id="image" name="image_product3" value="<?=$image_product3?>" onchange="updateimage()">
					  <img src="<?=$image_product3?>" style="max-width: 200px" id="img_image">
					</div>

					<div class="form-group">
					  <label for="title_product">Title:</label>
					  
					  <input required="true" type="text" class="form-control" id="title_product" name="title_product" value="<?=$title_product?>">
					</div>

					<div class="form-group">
					  <label for="title_product1">Title1:</label>
					  
					  <input required="true" type="text" class="form-control" id="title_product1" name="title_product1" value="<?=$title_product1?>">
					</div>

					<div class="form-group">
					  <label for="title_product2">Title2:</label>
					  
					  <input required="true" type="text" class="form-control" id="title_product2" name="title_product2" value="<?=$title_product2?>">
					</div>

					<div class="form-group">
					  <label for="docon">Độ Cồn:</label>
					  
					  <input required="true" type="text" class="form-control" id="docon" name="docon" value="<?=$docon?>">
					</div>

					<div class="form-group">
					  <label for="chai">Số Chai:</label>
					  <input type="number" name="id" value="<?=$id?>" hidden="true">
					  <input required="true" type="number" class="form-control" id="chai" name="chai" value="<?=$chai?>">
					</div>

					<div class="form-group">
					  <label for="ml">Thể Tích(ml):</label>

					  <input required="true" type="number" class="form-control" id="ml" name="ml" value="<?=$ml?>">
					</div>

					<div class="form-group">
					  <label for="chungloai">Chủng Loại:</label>
					  
					  <input required="true" type="text" class="form-control" id="chungloai" name="chungloai" value="<?=$chungloai?>">
					</div>


					
					
					
					<div class="form-group">
					  <label for="content">Content:</label>
					  <textarea class="form-control" rows="5" name="content" id="content"><?=$content?></textarea>
					</div>
					
					<button class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function updateimage() {
			$('#img_image').attr('src', $('#image').val())
		}

		$(function() {
			//doi website load noi dung => xu ly phan js
			$('#content').summernote({
			  height: 350
			});
		})
	</script>
</body>
</html>	