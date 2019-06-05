<?php 
	$connect = mysqli_connect('127.0.0.1','root','','bd');
	//$query = mysqli_query($connect, 'SELECT * FROM sectask WHERE mail = "'.$_POST['mail'].'" and password = "'.$_POST['password'].'"');
	//$res = $query->fetch_assoc();
	$zapros = mysqli_query($connect, 'SELECT * FROM post');
	$query2 = mysqli_query($connect, 'SELECT * FROM sectask');
	$zapros2 = mysqli_query($connect, 'SELECT * FROM post INNER JOIN sectask ON post.user_id = sectask.id ORDER BY post.id DESC ');
 ?>
 <?php 
 	$num;
 	$get = mysqli_query($connect, 'SELECT * FROM sectask WHERE id = "'.$_GET['id'].'"');
 	$getres = $get->fetch_assoc();
  ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<div class="container">

 		 <div class="row">
 		 	<div class="col-8 row">
 		 		<div class="col-2 text-center">
  				<h2><?php echo $getres['name'] ?></h2>
 		<?php echo '<img src="'.$getres['avatar'].'" class="w-100">' ?>
  				</div>
  				<div class="ml-5">
  					<form action="change.php" method="POST" enctype="multipart/form-data">
			  		<?php
			 		echo '<input type="hidden" name="id" value="'.$getres['id'].'">'
			 		 ?>
  					<h3>изменить фотографию</h3>
  					<input type="file" name="img">
  					<br>
  					<button>Изменить</button>
  					</form>
  				</div>
 		 	</div>
 		 	<div class="col-4 my-2">
 		 		<div class="col-3 ml-auto">
  				<button class="btn"><a href="c.php">Выйти</a></button>
  				</div>
 		 	</div>
 		 </div>

 		<form action="createpost.php" method="POST" enctype="multipart/form-data">
 		<?php
 		echo '<input type="hidden" name="id" value="'.$getres['id'].'">'
 		 ?>
 		<p><?php echo $getres['login'] ?></p>
 		<?php 
 			echo '<input value="'.$getres['id'].'" name="iduser" type="hidden">';
 		 ?>
 		<p>Опублиовать новый инста пост:</p>
 		<?php '<input type="" name="sho" value="'.$_GET['name'].'">' ?>
 		<input type="file" name="img">
 		<input type="text" placeholder="введите текст" name="text">
 		<button>Добавить</button>
 		</form>
	<?php 
	for ($i=0; $i < $zapros->num_rows; $i++) { 
		$post = $zapros2->fetch_assoc(); 
	?>
	    <div class="col-12 border my-2">
 			<div class="row">
 				<div class="col-2 ">
 					<?php echo '<img src="'.$post['avatar'].'" alt="avatar" class="w-100 h-100 rounded-circle "> ' ?>
 				</div>
 					<?php echo '<strong>'.$post['name'].'</strong>'?>
 			</div>
 			<div>
 				<?php echo '<img src="'.$post['img'].'" alt="" class="w-50">' ?>
 			</div>
 			<div>
 				<?php echo '<strong>'.$post['name'].'</strong>' ?>
 				<?php echo '<span>'.$post['text'].'</span>' ?>
  			<form action="del.php" method="POST">
  			</form>
 			</div>

 		</div>
 	<?php } ?>
 	</div>

 </body>
 </html>
