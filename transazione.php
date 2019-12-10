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
foreach($_SESSION['carrello'] as &$sgusto){
$sql = 'UPDATE stock SET quantita=(quantita-'.$_SESSION["n_pezzi".$sgusto].') WHERE gusto="'.$sgusto.'" AND ID_punto_vendita="'.$_SESSION["punto_vendita_vicino"].'";';
$conn->query($sql);
}

foreach($_SESSION['carrello'] as &$sgusto){
unset($_SESSION['n_pezzi'.$sgusto]);
}
unset($_SESSION['carrello']);
$msg = "Gli arancini sono stati spediti. Dati di recapito:\n\n".$_SESSION['nome']."\n".$_SESSION['cognome']."\n".$_SESSION['indirizzo'].", ".$_SESSION['citta']."\n".$_SESSION['cap']."\n".$_SESSION['telefono'];
$to = $_SESSION['mail'];
$subject = "Ordine effettuato";
$msg = wordwrap($msg,70);
$msg = htmlentities($msg);
$headers = "From: info@soloarancini.it\r\n";
mail($to,$subject,$msg,$headers);
header('Location: confirm_page.php?q=Transazione effettuata con successo');
exit();
?>
