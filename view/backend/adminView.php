
<?php $title='AdminView'; ?>
<?php ob_start(); ?>
    
    <!-- HEADER -->
    <header  style="background-color: #ffcc14">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="picture/profile.png" alt="">
                    <div class="intro-text">
                       <?php 
                        if (isset($_GET['message'])) 
                        {
                           echo '<span style="color:red">'.htmlspecialchars($_GET['message']).'</span>';
                        }
                       
                       ?> 
                        <span class="name">Myrna NZABI</span>
                        <hr class="star-light">
                        <span class="skills">Web Developer </span>
                    </div>
                </div>
            </div>
        </div>
           <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    </header>

    <?php $content=ob_get_clean(); ?>
    <?php require('templateAdmin.php'); ?>















    

       
