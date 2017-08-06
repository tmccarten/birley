<body>

  <p class="hide-skip"> <!-- Skip links -->
    <a href="#skipnav" title="Skip to the content">Skip to content</a>
    <a href="#skiptonav" title="Skip to the navigation">Skip to navigation</a>
  </p>

<div class="site-wrapper">

  <header class="header">
    <div class="header__top">

      <a href="<?php echo $linkHome; ?>" class="logo"><h1 class="visuallyhidden">Living Lines: Birley Archive Project</h1></a>

      <button id="buttonMenu" class="button__menu" ></button>

      <ul class="about-contact" id="skiptonav">
        <li class="about-contact__item"><a href="<?php echo $linkAbout; ?>" class="about-contact__link <?php if ($activePage === "About") {echo 'current'; }?>">About</a></li>
        <li class="about-contact__item"><a href="http://www.art.mmu.ac.uk/contactus/" class="about-contact__link <?php if ($activePage === "Contact") {echo 'current'; }?>">Contact</a></li>
      </ul>

    </div><!-- top-wrap ends -->

    <div class="header__nav">

      <nav class="main-nav">
        <ul class="main-nav__items">

          <li class="main-nav__about-contact">
            <ul>
              <li class="about-contact__item"><a href="<?php echo $linkAbout; ?>" class="about-contact__link <?php if ($activePage === "About") {echo 'current'; }?>">About</a></li>
              <li class="about-contact__item"><a href="http://www.art.mmu.ac.uk/contactus/" class="about-contact__link <?php if ($activePage === "Contact") {echo 'current'; }?>">Contact</a></li>
            </ul>
          </li>

          <li class="main-nav__item">
            <a href="<?php echo $linkHome; ?>" class="main-nav__link main-nav__link--home <?php if ($activePage === "Home") {echo 'current'; }?>">
            <div class="visuallyhidden">Home</div>
            </a>
          </li><!-- Home ends -->

          <li class="main-nav__item parent-item">
            <a href="javascript:;" class="main-nav__link main-nav__link--site <?php if ($activePage === "Site") {echo 'current'; }?> parent">
              <div class="visuallyhidden">The Site</div>
              <svg class="parent-icon" xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="-837.305 421.336 11 10">
              <path d="M-831.83 426.92c-.26 0-.45-.14-.52-.2-.67-.48-1.27-1.05-1.84-1.6l-2.87-2.78c-.23-.2-.23-.57-.02-.8.23-.22.6-.23.8 0l2.9 2.76c.5.5 1 .98 1.54 1.4 1.56-1.42 3.1-2.8 4.6-4.22.24-.2.6-.2.8.04.22.23.2.6-.03.8-1.57 1.46-3.16 2.9-4.76 4.35-.08.07-.24.2-.48.24-.03.02-.06.02-.1.02z"/>
              <path d="M-832.15 431.34c-.24 0-.42-.13-.5-.17-1.37-.95-2.43-2.23-3.45-3.46l-1.07-1.3c-.2-.23-.17-.6.07-.8.24-.2.6-.15.8.1l1.07 1.3c.93 1.1 1.9 2.27 3.07 3.12.16-.1.3-.18.45-.24.1-.06.23-.1.34-.2.18-.1.34-.3.52-.5l.13-.16c.45-.53 1-1 1.5-1.44.62-.53 1.2-1.04 1.67-1.65.18-.25.54-.3.78-.12.25.2.3.56.12.8-.54.72-1.2 1.3-1.84 1.84-.5.44-.98.85-1.4 1.33l-.12.14c-.2.25-.42.52-.73.73-.16.1-.32.2-.5.27-.15.07-.3.14-.4.22-.07.07-.22.2-.44.2l-.08.02z"/>
              </svg></a>
            <ul class="sub-menu">
              <li class="sub-menu__item"><a href="<?php echo $linkSite?>site-history.php" class="sub-menu__link <?php if ($activeSubPage === "Site History") { echo 'sub-menu__link--current'; }?>">Site History</a></li>
              <li class="sub-menu__item"><a href="<?php echo $linkSite?>faculty-history.php" class="sub-menu__link <?php if ($activeSubPage === "Faculty History") { echo 'sub-menu__link--current'; }?>">Faculty History</a></li>
              <li class="sub-menu__item"><a href="<?php echo $linkSite?>schools-and-education/" class="sub-menu__link <?php if ($activeSubPage === "Schools and Education") { echo 'sub-menu__link--current'; }?>">Schools and Education</a></li>
              <!-- <li class="sub-menu__item"><a href="<?php echo $linkSite?>sport-and-wellbeing.php" class="sub-menu__link <?php if ($activeSubPage === "Sport and Wellbeing") { echo 'sub-menu__link--current'; }?>">Sport and Wellbeing</a></li> -->
            </ul>
          </li><!-- The Site ends -->

          <li class="main-nav__item parent-item">
            <a href="javascript:;" class="main-nav__link main-nav__link--archive <?php if ($activePage === "Archive") {echo 'current'; }?> parent">
              <div class="visuallyhidden">Birley Archive</div>
              <svg class="parent-icon" xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="-837.305 421.336 11 10">
              <path d="M-831.83 426.92c-.26 0-.45-.14-.52-.2-.67-.48-1.27-1.05-1.84-1.6l-2.87-2.78c-.23-.2-.23-.57-.02-.8.23-.22.6-.23.8 0l2.9 2.76c.5.5 1 .98 1.54 1.4 1.56-1.42 3.1-2.8 4.6-4.22.24-.2.6-.2.8.04.22.23.2.6-.03.8-1.57 1.46-3.16 2.9-4.76 4.35-.08.07-.24.2-.48.24-.03.02-.06.02-.1.02z"/>
              <path d="M-832.15 431.34c-.24 0-.42-.13-.5-.17-1.37-.95-2.43-2.23-3.45-3.46l-1.07-1.3c-.2-.23-.17-.6.07-.8.24-.2.6-.15.8.1l1.07 1.3c.93 1.1 1.9 2.27 3.07 3.12.16-.1.3-.18.45-.24.1-.06.23-.1.34-.2.18-.1.34-.3.52-.5l.13-.16c.45-.53 1-1 1.5-1.44.62-.53 1.2-1.04 1.67-1.65.18-.25.54-.3.78-.12.25.2.3.56.12.8-.54.72-1.2 1.3-1.84 1.84-.5.44-.98.85-1.4 1.33l-.12.14c-.2.25-.42.52-.73.73-.16.1-.32.2-.5.27-.15.07-.3.14-.4.22-.07.07-.22.2-.44.2l-.08.02z"/>
              </svg></a>
            <ul class="sub-menu">
              <li class="sub-menu__item"><a href="<?php echo $linkArchive?>dig.php" class="sub-menu__link <?php if ($activeSubPage === "Dig") { echo 'sub-menu__link--current'; }?>">Archaeological Dig</a></li>
              <li class="sub-menu__item"><a href="<?php echo $linkArchive?>music.php" class="sub-menu__link <?php if ($activeSubPage === "Music") { echo 'sub-menu__link--current'; }?>">Music</a></li>
              <li class="sub-menu__item"><a href="<?php echo $linkArchive?>poetry/" class="sub-menu__link <?php if ($activeSubPage === "Poetry") { echo 'sub-menu__link--current'; }?>">Poetry</a></li>
              <!-- <li class="sub-menu__item"><a href="<?php echo $linkArchive?>stories/" class="sub-menu__link <?php if ($activeSubPage === "Stories") { echo 'sub-menu__link--current'; }?>">Stories</a></li> -->
              <li class="sub-menu__item"><a href="<?php echo $linkArchive?>photography/" class="sub-menu__link <?php if ($activeSubPage === "Photography") { echo 'sub-menu__link--current'; }?>">Photography</a></li>
            </ul>
          </li> <!-- Birley Archive ends -->

          <li class="main-nav__item parent-item">
            <a href="javascript:;" class="main-nav__link main-nav__link--grow <?php if ($activePage === "Grow") {echo 'current'; }?> parent">
              <div class="visuallyhidden">Grow Birley</div>
              <svg class="parent-icon" xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="-837.305 421.336 11 10">
              <path d="M-831.83 426.92c-.26 0-.45-.14-.52-.2-.67-.48-1.27-1.05-1.84-1.6l-2.87-2.78c-.23-.2-.23-.57-.02-.8.23-.22.6-.23.8 0l2.9 2.76c.5.5 1 .98 1.54 1.4 1.56-1.42 3.1-2.8 4.6-4.22.24-.2.6-.2.8.04.22.23.2.6-.03.8-1.57 1.46-3.16 2.9-4.76 4.35-.08.07-.24.2-.48.24-.03.02-.06.02-.1.02z"/>
              <path d="M-832.15 431.34c-.24 0-.42-.13-.5-.17-1.37-.95-2.43-2.23-3.45-3.46l-1.07-1.3c-.2-.23-.17-.6.07-.8.24-.2.6-.15.8.1l1.07 1.3c.93 1.1 1.9 2.27 3.07 3.12.16-.1.3-.18.45-.24.1-.06.23-.1.34-.2.18-.1.34-.3.52-.5l.13-.16c.45-.53 1-1 1.5-1.44.62-.53 1.2-1.04 1.67-1.65.18-.25.54-.3.78-.12.25.2.3.56.12.8-.54.72-1.2 1.3-1.84 1.84-.5.44-.98.85-1.4 1.33l-.12.14c-.2.25-.42.52-.73.73-.16.1-.32.2-.5.27-.15.07-.3.14-.4.22-.07.07-.22.2-.44.2l-.08.02z"/>
              </svg></a>
            <ul class="sub-menu">
              <li class="sub-menu__item"><a href="<?php echo $linkGrow?>sustainability.php" class="sub-menu__link <?php if ($activeSubPage === "Sustainability") { echo 'sub-menu__link--current'; }?>">Sustainability</a></li>
              <!-- <li class="sub-menu__item"><a href="<?php echo $linkGrow?>bees.php" class="sub-menu__link <?php if ($activeSubPage === "Bees") { echo 'sub-menu__link--current'; } ?>">Bees</a></li>  -->
              <li class="sub-menu__item"><a href="<?php echo $linkGrow?>foraging/" class="sub-menu__link <?php if ($activeSubPage === "Foraging Menus") { echo 'sub-menu__link--current'; }?>">Foraging Menus</a></li>
            </ul>
          </li><!-- Grow Birley ends -->


          <li class="main-nav__item parent-item">
            <a href="javascript:;" class="main-nav__link main-nav__link--my <?php if ($activePage === "Case Studies") {echo 'current'; }?> parent">
              <div class="visuallyhidden">Case Studies</div>
              <svg class="parent-icon" xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="-837.305 421.336 11 10">
              <path d="M-831.83 426.92c-.26 0-.45-.14-.52-.2-.67-.48-1.27-1.05-1.84-1.6l-2.87-2.78c-.23-.2-.23-.57-.02-.8.23-.22.6-.23.8 0l2.9 2.76c.5.5 1 .98 1.54 1.4 1.56-1.42 3.1-2.8 4.6-4.22.24-.2.6-.2.8.04.22.23.2.6-.03.8-1.57 1.46-3.16 2.9-4.76 4.35-.08.07-.24.2-.48.24-.03.02-.06.02-.1.02z"/>
              <path d="M-832.15 431.34c-.24 0-.42-.13-.5-.17-1.37-.95-2.43-2.23-3.45-3.46l-1.07-1.3c-.2-.23-.17-.6.07-.8.24-.2.6-.15.8.1l1.07 1.3c.93 1.1 1.9 2.27 3.07 3.12.16-.1.3-.18.45-.24.1-.06.23-.1.34-.2.18-.1.34-.3.52-.5l.13-.16c.45-.53 1-1 1.5-1.44.62-.53 1.2-1.04 1.67-1.65.18-.25.54-.3.78-.12.25.2.3.56.12.8-.54.72-1.2 1.3-1.84 1.84-.5.44-.98.85-1.4 1.33l-.12.14c-.2.25-.42.52-.73.73-.16.1-.32.2-.5.27-.15.07-.3.14-.4.22-.07.07-.22.2-.44.2l-.08.02z"/>
              </svg></a>
            <ul class="sub-menu">
              <li class="sub-menu__item"><a href="<?php echo $linkCaseStudies?>birley-artwork-project/" class="sub-menu__link <?php if ($activeSubPage === "Birley Artwork Project") { echo 'sub-menu__link--current'; }?>">The Birley Artwork Project</a></li>
            </ul>
          </li><!-- My Birley ends -->

        </ul><!-- Main Nav Items ends -->

      </nav>

    </div><!-- nav-wrap ends -->

  </header><!-- header ends -->
