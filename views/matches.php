<h1>Movie Stuff</h1>
<ul>
    <?php 
    foreach ($matches as $row):
    ?>
    <li>
        <?= $row['title']?>,
        <?= $row['released']?>,
        <?= $row['gross']?>,
        <?= $row['tickets']?>
    </li>
     <?php 
    endforeach;
    ?>
</ul>