<?php
//start session
session_start();


// Print out the value of the session previously started on page1.php
echo 'The content of $_SESSION[\'test_session\'] is ' . $_SESSION['test_session'] . '<br/>';


// clear information set in $_SESSION['test_session']
unset($_SESSION['test_session']);

?>

<p><a href="page3.php">Next Page</a></p>