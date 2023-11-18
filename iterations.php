<?php
// for($i = 0; $i <= 10; $i++) {
//     //echo $i == 0 ? "$i" : ": $i";
//     echo "i = $i<br>";
// }
// $i = 31;
// while($i < 20) {
//     echo "i = $i<br>";
//     //never ending
//     $i = $i + 1;
// }
//do while = "do first", then check

// do {
//     echo "ii = $i<br>";
//     $i = $i + 1;
// }while($i < 30);
//foreach
// $fruits = ['apple', 'pineapple', 'orange', 'lemon'];
/*
    for($i = 0; $i < count($fruits); $i++) {
        echo "$fruits[$i] <br>";
    }
    */
// foreach ($fruits as $index => $fruit) {
//     echo "$index - $fruit <br>";
// }
$person = [
    'full_name' => 'Trần Thùy Vy',
    'email' => 'ttv.thuyvy.1544@gmail.com',
    'age' => 22
];
foreach ($person as $key => $value) {
    echo "$key : $value <br>";
}
