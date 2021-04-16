<?php $title='Commentaires'; ?>
<?php ob_start(); ?>

    <!-- Publication -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">                
                    <h2>Publication</h2>
                    <hr class="star-primary">
                </div>
            </div> 
        </div>        
        <div class="container">
             <div class="row">
                <div class="col-lg-12">
                    <strong class="d-inline-block mb-2 text-primary">
                        <a href="index.php?action=getListPost">
                            <em>Repartir à la liste de publication</em>
                        </a><br/><br/>
                    </strong>
                </div>
            </div>
            <div class="row flex-md-row "><!-- g-0 borderX rounded overflow-hidden  mb-4
                shadow-sm h-md-250 position-relative flex-md-row-->
                <div col-md-3 style="padding-bottom: 10px">   <!--p-4 d-flex flex-column position-static -->    <h3 class="mb-0"><?php if(isset($post['title']) AND !empty($post['title'])) { echo htmlspecialchars($post['title']);}?></h3>
                    <h5 class="mb-1 text-muted">
                        <br/><em> le <?php if(isset($post['date_post_fr']) AND !empty($post['date_post_fr'])) { echo $post['date_post_fr']; }?> </em>
                    </h5> 
                    <p class="card-text mb-auto"> <h4><font color=red><?php if(isset($post['chapo']) AND !empty($post['chapo'])) { echo nl2br(htmlspecialchars($post['chapo']) ).'<br/>'; }?> </font></h4>
                    <?php if(isset($post['content']) AND !empty($post['content'])) { echo nl2br(htmlspecialchars($post['content']) ).'<br/>'; } ?>
                    </p> 
                      <a class="stretched-link" href="#">
                        <em> <?php if(isset($post['author']) AND !empty($post['author'])) {echo nl2br(htmlspecialchars($post['author']) ).'<br/>'; }?></em>
                    </a> 
                </div>
                <div class="col-md-3" ><!--d-none d-lg-block -->
                    <svg class="bd-placeholder-img" width="200" height="250" xmlnx="htpp://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRation="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbail</text>
                    </svg >
                </div>
            </div>  
            <div class="row">        
                <div class="col-sm-8 portfolio-item bd-example">
                    <h3>Commentaires </h3><br/>
                    <!-- Ajout des commentaires -->  
                    <form action="index.php?action=addComments&amp;id_article=<?= $post['id_post'] ?>" method="post">
                        <div class="mb-3 form-group">
                            <label class="form-label" for="FormControlAuteur"> Auteur</label>
                            <input id="FormControlAuteur" type="text" name="author" class="form-control" rows="3"/>   
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="FormControlContenu"> Commentaire</label>
                            <textarea id="FormControlContenu" name="comments" class="form-control" rows="3"></textarea>    
                        </div>
                        <div>
                            <input type="submit" name="" />
                        </div>                        
                    </form>
                    <div>
                        
                         <?php
                            while($commentaire= $comment->fetch()) 
                            {
                            ?>
                                <p><strong><?= '<br/>'.htmlspecialchars($commentaire['author']) ?></strong> le <em> <?= $commentaire['date_comment_fr'] ?></em></p>
                                <p><?= nl2br(htmlspecialchars($commentaire['comments'])).'&nbsp;&nbsp;' ?>
                                    <a href="index.php?action=getCommentUser&amp;id_article=<?php if(isset($commentaire['id_comment']) AND !empty($commentaire['id_comment']) ){ echo $commentaire['id_comment'] ;} ?>"><em>Modifier Commentaires</em></a>
                                </p>
                            <?php
                            }
                                $comment->closeCursor();
                            ?>                 
                    </div>
                </div>                                         
            </div>
        </div>
    </section>    
        

<?php $content=ob_get_clean(); ?> 
<?php require('template.php'); ?> 