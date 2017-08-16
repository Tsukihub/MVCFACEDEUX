<form method="post" class='formulaires'>
    <?= $form->input('title', 'Titre de l\'article'); ?>
    <?= $form->input('newsdate', 'date de publication', ['type' => 'date']); ?>
    <?= $form->input('link', 'lien vers l\'article', ['type' => 'textarea']); ?>
    <p>Laisser vide si presse papier</p>
    <?= $form->input('fromwhere', 'Nom du journal'); ?>

    <button class="valider">Sauvegarder</button>
</form>