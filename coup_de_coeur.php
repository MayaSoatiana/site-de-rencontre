<?php 
session_start();
include('data.php');
include('function.php');
$fav=$_SESSION['favoris'];
$user=getindice($_SESSION['pseudo'],$membres);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>coup de coeur</title>*
	<style type="text/css">
		 body{
            background-image: url(sary/bg10.jpg);
            background-size: cover;
            
        }
        #ensemble{
            padding: 1em;
            width: 90em;
            border-style: solid;
            border-color: #fff;
            border-radius: 2em;
        }
        #header{
            display: flex;
            font-family: impact,Haettenschweiller,arial ,sans-serif;
        }
        a{
            text-decoration: none;
            color: black;
        }
        #header{
            width: 90em;
            height: auto;
            display: flex;
            
            background-color: #f0bbd4;
            border-radius: 2em;
            margin: 0em 0em 1em;
        }
        #content{
            height: auto;
            width: 73em;
            float: top;
            display: grid;
            grid-template-columns: repeat(5,22%);
            grid-gap: 22px;
            justify-content: center;
        }
        #profile{
            height: 26em;
            background-color:  #f1dff2;
            border-radius: 0.7em;
            box-shadow: 0.1em 0.1em 0.5em #000;
        }
        #profile:hover{
            height: 27em;
            width: 17em;
            background-color: #de76d2;
        }
        .pdp{
            padding: 0.4em 0em 0.2em;
            width: 13em;
            height: 17em;
        }
        .sary img{
            padding: 0.5em 0em 0.5em;
            width: 9em;
            height: 9em;
            border-radius: 5em;
        }
        .nom{
            padding: 1.3em 0em 0.8em;
            margin-left: 3%;
            font-size: 2em;
        }
        .nomsite{
            margin-left: 12%;
            padding: 1em;
            font-size: 3em;
        }
        .menu{
            margin-left: 8%; 
            justify-content: left;
            font-size: 1.5em;
        }
        .menu a:hover{
            font-size: 1.6em;
        }
          summary a{
            text-align: left;
        }
        ul{
            list-style: none;
            text-align: left;
        }
        button{
            border-radius: 0.2em;
            font-size: 1.2em;
        }
	</style>
</head>
<body>
	<center>
	<div id="ensemble">
		<div id="header">
            <div class="sary"><img src="sary/personne/<?php echo $membres[$user]['img_profil'] ?>.jpg"></div>
            <div class="nom"><p><b><?php echo $membres[$user]['pseudo'] ?></b></p></div>
            <div class="nomsite">~Find your VALENTINE~</div>
            <div class="menu">
                <details>
                    <summary>MENU</summary>
                    <ul>
                    <li><a href="recherche.php">Search page</a></li>
                    <li><a href="deconnexion.php">Sign off</a></li>
                    <li><a href="acceuil.php">Back</a></li>
                </ul>
                </details>
            </div> 
        </div>
		<div id="content">
			<?php for ($i=0; $i < count($fav); $i++) { 
				 $age=taona($membres[$fav[$i]]['annee_de_naissance']);?>
				<div id="profile">
					 <img class="pdp" src="sary/personne/<?php echo $membres[$fav[$i]]['img_profil']?>.jpg">
                    <p><b>Noun:</b><?php echo $membres[$fav[$i]]['pseudo'];?> <br>
                   <b>Age:</b><?php echo $age;?> <br>
                  <b>Taux de Compatibilité:</b><?php echo taux_de_compatibilité($membres,$user,$fav[$i]) ?>%</p>
                   <button><a href="Raffichage.php?select=<?php echo $fav[$i] ?>"> see full profile </a></button>
				</div>
			<?php }
			?>
		</div>
	</div>
</div>
</center>

</body>
<footer><b> Maya ETU002737 - Haigotiana ETU002575 </b></footer>
</html>