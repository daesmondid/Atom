<?php
    require_once 'FrameDefault.php';

    class Partner extends FrameDefault {
        
        public function index() {
            
            $this->listMain('partner', ['id','name','address','longitude','latitude','rate','client']);
            
        }
        
        public function detail() {
            
            $this->formDetail('partner', 'name', [['address','latitude','longitude'], ['rate','id'],['client']]);
            
        }
        
        public function edit() {
            
            $this->formEdit('partner', 'name', [['address','latitude','longitude'], ['rate','id'],['client']]);
            
        }
        
        public function add() {
            
            $this->formAdd('partner', 'name', [['address','latitude','longitude'], ['rate','id'],['client']]);
            
        }
        
        public function addSave() {
            
            $this->processAddSave('partner', ['name','address','longitude','latitude','rate','client']);
            
        }
        
        public function editSave() {
            
            $this->processEditSave('partner', ['name','address','longitude','latitude','rate','client']);
            
        }
        
        public function delete() {
            
            $this->processDelete('partner');
            
        }
        
    }
