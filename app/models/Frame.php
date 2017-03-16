<?php
    require_once 'ModelManager.php';
    
    class Frame{
        
        public $navbar = [];
        public $sidebar = [];
        public $title = "No Title";
        public $actionbutton1 = [];
        public $actionbutton2 =[];
        
        public function __construct($model = '', $type, $id = '') {
            
            $modelManager = new ModelManager();
            
            $model = $modelManager->getModelRow($model);
            $this->navbar = $modelManager->getModuleRowArray();
            $this->sidebar = $modelManager->getModelRowArray($model['module']);
            $this->title = $model['display_name'];
            
            if ($type == 'list') {
                $this->actionbutton1 = [["Add", "/".$model['name']."/add"]];
            }
            else if ($type == 'edit') {
                $this->actionbutton1 = [["Save", ""]];
                $this->actionbutton2 = [["Discard", "/".$model['name']."/detail?id=".$id]];
            }
            else if ($type == 'add') {
                $this->actionbutton1 = [["Save", ""]];
                $this->actionbutton2 = [["Discard", "/".$model['name']]];
            }
            else if ($type == 'detail') {
                $this->actionbutton1 = [["Edit", "/".$model['name']."/edit?id=".$id], ["Delete", "", "document.getElementById('deleteForm').submit();"]];
                $this->actionbutton2 = [["Back", "/".$model['name']]];
            }
            else if ($type == 'reservation') {
                $this->actionbutton1 = [["Edit", "/".$model['name']."/edit?id=".$id], ["Confirm", "", "document.getElementById('confirmForm').submit();"]];
                $this->actionbutton2 = [["Back", "/".$model['name']]];
            }
            else if ($type == 'doc') {
                
//                $this->actionbutton1 = [["Download", "/doc/".$model['name'].".pdf"]];
                
            }
            
        }
        
    }
