<?php

require_once 'action/db_connect.php';

$sql = "SELECT * FROM Library";
$result = mysqli_query($connect ,$sql);
$tbody_book= ''; //array( $row['type']['book'], $row['type']['cd'],  $row['type']['dvd']);
$tbody_cd= '';
$tbody_dvd= '';
if(mysqli_num_rows($result) > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
        $tbody_book .= "
      <div class='col-4 nsl justify-content-center py-2'>
        <div class='card library'>
            <a href='details.php?library_id=".$row['library_id']."'>
              <img class='card-img-top library-img' src='./pictures/" .$row['image']."'>
              <div class='card-body'>
                <p>" .$row['title']." - ".$row['author_first_name']." ".$row['author_last_name']."</p>
              </div>
              </a>
       </div>
      </div>";
   };
} else {
    $tbody_book =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
  <?php require_once 'components/navigation.php' ?>
  
  <div text-center align-items-center">
    <h1 class="text-center">Welcome to my Library</h1>
  </div>
  <div id="items">

    <div class="row text-center">
        <a href= "create.php"><button class='btn btn-primary'type="button" >Add to library</button></a>
      <div class="col-12 row">
            <?php
              echo $tbody_book; 

            ?>

      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>