<?php $title='signIn'; ?>
<?php ob_start(); ?> 
    <!-- Connexion Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Connectez-vous</h2>
                    <hr class="star-primary">
                </div>
            </div>
          <!--  <form method="post" action="index.php?action=verifConnexion"> -->
            <form method="post" action="index.php?action=checkingConnect">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="pseudo">Pseudo</label>
                                <input type="text" class="form-control" name="pseudo" placeholder="pseudo" id="pseudo"  data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Mot de passe</label>
                                <input type="password" class="form-control" name="password" placeholder="password" id="password" required data-validation-required-message="Please enter your password.">
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
                        <a href="index.php?action=connectRegisterView"><strong><em>Inscrivez-vous</em></strong> </a>      
                    </div>
                </div>
            </form>             
            <?php
                if(isset($_GET['message']))
                {
                    echo '<br/><font color="red">'.$_GET['message'].'</font>';
                } 
            ?>   
        </div>
    </section>
    <?php $content=ob_get_clean(); ?>
    <?php require('template.php'); ?>















    

       
