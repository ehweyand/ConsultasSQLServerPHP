<?php

/**
 * Classe para conexão com o banco de dados sqlserver
 */
class Conexao {

	private $serverName = "DESKTOP-SUF6OC5\SQLEXPRESS";
	private $dbname = "oficinadb";
	private $user = "";
	private $pass = "";

	/**
	 * Returns the database connection
	 */
	public function conectar() {
		try {
			$conexao = new PDO(
				"sqlsrv:server=$this->serverName ;
				Database=$this->dbname", $this->user, $this->pass);
				
			return $conexao;
		
		} catch (PDOException $e) {
			echo '<p>'.$e->getMessage().'</p>';
		}
	}
}

?>