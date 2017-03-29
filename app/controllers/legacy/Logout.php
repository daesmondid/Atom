<?php
    class Logout extends Controller {
        
        public function index() {
            
            $this->model('Constant');
            $constant = new Constant();
            
            session_unset();
            session_destroy();
            
            header('Location: '.$constant->baseUrl.'/login');
            die();
            
        }
        
    }