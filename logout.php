<?php 
session_start();


$page_title = 'Goodbye';

$_SESSION = array();
session_destroy();
header("Location: index.php");	
?>