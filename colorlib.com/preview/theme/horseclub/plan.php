<!DOCTYPE html>
<?php
  session_start();
?>
<html lang="zxx" class="no-js">

<!-- Mirrored from bootstrap4cc.github.io/free-horse-riding-club-theme/pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Oct 2019 12:20:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.html">
  <!-- Author Meta -->
  <meta name="author" content="codepixer">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Horse Club</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="../../code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>

      <header id="header" id="home">
        <div class="container">
          <div class="row header-top align-items-center">
            <div class="col-lg-4 col-sm-4 menu-top-left">
              <a href="mailto:info@cheuclub.com"><span class="lnr lnr-location"></span></a>
              <a class="tel" href="mailto:info@cheuclub.com">info@cheuclub.com</a>
            </div>
            <div class="col-lg-4 menu-top-middle justify-content-center d-flex">
            <a href="index.html">
              <img class="img-fluid" src="img/logo.png" alt="">
            </a>
            </div>
            <div class="col-lg-4 col-sm-4 menu-top-right">
              <a class="tel" href="tel:0612120054">06.12.12.00.54</a>
              <a href="tel:0612120054"><span class="lnr lnr-phone-handset"></span></a>
            </div>
          </div>
        </div>
          <hr>
        <div class="container">
          <div class="row align-items-center justify-content-center d-flex">
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <?php
                if (isset($_SESSION['id'])) {
                  ?>
                  <li><a href="index">Accueil</a></li>
                  <li><a href="about">À propos</a></li>
                  <li><a href="service">Services</a>
                    <ul>
                      <li><a href="training">Entraînements</a></li>
                      <li><a href="calendrier/exemples/activite">Activités</a></li>
                      <li><a href="stages">Stages</a></li>
                      <li><a href="balades">Balades</a></li>
                      <li><a href="events">Événements</a></li>
                    </li>
                  </ul>
                  <li class="menu-active"><a href="pricing">Prix</a></li>
                  <li><a href="contact">Contact</a></li>
                    <li><a href="connexion\modifier-profil">Mon Compte</a>
                      <ul>
                  <li><a href="connexion\modifier-profil">Profil</a></li>
                  <li><a href="panel">Pannel Admin</a></li>
                  <li><a href="connexion\deconnexion">Déconnection</a></li>
                </li>
                      </ul>
                    <?php
                  }
                    else {
                      ?>
                      <li><a href="index">Accueil</a></li>
                      <li><a href="about">À propos</a></li>
                      <li><a href="service">Services</a>
                        <ul>
                          <li><a href="training">Entraînements</a></li>
                          <li><a href="calendrier/exemples/activite">Activités</a></li>
                          <li><a href="stages">Stages</a></li>
                          <li><a href="balades">Balades</a></li>
                          <li><a href="events">Événements</a></li>
                        </li>
                      </ul>
                      <li><a href="pricing">Prix</a></li>
                      <li><a href="contact">Contact</a></li>
                <li><a href="connexion\connexion">Connection</a></li>
                <?php
                  }
                ?>
              </ul>
            </nav><!-- #nav-menu-container -->
          </div>
        </div>
      </header><!-- #header -->

    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="about-content col-lg-12">
            <h1 class="text-white">
              Voici Notre Plan
            </h1>
            <p class="text-white link-nav"><a href="index.html">Accueil </a>  <span class="lnr lnr-arrow-right"></span>  <a href="plan.php">Plans</a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- End banner Area -->

    <!-- Start price Area -->
    <section class="price-area section-gap">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="menu-content pb-70 col-lg-8">
            <div class="title text-center">


              <h1 class="mb-10">Voici nos Disponibilités</h1>

              <br><br>


              <table border="9" cellpadding="2.5" cellspacing="1" width="100%">

               <tr>
                <p class="calcoul">
                  <th width="20%" style="color:#000552">4 écuries</th>
                  <th width="20%" style="color:#C40101">Chambres Disponibles</th>
                  <th width="20%" style="color:#C40101">m² Disponibles</th>
                  <th width="20%" style="color:#C40101">PRIX/1Chambre</th>
                  <th width="20%" style="color:#C40101">PRIX/m²</th>
               </tr>

               <tr>
                  <th width="20%" style="color:#83A697">1 écurie</th>
                  <td>8</td>
                  <td>1300 m²</td>
                  <td>50 EUROS</td>
                  <td>36 EUROS</td>
               </tr>

               <tr>
                  <th width="20%" style="color:#83A697">2ème écurie</th>
                  <td style="color:#FF001F">18</td>
                  <td style="color:#FF001F">300 m²</td>
                  <td style="color:#FF001F">56 EUROS</td>
                  <td style="color:#FF001F">41 EUROS</td>

               </tr>
               <tr>
                  <th width="20%" style="color:#83A697">3ème écurie</th>
                  <td>13</td>
                  <td>500 m²</td>
                  <td>62 EUROS</td>
                  <td>50 EUROS </td>
               </tr>


               <tr>
                  <th width="20%" style="color:#83A697">4ème écurie </th>
                  <td style="color:#FF001F">6</td>
                  <td style="color:#FF001F">3500 m²</td>
                  <td style="color:#FF001F">70 EUROS</td>
                  <td style="color:#FF001F">56 EUROS</td>
               </tr>

            </table>
            <br><br>
            <br><br>

            <br><br><br>
            <h1> Voici Le Plan </h1>
            <img class="plan-picture" src="img\plan.jpg">

          <iframe class="snapiframe" onload="this.style.visibility = 'visible';" src="https://satellites.pro/carte_de_Brive-la-Gaillarde" width="710" height="300" scrolling="auto" style="visibility:hidden;border-width:6px;border-style:double;border-color:#F17030;">Ohhhh No! Your browser does not support iframes.</iframe>

            </div>
          </div>
        </div>

    </section>
    <!-- End price Area -->

    <!-- Start booking Area -->
    <section class="booking-area section-gap relative" id="consultancy">
    <div class="overlay overlay-bg"></div>
    <div class="container">
    <div class="row justify-content-between align-items-center">
    <div class="col-lg-6 col-md-6 booking-left">
    <div class="active-review-carusel">
    <div class="single-carusel">
    <img src="img/r1.png" alt="">
    <div class="title justify-content-start d-flex">
    <h4>Fannie Rowe</h4>
    <div class="star">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    </div>
    </div>
    <p>
    Très bon site ! :)
    </p>
    <img src="img/r2.png" alt="">
    <div class="title justify-content-start d-flex">
    <h4>Hulda Sutton</h4>
    <div class="star">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    </div>
    </div>
    <p>
    Que des personnes aimables dans le centre équestre ;)
    </p>
    </div>
    <div class="single-carusel">
    <img src="img/r1.png" alt="">
    <div class="title justify-content-start d-flex">
    <h4>Fannie Rowe</h4>
    <div class="star">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    </div>
    </div>
    <p>
    Les prix sont convenables !!!!!!!!
    </p>
    <img src="img/r2.png" alt="">
    <div class="title justify-content-start d-flex">
    <h4>Hulda Sutton</h4>
    <div class="star">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    </div>
    </div>
    <p>
    Le site est très classe ;)
    </p>
    </div>
    <div class="single-carusel">
    <img src="img/r1.png" alt="">
    <div class="title justify-content-start d-flex">
    <h4>Fannie Rowe</h4>
    <div class="star">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    </div>
    </div>
    <p>
    Le centre équestre est parfait pour tout le monde !
    </p>
    <img src="img/r2.png" alt="">
    <div class="title justify-content-start d-flex">
    <h4>Hulda Sutton</h4>
    <div class="star">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    </div>
    </div>
    <p>
    Que des personnes aimables :)
    </p>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 booking-right">
    <h4 class="mb-20">Formulaire de Rendez-vous</h4>
    <form action="#">
    <input class="form-control" type="text" name="name" placeholder="Votre nom..." required>
    <input class="form-control" type="email" name="email" placeholder="Votre Email..." required>
    <input class="form-control" type="text" name="phone" placeholder="Tél..." required>
    <div class="input-group dates-wrap">
    <input id="datepicker" class="dates form-control" id="exampleAmount" placeholder="Date & heure" type="text">
     <div class="input-group-prepend">
    <span class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
    </div>
    </div>
    <textarea class="common-textarea form-control mt-10" name="message" placeholder="Message..." onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''" onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Messege'" data-cf-modified-7dbdb0edc011d2b308b8e55e-=""></textarea>
    <button class="btn btn-default btn-lg btn-block text-center">Réserver maintenant !</button>
    </form>
    </div>
    </div>
    </div>
    </section>
    <!-- End booking Area -->

    <!-- start footer Area -->
    <footer class="footer-area section-gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-3  col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h4>À Propos de nous</h4>
              <p>
                Le centre équestre met à votre disposition des infrastructures sécurisées qui vous permettront de monter à cheval même en hiver grâce au grand manège couvert. Deux monitrices Brevet d’État sont à l’écoute de vos attentes pour vous faire progresser et atteindre vos objectifs.
              </p>
            </div>
          </div>
          <div class="col-lg-4  col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h4>Contact</h4>
              <p>
                Centre équestre de Brive <br><br>
                Avenue Jean Mirabot, <br><br> 19100 Brive-la-Gaillarde
              </p>
              <p class="number">
                06-56-78-87-45 <br>
                06-56-34-74-12
              </p>
            </div>
          </div>
          <div class="col-lg-5  col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h4>Newsletter</h4>
              <p>Vous pouvez nous faire confiance. Nous n'envoyons que des offres, pas un seul spam.</p>
              <div class="d-flex flex-row" id="mc_embed_signup">


                  <form class="navbar-form" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
                    <div class="input-group add-on align-items-center d-flex">
                        <input class="form-control" name="EMAIL" placeholder="Adresse Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adresse Email'" required="" type="email">
                    <div style="position: absolute; left: -5000px;">
                      <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                    </div>
                      <div class="input-group-btn">
                        <button class="genric-btn"><span class="lnr lnr-arrow-right"></span></button>
                      </div>
                    </div>
                      <div class="info mt-20"></div>
                  </form>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom row">
          <p class="footer-text m-0 col-lg-6 col-md-12">

          </p>
          <div class="footer-social col-lg-6 col-md-12">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-behance"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <!-- End footer Area -->

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
      <script src="js/easing.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="../../code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>
  </body>

<!-- Mirrored from bootstrap4cc.github.io/free-horse-riding-club-theme/pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Oct 2019 12:20:54 GMT -->
</html>
