<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Connexion</title>
	<style type="text/css">
		body{
			background-image: url(sary/bg10.jpg);
			background-size: cover;
			color: #000;
		}
		#ensemble{
			box-shadow:0.2em 0.2em 0.9em #000 ;
			width: 90em;
		}
		#ensemble,#formulaire{
			border-style: solid;
			border-radius: 2em;
			border-color: #fff;
		}
		h1{
			
			font-size: 5em;
		}
		#formulaire{
			background-color: #f0bbd4;
			width: 30em;
			font-size: 2em;
			margin: 5em 0em 8em;
		}
		input{
			font-size: 1em;
			width: 15em;
			height: 2em;
			border-radius: 0.5em;
		}
		button{
			font-size: 0.8em;
			width: 10em;
			height: 2em;
			border-radius: 0.5em;
			margin: 1em 0em;
		}
		
	</style>
</head>
<body>
	<center>
	<div id="ensemble">
		<center><h1>~Find your VALENTINE~</h1></center>
		<center><div id="formulaire">
			<form action="trait.php" method="post">
				<p> <input type="text" name="nom" placeholder="Login"></p>
				<p><input type="password" name="mdp"placeholder="password"></p>
				<button>sign in</button>

			</form>
		</div></center>
	</div>
</center>
</body>
<footer><b> Maya ETU002737 - Haigotiana ETU002575 </b></footer>
</html>