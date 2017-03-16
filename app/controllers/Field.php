<?php
    require_once 'FrameDefault.php';

    class Field extends FrameDefault {
        
        public function index() {
            
            $this->listMain('field', ['id']);
            
        }
        
        public function detail() {
            
            $this->formDetail('field', NULL, [['id']]);
            
        }
        
        public function edit() {
            
            $this->formEdit('field', NULL, [['id']]);
            
        }
        
        public function add() {
            
            $this->formAdd('field', NULL, [['id']]);
            
        }
        
        public function addSave() {
            
            $this->processAddSave('field', []);
            
        }
        
        public function editSave() {
            
            $this->processEditSave('field', []);
            
        }
        
        public function delete() {
            
            $this->processDelete('field');
            
        }
        
    }