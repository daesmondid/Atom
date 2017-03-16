<?php
    class Login extends Controller {
        
        public function index() {
            
            $this->model('Constant');
            $constant = new Constant();
            
            $this->view('frame/login', ['constant' => $constant]);
            
        }
        
        public function auth() {
            
            $this->model('Constant');
            $constant = new Constant();
            
            $this->model('LoginCheezels');
            $res = new LoginCheezels();
            
            //$res->set($_POST['auth']);
            
            if ($res->getRes($_POST['auth'])) {
                
                $res->confirm($_POST['auth']);
                header('Location: '.$constant->baseUrl.'/sys_model');
            }
            else {
                header('Location: '.$constant->baseUrl.'/login');
            }
            
        }
        
    }
