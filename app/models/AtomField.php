<?php

class AtomField {
	
	private $id;
	private $name;
	private $displayName;
	private $entity;
	
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
	
	public function getEntity() {
		return $this->entity;
	}
	
	public function setEntity($entity) {
		$this->entity = $entity;
	}
	
}