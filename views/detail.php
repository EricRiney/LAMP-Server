<?php
require_once '../connection.php';
require_once '../models/movie-model.php';
$con = getConnection();
$moviemodel = new MeowSearch($con);

$q = $_GET['q'];
$matches = $moviemodel->getDetail($q);
//print_r($matches);

foreach($matches as $row):
    ?>
    <tr>
        <td><?= $row['title']?></td>
        <td><?= $row['released']?></td>
        <td><?= $row['tickets']?></td>
        <td>$<?= $row['gross']?></td>
    </tr>
     <?php 
    endforeach;
    ?>
  