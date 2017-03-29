<?php
    require_once 'FrameDefault.php';

    class Courts_price extends FrameDefault {
        
        public function index() {
            
            $this->listMain('courts_price', ['id','name','normal_price','partner','courts_type']);
            
        }
        
        public function detail() {
            
            $this->formDetail('courts_price', 'name', [['partner','courts_type'],['normal_price']]);
            
        }
        
        public function edit() {
            
            $this->formEdit('courts_price', 'name', [['partner','courts_type'],['normal_price']]);
            
        }
        
        public function add() {
            
            $this->formAdd('courts_price', 'name', [['partner','courts_type'],['normal_price']]);
            
        }
        
        public function addSave() {
            
            $this->processAddSave('courts_price', ['name','normal_price','partner','courts_type']);
            
        }
        
        public function editSave() {
            
            $this->processEditSave('courts_price', ['name','normal_price','partner','courts_type']);
            
        }
        
        public function delete() {
            
            $this->processDelete('courts_price');
            
        }
        
    }
