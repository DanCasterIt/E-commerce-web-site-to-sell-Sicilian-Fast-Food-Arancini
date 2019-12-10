<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "progetto";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = 'SELECT * FROM stock WHERE ID_punto_vendita="'.$_POST['ID_punto_vendita'].'" AND gusto="'.$_POST['gusto'].'";';
$result = $conn->query($sql);
if($result->num_rows > 0){
$sql = 'UPDATE stock SET quantita=(quantita+'.$_POST['quantita'].') WHERE ID_punto_vendita="'.$_POST['ID_punto_vendita'].'" AND gusto="'.$_POST['gusto'].'";';
$result = $conn->query($sql);
}else{
$sql = 'INSERT INTO stock (ID_stock,ID_punto_vendita ,gusto, quantita)
VALUES ((SELECT max(ID_stock) FROM stock as stk)+1, "'.$_POST['ID_punto_vendita'].'","'.$_POST['gusto'].'", "'.$_POST['quantita'].'")';
$result = $conn->query($sql);
}
$conn->close();
header('Location: admin_page.php?q=ordine_effettuato');
exit();
?>
