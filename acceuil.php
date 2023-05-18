<?php
session_start();
include("data.php");
include("function.php");
$user=getindice($_SESSION['pseudo'],$membres);
$melangé=showrandom($membres,$user);
if ($membres[$user]['interesse_par']==2) {
    $toshow=$melangé;
}
else{
    $toshow=interet($melangé,$interesse,$membres[$user]['interesse_par']);
}

//var_dump($melangé);
//var_dump($toshow);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
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
            box-shadow:0.2em 0.2em 0.9em #000 ;
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
            height: 25em;
            background-color: #f1dff2;
            border-radius: 0.7em;
            box-shadow: 0.1em 0.1em 0.5em #000;
        }
        #profile:hover{
            height: 26em;
            width: 17em;
            background-color: #de76d2;
        }
        .pdp{
            padding: 0.4em 0em 0.2em;
            width: 13em;
            height: 17em;
        }
        a img{
            width: 2.5em;
            height: 2.5em;
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
                    <li><a href="coup_de_coeur.php">See likes</a></li>
                    <li><a href="recherche.php">Search page</a></li>
                    <li><a href="deconnexion.php">Sign off</a></li></div>
                </ul>
                </details>
                
        </div>
    

        <div id="content">
            <?php for ($i=0; $i < 10; $i++) { 
                $ind=getindice($toshow[$i]['pseudo'],$membres);
                $age=taona($toshow[$i]['annee_de_naissance']);?>
                <div id="profile"> 
                    <img class="pdp"src="sary/personne/<?php echo $toshow[$i]['img_profil']?>.jpg">
                    <p><b>Noun:</b><?php echo $toshow[$i]['pseudo']?>   <br>  <b>Age:</b><?php  echo $age;?> years old</p>
                    <a href="traitignore.php?num1=<?php echo $ind ?>"><img src="sary/like/ignore.png"></a>
                    <a href="traitlike.php?num0=<?php echo $ind ?>"><img src="sary/like/like.png"></a>
                    
                </div>
            <?php }

            ?>
        </div>
    </div>
    </center>

</body>
<footer><b> Maya ETU002737 - Haigotiana ETU002575 </b></footer>
</html>