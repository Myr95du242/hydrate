<?php

$bdd= new PDO('mysql:host=localhost;dbname=blogsql;charset=utf8','root','',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

if(isset($_POST['forminscription']) )
	{
		$nom=htmlspecialchars(trim($_POST["nom"]));
    	$pseudo=htmlspecialchars(trim($_POST["pseudo"]));
    	$email=htmlspecialchars($_POST["email"]);
    	$mdp=sha1($_POST["mdp"]);
    	$mdpC=sha1($_POST["mdp"]);
/*	$mdp=password_hash($_POST["mdp"], PASSWORD_DEFAULT);
    	$mdpC=password_hash($_POST["mdpC"], PASSWORD_DEFAULT); */

		if (!empty($_POST['nom']) AND !empty($_POST['pseudo']) AND !empty($_POST['email'])
			 AND !empty($_POST['mdp']) AND !empty($_POST['mdpC'])) 
		{		
      
    		if(filter_var($email,FILTER_VALIDATE_EMAIL) )
    		{
    			$reqmail=$bdd->prepare('SELECT * FROM inscription WHERE email');
    			$datamail=$reqmail->execute(array($email));

    			$emailexist = $datamail->rowCount();

    			if ($emailexist== 0)
    			{
	        		if ($mdp == $mdpC) 
		        	{
		        		$insertmembre='INSERT INTO inscription(nom,pseudo,email,mdp)VALUES(?,?,?,?)';

		        		$req= $bdd->prepare($insertmembre);

		        		$data= $req->execute(array($nom,$pseudo,$email,$mdp) );

		        		$error='Votre compte est bien crée !';
		        		/* SESSION['comptecree']='Votre compte a ete cree
							header('Location: index.php');
		        		'*/      	

		        	}else
		        	{
		        		$error= 'Votre mot de passe est pas indentique !';
		        	}
        		}
        		else{
        			$erreur= "Le mail existe déjà !";
        		}
    		}
    		else
    		{
    			echo "Votre adresse email n'est pas valide !";
    		}
        	
		}
		else
		{
			$error= " Tous les champs doivent etre remplis !";
		}
		
	}