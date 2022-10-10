<?php
if(isset($_POST['submit'])){
    if (empty($_POST['comments'])) {
        echo "input something in the input field";
    }else {
        $find = array ('evans', 'kiarie', 'njoroge');
        $replace_with = array ('k****h', 'n***i', 'wan*iku');
        // taking the users input comments
        $comments = $_POST['comments'];
        $commentsToLowercase = strtolower($comments);
        
       echo $replaceWords = str_replace($find, $replace_with, $commentsToLowercase);
    }
}
?>

<hr>
<form action="index.php" method="POST">
    <textarea name="comments" cols="30" rows="10" placeholder="write your comments here">
        <?php echo $_POST['comments']; ?>
    </textarea><br>
    <button type="submit" name="submit" >submit</button>
</form>

