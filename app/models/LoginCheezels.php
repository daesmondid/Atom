<?php
    require_once 'ModelManager.php';
    class LoginCheezels{
        
        public function __construct() {
            
        }
        
        public function getRes($cheezels) {
            
            $cheezels = $this->enc($cheezels);
            $modelManager = new ModelManager();
            if ($modelManager->checkCheezels($cheezels)){
                return true;
            }
            else {
                return false;
            }
        }
        
        public function enc($cheezels) {
            
            for ($i = 0; $i < 7; $i++) {
                $cheezels = hash('sha512', $cheezels);
            }
            
            return $cheezels;
        }
        
        public function set($cheezels) {
            $cheezels = $this->enc($cheezels);
            $modelManager = new ModelManager();
            $modelManager->setCheezels($cheezels);
        }
        
        public function confirm($cheezels = '') {
            $_SESSION['auth'] = "&Z5@peYanE4ntjXkjcS?DNNz5FSQvFZ-9a*&!9pGEQ9ZVDYEq_uNK8Pem-8cEm76JhYfaCtZs?yq?@EhZVdGFw5ubjmKBGHgMY&M&3eSSxmnrU@SGYv2NaQ+uX-^dYZZAG??NV2&HDnUA4@ccRQ6z#_?2RmKbXF_MY&W8uhbr^3!%uZeKeFxj9TyyVP5cMB&yHwEXqFJ6H!9+#@Ng*A#u^79SyZ@tWDES89^Axx-3J*as8!fuNe2=9X7ughZ?";
            $_SESSION['level'] = $cheezels;
        }
    }