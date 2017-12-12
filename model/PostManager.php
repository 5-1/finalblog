<?php
require_once("model/Manager.php");

class PostManager extends Manager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM articles ORDER BY creation_date DESC LIMIT 0, 5');

        return $req;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM articles WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }


        public function savePost($postId, $titre, $contenu)
    {
        $db = $this->dbConnect();
        $ins = $bd->prepare("INSERT INTO articles (title, content, creation_date, date_time_edition) VALUES (?, ?, NOW(), NOW())");
        $ins->execute(array($title, $content));

        return $dbh->lastInsertId();
    }

            public function updatePost($postId, $titre, $contenu)
    {

        $update = $bd->prepare('UPDATE articles SET title = ?, content = ?, date_time_edition = NOW() WHERE id = ?');
         $update->execute(array($title, $content, $PostId));
    }



}
