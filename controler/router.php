<?php
require('controler.php');
$controler = new Controler();

if (isset($_GET['action'])) 
{
    if ($_GET['action'] == 'listPosts') 
    {
        $controler->listPosts();
    }
    elseif ($_GET['action'] == 'post') 
    {
        if (isset($_GET['id']) && $_GET['id'] > 0) 
        {
            $controler->post($_GET['id']);
        }
        else 
        {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
    elseif ($_GET['action'] == 'addComment')
    {
        if (isset($_GET['id']) && $_GET['id'] > 0) 
        {
            if (!empty($_POST['author']) && !empty($_POST['comment'])) 
            {
                $controler->addComment($_GET['id'], $_POST['author'], $_POST['comment']);
            }
            else 
            {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        }
        else 
        { 
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
    elseif ($_GET['action'] == 'supprimer')
    {
        if (isset($_GET['id']) && $_GET['id'] > 0)
        {
            $controler->deletePost($_GET['id']);
        }
        else
        {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
        
    }
    elseif ($_GET['action'] == 'edit')
    {
        if (isset($_GET['id']) && $_GET['id'] > 0)
        {
            $controler->editPost($_GET['id']);
        }
        else
        {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
    elseif($_GET['action'] == 'new')
    {
        $controler->newPost();
    }
}

elseif(isset($_POST['add']))
{
    if(!empty($_POST[('article_titre')]) && !empty($_POST['article_contenu']))
	{
        if(isset($_POST['id']) && !empty($_POST['id']))
        {
            $controler->updatePost($_POST['id'], $_POST['article_titre'], $_POST['article_contenu']);
        }
        else
        {
            $controler->savePost($_POST['article_titre'], $_POST['article_contenu']);
        }
    }

}
else 
{
    $controler->listPosts();
}