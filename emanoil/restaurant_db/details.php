<?php
require_once "actions/db_connect.php";



$sql = "SELECT * FROM dishes WHERE dishId = 1";

$data = mysqli_query($connection, $sql);
$tbody = "";

if (mysqli_num_rows($data) > 0) {
    while($row = mysqli_fetch_assoc($data)){
        $tbody .= "
        <tr>
            <td><img class='img-thumbnail' src='pictures/" . $row['image'] . "'</td>
           <td>" . $row['name'] . "</td>
           <td>" . $row['price'] . "</td>
           <td>" . $row['description']."</td> 
           <td><a href='update.php?id=" . $row['dishId'] . "'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
           <a href='delete.php?id=" . $row['dishId'] . "'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a>
           </td>
        </tr>
        ";
    }
} else {
    // $tbody = "<tr><td colspan='4' class='text-center'>No data available</td></tr>";
    echo "Ooops... Something went wrong!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "components/boot.php"; ?>
    <style type="text/css">
        .manageProduct {
        margin: auto;
    }

    .img-thumbnail {
        width: 70px !important;
        height: 70px !important;
    }

    td {
        text-align: left;
        vertical-align: middle;

    }

    tr {
        text-align: center;
    }
    </style>
    <title>Restaurant</title>
</head>
<body>
<div class="manageProduct w-75 mt-3">
        <div class='mb-3'>
           <a href='index.php'><button class='btn btn-light btn-sm' type='button'>Back</button></a>
           <a href="create.php"><button class='btn btn-primary' type="button">Add product</button></a>
        </div>
        <p class='h2'>Dishes</p>
        <table class='table table-striped'>
            <thead class='table-success'>
                <tr>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
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
