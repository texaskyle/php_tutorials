<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="results.php">results</a>
    <br>
    
</body>
</html>


<?php
$firstname = "Evans";

echo "hello {$firstname}";
echo "<br>";
// constants
define('STATUS_PAID', 'paid');
echo STATUS_PAID;


echo "<br>";
const STATUS_NOT_PAID = 'not paid';
echo STATUS_NOT_PAID;

echo "<br>";
//predefined funtions which are inbuild
echo PHP_VERSION;
echo "<br>";
echo __FILE__;
echo "<br>";

// varible variable
$firstname = "evans";
$$firstname = "kiarie";

echo $firstname," ".$$firstname;
echo "<br>";

echo gettype($firstname)."<br>";
var_dump($firstname, $$firstname)."<br>";
echo "<br>";

function sum($x, $y){
    return $x + $y;
}

echo sum(2,3);

//heredoc
$text = <<<TEXT
Hello world.
This is my name.
This is my school.

<div>
<form action="signup.php" method ="POST">
<input type = "text" name="firstname">
</div>

TEXT;

echo nl2br($text);

$a = NULL;
echo $a;
var_dump($a)."<br>";
echo "<br>";
var_dump(is_null($a));
echo "<br>";
var_dump((string)$a);

echo "<br>";

//array
$programmingLanguages = ['php','java', 'python'];
Var_dump(isset($programmingLanguages));          echo "<br>";
echo $programmingLanguages[2];
echo "<br>";

// comparision operator
$num1 = '1';
$num2 = '1';

if ($num1 === $num2) {
    echo "equal";
}else{
    echo "not equal to";
}
echo "<br>";

// while loop
 $counter = 0;
 while ($counter <= 10) {
    $counter++;
    echo $counter." hello world<br>";
 }
 echo "<br>";
//  do while loop
$counter = 0;
do {
    echo $counter."this will always show no matter the if the condition is true or false<br>";
    $counter++;
} while ($counter <= 10);

// using the die and exit funtion
mysqli_connect("localhost", "root", "") ||
die ('could not connect to he database');
echo "connected";

echo "<br><br>";
// preg match
$string = "my name is evans";
if (preg_match('/evans/',$string)) {
    echo "match found";
}else{
    echo "no match";
}