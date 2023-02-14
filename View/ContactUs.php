<!DOCTYPE html>
<html>
<head>
	<title>Contact Use</title>
	<link rel="stylesheet" type="text/css" href="Parkingu.css">
</head>
<body>
    <?php
        include("header.php");
    ?>


<main>
			<div class="Harta">
			<div class="D1">
					<h1 class="P1">PAGUAJ SHPEJTE</h1>
					<h1 class = "P2"> DHE
					SIGURT ME NE</h1>
				
				
			</div>
			<div class="D2">
				<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method = "post">
				<div class = "Kontakti">
					<div class="NaKontaktoni">
						<p>NA KONTAKTONI</p>
					</div>
					<div class = "tedhenat">
						<input type="text" name = "Emri"id= "emri" placeholder="EMRI">
						<input type="text" name = "Mbiemri" id="mbiemri" placeholder="MBIEMRI">
					</div>
					<div class="emaili">
						<input type="text" name = "Email" id="emaili1" placeholder="EMAILI">
					</div>
					<div class ="subjekti">
						<input type="text" name = "Subjekt"class="subjekti" placeholder="SUBJEKTI">
					</div>
					<div class ="kerkesajuaj">
						<input type ="text " name = "Kerkesa" class="kerkesajuaj" placeholder="KERKESA JUAJ"> 
					</div>
					<div class="ButoniH">
						<input type="submit" id="dergo" name="dergo" value="DERGO">
					</div>
					
			</div>
		</form>

		</div>
		<?php
		include_once 'C:\xampp\htdocs\pp\Controller\registerKontaktController.php';
		?>
	</div>
	


</main>

<?php
	include("footer.php")
?>


<script type="text/javascript">
	var emriR = /^[A-Z][a-z]{2,15}/;
	//Mbiemri Regex
	var mbiemriR = /^[A-Z][a-z]{2,15}/;
	//E-maili Regex
	var emailiR = /^\w+[._-]?\w+@[A-Za-z]+[-]?[A-Za-z]+\.[A-Za-z]{2,3}/;
	


	var contactButton = document.getElementById("dergo");

	contactButton.addEventListener("click", function (event) {
	//Emri
	var emri = document.getElementById("emri").value;
	//Mbiemri
	var mbiemri = document.getElementById("mbiemri").value;
	//E-maili
	var emaili = document.getElementById("emaili1").value;
	//Subjekti




	//Validimi i Emrit
	if(emri == ""){
				alert("Emri duhet te filloj me shkronje te madhe ");
                event.preventDefault();
            }else{
                if(emriR.test(emri) == true){
                    
                }else{
                 alert("Emri duhet te filloj me shkronje te madhe ");
                  event.preventDefault();
                }
              
            }

   	//Validimi i Mbiemrit
	if(mbiemri == ""){
				alert("Mbiemri duhet te filloj me shkronje te madhe ");
                event.preventDefault();
            }else{
                if(mbiemriR.test(mbiemri) == true){
                    
                }else{
                 alert("Mbiemri duhet te filloj me shkronje te madhe ");
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

	})



</script>


</body>
</html>