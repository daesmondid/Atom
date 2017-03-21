<?php

    class ListController extends Controller {
    	
    	public function listMain($model = '', $columns = [], $order = 'id') {
    	
    		//$model = 'student';
    	
//     		$this->model('Constant');
//     		$constant = new Constant();
    	
//     		$this->model('Frame');
//     		$frame = new Frame($model, 'list');
//     		$this->view('frame/index', ['constant' => $constant, 'frame' => $frame]);
    	
//     		$this->model('ListView');
//     		$listView = new ListView($model, $columns, $order);
//     		$this->view('content/listview', ['constant' => $constant, 'content' => $listView]);

    		//echo $this->params;
    	
    	}
        
        public function index() {
            
        	$this->model('AtomConstants');
        	$atomConstants = new AtomConstants();
        	
        	$this->view('main/ListView', ['atomConstants' => $atomConstants]);
            
        }
        
        public function setDisplay($display) {
        
        	$this->display = $display;
        
        }
        
        public function setAccess($access) {
        
        	$this->access = $access;
        
        }
        
        public function setGroup($group) {
        
        	$this->group = $gorup;
        
        }
        
        
        
    }
