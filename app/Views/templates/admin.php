<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?= App::getInstance()->title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

</head>

<body id="admin">

    <div class="row-fluid" id="barre">
      <div id="placementDon">
      
        <a href="index.php?p=admin.notices.index" class="boutonDon">Mentions légales</a>
        <a href="index.php?p=admin.categories.index" class="boutonDon" role="button"> catégories</a>
          <a href="index.php" class="boutonDon" role="button" ><span>interface utilisateur</span></a>
    </div>
</div>

<div class="container">

    <header class="row">
        <!--Logo Face-->
        <div class="col-md-3 col-sm-3 col-xs-12 logoFace">
            <a href="index.php?p=admin.posts.index"><img src="img/logo.svg" alt="logo Face territoire bourbonnais" id="logo" /></a>
        </div>
        <!--Barre de navigation-->
        <nav class="navbar navbar-default col-md-9 col-sm-10 col-xs-9">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <!--Bouton-->
                    <li class="dropdown">
                        <a href="index.php?p=admin.presentations.index" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Qui sommes nous?<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?p=admin.presentations.index">Face Territoire Bourbonnais</a></li>
                            <li><a href="#ancrepartenaires">Partenaires</a></li>
                        </ul>
                    </li>

                    <!--Bouton-->
                    <li class="dropdown">
                        <a href="index.php?p=admin.actions.index">Actions</a>
                    </li>
                    <!--Bouton-->
                    <li class="dropdown">
                        <a href="index.php?p=admin.news.index">Presse</a>
                    </li>
                    <!--Bouton-->
                    <li class="dropdown">
                        <a href="index.php?p=admin.memberships.index">Rejoignez-nous</span></a>
                    </li>

                    <!--Bouton-->
                    <li class="dropdown">
                        <a href="index.php?p=admin.contacts.edit" role="button">Contact</a>
                    </li>


                    <!--Bouton-->
      <!--       <li class="dropdown">
                <a href="index.php?p=admin.categories.index" role="button">Catégories</a>
            </li> -->
        </ul>
    </div>
</nav>

       


</header>






<main class="row">


    <?php if($sidecontent==''): ?>
      <div class="col-md-6 col-md-offset-3">
        <?= $content; ?>
      </div>
    <?php endif ?>

    <?php if($sidecontent!==''): ?>
      <div class="col-md-8 col-xs-12 col-sm-12">
        <?= $content; ?>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
        <?= $sidecontent; ?>
      </div>
    <?php endif ?>
</main>

</div><!-- /.container -->
<footer>

    <div class="row" id="lienMentions">
      <p class="text-center"></p>
    </div>

  </footer>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js "></script>
<script type="text/javascript" src="js/script.js"></script>
</body>

</html>
