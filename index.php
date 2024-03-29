<?php
include_once('include/ControleurContact.php');
$controleur_contact = new ControleurContact();
$resultat = $controleur_contact->gerer();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/flickity.css" media="screen">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/carousel.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <title>AcceleRH</title>
  </head>
  <body>
        <a id="panel1" class="buttonStart" href="#firstPage">
          <i class="fas fa-angle-up"></i>
        </a>
    <img id="logoAccelerh" src="assets/images/logoAccelerh.svg" alt="accelerh">
    <ul class="pagination">
      <li>
        <a id="panel1" class="dashed first active" href="#AcceleRH">
          <div><span class="hover-text">AcceleRH - Logiciel RH innovant</span></div>
        </a>
      </li>
      <li>
        <a id="panel2" class="dashed" href="#Recrutements">
        <div><span class="hover-text">Simplifiez vos recrutements</span></div>
      </a>
    </li>
    <li>
      <a id="panel3" class="dashed" href="#Offres">
        <div><span class="hover-text">Multi-diffusion d'offres</span></div>
      </a>
    </li>
    <li>
      <a id="panel4" class="dashed" href="#Personnalisation">
        <div><span class="hover-text">Site de recrutement personnalisé</span></div>
      </a>
    </li>
    <li>
      <a id="panel5" class="dashed" href="#Candidatures">
        <div><span class="hover-text">Suivi et gestion des candidatures</span></div>
      </a>
    </li>
    <li>
      <a id="panel6" class="dashed" href="#CVthèque">
        <div><span class="hover-text">CVthèque</span></div>
      </a>
    </li>
    <li>
      <a id="panel7" class="dashed" href="#Equipe">
        <div><span class="hover-text">Recrutez en équipe</span></div>
      </a>
    </li>
    <li>
      <a id="panel8" class="" href="#Statistiques">
        <div><span class="hover-text">Statistiques</span></div>
      </a>
    </li>
    <!-- <li>
      <a id="panel9" class="" href="#9">
        <div><span class="hover-text">Nos clients</span></div>
      </a>
    </li> -->
  </ul>
    <section id="AcceleRH" class="scrollable-section" data-panel="panel1">
      <div style="" class="container">
        <div id="secondPanelGroup" class="panelGroup row">
          <div style="height:500px" class="offset-xl-2 offset-lg-1 col-12 col-lg-10 col-xl-8">

              <div class="row">
                <div class="col-12">
                  <img id="mainAccelerh" src="assets/images/accelerhMain.svg" alt="accelerh">
                </div>
              </div>
            <div class="row">
              <div class="col-12">
                <p class="titleParagraph1">Logiciel RH innovant</p>
                <p class="subTitleParagraph1">Simple d'utilisation qui vous permettra d'améliorer votre processus de recrutement</p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-3">
                <p class="subParagraphPanel1">Gérez vos recrutements</p>
                <img style="width:150px;margin-top:-20px" class="filter-color" src="assets/images/pictoUpload.svg" alt="horloge picto">
              </div>
              <div class="col-xs-12 col-sm-3">
                <p class="subParagraphPanel1">Multidiffusez vos offres</p>
                <img style="width:100px;margin-top:20px" class="filter-color" src="assets/images/pictoScreen.svg" alt="ressources humaines picto">
              </div>
              <div class="col-xs-12 col-sm-3">
                <p class="subParagraphPanel1">Gérez vos candidatures</p>
                <img style="width:150px;margin-top:-20px" class="filter-color" src="assets/images/pictoDownload.svg" alt="pourcentage picto">
              </div>
              <div class="col-xs-12 col-sm-3">
                <p class="subParagraphPanel1">Gérez votre <br> cvthèque</p>
                <img style="width:80px;margin-top:15px" class="filter-color" src="assets/images/pictoLoupe.svg" alt="pourcentage picto">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="Recrutements" class="panel2 scrollable-section" data-panel="panel2">
          <div style="" class="container">
            <div id="firstPanelGroup" class="panelGroup row">
              <div style="height:500px" class="offset-xl-2 offset-lg-1 col-12 col-lg-10 col-xl-8">
                <div class="row">
                  <div class="col-12">
                    <p class="titleParagraph2">Organisez et simplifiez</p>
                    <p class="subTitleParagraph2">votre activité de recrutement</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-4">
                    <p class="subParagraphPanel2">Gagnez du temps</p>
                    <img style="width:100px;margin-top:20px" class="filter-color" src="assets/images/timePicto.svg" alt="horloge picto">
                  </div>
                  <div class="col-xs-12 col-sm-4">
                    <p class="subParagraphPanel2">Centralisez vos actions</p>
                    <img class="filter-color" src="assets/images/rhPicto.png" alt="ressources humaines picto">
                  </div>
                  <div class="col-xs-12 col-sm-4">
                    <p class="subParagraphPanel2">Faites des economies</p>
                    <img class="filter-color" src="assets/images/pourcentPicto.svg" alt="pourcentage picto">
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
    <section id="Offres" class="panel3 scrollable-section" data-panel="panel3">
      <div style="" class="container">
        <div id="secondPanelGroup" class="panelGroup row">
          <div style="height:500px" class="offset-xl-2 offset-lg-1 col-12 col-lg-10 col-xl-8">
            <div style="--bs-gutter-x:0" class="row">
              <div class="offset-2 col-9 offset-sm-0 col-sm-12 col-xxl-6">
                <p class="multiDiffus title"><span id="yellowText">Multi-diffusez</span> <b>vos</b> <br>offres d'emploi / formation</p>
                <p class="multiDiffusText">
                  En <b>quelques clics</b>, créez vos annonces et publiez les d'un seul coup sur les sites de votre choix.
                  <br>Finie la corvée des comptes multiples, des identifiants perdus...
                  <br>Vos offres bénéficient d'une visibilité optimale en quelques secondes.
                </p>
              </div>
              <div class="col-12 col-xxl-6">
                <div class="grid">
                  <?php
                    for ($i=1; $i < 17 ; $i++) {
                    ?>
                    <span class="element-item"><img style="width:100%" src="assets/images/Entreprise1 (<?=$i?>).jpg" alt=""></span>
                    <?php
                    }
                    ?>
                 </div>
              </div>
              <button id="multiDiffusButton" type="button" name="button">Voir la liste complète</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="Personnalisation" class="panel4 scrollable-section" data-panel="panel4">
      <div style="" class="container">
        <div id="fourthPanelGroup" class="panelGroup row">
          <img id="createImage" class="img-fluid" src="assets/images/groupSection5Image.png" alt="">
          <div class="offset-2 col-9 offset-sm-3 col-sm-6 offset-xl-4 col-xl-4">
            <p class="createSite title">Créez votre<br> <b>site emploi</b> <span id="yellowText">sur-mesure</span></p>
            <hr style="color:rgba(227,206,68,1);width:75%">
            <p class="createSiteText">Valorisez votre marque employeur avec un site de recrutement personnalisé, <b>moderne et modulable !</b></p>
            <p class="createSiteText">Ce site est votre 1er contact avec le candidat, il faut qu'il soit à votre image, facile d'utilisation et performant pour attirer le plus de candidats.</p>
          </div>
        </div>
      </div>
    </section>
    <section id="Candidatures" class="panel5 scrollable-section" data-panel="panel5">
      <div id="fifthPanelGroup" class="panelGroup row">
        <img id="computerImage" class="img-fluid" src="assets/images/computerSection5.png" alt="">
        <div class="offset-2 offset-sm-0 col-9">
          <p class="uniquePlateform title">Gérez et suivez vos<br> candidatures simplement<br> <b>sur une </b><span class="greenText">plateforme unique</span></p>
          <p class="uniquePlateformText">
            Un tableau de bord complet et lisible vous<br> permet de visualiser, trier et qualifier les<b><br> candidatures reçues</b>.
            Définissez les étapes<br> de votre recrutement, automatisez l'envoi de<br> messages, commentez et historisez chaque action...<br>
            le tout sans votre ancien fichier excel !
          </p>
        </div>
      </div>
    </section>
    <section id="CVthèque" class="panel6 scrollable-section" data-panel="panel6">
        <div id="sixthPanelGroup" class="panelGroup row">
          <img id="groupImage" class="img-fluid" src="assets/images/groupSection7Image.png" alt="">
          <div class="offset-2 col-9 offset-sm-2 col-sm-4">
            <p class="cvtheque title">Vos candidatures dans <br><span class="greenText">votre cvthèque</span></p>
            <p class="cvthequeText">Toutes les candidatures reçues sont désormais centralisées !</p>
            <p class="cvthequeText"><b>Retrouvez facilement</b> les CVs à l'aide de filtres<br>et de mots-clés grâce à cet outil performant et<br>personnalisable.</p>
          </div>
        </div>
    </section>
    <section id="Equipe" class="panel7 scrollable-section" data-panel="panel7">
      <div id="fifthPanelGroup" class="panelGroup row">
        <img id="droitsImage" class="img-fluid" src="assets/images/groupSection8Image.png" alt="">
        <div class="offset-2 col-9 offset-sm-3 offset-md-0 col-sm-12">
        <p class="gestionDroits title">Travaillez en équipe et<br><span class="greenText">gérez les droits</span><b> de chacun</b></p>
        <p class="gestionDroitsText">
          Plateforme multi-utilisateurs, notre ATS permet
          <br>une gestion de droits avancés.
          <br> Vous souhaitez qu'un expert métier participe à
          <br> une étape du recrutement ? Pas de problèmes,
          <br> vous autorisez l'utilisation (ou non) des
          <br> fonctionnalités de l'outil comme vous le désirez
          <br> et attribuez des droits personnalisés à chacun !
        </p>
      </div>
      </div>
    </section>
    <section id="Statistiques" class="panel8 scrollable-section" data-panel="panel8">
        <div id="eighthPanelGroup" class="panelGroup">
          <img id="analyseImage" class="img-fluid" src="assets/images/groupSection9Image.png" alt="">
          <div class="offset-2 col-9 offset-sm-2 col-sm-4">
            <p class="activity title">Analysez et mesurez<br><span class="darkGreenText">votre activité</span></p>
            <p class="activityText">
              D'où proviennent vos candidatures ou vos
            <br> visiteurs ? Quels jobboards sont les plus
            <br> efficaces et rentables ? Obtenez des
            <br> statistiques précises et suivez leur
            <br> évolution pour optimisez le budget de
            <br> votre service.</p>
          </div>
        </div>
    </section>
    <!-- <section id="tenthPage" class="panel10 scrollable-section" data-panel="panel10">
      <div id="carouselPanel" class="panelGroup">
        <p class="ourClients">Ce qu'en pense nos clients</p>
        <div class="carousel-container">
          <div class="carousel-card" id="hidden-left">
            <img class="carousel-icon" src="assets/images/logoEntreprise1.png" alt="">
            <p class="carousel-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div id="truc">
              <img class="profilPicture" src="assets/images/visageClient1.png" alt="">
              <p class="banerText">Lorem ipsum dolor</p>
            </div>
          </div>
          <div class="carousel-card" id="left">
            <img class="carousel-icon" src="assets/images/logoEntreprise1.png" alt="">
            <p class="carousel-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div id="truc">
              <img class="profilPicture" src="assets/images/visageClient1.png" alt="">
              <p class="banerText">Lorem ipsum dolor</p>
            </div>
          </div>
          <div class="carousel-card" id="center">
            <img class="carousel-icon" src="assets/images/logoEntreprise1.png" alt="">
            <p class="carousel-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div id="truc">
              <img class="profilPicture" src="assets/images/visageClient1.png" alt="">
              <p class="banerText">Lorem ipsum dolor</p>
            </div>
          </div>
          <div class="carousel-card" id="right">
            <img class="carousel-icon" src="assets/images/logoEntreprise1.png" alt="">
            <p class="carousel-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div id="truc">
              <img class="profilPicture" src="assets/images/visageClient1.png" alt="">
              <p class="banerText">Lorem ipsum dolor</p>
            </div>
          </div>
          <div class="carousel-card" id="hidden-right">
            <img class="carousel-icon" src="assets/images/logoEntreprise1.png" alt="">
            <p class="carousel-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div id="truc">
              <img class="profilPicture" src="assets/images/visageClient1.png" alt="">
              <p class="banerText">Lorem ipsum dolor</p>
            </div>
          </div>
        </div>
      <div class="main-gallery">
        <div style="width:100%" class="gallery-cell">
          <div class="flickity-card">
            <img class="carousel-icon" src="assets/images/logoEntreprise1.png" alt="">
            <p class="carousel-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div id="truc">
              <img class="profilPicture" src="assets/images/visageClient1.png" alt="">
              <p class="banerText">Lorem ipsum dolor</p>
            </div>
          </div>
        </div>
        <div style="width:100%" class="gallery-cell">
          <div class="flickity-card">
            <img class="carousel-icon" src="assets/images/logoEntreprise1.png" alt="">
            <p class="carousel-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div id="truc">
              <img class="profilPicture" src="assets/images/visageClient1.png" alt="">
              <p class="banerText">Lorem ipsum dolor</p>
            </div>
          </div>
        </div>
            <div style="width:100%" class="gallery-cell">
              <div class="flickity-card">
                <img class="carousel-icon" src="assets/images/logoEntreprise1.png" alt="">
                <p class="carousel-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div id="truc">
                  <img class="profilPicture" src="assets/images/visageClient1.png" alt="">
                  <p class="banerText">Lorem ipsum dolor</p>
                </div>
              </div>
            </div>
            <div style="width:100%" class="gallery-cell">
              <div class="flickity-card">
                <img class="carousel-icon" src="assets/images/logoEntreprise1.png" alt="">
                <p class="carousel-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div id="truc">
                  <img class="profilPicture" src="assets/images/visageClient1.png" alt="">
                  <p class="banerText">Lorem ipsum dolor</p>
                </div>
              </div>
            </div>
              <div style="width:100%" class="gallery-cell">
                <div class="flickity-card">
                  <img class="carousel-icon" src="assets/images/logoEntreprise1.png" alt="">
                  <p class="carousel-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <div id="truc">
                    <img class="profilPicture" src="assets/images/visageClient1.png" alt="">
                    <p class="banerText">Lorem ipsum dolor</p>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </section> -->
    <div class="contactBar">
      <div id="closeForm" class="row">
        <div class="offset-10 col-2">
          <button type="button" name="button">X</button>
        </div>
      </div>
      <p id="callDemo">Demandez une démo</p>
      <div id="triangle-code"></div>
      <div class="container">
        <!-- <form method="POST" action="#contact">
          <div class="row">
            <div class="form-group col-12 offset-sm-2 col-sm-4">
              <label for="nom">Nom<span class="require">*</span></label>
              <input type="text" class="form-control" name="nom" placeholder="Nom">
            </div>
            <div class="form-group col-12 col-sm-4">
              <label for="societe">Société<span class="require">*</span></label>
              <input type="text" class="form-control" name="societe" placeholder="Société">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-12 offset-sm-2 col-sm-4">
              <label for="prenom">Prénom<span class="require">*</span></label>
              <input type="text" class="form-control" name="prenom" placeholder="Prénom">
              <label for="mail">E-mail Professionnel<span class="require">*</span></label>
              <input type="mail" class="form-control" name="mail" placeholder="E-mail Professionnel">
            </div>
            <div class="form-group col-12 col-sm-4">
              <label for="message">Message<span class="require">*</span></label>
              <textarea class="form-control" name="message" placeholder="Message" rows="3"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-12 offset-sm-2 col-sm-4">
              <label for="tel">Téléphone<span class="require">*</span></label>
              <input type="text" class="form-control" name="tel" placeholder="Numéro de téléphone">
              <input type="hidden" name="csrf">
              <div style="margin-top:20px" class="g-recaptcha" data-sitekey="6LdLq24aAAAAACAUYqhVahq74A2bnPrLW8YPuPcU"></div>
            </div>
            <div class=" col-12 col-sm-4">
              <button name="mailform" type="submit" class="btn btn-send">ENVOYER <i class="fas fa-paper-plane"></i></button>
            </div>
          </div>
        </form> -->
        <?= $resultat ?>
      </div>
    </div>
  </body>
  <footer>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/scrollify.js"></script>
    <script src="assets/js/flickity.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/carousel.js"></script>
  </footer>
</html>
