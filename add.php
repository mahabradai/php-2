
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

//  les données du formulaire
$nom = $_POST["nom"];
$prix = $_POST["prix"];
$qte = $_POST["qte"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// exécuter la requête SQL
$sql = "INSERT INTO article (nom, prix, qte) VALUES ('$nom', '$prix', '$qte')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>

