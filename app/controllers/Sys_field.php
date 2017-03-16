<?php
    require_once 'FrameDefault.php';
    
    class Sys_field extends FrameDefault {
        
        public function index() {
            
            $this->listMain('sys_field', ['id', 'display_name', 'name', 'model', 'type']);
            
        }
        
        public function detail() {
            
            $this->formDetail('sys_field', 'display_name', [['name', 'id'], ['model'], ['type'], [], ['related_model', 'related_domain'], ['min', 'max']]);
            
        }
        
        public function edit() {
            
            $this->formEdit('sys_field', 'display_name', [['name', 'id'], ['model'], ['type'], [], ['related_model', 'related_domain'], ['min', 'max']]);
            
        }
        
        public function add() {
            
            $this->formAdd('sys_field', 'display_name', [['name', 'id'], ['model'], ['type'], [], ['related_model', 'related_domain'], ['min', 'max']]);
            
        }
        
        public function addSave() {
            
            $this->processAddSave('sys_field', ['name', 'display_name', 'model', 'type', 'related_model', 'related_domain', 'min', 'max']);
            
        }
        
        public function editSave() {
            
            $this->processEditSave('sys_field', ['display_name', 'related_domain', 'min', 'max']);
            
        }
        
        public function delete() {
            
            $this->processDelete('sys_field');
            
        }
        
    }