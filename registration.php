<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "progetto";

// Create connection-
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = 'SELECT * FROM clienti WHERE mail="'.$_POST['E-mail'].'";';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //email presente in db!
    $msg = "Email already in use: please provide another email";
    $conn->close();
    header('Location: registration_page.php?response='.$msg);
    exit();  
} else {
//insert into db
    	$sql = 'INSERT INTO clienti (ID_clienti, nome, cognome, citta, indirizzo, password, mail, telefono, cap) VALUES ((SELECT MAX(ID_clienti) FROM clienti AS giallo)+1, "'.$_POST['nome'].'", "'.$_POST['cognome'].'", "'.$_POST['citta'].'", "'.$_POST['indirizzo'].'", "'.$_POST['password'].'", "'.$_POST['E-mail'].'", "'.$_POST['numero'].'", "'.$_POST['cap'].'");';
	$result = $conn->query($sql);
	$conn->close();
	header('Location: index.php?q=Registrazione avvenuta!');
	exit();
}
?>
