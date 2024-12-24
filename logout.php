<?php
session_start();
session_destroy();
header("Location:/primerides/index.php"); 
exit();
?>
