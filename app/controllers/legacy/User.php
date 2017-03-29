<?php
    require_once 'FrameDefault.php';

    class User extends FrameDefault {
        
        public function index() {
            
            $this->listMain('user', ['id','name','phone','email','password']);
            
        }
        
        public function detail() {
            
            $this->formDetail('user', 'name', [['id','email'],['phone']]);
            
        }
        
        public function edit() {
            
            $this->formEdit('user', 'name', [['id','email'],['phone']]);
            
        }
        
        public function add() {
            
            $this->formAdd('user', 'name', [['id','email'],['phone']]);
            
        }
        
        public function addSave() {
            
            $this->processAddSave('user', ['name','phone','email','password']);
            
        }
        
        public function editSave() {
            
            $this->processEditSave('user', ['name','phone','email','password']);
            
        }
        
        public function delete() {
            
            $this->processDelete('user');
            
        }
        
    }
