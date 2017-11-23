<?php $title = 'Mon blog'; ?>
<?php $background_image = 'img/buisiness.jpg'; ?>
<?php $h1title = 'BLOG'; ?>
<?php $h2title = 'Liste des articles'; ?>





<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<p>Derniers billets du blog :</p>

            <a class="btn btn-primary " href="view/redaction.php ?>">Ajouter un article</a> <br/></a> 



<?php

$bdd = new PDO("mysql:host=127.0.0.1;dbname=articles;charset=utf8", "root", "");
$articles = $bdd->query('SELECT * FROM articles ORDER BY creation_date DESC');

while (($data = $posts->fetch())AND($a =$articles->fetch()))
{
?>
         <a href="view/post.php?id=<?= $a['id'] ?>"> <br/>

    <div class="news">
        <h3>
            <em><a href="view/post.php?id=<?= $data['id'] ?>"><?= htmlspecialchars($data['title']) ?></a></em>
           
            <em>le <?= $data['creation_date'] ?></em> <br/>

        </h3>
        
        <p>
            <?= nl2br(htmlspecialchars($data['content'])) ?> </br>
            <br />
                        <a class="btn btn-primary " href="view/redaction.php?edit=<?= $a['id'] ?>">Modifier</a> 
            <a class="btn btn-primary " href="view/supprimer.php?id=<?= $a['id'] ?>">Supprimer</a> <br/></a> 
        </p>
    </div>



<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

