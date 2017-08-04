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
$linkCaseStudies = "../../case-studies/";

include('../../assets/includes/header.php'); ?>

<main id="skipnav">

  <section class="banner">

    <div class="banner-title-container">
      <h2 class="banner__title">Foraging Menus</h2>
    </div>

    <div class="banner-icon">
      <img src="<?php echo $assets?>/img/icons/illustrations/icon_metmunch.png" width="300" height="200" class="banner-icon__img" alt="ManMet Munch">
    </div>

  </section>

  <section class="content">

    <section class="content-text">

      <div class="breadcrumb">
        <p>Grow Birley</p><p>Foraging Menus</p>
      </div>

      <p>With thanks to <a href="http://www.metmunch.com">MetMUnch</a> | <a href="https://twitter.com/MetMUnch">@MetMUnch</a> </p>
      <p>The following recipes include some things foragable around Birley. Look out for the ingredients in bold...</p>

      <h3 class="content-text__title content-text__title--plain">Recipes</h3>

      <ul class="content-text__menu">
        <li class="content-text__menu-item"><img src="<?php echo $assets?>/img/icons/illustrations/icon_sustainability.svg" width="100" height="100"><a href="salmon-with-ostrich-fern-and-wild-garlic.php">Salmon with ostrich fern and wild garlic</a></li>
        <li class="content-text__menu-item"><img src="<?php echo $assets?>/img/icons/illustrations/icon_raspberry.svg" width="100" height="54"><a href="flourless-elderflower-nepalese-raspberry-and-strawberry-cake.php">Flourless elderflower, Nepalese raspberry and strawberry cake</a></li>
        <li class="content-text__menu-item"><img src="<?php echo $assets?>/img/icons/illustrations/icon_bramble.svg" width="65" height="100"><a href="bramble-vinegar.php">Bramble vinegar</a></li>
        <li class="content-text__menu-item"><img src="<?php echo $assets?>/img/icons/illustrations/icon_sustainability.svg" width="100" height="100"><a href="rhubarb-beetroot-spinach-and-avocado-salad.php">Rhubarb, beetroot, spinach and avocado salad</a></li>
        <li class="content-text__menu-item"><img src="<?php echo $assets?>/img/icons/illustrations/icon_cobnut.svg" width="100" height="100"><a href="sweet-potato-wedges-with-herb-and-cobnut-pesto.php">Sweet potato wedges with herb and cobnut pesto</a></li>
      </ul>

    </section>

    <aside class="sidebar">

      <section class="widget">
        <h4 class="widget__title widget__title--foraging">More from Grow Birley...</h4>
        <ul class="widget__submenu">
          <!-- <li class="widget__submenu-item"><a href="../bees.php">Bees</a></li> -->
          <li class="widget__submenu-item"><a href="../sustainability.php">Sustainability</a></li>
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
