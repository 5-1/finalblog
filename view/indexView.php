<?php $title = 'Mon blog'; ?>
<?php $background_image = 'img/buisiness.jpg'; ?>
<?php $h1title = 'BLOG'; ?>
<?php $h2title = 'Liste des articles'; ?>

<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<p>Derniers billets du blog :</p>

            <a class="btn btn-primary " href="view/redaction.php ?>">Ajouter un article</a> <br/></a> 


<?php
while ($post = $posts->fetch())
{
?>

    <div class="news">
        <h3>
            <em><a href="index.php?action=post&id=<?= $post['id'] ?>"><?= htmlspecialchars($post['title']) ?></a></em>
           
            <em>le <?= $post['creation_date_fr'] ?></em> <br/>

        </h3>
        
        <p>
            <?= nl2br(htmlspecialchars($post['content'])) ?> </br>
            <br />

            <a class="btn btn-primary " href="index.php?action=edit&id=<?= $post['id'] ?>">Modifier</a> 
            <a class="btn btn-primary " href="index.php?action=supprimer&id=<?= $post['id'] ?>">Supprimer</a>  
        </p>
    </div>



<?php
}
$content = ob_get_clean();
require('template.php');
?>
