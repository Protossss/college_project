<?php
class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "college_project";
	private $connect;
	
	function __construct() {
		$this->connect = $this->connectDB();
	}
	
	function connectDB() {
		$connect = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $connect;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->connect,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysqli_query($this->connect,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}
?>