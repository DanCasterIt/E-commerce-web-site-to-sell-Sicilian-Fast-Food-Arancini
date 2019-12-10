<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_GET['q'];
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "progetto";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
	echo "error";
		}
$sql="SELECT * FROM arancini WHERE gusto = '".$q."'";
$result = $conn->query($sql);
echo "<table>
<tr>
<th>Prezzo €</th>
<th>Descrizione</th>
<th>Immagine</th>
</tr>";
while($row=$result->fetch_assoc()) {
    echo "<tr>";
    echo "<td><input type='number' id='mod_prezzo' value='".$row['prezzo']."' name='prezzo' step='0.01' min='0' required></td>";
    echo "<td><input type='text-area' value='".$row['descrizione']."' name='descrizione' required></td>";
    echo "<td>".$row['immagine']."</td>";
    echo "</tr>";
}
echo "</table></br>";
echo "Nuova immagine: <input type='file' name='immagine' id='immagine' accept='image/*' required></br>";
echo "<input type='hidden' value='".$q."' name='gusto'>";
echo "<input type='submit' value='Modifica' name='submit'></br></br>";
$conn->close();
?>
</body>
</html> 


