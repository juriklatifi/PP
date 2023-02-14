<?php 
include_once 'databaseConnection.php';


class Kontakti_Repository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


function insertK($kontakti){

$conn = $this->connection;
$KontaktiID = $kontakti->getKontaktiID();
$Emri = $kontakti->getEmri();
$Mbiemri = $kontakti->getMbiemri();
$Email = $kontakti->getEmail();
$Subjekt = $kontakti->getSubjekt();
$Kerkesa = $kontakti->getKerkesa();

$sql = "INSERT INTO Kontakti (KontaktiID,Emri,Mbiemri,Email,Subjekt,Kerkesa) VALUES (?,?,?,?,?,?)";

$statement = $conn->prepare($sql);

$statement->execute([$KontaktiID,$Emri,$Mbiemri,$Email,$Subjekt,$Kerkesa]);

echo "<script> alert('Kontakti has been inserted successfuly!'); </script>";

}


function getKontaktet(){
    $conn = $this->connection;

    $sql = "SELECT * FROM Kontakti";

    $statement = $conn->query($sql);
    $kontaktet = $statement->fetchAll();

    return $kontaktet;
}
}