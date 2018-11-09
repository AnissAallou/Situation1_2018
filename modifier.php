<?php
session_start(); // si on n'est pas connect�, on ne peut rien modifier
include_once('includes.php'); // permet d'inclure notre base de donn�es

if(!isset($_SESSION['pseudo'])){
	header('Location: accueil.php');
	exit;
}

if(!empty($_POST)){ // si la m�thode POST contient bien des donn�es, 
// on va pouvoir les extraire et ainsi les traiter
	extract($_POST); // Importe les variables dans la table des symboles 
// v�rifie chaque cl� afin de contr�ler si elle a un nom de variable valide. 
// extract() v�rifie �galement les collisions avec des variables existantes 
// dans la table des symboles.
// Il ne faut pas utiliser pas extract() sur des donn�es non s�res comme 
// les entr�es utilisateur comme avec la m�thode "GET".
	$valid = true;

	if($modifier == "form"){
		$Pseudo = htmlspecialchars(trim($Pseudo)); // htmlspecialchars 
												//c'est pour convertir les caract�res sp�ciaux en HTML
		// le trim sert � supprimer les espaces 
		// (ou d'autres caract�res invisibles) en d�but et fin de cha�ne
	
		if(empty($Pseudo)){
			$valid = false;
			$_SESSION['flash']['danger'] = "Veuillez mettre un pseudo !";
			
		}
		
		$req = $DB->query("Select pseudo from user where idpublic = :id", array('id' => $_SESSION['id']));
		$req = $req->fetch();
		
		if($Pseudo == $_SESSION['pseudo']){
			$valid = false;
			$_SESSION['flash']['info'] = "Votre pseudo est le m�me"; // message d'information s'affiche
		
		}
		
		if($valid){ // mise � jour des donn�es (prenom, nom, mail) dans la table user
			
			$DB->insert("UPDATE user SET pseudo = :newpseudo where idpublic = :id ", array('id' => $_SESSION['id'], 'newpseudo' => $Pseudo)); // la donn�e � changer ici est le pseudo 
			
			$_SESSION['pseudo'] = $Pseudo;
			$_SESSION['flash']['success'] = "Votre pseudo a bien �t� modifi� !"; // message de validation s'affiche 
			header('Location: modifier.php');
			exit;
		}
		
	}elseif($modifier == "mdp"){
		
		$Password = trim($Password); // la fonction trim() supprime les espaces en d�but et fin de cha�ne
		$PasswordConfirmation =trim($PasswordConfirmation);
		$NewPassword = trim($NewPassword);
		
		$req = $DB->query("Select * from user where idpublic = :id", array('id' => $_SESSION['id'])); // on v�rifie si le pseudo existe bien dans la base de donn�es 
		$req = $req->fetch();
		
		if(empty($Password)){ // v�rifier si le mot de passe est vide
			$valid = false; // $valid est une variable bool�enne � laquelle on affecte false pour cette condition 
			$_SESSION['flash']['warning'] = "Veuillez mettre votre mot de passe !";
		
		}elseif($Password && empty($PasswordConfirmation)){ // la fonction empty() d�termine si une variable est consid�r�e comme vide
		// une variable est consid�r�e comme vide si elle n'existe pas, ou si sa valeur �quivaut � false 
		// la fonction empty() ne g�n�re pas d'alerte si la variable n'existe pas
			$valid = false;
			$_SESSION['flash']['warning'] = "Veuillez confirmer votre mot de passe";

		}elseif($Password != $PasswordConfirmation){
			$valid = false;
			$_SESSION['flash']['danger'] = "Votre mot de passe ne correspond pas au mot de passe !";

		}else if($req['password'] != (crypt($Password, '$2a$10$1qAz2wSx3eDc4rFv5tGb5t'))){ // crypt -> Hachage � sens unique (ind�chiffrable)  la cl� plus elle est longue �a va
			$valid = false;
			$_SESSION['flash']['danger'] = "Votre mot de passe n'est pas le bon !";
			
		}else if(empty($NewPassword)){ //si le mot de passe est vide
			$valid = false;
			$_SESSION['flash']['warning'] = "Veuillez mettre un nouveau mot de passe !";
	
		}else if($valid){
			
			$DB->insert("UPDATE user SET password = :newpassword where idpublic = :id", array('id' => $_SESSION['id'], 'newpassword' => (crypt($NewPassword, '$2a$10$1qAz2wSx3eDc4rFv5tGb5t'))));
			// la fonction crypt() sert au hachage � sens unique (ind�chiffrable)
			$_SESSION['flash']['success'] = "Votre nouveau mot de passe a �t� enregistr�e !";
			header('Location: modifier.php');
			exit;
			
		}	
	}
}		
?>
<!DOCTYPE html>
<html lang="fr">
	<header>
		
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
		<link href="bootstrap/js/bootstrap.js" rel="stylesheet" type="text/css"/>
		
		<link href="style.css" rel="stylesheet" type="text/css" media="screen"/>
		
		<title>Modifier profil</title>
	</header>
	
	<body>	
		
		<?php 
		    if(isset($_SESSION['flash'])){ 
		        foreach($_SESSION['flash'] as $type => $message): ?>
				<div id="alert" class="alert alert-<?= $type; ?> infoMessage"><a class="close">X</span></a>
					<?= $message; ?>
				</div>	
		    
			<?php
			    endforeach;
			    unset($_SESSION['flash']);
			}
		?> 
			
		
		<div class="container-fluid">
			
	        <div class="row">
		       	
		       	<div class="col-xs-1 col-sm-2 col-md-3"></div>
		       	<div class="col-xs-10 col-sm-8 col-md-6">
			       	
			       <h1 class="index-h1">Modifier votre profil</h1>
			       	
			       <br/>
	                
	                <form method="post" action="modifier.php"> 
					<!-- La m�thode "post" permet le traitement des donn�es sur la m�me page  
					Le formulaire peut ainsi r�cup�rer les donn�es -->
	                    
                        <label>Pseudo</label>
                        
                    	<input class="input" type="text" name="Pseudo" placeholder="Pseudo" 
						value="<?= $_SESSION['pseudo'];  ?>" maxlength="20" required="required">  
						<!-- la donn�e Pseudo conditionne notre session -->
						<br/>
						<br/>
						
	                    <div class="row">
	                        <div class="col-xs-0 col-sm-10 col-md-2"></div>
	                        <div class="col-xs-12 col-sm-2 col-md-8">
		                        <input type="hidden" value="form" name="modifier"/> <!-- value form -->
								<button type="submit">Modifier</button>
	                        </div>
	                        <div class="col-xs-0 col-sm-1 col-md-2"></div>                                
	                   </div>
						
	                </form>
	                
	                <br/>
	                <br/>
	                
	                <form method="post" action="modifier.php">

	                    <label>Mot de passe</label>	                 

                        <input class="input" type="password" 
						name="Password" value="<?php if(isset($Password))
						{ echo $Password; }?>" 
						placeholder="Mot de passe" required="required"/>
					
						<br/>
	
	                    <label>Confirmez votre mot de passe</label>

                        <input class="input" type="password" 
						name="PasswordConfirmation" 
						value="<?php if(isset($PasswordConfirmation))
						{ echo $PasswordConfirmation; }?>" 
					placeholder="Confirmation du mot de passe" required="required"/>
	                    
	                    <br/>
	                    
	                    <label>Nouveau mot de passe</label>
                        <input class="input" type="password" 
						name="NewPassword" placeholder="Nouveau mot de passe" 
						required="required"/>
						
						<br/><br/>
						
	                    <div class="row">
	                        <div class="col-xs-0 col-sm-10 col-md-2"></div>
	                        <div class="col-xs-12 col-sm-2 col-md-8">
		                        <input type="hidden" value="mdp" 
								name="modifier"/>          <!-- value mdp -->
								<button type="submit">Modifier</button>
	                        </div>
	                        <div class="col-xs-0 col-sm-1 col-md-2"></div>                                
	                   </div>
	
	                </form>
			       
					<br/>
					<a href="accueil.php">Retour accueil</a>
<!-- 2 formulaires pour Pseudo et mot de passe avec une value diff�rente pour chacun -->
		       	</div>
	            <div class="col-xs-1 col-sm-2 col-md-3"></div>
	        </div>
        </div>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>