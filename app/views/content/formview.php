<!-- External Link -->
<link rel="stylesheet" type="text/css" href="<?=$data['constant']->baseUrl?>/css/formview.css" />
<script>
    
    function popSubmit(link) {
        $.post(link,$("#form").serialize(),function(data, status){if (status == "success"){location.reload();}});
    }
    function changeFormAction(link) {
        $("#form").attr("action",link);
    }
function popOff() {
    $(".popup-layout").fadeOut(200);
}

function popUp(model) {
    $("#" + model).stop().fadeTo(200,1);
}
function sendDelete(link, id) {
    $.post(link,{id: id},function(data, status){if (status == "success"){location.reload();}});
}
</script>
<!-- Content -->
<div class = "content-layout">
    <div class = "sheet-wrapper">
        <div class = "sheet">
            <div class = "section-title">
                <?php
                    if ($data['content']->titleValue != '') {
                        
                        echo '<div class = "title">'.$data['content']->titleValue.'</div>';
                        
                    }
                    ?>
            </div>
            <div class = "field-section">
                <?php
                    for ($i = 0; $i < count($data['content']->displayFieldGroups); $i++) {
                        
                        echo '<table class = "group">';
                        
                        for ($j = 0; $j < count($data['content']->displayFieldGroups[$i]); $j++) {
                            echo '<tr>';
                            echo '<td class = "lable">'.$data['content']->displayFieldGroups[$i][$j].'</td>';
                            echo '<td class = "value">'.$data['content']->valueGroups[$i][$j].'</td>';
                            echo '</tr>';
                        }
                        
                        echo '</table>';
                    }
                ?>
            </div>
            <div class = "list-section">
                <?php
                    foreach ($data['content']->lists as $list) {
                        
                        echo '<div class = "lable">'.$list->title.'</div>';
                        
                        $this->view('content/basiclist', ['constant' => $data['constant'], 'content' => $list]);
                        
                    }
                    
                    foreach ($data['content']->views as $view) {
                        
                        echo '<div class = "lable">'.$view->title.'</div>';
                        
                        $this->view('content/basicview', ['constant' => $data['constant'], 'content' => $view]);
                        
                    }
                ?>
            </div>
            <div class = "popup-section">
                <?php
                    foreach ($data['content']->lists as $list) {
                        
                        $model = ucfirst($list->model);
                        
                        require_once '../app/controllers/'.$model.'.php';
                        $model = new $model();
                        
                        echo '<div class = "popup-layout" id = "'.$list->model.'">';
                        echo '<div class = "popup">';
                        
                        $model->add([[$list->filterColumn, $list->filterValue]]);
                        echo '<div class = "action">';
                        echo '<div type = "submit" form = "form" class = "button1" onclick = "popSubmit(\''.$data['constant']->baseUrl.'/'.$list->model.'/addsave\')">Save</div>';
                        echo '<div class = "button2" onclick = "popOff()">Discard</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '<script>changeFormAction("'.$data['constant']->baseUrl.'/'.$list->model.'/addsave")</script>';
                    }
                ?>
            </div>
            <!--div class = "custom-action-wrapper">
                <a href = ""><div class = "button1">Confirm</div></a>
                <a href = ""><div class = "button1">Cancel</div></a>
            </div-->
        </div>
    </div>
</div>

<form id = "editForm" action = "editsave" method = "POST">
    <input type = "hidden" name = "id" value = "<?=$data['content']->id?>" />
</form>
<form id = "deleteForm" action = "delete" method = "POST">
    <input type = "hidden" name = "id" value = "<?=$data['content']->id?>" />
</form>
<form id = "confirmForm" action = "confirm" method = "POST">
    <input type = "hidden" name = "id" value = "<?=$data['content']->id?>" />
</form>
