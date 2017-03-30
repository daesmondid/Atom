<?php

	class Main extends Controller {
		
		public function index($entityName, $operation) {
			$this->model('AtomDataControl');
			$atomDataControl = new AtomDataControl();
			$entity = $atomDataControl->getEntityObjectByName($entityName);
			$this->model('AtomConstants');
			$atomConstants = new AtomConstants();
			switch ($operation) {
				case 'list':
					$this->view('main/ListView', ['atomConstants' => $atomConstants, 'entity' => $entity]);
					break;
				case 'detail':
					$this->view('main/DetailView', ['atomConstants' => $atomConstants, 'entity' => $entity]);
					break;
				case 'add':
					$this->view('main/AddView', ['atomConstants' => $atomConstants, 'entity' => $entity]);
					break;
				case 'addprocess':
					$this->addData($entity);
					break;
				case 'delete':
					$this->removeData($entity);
					break;
				case 'edit':
					$this->view('main/EditView', ['atomConstants' => $atomConstants, 'entity' => $entity]);
					break;
				case 'editprocess':
					$this->editData($entity);
					break;
			}
		}
		
		public function addData($entity) {
			$fieldNameArray = [];
			$valueArray = [];
			if (isset($_GET['forwardFieldName'])) {
				$atomDataControl = new AtomDataControl();
				$atomConstants = new AtomConstants();
				array_push($fieldNameArray, "id");
				array_push($valueArray, $atomDataControl->getRow("SELECT * FROM ".$atomConstants::DB_PREFIX."sys_field WHERE name = \"".$_GET['forwardFieldName']."\" and sys_entity_id = ".$_GET['forwardFieldEntity'])['id']);
			}
			foreach ($entity->getFieldObjectArray() as $fieldObject) {
				//FieldTypeMapping
				if ($fieldObject->getFieldType() == 'string') {
					array_push($fieldNameArray, $fieldObject->getName());
					array_push($valueArray, "\"".$_POST[$fieldObject->getName()]."\"");
				}
				else if ($fieldObject->getFieldType() == 'number') {
					array_push($fieldNameArray, $fieldObject->getName());
					array_push($valueArray, $_POST[$fieldObject->getName()]);
				}
				else if ($fieldObject->getFieldType() == 'reference') {
					array_push($fieldNameArray, $fieldObject->getName().'_id');
					array_push($valueArray, $_POST[$fieldObject->getName()]);
				}
				else if ($fieldObject->getFieldType() == 'richtext') {
					array_push($fieldNameArray, $fieldObject->getName());
					array_push($valueArray, "\"".htmlspecialchars($_POST[$fieldObject->getName()])."\"");
				}
				else if ($fieldObject->getFieldType() == 'cloudfile') {
					array_push($fieldNameArray, $fieldObject->getName());
					array_push($valueArray, "\"".htmlspecialchars($_POST[$fieldObject->getName()])."\"");
				}
			}
			if ($entity->addData($fieldNameArray, $valueArray)) {
				if ($entity->getName() == "sys_entity") {
					$atomDataControl = new AtomDataControl();
					$atomDataControl->addEntityData($atomDataControl->getEntityObjectByName($_POST['name']));
				}
				if ($entity->getName() == "sys_field") {
					$atomDataControl = new AtomDataControl();
					//FieldTypeMapping
					if ($_POST['sys_field_type'] == 1) {
						header('Location: ../sys_field_extension_string/addprocess?forwardFieldName='.$_POST['name'].'&forwardFieldEntity='.$_POST['sys_entity']);
						exit();
					}
					if ($_POST['sys_field_type'] == 2) {
						header('Location: ../sys_field_extension_number/add?forwardFieldName='.$_POST['name'].'&forwardFieldEntity='.$_POST['sys_entity']);
						exit();
					}
					if ($_POST['sys_field_type'] == 3) {
						header('Location: ../sys_field_extension_reference/add?forwardFieldName='.$_POST['name'].'&forwardFieldEntity='.$_POST['sys_entity']);
						exit();
					}
					if ($_POST['sys_field_type'] == 4) {
						header('Location: ../sys_field_extension_id/addprocess?forwardFieldName='.$_POST['name'].'&forwardFieldEntity='.$_POST['sys_entity']);
						exit();
					}
					if ($_POST['sys_field_type'] == 7) {
						header('Location: ../sys_field_extension_richtext/addprocess?forwardFieldName='.$_POST['name'].'&forwardFieldEntity='.$_POST['sys_entity']);
						exit();
					}
					if ($_POST['sys_field_type'] == 8) {
						header('Location: ../sys_field_extension_cloudfile/addprocess?forwardFieldName='.$_POST['name'].'&forwardFieldEntity='.$_POST['sys_entity']);
						exit();
					}
				}
				if (isset($_GET['forwardFieldName'])) {
					$atomDataControl = new AtomDataControl();
					$atomDataControl->addFieldData($atomDataControl->getFieldObjectByName($_GET['forwardFieldName'], $_GET['forwardFieldEntity']));
				}
				header('Location: list?alert=addsuccess');
				exit();
			}
			else {
				header('Location: list?alert=addfailed');
				exit();
			}
		}
		
		public function removeData($entity) {
			if ($entity->removeData($_GET['id'])) {
				header('Location: list?alert=deletesuccess');
				exit();
			}
			else {
				header('Location: list?alert=deletefailed');
				exit();
			}
		}
		
		public function editData($entity) {
			$fieldNameArray = [];
			$valueArray = [];
			foreach ($entity->getFieldObjectArray() as $fieldObject) {
				//FieldTypeMapping
				if ($fieldObject->getFieldType() == 'string') {
					array_push($fieldNameArray, $fieldObject->getName());
					array_push($valueArray, "\"".$_POST[$fieldObject->getName()]."\"");
				}
				else if ($fieldObject->getFieldType() == 'number') {
					array_push($fieldNameArray, $fieldObject->getName());
					array_push($valueArray, $_POST[$fieldObject->getName()]);
				}
				else if ($fieldObject->getFieldType() == 'reference') {
					array_push($fieldNameArray, $fieldObject->getName().'_id');
					array_push($valueArray, $_POST[$fieldObject->getName()]);
				}
				else if ($fieldObject->getFieldType() == 'richtext') {
					array_push($fieldNameArray, $fieldObject->getName());
					array_push($valueArray, "\"".htmlspecialchars($_POST[$fieldObject->getName()])."\"");
				}
				else if ($fieldObject->getFieldType() == 'cloudfile') {
					array_push($fieldNameArray, $fieldObject->getName());
					array_push($valueArray, "\"".htmlspecialchars($_POST[$fieldObject->getName()])."\"");
				}
			}
			$entity->editData($_POST['id'], $fieldNameArray, $valueArray);
			if ($entity->editData($_POST['id'], $fieldNameArray, $valueArray)) {
				header('Location: list?alert=editsuccess');
				exit();
			}
			else {
				header('Location: list?alert=editfailed');
				exit();
			}
		}
		
	}