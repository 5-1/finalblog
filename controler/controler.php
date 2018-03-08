<?php

require_once('model/PostManager.php');
require_once('model/CommentManager.php');


/**
 * Class controler
 */
class controler
{
    /**
     *
     */
    public function listPosts()
    {
        $postManager = new PostManager(); // Création  objet
        $posts = $postManager->getPosts(); // Appel fonction de l'objet
        require('view/indexView.php');
    }

    /**
     * @param $postId
     */
    public function post($postId)
    {
        $postManager = new PostManager();
        $commentManager = new CommentManager();
        $post = $postManager->getPost($postId);
        $comments = $commentManager->getComments($postId);
        require('view/postView.php');
    }

    /**
     * @param $postId
     * @param $author
     * @param $comment
     * @throws Exception
     */
    public function addComment($postId, $author, $comment)
    {
        $commentManager = new CommentManager();
        $affectedLines = $commentManager->postComment($postId, $author, $comment);
        if ($affectedLines === false) {
            throw new Exception('Impossible d\'ajouter le commentaire !');
        } else {
            $this->post($postId);
        }
    }

    /**
     * @param $postId
     */
    public function editPost($postId)
    {

        $postManager = new PostManager();
        $post = $postManager->getPost($postId);
        $token = $this->generateCSRFToken();
        $modeEdition = true;
        require('view/editpostView.php');
    }

    /**
     *
     */
    public function newPost()
    {
        $modeEdition = false;
        $token = $this->generateCSRFToken();
        require('view/editpostView.php');
    }

    /**
     * @param $postId
     */
    public function deletePost($postId)
    {
        $postManager = new PostManager();
        $postManager->deletePost($postId);
        $this->listPosts();
    }

    /**
     * @param $postId
     * @param $title
     * @param $content
     */
    public function updatePost($postId, $title, $content, $token)
    {
        if ($this->checkCSRF($token)) {
            $postManager = new PostManager();
            $postManager->updatePost($postId, $title, $content);
            $this->post($postId);

        } else {
            $this->editPost($postId);
        }
    }

    /**
     * @param $title
     * @param $content
     */
    public function savePost($title, $content, $token)
    {
        $postManager = new PostManager();

        if ($this->checkCSRF($token)) {
            $postId = $postManager->savePost($title, $content);
            $this->post($postId);
        } else {
            $this->newPost();
        }
    }


    /**
     * @return string
     * @throws Exception
     */
    private function generateCSRFToken()
    {

        if (isset($_SESSION['token']) AND !empty($_SESSION['token'])) {
            $token = $_SESSION['token'];
        } else {
            $token = base64_encode(random_bytes(10));
            $_SESSION['token'] = $token;
        }


        return $token;
    }

    private function checkCSRF($token)
    {
        return $token == $this->generateCSRFToken();

    }

}
