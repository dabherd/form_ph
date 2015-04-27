<?php 
class Admin {
	//database connection and table name
	private $conn;
	private $table_name = 'admin';

	// object properties
	public $id;
	public $name;
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

		$stmt->bindParam(1, $this->name);
		$stmt->bindParam(2, $this->password);
		$stmt->bindParam(3, $this->email);

		if ($stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}
}
 ?>