<?php
$full_name = 'T.T.Vy';
//echo "length: " . strlen($full_name);
//reverse a string
//echo strrev($full_name);
//conert to lowercase
//echo strtolower($full_name);
//echo strtoupper($full_name);
//find and replace
//echo str_replace(' ', '-', $full_name);
if (str_starts_with(strtolower($full_name), 't')) {
    echo "Name starts with T<br>";
}
if (str_ends_with(strtolower($full_name), 'vy')) {
    echo "Name ends with vy <br>";
}
echo "<h1>html string</h1>";
//how to ignore the html string ?
echo htmlspecialchars("<h1>html string</h1>");
//echo "<script>alert('This is javascript code')</script>";
echo htmlspecialchars("<script>alert('This is javascript code')</script>");
//htmlspecialchars used to get data in form
printf('<br>%s likes %s', 'Vy', 'Mercedes G63<br>');
printf('pi = %f', 3.14);
