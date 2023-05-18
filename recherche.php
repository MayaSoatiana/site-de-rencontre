<?php 
session_start(); 
include('data.php');
include('function.php');
$user=getindice($_SESSION['pseudo'],$membres);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
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
            width: 60%;
            font-size: 3em;
            font-family: impact,Haettenschweiller,arial ,sans-serif;
            text-align: left;
        }
    	input {
            border-radius: 0.3em;
    	
    		margin-bottom: 0.8em;
    		width:5em;
    		height: 1em;
    		font-size: 0.8em;
    	}
        select{
            width:7em;
            border-radius: 0.3em;
           font-size: 0.6em;
        }
    	button{
    		border-radius: 0.5em;
    		font-size: 0.6em;
    		width: 10em;
    		height: 2.5em;

    	}
    	button:hover{
    		width: 12em;
    		height: 2.6em;
    		background-color: #de76d2;
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
                 </ul>
                </details>
             </div>   
        </div> 
        <div id="description">
        	<h1>Let's find out who is your soulmate</h1>
        </div>

        <center>
        <div id="content">
        	
		    <form action="ens_recherche.php" method="get">
			    <p><b>Age between:</b><input type="number" name="Age1"> and <input type="number" name="Age2"></p>
			    <p><b>Genre:</b><select name="Genre">

					<option value="homme">homme</option>
					<option value="femme">femme</option>
				</select></p>
			    <p><b>Zodiac Sign:</b> <select name="Signe">
		<?php for($i=0;$i<count($signe);$i++){ ?>
		<option value="<?php echo $signe[$i]; ?>"><?php echo $signe[$i]; ?></option>
		<?php } ?>
	</select></p>
			    <center><button>search</button></center>
			</form>
		</div>
		</center>
	
	</div>
</div>
</center>
</body>
<footer><b> Maya ETU002737 - Haigotiana ETU002575 </b></footer>
</html>