
<div class='col-md-6'>
<p>Image actuelle :</p>
              <?php if ($post->actions_img_name):?>
              	<img src="<?= $path->img_path.$post->actions_img_name; ?>" class="col-md-6" />
<p>Nom :</p>
<?= $post->actions_img_name ;?>
<?php endif ?>
</div>
<div class='col-md-12'>
<p>Image utilisées :</p>
<?php foreach($actions as $action): ?>
<?php if ($action->actions_img_name):?>
  <div>
              <img src="<?= $path->img_path.$action->actions_img_name; ?>" class="col-md-2 col-xs-1 col-sm-7" />
<p>Nom : <?= $action->actions_img_name ;?></p>

<p>actions liées à l'image: <?= $action->title ;?></p>
</div>
<?php endif; ?> 
<?php endforeach; ?>

<!-- <p>Images disponibles</p> -->
<p> cliquer sur l'image à utiliser:<br></p>
<div class ="row" style="height: 300px; overflow-y: scroll;">
<?php foreach($files as $files): ?>

        <div class="col-md-4 col-xs-1 col-sm-7" style="max-width: 80px; overflow: hidden;"><img style="height: 50px; width: 50px; margin: 5px;" onclick='fillfield("<?= $files ?>", "<?= $path->img_path ?>")' src="<?= $path->img_path.$files; ?>"/><a onclick='fillfield("<?= $files ?>")'><?= $files ?></a></div>




<?php endforeach; ?>
</div>
</div>

