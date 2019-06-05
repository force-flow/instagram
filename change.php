<?php 
$connect = mysqli_connect('127.0.0.1','root','','bd');
$query = mysqli_query($connect, 'UPDATE sectask SET avatar = "images/'.$_FILES['img']['name'].'" WHERE id = "'.$_POST['id'].'"');
move_uploaded_file($_FILES['img']['tmp_name'], 'images/'.$_FILES['img']['name']);
header('Location:http://sectask/site.php?id='. $_POST['id']);
 ?>