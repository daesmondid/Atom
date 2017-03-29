<?php
    require_once 'ModelManager.php';
    require_once 'BasicList.php';
    require_once 'BasicView.php';
    
    class FormView{
        
        public $titleValue = '';
        public $displayFieldGroups = [];
        public $valueGroups = [];
        public $id = 0;
        public $lists = [];
        public $views = [];
        
        public function __construct($model = '', $id = '', $titleField = '', $fieldGroups = [], $lists = [], $views = []) {
            
            $this->id = $id;
            
            $modelManager = new ModelManager();
            $row = $modelManager->getObjectRow($model, $id);
            
            if ($titleField != '') {
                
                $this->titleValue = $row[$titleField];
                
            }
            
            foreach ($fieldGroups as $fieldGroup) {
                
                $valueGroup = [];
                $displayFieldGroup = [];
                
                foreach ($fieldGroup as $field) {
                    array_push($valueGroup, $row[$field]);
                    array_push($displayFieldGroup, $modelManager->getFieldRowDisplayName($model, $field));
                }
                
                array_push($this->valueGroups, $valueGroup);
                array_push($this->displayFieldGroups, $displayFieldGroup);
                
            }
            
            foreach ($lists as $list) {
                
                array_push($this->lists, new BasicList($list[0], $list[1], $list[2], $this->id, $list[3]));
                
            }
            
            foreach ($views as $view) {
                
                $domains = [];
                
                foreach ($view[2] as $domain) {
                    
                    $domain[2] = $row[$domain[2]];
                    array_push($domains, [$domain[0], $domain[1], $domain[2]]);
                    
                }
                
                array_push($this->views, new BasicView($view[0], $view[1], $domains, $view[3]));
                
            }
            
        }
        
    }