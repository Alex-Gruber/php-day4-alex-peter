<?php 
require_once "actions/db_connect.php";

$sql = "SELECT * from products";
$result = mysqli_query($connect, $sql);
$tbody = "";
// $info = mysqli_fetch_all($result, MYSQLI_ASSOC);
// var_dump_pretty($info);
if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)){
    $tbody .= "<tr>
            <td><img class='img-thumbnail' src='pictures/" .$row['picture']."'</td>
           <td>" .$row['name']."</td>
           <td>" .$row['price']."</td>
           <td><a href='update.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
           <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
            </tr>";
}
}else{
    $tbody = "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "components/boot.php";?>
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

    <title>CRUD</title>
</head>

<body>
    <div class="manageProduct w-75 mt-3">
        <div class='mb-3'>
            <h1 class="text-center">Restaurant</h1>
            <a href="create.php"><button class='btn btn-primary' type="button">Add meal</button></a>
        </div>
        <p class='h2'>meals</p>
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
           <?php echo $tbody?>
            </tbody>
        </table>
    </div>

</body>

</html>