<!DOCTYPE html>
<html>
<head>
	<title>Parking Prishtina</title>
	<link rel="stylesheet" type="text/css" href="Parkingu.css">
	<script src="https://kit.fontawesome.com/82f797382f.js" crossorigin="anonymous"></script>
</head>
<body>
	<header>
	<div class="logo">
		<a href="index.php"><img src="Img/logoo.jpg"></a>
	</div>


	<button class="navbar_toggle">
        <i class="fas fa-bars"></i>
      </button>
		

	<ul class="main_nav">

			<li><a href="Harta.php">Harta</li></a>
			<li><a href="ContactUs.php">Contact Us</a></li>
			<li><a href="login.php">Account</a></li>

		</ul>

		<script>

		const navToggle = document.querySelector(".navbar_toggle");
		const links = document.querySelector(".main_nav");

		navToggle.addEventListener('click', function(){
    	links.classList.toggle("show_nav");
})

		</script>
</header>

</body>
</html>
