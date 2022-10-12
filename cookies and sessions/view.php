<?php
require_once 'header.php';

echo '<form action="view.php" method="POST">
<input type="text" name="email">
<button type="submit" name="setEmail">submit email</button>
</form>';

if (!isset($_POST['setEmail'])) {
    echo "click the submit button!!";
}elseif (empty($_POST['email'])) {
    echo "fill in the email address!";
}else {
    $email = $_POST['email'];
    echo $email;
}

// unset email
echo '<form action="unsetEmail.php" method="POST">
<button type="submit" name="unsetEmail">un-set email</button>
</form>';

?>