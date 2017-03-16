<?php
    
    //Require Section
    $this->model('Group');
    $this->model('DataControl');
    
    class Entity{
        
        //Attribute Section Start
        
        private $name;
        private $display;
        private $access;
        private $group;
        
        //Constructor Section Start
        
        public function __construct($name, $display, $access, $group) {
            
            $this->name = $name;
            $this->display = $display;
            $this->access = $access;
            
            if (isset($gorup)) {
                
                $this->group = $gorup;
                
            }
            else {
                
                $this->group = NULL;
                
            }
            
        }
        
        //Method Section Start
        
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
            
            return $this->access;
            
        }
        
        public function setDisplay($display) {
            
            $this->display = $display;
            
        }
        
        public function setAccess($access) {
            
            $this->access = $access;
            
        }
        
        public function setGroup($group) {
            
            $this->group = $gorup;
            
        }
        
        public function getFieldArray() {
            
            //TO-DO
            
        }
        
        public function addField($field) {
            
            $dc = new DataControl();
            
            $entity = $this->getName();
            $name = $field->getName();
            $display = $field->getDisplay();
            $type = $field->getType();
            
            if ($type == 2) {
                
                $min = $field->getMin();
                $max = $field->getMax();
                
                return $dc->execute("INSERT INTO s_field (entity_name, name, display, type, min, max) VALUES (\"$entity\", \"$name\", \"$display\", $type, $min, $max)");
                
            }
            elseif ($type == 7) {
                
                $relmodel = $field->getRelmodel();
                $reltype = $field->getReltype();
                
                return $dc->execute("INSERT INTO s_field (entity_name, name, display, type, relmodel, reltype) VALUES (\"$entity\", \"$name\", \"$display\", $type, \"$relmodel\", $reltype)");
                
            }
            else {
                
                return $dc->execute("INSERT INTO s_field (entity_name, name, display, type) VALUES (\"$entity\", \"$name\", \"$display\", $type)");
                
            }
            
        }
        
        public function removeField() {
            
            //TO-DO
            
        }
        
        public function editField() {
            
            //TO-DO
            
        }
        
        public function getDataArray() {
            
            //TO-DO
            
        }
        
        public function addData() {
            
            //TO-DO
            
        }
        
        public function removeData() {
            
            //TO-DO
            
        }
        
        public function editData() {
            
            //TO-DO
            
        }
        
    }