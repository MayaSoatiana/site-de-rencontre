<?php
include('data.php');
include('function.php');
session_start();
$fav=$_GET['num0'];
if (!isset($_SESSION['favoris'])) {
	$_SESSION['favoris']=array();
}
elseif (efa_misy($fav,$_SESSION['favoris'])==1) {
	header('Location:acceuil.php');
}

	$favori=$_SESSION['favoris'];
	$favori[]=$fav;
	$_SESSION['favoris']=$favori;

 var_dump($_SESSION['favoris']);
//$_SESSION['nombre']=count($favori);
header('Location:acceuil.php');

?>