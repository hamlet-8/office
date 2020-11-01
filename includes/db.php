<?php 
	class Database {
		protected $connection;

		protected function connect() {
			$dsn = 'mysql:host=localhost; dbname=office;charset=utf8';
			$username = 'root';
			$password = '';
			$this->connection = new PDO($dsn, $username, $password);

			return $this->connection;
		}

		function ex($sql) {
			$con = $this -> connect();
			$sth = $con -> prepare($sql);

			return $sth -> execute();
		}
		
		/*function query($sql) {
			$con = $this -> connect();
			$sth = $con -> prepare($sql);
			$sth -> execute();
			$result = $sth -> fetchAll(PDO::FETCH_ASSOC);

			if($result === false) {
				return [];
			}
			return $result;
		}*/
	}

?>