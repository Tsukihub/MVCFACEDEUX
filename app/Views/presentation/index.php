 <?php foreach($presentations as $presentations) :?>
 <article class="articles presentation pagepresentation col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
    <h1 class="titreSection text-center col-md-12"><?= $presentations->title; ?></h1>
<?= $presentations->content; ?>
</article>
<?php endforeach ?>




         
         
         




