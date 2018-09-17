<?php
	//echo "Siin on minu esimene PHP!";
	$name = "Tundmatu";
	$surname = "Inimene";

	//var_dump($_POST);
	if (isset($_POST["firstName"])){
		$name = $_POST["firstName"];
	}
	if (isset($_POST["surName"])){
		$surname = $_POST["surName"];
	}
	
	

?>

<!DOCTYPE html>
<html>
<head>
<style>



h1 {
    color: white;
    text-shadow: 2px 2px 4px #000000;
}
</style>
  <meta charset="utf-8">
  <title> 
  <?php
  echo $name;
  echo " ";
  echo $surname;
  ?>
  , veebiprogrammeerimine</title>
</head>
<body>
  <h1>
  <?php
	echo $name ." " .$surname;
	?>
  </h1>
 
  <p>Siin on minu õppetöö käigus valmistatud <a href="http://hugelol.com/" target="_blank" > veebileht</a>, millel puudub sisu ja tähtsus.</p>
 
	<hr>
	
<form method="POST">	
	<label>Eesnimi:</label>
	<input name="firstName" type="text" value="">
	<label>Perekonnanimi:</label>
	<input name="surName" type="text" value="">
	<label>Sünniaasta</label>
	<input name="birthYear" type="number" min="1914" max="2003" value="1998">
	<br>
	<input name="submitUserData" type="submit" value="Saada andmed"> 
	</form>
	
	<?php
		if (isset($_POST["submitUserData"])){
			echo "<br><p>Olete elanud järgnevatel aastatel:</p>";
			echo "<ul> \n";
			for ($i = $_POST["birthYear"]; $i <= date("Y"); $i ++){
			echo "<li>" . $i ."</li> \n";
			}
			
			echo "</ul> \n";
		}

?>
</body>
</html>