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
        <input class="inputi" type="text" name="Qyteti" placeholder="qyteti..."> <br><br>
        <input class="inputi" type="text" name="Lagjet" placeholder="lagjet..."> <br><br>
        <input class="inputi" type="text" name="Zona" placeholder="zona..."> <br><br>
        <input class="inputi" type="text" name="Cmimi_hour" placeholder="cmimi_hour..."><br><br>
        <input class="inputi" type="text" name="Cmimi_day" placeholder="cmimi_day..."><br><br>
        <input class="inputi" type="text" name="Cmimi_denim" placeholder="cmimi_denim..."><br><br>

        <input type="submit" name="registerBtnn" value="CREATE LAGJE"><br><br>
    </form>
</div>

   <?php include_once 'C:\xampp\htdocs\pp\Controller\registerController.php';?>
</body>
</html>