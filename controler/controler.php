<?php

require_once('model/PostManager.php');
require_once('model/CommentManager.php');

class controler
{
public function listPosts()
{
    $postManager = new PostManager(); // Création  objet
    $posts = $postManager->getPosts(); // Appel fonction de l'objet
    require('view/indexView.php');
}

public function post($postId)
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();
    $post = $postManager->getPost($postId);
    $comments = $commentManager->getComments($postId);
    require('view/postView.php');
}

public function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager();
    $affectedLines = $commentManager->postComment($postId, $author, $comment);
    if ($affectedLines === false) 
    {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else 
    {
        $this->post($postId);
    }
}
public function editPost($postId) 
{
		
	$postManager = new PostManager();
	$post = $postManager->getPost($postId);
	$modeEdition = true;
	require('view/editpostView.php');	
}
public function newPost()
 {
 	$modeEdition = false;
    require('view/editpostView.php');
 }

public function deletePost($postId)
 {
	$postManager = new PostManager();
	$postManager->deletePost($postId);
	$this->listPosts();
 }

 public function updatePost($postId, $title, $content)
 {
	$postManager = new PostManager();
	$postManager->updatePost($postId, $title, $content);
	$this->post($postId);

 }
 public function savePost($title, $content)
 {
	$postManager = new PostManager();
	$postId = $postManager->savePost($title ,$content);
	$this->post($postId);
 }

}
