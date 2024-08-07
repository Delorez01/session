<?php

	session_start();
	

	if (!isset($_SESSION['log'])) {
		header('Location: log.php');
		exit();
	}

	echo "SUCCESS";



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1 style="font-size: 50px; text-align: center;">Добро пожаловать на вашу страницу! ты лох</h1>
	<h2 style="margin-left: 200px; margin-top: 100px;">Ваш логин: <span><? echo $_SESSION['log']; ?></span></h2>

	<div>
		<a href="logout.php" class="btn btn-outline-danger"> Выйти из аккаунта </a>
	</div>
</body>
</html>