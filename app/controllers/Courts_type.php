<?php
    require_once 'FrameDefault.php';

    class Courts_type extends FrameDefault {
        
        public function index() {
            
            $this->listMain('courts_type', ['id','name','courts_desc']);
            
        }
        
        public function detail() {
            
            $this->formDetail('courts_type', 'name', [['id', 'courts_desc']]);
            
        }
        
        public function edit() {
            
            $this->formEdit('courts_type', 'name', [['id', 'courts_desc']]);
            
        }
        
        public function add() {
            
            $this->formAdd('courts_type', 'name', [['id', 'courts_desc']]);
            
        }
        
        public function addSave() {
            
            $this->processAddSave('courts_type', ['name','courts_desc']);
            
        }
        
        public function editSave() {
            
            $this->processEditSave('courts_type', ['name','courts_desc']);
            
        }
        
        public function delete() {
            
            $this->processDelete('courts_type');
            
        }
        
    }
