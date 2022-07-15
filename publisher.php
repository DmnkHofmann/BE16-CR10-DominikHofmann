<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL); 

require_once './action/db_connect.php';
$pub = $_GET["publisher_name"];
$sql = "SELECT * FROM Library WHERE publisher_name = '$pub'"; 
$result = mysqli_query($connect, $sql);

$tbody="";

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $tbody .= "
        <div class='col-4 nsl justify-content-center py-2'>
        <div class='card library'>
            <a href='details.php?library_id=".$row['library_id']."'>
              <img class='card-img-top library-img' src='./pictures/" .$row['image']."'>
              <div class='card-body'>
                <p>" .$row['title']." - ".$row['author_first_name']." ".$row['author_last_name']."</p>
              </div>
              </a>
       </div>
      </div>
        ";
    };
}else {
    $tbody="
       <tr>
         <td> colspan='5' class='text-center'>Not Data </td>
        </tr>
    ";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Details</title>
</head>
<body>
    <?php require_once 'components/navigation.php' ?>
    <div class="container">   
    <div id="items">
      <div class="row text-center">
           <h1><?php echo $pub; ?></h1>
           <div class="col-12 row">
            <?php
              echo $tbody; 

            ?>
        </div>
      </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>