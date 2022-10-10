<?php
$food = array('githeri', 'chapati', 'mukimo', 'ugali');
$food[10] = "spagheti";
echo $food[0]."<br>";
print_r($food);
echo "<br>";

// associative arrays
$food = array('githeri'=>'70 bob', 'chapati'=>'20 bob', 'mukimo'=>'100 bob', 'ugali'=>'50 bob');
print_r($food);
echo "the price of githeri is ".$food['githeri'];
echo "<br>";

// multidimensional array
$food = array(
    'healthy_foods'
                   => ['githeri' => '70 bob', 'ugali' => '50 bob', 'rice' => '50 bob', 'potatoes' => '30 bob'],
  'unhealthy_foods'
                   => ['ice cream' => '50 bob', 'indomie' => '30 bob', 'sossi' => '20 bob'], 
           'drinks'
                    => ['soda'=> '35bob', 'milk' => '20 bob', 'water' => 'free']);

                    print_r($food);
                    echo "<br>";
                    echo "The price of soda is ksh ".$food['drinks']['soda'];
                    echo "<br>";

                    // foreach is used to display the elements in an array
                    foreach($food as $element => $inner_array){
                        echo '<strong>'. $element.'</strong>'."<br>";
                        foreach($inner_array as $item){
                            echo $item."<br>";

                        }
                    }

?>