
<?php $title='ArticlesView'; ?>
<?php ob_start(); ?>

<section id="portfolio">
    <div class="container">
    	<div class="row">
            <div class="col-lg-12 text-center">
				<h2> Ajoutez les articles</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row"> 
	       	<div class="col-sm-8 portfolio-item bd-example">
	       		<h3>Actualités du moment </h3><br/> 
				<form action="index.php?action=addPost" method="post">
					<div class="mb-3 form-group">
						<input type="text" name="title" class="form-control" rows="3">			
						<label for="title" class="form-label" >titre</label><br/><br/>
						<?php if (isset($_POST['title']) AND !empty($_POST['title'])){ echo $_POST['title'] ;} ?>
                    </div>
                    <div class="mb-3 form-group">
						<input type="text" name="chapo" class="form-control" rows="3">		
						<label for="chapo" class="form-label">Chapo</label><br/><br/>
						<?php if (isset($_POST['chapo']) AND !empty($_POST['chapo'])){ echo $_POST['chapo'] ;} ?>
					</div>	
					<div class="mb-3 form-group">						
						<textarea type="text" name="content" class="form-control" rows="3"></textarea> 
						<label for="content" class="form-label">contenu</label><br/><br/>
						<?php if (isset($_POST['content']) AND !empty($_POST['content'])){ echo $_POST['content'] ;} ?>
					</div>
					<div class="mb-3 form-group">
						<input type="text" name="author" class="form-control">
						<label for="author" class="form-label">Auteur</label><br/>
						<?php if (isset($_POST['author']) AND !empty($_POST['author'])){ echo $_POST['author'] ;} ?>
					<input type="submit" name="valider"> 
					</div>	
				</form><br/>
				<div class="col-sm-8 portfolio-item bd-example">
					<h3> Documents utiles</h3>
					<!--<form action="index.php?action=fileUsefuls" method="POST" enctype="multipart/form-data"><input type="file" name="fichier" class="form-control"><br/>
						<input type="submit" name="envoi">		
					</form> -->
				</div>
			<?php
				if (isset($_GET['message']))
				{
					echo '<font color=red>'.$_GET['message'].'</font>';
				}
			?>
			</div>
		</div>
	</div>
</section>

<?php $content=ob_get_clean(); ?> 
<?php require('templateAdmin.php'); ?> 