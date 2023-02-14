
<?php
$LagjetID = $_GET['LagjetID'];

include_once 'C:\xampp\htdocs\pp\Repository\Lagje_repository.php';



$lagjetRepository = new Lagje_repository();

$lagje = $lagjetRepository->getLagjetById($LagjetID);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h3>Edit Lagje</h3>
    <form action="" method="post">
        <input type="text" name="LagjetID"  value="<?=$lagje['LagjetID']?>" readonly> <br> <br>
        <input type="text" name="Qyteti"  value="<?=$lagje['Qyteti']?>"> <br> <br>
        <input type="text" name="Lagjet"  value="<?=$lagje['Lagjet']?>"> <br> <br>
        <input type="text" name="Zona"  value="<?=$lagje['Zona']?>"> <br> <br>
        <input type="text" name="Cmimi_hour"  value="<?=$lagje['Cmimi_hour']?>"> <br> <br>
        <input type="text" name="Cmimi_day"  value="<?=$lagje['Cmimi_day']?>"> <br> <br>
        <input type="text" name="Cmimi_denim"  value="<?=$lagje['Cmimi_denim']?>"> <br> <br>


        <input type="submit" name="editBtnn" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editBtnn'])){
    $LagjetID = $lagje['LagjetID'];
    $Qyteti = $_POST['Qyteti'];
    $Lagjet = $_POST['Lagjet'];
    $Zona = $_POST['Zona'];
    $Cmimi_hour = $_POST['Cmimi_hour'];
    $Cmimi_day = $_POST['Cmimi_day'];
    $Cmimi_denim = $_POST['Cmimi_denim'];

    $lagjetRepository->updateLagjet($LagjetID,$Qyteti,$Lagjet,$Zona,$Cmimi_hour,$Cmimi_day,$Cmimi_denim);
}


?>