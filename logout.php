<?php
session_start();
unset($_SESSION['carrello']);
session_destroy();
header('Location: index.php');
exit();
?>

