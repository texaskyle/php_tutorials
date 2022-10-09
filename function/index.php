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
 ?>