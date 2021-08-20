<?php
	/**
	 * 
	 */
	class Model {
		
		protected $connection;

		function __construct()
		{
			$this->db_connection();
		}
		protected function db_connection(){
			$servername = "localhost";
			$username 	= "root";
			$password 	= "";
			$dbname 	= "survey";
			// P@ssW0rd

			try {
			  $conn = new PDO("mysql:host={$servername};dbname={$dbname}", $username, $password);
			  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			  $this->connection = $conn;
			} catch(PDOException $e) {
			  echo "Connection failed: " . $e->getMessage();
			  die;
			}
		}

		public function query($sql){
			$model = $this->connection->prepare($sql);
			return $model->execute();
		}
	}
?>