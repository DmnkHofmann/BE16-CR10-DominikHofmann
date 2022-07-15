<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

require_once './action/db_connect.php';

$sql = "SELECT * FROM Library WHERE library_id = $_GET[library_id]";
$result = mysqli_query($connect, $sql);
$tbody="";

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $tbody .= "
        
        <div class='row text-center justify-content-center'>
            <div class='col-12'>
                <h1>
                  ".$row['title']."
                </h1>
                <div class='col-12'>
                    <img class='img-fluid' src='./pictures/".$row['image']."'>
                </div>
            </div>
            <div class='col-4'>
                <p class='dit'>
                
                     ".$row['short_description']."
                </p>
            </div>
            <div class='col-4'>
                <p class='dit'> 
                    ISBN/EAN: ".$row['ISBN_code']."
                </p>
                <p class='dit'>  
                    Author: ".$row['author_first_name']."
                     ".$row['author_last_name']."
                </p>
                
                <p class='dit'> 
                   Availabile: ".$row['availability']."
                </p>
            </div>
            <div class='col-4'>
                <p class='dit'> <a class='eddt' href='publisher.php?publisher_name=".$row['publisher_name']."'>
                    Publisher: ".$row['publisher_name']."</a>
                </p>
                <p class='dit'> 
                    Country: ".$row['publisher_address']."
                </p>
                <p class='dit'> 
                  Published: ".$row['publish_date']."
                </p>
            </div>
            <div class='col-12'>
            <a href='update.php?id=".$row['library_id']."'><button class='btn btn-primary' type='button'>Edit</button></a>
            <a href='delete.php?id=".$row['library_id']."'><button class='btn btn-danger' type='button'>Delete</button></a>
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
    <link rel="stylesheet" href="css/style.scss">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Details</title>
</head>
<body class="bbc">
    
  <?php require_once 'components/navigation.php' ?>
      <div class="container">   
        <?php  
           echo $tbody;
        ?>   
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
