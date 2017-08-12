       
<h1 class="titreSectionside col-md-12 text-center">Catégories</h1>
<section class="col-md-12 col-xs-12 presentation">
  <!--Palmarès-->
  <article id="Palmares">
    <ul class='category'>
    <?php if ($category) : ?>
     <?php foreach($category as $categorie): ?>
      <li><a href="<?= $categorie->url; ?>"><?= $categorie->titre; ?></a></li>
      <?php $contentType=$categorie->contentType; ?>
    <?php endforeach; ?>

    <li><a href="index.php?p=<?= $contentType; ?>.index">Toutes catégories</a>
<?php endif ?>
    </ul>
  </article>
</section>