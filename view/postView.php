<!DOCTYPE html>
<!-- For view one post --> 
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
        <link href="../style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        

        <div class="news">
            <h3>
              <h1><?= htmlspecialchars($post['title']) ?></h1>
                <em>Article crée le <?= $post['creation_date_fr'] ?></em>
            </h3>
            
            <p>
                <?= nl2br(htmlspecialchars($post['content'])) ?>
            </p>
        </div>

        <h3>Commentaires</h3>

        <?php
        while ($comment = $comments->fetch())
        {
        ?>
            <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
        <?php
        }
        ?>



<form action="../index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post"> </br>

    <div>

        <label for="author">Auteur</label><br />

        <input type="text" id="author" name="author" />

    </div>

    <div>

        <label for="comment">Commentaire</label><br />

        <textarea id="comment" name="comment"></textarea>

    </div>

    <div>

        <input type="submit" />  </br>

        <a class="btn btn-primary float-left" href="../index.php">retour au blog</a> </br>