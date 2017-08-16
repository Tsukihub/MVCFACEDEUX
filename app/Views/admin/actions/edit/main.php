<form class="formulaires" method="post" enctype="multipart/form-data">
    <?php if (!empty($_POST['title'])): ?>
        <?= $form->input('title', 'Titre de l\'action', ['type' => 'text'], $_POST['title']); ?>
    <?php else: ?>
          <?= $form->input('title', 'Titre de l\'action', ['type' => 'text']); ?>
    <?php endif; ?>

    <?= $form->input('accroche', 'Accroche', ['type' => 'textarea']); ?>
    <?= $form->input('content', 'Contenu', ['type' => 'textarea']); ?>
    <?=$form->input('actions_img','Choississez une image dans le panneau de droite ou téléchargez en une',['type'=>'file'], '');?>
    <?= $form->input('actions_img_name', '', ['type' => 'hidden']); ?>
    <p>Image séléctionnée :  <span class ='nomimage'></span></p>
   
    <?= $form->select('actions_category_id', 'Catégorie', $categories); ?>
    <button onclick='fillfieldfromfield()' class="valider">Sauvegarder</button>
</form>
