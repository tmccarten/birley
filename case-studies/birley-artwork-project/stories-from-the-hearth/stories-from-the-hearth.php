<?php

$pageTitle = "Stories from the Hearth | Birley Artwork | Living Lines: Birley Archives";
$pageDescription = "Stories from the hearth, stories about Birley, Hulme past and present.";
$pageKeywords = "Birley, Artwork, Hulme";
$activePage = "Case Studies";
$activeSubPage = "Birley Artwork Project";

$assets = "../../../assets";

$favIcon = "../../../favicon.ico";

include('../../../assets/includes/head.php');?>

</head>

<?php

$linkHome = "../../../";
$linkAbout = "../../../about.php";
$linkContact = "../../../contact.php";

$linkSite = "../../../the-site/";
$linkArchive = "../../../birley-archive/";
$linkGrow = "../../../grow-birley/";
$linkCaseStudies = "../../";

include('../../../assets/includes/header.php'); ?>

<main id="skipnav">

  <section class="banner">

    <div class="banner-title-container">
      <h2 class="banner__title">The Birley Artwork Project</h2>
    </div>

    <div class="banner-icon">
      <img src="<?php echo $assets?>/img/icons/illustrations/icon_stories.svg" class="banner-icon__svg" alt="Illustration of a construction in process.">
    </div>

  </section>

  <section class="content">

    <section class="content-text">

      <div class="breadcrumb">
        <a href="index.php">Stories from the Hearth</a><p>Stories</p>
      </div>

      <p>Coming soon...</p>

    </section>

    <aside class="sidebar">

      <section class="widget">
        <h4 class="widget__title widget__title--artwork">More from Birley Artwork Project...</h4>
        <ul class="widget__submenu">
          <li class="widget__submenu-item"><a href="../research.php">Research</a></li>
          <li class="widget__submenu-item"><a href="../golden-terrace.php">Golden Terrace</a></li>
          <li class="widget__submenu-item"><a href="../where-the-wind-blows.php">Where The Wind Blows</a></li>
          <li class="widget__submenu-item"><a href="../thresholds.php">Thresholds</a></li>
          <li class="widget__submenu-item"><a href="../terrace-seating.php">Terrace Seating</a></li>
          <li class="widget__submenu-item"><a href="../the-bees.php">The Bees</a></li>
        </ul>
      </section>

    </aside>

  </section> <!-- content ends -->

</main>

<?php include('../../../assets/includes/footer.php'); ?>

</div> <!-- site-wrapper ends -->

<script src="<?php echo $assets?>/js/script.js?v=<?php echo $javaVersion?>"></script>
</body>
</html>
