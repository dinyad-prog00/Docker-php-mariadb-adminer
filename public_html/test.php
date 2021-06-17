<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Devoir 1</h1>
	<h4>Test de connectivité</h4>
	<?php 
	$host = 'mariadb';
	$user = 'dinyad';
	$pass = 'yeto11';
	$db = "test_db";
	$conn = mysqli_connect($host, $user, $pass, $db);

	if ($conn) {
		echo "Connectée avec succès a test_db";
	   
	} 

	else{
		echo "Echec de connexion";
	}
	
	?>

</body>
</html>