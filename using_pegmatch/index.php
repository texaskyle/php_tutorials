<a href="form.php">form</a><br>
<?php
// using preg_match funtion to check if the string really matches
$string = "my name is evans";

if (preg_match("/me/", $string)) {
    echo "match found";
}else{
    echo "no match";
}
echo "<br>";

// using preg_match to check if there are spaces
$string1 = 'thisDoesn\'tHaveaSpace';
function checkSpace(){
    global $string1;
if (!preg_match("/ /",$string1)) {
    echo "no space found";
}else{
    echo "at least one space was found";
}
    }

    echo checkSpace()."<br>";
    echo $string1;
    echo "<br>";


    // string length
    $secondName ="KIARIE eVaNs NjOROgE";
    $secondNameLength = strlen($secondName);
    echo $secondNameLength."<br>";

    for ($i=0; $i < $secondNameLength; $i++) { 
        echo $i."<br>";
    }
echo strtolower($secondName)."<br>";
echo strtoupper($secondName)."<br>";


// string position
$string2 = "my house is in kiambu, it is very big, it is spacious";
$find = "i";
$find_length = strlen($find);
$offset = 0;

// echo strpos($home, $find, 30);

while ($string_position = strpos($string2, $find, $offset)) {
    echo '<strong>'.$find.'</strong>'.' found at '.$string_position."<br>";
    $offset = $string_position + $find_length;
}
echo "<br>";

// string replace to replace word of anything in a string
$string4 = "my name is evans, i like football";
$new_string = str_replace('evans', 'keziah', $string4);
echo $new_string."<br>";

$find = array('name', 'evans', 'football');
$find_replace= array('names', 'kalucy', 'swimming');
$new_string2 = str_replace($find, $find_replace, $string4);
echo $new_string2;


?>