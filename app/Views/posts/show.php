<h1 class="titreSection col-md-12 text-center">Rendez-vous/actualité</h1>
    <section class="col-md-12 col-xs-12 presentation">
     	<article class="articles">
            <div class="row">
            <?php if ($article->articles_img_name):?>
           <!--   
              <img src="<?= $path->img_path.$actions->actions_img_name; ?>" class="col-md-7 col-xs-1 col-sm-7 padding-right-none" alt="<?= $actions->actions_img_description; ?> " />
 -->
              <div class="col-md-5 col-xs-12 col-sm-12 padding-left-none">
                <h2><?= $article->titre; ?></h2>
                <blockquote><p><?= $article->extrait; ?></p></blockquote>
               </div>
               <div class="col-md-12 col-xs-12 col-sm-12 ">
                <p class="actioncontent"><?= $article->contenu; ?></p>
               </div>
             
              <?php endif ?>
              <?php if (!$article->articles_img_name):?>
              <div class="col-md-12 col-xs-12 col-sm-12">
                <h2><?= $article->titre; ?></h2>
                <blockquote><p><?= $article->accroche; ?></p></blockquote>
                <p class="actioncontent"><?= $article->contenu; ?></p>
              </div>
              <?php endif ?>
            </div>
          </article>
         
    <?php if ($categorie && $article->categorie) : ?> <p><em class="pull-right category"><a href="<?= $categorie->url ?>"><?= $article->categorie; ?></a></em></p><?php endif ?>
    </section>
