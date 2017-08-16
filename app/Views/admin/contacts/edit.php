<form method="post" class='formulaires'>
    <?= $form->input('address', 'adresse'); ?>
    <?= $form->input('cp', 'Code postal'); ?>
    <?= $form->input('contactIdentity', 'Identité du contact'); ?>
    <?= $form->input('contactNumber', 'Numéro du contact'); ?>
    <?= $form->input('contactMail', 'adresse mail du contact'); ?>
    <button class="valider">Sauvegarder</button>
</form>