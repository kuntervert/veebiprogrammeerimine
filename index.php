<?php
	//echo "Siin on minu esimene PHP!";
	$name = "Künter";
	$surname = "Evert";
	$todayDate = date("d.m.Y");
	$hourNow = date("H");
	;
	if ($hourNow < 8){
		$partOfDay = "varajane hommik ";
	}
	if ($hourNow >= 8 and $hourNow <16){
	$partOfDay = "kooliaeg";
	}
	if ($hourNow >= 16){
		$partOfDay = "vaba aeg";
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
  <p>Loodan, et järgmised programmeerimistunnid on sama huvitavad ning omandan uusi ja kasulikke oskuseid.</p>
  
  <?php
  echo "<p> Tänane kuupäev: " .$todayDate . "</p> \n";
  echo "<p> Lehe avamise hetkel oli kell " .date("H:i:s") .", käes on " .$partOfDay .".</p> \n";
  ?>
  
	<!--<img src= "https://hugelolcdn.com/i/545627.jpg" alt="Kaunis meem">-->
	<img src= "../545627.jpg" alt="Kaunis meem">
	<p> Mu sõber Kert Liinat omab ka ühte väga lahedat <a href="../../~kertlii" target="_blank" >lehekülge </a>. </p>
</body>
</html>