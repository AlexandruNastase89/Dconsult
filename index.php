<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dconsult România - Dconsult.ro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/uikit.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <script src="/js/uikit.min.js"></script>
    <script src="/js/uikit-icons.min.js"></script>
    <link rel="shortcut icon" href="/img/favicon.png" type="image/png"/>
  </head>

  <body>

    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header.inc.php'); ?>
    </header>

    <section>

<!-- Start of Slideshow -->

      <div class="uk-position-relative uk-visible-toggle uk-light my-slideShowTop" uk-slideshow="autoplay: true; autoplay-interval: 8000; pause-on-hover: false; animation: push">

        <ul class="uk-slideshow-items" uk-height-viewport="offset-top: true; offset-bottom: 0">
          <li>
            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
              <img src="/img/image2.jpg" alt="" uk-cover>
            </div>
            <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
              <a class="my-slideshowOverlayAnchor" href="#desprenoi" uk-scroll>
                <h3 class="uk-margin-remove">Dconsult România</h3>
                <p class="uk-margin-remove"><br>Suntem o companie de intermediere, consultanță imobiliară, consultanță juridică și nu numai.</p>
              </a>
            </div>
            <div class="uk-position-center uk-position-small uk-text-center my-slideshowParallax">
              <h2 class="uk-text-center uk-margin-auto uk-margin-auto-vertical" uk-parallax="target: #test-filter; blur: 0,60;">"A şti să iei o hotărâre este o mare artă."</h2>
              <p class="uk-text-center uk-margin-auto uk-margin-auto-vertical" uk-parallax="target: #test-filter; blur: 0,90;">Stendhal</p>
            </div>
          </li>
          <li>
            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-top-right">
              <img src="/img/image1.jpg" alt="" uk-cover>
            </div>
            <div class="uk-overlay uk-overlay-primary uk-position-center uk-text-center uk-transition-slide-top my-slideshowOverlay">
              <a class="my-slideshowOverlayAnchor" href="firme.php">
                <h3 class="uk-margin-remove">Soluţii Planificare Fiscală</h3>
                <p class="uk-margin-remove"><br>Furnizăm clienţilor servicii de înmatriculare a companiilor offshore <br> precum și servicii conexe în jurisdicţii sigure, confidenţiale și stabile.</p>
              </a>
            <div>
          </li>
        </ul>

        <a class="uk-slidenav-large uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-slidenav-large uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

      </div>

<!-- End of slideshow -->

      <h1 id="desprenoi"></h1> <!-- Bookmark -->

<!-- Start Grid Content -->

      <div class="uk-section uk-padding-remove-top">
        <div class="uk-container uk-align-center">
          <h1 class="uk-heading-primary uk-text-center my-titleSize">Despre Noi</h1>
        </div>

        <div class="uk-container" id="my-contentGridContainer">
          <div class="uk-child-width-1-4@m uk-child-width-1-2@s uk-grid-large" uk-grid>
            <div class="my-contentTextFormating uk-margin-large-top uk-margin-medium-bottom uk-dropcap">
              <p>I<strong>ntegritatea, Onestitatea, Inventivitatea, Exigența și Profesionalismul</strong> sunt valorile incontestabile pe care noi, oamenii de la <strong>Dconsult</strong>, suntem convinşi că vom reuşi să le transformăm din simple cuvinte în repere stabile, definitorii pentru întreaga noastră activitate.</p>
              <p>&emsp;Ne-am născut ca un răspuns la evoluţia dinamică pe care o înregistrează piaţa afacerilor și de a servi interesele clienţilor noştri într-o lume din ce în ce mai complexă.</p>
            </div>

            <div class="my-contentTextFormating uk-margin-large-top uk-margin-medium-bottom uk-dropcap">
              <p>Suntem o echipă tânără, inventivă și ambiţioasă iar pentru noi serviciile de înaltă calitate pe care le oferim înseamnă o dezvoltare permanentă a portofoliului și, în mod special, satisfacerea cerinţelor clienţilor noştri.</p>
              <p>&emsp;O preocupare deosebită o constituie găsirea de soluţii noi, creatoare, care să răspundă necesitaţilor și cerinţelor clienţilor și să fie în conformitate cu legislaţia în vigoare.</p>
            </div>

            <div class="my-contentTextFormating uk-margin-large-top uk-margin-medium-bottom uk-dropcap">
              <p>Scopul nostru este de a continua să lucrăm pentru clienţii noştri la standardele înalte pe care le-am stabilit pentru noi înşine, personalizând serviciile noastre pentru fiecare client.</p>
              <p>&emsp;Găsim soluţii pentru toate problemele de care vă loviţi, și indifferent de situaţia dumneavoastră, contactarea companiei noastre vă va asigura un răspuns prompt, onest și eficient.</p>
            </div>

            <div class="my-contentTextFormating uk-margin-large-top uk-margin-medium-bottom uk-dropcap">
              <p>Suntem pe deplin angajaţi să menţinem <strong>CONFIDENȚIALITATEA</strong> strictă în toate relațiile de comunicare referitoare la consultanța acordată clienţilor noştri.</p>
              <p>&emsp;Principiile și viziunea noastră sunt susţinute de profesionalismul cu care înţelegem să răspundem solicitărilor clienţilor noştri drept pentru care vă invităm să colaborăm.</p>
              <!-- <p>&emsp;Suntem conştienţi că obiectivele clienţilor noştri pot fi realizate numai prin  creativitate, spirit constructiv și o relaţie bună pe termen lung.</p> -->
            </div>
          </div>
        </div>
      </div>

<!-- End of Grid Content -->

    </section>

    <footer>
      <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.inc.php'); ?>
    </footer>
  </body>
</html>
