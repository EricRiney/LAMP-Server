
<?php
$q = $_GET['q'];
require_once 'connection.php';
require_once 'models/movie-model.php';
$con = getConnection();
$moviemodel = new MeowSearch($con);
$matches = $moviemodel->search($q);

if (count($matches) == 1) {
    $zip = $matches[0]['zip'];
    $url = "http://img.omdbapi.com/?apikey=[$zip]&";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <link rel="icon" href="img/page-icon.png">
    <title>Riney</title>
    
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body class="container">
    <?php 
    include 'views/search-form.php';
    
    include 'views/matches.php';
    ?>
     <table class = 'table'>
         <thead>
            <tr>
                <th>Title</th>
                <th class="text-right">Release Date</th>
                <th class="text-right">Tickets Sold</th>
                <th class="text-right">Gross Revenue</th>
            </tr>
        </thead>
           <ul>
<?php
    foreach ($db->query('SELECT * FROM movies2014') as $row) {
    echo "<li>".$row['title']." - ".$row['released']."</li>";

}
?>
</ul>
     </table>
    
   
</body>
</html>

