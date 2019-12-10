<?php 
session_start();
unset($_SESSION['carrello']);
header('Location: chart_page.php');
exit();
?>
