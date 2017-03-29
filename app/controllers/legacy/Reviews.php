<?php
    require_once 'FrameDefault.php';

    class Reviews extends FrameDefault {
        
        public function index() {
            
            $this->listMain('reviews', ['id', 'review_star', 'review_text', 'partner', 'user']);
            
        }
        
        public function detail() {
            
            $this->formDetail('reviews', NULL, [['id'], ['partner', 'user'], ['review_star', 'review_text']]);
            
        }
        
        public function edit() {
            
            $this->formEdit('reviews', NULL, [['id'], ['partner', 'user'], ['review_star', 'review_text']]);
            
        }
        
        public function add() {
            
            $this->formAdd('reviews', NULL, [['id'], ['partner', 'user'], ['review_star', 'review_text']]);
            
        }
        
        public function addSave() {
            
            $this->processAddSave('reviews', ['review_star', 'review_text', 'partner', 'user']);
            
        }
        
        public function editSave() {
            
            $this->processEditSave('reviews', ['review_star', 'review_text', 'partner', 'user']);
            
        }
        
        public function delete() {
            
            $this->processDelete('reviews');
            
        }
        
    }
