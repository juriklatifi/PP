
<?php
$UserID = $_GET['UserID'];

include_once 'C:\xampp\htdocs\pp\Repository\User_repository.php';



$userRepository = new User_repository();

$user = $userRepository->getUserById($UserID);


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
    <h3>Edit User</h3>
    <form action="" method="post">
        <input type="text" name="UserID" placeholder = "UserID" value="<?=$user['UserID']?>" readonly> <br> <br>
        <input type="text" name="Emri" placeholder = "emri" value="<?=$user['Emri']?>"> <br> <br>
        <input type="text" name="Mbiemri"  value="<?=$user['Mbiemri']?>"> <br> <br>
        <input type="text" name="Email"  value="<?=$user['Email']?>"> <br> <br>
        <input type="text" name="Username"  value="<?=$user['Username']?>"> <br> <br>
        <input type="text" name="Password"  value="<?=$user['Password']?>"> <br> <br>
        <input type="text" name="Roli"  value="<?=$user['Roli']?>"> <br> <br>


        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $UserID = $user['UserID'];
    $Emri = $_POST['Emri'];
    $Mbiemri = $_POST['Mbiemri'];
    $Email = $_POST['Email'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Roli = $_POST['Roli'];

    $userRepository->updateUser($UserID,$Emri,$Mbiemri,$Email,$Username,$Password,$Roli);
}


?>