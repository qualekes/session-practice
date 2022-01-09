<?php
session_start();

echo 'The content of $_SESSION[\'test-session\'] is ' . $_SESSION['test_session'] . "<br/>";

session_destroy();
