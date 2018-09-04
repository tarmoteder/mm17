<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="css/style.css">
	<title> MM-17 </title>
</head>

<body>

<h1>See on MM-17 veebileht</h1>

<?php
    
$name = "Tarmo Teder"; // string
$nr = 12;  // täisarv
$nrf = 13.213; //naturaalarv
$nr2 = "12";
$asd = false; // tõeväärtus
$mass = array (1,$name,"Tere",false, 1.12); // massiiv

echo "<p>Tere!. $name Mina olen index.php</p>";
echo '<p>Tere!. $name Mina olen index.php</p><br>';    
echo  $mass[1];
?>
</body>

</html>
