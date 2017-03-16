<?php

    class FrameMedium extends Controller {
        
        public function listMain($model = '', $columns = [], $order = 'id') {
            
            //$model = 'student';
            
            $this->model('Constant');
            $constant = new Constant();
            
            if ($_SESSION['auth'] != "&Z5@peYanE4ntjXkjcS?DNNz5FSQvFZ-9a*&!9pGEQ9ZVDYEq_uNK8Pem-8cEm76JhYfaCtZs?yq?@EhZVdGFw5ubjmKBGHgMY&M&3eSSxmnrU@SGYv2NaQ+uX-^dYZZAG??NV2&HDnUA4@ccRQ6z#_?2RmKbXF_MY&W8uhbr^3!%uZeKeFxj9TyyVP5cMB&yHwEXqFJ6H!9+#@Ng*A#u^79SyZ@tWDES89^Axx-3J*as8!fuNe2=9X7ughZ?") {
                
                header('Location: '.$constant->baseUrl.'/login');
                die();
                
            }
            
            
            $this->model('Frame');
            $frame = new Frame($model, 'list');
            $this->view('frame/index', ['constant' => $constant, 'frame' => $frame]);
            
            $this->model('ListView');
            $listView = new ListView($model, $columns, $order);
            $this->view('content/listview', ['constant' => $constant, 'content' => $listView]);
            
        }
        
        public function formDetail($model = '', $title = 'name', $fields = [], $lists = [], $views = []) {
            
            //$model = 'student';
            
            $this->model('Constant');
            $constant = new Constant();
            
            if ($_SESSION['auth'] != "&Z5@peYanE4ntjXkjcS?DNNz5FSQvFZ-9a*&!9pGEQ9ZVDYEq_uNK8Pem-8cEm76JhYfaCtZs?yq?@EhZVdGFw5ubjmKBGHgMY&M&3eSSxmnrU@SGYv2NaQ+uX-^dYZZAG??NV2&HDnUA4@ccRQ6z#_?2RmKbXF_MY&W8uhbr^3!%uZeKeFxj9TyyVP5cMB&yHwEXqFJ6H!9+#@Ng*A#u^79SyZ@tWDES89^Axx-3J*as8!fuNe2=9X7ughZ?") {
                
                header('Location: '.$constant->baseUrl.'/login');
                die();
                
            }
            
            $this->model('Frame');
            $frame = new Frame($model, 'detail', $_GET['id']);
            $this->view('frame/index', ['constant' => $constant, 'frame' => $frame]);
            
            $this->model('FormView');
            $formView = new FormView($model, $_GET['id'], $title, $fields, $lists, $views);
            $this->view('content/formview', ['constant' => $constant, 'content' => $formView]);
            
        }
        
        public function formEdit($model = '', $title = 'name', $fields = [], $lists = [], $views = []) {
            
            //$model = 'student';
            
            $this->model('Constant');
            $constant = new Constant();
            
            if ($_SESSION['auth'] != "&Z5@peYanE4ntjXkjcS?DNNz5FSQvFZ-9a*&!9pGEQ9ZVDYEq_uNK8Pem-8cEm76JhYfaCtZs?yq?@EhZVdGFw5ubjmKBGHgMY&M&3eSSxmnrU@SGYv2NaQ+uX-^dYZZAG??NV2&HDnUA4@ccRQ6z#_?2RmKbXF_MY&W8uhbr^3!%uZeKeFxj9TyyVP5cMB&yHwEXqFJ6H!9+#@Ng*A#u^79SyZ@tWDES89^Axx-3J*as8!fuNe2=9X7ughZ?" || $_SESSION['level'] != "rhea16") {
                
                header('Location: '.$constant->baseUrl.'/login');
                die();
                
            }
            
            $this->model('Frame');
            $frame = new Frame($model, 'edit', $_GET['id']);
            $this->view('frame/index', ['constant' => $constant, 'frame' => $frame]);
            
            $this->model('EditView');
            $editView = new EditView($model, $_GET['id'], $title, $fields, $lists, $views);
            $this->view('content/editview', ['constant' => $constant, 'content' => $editView]);
            
        }
        
        public function formAdd($model = '', $title = 'name', $fields = [], $default = []) {
            
            //$model = 'student';
            
            $this->model('Constant');
            $constant = new Constant();
            
            if ($_SESSION['auth'] != "&Z5@peYanE4ntjXkjcS?DNNz5FSQvFZ-9a*&!9pGEQ9ZVDYEq_uNK8Pem-8cEm76JhYfaCtZs?yq?@EhZVdGFw5ubjmKBGHgMY&M&3eSSxmnrU@SGYv2NaQ+uX-^dYZZAG??NV2&HDnUA4@ccRQ6z#_?2RmKbXF_MY&W8uhbr^3!%uZeKeFxj9TyyVP5cMB&yHwEXqFJ6H!9+#@Ng*A#u^79SyZ@tWDES89^Axx-3J*as8!fuNe2=9X7ughZ?" || $_SESSION['level'] != "rhea16") {
                
                header('Location: '.$constant->baseUrl.'/login');
                die();
                
            }
            
            $this->model('Frame');
            $frame = new Frame($model, 'add');
            $this->view('frame/index', ['constant' => $constant, 'frame' => $frame]);
            
            $this->model('AddView');
            $addView = new AddView($model, $title, $fields);
            $this->view('content/addview', ['constant' => $constant, 'content' => $addView, 'default' => $default]);
            
        }
        
        public function processAddSave($model = '', $fields = []) {
            
            //$model = 'student';
            
            $this->model('Constant');
            $constant = new Constant();
            
            if ($_SESSION['auth'] != "&Z5@peYanE4ntjXkjcS?DNNz5FSQvFZ-9a*&!9pGEQ9ZVDYEq_uNK8Pem-8cEm76JhYfaCtZs?yq?@EhZVdGFw5ubjmKBGHgMY&M&3eSSxmnrU@SGYv2NaQ+uX-^dYZZAG??NV2&HDnUA4@ccRQ6z#_?2RmKbXF_MY&W8uhbr^3!%uZeKeFxj9TyyVP5cMB&yHwEXqFJ6H!9+#@Ng*A#u^79SyZ@tWDES89^Axx-3J*as8!fuNe2=9X7ughZ?" || $_SESSION['level'] != "rhea16") {
                
                header('Location: '.$constant->baseUrl.'/login');
                die();
                
            }
            
            $this->model('ModelManager');
            $modelManager = new ModelManager();
            
            //$fields = ['name', 'team', 'gender', 'grade'];
            $values = [];
            
            foreach ($fields as $field) {
                
                array_push($values, $_POST[$field]);
                
            }
            
            $modelManager->addObjectRow($model, $fields, $values);
            
            header('Location: '.$constant->baseUrl.'/'.$model);
            
        }
        
        public function processEditSave($model = '', $fields = []) {
            
            //$model = 'student';
            
            $this->model('Constant');
            $constant = new Constant();
            
            if ($_SESSION['auth'] != "&Z5@peYanE4ntjXkjcS?DNNz5FSQvFZ-9a*&!9pGEQ9ZVDYEq_uNK8Pem-8cEm76JhYfaCtZs?yq?@EhZVdGFw5ubjmKBGHgMY&M&3eSSxmnrU@SGYv2NaQ+uX-^dYZZAG??NV2&HDnUA4@ccRQ6z#_?2RmKbXF_MY&W8uhbr^3!%uZeKeFxj9TyyVP5cMB&yHwEXqFJ6H!9+#@Ng*A#u^79SyZ@tWDES89^Axx-3J*as8!fuNe2=9X7ughZ?" || $_SESSION['level'] != "rhea16") {
                
                header('Location: '.$constant->baseUrl.'/login');
                die();
                
            }
            
            $this->model('ModelManager');
            $modelManager = new ModelManager();
            
            //$fields = ['name', 'team', 'gender', 'grade'];
            $values = [];
            
            foreach ($fields as $field) {
                
                array_push($values, $_POST[$field]);
                
            }
            
            $id = $_POST['id'];
            
            $modelManager->editObjectRow($model, $fields, $values, $id);
            
            header('Location: '.$constant->baseUrl.'/'.$model.'/detail?id='.$id);
            
        }
        
        public function processDelete($model = '') {
            
            //$model = 'student';
            
            $this->model('Constant');
            $constant = new Constant();
            
            if ($_SESSION['auth'] != "&Z5@peYanE4ntjXkjcS?DNNz5FSQvFZ-9a*&!9pGEQ9ZVDYEq_uNK8Pem-8cEm76JhYfaCtZs?yq?@EhZVdGFw5ubjmKBGHgMY&M&3eSSxmnrU@SGYv2NaQ+uX-^dYZZAG??NV2&HDnUA4@ccRQ6z#_?2RmKbXF_MY&W8uhbr^3!%uZeKeFxj9TyyVP5cMB&yHwEXqFJ6H!9+#@Ng*A#u^79SyZ@tWDES89^Axx-3J*as8!fuNe2=9X7ughZ?" || $_SESSION['level'] != "rhea16") {
                
                header('Location: '.$constant->baseUrl.'/login');
                die();
                
            }
            
            $this->model('ModelManager');
            $modelManager = new ModelManager();
            
            $id = $_POST['id'];
            
            $modelManager->deleteObjectRow('event', 4);
            
            header('Location: '.$constant->baseUrl.'/'.$model);
            
        }
        
    }