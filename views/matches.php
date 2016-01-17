<h1>Movie Stuff</h1>
<ul>
    <?php 
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