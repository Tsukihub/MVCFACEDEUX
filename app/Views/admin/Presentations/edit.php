<form method="post">
    <?= $form->input('title', 'Titre de la section'); ?>
    <?= $form->input('content', 'contenu de la section', ['type' => 'textarea']); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>