<?php
    require_once 'FrameDefault.php';

    class Status_courts extends FrameDefault {
        
        public function index() {
            
            $this->listMain('status_courts', ['id','name','description']);
            
        }
        
        public function detail() {
            
            $this->formDetail('status_courts', 'name', [['id','description']]);
            
        }
        
        public function edit() {
            
            $this->formEdit('status_courts', 'name', [['id','description']]);
            
        }
        
        public function add() {
            
            $this->formAdd('status_courts', 'name', [['id','description']]);
            
        }
        
        public function addSave() {
            
            $this->processAddSave('status_courts', ['description','name']);
            
        }
        
        public function editSave() {
            
            $this->processEditSave('status_courts', ['description','name']);
            
        }
        
        public function delete() {
            
            $this->processDelete('status_courts');
            
        }
        
    }
