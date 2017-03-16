<?php
    require_once 'FrameDefault.php';

    class Courts extends FrameDefault {
        
        public function index() {
            
            $this->listMain('courts', ['id','name','courts_price','status_courts','open_time','close_time','booking_priority']);
            
        }
        
        public function detail() {
            
            $this->formDetail('courts', 'name', [['courts_price'],['status_courts'],['open_time','close_time'],['id']]);
            
        }
        
        public function edit() {
            
            $this->formEdit('courts', 'name', [['courts_price'],['status_courts'],['open_time','close_time'],['id']]);
            
        }
        
        public function add() {
            
            $this->formAdd('courts', 'name', [['courts_price'],['status_courts'],['open_time','close_time'],['id']]);
            
        }
        
        public function addSave() {
            
            $this->processAddSave('courts', ['name','courts_price','status_courts','open_time','close_time']);
            
        }
        
        public function editSave() {
            
            $this->processEditSave('courts', ['name','courts_price','status_courts','open_time','close_time']);
            
        }
        
        public function delete() {
            
            $this->processDelete('courts');
            
        }
        
    }
