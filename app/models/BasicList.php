<?php
    require_once 'ModelManager.php';
    
    class BasicList{
        
        public $title = '';
        public $columns = [];
        public $rows = [];
        public $columnsDisplay = [];
        public $model = '';
        public $filterColumn = '';
        public $filterValue = '';
        
        public function __construct($model = '', $columns = [], $filterColumn = '', $filterValue = '', $title = '') {
            
            $this->title = $title;
            $this->filterColumn = $filterColumn;
            $this->filterValue = $filterValue;
            
            $modelManager = new ModelManager();
            $this->model = $model;
            
            $this->columns = $columns;
            $this->rows = $modelManager->getObjectRowArrayFilter($model, $filterColumn."_id = ".$filterValue);
            
            foreach ($columns as $column) {
                array_push($this->columnsDisplay, $modelManager->getFieldRowDisplayName($model, $column));
            }
            
        }
        
    }