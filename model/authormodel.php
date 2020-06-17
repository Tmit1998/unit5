<?php 
	require_once('Connection.php');
	class Author{
		var $connection;

		function __construct(){
			$conn_obj = new Connection();
			$this->connection = $conn_obj->conn;
		}

		function All(){

		    $query = "SELECT * FROM shop_athur";

		    $data = array();

		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 

		    	$data[] = $row;
		    	
		    }

		    return $data;

		}

		function find($id){

			$query = "SELECT * FROM shop_athur WHERE id = " .$id;

			return $this->connection->query($query)->fetch_assoc();
		}

		function create($data){

			$query = "INSERT INTO shop_athur(ath_name,description) VALUES ('".$data['ath_name']."','".$data['description']."')";

			return $this->connection->query($query);
		}
		
		// function update($data){
		// 	$query = "UPDATE shop_category(title,description) VALUES ('".$data['title']."','".$data['description']")";
		// 	return $this->connection->query($query);
		// }
	}
 ?>