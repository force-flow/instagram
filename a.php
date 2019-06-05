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
<body class="bg-light">
	<div class="container" style="height: 100%">
		<div class="row col-9 mx-auto" style="height: 100%"> 
			<div class="h-75">
			<img src="images/inst1.PNG" alt="">
			</div>
				<div  class="col-4 ml-5 border bg-white py-4 h-50 border" style="margin-top: 10%">
				<form action="b.php" method="POST">
					<div class="col-11 mx-auto">
					<img src="images/inst.PNG" alt="">
					</div>
				  <div class="form-group my-4">
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ваш @mail" name="mail">
				  </div>
				    <div class="form-group my-4">
				    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ваш имя" name="name">
				  </div>
				    <div class="form-group my-4">
				    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ваш логин" name="login">
				  </div>
				  <div class="form-group my-4">
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ваш пароль" name="password">
				  </div>
				  <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
				</form>
				<div class="col-12 my-4">
					<span>Есть аккаунт? </span><a href="c.php"> Войти</a>
				</div>
				</div>
		</div>
	</div>
</body>
</html>