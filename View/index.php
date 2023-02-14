<?php
include("header.php");

?>


<main>
		<div class="slideshow">

			<div class="lagjet">
				<a href = "lagjet.php"> LAGJET</a>

		
			</div>

		</div>

		<div class="pg1">
			<div class="pg2">
				<div class="nocash">
					<img src="Img/nocash.png">
					<div class="tesksti1">
						<h2>NO CASH</h2>
					</div>
				</div>
				<div class="clock">
					<img src="Img/clock.png">
					<div class="tesksti1">
					<h2>ORARI</h2>
				</div>
				</div>
				<div class="mengene">
					<img src="Img/nparking.png">
					<div class="tesksti1">
					<h2>MENGENE</h2>
				</div>
				</div>
			</div>
		</div>
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
