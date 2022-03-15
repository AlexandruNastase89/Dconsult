<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dconsult Roumanie - Dconsult.ro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/uikit.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <script src="/js/uikit.min.js"></script>
    <script src="/js/uikit-icons.min.js"></script>
    <link rel="shortcut icon" href="/img/favicon.png" type="image/png"/>
  </head>

  <body>

    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'].'/fr/includes/header.inc.php'); ?>
    </header>

    <section>

<!-- Start of Slideshow -->

      <div class="uk-position-relative uk-visible-toggle uk-light my-slideShowTop" uk-slideshow="autoplay: true; autoplay-interval: 8000; pause-on-hover: false; ratio: 7:3.15; animation: push">

        <ul class="uk-slideshow-items" uk-height-viewport="offset-top: true; offset-bottom: 0">
          <li>
            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
              <img src="/img/image2.jpg" alt="" uk-cover>
            </div>
            <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
              <a class="my-slideshowOverlayAnchor" href="#desprenoi" uk-scroll>
                <h3 class="uk-margin-remove">Dconsult Roumanie</h3>
                <p class="uk-margin-remove"><br>Notre compagnie offre des services de médiation, conseil en immobilier et juridique, auprès d'autres services.</p>
              </a>
            </div>
            <div class="uk-position-center uk-position-small uk-text-center my-slideshowParallax">
              <h2 class="uk-text-center uk-margin-auto uk-margin-auto-vertical" uk-parallax="target: #test-filter; blur: 0,60;">Rejoignez-nous pour une collaboration réussie et vous constaterez que <br> nous partageons la même vision de l'avenir et les principes commerciaux.</h2>
            </div>
          </li>
          <li>
            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-top-right">
              <img src="/img/image1.jpg" alt="" uk-cover>
            </div>
            <div class="uk-overlay uk-overlay-primary uk-position-center uk-text-center uk-transition-slide-top my-slideshowOverlay">
              <a class="my-slideshowOverlayAnchor" href="firme.php">
                <h3 class="uk-margin-remove">Solutions de Planification Fiscale</h3>
                <p class="uk-margin-remove"><br>Nous aidons nos clients à enregistrer des compagnies offshore, <br> avec une offre de services connexes  dans des juridictions sûres, confidentielles et stables.</p>
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
          <h1 class="uk-heading-primary uk-text-center my-titleSize">Qui sommes nous</h1>
        </div>

        <div class="uk-container" id="my-contentGridContainer">
          <div class="uk-child-width-1-4@m uk-child-width-1-2@s uk-grid-large" uk-grid>
            <div class="my-contentTextFormating uk-margin-large-top uk-margin-medium-bottom uk-dropcap">
              <p>I<strong>ntégrité, honnêteté, inventivité, rigueur et professionnalisme </strong> sont les valeurs qui, pour nous, les personnes travaillant chez <strong>Dconsult</strong>, ne sont que des mots mais une réalité quotidienne. Nous sommes convaincus que nous pourrons transformer ces mots simples en points de repère stables pour l’ensemble de notre activité.</p>
              <p>&emsp;Notre compagnie a été établie comme une réponse au marche financier qui este de plus en plus dynamique.</p>
            </div>

            <div class="my-contentTextFormating uk-margin-large-top uk-margin-medium-bottom uk-dropcap">
              <p>Nous sommes une équipe jeune, inventive et ambitieuse, ayant pour but d’assurer des services professionnels pour un développement continu du portfolio et surtout pour satisfaire nos clients.</p>
              <p>&emsp;Notre but est d'aider nos clients à atteindre une certaine liberté financière et de protéger leurs intérêts et capitaux en augmentant leurs économies et limitant les taxes outrancières.</p>
            </div>

            <div class="my-contentTextFormating uk-margin-large-top uk-margin-medium-bottom uk-dropcap">
              <p>Nous sommes conscients du fait que atteindre les objectifs de nos clients nécessite de I’esprit constructif, de la creativité aussi qu’une bonne relation a long terme.</p>
              <p>&emsp;Nous vous aidons professionnellement, rapidement et légitimement à résoudre vos problèmes, indifféremment de leur nature.</p>
            </div>

            <div class="my-contentTextFormating uk-margin-large-top uk-margin-medium-bottom uk-dropcap">
              <p>La sécurité et confidentialité sont votre droit. Nous obéissons à une politique stricte sur la confidentialité et l’anonymat en relation avec nos clients.</p>
              <p>&emsp;Si vous recherchez la gamme complete des services offshore, souhaitez recevoir des conseils de défiscalisation, alors vous vœux sont exaucés!</p>
            </div>
          </div>
        </div>
      </div>

<!-- End of Grid Content -->

    </section>

    <footer>
      <?php include($_SERVER['DOCUMENT_ROOT'].'/fr/includes/footer.inc.php'); ?>
    </footer>
  </body>
</html>
