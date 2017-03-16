<!-- External Link -->
<link rel="stylesheet" type="text/css" href="<?=$data['constant']->baseUrl?>/css/formview.css" />
<script>
    
    function addScore(id) {
        if (parseInt($("#" + id).val()) < 0 || $("#" + id).val() == "") {
            $("#" + id).val(0);
        }
        else {
            $("#" + id).val(parseInt($("#" + id).val()) + 1);
        }
    }
function subScore(id) {
    if (parseInt($("#" + id).val()) <= 0 || $("#" + id).val() == "") {
        $("#" + id).val(0);
    }
    else {
        $("#" + id).val(parseInt($("#" + id).val()) - 1);
    }
}
</script>

<!-- Content -->
<div class = "content-layout">
    <div class = "sheet-wrapper">
        <div class = "sheet">
            <form id = "form" action = "addsave" method = "POST">
                <div class = "section-title">
                    <div class = "title">
                        <?php
                            
                            $default = "";
                            foreach ($data['default'] as $defaultField) {
                                
                                if ($defaultField[0] == $data['content']->titleField['name']) {
                                    
                                    $default = $defaultField[1];
                                    
                                }
                                
                            }
                            
                            if ($data['content']->titleField['name'] == '') {
                                
                                echo '';
                                
                            }
                        else if ($data['content']->titleField['type'] == 'string') {
                            
                            echo '<input type = "text" name = "'.$data['content']->titleField['name'].'" placeholder = "'.$data['content']->titleField['display_name'].'" value = "'.$default.'" />';
                            
                        }
                        else if ($data['content']->titleField['type'] == 'integer') {
                            
                            echo '<input type = "number" name = "'.$data['content']->titleField['name'].'" placeholder = "'.$data['content']->titleField['display_name'].'" min = "'.$data['content']->titleField['min'].'" max = "'.$data['content']->titleField['max'].'" value = "'.$default.'" />';
                            
                        }
                        else {
                            
                            echo '<i>Not Available</i>';
                            
                        }
                        ?>
                    </div>
                </div>
                <div class = "field-section">
                    <?php
                        for ($i = 0; $i < count($data['content']->displayFieldGroups); $i++) {
                            
                            echo '<table class = "group">';
                            
                            for ($j = 0; $j < count($data['content']->displayFieldGroups[$i]); $j++) {
                                
                                echo '<tr>';
                                echo '<td class = "lable">'.$data['content']->displayFieldGroups[$i][$j]['display_name'].'</td>';
                                
                                $default = "";
                                foreach ($data['default'] as $defaultField) {
                                    
                                    if ($defaultField[0] == $data['content']->displayFieldGroups[$i][$j]['name']) {
                                        
                                        $default = $defaultField[1];
                                        
                                    }
                                    
                                }
                                
                                if ($data['content']->displayFieldGroups[$i][$j]['type'] == 'string') {
                                    
                                    echo '<td class = "value"><input type = "text" name = "'.$data['content']->displayFieldGroups[$i][$j]['name'].'" value = "'.$default.'" /></td>';
                                    
                                }
                                else if ($data['content']->displayFieldGroups[$i][$j]['type'] == 'integer') {
                                    
                                    echo '<td class = "value"><input type = "number" name = "'.$data['content']->displayFieldGroups[$i][$j]['name'].'" min = "'.$data['content']->displayFieldGroups[$i][$j]['min'].'" max = "'.$data['content']->displayFieldGroups[$i][$j]['max'].'" value = "'.$default.'" /></td>';
                                    
                                }
                                else if ($data['content']->displayFieldGroups[$i][$j]['type'] == 'score') {
                                    
                                    echo '<td class = "value score"><input id = "'.$data['content']->displayFieldGroups[$i][$j]['name'].'" type = "number" name = "'.$data['content']->displayFieldGroups[$i][$j]['name'].'" min = "'.$data['content']->displayFieldGroups[$i][$j]['min'].'" max = "'.$data['content']->displayFieldGroups[$i][$j]['max'].'" value = "'.$default.'" /><div class = "sb-button" onclick = "addScore(\''.$data['content']->displayFieldGroups[$i][$j]['name'].'\')">+</div><div class = "sb-button" onclick = "subScore(\''.$data['content']->displayFieldGroups[$i][$j]['name'].'\')">-</div></td>';
                                    
                                }
                                else if ($data['content']->displayFieldGroups[$i][$j]['type'] == 'relational') {
                                    
                                    echo '<td class = "value">';
                                    echo '<select name = "'.$data['content']->displayFieldGroups[$i][$j]['name'].'">';
                                    
                                    foreach ($data['content']->selectionLists as $resultArray) {
                                        
                                        if ($resultArray[0] == $data['content']->displayFieldGroups[$i][$j]['related_model']) {
                                            
                                            echo '<option value = NULL></option>';
                                            
                                            foreach ($resultArray[1] as $row) {
                                                
                                                if ($row['id'] == $default) {
                                                    
                                                    echo '<option value = "'.$row['id'].'" selected>'.$row['name'].'</option>';
                                                    
                                                }
                                                else {
                                                    
                                                    echo '<option value = "'.$row['id'].'">'.$row['name'].'</option>';
                                                    
                                                }
                                                
                                            }
                                            
                                            break;
                                            
                                        }
                                        
                                    }
                                    
                                    echo '</select>';
                                    echo '</td>';
                                    
                                }
                                else {
                                    
                                    echo '<td class = "value"><i>Not Available</i></td>';
                                    
                                }
                                
                                echo '</tr>';
                                
                            }
                            
                            echo '</table>';
                        }
                    ?>
                </div>
            </form>
        </div>
    </div>
</div>