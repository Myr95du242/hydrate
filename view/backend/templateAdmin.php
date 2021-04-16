<!DOCTYPE html>
<html>
<head>
    <!-- Exemple de template-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?> </title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS 
    <link href="css/style.css" rel="stylesheet">-->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

</head>
<body>
         <!-- NAVIGATION-- >
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Bienvenue 
                    <?php 
                        if(empty($_SESSION['admin']))
                        {
                            //header('Location:../index.php?action=homePage');
                        }else{
                            echo '<em>'.$_SESSION['admin'].'! </em>';
                        }
                    ?>sur ton blog</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="">
                     <!-- <li class="hidden">
                        <a href="index.php?action=homePage">Accueil</a>
                       <a href="#accueil">Accueil</a> -->
                    </li>
                    <li class="page-scroll">
                        <a href="index.php?action=addPostView">Publier un article</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php?action=displayCommentUser">Gérer les membres</a>
                        <p> </p>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php?action=displayArticle">Les Articles</a>
                    </li>
                    <li class="page-scroll">
                         <?php 
                            if(empty($_SESSION['admin']))
                            { ?>
                                <a href="index.php?action=loginPage">LogIn<br/> 
                            <?php    
                                
                            }
                            else
                            {
                            ?>
                                <a href="index.php?action=logOut">LogOut<br/>
                            <?php                           
                            }
                        ?>
                        </a>
                        <p> </p>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

   <?= $content; ?>  
 <!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    
                </div>
                <div class="footer-col col-md-4">
                    <h3>Rejoignez-moi</h3>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/myleo.nz" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/myrna-nzabi-84818865/" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                   
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; Your Website 2021
                </div>
            </div>
        </div>
    </div>
</footer>

      <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>
</html> 

