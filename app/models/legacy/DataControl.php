<?php
    
    //Require Section
    
    class DataControl{
        
        //Attribute Section Start
        
        private $conn;
        
        //Constructor Section Start
        
        public function __construct() {
            
        }
        
        //Method Section Start
        
        private function dbConnect() {
            
            $server = "localhost";
            $DBuser = "root";
            $DBpassword = "";
            $DBname = "atom_footgoal";
            
            $this->conn = new mysqli($server, $DBuser, $DBpassword, $DBname);
            
        }
        
        private function dbClose() {
            
            $this->conn->close();
            
        }
        
        public function getRowArray($query) {
            
            $this->dbConnect();
            
            $result = $this->conn->query($query);
            $rowArray = [];
            
            while ($row = $result->fetch_assoc()) {
                
                array_push($rowArray, $row);
                
            }
            
            $this->dbClose();
            
            return $rowArray;
            
        }
        
        public function getRow($query) {
            
            $this->dbConnect();
            
            $result = $this->conn->query($query);
            $row = $result->fetch_assoc();
            
            $this->dbClose();
            
            return $row;
            
        }
        
        public function execute($query) {
            
            $this->dbConnect();
            
            if ($this->conn->query($query) === TRUE) {
                
                $result = "Query Execution Success";
                
            }
            else {
                
                $result = "Query Execution Error: " . $conn->error;
                
            }
            
            $this->dbClose();
            
            return $result;
            
        }
        
        public function getEntity($entName) {
            
            //TO-DO
            
        }
        
        public function addEntity($entity) {
            
            $name = $entity->getName();
            $display = $entity->getDisplay();
            $access = $entity->getAccess();
            
            if (!empty($entity->getGroup())) {
                
                $group = $entity->getGroup()->getName();
                
            }
            else {
                
                $group = NULL;
                
            }
            
            return $this->execute("INSERT INTO s_entity (name, display, access, group_name) VALUES (\"$name\", \"$display\", 0, \"$group\")");
            
        }
        
        public function removeEntity($entName) {
            
            //TO-DO
            
        }
        
        public function editEntity($entName) {
            
            //TO-DO
            
        }
        
    }
