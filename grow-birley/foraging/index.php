<?php

$pageTitle = "Foraging Birley | Living Lines: Birley Archives";
$pageDescription = "Foraging in Birley.";
$pageKeywords = "Birley, Foraging, Sustainability";
$activePage = "Grow";
$activeSubPage = "Foraging Menus";

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
$linkGrow = "../";
$linkMy = "../../my-birley/";

include('../../assets/includes/header.php'); ?>

<main id="skipnav">

  <section class="banner">

    <div class="banner-title-container">
      <h2 class="banner__title">Foraging Menus</h2>
    </div>

    <div class="banner-icon">
      <img src="<?php echo $assets?>/img/icons/icon_foraging.svg" class="banner-icon__img" alt="Illustration of a fern, berries and nuts.">
    </div>

  </section>

  <section class="content">

    <section class="content-text">

      <div class="breadcrumb">
        <p>Grow Birley</p><p>Foraging Menus</p>
      </div>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend eros ut ultrices posuere. Donec mattis rutrum felis vel pharetra.</p>

      <h3 class="content-text__title content-text__title--menus">Recipes</h3>

      <ul class="content-text__list">
        <li class="content-text__recipe-item"><a href="salmon-with-ostrich-fern-and-wild-garlic.php" class="content-text__link">Salmon with ostrich fern and wild garlic</a></li>
        <li class="content-text__recipe-item"><a href="flourless-elderflower-nepalese-raspberry-and-strawberry-cake.php" class="content-text__link">Flourless elderflower, Nepalese raspberry and strawberry cake</a></li>
        <li class="content-text__recipe-item"><a href="bramble-vinegar.php" class="content-text__link">Bramble vinegar</a></li>
        <li class="content-text__recipe-item"><a href="rhubarb-beetroot-spinach-and-avocado-salad.php" class="content-text__link">Rhubarb, beetroot, spinach and avocado salad</a></li>
        <li class="content-text__recipe-item"><a href="sweet-potato-wedges-with-herb-and-cobnut-pesto.php" class="content-text__link">Sweet potato wedges with herb and cobnut pesto</a></li>
      </ul>

    </section>

    <aside class="sidebar">

      <section class="widget">
        <h4 class="widget__title widget__title--bees">Also in this section...</h4>
        <ul class="widget__submenu">
          <li class="widget__submenu-item"><a href="../bees.php">Bees</a></li>
          <li class="widget__submenu-item"><a href="../sustainability.php" class="widget__submenu-link">Sustainability</a></li>
        </div>
      </section>

    </aside>

  </section> <!-- content ends -->

</main>

</div> <!-- site-wrapper ends -->

<script src="<?php echo $assets?>/js/script.js?v=<?php echo date('his'); ?>"></script>
</body>
</html>
