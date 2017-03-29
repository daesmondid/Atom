<?php

$this->model('AtomDataControl');
$this->model('AtomConstants');

class AtomEntity {
	
	private $id;
	private $name;
	private $displayName;
	private $accessLevel;
	private $group;
	
	public function getId() {
		return $this->id;
	}
	
	public function setId($id) {
		$this->id = $id;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function setName($name) {
		$this->name = $name;
	}
	
	public function getDisplayName() {
		return $this->displayName;
	}
	
	public function setDisplayName($displayName) {
		$this->displayName = $displayName;
	}
	
	public function getAccessLevel() {
		return $this->accessLevel;
	}
	
	public function setAccessLevel($accessLevel) {
		$this->accessLevel = $accessLevel;
	}
	
	public function getGroup() {
		return $this->group;
	}
	
	public function setGroup($group) {
		$this->group = $group;
	}
	
	public function addData($fieldNameArray, $valueArray) {
		$atomDataControl = new AtomDataControl();
		return $atomDataControl->addData($this, $fieldNameArray, $valueArray);
	}
	
	public function removeData($dataId) {
		$atomDataControl = new AtomDataControl();
		return $atomDataControl->removeData($this, $dataId);
	}
	
	public function editData($dataId, $fieldNameArray, $valueArray) {
		$atomDataControl = new AtomDataControl();
		return $atomDataControl->editData($this, $dataId, $fieldNameArray, $valueArray);
	}
	
	public function getFieldObjectArray() {
		$atomDataControl = new AtomDataControl();
		return $atomDataControl->getFieldObjectArray($this);
	}
	
	public function getDataArray($whereFilter = "true") {
		$atomDataControl = new AtomDataControl();
		return $atomDataControl->getDataArray($this->getName(), $whereFilter);
	}
	
	public function getData($dataId) {
		return $this->getDataArray("id = ".$dataId)[0];
	}
	
	public function getPool() {
		$atomDataControl = new AtomDataControl();
		return $atomDataControl;
	}
	
}