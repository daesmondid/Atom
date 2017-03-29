<?php
    $txt = '<?php
    require_once \'FrameDefault.php\';

    class '.$ucTechnicalName.' extends FrameDefault {
        
        public function index() {
            
            $this->listMain(\''.$lcTechnicalName.'\', [\'id\']);
            
        }
        
        public function detail() {
            
            $this->formDetail(\''.$lcTechnicalName.'\', NULL, [[\'id\']]);
            
        }
        
        public function edit() {
            
            $this->formEdit(\''.$lcTechnicalName.'\', NULL, [[\'id\']]);
            
        }
        
        public function add() {
            
            $this->formAdd(\''.$lcTechnicalName.'\', NULL, [[\'id\']]);
            
        }
        
        public function addSave() {
            
            $this->processAddSave(\''.$lcTechnicalName.'\', []);
            
        }
        
        public function editSave() {
            
            $this->processEditSave(\''.$lcTechnicalName.'\', []);
            
        }
        
        public function delete() {
            
            $this->processDelete(\''.$lcTechnicalName.'\');
            
        }
        
    }';