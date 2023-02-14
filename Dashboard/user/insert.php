<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <style>
    /*Insert User*/
.Insert form{ 
  display: flex;
  flex-direction: row;
  width: 80%;
  height: 40px;
  justify-content: space-between;
  align-items: center;

}
.InsertKorniz input{
  width: 100px;
  height: 40px;
}
</style>

</head>
<body>

<div class = "Insert">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input class="inputi" type="text" name="Emri" placeholder="emri..."> <br><br>
        <input class="inputi" type="text" name="Mbiemri" placeholder="mbiemri..."> <br><br>
        <input class="inputi" type="text" name="Email" placeholder="email..."> <br><br>
        <input class="inputi" type="text" name="Username" placeholder="username..."><br><br>
        <input class="inputi" type="text" name="Password" placeholder="password..."><br><br>
        <input class="inputi" type="text" name="Roli" placeholder="roli..."><br><br>

        <input type="submit" name="registerBtn" value="CREATE USER"><br><br>
    </form>
</div>

   <?php include_once 'C:\xampp\htdocs\pp\Controller\registerFormController.php';?>
</body>
</html>