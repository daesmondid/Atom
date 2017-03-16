<?php

    class Home extends Controller {
        
        public function index($name = '') {
            $this->model('Constant');
            $constant = new Constant();
            
            header('Location: '.$constant->baseUrl.'/login');
        }
    }