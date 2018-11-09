<!DOCTYPE html>
<html>
    <header>
			<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mini-chat</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
		<link href="bootstrap/js/bootstrap.js" rel="stylesheet" type="text/css"/>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen"/>

    </header>
    <style>
    form
    {
        text-align:center;
    }
	header,body {
	background-color: rgb(224,224,224);
	}
	
.center h1 {
	text-align: center;
	color: cyan;
	 border: 3px blue groove;
	 width: 200px;
	 background:red;


}

.btn_red:hover {
	background-color: white;
	color: red;
    transition-duration: 1s;
}

.btn_green {
	background-color: red;
	color: yellow;
	border: 2px solid blue;
}

.btn_green:hover {
	background-color: yellow;
	color: red;
    transition-duration: 1s;
}

    </style>
    <body>
    		<div class="center">
				<button class="btn_green" onclick="self.location.href='deconnexion.php'" <!--style="margin-left: 1800px; margin-top:20px;"-->Déconnexion</button>
		</div>
		</br>
		</br>
		<div class="center">
				<button class="btn_green" onclick="self.location.href='accueil.php'" <!--style="margin-left: 1800px;"-->Retour</button>
		</div>
    <form action="minichat_post.php" method="post">
        <p>
        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" value="Aniss" /><br />
        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />

        <input type="submit" value="Envoyer" />
	</p>
    </form>

<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=exo;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 10');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor(); // ferme le curseur, permettant à la requête d'être de nouveau exécutée

?>
    </body>
</html>