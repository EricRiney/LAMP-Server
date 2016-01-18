
<ul>
    <?php
    //print_r($matches);
    foreach($matches as $row):
    ?>
    <li>
        <?= $row['title']?>,
        <?= $row['released']?>,
        <?= $row['tickets']?>,
        <?= $row['gross']?>
    </li>
     <?php 
    endforeach;
    ?>
</ul>