<?php $title='signUp'; ?>
<?php ob_start(); ?> 
<!-- Connexion Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Inscription</h2>
                <hr class="star-primary">
            </div>
        </div>
     <!--   <form method="post" action="index.php?action=verificationInscription"> -->
         <form method="post" action="index.php?action=checkingRegister">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                <!--    <form name="sentMessage" id="contactForm" novalidate> -->
                    <div class="row control-group">
                    	<div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="pseudo">Pseudo</label>
                            <input type="text" class="form-control" name="pseudo" placeholder="pseudo" id="pseudo" 
                            value="<?php if(isset($_POST['pseudo']) AND !empty($_POST['pseudo'])){ echo $_POST['pseudo'] ;} ?>" 
                             data-validation-required-message="Please enter your pseudo.">
                            <p class="help-block text-danger"></p>
                        </div>                               
                    </div>
                    <div class="row control-group">
                    	<div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="email">Mail</label>
                            <input type="email" class="form-control" name="email" placeholder="email" id="email" 
                           value="<?php if(isset($_POST['email']) AND !empty($_POST['email'])){ echo $_POST['email'] ;} ?>" 
                             data-validation-required-message="Please enter your email.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-control" name="password" placeholder="password" id="password"                             
                             data-validation-required-message="Please enter your password.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="passwordC">Confirmez votre mot de passe</label>
                            <input type="password" class="form-control" name="passwordC" placeholder="passwordC" id="passwordC"                              
                             data-validation-required-message="Please enter your password.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-success btn-lg">Send</button>
                        </div>
                    </div>                   
                </div>
            </div>
        </form> 
         <?php
            if(isset($_GET['err_login']))
            {
                echo '<br/><font color="red">'.$_GET['err_login'].'</font>';
            } 
        ?>            
    </div>
</section>

<?php $content=ob_get_clean(); ?>
<?php require('template.php'); ?>















    

       
