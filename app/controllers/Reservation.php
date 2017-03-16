<?php
    require_once 'FrameDefault.php';

    class Reservation extends FrameDefault {
        
        public function index() {
            
            $this->listMain('reservation', ['id','name','start_time','duration','date','month','year','user','reservation_status']);
            
        }
        
        public function detail() {
            
            $model = 'reservation';
            $title = 'name';
            $fields = [['user'],['date','month','year'],['start_time','duration'],['reservation_status'],['id']];
            $lists = [];
            $views = [];
            
            $this->model('Constant');
            $constant = new Constant();
            
            if ($_SESSION['auth'] != "&Z5@peYanE4ntjXkjcS?DNNz5FSQvFZ-9a*&!9pGEQ9ZVDYEq_uNK8Pem-8cEm76JhYfaCtZs?yq?@EhZVdGFw5ubjmKBGHgMY&M&3eSSxmnrU@SGYv2NaQ+uX-^dYZZAG??NV2&HDnUA4@ccRQ6z#_?2RmKbXF_MY&W8uhbr^3!%uZeKeFxj9TyyVP5cMB&yHwEXqFJ6H!9+#@Ng*A#u^79SyZ@tWDES89^Axx-3J*as8!fuNe2=9X7ughZ?" || $_SESSION['level'] != "rhea16") {
                
                header('Location: '.$constant->baseUrl.'/login');
                die();
                
            }
            
            $this->model('Frame');
            $frame = new Frame($model, 'reservation', $_GET['id']);
            $this->view('frame/index', ['constant' => $constant, 'frame' => $frame]);
            
            $this->model('FormView');
            $formView = new FormView($model, $_GET['id'], $title, $fields, $lists, $views);
            $this->view('content/formview', ['constant' => $constant, 'content' => $formView]);
            
        }
        
        public function edit() {
            
            $this->formEdit('reservation', 'name', [['date','month','year'],['start_time','duration'],['reservation_status'],['id']]);
            
        }
        
        public function add() {
            
            $this->formAdd('reservation', 'name', [['date','month','year'],['start_time','duration'],['reservation_status'],['id']]);
            
        }
        
        public function addSave() {
            
            $this->processAddSave('reservation', ['name','start_time','duration','date','month','year','user','reservation_status']);
            
        }
        
        public function editSave() {
            
            $this->processEditSave('reservation', ['name','start_time','duration','date','month','year','user','reservation_status']);
            
        }
        
        public function delete() {
            
            $this->processDelete('reservation');
            
        }
        
        public function confirm() {
            
            $model = 'reservation';
            
            $this->model('Constant');
            $constant = new Constant();
            
            if ($_SESSION['auth'] != "&Z5@peYanE4ntjXkjcS?DNNz5FSQvFZ-9a*&!9pGEQ9ZVDYEq_uNK8Pem-8cEm76JhYfaCtZs?yq?@EhZVdGFw5ubjmKBGHgMY&M&3eSSxmnrU@SGYv2NaQ+uX-^dYZZAG??NV2&HDnUA4@ccRQ6z#_?2RmKbXF_MY&W8uhbr^3!%uZeKeFxj9TyyVP5cMB&yHwEXqFJ6H!9+#@Ng*A#u^79SyZ@tWDES89^Axx-3J*as8!fuNe2=9X7ughZ?" || $_SESSION['level'] != "rhea16") {
                
                header('Location: '.$constant->baseUrl.'/login');
                die();
                
            }
            
            $this->model('ModelManager');
            $modelManager = new ModelManager();
            
            $fields = ['reservation_status'];
            $values = [2];
            
            $id = $_POST['id'];
            
            $modelManager->editObjectRow($model, $fields, $values, $id);
            
            
            function send_notification ($tokens, $message)
            {
                $url = 'https://fcm.googleapis.com/fcm/send';
                $fields = array(
                                'registration_ids' => $tokens,
                                'data' => $message
                                );
                $headers = array(
                                 'Authorization:key = AAAAzWfyTPM:APA91bEOUgom_xEj2dwQLUuNy7kU-neEMv398rLUS-6lAGlAYzaCtJW5Uz6QL4pcj9hxJAUU5DH89nPo8cwOUnWHJIbSlT63XFprcpq5orTjYmNNF4kU4wRCsoNl320vS3VMq8hyi7D7UK9wvgj6H1ns_EXlMkIQ9Q',
                                 'Content-Type: application/json'
                                 );
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
                $result = curl_exec($ch);
                if ($result === FALSE) {
                    die('Curl failed: ' . curl_error($ch));
                }
                curl_close($ch);
                return $result;
            }
            
            $conn = mysqli_connect("localhost","atmosid_user05","gNxqT7s+=sQd","atmosid_oms_footgoal_production");
            $sql = "SELECT name FROM object_device WHERE user_id = (SELECT user_id FROM object_reservation WHERE id = $id)";
            $result = mysqli_query($conn,$sql);
            $tokens = array();
            if(mysqli_num_rows($result) > 0 ){
                while ($row = mysqli_fetch_assoc($result)) {
                    $tokens[] = $row["name"];
                }
            }
            mysqli_close($conn);
            $message = array("message" => " Foot Goal Reservation Confirmed");
            $message_status = send_notification($tokens, $message);
            
            
            header('Location: '.$constant->baseUrl.'/'.$model.'/detail?id='.$id);
            
        }
        
    }
