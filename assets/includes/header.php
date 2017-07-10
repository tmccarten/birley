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

      <ul class="about-contact">
        <li class="about-contact__item"><a href="<?php echo $linkAbout; ?>" <?php if ($activePage === "About") {echo 'class="about-contact__link current"'; } else echo 'class="about-contact__link"'; ?>>About</a></li>
        <li class="about-contact__item"><a href="<?php echo $linkContact; ?>" <?php if ($activePage === "Contact") {echo 'class="about-contact__link current"'; } else echo 'class="about-contact__link"'; ?>>Contact</a></li>
      </ul>

    </div><!-- top-wrap ends -->

    <div class="header__nav">

      <nav class="main-nav">
        <ul class="main-nav__items">
          <ul class="main-nav__about-contact">
            <li class="about-contact__item"><a href="<?php echo $linkAbout; ?>" <?php if ($activePage === "About") {echo 'class="about-contact__link current"'; } else echo 'class="about-contact__link"'; ?>>About</a></li>
            <li class="about-contact__item"><a href="<?php echo $linkContact; ?>" <?php if ($activePage === "Contact") {echo 'class="about-contact__link current"'; } else echo 'class="about-contact__link"'; ?>>Contact</a></li>
          </ul>
          <li class="main-nav__item"><a href="<?php echo $linkHome; ?>" <?php if ($activePage === "Home") {echo 'class="main-nav__link main-nav__link--home current"'; } else echo 'class="main-nav__link main-nav__link--home"'; ?>>Home</a></li>
          <li class="main-nav__item"><a href="<?php echo $linkHealth; ?>" <?php if ($activePage === "Health") {echo 'class="main-nav__link main-nav__link--health current"'; } else echo 'class="main-nav__link main-nav__link--health"'; ?>>Birley Health and Education</a></li>
          <li class="main-nav__item"><a href="<?php echo $linkArchive; ?>" <?php if ($activePage === "Archive") {echo 'class="main-nav__link main-nav__link--archive current"'; } else echo 'class="main-nav__link main-nav__link--archive"'; ?>>Birley Archive</a></li>
          <li class="main-nav__item"><a href="<?php echo $linkGrow; ?>" <?php if ($activePage === "Grow") {echo 'class="main-nav__link main-nav__link--grow current"'; } else echo 'class="main-nav__link main-nav__link--grow"'; ?>>Grow Birley</a></li>
          <li class="main-nav__item"><a href="<?php echo $linkMy; ?>" <?php if ($activePage === "My") {echo 'class="main-nav__link main-nav__link--my current"'; } else echo 'class="main-nav__link main-nav__link--my"'; ?>>My Birley</a></li>
        </ul>
      </nav>

    </div><!-- nav-wrap ends -->

  </header><!-- header ends -->
