<?php
    require_once 'FrameDefault.php';

    class Status extends FrameDefault {
        
        public function index() {
            
            $this->listMain('status', ['id', 'name']);
            
        }
        
        public function detail() {
            
            $this->formDetail('status', 'name', [['id'], ['description']]);
            
        }
        
        public function edit() {
            
            $this->formEdit('status', 'name', [['id'], ['description']]);
            
        }
        
        public function add() {
            
            $this->formAdd('status', 'name', [['id'], ['description']]);
            
        }
        
        public function addSave() {
            
            $this->processAddSave('status', ['name', 'description']);
            
        }
        
        public function editSave() {
            
            $this->processEditSave('status', ['name', 'description']);
            
        }
        
        public function delete() {
            
            $this->processDelete('status');
            
        }
        
    }