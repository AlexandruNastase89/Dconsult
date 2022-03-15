<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dconsult Romania - Dconsult.ro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/uikit.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <script src="/js/uikit.min.js"></script>
    <script src="/js/uikit-icons.min.js"></script>
    <link rel="shortcut icon" href="/img/favicon.png" type="image/png"/>
  </head>

  <body>

    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'].'/en/includes/header.inc.php'); ?>
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
                <h3 class="uk-margin-remove">Dconsult Romania</h3>
                <p class="uk-margin-remove"><br>We are a mediation company, offering real estate and juridical consulting services, among others. </p>
              </a>
            </div>
            <div class="uk-position-center uk-position-small uk-text-center my-slideshowParallax">
              <h2 class="uk-text-center uk-margin-auto uk-margin-auto-vertical" uk-parallax="target: #test-filter; blur: 0,60;">Join us for a successful collaboration and you will find that <br> we share the same vision of the future and business principles.</h2>
            </div>
          </li>
          <li>
            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-top-right">
              <img src="/img/image1.jpg" alt="" uk-cover>
            </div>
            <div class="uk-overlay uk-overlay-primary uk-position-center uk-text-center uk-transition-slide-top my-slideshowOverlay">
              <a class="my-slideshowOverlayAnchor" href="firme.php">
                <h3 class="uk-margin-remove">Financial Planning Solutions</h3>
                <p class="uk-margin-remove"><br>We offer our clients services for offshore company registration <br> as well as related services in safe, confidential and stable jurisdictions.</p>
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
          <h1 class="uk-heading-primary uk-text-center my-titleSize">About Us</h1>
        </div>

        <div class="uk-container" id="my-contentGridContainer">
          <div class="uk-child-width-1-4@m uk-child-width-1-2@s uk-grid-large" uk-grid>
            <div class="my-contentTextFormating uk-margin-large-top uk-margin-medium-bottom uk-dropcap">
              <p>I<strong>ntegrity, honesty, inventiveness, rigor and professionalism </strong> are the values that for us, the people working at <strong>Dconsult</strong>, are mere words but everyday reality. We are convinced that we will be able to turn these simple words into stable benchmarks for our entire activity.</p>
              <p>&emsp;We were born as a response to the dynamic evolution of the business market, in order to help our clients' interests in an increasingly complex world.</p>
            </div>

            <div class="my-contentTextFormating uk-margin-large-top uk-margin-medium-bottom uk-dropcap">
              <p>We are a young, inventive and ambitious team, for which high quality services are essential for a continuous development of the portfolio, and, above all, the satisfaction of our clients.</p>
              <p>&emsp;A special concern is the finding of new, creative solutions that meet the needs and requirements of our clients and comply with the legislation in force.</p>
            </div>

            <div class="my-contentTextFormating uk-margin-large-top uk-margin-medium-bottom uk-dropcap">
              <p>Our goal is to continue to work for our customers at the high standards we have set for ourselves, customizing our services for each customer.</p>
              <p>&emsp;We will promptly offer solutions to all your problems, and regardless of your situation, contacting our company will provide you with a prompt, honest and effective response.</p>
            </div>

            <div class="my-contentTextFormating uk-margin-large-top uk-margin-medium-bottom uk-dropcap">
              <p>We are fully committed to maintaining strict <strong>CONFIDENTIALITY</strong> in all situations regarding the advice given to our clients.</p>
              <p>&emsp;Our principles and vision are supported by the professionalism with which we understand to respond to our clients' requests for which we invite you to collaborate.</p>
              <!-- <p>&emsp;We are aware of the fact that our clients’ objectives can be achieved only through a long term relationship based on creativity and professionalism.</p> -->
            </div>
          </div>
        </div>
      </div>

<!-- End of Grid Content -->

    </section>

    <footer>
      <?php include($_SERVER['DOCUMENT_ROOT'].'/en/includes/footer.inc.php'); ?>
    </footer>
  </body>
</html>
