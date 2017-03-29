<?php
    require_once 'ModelManager.php';
    require_once 'BasicView.php';

    class EditView{
        
        public $titleValue = '';
        public $titleField = ['name' => ''];
        public $displayFieldGroups = [];
        public $valueGroups = [];
        public $selectionLists = [];
        public $id = 0;
        public $views = [];
        
        public function __construct($model = '', $id = 0, $titleField = '', $fieldGroups = [], $lists = [], $views = []) {
            
            $this->id = $id;
            
            $modelManager = new ModelManager();
            $row = $modelManager->getObjectRow($model, $id);
            
            if ($titleField != '') {
                
                $this->titleValue = $row[$titleField];
                $this->titleField = $modelManager->getFieldRow($model, $titleField);
                
            }
            
            
            foreach ($fieldGroups as $fieldGroup) {
                
                $valueGroup = [];
                $displayFieldGroup = [];
                
                foreach ($fieldGroup as $field) {
                    array_push($valueGroup, $row[$field]);
                    
                    $fieldRow = $modelManager->getFieldRow($model, $field);
                    if ($fieldRow['type'] == 'relational') {
                        
                        if ($fieldRow['related_domain'] == '') {
                            
                            $resultArray = $modelManager->getObjectRowArrayFilter($fieldRow['related_model'],"1");
                            array_push($this->selectionLists, [$fieldRow['related_model'], $resultArray]);
                            
                        }
                        else {
                            
                            $str = $fieldRow['related_domain'];
                            $domainsArray = explode("],[",$str);
                            for ($i = 0; $i < count($domainsArray); $i++) {
                                
                                $domainsArray[$i] = trim($domainsArray[$i],"[]");
                                $domainsArray[$i] = explode("','",$domainsArray[$i]);
                                
                                for ($j = 0; $j < count($domainsArray[$i]); $j++) {
                                    
                                    $domainsArray[$i][$j] = trim($domainsArray[$i][$j],"'");
                                    
                                }
                                
                            }
                            
                            $domains = [];
                            
                            foreach ($domainsArray as $domain) {
                                
                                $domain[2] = $row[$domain[2]];
                                array_push($domains, [$domain[0], $domain[1], $domain[2]]);
                                
                            }
                            
                            $constructSet = "1";
                            
                            foreach ($domains as $domain) {
                                
                                if ($domain[1] == 'in') {
                                    
                                    $constructSet = $constructSet." AND ".$domain[0]." ".$domain[1]." (".$domain[2].")";
                                    
                                }
                                else {
                                    
                                    $constructSet = $constructSet." AND ".$domain[0]." ".$domain[1]." '".$domain[2]."'";
                                    
                                }
                                
                            }
                            
                            $resultArray = $modelManager->getObjectRowArrayFilter($fieldRow['related_model'],$constructSet);
                            array_push($this->selectionLists, [$fieldRow['related_model'], $resultArray]);
                            
                        }
                        
                    }
                    
                    array_push($displayFieldGroup, $fieldRow);
                }
                
                array_push($this->valueGroups, $valueGroup);
                array_push($this->displayFieldGroups, $displayFieldGroup);
                
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