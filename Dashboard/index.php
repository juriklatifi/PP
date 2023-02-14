<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="css/dashboard.css"/>



    </head>
<body>

<?php
session_start();
if(!isset($_SESSION['LoginUser'])){
    header("location:../view/login.php");
}

if(isset($_SESSION['Roli']) && $_SESSION['Roli'] != 'Admin'){
    header("Location:../View/index.php");
} 


?>


<!--Main-->
<div class="container">
    <!--Right Side-->
    <div class="header">
        <a href = "index.php"> <img src ="img/logoo.jpg"></a>
            <h1>Parking Prishtina</h1>
			<a href="user/logout.php">LOGOUT</a>
        </div>

        <div class = "contenti">

        
        <div class = "majtas">
        <form class="leftmenu" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        
            <input class="Users" name="userclick" type="submit" value="Users"/><br>
            <input class="Users" name="lagjeclick" type="submit" value="Lagjet"/><br>
            <input class="Users" name="kontakticlick" type="submit" value="Kontakti"/><br>





            
        </form>


    </div>

            <div class = "djathtas">

            <div class ="upper">

                <div class = "upper1">
               <?php 
            include 'C:\xampp\htdocs\pp\Dashboard\user\insert.php';

            ?> 
         </div>
         
         <div class = "upper2">
               <?php 
            include 'C:\xampp\htdocs\pp\Dashboard\Lagjet\insert.php';

            ?> 
         </div>


</div>

            <div class = "down"> 
            <?php
            if(isset($_POST['userclick'])){
                include 'C:\xampp\htdocs\pp\Dashboard\user\user.php';  
            }    

            if(isset($_POST['lagjeclick'])){
                include 'C:\xampp\htdocs\pp\Dashboard\Lagjet\lagjet.php';  
            } 
            if(isset($_POST['kontakticlick'])){
                include 'C:\xampp\htdocs\pp\Dashboard\Kontakti\kontakti.php';  
            } 
            ?>

            </div>

            </div>



        </div>
        </div>




      
    </div>



</div>

    


</body>

</html>