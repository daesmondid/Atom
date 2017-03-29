<?php
    require_once 'FrameDefault.php';
    
    class Sys_model extends FrameDefault {
        
        public function index() {
            
            $this->listMain('sys_model', ['id', 'display_name', 'name', 'level', 'module']);
            
        }
        
        public function detail() {
            
            $this->formDetail('sys_model', 'display_name', [['name', 'id'], ['level', 'module']]);
            
        }
        
        public function edit() {
            
            $this->formEdit('sys_model', 'display_name', [['name', 'id'], ['level', 'module']]);
            
        }
        
        public function add() {
            
            $this->formAdd('sys_model', 'display_name', [['name', 'id'], ['level', 'module']]);
            
        }
        
        public function addSave() {
            
            $ucTechnicalName = ucfirst($_POST['name']);
            $lcTechnicalName = $_POST['name'];
            
            $fileLocation = "../app/controllers/".$ucTechnicalName.".php";
            
            $myfile = fopen($fileLocation, "w") or die("Unable to create file!");
            require_once 'BlankController.php';
            fwrite($myfile, $txt);
            fclose($myfile);
            chmod($fileLocation, 0777);
            
            if(file_exists("../app/controllers/".$ucTechnicalName.".php")) {
                
                $this->processAddSave('sys_model', ['name', 'display_name', 'level', 'module']);
                
            }
            
        }
        
        public function editSave() {
            
            $this->processEditSave('sys_model', ['display_name', 'level', 'module']);
            
        }

        public function delete() {
            
            $id = $_POST['id'];
            
            $this->model('ModelManager');
            $modelManager = new ModelManager();
            $ucTechnicalName = ucfirst($modelManager->getModelName($id));
            
            unlink("../app/controllers/".$ucTechnicalName.".php");
            
            if(!file_exists("../app/controllers/".$ucTechnicalName.".php")) {
                
                $this->processDelete('sys_model');
                
            }
            
        }
        
    }