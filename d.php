<?php 
	$connect = mysqli_connect('127.0.0.1','root','','bd');
	$query = mysqli_query($connect, 'SELECT * FROM sectask WHERE mail = "'.$_POST['mail'].'" and password = "'.$_POST['password'].'"');
	if($query->num_rows == 1){
		$res = $query->fetch_assoc();
		header('Location:http://sectask/site.php?id='.$res['id']);
	}else{
		header('Location:http://sectask/c.php?fail=Введен не правильный пароль или mail' );
	}
?>