<?php
include_once 'C:\xampp\htdocs\pp\Repository\User_repository.php';
include_once 'C:\xampp\htdocs\pp\Models\user.php';
include_once 'C:\xampp\htdocs\pp\Repository\Lagje_repository.php';
include_once 'C:\xampp\htdocs\pp\Models\Lagje.php';






if(isset($_POST['registerBtn'])){
    if(empty($_POST['Emri']) || empty($_POST['Mbiemri']) || empty($_POST['Email']) ||
    empty($_POST['Username']) || empty($_POST['Password']) || empty($_POST['Roli'])){
        echo "Fill all Fields!";
    }else{
        $Emri = $_POST['Emri'];
        $Mbiemri = $_POST['Mbiemri'];
        $Email = $_POST['Email'];
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];
        $Roli = $_POST['Roli'];
        $UserID = $Username.rand(100,999);

        $user  = new User($UserID,$Emri,$Mbiemri,$Email,$Username,$Password,$Roli);
        $userRepository = new User_Repository();

        $userRepository->insert($user);


    }
}
if(isset($_POST['registerBtnn'])){
    if(empty($_POST['Qyteti']) || empty($_POST['Lagjet']) || empty($_POST['Zona']) ||
    empty($_POST['Cmimi_hour']) || empty($_POST['Cmimi_day']) || empty($_POST['Cmimi_denim'])){
        echo "Fill all Fields!";
    }else{
        $Qyteti = $_POST['Qyteti'];
        $Lagjet = $_POST['Lagjet'];
        $Zona = $_POST['Zona'];
        $Cmimi_hour = $_POST['Cmimi_hour'];
        $Cmimi_day = $_POST['Cmimi_day'];
        $Cmimi_denim = $_POST['Cmimi_denim'];
        $LagjetID = $Lagjet.rand(100,999);

        $lagje  = new Lagje($LagjetID,$Qyteti,$Lagjet,$Zona,$Cmimi_hour,$Cmimi_day,$Cmimi_denim);
        $LagjeRepository = new Lagje_Repository();

        $LagjeRepository->insert($lagje);


    }
}



?>