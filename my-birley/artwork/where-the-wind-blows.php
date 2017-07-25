<?php

$pageTitle = "Where The Wind Blows | Birley Artwork | Living Lines: Birley Archives";
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
      <h2 class="banner__title">Artwork</h2>
    </div>

    <div class="banner-icon">
      <img src="<?php echo $assets?>/img/icons/illustrations/icon_artwork.png" class="banner-icon__img" width="373" height="219" alt="Illustration of a mural.">
    </div>

  </section>

  <section class="content">

    <section class="content-text">

      <div class="breadcrumb">
        <a href="index.php">Case Studies</a><p>Where The Wind Blows</p>
      </div>

      <h3 class="content-text__title">Where The Wind Blows</h3>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend eros ut ultrices posuere. Donec mattis rutrum felis vel pharetra.</p>
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
