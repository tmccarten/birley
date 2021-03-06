<?php

$pageTitle = "Birley Site Photograph Archive | Birley Photography | Birley Archive Project";
$pageDescription = "Photographs of the vacant Birley site prior to construction.";
$pageKeywords = "Birley, Photography, Hulme";
$activePage = "Archive";
$activeSubPage = "Photography";

$assets = "../../assets";

$favIcon = "../../favicon.ico";

include('../../assets/includes/head.php');?>

</head>

<?php

$linkHome = "../../";
$linkAbout = "../../about.php";
$linkContact = "../../contact.php";

$linkSite = "../../the-site/";
$linkArchive = "../";
$linkGrow = "../../grow-birley/";
$linkCaseStudies = "../../case-studies/";

include('../../assets/includes/header.php'); ?>

<main id="skipnav">

  <section class="banner">

    <div class="banner-title-container">
      <h2 class="banner__title">Photography</h2>
    </div>

    <div class="banner-icon">
      <img src="<?php echo $assets?>/img/icons/illustrations/icon_photography.svg" class="banner-icon__svg" alt="Illustration of a camera">
    </div>

  </section>

  <div class="gallery">

    <figure class="photo">
      <a href="<?php echo $assets?>/img/birley-archive/photography/birley-site-photograph-archive/jug.jpg" class="photo__item">
        <img src="<?php echo $assets?>/img/birley-archive/photography/birley-site-photograph-archive/jug_thumb.jpg" class="photo__img" width="283" height="268" alt="Jug or similar item">
      </a>
      <figcaption>Excavation find</figcaption>
    </figure>

  </div>

  <section class="content">

    <section class="content-text">

      <div class="breadcrumb">
        <a href="index.php">Photography</a><p>Birley Site Photograph Archive</p>
      </div>

      <h3 class="content-text__title">Birley Site Photograph Archive</h3>

      <p>Coming soon...</p>

    </section>

    <aside class="sidebar">

      <section class="widget">
        <h4 class="widget__title widget__title--photography">More from Birley Archive...</h4>
        <ul class="widget__submenu">
          <li class="widget__submenu-item"><a href="../dig.php">Archaeological Dig</a></li>
          <li class="widget__submenu-item"><a href="../poetry/">Poetry</a></li>
          <!-- <li class="widget__submenu-item"><a href="../stories.php">Stories</a></li> -->
          <li class="widget__submenu-item"><a href="../music.php">Music</a></li>
        </ul>
      </section>

    </aside>

  </section> <!-- content ends -->

</main>

<?php include('../../assets/includes/footer.php'); ?>

</div> <!-- site-wrapper ends -->


<script src="<?php echo $assets?>/js/script.js?v=<?php echo $javaVersion?>"></script>
</body>
</html>
