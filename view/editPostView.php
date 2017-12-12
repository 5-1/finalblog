<form method="POST" action="">
	  <input type="hidden" name="id" value="<?php $post['id'] ?>"/><br/>
      <input type="text" name="article_titre" placeholder="Titre"<?php if($modeEdition == 1) { ?> value="<?= 
      $edit_article['title'] ?>"<?php } ?> /><br />
      <textarea name="article_contenu" placeholder="Contenu de l'article"><?php if($modeEdition == 1) { ?><?= 
      $edit_article['content'] ?><?php } ?></textarea><br />
      <input type="submit" value="Envoyer l'article" name="add" />

   </form>