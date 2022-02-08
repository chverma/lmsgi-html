<?php
if(!empty($_POST)) {
    $fields = array('username', 'pw_1', 'pw_2', 'firstname', 'lastname', 'telephone', 'email');
    foreach ($fields as $var) {
        echo "<strong>$var:</strong> $_POST[$var] <br>";
    }
}

if(!empty($_GET)) {
    $fields = array('username', 'password');
    foreach ($fields as $var) {
        echo "<strong>$var:</strong> $_GET[$var] <br>";
    }
}
?>