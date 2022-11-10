<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {   
    $name = $_POST['name'];
    $price = $_POST['price'];
    $uploadError = '';
    //this function exists in the service file upload.
    $picture = file_upload($_FILES['picture']);  
   
    $sql = "INSERT INTO dishes (name, image, price) VALUES ('$name', '$picture->fileName', $price)";

    if (mysqli_query($conn, $sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $name </td>
            <td> $price </td>
            </tr></table><hr>";
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $conn->error;
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    }
 
} else {
    // header is a method that redirects you to a page, you need the word location
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/bootstrap.php'?>
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?= $message;?></p>
                <p><?= $uploadError;?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>
