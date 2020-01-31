<?php 
	session_start();
	require_once ('db.class.php');

	$id_usuario = $_SESSION['id_usuario'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	//qtd_tweet
	$sql = "SELECT COUNT(*) AS qtde_tweets FROM TWEET WHERE id_usuario = $id_usuario";
	$resultado_id = mysqli_query($link, $sql);
	$qtde_tweets = 0;
	if($resultado_id){
		$registro = mysqli_fetch_array($resultado_id,MYSQLI_ASSOC);
		$qtde_tweets = $registro['qtde_tweets'];
		echo $qtde_tweets;
				
	}else{
		echo "Erro ao executar a query";
	}
?>
	
