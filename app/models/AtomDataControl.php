<?php

$this->model('AtomConstants');
$this->model('AtomEntity');
$this->model('AtomField');
$this->model('AtomStringField');
$this->model('AtomNumberField');
$this->model('AtomReferenceField');
$this->model('AtomIdField');

class AtomDataControl {
	
	public function dbConnect() {
		$atomConstants = new AtomConstants();
		$conn = new mysqli($atomConstants::DB_SERVER, $atomConstants::DB_USER, $atomConstants::DB_PASSWORD, $atomConstants::DB_NAME);
		return $conn;
	}
	
	public function getRowArray($query) {
		$conn = $this->dbConnect();
		$result = $conn->query($query);
		//echo $query;
		$rowArray = [];	
		while ($row = $result->fetch_assoc()) {
			array_push($rowArray, $row);
		}
		$conn->close();
		return $rowArray;
	}
	
	public function getRow($query) {
		return $this->getRowArray($query)[0];
	}
	
	public function execute($query) {
		$conn = $this->dbConnect();
		$result = $conn->query($query);
		$conn->close();
		return $result;
	}
	
	public function getDataArray($entityName, $whereFilter = "true") {
		$atomConstants = new AtomConstants();
		//echo "SELECT * FROM ".$atomConstants::DB_PREFIX.$entityName." WHERE ".$whereFilter;
		return $this->getRowArray("SELECT * FROM ".$atomConstants::DB_PREFIX.$entityName." WHERE ".$whereFilter);
	}
	
	public function getData($entityName, $dataId) {
		$atomConstants = new AtomConstants();
		//echo "SELECT * FROM ".$atomConstants::DB_PREFIX.$entityName." WHERE id =".$dataId;
		return $this->getRow("SELECT * FROM ".$atomConstants::DB_PREFIX.$entityName." WHERE id =".$dataId);
	}
	
	public function addData($entity, $fieldNameArray, $valueArray) {
		$atomConstants = new AtomConstants();
		return $this->execute("INSERT INTO ".$atomConstants::DB_PREFIX.$entity->getName()." (".implode(", ", $fieldNameArray).") VALUES (".implode(", ", $valueArray).")");
	}
	
	public function editData($entity, $dataId, $fieldNameArray, $valueArray) {
		$atomConstants = new AtomConstants();
		$mergeFieldNameValueArray = [];
		for ($i=0; $i<count($fieldNameArray); $i++) {
			array_push($mergeFieldNameValueArray, $fieldNameArray[$i]." = ".$valueArray[$i]);
		}
		//echo "UPDATE ".$atomConstants::DB_PREFIX.$entity->getName()." SET ".implode(", ", $mergeFieldNameValueArray)."  WHERE id = ".$dataId;
		return $this->execute("UPDATE ".$atomConstants::DB_PREFIX.$entity->getName()." SET ".implode(", ", $mergeFieldNameValueArray)."  WHERE id = ".$dataId);
	}
	
	public function removeData($entity, $dataId) {
		$atomConstants = new AtomConstants();
		return $this->execute("DELETE FROM ".$atomConstants::DB_PREFIX.$entity->getName()." WHERE id = ".$dataId);
	}
	
	public function getPoolEntityDataArray() {
		return $this->getDataArray("sys_entity");
	}
	
	public function getPoolGroupDataArray() {
		return $this->getDataArray("sys_group");
	}
	
	public function getEntityObjectByName($entityName) {
		$atomConstants = new AtomConstants();
		$row = $this->getRow("SELECT * FROM ".$atomConstants::DB_PREFIX."sys_entity WHERE name = \"".$entityName."\"");
		return $this->getEntityObjectByRow($row);
	}
	
	public function getEntityObjectById($entityId) {
		$atomConstants = new AtomConstants();
		$row = $this->getRow("SELECT * FROM ".$atomConstants::DB_PREFIX."sys_entity WHERE id = ".$entityId);
		return $this->getEntityObjectByRow($row);
	}
	
	public function getEntityObjectByRow($row) {
		$entity = new AtomEntity();
		$entity->setId($row['id']);
		$entity->setName($row['name']);
		$entity->setDisplayName($row['display_name']);
		$entity->setAccessLevel($row['access_level']);
		$entity->setGroup($row['sys_group_id']);
		return $entity;
	}
	
	public function getFieldObjectByName($fieldName) {
		$atomConstants = new AtomConstants();
		$row = $this->getRow("SELECT * FROM ".$atomConstants::DB_PREFIX."sys_field WHERE name = \"".$fieldName."\"");
		return $this->getFieldObjectByRow($row);
	}
	
	public function getFieldObjectById($fieldId) {
		$atomConstants = new AtomConstants();
		$row = $this->getRow("SELECT * FROM ".$atomConstants::DB_PREFIX."sys_field WHERE id = ".$fieldId);
		return $this->getFieldObjectByRow($row);
	}
	
	public function getFieldObjectByRow($row) {
		$atomConstants = new AtomConstants();
		//FieldTypeMapping
		switch ($row['sys_field_type_id']) {
			case 1:
				$field = new AtomStringField();
				$innerRow = $this->getData("sys_field_extension_string", $row['id']);
				break;
			case 2:
				$field = new AtomNumberField();
				$innerRow = $this->getData("sys_field_extension_number", $row['id']);
				break;
			case 3:
				$field = new AtomReferenceField();
				$innerRow = $this->getData("sys_field_extension_reference", $row['id']);
				$field->setReferencedField($this->getFieldObjectById($innerRow['field_id']));
				$field->setWhereFilter($innerRow['where_filter']);
				break;
			case 4:
				$field = new AtomIdField();
				$innerRow = $this->getData("sys_field_extension_id", $row['id']);
				break;
		}
		$field->setId($row['id']);
		$field->setName($row['name']);
		$field->setDisplayName($row['display_name']);
		$field->setEntity($this->getEntityObjectById($row['sys_entity_id']));
		return $field;
	}
	
	public function getFieldObjectArray($entity) {
		$atomConstants = new AtomConstants();
		$rowArray = $this->getDataArray("sys_field", "sys_entity_id = ".$entity->getId());
		$objectArray = [];
		foreach ($rowArray as $row) {
			array_push($objectArray, $this->getFieldObjectByRow($row));
		}
		return $objectArray;
	}
	
}