<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Articles</title>

    <!-- Bootstrap core CSS -->


    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom fonts for this template -->
    <link href="/blog/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">
        <link href="/blog/css/clean-blog.min.css" rel="stylesheet">


  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="/blog/view/homeView.php">BERG Johan</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/safe/view/homeView.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/safe/view/aboutView.php">à propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/safe/">Blog</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- Page Header -->
    <header class="masthead" style="background-image: url(img/buisiness.jpg)">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>Article</h1>
              <h2 class="subheading">Affichage de l'article</h2>

          </div>
        </div>
      </div>
    </header>



    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-50>


        <div class="news">

        <?php
        while ($comment = $comments->fetch())
        {
        ?>
            <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
        <?php
        }
        ?>




<form action="/safe/controler/router.php?action=addComment&amp;id=<?= htmlspecialchars($post['id']) ?>" method="post"> </br>


		
<?php

?>

        <!-- Post Content Column -->
        <div class="col-lg-50> Johan B 


          <p class="lead">
                      <h1><?= htmlspecialchars($post['title']) ?></h1>

            by Johan B.
    
          </p>

          <hr>

          <!-- Date/Time -->
                <em>Article crée le <?= $post['creation_date_fr'] ?></em> </br>

        
          <!-- Post Content -->

                          <?= nl2br(htmlspecialchars($post['content'])) ?>


          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Laisser un commentaire:</h5>
            <div class="card-body">
              <form>
                <div class="form-group">




                <form action="/safe/controler/router.php?action=addComment&amp;id=<?= htmlspecialchars($post['id'])  ?>" method="post"> </br>

    <div>

        <label for="author">Auteur</label><br />

        <input type="text" id="author" name="author" />

    </div>


    <div>

        <label for="comment">Commentaire</label><br />

        <textarea class="form-control" rows="3" id="comment" name="comment"></textarea>

    </div>




                <input type="submit" />  </br>

                        <a class="btn btn-primary float-left" href="/safe/index.php">retour au blog</a> </br>

              </form>
            </div>
          </div>

        <div class="news">
          

        <?php
        while ($comment = $comments->fetch())
        {
        ?>
            <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
        <?php
        }
        ?>







     <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Berg Johan 2017</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="/blog/vendor/jquery/jquery.min.js"></script>
    <script src="/blog/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="/blog/js/clean-blog.min.js"></script>

  </body>

</html>