<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- here you paste the code to include the bootstrap´s link -->
      <?php require_once "components/bootstrap.php";
    ?>
</head>
<body>
      <div class="manageProduct w-75 mt-3 container">
        <div class='mb-3'>
            <a href="create.php"><button class='btn btn-primary' type="button">Add product</button></a>
        </div>
        <p class='h2'>Products</p>
        <table class='table table-striped'>
            <thead class='table-success'>
                <tr>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- <?php echo $tbody; ?> -->
            </tbody>
        </table>
    </div>
</body>
</html>