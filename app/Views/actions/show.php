<h1 class="titreSection col-md-12 text-center">Action : <?php if ($categorie->titre) :?><?= $categorie->titre ?><?php endif ?></h1>
    <section class="col-md-12 col-xs-12 presentation">
     	<article class="articles">
            <div class="row">
              <div class="col-md-12 col-xs-12 col-sm-12">
                <h2><?= $actions->title; ?></h2>
                <blockquote><p><?= $actions->accroche; ?></p></blockquote>
                </div>
            <?php if ($actions->actions_img_name):?>
             
              <img src="<?= $path->img_path.$actions->actions_img_name; ?>" class="col-md-12 col-sm-12 col-xs-12" alt="<?= $actions->actions_img_description; ?> " />
              <?php endif ?>
                 <div class="col-md-12 col-xs-12 col-sm-12">
                <p class="actioncontent"><?= $actions->content; ?></p>
              </div>

            </div>
          </article>
          <p><em class="pull-right categorylink"><a href="<?= $categorie->url ?>"><?= $categorie->titre ?></a></em></p>
    </section>




