<?php
    require_once 'FrameDefault.php';
    
    class Sys_module extends FrameDefault {
        
        public function index() {
            
            $this->listMain('sys_module', ['id', 'display_name', 'name', 'level', 'default_model']);
            
        }
        
        public function detail() {
            
            $this->formDetail('sys_module', 'display_name', [['name', 'id'], ['level', 'default_model']]);
            
        }
        
        public function edit() {
            
            $this->formEdit('sys_module', 'display_name', [['name', 'id'], ['level', 'default_model']]);
            
        }
        
        public function add() {
            
            $this->formAdd('sys_module', 'display_name', [['name', 'id'], ['level', 'default_model']]);
            
        }
        
        public function addSave() {
            
            $this->processAddSave('sys_module', ['name', 'display_name', 'level', 'default_model']);
            
        }
        
        public function editSave() {
            
            $this->processEditSave('sys_module', ['display_name', 'level', 'default_model']);
            
        }

        public function delete() {
            
            $this->processDelete('sys_module');
            
        }
        
    }