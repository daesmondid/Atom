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
            ?>
        </tr>
        <?php
            foreach ($data['content']->rows as $row) {
                
                echo '<tr onclick = "document.location = \''.$data['constant']->baseUrl.'/'.$data['content']->model.'/detail?id='.$row['id'].'\'">';
                
                foreach ($data['content']->columns as $column) {
                    echo '<td>'.$row[$column].'</td>';
                }
                
                echo '</tr>';
            }
        ?>
        <?php
            for ($i = 0; $i < 4-count($data['content']->rows); $i++) {
                
                echo '<tr>';
                
                for ($j = 0; $j < count($data['content']->columns); $j++) {
                    echo '<td></td>';
                }
                
                echo '</tr>';
            }
        ?>
    </table>
</div>