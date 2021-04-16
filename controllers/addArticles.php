<?php
	function chargerClasse($classname)
	{
		require '../model/'.$classname. '.php';
	}
	spl_autoload_register('chargerClasse');

	session_start();

	$db = new PDO('mysql:host=localhost;dbname=blogsql', 'root', '');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.
	$manager = new PostManager($db);

	if (isset($_SESSION['article'])) // Si la session perso existe, on restaure l'objet.$article->title()
		{
		  $article = $_SESSION['article'];
		}

	if(isset($_POST['valider']) && isset($_POST['title']) 
			&& isset($_POST['chapo']) && isset($_POST['content'])
			&& isset($_POST['author']) ) 
		{
			$article = new Post([
									'title' => $_POST['title'],
								 	'chapo' => $_POST['chapo'],
									'content' => $_POST['content'],
									'author' => $_POST['author']
				 				]);
			/*if (!$article->titleValide())
			  {
			    $message = 'Le title choisi est invalide.';
			    unset($article);
			  }
			  elseif ($managerArticle->exists($article->title()))
			  {
			    $message = 'Le title du article est déjà pris.';
			    unset($article);
			  }
			  else
			  {*/
			    $manager->addPosts($article);
			  //}
			    
		}

	

?>


