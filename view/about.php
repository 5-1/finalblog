<?php $title = 'Redaction article'; ?>
<?php $background_image = '/test2/img/about-bg.jpg'; ?>
<?php $h1title = '<h1>À propos</h1>'; ?>
<?php $h2title = 'Tout ce que vous devez savoir.'; ?>

<?php ob_start(); ?>


    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur?</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas voluptatibus, minus!</p>
          <p>Si vous souhaitez disposez de mon CV, il est téléchargeable via le bouton du bas !</p>
                       

                        <button type="submit" class="btn btn-primary" id="sendMessageButton">MON CV</button>

        </div>
      </div>
    </div>

    <hr>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

