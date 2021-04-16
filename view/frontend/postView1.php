<?php $title='Comments'; ?>
<?php ob_start(); ?>

    <!-- Publication -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Modification commentaire</h2>
                    <hr class="star-primary">
                </div>
            </div>

            <!--Rajouter la partie Post et le mettre en hidden -->
            <div class="row">
                <div class="col-sm-12 portfolio-item"> 
                    <h3>Commentaires </h3> 
                    <!-- Ajout des commentaires -->
                    <form action="index.php?action=updateComments&amp;id_article= <?php if(isset($data['id_comment']) 
                        AND !empty($data['id_comment'])) { echo $data['id_comment'];}  ?>" method="post">
                        <div class="form-group">
                            <label for="author">Auteur</label><br/>
                            <input type="text" name="author" value="<?php if( isset($author) AND !empty($author) )
                            { echo $author ;} ?>"/>
                        </div>
                        <div>
                            <label for="comments">Commentaire</label><br/>
                        <textarea id="comments" name="comments"><?= $commentaire ?></textarea> 
                        </div>
                        <div>
                            <input type="submit" name="Modifier" value="Modifier" />
                        </div>                        
                    </form>                  
                </div>   
                                        
            </div>
        </div>
    </section>

<?php $content=ob_get_clean(); ?> 
<?php require('template.php'); ?> 