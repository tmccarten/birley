<?php

$pageTitle = "Birley Artwork | Living Lines: Birley Archives";
$pageDescription = "Birley artwork.";
$pageKeywords = "Birley, Artwork, Hulme";
$activePage = "My";
$activeSubPage = "Artwork";

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
$linkMy = "../";

include('../../assets/includes/header.php'); ?>

<main id="skipnav">

  <section class="banner">

    <div class="banner-title-container">
      <h2 class="banner__title">Birley Artwork Project</h2>
    </div>

    <div class="banner-icon">
      <img src="<?php echo $assets?>/img/icons/illustrations/icon_terraces2.svg" class="banner-icon__img" alt="Illustration of a construction in process.">
    </div>

  </section>

  <section class="content">

    <section class="content-text">

      <div class="breadcrumb">
        <p>Case Studies</p><p>Artwork</p>
      </div>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend eros ut ultrices posuere. Donec mattis rutrum felis vel pharetra.</p>
      <ul class="content-text__list">
        <li class="content-text__list-item"><a class="content-text__link" href="research.php">Research</a></li>
        <li class="content-text__list-item"><a class="content-text__link" href="golden-terrace.php">Golden Terrace</a></li>
        <li class="content-text__list-item"><a class="content-text__link" href="where-the-wind-blows.php">Where The Wind Blows</a></li>
        <li class="content-text__list-item"><a class="content-text__link" href="thresholds.php">Thresholds</a></li>
        <li class="content-text__list-item"><a class="content-text__link" href="terrace-seating.php">Terrace Seating</a></li>
        <li class="content-text__list-item"><a class="content-text__link" href="the-bees.php">The Bees</a></li>
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

<script src="<?php echo $assets?>/js/script.js?v=<?php echo date('his'); ?>"></script>
</body>
</html>
