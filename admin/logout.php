<?php
session_start(); // start the session

// unset all session variables
$_SESSION = array();

// destroy the session
session_destroy();

// unset the session cookie
setcookie(session_name(), '', time()-3600);

// redirect to a page or perform any other desired action
header("Location: login.php");
exit();
?>
