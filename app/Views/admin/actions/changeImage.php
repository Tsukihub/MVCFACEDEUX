<h1>changer image de <?= $post->title; ?></h1>
<form method="post">
	<?php if(isset($_GET['img'])): ?>
		<?= $form->input('actions_img_name', 'Nom de l\'image à afficher', ['type' => 'text'], $_GET['img']); ?>
	<?php endif; ?>
	<?php if(!isset($_GET['img'])): ?>
		<?= $form->input('actions_img_name', 'Nom de l\'image à afficher'); ?>
	<?php endif ?>
	<?= $form->input('actions_img_alt', 'Texte alternatif (non voyant, non affichage de l\'image'); ?> 
    <button class="btn btn-primary">Sauvegarder</button>

</form>
	