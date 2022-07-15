<?php

require_once 'action/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM Library WHERE library_id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
        $image = $data['image'];
        $isbn = $data['ISBN_code'];
        $type= $data['type'];
        $firstname = $data['author_first_name'];
        $lastname = $data['author_last_name'];
        $publishername = $data['publisher_name'];
        $publisheraddress = $data['publisher_address'];
        $publishdate = $data['publish_date'];
        $availability = $data['availability'];
        $shortdescription = $data['short_description'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
   header("location: error.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Product</title> 
        <link rel="stylesheet" href="css/style.scss">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     
    </head>
    <body class="bbc">
    
        <?php require_once 'components/navigation.php' ?>
        
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-12">
                    <h3>Update request</h3>
                </div>
                <div class="col-12 align-self-center">
                        <img src='pictures/<?php echo $image ?>' alt="<?php echo $image ?>">
                </div>
            </div>
        <fieldset>
            <form action="action/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table text-dark">
                            <tr>
                                <th>Name</th>
                                <td><input class='form-control' type="text" name="title" placeholder="Product Name"  value="<?php echo $title ?>"  /></td>
                            </tr>    
                            <tr>
                                <th>ISBN-Code</th>
                                <td><input class='form-control' type="number" name= "ISBN_code" placeholder="Price" step="any"   value="<?php echo $isbn ?>"  /></td>
                            </tr>
                            <tr>
                                <th>Type</th>
                                <td><input class='form-control' type="text" name="type" placeholder="Type"  value="<?php echo $type ?>"  /></td>
                            </tr> 
                            <tr>
                                <th>First Name</th>
                                <td><input class='form-control' type="text" name="author_first_name" placeholder="first"   value="<?php echo $firstname ?>"  /></td>
                            </tr>   
                            <tr>
                                <th>Last Name</th>
                                <td><input class='form-control' type="text" name="author_last_name" placeholder="last" value="<?php echo $lastname ?>" /></td>
                            </tr>     
                            <tr>
                                <th>Piblisher</th>
                                <td><input class='form-control' type="text" name="publisher_name" placeholder="Publisher Name" value="<?php echo $publishername ?>" /></td>
                            </tr>       
                            <tr>
                                <th>Publisher Address</th>
                                <td><input class='form-control' type="text" name="publisher_address" placeholder="Publisher Address" value="<?php echo $publisheraddress ?>" /></td>
                            </tr>      
                            <tr>
                                <th>Publisher Date</th>
                                <td><input class='form-control' type="number" name="publish_date" placeholder="Publisher Date" value="<?php echo $publishdate ?>" /></td>
                            </tr>       
                            <tr>
                                <th>Availability</th>
                                <td><input class='form-control' type="text" name="availability" placeholder="Availability" value="<?php echo $availability ?>" /></td>
                            </tr>      
                            <tr>
                                <th>Short description</th>
                                <td><input class='form-control' type="text" name="short_description" placeholder="Short Description" value="<?php echo $shortdescription ?>" /></td>
                            </tr>     
                            <tr>
                                <th>Picture</th>
                                <td><input class='form-control' type="file" name="image"  /></td>
                            </tr>
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['library_id'] ?>" /> <!-- ovo je iz sql-->
                        <input type= "hidden" name= "image" value= "<?php echo $data['image'] ?>" />
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>