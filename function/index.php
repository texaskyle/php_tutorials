 <?php 

     function hi($name) {
        return "hello there ".$name;
    }

    echo hi("evans");
    
    echo "<br>";

    function foo(){
        echo "foo";
        function bar (){
            echo "bar";
        }
    }

    foo();
    bar();

    echo "<br>";

    function multi(int $x,int $y=6) {
        return $x * $y;
    }
     echo multi(5);

     echo "<br>";
    //  adding numbers in an array
  function sum(...$numbers) {
     /*  
        $sum = 0;
        foreach ($numbers as $number) {
            $sum += $number;
        }
        return $sum;
        */
        return array_sum($numbers);
     }
     echo sum(1,2,3,4,5,6,7,9);
     echo "<br>";

    //  funtion add
    function add($num1, $num2) {
      return $num1 + $num2;
    }
   echo add(4,5);
   echo "<br>";

//    funtion to display day, month and year
function displayDate($day, $month, $year) {
    echo "$day"." "."$month"." "."$year";
}
displayDate("monday", "october", "2022");
echo "<br>";

$num1=10;
$num2=10;
$num3=5;
$num4=5;
function addAndDivide($num1,$num2,$num3,$num4) {
return ($num1+$num2)/($num3+$num4);
}
echo addAndDivide($num1,$num2,$num3,$num4);
echo "<br>";

function addNums($numm1, $numm2) {
 $result = $numm1 + $numm2;
 return $result;
}
function divide($numm1, $numm2){
    $sumNums = $numm1 + $numm2;
    return $sumNums;
 }
 echo addNums(10,10) / divide(5,5);
 echo "<br>";

//  calling the users ip address
 $user_ip = $_SERVER['REMOTE_ADDR'];
function user_ip() {
    global $user_ip;
    $string = "The users ip address is ".$user_ip;
    echo $string;
}
echo user_ip();
echo "<br>";

// function strings

$name ="my name is evans.";
function countword() {
  global $name;
  echo str_word_count($name)."<br>";
  echo str_shuffle($name);
}
echo countword();
echo "<br>";
var_dump($name);
echo "<br>";

// using a substr
$school = "this is chuka university";
$str_shuffled= str_shuffle($school);
echo $str_shuffled;
echo "<br>";
$half = substr($str_shuffled, 0, strlen($school));
echo "<br>";
$half = substr($str_shuffled, 0, 5);
echo "half : ".$half;
echo "<br>";

// similarity of texts
echo $str1 = "my name is  evans , njoroge is my father<br>";
echo $str2 = "my name is kezial, njoroge is my fathers name<br>";

similar_text($str1, $str2, $results);
echo "The similarities of this articles is ".(int)$results."%"."<br>";
echo strlen($str2);
 ?>