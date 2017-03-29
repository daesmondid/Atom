<?php
    require_once 'ModelManager.php';

    class AddView{
        
        public $titleField = ['name' => ''];
        public $displayFieldGroups = [];
        public $selectionLists = [];
        
        public function __construct($model = '', $titleField = '', $fieldGroups = []) {
            
            $modelManager = new ModelManager();
            
            if ($titleField != '') {
                
                $this->titleField = $modelManager->getFieldRow($model, $titleField);
                
            }
            
            foreach ($fieldGroups as $fieldGroup) {
                
                $displayFieldGroup = [];
                
                foreach ($fieldGroup as $field) {
                    
                    $fieldRow = $modelManager->getFieldRow($model, $field);
                    if ($fieldRow['type'] == 'relational') {
                        $resultArray = $modelManager->getObjectRowArray($fieldRow['related_model']);
                        array_push($this->selectionLists, [$fieldRow['related_model'], $resultArray]);
                    }
                    
                    array_push($displayFieldGroup, $fieldRow);
                }
                
                array_push($this->displayFieldGroups, $displayFieldGroup);
                
            }
            
        }
        
    }