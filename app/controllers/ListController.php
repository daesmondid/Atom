<?php
    require_once 'FrameDefault.php';

    class Client extends FrameDefault {
        
        public function index() {
            
            $this->listMain('client', ['id', 'name', 'birthdate', 'birthmonth','address','phone','password','email']);
            
        }
        
        public function detail() {
            
            $this->formDetail('client', 'name', [['address','phone','email'],['birthdate','birthmonth'],['id','password']]);
            
        }
        
        public function edit() {
            
            $this->formEdit('client', 'name', [['address','phone','email'],['birthdate','birthmonth'],['id','password']]);
            
        }
        
        public function add() {
            
            $this->formAdd('client', 'name', [['address','phone','email'],['birthdate','birthmonth'],['id','password']]);
            
        }
        
        public function addSave() {
            
            $this->processAddSave('client', ['name', 'birthdate', 'birthmonth','address','phone','password','email']);
            
        }
        
        public function editSave() {
            
            $this->processEditSave('client', ['name', 'birthdate', 'birthmonth','address','phone','password','email']);
            
        }
        
        public function delete() {
            
            $this->processDelete('client');
            
        }
        
    }
