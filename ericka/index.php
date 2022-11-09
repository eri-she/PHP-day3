<?php
require_once "./actions/db_connect.php";
// We can write our query and save it in a variable
$sql = "SELECT * FROM dishes";
// this function will accept 2 arguments, the connection variable and the query.
$result = mysqli_query($conn, $sql);
// function to fetch data returned from a query.
$tbody="";

// var_dump_pretty($row);
// 0 replaces the  variable i then we have the number of objets of the array
if (0 < mysqli_num_rows($result) ) {
    while ($array = mysqli_fetch_assoc($result)) {
        
        $tbody .= "
<tr>
            <td><img class='img-thumbnail' src='" . $array['image'] ."' width=100px</td>
           <td>" . $array['name'] . "</td>
           <td>" . $array['price'] . "</td>
           <td><a href='update.php?id=" . $array['id'] . "'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
           <a href='delete.php?id=" . $array['id'] . "'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
            </tr>
";
    }
} else {
    $tbody = "<tr><td colspan='4' class='text-center'>No data available</td></tr>";
}


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
                <?php echo $tbody; ?>
            </tbody>
        </table>
    </div>
</body>
</html>