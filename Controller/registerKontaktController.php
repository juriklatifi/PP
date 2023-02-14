<?php
include_once 'C:\xampp\htdocs\pp\Repository\Kontakti_Repository.php';
include_once 'C:\xampp\htdocs\pp\Models\kontakti.php';




if(isset($_POST['dergo'])){
    if(empty($_POST['Emri']) || empty($_POST['Subjekt']) || empty($_POST['Mbiemri']) || empty($_POST['Email']) ||
 empty($_POST['Kerkesa'])){
        echo "Fill all fields!";
    }else{
        $Emri = $_POST['Emri'];
        $Mbiemri = $_POST['Mbiemri'];
        $Email= $_POST['Email'];
        $Subjekt = $_POST['Subjekt'];
        $Kerkesa = $_POST['Kerkesa'];
        $KontaktiID = rand(100,999);

        $kontakti  = new Kontakti($KontaktiID,$Emri,$Mbiemri,$Email,$Subjekt,$Kerkesa);
        $KontaktiRepository = new Kontakti_Repository();

        $KontaktiRepository->insertK($kontakti);


    }
}

?>