<?php $title = 'à propos'; ?>
<?php $background_image = '/test2/img/about-bg.jpg'; ?>
<?php $h1title = '<h1>À propos</h1>'; ?>
<?php $h2title = 'Tout ce que vous devez savoir.'; ?>

<?php ob_start(); ?>


    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur?</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas voluptatibus, minus!</br> </br>
            Diplômé d'un master Produits et Services Multimédia, et après 3 années d'expérience en agence à travailler pour des clients , je vous propose aujourd'hui mes services afin qu'on établisse ensemble votre stratégie digitale.
Un site internet, une application mobile ? Demandez votre devis gratuit !</p>
          <p>Si vous souhaitez disposez de mon CV, il est téléchargeable via le bouton du bas !</p>
                       
                              <a class="btn btn-primary " href="http://127.0.0.1/safe/view/homeView.php">DEVIS GRATUIT</a>


       <a class="btn btn-primary " href="http://127.0.0.1/cleanblog/exemple.pdf">MON CV </a> <br/>

        </div>
      </div>
    </div>

    <hr>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

