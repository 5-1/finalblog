<form method="POST" action="">
	  <input type="hidden" name="id" value="<?php $post['id'] ?>"/><br/>
      <input type="text" name="article_titre" placeholder="Titre"<?php if($modeEdition == 1) { ?> value="<?= 
      $->post['title'] ?>"<?php } ?> /><br />
      <textarea name="article_contenu" placeholder="Contenu de l'article"><?php if($modeEdition == 1) { ?><?= 
      $post['content'] ?><?php } ?></textarea><br />
      <input type="submit" value="Envoyer l'article" name="add" />

   </form>

   