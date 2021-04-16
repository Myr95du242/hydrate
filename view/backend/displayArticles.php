<?php $title='Articles'; ?>
<?php ob_start(); ?>

    <!-- Publication -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Articles publiés</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="card">
             <!--   <img class=”card-img-top” src=”...” alt=”...”> -->
                <div class="card-body">
                    <h5 class="card-title">Tous les articles</h5>
                </div>

                <div class="col-sm-12 portfolio-item">
                    <?php while ($data=$req_article->fetch()) 
                    {
                    ?>
                    <div class="card">
                        <img class=”card-img-top” src=”...” alt=”...”>
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlentities($data['title'])?> <em> <?= $data['date_post_fr'] ?></em>
                            </h5>
                            <p class="card-text"><?= $data['chapo'] ?><br/><a href=""> <?= htmlspecialchars($data['author'])?></a>
                            </p>

                            <a href="index.php?action=deletePost&amp;id=<?php if( isset($data['id_post'] ) AND !empty($data['id_post'] ) ) { echo $data['id_post'] ;} ?>" >
                            <button value="delet" style="background-color: red;color:#fff; margin:10px; padding-bottom:10px"> Supprimer article</button>
                            </a>     

                            <a href="index.php?action=updateArticlePost&amp;id=<?php if(isset($data['id_post']) AND !empty($data['id_post']) ) {echo $data['id_post'] ;} ?>"> <button value="modifier" style="background-color: green;color:#fff; margin:10px; padding-bottom:10px"> Modifier article</button>
                            </a> 
                        </div>
                    </div>
                    <?php
                    }
                        $req_article->closeCursor();    
                     ?>
                </div> 
            </div>            
        </div>
    </section>

<?php $content=ob_get_clean(); ?> 
<?php require('templateAdmin.php'); ?> 