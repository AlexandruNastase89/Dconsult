<!-- Desktop Navbar -->
<div id="my-navbarOnDesktop">
  <div uk-sticky class="my-navbarBackground">
    <div class="uk-text-center" uk-grid>

      <!-- Logo -->

      <div class="uk-width-auto my-navbarLogoContainerMarginLeft">
        <a class="uk-navbar-item uk-margin-large-left uk-margin-small-right my-navbarHeight" href="/index.php">
          <img src="/img/logo/logo.svg" id="my-navbarLogo" alt="Company Logo">
        </a>
      </div>

      <!-- Menu -->

      <div class="uk-width-expand uk-align-center uk-margin-remove" uk-navbar>
        <ul class="uk-navbar-nav uk-navbar-center uk-margin-small-left uk-margin-small-right">
          <li>
            <a class="my-navbarMenu my-navbarHeight" href="index.php#desprenoi">Despre Noi</a>
          </li>
          <li>
            <a class="my-navbarMenu my-navbarHeight" href="investitii.php">Soluții<br>Investiționale</a>
            <div class="uk-navbar-dropdown uk-padding-small">
              <ul class="uk-nav uk-navbar-dropdown-nav">
                <li>
                  <a class="my-navbarDropDown" href="investitii.php#imobiliare">Investiții Imobiliare</a>
                </li>
                <li>
                  <a class="my-navbarDropDown" href="investitii.php#agricultura">Investiții în Agricultură</a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a class="my-navbarMenu my-navbarHeight" href="firme.php">Soluţii<br>Planificare Fiscală</a>
            <div class="uk-navbar-dropdown uk-padding-small">
              <ul class="uk-nav uk-navbar-dropdown-nav">
                <li>
                  <a class="my-navbarDropDown" href="firme.php">Firme Offshore</a>
                </li>
                <li>
                  <a class="my-navbarDropDown" href="firme.php#intrebari">Întrebări frecvente</a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a class="my-navbarMenu my-navbarHeight" href="consultanta.php">Consultanță<br>Juridică</a>
          </li>
          <li>
            <a class="my-navbarMenu my-navbarHeight" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>

      <!-- Language -->

      <div class="uk-width-auto">
        <ul class="uk-navbar-nav uk-margin-medium-right my-navbarLangMarginRight">
          <li><a class="my-navbarHeight" href="/index.php"><img id="my-navbarLangIcon" src="/img/romania.png" alt=""></a></li>
          <li><a class="my-navbarHeight" href="/en/index.php"><img id="my-navbarLangIcon" src="/img/united-states.png" alt=""></a></li>
          <li><a class="my-navbarHeight" href="/fr/index.php"><img id="my-navbarLangIcon" src="/img/france.png" alt=""></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Mobile Navbar -->

<div id="my-navbarOnMobile">
  <div uk-sticky class="my-navbarBackground">
    <div class="uk-text-center" uk-grid>
      <!-- Menu Toggle -->
      <div class="uk-width-1-2">
        <div class="uk-align-center uk-margin-remove-top">
          <a class="uk-navbar-toggle my-navbarHeight" id="my-mobileMenuToggle" href="#" uk-toggle="target: #offcanvas-nav-primary">
            <span id="my-navbarToggleIconScale" uk-navbar-toggle-icon></span> <span class="uk-margin-small-left"></span>
          </a>
        </div>
      </div>
      <!-- Logo -->
      <div class="uk-width-1-2 uk-padding-remove-left">
        <div class="uk-align-center uk-margin-remove-top uk-margin-small-right">
          <a class="uk-navbar-item my-navbarHeight" href="/index.php">
            <img src="/img/logo/logo.svg" id="my-navbarLogo" alt="Company Logo">
          </a>
        </div>
      </div>
    </div>

      <!-- Offcanvas menu -->

    <div id="offcanvas-nav-primary" uk-offcanvas="overlay: true">
      <div class="uk-offcanvas-bar uk-flex uk-flex-column">
        <!-- Language icons -->
        <div class="uk-align-center uk-margin-medium-top">
          <ul class="uk-navbar-nav">
            <li><a href="/index.php"><img id="my-navbarLangIcon" src="/img/romania.png" alt=""></a></li>
            <li><a href="/en/index.php"><img id="my-navbarLangIcon" src="/img/united-states.png" alt=""></a></li>
            <li><a href="/fr/index.php"><img id="my-navbarLangIcon" src="/img/france.png" alt=""></a></li>
          </ul>
        </div>
        <!-- Menu links -->
        <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
          <li class="uk-parent"><a href="/index.php#desprenoi">Despre Noi</a></li>
          <li class="uk-parent">
            <a href="investitii.php">Soluţii investiționale</a>
            <ul class="uk-nav-sub">
              <li><a href="investitii.php#imobiliare">Investiții Imobiliare</a></li>
              <li><a href="investitii.php#agricultura">Investiții în Agricultură</a></li>
            </ul>
          </li>
          <li class="uk-parent">
            <a href="firme.php">Soluţii Planificare Fiscală</a>
            <ul class="uk-nav-sub">
              <li><a href="firme.php#offshore">Firme Offshore</a></li>
              <li><a href="firme.php#intrebari">Întrebări frecvente</a></li>
            </ul>
          </li>
          <li class="uk-parent"><a href="consultanta.php">Consultanță Juridică</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
