<?php 
session_start();
include('data.php');
include('function.php');
$_SESSION['pseudo']=$_POST['nom'];
$_SESSION['pwd']=$_POST['mdp'];

if ($_POST['nom']==''|| $_POST['mdp']=='') {
	header('Location:index.php');	
}
elseif (correspondance($membres,$_SESSION['pseudo'],$_SESSION['pwd'])==2) {
	header('Location:index.php');	
}
else {
	header('Location:acceuil.php');
}
echo "|";
echo $_SESSION['pseudo'];
echo "|";
echo $_SESSION['pwd'];
echo "|";
//echo correspondance($membres,$_SESSION['nom'],$_SESSION['mdp']!=1);
?>
