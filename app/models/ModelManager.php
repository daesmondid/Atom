<?php
    class ModelManager{
        
        public function __construct() {
            
        }
        
        public function dbConnect() {
            
            $server = "localhost";
            $DBuser = "atmosid_user05";
            $DBpassword = "gNxqT7s+=sQd";
            $DBname = "atmosid_oms_footgoal_production";
            
//            $server = "localhost";
//            $DBuser = "root";
//            $DBpassword = "";
//            $DBname = "atmosid_oms_footgoal_production";
            
            $conn = new mysqli($server, $DBuser, $DBpassword, $DBname);
            
            return $conn;
            
        }
        
        public function getRowArray($query) {
            
            $result = $this->dbConnect()->query($query);
            $rowArray = [];
            
            while ($row = $result->fetch_assoc()) {
                
                array_push($rowArray, $row);
                
            }
            
            $this->dbConnect()->close();
            
            return $rowArray;
            
        }
        
        public function getRow($query) {
            
            $result = $this->dbConnect()->query($query);
            
            $row = $result->fetch_assoc();
            
            $this->dbConnect()->close();
            
            return $row;
            
        }
        
        public function execute($query) {
            
            $result = $this->dbConnect()->query($query);
            $this->dbConnect()->close();
            
        }
        
        public function getModuleRowArray() {
            
            if ($_SESSION['level'] != "rhea16") {
                
                return $this->getRowArray("SELECT * FROM view_object_sys_module WHERE level = 1");
                
            }
            else {
                
                return $this->getRowArray("SELECT * FROM view_object_sys_module");
                
            }
            
        }
        
        public function getModelRowArray($module = '') {
            
            if ($_SESSION['level'] != "rhea16") {
                
                return $this->getRowArray("SELECT * FROM view_object_sys_model WHERE module = '$module' AND level = 1");
                
            }
            else {
                
                return $this->getRowArray("SELECT * FROM view_object_sys_model WHERE module = '$module' AND level in (0,1)");
                
            }
            
        }
        
        public function getModelName($id = '') {
            
            return $this->getRow("SELECT * FROM view_object_sys_model WHERE id = '$id'")['name'];
            
        }
        
        public function getModelRow($model = '') {
            
            return $this->getRow("SELECT * FROM view_object_sys_model WHERE name = '$model'");
            
        }
        
        public function getFieldRow($model, $name) {
            
            return $this->getRow("SELECT * FROM view_object_sys_field WHERE model = '$model' AND name = '$name'");
            
        }
        
        public function getFieldRowDisplayName($model, $name) {
            
            $row = $this->getRow("SELECT display_name FROM view_object_sys_field WHERE model = '$model' AND name = '$name'");
            
            return $row['display_name'];
        }
        
        public function getObjectRowArray($model = '', $order = 'id') {
            
            if ($_SESSION['level'] == 'pandora') {
                
                $team = 'Red';
                
            }
            else if ($_SESSION['level'] == 'hyperion') {
                
                $team = 'Yellow';
                
            }
            else if ($_SESSION['level'] == 'albiorox') {
                
                $team = 'Green';
                
            }
            else if ($_SESSION['level'] == 'prometheus') {
                
                $team = 'Blue';
                
            }
            
            if (($model == 'student' || $model == 'assignment') && $_SESSION['level'] != "rhea16") {
                
                return $this->getRowArray("SELECT * FROM view_object_$model WHERE team = '$team' ORDER BY $order");
                
            }
            else {
                
                return $this->getRowArray("SELECT * FROM view_object_$model ORDER BY $order");
                
            }
            
        }
        
        public function getObjectRowArrayFilter($model = '', $where = 1) {
            
            return $this->getRowArray("SELECT * FROM view_object_$model WHERE $where");
            
        }
        
        public function getObjectRow($model = '', $id = '') {
            
            if ($_SESSION['level'] == 'pandora') {
                
                $team = 'Red';
                
            }
            else if ($_SESSION['level'] == 'hyperion') {
                
                $team = 'Yellow';
                
            }
            else if ($_SESSION['level'] == 'albiorox') {
                
                $team = 'Green';
                
            }
            else if ($_SESSION['level'] == 'prometheus') {
                
                $team = 'Blue';
                
            }
            
            if (($model == 'student' || $model == 'assignment') && $_SESSION['level'] != "rhea16") {
                
                return $this->getRow("SELECT * FROM view_object_$model WHERE id = $id AND team = '$team'");
                
            }
            else {
                
                return $this->getRow("SELECT * FROM view_object_$model WHERE id = $id");
                
            }
            
        }
        
        public function addObjectRow($model = '', $columns = [], $values = []) {
            
            $constructColumn = "";
            
            foreach ($columns as $column) {
                
                $row = $this->getRow("SELECT type FROM view_object_sys_field WHERE model = '$model' AND name = '$column'");
                
                if ($row['type'] == 'relational') {
                    
                    $constructColumn = $constructColumn.$column."_id, ";
                    
                }
                else {
                    
                    $constructColumn = $constructColumn.$column.", ";
                    
                }
                
                
            }
            
            $constructColumn = substr($constructColumn, 0, -2);
            
            $constructValues = "";
            
            foreach ($values as $value) {
                
                if ($value == "NULL" || $value == "") {
                    
                    $constructValues = $constructValues."NULL, ";
                    
                }
                else {
                    
                    $constructValues = $constructValues."'".$value."', ";
                    
                }
                
            }
            
            $constructValues = substr($constructValues, 0, -2);
            
            $this->execute("INSERT INTO object_$model ($constructColumn) VALUES ($constructValues)");
            
        }
        
        public function editObjectRow($model = '', $columns = [], $values = [], $id) {
            
            $constructSet = "";
            
            for ($i = 0; $i < count($columns); $i++) {
                
                $column = $columns[$i];
                
                $row = $this->getRow("SELECT type FROM view_object_sys_field WHERE model = '$model' AND name = '$column'");
                
                if ($row['type'] == 'relational') {
                    
                    if ($values[$i] == "NULL" || $values[$i] == "") {
                        
                        $constructSet = $constructSet.$column."_id = NULL, ";
                        
                    }
                    else {
                        
                        $constructSet = $constructSet.$column."_id = '".$values[$i]."', ";
                        
                    }
                    
                }
                else {
                    
                    if ($values[$i] == "NULL" || $values[$i] == "") {
                        
                        $constructSet = $constructSet.$column."_id = NULL, ";
                        
                    }
                    else {
                        
                        $constructSet = $constructSet.$column." = '".$values[$i]."', ";
                        
                    }
                    
                }
                
            }
            
            $constructSet = substr($constructSet, 0, -2);
            
            $this->execute("UPDATE object_$model SET $constructSet WHERE id = $id");
            
        }
        
        public function deleteObjectRow($model = '', $id) {
            
            $this->execute("DELETE FROM object_$model WHERE id = $id");
            
        }
        
        public function setCheezels($cheezels) {
            
            $this->execute("UPDATE sys_auth SET pass = '$cheezels'");
            
        }
        
        public function checkCheezels($cheezels) {
            
            $result = $this->dbConnect()->query("SELECT * FROM sys_auth WHERE pass = '$cheezels'");
            
            if ($result->num_rows == 1) {
                
                return true;
                
            }
            else {
                
                return false;
                
            }
            
            $this->dbConnect()->close();
            
        }
        
        public function updateLeagueFinals($model = '', $sport = 0) {
            
            $teamOrder = $this->getRowArray("SELECT c.id as team, ifnull(b.added_score,0) AS added_score FROM object_team c LEFT JOIN (SELECT a.team, SUM( a.added_score ) AS added_score FROM (SELECT team_a_id AS team, 30 AS added_score FROM view_object_$model WHERE team_a_score > team_b_score AND gamestage_id =1 AND status_id =2 AND sport_id = $sport UNION ALL SELECT team_b_id AS team, 30 AS added_score FROM view_object_$model WHERE team_a_score < team_b_score AND gamestage_id =1 AND status_id =2 AND sport_id = $sport UNION ALL SELECT team_a_id AS team, 15 AS added_score FROM view_object_$model WHERE team_a_score = team_b_score AND gamestage_id =1 AND status_id =2 AND sport_id = $sport UNION ALL SELECT team_b_id AS team, 15 AS added_score FROM view_object_$model WHERE team_a_score = team_b_score AND gamestage_id =1 AND status_id =2 AND sport_id = $sport)a GROUP BY a.team) b ON b.team = c.id WHERE c.id != 6 ORDER BY ifnull(b.added_score,0) DESC");
            
            if ($teamOrder[1]['added_score'] != $teamOrder[2]['added_score']) {
                
                $this->execute("UPDATE object_$model SET team_a_id = ".$teamOrder[0]['team'].", team_b_id = ".$teamOrder[1]['team']." WHERE sport_id = $sport AND gamestage_id = 3");
                $this->execute("UPDATE object_$model SET team_a_id = ".$teamOrder[2]['team'].", team_b_id = ".$teamOrder[3]['team']." WHERE sport_id = $sport AND gamestage_id = 2");
                
            }
            else {
                
                $this->execute("UPDATE object_$model SET team_a_id = ".$teamOrder[0]['team'].", team_b_id = 6 WHERE sport_id = $sport AND gamestage_id = 3");
                $this->execute("UPDATE object_$model SET team_a_id = 6, team_b_id = 6 WHERE sport_id = $sport AND gamestage_id = 2");
                
            }
            
        }
        
        public function updateKOFinals($model = '', $sport = 0) {
            
            $teamOrder = $this->getRowArray("SELECT c.id as team, ifnull(b.added_score,0) AS added_score FROM object_team c LEFT JOIN (SELECT a.team, SUM( a.added_score ) AS added_score FROM (SELECT team_a_id AS team, 30 AS added_score FROM view_object_$model WHERE team_a_score > team_b_score AND gamestage_id =1 AND status_id =2 AND sport_id = $sport UNION ALL SELECT team_b_id AS team, 30 AS added_score FROM view_object_$model WHERE team_a_score < team_b_score AND gamestage_id =1 AND status_id =2 AND sport_id = $sport UNION ALL SELECT team_a_id AS team, 0 AS added_score FROM view_object_$model WHERE team_a_score = team_b_score AND gamestage_id =1 AND status_id =2 AND sport_id = $sport UNION ALL SELECT team_b_id AS team, 0 AS added_score FROM view_object_$model WHERE team_a_score = team_b_score AND gamestage_id =1 AND status_id =2 AND sport_id = $sport)a GROUP BY a.team) b ON b.team = c.id WHERE c.id != 6 ORDER BY ifnull(b.added_score,0) DESC");
            
            if ($teamOrder[1]['added_score'] != $teamOrder[2]['added_score']) {
                
                $this->execute("UPDATE object_$model SET team_a_id = ".$teamOrder[0]['team'].", team_b_id = ".$teamOrder[1]['team']." WHERE sport_id = $sport AND gamestage_id = 3");
                $this->execute("UPDATE object_$model SET team_a_id = ".$teamOrder[2]['team'].", team_b_id = ".$teamOrder[3]['team']." WHERE sport_id = $sport AND gamestage_id = 2");
                
            }
            else {
                
                $this->execute("UPDATE object_$model SET team_a_id = ".$teamOrder[0]['team'].", team_b_id = 6 WHERE sport_id = $sport AND gamestage_id = 3");
                $this->execute("UPDATE object_$model SET team_a_id = 6, team_b_id = 6 WHERE sport_id = $sport AND gamestage_id = 2");
                
            }
            
        }
        
        public function updateIndividualFinals($model = '', $sport = 0, $finalists = []) {
            
            $finalistsArray = [];
            
            foreach ($finalists as $finalist) {
                
                $finalistArray = $this->getRow("SELECT team_id, player FROM view_object_assignment WHERE sport_id = $sport AND student_id = $finalist");
                
                array_push($finalistsArray,$finalistArray);
                
            }
            
            $this->execute("UPDATE object_$model SET team_a_id = ".$finalistsArray[0]['team_id'].", team_b_id = ".$finalistsArray[1]['team_id'].", team_c_id = ".$finalistsArray[2]['team_id'].", team_d_id = ".$finalistsArray[3]['team_id'].", team_a_player = ".$finalistsArray[0]['player'].", team_b_player = ".$finalistsArray[1]['player'].", team_c_player = ".$finalistsArray[2]['player'].", team_d_player = ".$finalistsArray[3]['player']." WHERE sport_id = $sport AND gamestage_id = 4");
            
        }
    }