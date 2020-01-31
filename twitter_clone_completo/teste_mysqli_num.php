<?php 
	
	require_once ('db.class.php');

	$sql=" SELECT * FROM  usuarios";
	//insert true/false
	//delete true/false
	//update true/false
	//select false/resource 

	$objDb=new db();
	$link=$objDb->conecta_mysql();
	$resultado_id = mysqli_query($link, $sql);
	if ($resultado_id) {
		$dados_usuarios=array();

		// MYSQLI_ASSOC tras o indice associativo na consulta ['usuario']
		// MYSQLI_NUM tras o indice numerico na consulta [0]
		
		while ($linha=mysqli_fetch_array($resultado_id,MYSQLI_ASSOC)) {
			$dados_usuarios[]=$linha;
		}

		foreach ($dados_usuarios as $usuario) {
			//print_r( $usuario);
			echo( $usuario['usuario']);
			echo "<br/><br/>";
		}
		
	} else {
	 	echo "Erro na execução da consulta, favor entrar em contato com o admin do site!";
	}
?>