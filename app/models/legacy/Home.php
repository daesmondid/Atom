<?php

    class Home extends Controller {
        
        public function index($name = '') {
            //$this->view('home/index', ['name' => "Risda"]);
            
            $this->model('Constant');
            $constant = new Constant();
            
            header('Location: '.$constant->baseUrl.'/student');
        }
    }