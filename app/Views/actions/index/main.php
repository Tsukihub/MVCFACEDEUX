        <h1 class="titreSection col-md-12 text-center"> Nos actions</h1>
          <section class="col-md-12 presentation">
          <!--Palmarès-->
          <article id="Palmares">
		<?php foreach ($actions as $actions): ?>
			<h2><a href="<?= $actions->url ?>"><?= $actions->title; ?></a></h2>
			<blockquote><p><?= $actions->accroche; ?></p></blockquote>
		<?php endforeach; ?>
    </article>
        </section>