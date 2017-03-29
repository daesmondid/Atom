<?php
    require_once 'FrameDefault.php';
    
    class Sys_field_type extends FrameDefault {
        
        public function index() {
            
            $this->listMain('sys_field_type', ['id', 'name']);
            
        }
        
        public function detail() {
            
            $this->formDetail('sys_field_type', 'name', [['id']]);
            
        }
        
        public function edit() {
            
            $this->formEdit('sys_field_type', 'name', [['id']]);
            
        }
        
        public function add() {
            
            $this->formAdd('sys_field_type', 'name', [['id']]);
            
        }
        
        public function addSave() {
            
            $this->processAddSave('sys_field_type', ['name']);
            
        }
        
        public function editSave() {
            
            $this->processEditSave('sys_field_type', ['name']);
            
        }
        
        public function delete() {
            
            $this->processDelete('sys_field_type');
            
        }
        
    }