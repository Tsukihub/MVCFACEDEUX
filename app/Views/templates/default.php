<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="img/favicon.png">

  <title><?= App::getInstance()->title; ?></title>

  <!-- Bootstrap core CSS -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

  
</head>

<body>

  <div class="row-fluid" id="barre">
    <div id="placementDon">
      <a href="index.php?p=memberships.index" class="btn btn-default" role="button" id="boutonDon">Devenez <span>membre</span></a>
    </div>
  </div>

  <div class="container">

    <header class="row">
      <!--Logo Face-->
      <div class="col-md-3 col-sm-3 col-xs-12 logoFace">
        <a href="index.php?p=posts.index"><img src="img/logo.svg" alt="logo Face territoire bourbonnais" id="logo" /></a>
      </div>
      <!--Barre de navigation-->
      <nav class="navbar navbar-default col-md-9 col-sm-10 col-xs-9">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            
            <!--Bouton-->
   <!--          <li class="dropdown">
              <a href="index.php?p=presentations.index" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Qui sommes nous?<span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="index.php?p=presentations.index">Face Territoire Bourbonnais</a></li>
                <li><a href="#ancrepartenaires">Partenaires</a></li>
              </ul>
            </li> -->
               <li class="dropdown">
              <a href="index.php?p=presentations.index">Qui sommes-nous ?</a>
            </li>
            <!--Bouton-->
            <li class="dropdown">
              <a href="index.php?p=actions.index">Actions</a>
            </li>
            <!--Bouton-->
            <li class="dropdown">
              <a href="index.php?p=memberships.index">Nous rejoindre</a>
            </li>





            <!--Bouton-->
            <li class="dropdown">
              <a href="index.php?p=news.index" class="dropdown">Presse</a>
            </li>
            <!--Bouton-->
            <li class="dropdown">
              <a href="index.php?p=contacts.index" role="button">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>






    <main class="row">
     <?php if($sidecontent!==''): ?>
  
      <div class="col-md-12 formobile">
        <?= $sidecontent; ?>
      </div>
    <?php endif ?>
     <?php if($sidecontent==''): ?>
      <div class="col-md-12">
        <?= $content; ?>
      </div>
    <?php endif ?>

      <?php if($sidecontent!==''): ?>
      <div class="col-md-8">
        <?= $content; ?>
      </div>
      <div class="col-md-4">
        <?= $sidecontent; ?>
      </div>
    <?php endif ?>
    </main>

  </div><!-- /.container -->

<!-- 

https://www.solodev.com/bldesign/adding-an-infinite-client-logo-carousel-to-yoite.stml -->



<div class="row-fluid footerext">

<h3 class="text-center" id='ancrepartenaires'>Nos entreprises adhérentes/partenaires</h3>
</div>
<div id=partners-slider>
   <section class="customer-logos slider" >
   <?php $files = array_slice(scandir('img/partenaires'), 2);
    foreach($files as $logo){
  
    echo ("<div class='slide'><img src='img/partenaires/$logo' ></div>");
  }
    ?><!-- 

    <div class="slide"><img style="height: 50px;" src="img/actions/AE.png"></div>
    <div class="slide"><img style="height: 50px;" src="img/actions/petitvelorouge.png"></div>
    <div class="slide"><img style="height: 50px;" src="img/actions/double.png"></div>
    <div class="slide"><img style="height: 50px;" src="img/partenaires/cciallier.jpg"></div>
    <div class="slide"><img style="height: 50px;" src="img/partenaires/cciallier.jpg"></div>
    <div class="slide"><img style="height: 50px;" src="img/partenaires/cciallier.jpg"></div>
    <div class="slide"><img style="height: 50px;" src="img/partenaires/cciallier.jpg"></div> -->


  </section>
</div>
<footer>
<div class="row-fluid footer">

  <a href="#placementDon"><div style="background-color: #679FA6; height: 30px; width: 30px; padding: 8px; margin : 8px;" class="pull-right text-center">^</div></a>
  <div id="plan-site">
    <h4 class="text-center col-xs-12 col-md-12" onclick="affichageFooter('planSite');" id="titrePlanSite">Plan du site</h4>
    <div class="col-md-12 col-xs-12" id="planSite">
      <div class="row-fluid planDuSite">        

        <div class="col-md-2 col-sm-2">
          <h4><a href="index.php?p=posts.index">Accueil</a></h4>
        </div>
        <div class="col-md-2 col-sm-2">
          <h4><a href="index.php?p=presentations.index">Qui sommes nous?</a></h4>
          <h6><a href="index.php?p=presentations.index">Face Territoire Bourbonnais</a></h6>
          <h6><a href="#ancrepartenaires">Partenaires</a></h6>
        </div>
        <div class="col-md-2 col-sm-2">
          <h4><a href="index.php?p=actions.index">Actions</a></h4>

        </div>
        <div class="col-md-2 col-sm-2">
          <h4><a href="index.php?p=memberships.index">Nous rejoindre</a></h4>
        </div>  
          <div class="col-md-2 col-sm-2">
          <h4><a href="index.php?p=news.index">Presse</a></h4>
        </div>
        <div class="col-md-2 col-sm-2">
          <h4><a href="index.php?p=contacts.index">Contact</a></h4>
        </div>
      </div>
    </div>
    <div class="row" id="lienMentions">
      <p class="text-center"><a href="index.php?p=notices.index">Mentions légales</a></p>
    </div>

    </div>
  </footer>

<!--   <script src="js/jquery.js"></script> -->
  <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
  <script src="js/bootstrap.js "></script>
  <script type="text/javascript" src="js/script.js"></script>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>






</body>

</html>
