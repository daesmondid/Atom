<?php

$this->model('AtomDataControl');

class Entity {
	
	private $name;
	private $display;
	private $access;
	private $group;
	
	public function __construct($name, $display, $access) {
		
		$this->name = $name;
		$this->display = $display;
		$this->access = $access;
		
	}
	
	public function getName() {
	
		return $this->name;
	
	}
	
	public function getDisplay() {
	
		return $this->display;
	
	}
	
	public function getAccess() {
	
		return $this->access;
	
	}
	
	public function getGroup() {
	
		return $this->group;
	
	}
	
	public function getFieldArray() {
	
		//TO-DO
	
	}
	
	public function setDisplay($display) {
	
		$this->display = $display;
	
	}
	
	public function setAccess($access) {
	
		$this->access = $access;
	
	}
	
	public function setGroup($group) {
	
		$this->group = $group;
	
	}
	
	public function addData($fields, $values) {
		
		//TO-DO
		
	}
	
	public function deleteData ($dataId) {
		
		
		
	}
	
	public function editData ($fields, $values, $dataId) {
		
		
		
	}
	
	public function getDataArray() {
		
		
		
	}
	
	public function getData($id) {
		
		
		
	}
	
}