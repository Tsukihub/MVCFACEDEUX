<form method="post" class="<?= $class ?>">
    <?= $form->input('titre', 'Titre de la catégorie'); ?>
    <?= $form->select('contentType', 'page liée', $select); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>