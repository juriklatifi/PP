<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>REGISTER - FLASH NEWS</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link rel="stylesheet" type="text/css" href="Parkingu.css">
    <script src="https://kit.fontawesome.com/82f797382f.js" crossorigin="anonymous"></script>

</head>
<body>
<?php 
	include('header.php');
	?>


        <script>
/*
const navToggle = document.querySelector(".navbar_toggle");
const links = document.querySelector(".main_nav");

navToggle.addEventListener('click', function(){
links.classList.toggle("show_nav");
})*/

</script>




	<div class="container">
			<div class="register">
				<div class="Titulli">
					<h2>REGISTER</h2>
				</div>
				<form action=""<?php echo $_SERVER['PHP_SELF'] ?> method = "post">
				<div class="Forma">
				
				
					<div class="emridhembiemri">
					<input id="emri" name="Emri" type="text" placeholder="Emri">
					<input id="mbiemri" name="Mbiemri" type="text" placeholder="Mbiemri">
				</div>
				<input type="text" name="Email" id="emaili" placeholder="E-maili">
				<br>
				<input id="username" name="Username" type="text" placeholder="Username">
				<input  id="passwordi" name="Password" type="password" placeholder="Passwordi">
				<br>
				<input type="submit" name ="registerBtn" value="REGISTER" id="register" >
			</form>
			<?php
				include 'C:\xampp\htdocs\pp\Controller\registerFormController.php';
				?>

			

				<div class="Login">
					<a href="login.php"><p>Login</p></p></a>
				</div>
				
					
				</div>

				
			</div>
		
	</div>

	<script type="text/javascript">
	//Emri Regex
	var emriR = /^[A-Z][a-z]{2,5}/;
	//Mbiemri Regex
	var mbiemriR = /^[A-Z][a-z]{2,5}/;
	//E-mail Regex
	var emailiR = /^\w+[._-]?\w+@[A-Za-z]+[-]?[A-Za-z]+\.[A-Za-z]{2,3}/;
	//Username Regex
	var usernameR =  /^[a-zA-Z0-9]+([._]?[a-zA-Z0-9]+)*$/;
	//Password Regex
	var passwordR = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;



	var registerButton = document.getElementById("register");

	registerButton.addEventListener("click", function (event) {
	//Emri
	var emri = document.getElementById("emri").value;
	//Mbiemri
	var mbiemri = document.getElementById("mbiemri").value;
	//E-maili
	var emaili = document.getElementById("emaili").value;
	//Username
	var username = document.getElementById("username").value;
	//Password
	var password = document.getElementById("passwordi").value;


	//Validimi i Emrit
	if(emri == ""){
				alert("Emri nuk eshte valid");
                event.preventDefault();
            }else{
                if(emriR.test(emri) == true){
                    
                }else{
                 alert("Emri nuk eshte valid");
                  event.preventDefault();
                }
              
            }

   	//Validimi i Mbiemrit
	if(mbiemri == ""){
				alert("Mbiemri nuk eshte valid");
                event.preventDefault();
            }else{
                if(mbiemriR.test(mbiemri) == true){
                    
                }else{
                 alert("Mbiemri nuk eshte valid");
                  event.preventDefault();
                }
              
            }
    //Validimi i E-mailit
	if(emaili == ""){
				alert("E-maili nuk eshte valid");
                event.preventDefault();
            }else{
                if(emailiR.test(emaili) == true){
                    
                }else{
                 alert("E-maili nuk eshte valid");
                  event.preventDefault();
                }
              
            }
    //Validimi i Username
	if(username == ""){
				alert("Username nuk eshte valid");
                event.preventDefault();
            }else{
                if(usernameR.test(username) == true){
                    
                }else{
                 alert("Username nuk eshte valid");
                  event.preventDefault();
                }
              
            }
    //Validimi i Password
	if(password == ""){
				alert("Passwordi nuk eshte valid");
                event.preventDefault();
            }else{
                if(passwordR.test(password) == true){
                    
                }else{
                 alert("Passwordi nuk eshte valid");
                  event.preventDefault();
                }
              
            }



	})


	




	</script>



</body>
</html>

