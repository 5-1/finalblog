<?php $title = 'Article'; ?>
<?php $background_image = 'img/buisiness.jpg'; ?>
<?php $h1title = 'BLOG'; ?>
<?php $h2title = 'Article'; ?>

<?php ob_start(); ?>


<?php
#require('../model/model.php');

if (isset($_GET['id']) && $_GET['id'] > 0) {
    $post = getPost($_GET['id']);
    $comments = getComments($_GET['id']);
    require('../view/postView.php');
}
else {
    echo 'Erreur : aucun identifiant de billet envoyé';
}
?>
   <p>dernière édition faite le 

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

