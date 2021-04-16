
<?php $title='publication'; ?>
<?php ob_start(); ?>
<!-- Contenu à mettre dans le template -->
   <!-- Publication -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Publication</h2>
                    <hr class="star-primary">
                </div>
            </div>
               <!--  -->
            <div class="row">         
                 <?php
                 while($data= $resultat->fetch())
                    {
                    ?>
                 <div class="col-sm-4 portfolio-item feature-icon  bg-gradient">
                 <!--  bg-primary <svg wigth="1em" height="1em">
                    </svg> -->                
                    <h3>
                        <strong>  <?= htmlspecialchars($data['title'])?> 
                        </strong><br/> 
                    </h3>
                    <h5>
                        <em><?= $data['date_post_fr'] ?></em>
                    </h5>                   
                    <p>
                       <?php  echo '<em>'.nl2br(htmlspecialchars($data['chapo']) ).'</em>'.'<br/>'; ?>
                    </p>
                    <a href="index.php?action=getPostComments&amp;id_article=<?= $data['id_post']; ?>" class="portfolio-link" data-toggle="modal"> 
                        <button class="btn-primary ">Commentaires</button>
                    </a>
                </div>  
                <?php
                    }
                        $resultat->closeCursor();
                ?> 
            </div>
         </div>
    </section>

    <?php $content=ob_get_clean(); ?>
    <?php require('template.php'); ?>















    

       
