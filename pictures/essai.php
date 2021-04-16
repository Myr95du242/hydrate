<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
</head>
<body>
<?php
require('connexion.php');

	/*$bdd= new PDO('mysql:host=localhost;dbname=blogsql;charset=utf8','root','',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION)); */
	
?>
	<form method="post" action="">
        <div align="center"> 
        	<h3> INSCRIPTION</h3>           
        	<div class="form-group col-xs-12 floating-label-form-group controls">
                <label align="rigth" for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" placeholder="nom" id="nom" 
					value="<?php if(isset($nom) AND !empty($nom) ){ echo $nom;} ?>" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
            </div>
            <div class="form-group col-xs-12 floating-label-form-group controls">
                <label for="pseudo">Pseudo</label>
                <input type="text" class="form-control" name="pseudo" placeholder="pseudo" id="pseudo"
                value="<?php if(isset($pseudo) AND !empty($pseudo) ){ echo $pseudo;} ?>"
                data-validation-required-message="Please enter your pseudo.">
                <p class="help-block text-danger"></p>
            </div> 
           	<div class="form-group col-xs-12 floating-label-form-group controls">
                <label for="email">Mail</label>
                <input type="email" class="form-control" name="email" placeholder="email" id="email"
                value="<?php if(isset($email) AND !empty($email) ){ echo $email;} ?>"  data-validation-required-message="Please enter your email.">
                <p class="help-block text-danger"></p>
            </div>           
            <div class="form-group col-xs-12 floating-label-form-group controls">
                <label for="mdp">Mot de passe</label>
                <input type="password" class="form-control" name="mdp" placeholder="mdp" id="mdp"  data-validation-required-message="Please enter your password.">
                <p class="help-block text-danger"></p>
            </div>
            <div class="form-group col-xs-12 floating-label-form-group controls">
                <label for="mdpC">Confirmez votre mot de passe</label>
                <input type="password" class="form-control" name="mdpC" placeholder="mdpC" id="mdpC"  data-validation-required-message="Please enter your password.">
                <p class="help-block text-danger"></p>
        	</div>
            <br>
            <div id="success"></div>            
            <div class="form-group col-xs-12">
                <input type="submit" class="btn btn-success btn-lg" name="forminscription" value="Je m'inscris"/ >
            </div>		
    	</div>
    	<?php
    		if(isset($error))
    		{
    			echo '<font color="red">'.$error.'</font>';
    			//echo $error;
    		}
     	?>
    </form>
    
</body>
</html>

