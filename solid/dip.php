<?php 

	interface DatabaseConnection{
		public function connect();
	}

	class MySQLConnection implements DatabaseConnection{
		public function connect()
		{
			return "MySQLConnection Done";
		}
	}


	class OracleConnection implements DatabaseConnection{
		public function connect()
		{
			return "Oracle Connection Done";
		}
	}



	class MongoDbConnection implements DatabaseConnection{
		public function connect()
		{
			return "Oracle Connection Done";
		}
	}


	class passwordReminder{
		private $dbConnection;

		function __construct(DatabaseConnection $dbConnection)
		{
			$this->dbConnection = $dbConnection;
		}

		public function checkConnection(){
			return $this->dbConnection->connect();
		}
	}


	$obj = new passwordReminder(new MySQLConnection());
	echo $obj->checkConnection();

	$obj1 = new passwordReminder(new MongoDbConnection());
	echo $obj1->checkConnection();


 ?>