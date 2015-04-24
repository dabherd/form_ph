<?php 
class Database {
	private static $host = "localhost";
	private static $db_name = "form_ph";
	private static $user_name = "panicUser";
	private static $password = "123";
	private static $conn = null;

	public function __construct() {
		die("Abstract does not require initilization");
	}

	public static function connection() {
		if (null == self::$conn) {
			try {
				self::$conn = new PDO("mysql:host=".self::$host.";dbname=".self::$db_name, self::$user_name, self::$password);
				self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
			} catch(PDOException $e) {
				echo "PDOException" . $e->getCode();
			}
		}
		return self::$conn;
	}

	public static function disconnect() {
		self::$conn = null;
	}
}
 ?>