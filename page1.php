<?php
//START SESSION
session_start();

// Give the name of a cookie and set it to a value
$_SESSION['test_session'] = "Hello World!";


// Print out the information of  the 'test_session' varible.
echo 'The content of ' . $_SESSION['test_session'] . ' is ' . $_SESSION['test_session'] . '<br/>';

?>

<a href="page2.php">Next Page</a>