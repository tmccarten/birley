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
        <li class="about-contact__item"><a href="<?php echo $linkAbout; ?>" <?php if ($activePage === "About") {echo 'class="about-contact__link current"'; } else echo 'class="about-contact__link"'; ?>>About</a></li>
        <li class="about-contact__item"><a href="<?php echo $linkContact; ?>" <?php if ($activePage === "Contact") {echo 'class="about-contact__link current"'; } else echo 'class="about-contact__link"'; ?>>Contact</a></li>
      </ul>

    </div><!-- top-wrap ends -->

    <div class="header__nav">

      <nav class="main-nav">
        <ul class="main-nav__items">

          <li class="main-nav__about-contact">
            <ul>
              <li class="about-contact__item"><a href="<?php echo $linkAbout; ?>" <?php if ($activePage === "About") {echo 'class="about-contact__link current"'; } else echo 'class="about-contact__link"'; ?>>About</a></li>
              <li class="about-contact__item"><a href="<?php echo $linkContact; ?>" <?php if ($activePage === "Contact") {echo 'class="about-contact__link current"'; } else echo 'class="about-contact__link"'; ?>>Contact</a></li>
            </ul>
          </li>

          <li class="main-nav__item">
            <a href="<?php echo $linkHome; ?>" class="visuallyhidden">Home</a>
            <a href="<?php echo $linkHome; ?>" aria-hidden="true" <?php if ($activePage === "Home") {echo 'class="main-nav__link main-nav__link--home current"'; } else echo 'class="main-nav__link main-nav__link--home"'; ?>></a>
            </li>
          <li class="main-nav__item">
            <a href="<?php echo $linkHealth; ?>" class="visuallyhidden">Birley Health and Education</a>
            <a href="<?php echo $linkHealth; ?>" <?php if ($activePage === "Health") {echo 'class="main-nav__link main-nav__link--health current"'; } else echo 'class="main-nav__link main-nav__link--health"'; ?>>Birley Health and Education
              <svg class="parent-icon parent" xmlns="http://www.w3.org/2000/svg" width="10" height="14" viewBox="-197.4 107.8 460.8 378.5">
              <path class="st0" d="M258.7 244.5c-6.4-6.4-16.7-6.4-23 0L33.2 447.3l-202.8-202.8c-6.4-6.4-16.7-6.4-23 0-6.4 6.4-6.4 16.7 0 23l213.9 214c3.2 3.2 7.1 4.8 11.5 4.8 4 0 8.3-1.6 11.5-4.8l213.9-213.9c6.8-6.4 6.8-16.7.5-23.1z"/><style>.st0 {fill: #000;}</style>
              <path class="st0" d="M258.7 112.5c-6.4-6.4-16.7-6.4-23 0L33.2 315.3l-202.8-202.8c-6.4-6.4-16.7-6.4-23 0s-6.4 16.7 0 23l213.9 214c3.2 3.2 7.1 4.8 11.5 4.8 4 0 8.3-1.6 11.5-4.8l213.9-213.9c6.8-6.4 6.8-16.7.5-23.1z"/></svg></a>
          </li><!-- Birley Health ends -->

          <li class="main-nav__item parent-item">
            <a href="<?php echo $linkArchive; ?>" class="visuallyhidden">Birley Archive</a>
            <a href="#" aria-hidden="true" <?php if ($activePage === "Archive") {echo 'class="main-nav__link main-nav__link--archive current parent"'; } else echo 'class="main-nav__link main-nav__link--archive parent"'; ?>>Birley Archive
              <svg class="parent-icon parent" xmlns="http://www.w3.org/2000/svg" width="10" height="14" viewBox="-197.4 107.8 460.8 378.5">
              <path class="st0" d="M258.7 244.5c-6.4-6.4-16.7-6.4-23 0L33.2 447.3l-202.8-202.8c-6.4-6.4-16.7-6.4-23 0-6.4 6.4-6.4 16.7 0 23l213.9 214c3.2 3.2 7.1 4.8 11.5 4.8 4 0 8.3-1.6 11.5-4.8l213.9-213.9c6.8-6.4 6.8-16.7.5-23.1z"/><style>.st0 {fill: #000;}</style>
              <path class="st0" d="M258.7 112.5c-6.4-6.4-16.7-6.4-23 0L33.2 315.3l-202.8-202.8c-6.4-6.4-16.7-6.4-23 0s-6.4 16.7 0 23l213.9 214c3.2 3.2 7.1 4.8 11.5 4.8 4 0 8.3-1.6 11.5-4.8l213.9-213.9c6.8-6.4 6.8-16.7.5-23.1z"/></svg></a>
            <ul class="sub-menu">
              <li class="sub-menu__item"><a href="<?php echo $linkArchive?>dig.php" class="sub-menu__link">Archaeology</a></li>
              <li class="sub-menu__item"><a href="#" class="sub-menu__link">Music</a></li>
              <li class="sub-menu__item"><a href="#" class="sub-menu__link">Poetry</a></li>
              <li class="sub-menu__item"><a href="#" class="sub-menu__link">Stories</a></li>
              <li class="sub-menu__item"><a href="#" class="sub-menu__link">Artwork</a></li>
              <li class="sub-menu__item"><a href="#" class="sub-menu__link">Photos</a></li>
            </ul>
          </li> <!-- Birley Archive ends -->

          <li class="main-nav__item parent-item">
            <a href="<?php echo $linkGrow; ?>" class="visuallyhidden">Grow Birley</a>
            <a href="#" aria-hidden="true" <?php if ($activePage === "Grow") {echo 'class="main-nav__link main-nav__link--grow current parent"'; } else echo 'class="main-nav__link main-nav__link--grow parent"'; ?>>Grow Birley
              <svg class="parent-icon parent" xmlns="http://www.w3.org/2000/svg" width="10" height="14" viewBox="-197.4 107.8 460.8 378.5">
              <path class="st0" d="M258.7 244.5c-6.4-6.4-16.7-6.4-23 0L33.2 447.3l-202.8-202.8c-6.4-6.4-16.7-6.4-23 0-6.4 6.4-6.4 16.7 0 23l213.9 214c3.2 3.2 7.1 4.8 11.5 4.8 4 0 8.3-1.6 11.5-4.8l213.9-213.9c6.8-6.4 6.8-16.7.5-23.1z"/><style>.st0 {fill: #000;}</style>
              <path class="st0" d="M258.7 112.5c-6.4-6.4-16.7-6.4-23 0L33.2 315.3l-202.8-202.8c-6.4-6.4-16.7-6.4-23 0s-6.4 16.7 0 23l213.9 214c3.2 3.2 7.1 4.8 11.5 4.8 4 0 8.3-1.6 11.5-4.8l213.9-213.9c6.8-6.4 6.8-16.7.5-23.1z"/></svg></a>
            <ul class="sub-menu">
              <li class="sub-menu__item"><a href="#" class="sub-menu__link">Sustainability Trail</a></li>
              <li class="sub-menu__item"><a href="#" class="sub-menu__link">Bees</a></li>
              <li class="sub-menu__item"><a href="#" class="sub-menu__link">Foraging</a></li>
            </ul>
          </li><!-- Grow Birley ends -->


          <li class="main-nav__item">
            <a href="<?php echo $linkGrow; ?>" class="visuallyhidden">My Birley</a>
            <a href="<?php echo $linkMy; ?>" aria-hidden="true" <?php if ($activePage === "My") {echo 'class="main-nav__link main-nav__link--my current parent"'; } else echo 'class="main-nav__link main-nav__link--my parent"'; ?>>My Birley
              <svg class="parent-icon parent" xmlns="http://www.w3.org/2000/svg" width="10" height="14" viewBox="-197.4 107.8 460.8 378.5">
              <path class="st0" d="M258.7 244.5c-6.4-6.4-16.7-6.4-23 0L33.2 447.3l-202.8-202.8c-6.4-6.4-16.7-6.4-23 0-6.4 6.4-6.4 16.7 0 23l213.9 214c3.2 3.2 7.1 4.8 11.5 4.8 4 0 8.3-1.6 11.5-4.8l213.9-213.9c6.8-6.4 6.8-16.7.5-23.1z"/><style>.st0 {fill: #000;}</style>
              <path class="st0" d="M258.7 112.5c-6.4-6.4-16.7-6.4-23 0L33.2 315.3l-202.8-202.8c-6.4-6.4-16.7-6.4-23 0s-6.4 16.7 0 23l213.9 214c3.2 3.2 7.1 4.8 11.5 4.8 4 0 8.3-1.6 11.5-4.8l213.9-213.9c6.8-6.4 6.8-16.7.5-23.1z"/></svg></a>
          </li><!-- My Birley ends -->

        </ul><!-- Main Nav Items ends -->

      </nav>

    </div><!-- nav-wrap ends -->

  </header><!-- header ends -->
