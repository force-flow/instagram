<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		html,body{
			height: 100%
		}
	</style>
</head>
<body >
	<div class="container" style="height: 100%">
		<div class="col-4 mx-auto border my-5">
			<div class="col-8 mx-auto">
				<img src="inst.PNG" alt="">
			</div>
			<form action="d.php" method="POST">
				  <div class="form-group my-4">
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ваш @mail" name="mail">
				  </div>
				  <div class="form-group my-4">
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ваш пароль" name="password">
				  </div>
				  <button type="submit" class="btn btn-primary my-3">Войти</button>
			</form>
			<?php echo $_GET['fail']; ?>
		</div>
	</div>
</body>
</html>