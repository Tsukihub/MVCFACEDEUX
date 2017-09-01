<form class="formulaires" method="post" enctype="multipart/form-data">

    <?=$formulaire->input('partenaire_img',' file',['type'=>'file'], '');?>
     <button class="valider">Sauvegarder</button>

</form>

     <?php foreach($files as $logo): ?>
     	<div class='col-md-6 presentation'><?=$logo; ?><a href="index.php?p=admin.presentations.erase&name=<?= $logo; ?>" style="color:red"> x</a></div>
        

    
    <?php endforeach?>
  <!--         echo ("<div style='margin :20px;'><img class='col-md-3' src='img/partenaires/$logo'></div>"); -->