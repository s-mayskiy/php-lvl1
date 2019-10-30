<?php

session_start();

$login = '';
$password = '';
$status = '';

if (isset($_POST['login']) && isset($_POST['password'])) {

	$login = $_POST['login'];
	$password = $_POST['password'];

	$user = getUser($login);

	if ($user) {
		if (password_verify($password, $user['pass'])) {
			$_SESSION['isAuth'] = true;
			$_SESSION['user_name'] = $user['userLogin'];

			session_write_close();
			header('location: /lastHW/index.php');
			exit;
		}
		else {
			$status = "Не верный логин или пароль!!!";
			$_SESSION['isAuth'] = false;
		}
	}
	else {
		$status = "Не верный логин или пароль!!!";
		$_SESSION['isAuth'] = false;
	}

}



session_write_close();