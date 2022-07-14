<?php
$front_end = ["HTML", "CSS", "JS", "TS", "Angular"];
$back_end = array("MySql", "PHP", "AJAX", "API", "Symfony");
$students = array(
    "Peter" => "35",
    "Ben" => "37",
    "Joe" => "43"
);

$students_assoc = array(
    "Peter" => array("Age" => "35", "Hobby" => "Swimming"),
    "Ben" => "37",
    "Joe" => "43"
);

// for ($i=0; $i < count($front_end); $i++) { 
//     echo "Courses : $front_end[$i] <br>";
// }

// $a = 11;
// while ($a < 10) {
//     echo $a . "<br>";
//     $a++;
// }

// $z = 20;
// do {
//    echo "It runs at least once <br>";
//    $z++;
// } while ($z < 10);

// foreach ($students_assoc as $key => $value) {
//     echo "$key <br>";
//     if (is_array($value)) {
//         foreach ($value as $attr => $info) {
//             echo "$attr is $info<hr>";
//         }
//     }else{
//         echo "Age is $value. No hobbies to mention <hr>";
//     }
// }
