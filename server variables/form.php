<?php
    $script_name = $_SERVER['SCRIPT_NAME'];
?>

<form action="<?php $script_name ?>" method="POST">
    <input type="text" name="username">
    <input type="submit" name="submit">
</form>