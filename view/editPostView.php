<?php $title = 'Mon blog'; ?>
<?php $background_image = 'img/buisiness.jpg'; ?>
<?php $h1title = 'BLOG'; ?>
<?php $h2title = 'Ajout d\'un article'; ?>

<?php ob_start(); ?>

    <form method="POST" action="index.php">

        <input type="hidden" name="id" <?php if ($modeEdition == 1) { ?> value="<?=
        htmlspecialchars($post['id']) ?>"<?php } ?>/><br/>


        <label for="content" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <input type="text" name="article_titre" class="form-control animated"
                   placeholder="Titre"<?php if ($modeEdition == 1) { ?> value="<?=
            htmlspecialchars($post['title']) ?>"<?php } ?> > <br/>
            <input type="hidden" name="token" value="<?= $token ?>" >


            <label for="content" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <textarea name="article_contenu" class="form-control animated" attr rows="10"
                          placeholder="Contenu de l'article"><?php if ($modeEdition == 1) { ?><?=
                        $post['content'] ?><?php } ?></textarea>
                <br>


                <input type="submit" value="Envoyer l'article" name="add"/>
    </form>

<?php
$content = ob_get_clean();
require('template.php');
?>