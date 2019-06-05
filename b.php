<?php 
	$connect = mysqli_connect('127.0.0.1','root','','bd');
	$query = mysqli_query($connect, 'INSERT INTO sectask (mail,name,login,password,avatar) VALUES ("'.$_POST['mail'].'", "'.$_POST['name'].'", "'.$_POST['login'].'","'.$_POST['password'].'","images/avatar.png")');
	//mail($_POST['mail'],'','Вы успешно зарегистрировались на сайте instagram.com. Ваш логин: '.$_POST['login']. ' и пароль: '.$_POST['password']);
	header('location:http://sectask/c.php');
 ?>
