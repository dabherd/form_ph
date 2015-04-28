<?php 
class Admin {
	//database connection and table name
	private $conn;
	private $table_name = 'admin';

	// object properties
	public $id;
	public $username;
	public $password;
	public $email;

	public function __construct($db) {
		$this->conn = $db;
	}

	// create admin
	public function addAdmin() {
		// write query
		$query = "INSERT INTO 
		" . $this->table_name ."
		 VALUES
		 name =?, password =?, email =?";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(1, $this->username);
		$stmt->bindParam(2, $this->password);
		$stmt->bindParam(3, $this->email);

		if ($stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}

	// admin login
	public function loginAdmin() {
		// write query
		$query = "SELECT * FROM " .$this->table_name. " WHERE 
		a_name =? AND a_password =? ";
		
		$pdo = $this->conn->prepare($query);

		$pdo->bindParam(1, $this->username);
		$pdo->bindParam(2, $this->password);

		$pdo->execute();

		$row = $pdo->fetch(PDO::FETCH_ASSOC);

		return $row;
 	}
}
 ?>