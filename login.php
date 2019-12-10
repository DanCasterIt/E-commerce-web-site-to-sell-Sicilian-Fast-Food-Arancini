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

//Login admin
$sql = 'SELECT * FROM amministratori WHERE mail="'.$_POST['usermail'].'" AND password="'.$_POST['password'].'";';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //Esempio: il contenuto dei dati estratti dal DB sono conservati in variabili opportune
    if (isset($_SESSION['coord'])) {$coord = $_SESSION['coord'];}
    $_SESSION = $result->fetch_assoc();
    $_SESSION['coord'] = $coord;
    $_SESSION['login'] = 1;
    $_SESSION['role'] = 1; //admin
    $msg = "Successful login!";
} else { //login cliente
	$sql = 'SELECT * FROM clienti WHERE mail="'.$_POST['usermail'].'" AND password="'.$_POST['password'].'";';
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    //Esempio: il contenuto dei dati estratti dal DB sono conservati in variabili opportune
    if (isset($_SESSION['coord'])) {$coord = $_SESSION['coord'];}
    if (isset($_SESSION['carrello'])) {$carrello = $_SESSION['carrello'];}
    $_SESSION = $result->fetch_assoc();
    $_SESSION['coord'] = $coord;
    $_SESSION['carrello'] = $carrello;
    $_SESSION['login'] = 1;
    $_SESSION['role'] = 0; //cliente
    $msg = "Successful login!";
    header('Location: calcolo_punto_vendita.php?q='.$_SESSION['coord']['lat']);
    exit();
    } else {
	//unvalid mail - password combination
	$msg = 'Unvalid mail and password combination';
	}
}	
$conn->close();
header('Location: index.php?='.$msg);
exit();
?>

