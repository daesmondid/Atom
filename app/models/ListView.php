<?php
    require_once 'ModelManager.php';

    class ListView{
        
        public $columns = [];
        public $rows = [];
        public $columnsDisplay = [];
        public $model = '';
        
        public function __construct($model = '', $columns = [], $order = 'id') {
            
            $modelManager = new ModelManager();
            $this->model = $model;
            
            $this->columns = $columns;
            $this->rows = $modelManager->getObjectRowArray($model, $order);
            
            foreach ($columns as $column) {
                array_push($this->columnsDisplay, $modelManager->getFieldRowDisplayName($model, $column));
            }
            
        }
        
    }