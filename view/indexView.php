<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Liste des articles</title>

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
              <h1>Liste des articles</h1>
              <h2 class="subheading">Tout les articles disponible sur le blog</h2>

          </div>
        </div>
      </div>
    </header>
    <body>

	    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-15">
<h1>Mon super blog !</h1>
<p>Derniers billets du blog :</p>
	<a class="btn btn-primary " href="index.php?action=new">Ajouter un article</a> <br/>

	<?php
	while ($post = $posts->fetch())
	{
	?>

<div class="card mb-4">

          <div class="card mb-4">

              <h2 class="card-title">				<em><a href="index.php?action=post&id=<?= htmlspecialchars($post['id']) ?>"><?= htmlspecialchars($post['title']) ?></a></em>
                <em><br/></h2>
              <p class="card-text"><?= nl2br(htmlspecialchars($post['content'])) ?> </br>

				<a class="btn btn-primary " href="index.php?action=edit&id=<?= htmlspecialchars($post['id']) ?>">Modifier &rarr;</a>
				<a class="btn btn-primary " href="index.php?action=supprimer&id=<?= htmlspecialchars($post['id']) ?>">Supprimer &rarr;</a>

            </div>
            <div class="card-footer text-muted">
              <em>le <?= htmlspecialchars($post['creation_date_fr']) ?></em>
            </div>
          </div>






<?php
}

?>
   </body>



          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>


    

                </span>
            </div>
                        </div>
                                    </div>
                                                </div>
                                                            </div>







        </div>



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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="/blog/js/clean-blog.min.js"></script>

  </body>

</html>