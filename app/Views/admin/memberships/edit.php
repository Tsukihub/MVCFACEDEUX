<form method="post" class='formulaires'>
    <?= $form->input('title', 'Titre de la section'); ?>
    <?= $form->input('content', 'contenu de la section', ['type' => 'textarea']); ?>
    <button class="valider">Sauvegarder</button>
</form>