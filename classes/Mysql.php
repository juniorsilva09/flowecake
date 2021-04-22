<?php
  namespace classes;
  use PDO;
  use PDOException;

	class Mysql{

		private static $pdo;

		public static function conectar(){
			if(self::$pdo == null){
				try{
				self::$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE,USER,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				}catch(PDOException $e){
          echo '<div style="background:red;color:white;align-items:center;padding:10px 0;display:flex;justify-content:center">';
          echo '<h3>Servidor Offline entre em contato com desenvolvedor.</h3>';
          echo '<i class="fas fa-dizzy" style="margin-left:5px;font-size:24px;></i>';
          echo '</div>';
				}
			}

			return self::$pdo;
		}

	}//Fim
?>