<?php 
include_once 'databaseConnection.php';


class User_Repository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }


    function insert($user){

        $conn = $this->connection;

        $UserID = $user->getUserID();
        $Emri = $user->getEmri();
        $Mbiemri = $user->getMbiemri();
        $Email = $user->getEmail();
        $Username = $user->getUsername();
        $Password = $user->getPassword();
        $Roli = $user->getRoli();
        
        $sql = "INSERT INTO User (UserID,Emri,Mbiemri,Email,Username,Password,Roli) VALUES (?,?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$UserID,$Emri,$Mbiemri,$Email,$Username,$Password,$Roli]);

        echo "<script> alert('User has been inserted successfuly!'); </script>";

    }

    function registerForm($user){

        $conn = $this->connection;

        $UserID = $user->getUserID();
        $Emri = $user->getEmri();
        $Mbiemri = $user->getMbiemri();
        $Email = $user->getEmail();
        $Username = $user->getUsername();
        $Password = $user->getPassword();
        $Roli = 'User' ;
        
        $sql = "INSERT INTO user (UserID,Emri,Mbiemri,Email,Username,Password,Roli) VALUES (?,?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$UserID,$Emri,$Mbiemri,$Email,$Username,$Password,$Roli]);

        echo "<script> alert('User has been inserted successfuly!'); </script>";

    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM User";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserById($UserID){
        $conn = $this->connection;

        $sql = "SELECT * FROM User WHERE UserID='$UserID'";

        $statement = $conn->query($sql);
        $users = $statement->fetch();

        return $users;
    }

    function updateUser($UserID,$Emri,$Mbiemri,$Email,$Username,$Password,$Roli){
         $conn = $this->connection;

         $sql = "UPDATE User SET Emri=?, Mbiemri=?, Email=?, Username=?, Password=?,Roli= ? WHERE UserID=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$Emri,$Mbiemri,$Email,$Username,$Password,$Roli,$UserID]);

         echo "<script>alert('update was successful'); </script>";
    } 

    function deleteUser($UserID){
        $conn = $this->connection;

        $sql = "DELETE FROM User WHERE UserID=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$UserID]);

        echo "<script>alert('delete was successful'); </script>";
   } 
}

?>