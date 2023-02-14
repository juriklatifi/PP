
<?php
    $server="localhost";
    $user="root";
    $password="";
    $db="parking_prishtina";

    $conn = mysqli_connect($server,$user, $password,$db);

    $role="";

if(isset($_POST['loginbutton'])){

    $Username=$_POST["username"];

    $Password=$_POST["password"];

    $sql="SELECT * FROM user where Username='$Username' AND Password='$Password' ";

    $result= mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){

        while($row=mysqli_fetch_assoc($result)){
            $role=$row["Roli"];

             session_start();

            $_SESSION['Roli']= $role;

           if($row["Roli"]=="Admin"){
                $_SESSION['LoginUser']=$row["Username"];
                header("Location:../dashboard/index.php");
           }
           else{
            $_SESSION['LoginUser']=$row["Username"];
            header("Location:index.php");

           }
        }
    }
    }




?>