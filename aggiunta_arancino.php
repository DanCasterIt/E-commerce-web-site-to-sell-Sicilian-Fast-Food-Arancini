<?php
session_start();
//file upload
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["immagine"]["name"]);
$nomefile = basename($_FILES["immagine"]["name"]); //da inserire nel db
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["immagine"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
move_uploaded_file($_FILES["immagine"]["tmp_name"], $target_file); //upload del file
//collegamento al db
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
$sql='INSERT INTO arancini (gusto, prezzo, descrizione, immagine) VALUES ("'.$_POST['gusto'].'", "'.$_POST['prezzo'].'", "'.$_POST['descrizione'].'", "'.$nomefile.'")';
$conn->query($sql);
header('Location: admin_page.php?q=arancino_aggiunto');
exit();
?>

