<?php
	//echo "Siin on minu esimene PHP!";
	$name = "Künter";
	$surname = "Evert";
	$dirToRead = "../pics/";
	$allFiles = array_slice(scandir($dirToRead), 2);
	var_dump($allFiles);

	
	

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
	for ($i = 0; $i < count($allFiles); $i ++){
		echo '<img src="' .$dirToRead .$allFiles[$i] .'" alt="pilt"><br>';
	}
		?>
		
	<p> Mu sõber Kert Liinat omab ka ühte väga lahedat <a href="../../~kertlii" target="_blank" >lehekülge </a>. </p>
</body>
</html>