<!-- Page Metadata -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- External Link -->
<link rel="stylesheet" type="text/css" href="<?=$data['constant']->baseUrl?>/css/general.css" />
<link rel="stylesheet" type="text/css" href="<?=$data['constant']->baseUrl?>/css/frame.css" />

<!-- Navigation Bar -->
<div id = "box" class = "navbar-layout menu-layout">
    <div class = "navbar-menu-wrapper menu-wrapper">
        <div class = "navbar">
            <?php
                foreach ($data['frame']->navbar as $navbar) {
                    
                    echo '<a href = "'.$data['constant']->baseUrl.'/'.$navbar['default_model'].'"><div class = "button1">'.$navbar['display_name'].'</div></a>';
                }
            ?>
            <a href = "<?=$data['constant']->baseUrl?>/logout"><div class = "button2">Logout</div></a>
            <div id = "change"><img class = "dd-button" src = "<?=$data['constant']->baseUrl?>/images/menu.svg" onclick = "drop('<?=$data['constant']->baseUrl?>')" /></div>
        </div>
        <div id = "ddcontent" class = "dropdown">
            <img src = "<?=$data['constant']->baseUrl?>/images/main-logo-white.svg" />
            <div class = "line"></div>
            <?php
                foreach ($data['frame']->sidebar as $sidebar) {
                    
                    if ($sidebar['display_name'] == $data['frame']->title) {
                        $selected = " selected";
                    }
                    else {
                        $selected = "";
                    }
                    
                    echo '<a href = "'.$data['constant']->baseUrl.'/'.$sidebar['name'].'"><div class = "button1'.$selected.'">'.$sidebar['display_name'].'</div></a>';
                }
            ?>
            <div class = "line"></div>
            <?php
                foreach ($data['frame']->navbar as $navbar) {
                    
                    echo '<a href = "'.$data['constant']->baseUrl.'/'.$navbar['default_model'].'"><div class = "button1">'.$navbar['display_name'].'</div></a>';
                }
            ?>
            <div class = "line"></div>
            <a href = "<?=$data['constant']->baseUrl?>/logout"><div class = "button1">Logout</div></a>
        </div>
    </div>
</div>

<!-- Side Bar -->
<div class = "sidebar-layout menu-layout">
    <div class = "sidebar-menu-wrapper menu-wrapper">
        <div class = "sidebar">
            <a href = ""><div class = "main-logo"></div></a>
            <?php
                foreach ($data['frame']->sidebar as $sidebar) {
                    
                    if ($sidebar['display_name'] == $data['frame']->title) {
                        $selected = " selected";
                    }
                    else {
                        $selected = "";
                    }
                    
                    echo '<a href = "'.$data['constant']->baseUrl.'/'.$sidebar['name'].'"><div class = "button1'.$selected.'">'.$sidebar['display_name'].'</div></a>';
                }
            ?>
        </div>
    </div>
</div>

<!-- Action Bar -->
<div class = "actionbar-layout menu-layout">
    <div class = "actionbar-menu-wrapper menu-wrapper">
        <div class = "actionbar">
            <div class = "title"><?=$data['frame']->title?></div>
            <div class = "buttons-wrapper">
                <?php
                    foreach ($data['frame']->actionbutton1 as $actionbutton1) {
                        
                        if ($actionbutton1[0] == "Save") {
                            
                            echo '<input type = "submit" form = "form" class = "button1" value = "'.$actionbutton1[0].'" />';
                            
                        }
                        else if ($actionbutton1[0] == "Delete" || $actionbutton1[0] == "Confirm") {
                            
                            echo '<div class = "button1" onclick = "'.$actionbutton1[2].'">'.$actionbutton1[0].'</div>';
                            
                        }
                        else {
                            
                            echo '<a href = "'.$data['constant']->baseUrl.$actionbutton1[1].'"><div class = "button1">'.$actionbutton1[0].'</div></a>';
                            
                        }
                        
                    }
                ?>
                <?php
                    foreach ($data['frame']->actionbutton2 as $actionbutton2) {
                        
                        if ($actionbutton2[1] == "") {
                            
                            echo '<div class = "button2" onclick = "'.$actionbutton2[2].'">'.$actionbutton2[0].'</div>';
                            
                        }
                        else {
                            
                            echo '<a href = "'.$data['constant']->baseUrl.$actionbutton2[1].'"><div class = "button2">'.$actionbutton2[0].'</div></a>';
                            
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<!-- External Link -->
<script src = "<?=$data['constant']->baseUrl?>/js/jquery-2.1.4.js"></script>
<script src = "<?=$data['constant']->baseUrl?>/js/dropdown.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
     
     ga('create', 'UA-37998913-8', 'auto');
     ga('send', 'pageview');
     
</script>
