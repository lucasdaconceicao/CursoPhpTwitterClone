<?php 
	class db{
        private $mysql_server = "localhost"; //local do banco de dados
		private $mysql_user = "root";
		private $mysql_password = "";
		private $mysql_db = "twitter_clone"; //nome do database
		
		 public function conecta_mysql()
		{
			# criar a conexao
			$con=mysqli_connect($this->mysql_server,$this->mysql_user, $this->mysql_password, $this->mysql_db);

			//ajustar o charset da comunicacao entre a aplicacao e o banco de dados
			mysqli_set_charset($con, 'utf8');

			//verificar se houve erro
			if(mysqli_connect_errno()){
				echo "Erro ao tentar se conectar com o BD mysql: ".mysqli_connect_error();
			}
			return $con;
		}
	}
?>