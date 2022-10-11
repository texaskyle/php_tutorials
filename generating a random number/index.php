<?php
    // to generate a random number
    echo rand()."<br>";
    // this code gets the maximum number that can be generated
    echo getrandmax();
    echo "<br>"."<br>";
?>

<?php
// creating a game to roll a dice
if (isset($_POST['roll'])) {
    echo "<strong>clicked</strong>!! Wait for the response!"."<br>";
   echo "Dice side ".rand(1,6)." rolled"; 
}else {
    echo "click the roll button";
}
?>
    <form action="index.php" method="POST">
            <input type="submit" name="roll" value="RoLL A Dice">
            </form>
