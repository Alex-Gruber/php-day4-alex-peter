<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "crud_example";

// $connect = mysqli_connect($localhost, $username, $password, $dbname);

// if(!$connect){
//     echo "Connection failled" . mysqli_connect_error();
// }else{
//     echo "connected";
// }
try {
    $connect = mysqli_connect($localhost, $username, $password, $dbname);
    // echo "Connected";
} catch (mysqli_sql_exception $e) {
    echo "Failed to connect: " . mysqli_connect_error();
}

function var_dump_pretty($var){
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}