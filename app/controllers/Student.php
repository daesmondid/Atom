<?php
    require_once 'FrameDefault.php';

    class Student extends FrameDefault {
        
        public function index() {
            
            $this->listMain('student', ['id','name']);
            
        }
        
        public function detail() {
            
            $this->formDetail('student', NULL, [['id','name']]);
            
        }
        
        public function edit() {
            
            $this->formEdit('student', NULL, [['id','name']]);
            
        }
        
        public function add() {
            
            $this->formAdd('student', NULL, [['id','name']]);
            
        }
        
        public function addSave() {
            
            $this->processAddSave('student', ['name']);
            
        }
        
        public function editSave() {
            
            $this->processEditSave('student', ['name']);
            
        }
        
        public function delete() {
            
            $this->processDelete('student');
            
        }
        
    }