<?php $title = 'Redaction article'; ?>
<?php $background_image = '/test2/img/home-bg.jpg'; ?>
<?php $h1title = '<h1>Développeur Web Freelance</h1>'; ?>
<?php $h2title = 'Développeur / Intégrateur WEB indépendant
Création de sites Internet sur mesure'; ?>




<?php ob_start(); ?>


    <!-- Compétences -->

  <div id="Competences" class="text-center">
   <div class="container">
    <div class="section-title center">
      <h2> <a class="btn btn-primary " href="http://127.0.0.1/cleanblog/exemple.pdf">MON CV TÉLÉCHARGEABLE</a> </h2> <br/>
     <h2>Un aperçu de mes compétences</h2>
     <div class="line">
      <hr>
     </div>
    </div>
    <div class="space"></div>
    <div class="row">
     <div class="col-md-3 col-sm-6 service">
      <i class="fa fa-desktop"></i>
      <h4>Web Design</h4>
      <p>Car le design est très important de nos jours.</p>
     </div>
     <div class="col-md-3 col-sm-6 service">
      <i class="fa fa-mobile"></i>
      <h4>Mobile ready</h4>
      <p>Car la navigation Web sur mobile est de plus en plus présente, tous nos sites sont dit "responsive".</p>
     </div>
     <div class="col-md-3 col-sm-6 service">
      <i class="fa fa-desktop"></i>
      <h4>Wordpress</h4>
      <p>Maintenez votre site à jour facilement grâce à Wordpress.</p>
     </div>
     <div class="col-md-3 col-sm-6 service">
      <i class="fa fa-code"></i>
      <h4>PHP</h4>
      <p>Rendez votre site web dynamique tout en le mettant en relation avec une base de données.</p>
     </div>
    </div>
   </div>
  </div>
  <br/>


    <!-- header contact -->
 
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Contactez Moi</h1>
              <span class="subheading">Une question ?</span>
            </div>
          </div>
        </div>
      </div>
    </header>


    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>Je répondrai  toutes vos questions</p>
          <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
          <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
          <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Nom</label>
                <input type="text" class="form-control" placeholder="Nom" id="name" required data-validation-required-message="Entrer votre nom.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Adresse Mail</label>
                <input type="email" class="form-control" placeholder="Adresse Mail" id="email" required data-validation-required-message="entrer une adresse mail valide.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Numéro de téléphone</label>
                <input type="tel" class="form-control" placeholder="Numéro de téléphone" id="phone" required data-validation-required-message="Entrer un numéro valide.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Message</label>
                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="entrer votre message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" id="sendMessageButton">ENVOYER</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <hr>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

