<?php 
include_once 'databaseConnection.php';


class Lagje_Repository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


    function insert($lagje){

        $conn = $this->connection;
        $LagjetID = $lagje->getLagjetID();
        $Qyteti = $lagje->getQyteti();
        $Lagjet = $lagje->getLagjet();
        $Zona = $lagje->getZona();
        $Cmimi_hour = $lagje->getCmimi_hour();
        $Cmimi_day = $lagje->getCmimi_day();
        $Cmimi_denim = $lagje->getCmimi_denim();
        
        $sql = "INSERT INTO Lagjet (LagjetID,Qyteti,Lagjet,Zona,Cmimi_hour,Cmimi_day,Cmimi_denim) VALUES (?,?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$LagjetID,$Qyteti,$Lagjet,$Zona,$Cmimi_hour,$Cmimi_day,$Cmimi_denim]);

        echo "<script> alert('User has been inserted successfuly!'); </script>";

    }

    function getAllLagjet(){
        $conn = $this->connection;

        $sql = "SELECT * FROM Lagjet";

        $statement = $conn->query($sql);
        $Lagjet = $statement->fetchAll();

        return $Lagjet;
    }

    function getLagjetById($LagjetID){
        $conn = $this->connection;

        $sql = "SELECT * FROM Lagjet WHERE LagjetID='$LagjetID'";

        $statement = $conn->query($sql);
        $Lagjet = $statement->fetch();

        return $Lagjet;
    }

    function updateLagjet($LagjetID,$Qyteti,$Zona,$Lagjet,$Cmimi_hour,$Cmimi_day,$Cmimi_denim){
         $conn = $this->connection;

         $sql = "UPDATE Lagjet SET Qyteti=?, Zona=?, Lagjet=?, Cmimi_hour=?, Cmimi_day=?, Cmimi_denim=? WHERE LagjetID=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$LagjetID,$Qyteti,$Zona,$Lagjet,$Cmimi_hour,$Cmimi_day,$Cmimi_denim]);

         echo "<script>alert('update was successful'); </script>";
    } 

    function deleteLagjet($LagjetID){
        $conn = $this->connection;

        $sql = "DELETE FROM Lagjet WHERE LagjetID=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$LagjetID]);

        echo "<script>alert('delete was successful'); </script>";
   } 
}

?>