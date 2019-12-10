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

if ($_SESSION['role']){//si tratta di un admin
$sql = 'UPDATE amministratori SET nome="'.$_POST['nome'].'", cognome="'.$_POST['cognome'].'", telefono="'.$_POST['telefono'].'", mail="'.$_POST['mail'].'" WHERE ID_amministratore="'.$_SESSION['ID_amministratore'].'";';
} else { //si tratta di un cliente
$sql = 'UPDATE clienti SET nome="'.$_POST['nome'].'", cognome="'.$_POST['cognome'].'", telefono="'.$_POST['telefono'].'", mail="'.$_POST['mail'].'", citta="'.$_POST['citta'].'", indirizzo="'.$_POST['indirizzo'].'" WHERE ID_clienti="'.$_SESSION['ID_clienti'].'";'; 
}
$conn->query($sql);//effettua la query
if ($_SESSION['role']){//si tratta di un admin
		$_SESSION['nome'] = $_POST['nome'];
		$_SESSION['cognome'] = $_POST['cognome'];
		$_SESSION['telefono'] = $_POST['telefono'];
		$_SESSION['mail'] = $_POST['mail'];	
} else { //si tratta di un cliente
		$_SESSION['nome'] = $_POST['nome'];
		$_SESSION['cognome'] = $_POST['cognome'];
		$_SESSION['telefono'] = $_POST['telefono'];
		$_SESSION['mail'] = $_POST['mail'];	
		$_SESSION['citta'] = $_POST['citta'];
		$_SESSION['indirizzo'] = $_POST['indirizzo'];
}
$_SESSION['risultato'] = "Modifiche salvate";
$conn->close();
header('Location: profile_page.php');
exit();
