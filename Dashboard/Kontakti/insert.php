<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>

</head>

<body>


<div class="D2">
				<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method = "post">
				<div class = "Kontakti">
					<div class="NaKontaktoni">
						<p>NA KONTAKTONI</p>
					</div>
					<div class = "tedhenat">
						<input type="text" name = "emri"id= "emri" placeholder="EMRI">
						<input type="text" name = "mbiemri" id="mbiemri" placeholder="MBIEMRI">
					</div>
					<div class="emaili">
						<input type="text" name = "emaili1" id="emaili1" placeholder="EMAILI">
					</div>
					<div class ="subjekti">
						<input type="text" name = "subjekti"class="subjekti" placeholder="SUBJEKTI">
					</div>
					<div class ="kerkesajuaj">
						<input type ="text " name = "kerkesajuaj" class="kerkesajuaj" placeholder="KERKESA JUAJ"> 
					</div>
					<div class="ButoniH">
						<input type="submit" id="dergo" name="dergo" value="DERGO">
					</div>
					
			</div>
		</form>

		</div>
		<?php>
		require_once 'C:\xampp\htdocs\pp\Controller\registerController.php'
			?>

</body>
</html>