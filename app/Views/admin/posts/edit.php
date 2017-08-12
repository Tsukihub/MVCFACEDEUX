<form method="post">
    <?= $form->input('titre', 'Titre de l\'article'); ?>
    <?= $form->input('accroche', 'accroche', ['type' => 'textarea']); ?>
    <?= $form->input('contenu', 'Contenu', ['type' => 'textarea']); ?>
    <?= $form->select('articles_category_id', 'Catégorie', $categories); ?>

    <button class="btn btn-primary">Sauvegarder</button>
</form>