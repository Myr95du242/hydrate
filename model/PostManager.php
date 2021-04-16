<?php
require_once('Post.php');

class PostManager
{
  private $_bdd; //Instance de la PDO

  public function __construct($bdd)
  {
    $this->setBdd($bdd);
  }

  //Ajouter des articles //Add post
  public function addPosts(Post $article)
  {
    $req='INSERT INTO post(title,date_post,chapo,content,author)VALUES(:title,NOW(),:chapo,:content,:author) ';
    $insertPost= $this->_bdd->prepare($req);
    $insertPost->bindValue(':title', $article->title());
    $insertPost->bindValue(':chapo', $article->chapo());
    $insertPost->bindValue(':content', $article->content());
    $insertPost->bindValue(':author', $article->author());
    $insertPost->execute();
  }

  //Obtenir la clé id
   //public function getIdPost($idPost){
  function checkArticle(){
    $idPost= (int) $id;
    $req = $this->_bdd->query('SELECT * FROM post WHERE id_post= '. $idPost);
    $data =$req->fetch();
    return new Post($data);
  }
  

 //Checking posts
 /*   function checkArticle()
    {
      $bdd=$this->bddConnexion(); 
      $reqArticle='SELECT * FROM post WHERE id_post=?';
      $req=$bdd->prepare($reqArticle);
      return $req;
    }*/

 //Display all Articles
  public function getArticle()
  {
    $req=$this->_bdd->query('SELECT id_post,title, DATE_FORMAT(date_post,\'%d/%m/%Y à %Hh%imin%ss\' ) AS date_post_fr, chapo, content,author FROM post WHERE id_post ORDER BY date_post DESC');
    return $req;
    /* 
  $article=array();
     while ($data=$req->fetch(PDO::FETCH_ASSOC)) 
      {
        $article[]=new Post($data);
      }
      return $article;*/
  }
  public function delete(Post $article)
  {
    $this->_bdd->exec('DELETE FROM post WHERE id_post = '.$article->idPost());
  }

  // Setter de la pdo
  public function setBdd( PDO $bdd)
  {
    $this->_bdd =$bdd;
  }

}

	
?>