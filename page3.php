<?php
session_start();
// You can now see that the value of $_SESSION['test-session'] is empty
echo 'The content of $_SESSION[\'test-session\'] is ' . $_SESSION['test_session'] . "<br/>";

session_destroy();
