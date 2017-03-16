<?php
    
    //Require Section
    
    class Field{
        
        //Attribute Section Start
        
        private $name;
        private $display;
        private $type;
        
        private $min;
        private $max;
        private $relmodel;
        private $reltype;
        
        //Constructor Section Start
        
        public function __construct($name, $display, $type) {
            
            $this->name = $name;
            $this->display = $display;
            $this->type = $type;
            
        }
        
        //Method Section Start
        
        public function getName() {
            
            return $this->name;
            
        }
        
        public function getDisplay() {
            
            return $this->display;
            
        }
        
        public function getType() {
            
            return $this->type;
            
        }
        
        public function setDisplay($display) {
            
            $this->display = $display;
            
        }
        
        public function setType($type) {
            
            $this->type = $type;
            
        }
        
        public function getMin() {
            
            return $this->min;
            
        }
        
        public function getMax() {
            
            return $this->max;
            
        }
        
        public function getRelmodel() {
            
            return $this->relmodel;
            
        }
        
        public function getReltype() {
            
            return $this->reltype;
            
        }
        
        public function setMin($min) {
            
            $this->min = $min;
            
        }
        
        public function setMax($max) {
            
            $this->max = $max;
            
        }
        
        public function setRelmodel($relmodel) {
            
            $this->relmodel = $relmodel;
            
        }
        
        public function setReltype($reltype) {
            
            $this->reltype = $reltype;
            
        }
        
    }