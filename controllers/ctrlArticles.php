<?php
session_start(); 
require_once('model/PostManager.php');
require_once('model/Post.php');

/*
function chargerClasse($classname)
	{
		require '../model/'.$classname. '.php';
	}
	spl_autoload_register('chargerClasse');

	session_start(); 

*/
class ctrlArticles
{
	

 //Afficher la page article 
	public function addPostView()
	{
		require('view/backend/articlesView.php');
	}

	//Ajout article par l'admin
	public function addPost()
	{
		$db = new PDO('mysql:host=localhost;dbname=blog_myrna', 'root', '');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);//On émet une alerte à chaque fois qu'1e requête a échoué.
		$manager = new PostManager($db);

		if (isset($_SESSION['article'])) // Si la session article existe, on restaure l'objet.$article->title()
		{
		  $article = $_SESSION['article'];
		}
		if(isset($_POST['valider']) && isset($_POST['title']) 
				&& isset($_POST['chapo']) && isset($_POST['content'])
				&& isset($_POST['author']) ) 
			{
				$article = new Post([
										'title' => htmlspecialchars(trim($_POST['title'])),
									 	'chapo' => htmlspecialchars(trim($_POST['chapo'] ) ),
										'content' => htmlspecialchars(trim( $_POST['content']) ),
										'author' => htmlspecialchars(trim($_POST['author']))
					 				]);
				
				    $manager->addPosts($article);
		}
	}

	//Affiche tous les articles backend
	public function displayArticle()
	{
		/*if (!$_SESSION['password']) 
		{
			header('Location:index.php?action=homeView');
		}*/
		$db = new PDO('mysql:host=localhost;dbname=blog_myrna', 'root', '');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);//On émet une alerte à chaque fois qu'1e requête a échoué.
		
		$displayArticles=new PostManager($db);
		/*
			$article=array();
		     while ($data=$req->fetch(PDO::FETCH_ASSOC)) 
		     {
		        $article[]=new Post($data);
		      }
		*/
		$req_article= $displayArticles->getArticle(); 

		require('view/backend/displayArticles.php');
	}
	/////Supprimer articles
	public function deletePost(){
		$db = new PDO('mysql:host=localhost;dbname=blog_myrna', 'root', '');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);//On émet une alerte à chaque fois qu'1e requête a échoué.		
		$deleteArticle=new PostManager($db);

		if(isset($_GET['id']) AND !empty($_GET['id']))
		{
			/*$idPost=intval($_GET['id']);
			$req_article= $deleteArticle->checkArticle();
			$req_article->execute(array($idPost)); 
			if ($req_article->rowCount()>0) 
			{*/
				$idPost=intval($_GET['id']);
				$article = new Post(['id_post' => $idPost]);
					var_dump($article);
				$deleteArticle->delete($article);
				//$req->execute(array($idPost));
				//header('Location:index.php?action=displayArticle');
		/*	}
			else
			{
				echo 'Id pas enregistré';
			}	*/
		}
		else
		{
			echo "Id introuvable !";
		}
	}
}