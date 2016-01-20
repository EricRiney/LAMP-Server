
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
    <h1>Totally Lookup A Movie</h1>
    <form method="GET" action="" class="form">
        <input type="search" 
                name="title" 
                class="form-control" 
                value= "<?= htmlspecialchars($_GET['title'], ENT_QUOTES, 'Utf-8') ?>"
                placeholder="search by title">
    </form>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th class="text-right">Release Date</th>
                <th class="text-right">Tickets Sold</th>
                <th class="text-right">Gross Revenue</th>
            </tr>
        </thead>
        <tbody>
            
      <?php
      require_once 'connection.php';
      require_once 'models/movie-model.php';
      $con = getConnection();
      $moviemodel = new MeowSearch($con);
      //$q = $_GET['q'];
      //$matches = $moviemodel->getDetail($q);
      $q = $_GET['title'];
      $matches = $moviemodel->search($q);
      //print_r($matches);
      foreach($matches as $row):
      ?>
      <tr>
          <td><a href="views/detail.php?q=<?= $row['ID']?>"><?= $row['title']?></td>
          <td><?= $row['released']?></td>
          <td><?= $row['tickets']?></td>
          <td>$<?= $row['gross']?></td>
      </tr>
      <?php 
      endforeach;
      ?>
      </tbody>
      </table>
      </body>
      </html>

