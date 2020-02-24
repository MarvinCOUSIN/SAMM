<!DOCTYPE html>
<html lang="fr">
<head>
  <title>SAMM - Entreprise de logiciels et développement</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="bootstrap-3.3.7/css/style.css" rel="stylesheet" type="text/css">
  <script src="bootstrap-3.3.7/js/jquery.min.js"></script>
  <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
  <script src="bootstrap-3.3.7/js/script.js"></script>
</head>
<body id="myBody" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="bootstrap-3.3.7/images/samm3.png" id="img" alt="logo-samm"></img>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">A PROPOS</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#temoignages">TEMOIGNAGES</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center" id="top">
  <h1 class="bleu">SAMM</h1> 
  <h1>
    <a href="" class="typewrite" data-period="3000" data-type='[ "Votre application sur mesure !", "Développement", "Conseils", "Formation"]'>
      <span class="wrap"></span>
    </a>
  </h1>
</div>

<!-- Section à propos -->
<div id="about" class="container-fluid">
  <div class="row vertical-align">
    <div class="col-sm-8">
      <h2>A propos de l'entreprise</h2><br>
      <h4 class="text-justify">Vous cherchez un logiciel sur mesure intégrant les contraintes de votre activité ? Faites appel à SAMM et confiez-nous le développement de votre application. Nous pouvons réaliser une interface complète ou intégrer des modules complémentaires à votre ERP :
      <ul style="font-size:14px">
      <br>
      <li>Ateliers de cadrage pour la compréhension du besoin</li>
        <li>Rédaction du cahier des charges</li>
        <li>Développement de l’application</li>
        <li>Livraison, mise en production</li>
        <li>Formation</li>
        <li>Assistance aux utilisateurs</li>
      </ul>
      </h4>
      <br>
    </div>
    <div class="col-sm-4">
      <img src="bootstrap-3.3.7/images/samm5.png" class="slideanim"></img>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
    <div>
      <span class="glyphicon glyphicon-star-empty logo slideanim"></span>
    </div>
    <div>
      <span class="glyphicon glyphicon-star logo slideanim" style="margin-left:50%;"></span> 
    </div>

    </div>
    <div class="col-sm-8">
      <h2>Nos valeurs</h2><br>
      <h3 class="text-justify"> Depuis 3 ans, SAMM est spécialisé dans le développement d’applications et de logiciels « sur mesure ».</h3>
      <br>
      <p class="text-justify">
      SAMM accompagne ses clients dans l’optimisation de leur système d'information afin d’améliorer leur performance économique. Nous créons des interfaces complètes ou complémentaires à votre système d’informations actuel tout en nous mettant à votre écoute pour assurer l’analyse des besoins, le développement, l’installation, la formation et la maintenance de vos applications. Nous utilisons des langages de programmation selon vos besoins.
      <br>
      SAMM assure à rechercher à tout prix la simplicité, valoriser votre établissement et développer des solutions qui améliorent efficacement votre gestion d’entreprise.
      </p>
    </div>
  </div>
</div>

<!-- Section Services -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-console logo-small"></span>
      <h4>Développement</h4>
      <p>Nous vous proposons de développer votre logiciel ou votre application sur mesure.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-user logo-small"></span>
      <h4>Conseils</h4>
      <p>Nous nous engageons à rester à votre écoute ainsi que de vous donner les meilleurs conseils. </p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-education logo-small"></span>
      <h4>Formations</h4>
      <p>Nous vous accompagnons pour vos changements de votre SI.</p>
    </div>
  </div>
</div>

<!-- Section Portfolio -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>Nos créations :</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="bootstrap-3.3.7/images/img1.png" alt="appli-mobile" width="400" height="300">
        <p><strong>Application mobile</strong></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="bootstrap-3.3.7/images/img2.png" alt="dashboard" width="400" height="300">
        <p><strong>Aide au pilotage projet</strong></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="bootstrap-3.3.7/images/img3.png" alt="site_vitrine" width="400" height="300">
        <p><strong>Site vitrine</strong></p>
      </div>
    </div>
  </div><br>
  </div>

<div class="container-fluid text-center" id="temoignages">
  <h2>Temoignages :</h2>
  <div id="Carousel-samm" class="carousel slide text-center" data-ride="carousel">
    <!-- Carousel Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#Carousel-samm" data-slide-to="0" class="active"></li>
      <li data-target="#Carousel-samm" data-slide-to="1"></li>
      <li data-target="#Carousel-samm" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Entreprise très réactive et à l'écoute de ses clients !"<br><span>Steve Jobs, Fondateur d'Apple</span></h4>
      </div>
      <div class="item">
        <h4>"Super contact, super équipe, bref l'entreprise SAMM !"<br><span>Bruce Lee, Fondateur du Jeet Kune Do</span></h4>
      </div>
      <div class="item">
        <h4>"En un mot... TOP !"<br><span>Florian Pichon, Formateur - Développeur - Webmarketing, OnSoft</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#Carousel-samm" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Précédent</span>
    </a>
    <a class="right carousel-control" href="#Carousel-samm" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Suivant</span>
    </a>
  </div>
</div>


<!-- Contact Section -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contacter-nous, nous vous répondrons sous 24H</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>12 rue du canvas 72000 Le Mans</p>
      <p><span class="glyphicon glyphicon-phone"></span>06 12 02 85 72</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Contact@Samm.fr</p>
      <a href="http://www.facebook.com" target="_blank"><img src="bootstrap-3.3.7/images/facebook.svg" alt="logo-facebook" style="width: 2em"></a>
      <a href="http://www.linkedin.com" target="_blank"><img src="bootstrap-3.3.7/images/linkedin.svg" alt="logo-linkedin" style="width: 2em"></a>
      <a href="http://www.twitter.com" target="_blank"><img src="bootstrap-3.3.7/images/twitter.svg" alt="logo-twitter" style="width: 2em"></a>
      <a href="http://www.instagram.com" target="_blank"><img src="bootstrap-3.3.7/images/instagram.svg" alt="logo-instagram" style="width: 2em"></a>
      
      
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="contact_name" name="name" placeholder="Nom" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="contact_email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="contact_comments" name="comments" placeholder="Commentaire" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Envoyer</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Image of location/map -->
<div class="container-fluid text-center">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2668.690504709532!2d0.1553949514010991!3d48.01968897911229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e28618116291d9%3A0xfcaa6dd1b2c248c2!2sCampus%20CESI!5e0!3m2!1sen!2sfr!4v1582551465308!5m2!1sen!2sfr" width="1100" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

</div>

<footer class="container-fluid text-center">
  <a href="#myBody" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>
</body>
</html>
