 <div class="form-horizontal col-md-8 col-md-offset-2 col-xs-12">
  <section id="contactFace">
   <h4 class="text-center">FACE Territoire Bourbonnais </h4>
<?php foreach ($contact as $contact) : ?>

   <h5 class="text-center"><span class="glyphicon glyphicon-home"> : <?= $contact->address; ?></br></br>   
    <span class="text-center"><?= $contact->cp; ?></span></h5></span>
    <h4 class="text-center">Contact : </h4>
    <h5 class="text-center"><?= $contact->contactIdentity; ?></h5>
    <h5 class="text-center"><span class="glyphicon glyphicon-phone"> : <?= $contact->contactNumber; ?></span></h5>
    <h5 class="text-center"><span class="glyphicon glyphicon-envelope"> : <?=$contact->contactMail; ?></span></h5>
<?php endforeach ?>
  </section>
</div>
</section>
</div>

















