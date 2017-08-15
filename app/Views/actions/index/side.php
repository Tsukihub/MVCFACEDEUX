  <section class="col-md-12 presentation" id="borderleft">
    <!--Palmarès-->
    <article>
      <ul class='category'>
        <?php if ($category) : ?>
         <?php foreach($category as $categorie): ?>
          <li><a href="<?= $categorie->url; ?>"><?= $categorie->titre; ?></a></li>
          <?php $contentType=$categorie->contentType; ?>
        <?php endforeach; ?>

        <li><a href="index.php?p=<?= $contentType; ?>.index">Toutes catégories</a></li>
      <?php endif ?>
    </ul>
  </article>
</section>

