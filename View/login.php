<?php
include 'C:\xampp\htdocs\pp\Database\databaseConnection.php';

    session_start();
	
if(isset($_SESSION['LoginUser'])){
    header("location:index.php");
}
else{
  
?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN - FLASH NEWS</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	
	<div class="container">
			<div class="box">
				
			<form action="loginv.php" method="POST">
			<p class="username1">Username</p>
			<input id="usernameinput" type="text" name="username">

			<br>

			<p class="password1">Password</p>
			<input id="passi" type="text" name="password">

			<br>

			<input type="submit" name="loginbutton"  value="LOGIN" id="loginButton">
			</form>

			<div class="register"><a href="register.php"><p>REGISTER HERE</p></a><br>

		</div>
			<div class="GoBack">
				<a href="index.php"><p>GO BACK</p></a>
			</div>

			
		</div>

	
	</div>





	<script type="text/javascript">

		var loginButton = document.getElementById("loginButton");

		var usernameR =  /^[a-zA-Z0-9]+([._]?[a-zA-Z0-9]+)*$/;

		var passwordR = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;
		

		loginButton.addEventListener("click", function(event){
			var password = document.getElementById("passi").value;
			var username = document.getElementById("usernameinput").value;

			//KUSHTI PER USERNAME
			if (username=="") {
				event.preventDefault();
				alert("Username nuk eshte valid");
			}
			else{
				if (usernameR.test(username)==true) {
					
				}
				else{
					event.preventDefault();
					alert("Username nuk eshte valid");
				}
				
			}

			//KUSHTI PER PASSWORD
			if (password=="") {
				event.preventDefault();
				alert("Passwordi nuk eshte valid");
			}
			else{
				if (passwordR.test(password)==true) {
					
				}
				else{
					event.preventDefault();
					alert("Passwordi nuk eshte valid");
				}
				
			}


		})


			



	</script>


</body>
</html>

<?php
}
?>