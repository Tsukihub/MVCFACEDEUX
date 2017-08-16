<?php if($errors): ?>
    <div class="alert alert-danger">
        Identifiants incorrects
    </div>
<?php endif; ?>

<form method="post" class='formulaires col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4'>
    <?= $form->input('username', 'Identifiant'); ?>
    <?= $form->input('password', 'Mot de passe', ['type' => 'password']); ?>
    <button class="btn btn-danger" id="validation">Envoyer</button>
</form>