<?php
include_once 'C:\xampp\htdocs\pp\Repository\User_repository.php';
include_once 'C:\xampp\htdocs\pp\Models\user.php';






if(isset($_POST['registerBtn'])){
    if(empty($_POST['Emri']) || empty($_POST['Mbiemri']) || empty($_POST['Email']) ||
    empty($_POST['Username']) || empty($_POST['Password'])){
        echo "Fill all fields!";
    }else{
        $Emri = $_POST['Emri'];
        $Mbiemri = $_POST['Mbiemri'];
        $Email = $_POST['Email'];
        $Username = $_POST['Username'];
        $password = $_POST['Password'];
        $Roli = $_GET['Roli'];
        $UserID = $Username.rand(100,999);

        $user  = new User($UserID,$Emri,$Mbiemri,$Email,$Username,$password,$Roli);
        $userRepository = new User_Repository();

        $userRepository->registerForm($user);


    }
}




?>