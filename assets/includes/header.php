<body>

  <p class="hide-skip"> <!-- Skip links -->
    <a href="#skipnav" title="Skip to the content">Skip to content</a>
    <a href="#skiptonav" title="Skip to the navigation">Skip to navigation</a>
  </p>

<div class="site-wrapper">

  <header class="header">
    <div class="header__top">


      <h1 class="logo"><a href="<?php echo $linkHome; ?>" class="logo__link">Living Lines</a></h1>

      <ul class="about-contact">
        <li class="about-contact__item"><a href="<?php echo $linkAbout; ?>">About</a></li>
          <span class="about-contact__separator">|</span>
        <li class="about-contact__item"><a href="<?php echo $linkContact; ?>">Contact</a></li>
      </ul>

    </div><!-- top-wrap ends -->

    <div class="header__nav">

      <nav class="main-nav">
        <ul class="main-nav__items">
          <li class="main-nav__item"><a href="<?php echo $linkHome; ?>" <?php if ($activePage === "Home") {?> class="main-nav__link main-nav__link--home current" <?php } ?> class="main-nav__link main-nav__link--home">Home</a></li>
          <li class="main-nav__item"><a href="<?php echo $linkHealth; ?>" <?php if ($activePage === "Health") {?> class="main-nav__link main-nav__link--health current" <?php } ?> class="main-nav__link main-nav__link--health">Birley Health and Education</a></li>
          <li class="main-nav__item"><a href="<?php echo $linkArchive; ?>" <?php if ($activePage === "Archive") {?> class="main-nav__link main-nav__link--archive current" <?php } ?>  class="main-nav__link main-nav__link--archive">Birley Archive</a></li>
          <li class="main-nav__item"><a href="<?php echo $linkGrow; ?>" <?php if ($activePage === "Grow") {?> class="main-nav__link main-nav__link--grow current" <?php } ?>  class="main-nav__link main-nav__link--grow">Grow Birley</a></li>
          <li class="main-nav__item"><a href="<?php echo $linkMy; ?>" <?php if ($activePage === "My") {?> class="main-nav__link main-nav__link--my current" <?php } ?>  class="main-nav__link main-nav__link--my">My Birley</a></li>
        </ul>
      </nav>

    </div><!-- nav-wrap ends -->

  </header><!-- header ends -->
