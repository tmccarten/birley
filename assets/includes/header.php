<body>

  <p class="hide-skip"> <!-- Skip links -->
    <a href="#skipnav" title="Skip to the content">Skip to content</a>
    <a href="#skiptonav" title="Skip to the navigation">Skip to navigation</a>
  </p>

<div class="site-wrapper">

  <header class="header">
    <div class="header__top">

      <a href="<?php echo $linkHome; ?>" class="logo"><h1 class="visuallyhidden">Living Lines: History and art</h1></a>

      <button id="buttonMenu" class="button__menu" ></button>

      <ul class="about-contact" id="skiptonav">
        <li class="about-contact__item"><a href="<?php echo $linkAbout; ?>" <?php if ($activePage === "About") {echo 'class="about-contact__link current"'; }?> class="about-contact__link">About</a></li>
        <li class="about-contact__item"><a href="<?php echo $linkContact; ?>" <?php if ($activePage === "Contact") {echo 'class="about-contact__link current"'; }?> class="about-contact__link">Contact</a></li>
      </ul>

    </div><!-- top-wrap ends -->

    <div class="header__nav">

      <nav class="main-nav">
        <ul class="main-nav__items">

          <li class="main-nav__about-contact">
            <ul>
              <li class="about-contact__item"><a href="<?php echo $linkAbout; ?>" <?php if ($activePage === "About") {echo 'class="about-contact__link current"'; }?> class="about-contact__link">About</a></li>
              <li class="about-contact__item"><a href="<?php echo $linkContact; ?>" <?php if ($activePage === "Contact") {echo 'class="about-contact__link current"'; }?> class="about-contact__link">Contact</a></li>
            </ul>
          </li>

          <li class="main-nav__item">
            <a href="<?php echo $linkHome; ?>" class="visuallyhidden">Home</a>
            <a href="<?php echo $linkHome; ?>" aria-hidden="true" <?php if ($activePage === "Home") {echo 'class="main-nav__link main-nav__link--home current"'; }?> class="main-nav__link main-nav__link--home"></a>
          </li><!-- Home ends -->

          <li class="main-nav__item parent-item">
            <a href="<?php echo $linkHealth; ?>" class="visuallyhidden">Birley Health and Education</a>
            <a href="javascript:;" aria-hidden="true "<?php if ($activePage === "Health") {echo 'class="main-nav__link main-nav__link--health current parent"'; }?> class="main-nav__link main-nav__link--health parent">
              <svg class="parent-icon" xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="-837.305 421.336 11 10">
              <path d="M-831.83 426.92c-.26 0-.45-.14-.52-.2-.67-.48-1.27-1.05-1.84-1.6l-2.87-2.78c-.23-.2-.23-.57-.02-.8.23-.22.6-.23.8 0l2.9 2.76c.5.5 1 .98 1.54 1.4 1.56-1.42 3.1-2.8 4.6-4.22.24-.2.6-.2.8.04.22.23.2.6-.03.8-1.57 1.46-3.16 2.9-4.76 4.35-.08.07-.24.2-.48.24-.03.02-.06.02-.1.02z"/>
              <path d="M-832.15 431.34c-.24 0-.42-.13-.5-.17-1.37-.95-2.43-2.23-3.45-3.46l-1.07-1.3c-.2-.23-.17-.6.07-.8.24-.2.6-.15.8.1l1.07 1.3c.93 1.1 1.9 2.27 3.07 3.12.16-.1.3-.18.45-.24.1-.06.23-.1.34-.2.18-.1.34-.3.52-.5l.13-.16c.45-.53 1-1 1.5-1.44.62-.53 1.2-1.04 1.67-1.65.18-.25.54-.3.78-.12.25.2.3.56.12.8-.54.72-1.2 1.3-1.84 1.84-.5.44-.98.85-1.4 1.33l-.12.14c-.2.25-.42.52-.73.73-.16.1-.32.2-.5.27-.15.07-.3.14-.4.22-.07.07-.22.2-.44.2l-.08.02z"/>
            </svg></a>
            <ul class="sub-menu">
              <li class="sub-menu__item"><a href="<?php echo $linkHealth?>faculty-history.php" <?php if ($activeSubPage === "Faculty History") { echo 'class="sub-menu__link sub-menu__link--current"'; }?> class="sub-menu__link">Faculty History</a></li>
              <li class="sub-menu__item"><a href="<?php echo $linkHealth?>birley-high.php" <?php if ($activeSubPage === "Birley High") { echo 'class="sub-menu__link sub-menu__link--current"'; }?> class="sub-menu__link">Birley High</a></li>
              <li class="sub-menu__item"><a href="<?php echo $linkHealth?>sport.php" <?php if ($activeSubPage === "Sport") { echo 'class="sub-menu__link sub-menu__link--current"'; }?> class="sub-menu__link">Sport</a></li>
              <li class="sub-menu__item"><a href="<?php echo $linkHealth?>health-and-wellbeing.php" <?php if ($activeSubPage === "Health") { echo 'class="sub-menu__link sub-menu__link--current"'; }?> class="sub-menu__link">Health and Wellbeing</a></li>
            </ul>
          </li><!-- Birley Health ends -->

          <li class="main-nav__item parent-item">
            <a href="<?php echo $linkArchive; ?>" class="visuallyhidden">Birley Archive</a>
            <a href="javascript:;" aria-hidden="true" <?php if ($activePage === "Archive") {echo 'class="main-nav__link main-nav__link--archive current parent"'; }?> class="main-nav__link main-nav__link--archive parent">
              <svg class="parent-icon" xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="-837.305 421.336 11 10">
              <path d="M-831.83 426.92c-.26 0-.45-.14-.52-.2-.67-.48-1.27-1.05-1.84-1.6l-2.87-2.78c-.23-.2-.23-.57-.02-.8.23-.22.6-.23.8 0l2.9 2.76c.5.5 1 .98 1.54 1.4 1.56-1.42 3.1-2.8 4.6-4.22.24-.2.6-.2.8.04.22.23.2.6-.03.8-1.57 1.46-3.16 2.9-4.76 4.35-.08.07-.24.2-.48.24-.03.02-.06.02-.1.02z"/>
              <path d="M-832.15 431.34c-.24 0-.42-.13-.5-.17-1.37-.95-2.43-2.23-3.45-3.46l-1.07-1.3c-.2-.23-.17-.6.07-.8.24-.2.6-.15.8.1l1.07 1.3c.93 1.1 1.9 2.27 3.07 3.12.16-.1.3-.18.45-.24.1-.06.23-.1.34-.2.18-.1.34-.3.52-.5l.13-.16c.45-.53 1-1 1.5-1.44.62-.53 1.2-1.04 1.67-1.65.18-.25.54-.3.78-.12.25.2.3.56.12.8-.54.72-1.2 1.3-1.84 1.84-.5.44-.98.85-1.4 1.33l-.12.14c-.2.25-.42.52-.73.73-.16.1-.32.2-.5.27-.15.07-.3.14-.4.22-.07.07-.22.2-.44.2l-.08.02z"/>
            </svg></a>
            <ul class="sub-menu">
              <li class="sub-menu__item"><a href="<?php echo $linkArchive?>dig.php" <?php if ($activeSubPage === "Dig") { echo 'class="sub-menu__link sub-menu__link--current"'; }?> class="sub-menu__link">Archaeology</a></li>
              <li class="sub-menu__item"><a href="<?php echo $linkArchive?>music.php" <?php if ($activeSubPage === "Music") { echo 'class="sub-menu__link sub-menu__link--current"'; }?> class="sub-menu__link">Music</a></li>
              <li class="sub-menu__item"><a href="<?php echo $linkArchive?>poetry.php" <?php if ($activeSubPage === "Poetry") { echo 'class="sub-menu__link sub-menu__link--current"'; }?> class="sub-menu__link">Poetry</a></li>
              <li class="sub-menu__item"><a href="#" class="sub-menu__link">Stories</a></li>
              <li class="sub-menu__item"><a href="#" class="sub-menu__link">Artwork</a></li>
              <li class="sub-menu__item"><a href="#" class="sub-menu__link">Photos</a></li>
            </ul>
          </li> <!-- Birley Archive ends -->

          <li class="main-nav__item parent-item">
            <a href="<?php echo $linkGrow; ?>" class="visuallyhidden">Grow Birley</a>
            <a href="javascript:;" aria-hidden="true" <?php if ($activePage === "Grow") {echo 'class="main-nav__link main-nav__link--grow current parent"'; }?> class="main-nav__link main-nav__link--grow parent">
              <svg class="parent-icon" xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="-837.305 421.336 11 10">
              <path d="M-831.83 426.92c-.26 0-.45-.14-.52-.2-.67-.48-1.27-1.05-1.84-1.6l-2.87-2.78c-.23-.2-.23-.57-.02-.8.23-.22.6-.23.8 0l2.9 2.76c.5.5 1 .98 1.54 1.4 1.56-1.42 3.1-2.8 4.6-4.22.24-.2.6-.2.8.04.22.23.2.6-.03.8-1.57 1.46-3.16 2.9-4.76 4.35-.08.07-.24.2-.48.24-.03.02-.06.02-.1.02z"/>
              <path d="M-832.15 431.34c-.24 0-.42-.13-.5-.17-1.37-.95-2.43-2.23-3.45-3.46l-1.07-1.3c-.2-.23-.17-.6.07-.8.24-.2.6-.15.8.1l1.07 1.3c.93 1.1 1.9 2.27 3.07 3.12.16-.1.3-.18.45-.24.1-.06.23-.1.34-.2.18-.1.34-.3.52-.5l.13-.16c.45-.53 1-1 1.5-1.44.62-.53 1.2-1.04 1.67-1.65.18-.25.54-.3.78-.12.25.2.3.56.12.8-.54.72-1.2 1.3-1.84 1.84-.5.44-.98.85-1.4 1.33l-.12.14c-.2.25-.42.52-.73.73-.16.1-.32.2-.5.27-.15.07-.3.14-.4.22-.07.07-.22.2-.44.2l-.08.02z"/>
            </svg></a>
            <ul class="sub-menu">
              <li class="sub-menu__item"><a href="<?php echo $linkGrow?>sustainability.php" <?php if ($activeSubPage === "Sustainability") { echo 'class="sub-menu__link sub-menu__link--current"'; }?> class="sub-menu__link">Sustainability</a></li>
              <li class="sub-menu__item"><a href="<?php echo $linkGrow?>bees.php" <?php if ($activeSubPage === "Bees") { echo 'class="sub-menu__link sub-menu__link--current"'; }?> class="sub-menu__link">Bees</a></li>
              <li class="sub-menu__item"><a href="<?php echo $linkGrow?>foraging.php" <?php if ($activeSubPage === "Foraging") { echo 'class="sub-menu__link sub-menu__link--current"'; }?>class="sub-menu__link">Foraging</a></li>              
            </ul>
          </li><!-- Grow Birley ends -->


          <li class="main-nav__item">
            <a href="<?php echo $linkGrow; ?>" class="visuallyhidden">My Birley</a>
            <a href="javascript:;" aria-hidden="true" <?php if ($activePage === "My") {echo 'class="main-nav__link main-nav__link--my current parent"'; }?> class="main-nav__link main-nav__link--my parent">
              <svg class="parent-icon" xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="-837.305 421.336 11 10">
              <path d="M-831.83 426.92c-.26 0-.45-.14-.52-.2-.67-.48-1.27-1.05-1.84-1.6l-2.87-2.78c-.23-.2-.23-.57-.02-.8.23-.22.6-.23.8 0l2.9 2.76c.5.5 1 .98 1.54 1.4 1.56-1.42 3.1-2.8 4.6-4.22.24-.2.6-.2.8.04.22.23.2.6-.03.8-1.57 1.46-3.16 2.9-4.76 4.35-.08.07-.24.2-.48.24-.03.02-.06.02-.1.02z"/>
              <path d="M-832.15 431.34c-.24 0-.42-.13-.5-.17-1.37-.95-2.43-2.23-3.45-3.46l-1.07-1.3c-.2-.23-.17-.6.07-.8.24-.2.6-.15.8.1l1.07 1.3c.93 1.1 1.9 2.27 3.07 3.12.16-.1.3-.18.45-.24.1-.06.23-.1.34-.2.18-.1.34-.3.52-.5l.13-.16c.45-.53 1-1 1.5-1.44.62-.53 1.2-1.04 1.67-1.65.18-.25.54-.3.78-.12.25.2.3.56.12.8-.54.72-1.2 1.3-1.84 1.84-.5.44-.98.85-1.4 1.33l-.12.14c-.2.25-.42.52-.73.73-.16.1-.32.2-.5.27-.15.07-.3.14-.4.22-.07.07-.22.2-.44.2l-.08.02z"/>
            </svg></a>
          </li><!-- My Birley ends -->

        </ul><!-- Main Nav Items ends -->

      </nav>

    </div><!-- nav-wrap ends -->

  </header><!-- header ends -->
