<?php
header('Content-Type: application/json');
require 'config.php';
session_start();
if($_SESSION['loged_in']) die();
// echo $_SESSION['loged_in'];
if(isset($_POST['username']) && (valid_username($_POST['username'])) && isset($_POST['password']) && strlen($_POST['password'])) {
	$login = $sql->prepare('SELECT * FROM `users` where `user` = ?');
	$login->bindParam(1, $_POST['username']);
	$login->execute();
	$login = $login->fetch();

	if($login && password_verify($_POST['password'], $login[3])) {
		$_SESSION['loged_in'] = true;
		$_SESSION['user'] = $login[1];
		$_SESSION['name'] = $login[2];
		$_SESSION['level'] = $login[4];
		$resp['message'] = 'login berhasil';
	} else {
		$resp['message'] = 'username atau password salah';
	}
	$resp['success'] = $_SESSION['loged_in'];
	echo json_encode($resp);
}
?>