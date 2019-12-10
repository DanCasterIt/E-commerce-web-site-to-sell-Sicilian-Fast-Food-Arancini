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
$sql = 'CALL punto_vendita_vicino ('.$_SESSION['coord']['lat'].','.$_SESSION['coord']['lng'].', 1000);';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$dati_punto_vendita = $result ->fetch_assoc();
$_SESSION['punto_vendita_vicino'] = $dati_punto_vendita['ID_punto_vendita'];
$_SESSION['punto_vendita_citta'] = $dati_punto_vendita['citta'];
$_SESSION['punto_vendita_indirizzo'] = $dati_punto_vendita['indirizzo'];
$_SESSION['punto_vendita_distanza'] = $dati_punto_vendita['distanza'];
} else {
$_SESSION['punto_vendita_vicino'] = "0";
$_SESSION['punto_vendita_citta'] = "Catania";
$_SESSION['punto_vendita_indirizzo'] = "via Quieta n.16";
$_SESSION['punto_vendita_distanza'] = "?.?";
}
header('Location: index.php');
exit();

?>
