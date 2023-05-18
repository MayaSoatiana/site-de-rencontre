<?php 
session_start();
include ('data.php'); 
include ('function.php');
$user=getindice($_SESSION['pseudo'],$membres);
$isa=0;
for ($i=0; $i < count($membres); $i++) { 
    $age=taona($membres[$i]['annee_de_naissance']);
    $age1=$_GET['Age1'];
    $age2=$_GET['Age2'];
    $Age=age_R($age1,$age2,$age);
    if ((strcmp($membres[$i]['genre'],$_GET['Genre'])==0) &&  ($Age==1) && (strcmp($membres[$i]['signe_astrologique'],$_GET['Signe'])==0)) { 
        $isa++;
        Aff($membres[$i]);
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            width: auto;
            font-size: 3em;
            font-family: impact,Haettenschweiller,arial ,sans-serif;
            text-align: left;
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
        #description{
            font-size: 1.3em;
        }
        summary a{
            text-align: left;
        }
        ul{
            list-style: none;
            text-align: left;
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
                    <li><a href="acceuil.php">Home</a></li>
                    <li><a href="deconnexion.php">Sign off</a></li>
                   </ul>
                </details>
                  </div>
                
        </div> 
        <div id="description">
            <h1>Let's find out who is your soulmate</h1>
        </div>
        
        <div id="content">
          <center> <p>There are  <?php echo $isa ;?> person that matches your description</p> </center>
        </div>
    </div>
</div>
</cente>
</body>
<footer><b> Maya ETU002737 - Haigotiana ETU002575 </b></footer>
</html>
