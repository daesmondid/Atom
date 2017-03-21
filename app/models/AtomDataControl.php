<?php

$this->model('AtomConstants');

class AtomDataControl {
	
	public function dbConnect() {
		
		$atomConstants = new AtomConstants();
		$conn = new mysqli($atomConstants->dbServer, $atomConstants->dbUser, $atomConstants->dbPassword, $atomConstants->dbName);
		return $conn;
	
	}
	
	public function getRowArray($query) {
		
		$conn = $this->dbConnect();
		$result = $conn->query($query);
		$rowArray = [];	
		while ($row = $result->fetch_assoc()) {
			array_push($rowArray, $row);
		}
		$conn->close();
		return $rowArray;
	
	}
	
	public function getRow($query) {
		
		$conn = $this->dbConnect();
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
		$conn->close();
		return $row;
	
	}
	
	public function execute($query) {
	
		$conn = $this->dbConnect();
		$result = $conn->query($query);
		$conn->close();
	
	}
	
}