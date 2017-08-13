        <h1 class="titreSection col-md-12 text-center">Rendez-vous/actualités</h1>
          <section class="col-md-12 presentation">
          <!--Palmarès-->
          <article id="Palmares">
<?php foreach ($posts as $post): ?>

            <h2><a href="<?= $post->url ?>"><?= $post->titre; ?></a></h2>

            <blockquote><p>

            <?= $post->accroche; ?></p></blockquote>
 

        <?php endforeach; ?>
        </article>
        </section>


