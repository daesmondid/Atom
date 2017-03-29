<?php
    require_once 'ModelManager.php';
    
    class BasicView{
        
        public $title = '';
        public $columns = [];
        public $rows = [];
        public $columnsDisplay = [];
        public $model = '';
        
        public function __construct($columns = [], $model = '', $domains = [], $title = '') {
            
            $this->title = $title;
            
            $modelManager = new ModelManager();
            $this->model = $model;
            
            $constructSet = "1";
            
            foreach ($domains as $domain) {
                $constructSet = $constructSet." AND ".$domain[0]." ".$domain[1]." '".$domain[2]."'";
            }
            
            $this->columns = $columns;
            $this->rows = $modelManager->getObjectRowArrayFilter($model, $constructSet);
            
            foreach ($columns as $column) {
                array_push($this->columnsDisplay, $modelManager->getFieldRowDisplayName($model, $column));
            }
            
        }
        
    }