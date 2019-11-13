<!DOCTYPE html>
<html>
<!-- Mirrored from bootstrap4cc.github.io/free-horse-riding-club-theme/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Oct 2019 12:20:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="../../img/fav.html">
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
<link rel="stylesheet" href="../../css/linearicons.css">
<link rel="stylesheet" href="../../css/font-awesome.min.css">
<link rel="stylesheet" href="../../css/bootstrap.css">
<link rel="stylesheet" href="../../css/magnific-popup.css">
<link rel="stylesheet" href="../../css/nice-select.css">
<link rel="stylesheet" href="../../css/animate.min.css">
<link rel="stylesheet" href="../../code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="../../css/owl.carousel.css">
<link rel="stylesheet" href="../../css/main.css">
    <!--
    CSS CALENDRIER
    ============================================= -->
<link href='../packages/core/main.css' rel='stylesheet' />
<link href='../packages/daygrid/main.css' rel='stylesheet' />
<link href='../packages/timegrid/main.css' rel='stylesheet' />
<link href='../packages/list/main.css' rel='stylesheet' />
    <!--
    JS CALENDRIER
    ============================================= -->
<script src='../packages/core/main.js'></script>
<script src='../packages/core/locales-all.js'></script>
<script src='../packages/interaction/main.js'></script>
<script src='../packages/daygrid/main.js'></script>
<script src='../packages/timegrid/main.js'></script>
<script src='../packages/list/main.js'></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var initialLocaleCode = 'fr';
    var localeSelectorEl = document.getElementById('locale-selector');
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      defaultDate: '2019-11-03',
      locale: initialLocaleCode,
      buttonIcons: false, // show the prev/next text
      weekNumbers: true,
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          groupId: '1',
          title: 'nouveau',
          url: '',
          start: '2019-11-03',
          end: '2019-11-09',
          color: ''
        }
      ]
    });

    calendar.render();

    // build the locale selector's options
    calendar.getAvailableLocaleCodes().forEach(function(localeCode) {
      var optionEl = document.createElement('option');
      optionEl.value = localeCode;
      optionEl.selected = localeCode == initialLocaleCode;
      optionEl.innerText = localeCode;
      localeSelectorEl.appendChild(optionEl);
    });

    // when the selected option changes, dynamically change the calendar option
    localeSelectorEl.addEventListener('change', function() {
      if (this.value) {
        calendar.setOption('locale', this.value);
      }
    });

  });

</script>
<style>

  body {
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #top {
    background: #eee;
    border-bottom: 1px solid #ddd;
    padding: 0 10px;
    line-height: 40px;
    font-size: 12px;
  }

  #calendar {
    max-width: 900px;
    margin: 40px auto;
    padding: 0 10px;
  }

</style>
</head>
<body>
  <div class="container">
    <div class="row header-top align-items-center">
      <div class="col-lg-4 col-sm-4 menu-top-left">
        <a href="mailto:info@cheuclub.com"><span class="lnr lnr-location"></span></a>
        <a class="tel" href="mailto:info@cheuclub.com">info@cheuclub.com</a>
      </div>
      <div class="col-lg-4 menu-top-middle justify-content-center d-flex">
      <a href="../../index.html">
        <img class="img-fluid" src="../../img/logo.png" alt="">
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
          <li><a href="../../index.html">Accueil</a></li>
          <li><a href="../../about.html">À propos</a></li>
          <li><a href="../../service.html">Services</a></li>
          <li><a href="../../training.html">Entraînements</a></li>
          <li class="menu-active"><a href="activite.html">Activites</a></li>
          <li><a href="../../events.html">Événements</a></li>
          <li><a href="../../pricing.html">Prix</a></li>
          <li class="menu-has-children"><a href="#">Blog</a>
            <ul>
              <li><a href="../../blog-home.html">Blog Accueil</a></li>
              <li><a href="../../blog-single.html">Blog Single</a></li>
            </ul>
          </li>
          <li><a href="../../contact.html">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </div>

  <div id='top'>

    Locales:
    <select id='locale-selector'></select>

  </div>

  <div id='calendar'></div>

  <!-- start footer Area -->
  <footer class="footer-area section-gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h4>À Propos de nous</h4>
            <p>
              "TEXTE..."
            </p>
          </div>
        </div>
        <div class="col-lg-4  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h4>Contact</h4>
            <p>
              "TEXTE..."
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
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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
</html>
