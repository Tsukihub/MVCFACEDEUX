<form method="post" class="<?= $class ?> formulaires">
    <?= $form->input('titre', 'Titre de la catégorie'); ?>
    <?= $form->select('contentType', 'page liée', $select); ?>
    <button class="valider">Sauvegarder</button>
</form>