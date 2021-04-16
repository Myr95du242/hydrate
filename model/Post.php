<?php

class Post{
	private $id_post;
	private $title;
	private $chapo;
	private $content;
	private $author;

	public function __construct(array $donnees)
	{
		$this->hydrate($donnees);
	}

	public function hydrate(array $donnees){
		foreach ($donnees as $key => $value) 
		{
			$method ='set'.ucfirst($key);
			if (method_exists($this, $method)) 
			{
				$this->$method($value);
			}
		}
	}

	public function titleValide()
	{
	    return !empty($this->title);
	}

//Setter
public function setIdPost($id)
{
	//Avoir qu'un nombre entier en id
	$this->id_post=(int) $id;
	if ($id>0)
	{
	  $this->id_post=$id;
	}
}
public function setTitle($title)
{
	if(is_string($title) AND strlen($title) <=50)
	{
		$this->title=$title;
	}
}
public function setChapo($chapo){
	if(is_string($chapo) )
	{
	 $this->chapo=$chapo;
	}
}
public function setContent($content){
	if(is_string($content) )
	{
	  $this->content=$content;
	}
	
}
public function setAuthor($author){

	if(is_string($author) AND strlen($author) <=30)
	{
	 $this->author=$author;
	}
	
}

//Getter Obtenir nos attributs
	public function idPost(){ return $this->id_post;}
	public function title(){ return $this->title;}
	public function chapo(){ return $this->chapo;}
	public function content(){ return $this->content;}
	public function author(){  return $this->author; }

}