<?php

//Connexion à la base bdd

// Récupération de tous les articles    
require('controllers/controller.php');

try 
{
	if (isset($_GET['action'])) 
	{
		switch ($_GET['action'])
		{
			case 'homePage':
				homePage();
				break;

			case 'loginPage':
				loginPage();
			break;	

			case 'loginVisitor':
				if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'] ) )
				{
					loginVisitor();
				}else{
					echo 'essai';
				}				
				break;

			case 'signUp':
				signUp();
			break;	

			case 'getListPost':
				getListPost();
				break;

			case 'getPostComments':
				if (isset($_GET['id_article']) AND $_GET['id_article']>0) 
				{
					getPostComments();
				}
				else{
					//echo 'Erreur: aucun identifiant de cette publication envoyé';
					throw new Exception('Aucun identifiant de cette publication envoyé');					
				}
				break;	
			case 'addComments':
				if (isset($_GET['id_article']) AND $_GET['id_article'] >0) 
				{
					if (!empty($_POST['auteur']) AND !empty($_POST['commentaire'] ) ) 
					{
						addComments($_GET['id_article'],$_POST['auteur'],$_POST['commentaire']);
					}
					else
					{
						//echo 'Erreur: tous les champs ne sont pas remplis !';
						throw new Exception('Tous les champs ne sont pas remplis !');
					}
					
				}
				else{
					//echo 'Erreur: aucun identifiant de publication envoyé';
						throw new Exception('Aucun identifiant de publication envoyé !');					
				}
				break;

			default:
				homePage();
				//getListPost();		
				break;
		}
	}
	else
	{
		homePage();
		//getListPost();
	}
   
} catch (Exception $e) 
{
	echo 'Erreur : '.$e->getMessage();
	/*$errorMessage=$e->getMessage();
	require('view/errorView.php');
	On va travailler la vue pour une meilleure vue
	 */
}

    
?>

