<?php $title = 'Redaction article'; ?>
<?php $background_image = '/img/article.jpg'; ?>
<?php $h1title = 'BLOG'; ?>
<?php $h2title = 'Ajouter ou supprimer un article'; ?>




<?php ob_start(); ?>

<?php
/**
 * For to write one post.
 */

$bdd = new PDO("mysql:host=127.0.0.1;dbname=articles;charset=utf8", "root", "");
$mode_edition = 0;

if(isset($_GET['edit']) AND !empty($_GET['edit'])) {
   $mode_edition = 1;
   $edit_id = htmlentities($_GET['edit']);
   $edit_article = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
   $edit_article->execute(array($edit_id));
   if($edit_article->rowCount() == 1) {
      $edit_article = $edit_article->fetch();
   } 
   else 
   {
      die('Erreur : l\'article n\'existe pas...');
   }
}
if(isset($_POST['add'])) 
{
   if
    (!empty($_POST['article_titre']) AND !empty($_POST['article_contenu'])) {
      
      $article_titre = $_POST['article_titre'];
      $article_contenu = $_POST['article_contenu'];
      if($mode_edition != 0) {
           $update = $bdd->prepare('UPDATE articles SET title = ?, content = ?, date_time_edition = NOW() WHERE id = ?');
         $update->execute(array($article_titre, $article_contenu, $edit_id));
         header('Location: http://127.0.0.1/test2/article.php?id='.$edit_id);
         $message = 'Votre article a bien été mis à jour !';
      } 
      else {
        $ins = $bdd->prepare("INSERT INTO articles (title, content, creation_date, date_time_edition) VALUES (?, ?, NOW(), NOW())");

           $ins->execute(array($article_titre, $article_contenu));

         $message = 'Votre article a bien été posté';
      }
   } 
   else {
      $message = 'Veuillez remplir tous les champs';
   }
}
?>

   <form method="POST" action="">
      <input type="text" name="article_titre" placeholder="Titre"<?php if($mode_edition == 1) { ?> value="<?= 
      $edit_article['title'] ?>"<?php } ?> /><br />
      <textarea name="article_contenu" placeholder="Contenu de l'article"><?php if($mode_edition == 1) { ?><?= 
      $edit_article['content'] ?><?php } ?></textarea><br />
      <input type="submit" value="Envoyer l'article" name="add" />

   </form>
   <br/>
   <?php if(isset($message)) { echo $message; } ?> <br/>

   <a class="btn btn-primary float-left" href="/test2/index.php">retour au blog</a>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

