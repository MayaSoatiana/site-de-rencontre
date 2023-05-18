<?php
 session_start();
include('function.php'); 
include ('data.php');
$tab=$_GET['select']; 
$user=getindice($_SESSION['pseudo'],$membres);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>fiche perso</title>
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
            grid-template-columns: repeat(2,48%);
            grid-gap: 22px;
            justify-content: center;
            font-size: 1.1em;
            font-family: impact,Haettenschweiller,arial ,sans-serif;;
        }
        .pic{
            height: 35em;
            border-radius: 0.7em;
            box-shadow: 0.1em 0.1em 0.5em #000;
        }
        .pic:hover{
            height: 36em;
            width: 34em;
            background-color: #de76d2;
        }
        .pic img{
            padding: 0.4em 0em 0.2em;
            width: 30em;
            height: 30em;
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
                    <li><a href="deconnexion.php">Sign off</a></li>
                    <li><a href="acceuil.php">Back</a></li>
                </details>
            </div>    
        </div> 
        <div id="description">
            <h1> ° Your Potential Soulmate °</h1>
            <p><b>Name:</b>  <?php echo $membres[$tab]['pseudo'];?><br>
            <b>Age:</b>  <?php $age=taona($membres[$tab]['annee_de_naissance']);echo $age?><br>
            <b>EMail:</b>  <?php echo $membres[$tab]['email'];?><br>
            <b>Genre:</b>  <?php echo $membres[$tab]['genre'];?><br>
            <b>Zodiac Sign:</b>  <?php echo $membres[$tab]['signe_astrologique'];?></p>
        </div>

        <div id="content">
           <div class="pic"  ><img src="sary/personne/<?php echo $membres[$tab]['img_profil']?>.jpg"> <p><b> <?php echo $membres[$tab]['pseudo'];?></b></p>
          </div>
           <div class="pic" ><img src="sary/telephone/<?php echo $membres[$tab]['img_telephone']?>.webp"> <p><b> <?php echo $membres[$tab]['pseudo'];?>'s phone</b></p></div>
           <div class="pic"><img  src="sary/animal/<?php echo $membres[$tab]['img_animal']?>.webp"> <p> <b><?php echo $membres[$tab]['pseudo'];?>'s pet</b></p> </div> 
           <div class="pic"><img  src="sary/maison/<?php echo $membres[$tab]['img_maison']?>.webp"> <p> <b><?php echo $membres[$tab]['pseudo'];?>'s house</b></p></div> 
           
       </div> 
    </div>
    </center>
    <a href="vider.php"><button>Retour</button></a>

</body>
<footer><b> Maya ETU002737 - Haigotiana ETU002575 </b></footer>
</html>
