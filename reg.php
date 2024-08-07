<?php 

	require 'db.php';

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		
		$login = $_POST['log'];
		$password = password_hash($_POST['pass'], PASSWORD_DEFAULT);

		$query = "INSERT INTO users(log,pass) VALUES ('$login', '$password')";
		$result = mysqli_query($connect, $query);

		if($result) {
			echo "Success";
		}else{
			echo "error" . mysqli_error($connect);
		};

		mysqli_close($connect);
	};

?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<style type="text/css">
		.main {
			background: whitesmoke;
			height: 700px;
			width: 800px;
			margin-top: 100px;
			border-radius: 100px;
			border: 5px solid blue;
		}

		.in {
			height: 40px;
			width: 300px;
		}
	</style>
</head>
<body>
	<div class="main mx-auto p-5">
		<form action="reg.php" method="POST">
			<h1>Регистрация</h1>
			<h2 style="margin-top: 50px;">Придумайте логин</h2>
			<input style="" class="in" type="email" name="log" placeholder="Придумайте логин">
			<h2 style="margin-top: 30px;">Придумайте пароль</h2>
			<input style="" class="in" type="password" name="pass" placeholder="Придумайте пароль">
			<a href="log.php" style="margin-top:500px">у меня есть аккаунт</a>
			<button type="submit" style="background: lightgray; height: 50px; width: 200px; border-radius: 10px; border: 3px solid blue; position: absolute; top: 500px; left: 610px;">Зарегистрироваться</button>
		</form>
		
	</div>
</body>
</html>