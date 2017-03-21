<?php
    class Construct extends Controller {
        
        public function index() {
            
            $this->model('Constant');
            $constant = new Constant();
            
            $this->view('construct/index', ['constant' => $constant]);
            
        }
        
        public function process() {
            
            //Create Entity
            $this->model('Entity');
            $entity = new EntityLegacy($_POST["entName"], $_POST["entDisplay"], 0, NULL);
            
            //Add Entity to DataControl
            $this->model('DataControl');
            $dc = new DataControl();
            
            if (!$dc->addEntity($entity)) {
                
                echo "INTERNAL ERROR: Create Entity Failed! <br />";
                
            }
            
            //Field Handling
            for ($i = 0; $i < $_POST["counterVal"]; $i++) {
                
                $fieldArray['name'] = $_POST["field".($i)."name"];
                echo "Field Name: ". $fieldArray['name'] ." <br />";
                
                $fieldArray['display'] = $_POST["field".($i)."display"];
                echo "Field Display: ". $fieldArray['display'] ." <br />";
                
                $fieldArray['type'] = $_POST["field".($i)."type"];
                
                $this->model('Field');
                $field = new Field($fieldArray['name'], $fieldArray['display'], $fieldArray['type']);
                
                if ($fieldArray['type'] == 1) {
                    
                    echo "Field Type: Text <br />";
                    
                }
                elseif ($fieldArray['type'] == 2) {
                    
                    echo "Field Type: Number <br />";
                    
                    $fieldArray['min'] = $_POST["field".($i)."min"];
                    echo "Field Min: ". $fieldArray['min'] ." <br />";
                    
                    $fieldArray['max'] = $_POST["field".($i)."max"];
                    echo "Field Max: ". $fieldArray['max'] ." <br />";
                    
                    $field->setMin($fieldArray['min']);
                    $field->setMax($fieldArray['max']);
                    
                }
                elseif ($fieldArray['type'] == 3) {
                    
                    echo "Field Type: Date &amp; Time <br />";
                    
                }
                elseif ($fieldArray['type'] == 4) {
                    
                    echo "Field Type: Date <br />";
                    
                }
                elseif ($fieldArray['type'] == 5) {
                    
                    echo "Field Type: Time <br />";
                    
                }
                elseif ($fieldArray['type'] == 6) {
                    
                    echo "Field Type: Year <br />";
                    
                }
                elseif ($fieldArray['type'] == 7) {
                    
                    echo "Field Type: Relational <br />";
                    
                    $fieldArray['relmodel'] = $_POST["field".($i)."relmodel"];
                    echo "Field Related Model: ". $fieldArray['relmodel'] ." <br />";
                    
                    $fieldArray['reltype'] = $_POST["field".($i)."reltype"];
                    echo "Field Relation Type: ". $fieldArray['reltype'] ." <br />";
                    
                    $field->setRelmodel($fieldArray['relmodel']);
                    $field->setReltype($fieldArray['reltype']);
                    
                }
                elseif ($fieldArray['type'] == 8) {
                    
                    echo "Field Type: Other <br />";
                    
                }
                
                if (!$entity->addField($field)) {
                    
                    echo "INTERNAL ERROR: Create Field Failed! <br />";
                    
                }
                
            }
            
        }
        
    }