<?php 

	session_start();
	require 'db.php';


	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		
		$login = $_POST['log'];
		$password = $_POST['pass'];

		$query = "SELECT * FROM users WHERE log = '$login'";
		$result = mysqli_query($connect, $query);

		if($result) {
			$user = mysqli_fetch_assoc($result);

			if (password_verify($password, $user['pass'])) {
				$_SESSION['log'] = $login;
				header("Location: profile.php");
				exit();
			}else{
				echo "<h1> Invalid password!!! </h1>";
			};
		}else {
			echo "No user found or incorrect login";
		};

		mysqli_close($connect);
	}

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
		<form action="log.php" method="POST">
			<h2>Введите логин</h2>
			<input style="" class="in" type="email" name="log" placeholder="Введите логин">
			<h2 style="margin-top: 30px;">Введите пароль</h2>
			<input style="" class="in" type="password" name="pass" placeholder="Введите пароль">
			<button type="submit" style="background: lightgray; height: 50px; width: 200px; border-radius: 10px; border: 3px solid blue; position: absolute; top: 420px; left: 610px;">Войти</button>
		</form>
		
	</div>
</body>
</html>