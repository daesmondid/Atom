<!-- External Link -->
<link rel="stylesheet" type="text/css" href="<?=$data['constant']->baseUrl?>/css/listview.css" />

<!-- Content -->
<div class = "content-layout">
    <table class = "listview">
        <tr>
            <?php
                foreach ($data['content']->columnsDisplay as $column) {
                    
                    echo '<th>'.$column.'</th>';
                }
                echo '<th></th>';
            ?>
        </tr>
        <?php
            foreach ($data['content']->rows as $row) {
                
                echo '<tr>';
                
                foreach ($data['content']->columns as $column) {
                    echo '<td>'.$row[$column].'</td>';
                }
                echo '<td class = "delete-cell"><img class = "dd-button" src = "'.$data['constant']->baseUrl.'/images/delete.svg" onclick = "sendDelete(\''.$data['constant']->baseUrl.'/'.$data['content']->model.'/delete\','.$row['id'].')" /></td>';
                
                echo '</tr>';
            }
        ?>
        <?php
            echo '<tr onclick = "popUp(\''.$data['content']->model.'\')">';
            echo '<td><i class = "adder">Add '.$data['content']->title.'</i></td>';
            for ($j = 0; $j < count($data['content']->columns) - 1; $j++) {
                echo '<td></td>';
            }
            echo '<td></td>';
            echo '</tr>';
            
            for ($i = 0; $i < 3-count($data['content']->rows); $i++) {
                
                echo '<tr>';
                
                for ($j = 0; $j < count($data['content']->columns); $j++) {
                    echo '<td></td>';
                }
                echo '<td></td>';
                
                echo '</tr>';
            }
        ?>
    </table>
</div>