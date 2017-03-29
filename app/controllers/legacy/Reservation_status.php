<?php
    require_once 'FrameDefault.php';

    class Reservation_status extends FrameDefault {
        
        public function index() {
            
            $this->listMain('reservation_status', ['id','name']);
            
        }
        
        public function detail() {
            
            $this->formDetail('reservation_status', 'name', [['id']]);
            
        }
        
        public function edit() {
            
            $this->formEdit('reservation_status', 'name', [['id']]);
            
        }
        
        public function add() {
            
            $this->formAdd('reservation_status', 'name', [['id']]);
            
        }
        
        public function addSave() {
            
            $this->processAddSave('reservation_status', ['name']);
            
        }
        
        public function editSave() {
            
            $this->processEditSave('reservation_status', ['name']);
            
        }
        
        public function delete() {
            
            $this->processDelete('reservation_status');
            
        }
        
    }
