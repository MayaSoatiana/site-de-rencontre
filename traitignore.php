<?php
session_start();
$suppfav=$_GET['num1'];
$favori=$_SESSION['favoris'];
$nvfav=array();
for ($i=0; $i <count($favori) ; $i++) { 
	if ($favori[$i]!=$suppfav) {
		$nvfav[]=$favori[$i];
	}
}

$_SESSION['nombre']=count($nvfav);

$_SESSION['favoris']=$nvfav;
var_dump($_SESSION['favoris']);
header('Location:acceuil.php')
?>
