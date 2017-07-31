<?php

$pageTitle = "Birley Artwork Project | Living Lines: Birley Archives";
$pageDescription = "Birley artwork.";
$pageKeywords = "Birley, Artwork, Hulme";
$activePage = "Case Studies";
$activeSubPage = "Birley Artwork Project";

$assets = "../../assets";

$favIcon = "../../favicon.ico";

include('../../assets/includes/head.php');?>

</head>

<?php

$linkHome = "../../";
$linkAbout = "../../about.php";
$linkContact = "../../contact.php";

$linkSite = "../../the-site/";
$linkArchive = "../../birley-archive/";
$linkGrow = "../../grow-birley/";
$linkCaseStudies = "../";

include('../../assets/includes/header.php'); ?>

<main id="skipnav">

  <section class="banner">

    <div class="banner-title-container">
      <h2 class="banner__title">The Birley Artwork Project</h2>
    </div>

    <div class="banner-icon">
      <img src="<?php echo $assets?>/img/icons/illustrations/icon_terraces2.svg" class="banner-icon__svg" alt="Illustration of a construction in process.">
    </div>

  </section>

  <section class="content">

    <section class="content-text">

      <div class="breadcrumb">
        <p>Case Studies</p><p>The Birley Artwork Project</p>
      </div>

      <p>Between 2014 and 2016, artists from Manchester School of Art and Manchester School of Architecture developed concept designs to investigate themes of place, home, sustainability, permanence and transience, as related to the context of the site. Artist and Sculptor <a href="https://creativehandsfoundation.org/" class="content-text__link">Joseph Ayovoro</a> (Creative Hands Foundation) and poet <a href="http://www.applesandsnakes.org/page/84/Performance+poets/198" class="content-text__link">SuAndi</a> further added their experience to the exploration of these themes.</p>

      <ul class="content-text__list">
        <li class="content-text__list-item"><a class="content-text__link" href="research.php">Research</a></li>
        <li class="content-text__list-item"><a class="content-text__link" href="golden-terrace.php">Golden Terrace</a></li>
        <li class="content-text__list-item"><a class="content-text__link" href="where-the-wind-blows.php">Where The Wind Blows</a></li>
        <li class="content-text__list-item"><a class="content-text__link" href="thresholds.php">Thresholds</a></li>
        <li class="content-text__list-item"><a class="content-text__link" href="terrace-seating.php">Terrace Seating</a></li>
        <li class="content-text__list-item"><a class="content-text__link" href="the-bees.php">The Bees</a></li>
        <li class="content-text__list-item"><a class="content-text__link" href="stories-from-the-hearth/">Stories From The Hearth</a></li>
      </ul>
    </section>

    <aside class="sidebar">

      <section class="widget">
        <h4 class="widget__title widget__title--artwork">More from Case Studies...</h4>
        <ul class="widget__submenu">
        </ul>
      </section>

    </aside>

  </section> <!-- content ends -->

</main>

<?php include('../../assets/includes/footer.php'); ?>

</div> <!-- site-wrapper ends -->

<script src="<?php echo $assets?>/js/script.js?v=34"></script>
</body>
</html>
