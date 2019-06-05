<?php 
	$connect= mysqli_connect('127.0.0.1','root','','bd');
	$query = mysqli_query($connect, "INSERT INTO post (img, text, user_id) VALUES ('images/".$_FILES['img']['name']."','".$_POST['text']."', '".$_POST['iduser']."')");
	move_uploaded_file($_FILES['img']['tmp_name'], 'images/'.$_FILES['img']['name']);
	$zapros = mysqli_query($connect, 'SELECT * FROM sectask WHERE id = "'.$_POST['id'].'"' );
	$res = $zapros->fetch_assoc();
	header('Location:http://sectask/site.php?id='. $res['id']);
 ?>	
