<?php 
session_start();
session_destroy();
header("Location: admin1/index.php");
?>