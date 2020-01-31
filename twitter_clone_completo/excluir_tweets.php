<?php
	session_start();
		if (!isset($_SESSION['usuario'])) {
		header('Location: index.php?erro=1');
	}
	require_once ('db.class.php');	
					// $_POST['texto_tweet'] esta recuperando o valor do name do campo de imput 
	$texto_tweet = $_POST['texto_tweet'];
	$id_usuario = $_SESSION['id_usuario'];

	if ($texto_tweet == '' || $id_usuario == '') {
		die();
	}
	$objDb=new db();
	$link=$objDb->conecta_mysql();
	$sql = "DELETE FROM `tweet` WHERE id_usuario=$id_usuario AND tweet LIKE '%$texto_tweet%'";
	mysqli_query($link, $sql);

 ?>