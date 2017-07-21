<?php

$pageTitle = "Bees Birley | Living Lines: Birley Archives";
$pageDescription = "Bees in Birley.";
$pageKeywords = "Birley, Bees, Sustainability";
$activePage = "Grow";
$activeSubPage = "Bees";

$assets = "../assets";

$favIcon = "../favicon.ico";

include('../assets/includes/head.php');?>

</head>

<?php

$linkHome = "../";
$linkAbout = "../about.php";
$linkContact = "../contact.php";

$linkSite = "../the-site/";
$linkArchive = "../birley-archive/";
$linkGrow = "./";
$linkMy = "../my-birley/";

include('../assets/includes/header.php'); ?>

<main id="skipnav">

  <section class="banner">

    <div class="banner-title-container">
      <h2 class="banner__title">Bees</h2>
    </div>

    <div class="banner-icon">
      <img src="<?php echo $assets?>/img/icons/icon_bee.svg" class="banner-icon__img" alt="Illustration of a bee.">
    </div>

  </section>

  <section class="content">

    <section class="content-text">

      <div class="breadcrumb">
        <p>Grow Birley</p><p>Bees</p>
      </div>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend eros ut ultrices posuere. Donec mattis rutrum felis vel pharetra.</p>
      <p>Mauris eget sollicitudin sapien, elementum aliquam lorem. Sed purus ante, <a class="content-text__link" href="#">eleifend faucibus</a> vestibulum id, iaculis nec orci. Integer porta arcu nec sem tincidunt, non viverra orci suscipit. Sed quis augue odio. Proin pretium convallis aliquam. Etiam cursus sagittis lobortis. Duis rutrum euismod nisl at convallis</p>

    </section>

    <aside class="sidebar">

      <section class="widget">
        <h4 class="widget__title widget__title--bees">Also in this section...</h4>
        <ul class="widget__submenu">
          <li class="widget__submenu-item"><a href="sustainability.php">Sustainability</a></li>
          <li class="widget__submenu-item"><a href="foraging/" class="widget__submenu-link">Foraging Menus</a></li>
        </div>
      </section>

    </aside>

  </section> <!-- content ends -->

</main>

</div> <!-- site-wrapper ends -->

<script src="<?php echo $assets?>/js/script.js?v=<?php echo date('his'); ?>"></script>
</body>
</html>
