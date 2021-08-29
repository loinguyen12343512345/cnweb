<?php
require_once ('../../datab/dbhelper.php');

$id = $title = $image = $content = $content_vhat = $title_vhat1 = $type_of_new = '';
if (!empty($_POST)) {
	if (isset($_POST['title'])) {
		$title = $_POST['title'];
		$title = str_replace('"', '\\"', $title);
	}
	if (isset($_POST['id'])) {
		$id = $_POST['id'];
	}
	
	if (isset($_POST['image'])) {
		$image = $_POST['image'];
		$image = str_replace('"', '\\"', $image);
	}
	if (isset($_POST['content'])) {
		$content = $_POST['content'];
		$content = str_replace('"', '\\"', $content);
	}
	if (isset($_POST['type_of_new'])) {
		$type_of_new = $_POST['type_of_new'];
	}
	if (isset($_POST['content_vhat'])) {
		$content_vhat = $_POST['content_vhat'];
		$content_vhat = str_replace('"', '\\"', $content_vhat);
	}
	if (isset($_POST['title_vhat1'])) {
		$title_vhat1 = $_POST['title_vhat1'];
		$title_vhat1 = str_replace('"', '\\"', $title_vhat1);
	}
	

	if (!empty($title)) {
		$created_at = $updated_at = date('Y-m-d H:s:i');
		//Luu vao database
		if ($id == '') {
			$sql = 'insert into new(title, image, content, type_of_new, created_at, updated_at, content_vhat, title_vhat1) values ("'.$title.'", "'.$image.'",  "'.$content.'", '.$type_of_new.', "'.$created_at.'", "'.$updated_at.'", "'.$content_vhat.'", "'.$title_vhat1.'")';
		} else {
			$sql = 'update new set title = "'.$title.'", updated_at = "'.$updated_at.'", image = "'.$image.'", content = "'.$content.'", type_of_new = '.$type_of_new.', content_vhat = "'.$content_vhat.'", title_vhat1 = "'.$title_vhat1.'" where id = '.$id;
		}

		execute($sql);
		// printf($sql);
		// exit();
		header('Location: news.php');
		die();
	}
}

if (isset($_GET['id'])) {
	$id      = $_GET['id'];
	$sql     = 'select * from new where id = '.$id;
	$new 	 = executeSingleResult($sql);
	if ($new != null) {
		$title       		= $new['title'];
		
		$image 	 	 	 		= $new['image'];
		$type_of_new 		= $new['type_of_new'];
		$content     		= $new['content'];
		$content_vhat   = $new['content_vhat'];
		$title_vhat1    = $new['title_vhat1'];
		
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add/Fix Category</title>
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
        <a class="nav-link " href="../product/product.php">Manage Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Manage News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../user/user.php">Manage Admin</a>
      </li>
    </ul>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Add/Update News</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					  <label for="price">List from New:</label>
					  <select class="form-control" name="type_of_new" id="type_of_new">
					  	<option>Selection</option>
						
							<?php if ($type_of_new == 0 ){
									$names = "Tin tức- Sự kiện" ;
								}else{
									$names = "Văn hóa & Ẩm thực" ;
								} ?>
									
					  	<option value="0" <?php if ($type_of_new ==0) { echo "selected";} ?>>Tin tức - Sự kiện</option>
					  	<option value="1"	<?php if ($type_of_new ==1) { echo "selected";} ?>>Văn hóa & Ẩm thực</option>
					  </select>
					</div>

					<div class="form-group">
					  <label for="name">Title:</label>
					  <input type="text" name="id" value="<?=$id?>" hidden="true">
					  <input required="true" type="text" class="form-control" id="title" name="title" value="<?=$title?>">
					</div>

					<div class="form-group">
					  <label for="title_vhat1">Title VH - AT:</label>
					  <input type="text" name="id" value="<?=$id?>" hidden="true">
					  <input required="true" type="text" class="form-control" id="title_vhat1" name="title_vhat1" value="<?=$title_vhat1?>">
					</div>

					
					
					
					<div class="form-group">
					  <label for="image">Image:</label>
					  <input required="true" type="text" class="form-control" id="image" name="image" value="<?=$image?>" onchange="updateimage()">
					  <img src="<?=$image?>" style="max-width: 200px" id="img_image">
					</div>
					<div class="form-group">
					  <label for="name">Content Title:</label>
					  <input type="text" name="id" value="<?=$id?>" hidden="true">
					  <input required="true" type="text" class="form-control" id="content_vhat" name="content_vhat" value="<?=$content_vhat?>">
					</div>
					<div class="form-group">
					  <label for="content">Content:</label>
					  <textarea class="form-control" rows="5" name="content" id="content"><?=$content?></textarea>
					</div>
					<button class="btn btn-success ">Save</button>
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