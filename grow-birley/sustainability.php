<?php

$pageTitle = "Sustainability Birley | Living Lines: Birley Archives";
$pageDescription = "Sustainability and plants and garden centres in Birley, Hulme, Manchester.";
$pageKeywords = "Birley, Foraging, Bees, Sustainability";
$activePage = "Grow";
$activeSubPage = "Sustainability";

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
$linkCaseStudies = "../case-studies/";

include('../assets/includes/header.php'); ?>

<main id="skipnav">

  <section class="banner">

    <div class="banner-title-container">
      <h2 class="banner__title">Sustainability</h2>
    </div>

    <div class="banner-icon">
      <img src="<?php echo $assets?>/img/icons/illustrations/icon_sustainability.svg" class="banner-icon__svg" alt="Illustration of a fern.">
    </div>

  </section>

  <section class="content">

    <section class="content-text">

      <div class="breadcrumb">
        <p>Grow Birley</p><p>Sustainability</p>
      </div>

      <p>Part of the remit of the Birley Artwork project was to investigate themes of sustainability and growth. This section focusses on some of the initiatives on the present site and opportunities for future development.</p>
      <p>An abundance of culinary herbs are grown in the Sensory Garden which are available to all. Look out for the ‘How to Harvest’ guidelines available by each planter to ensure herb plants remain healthy for the future. Or take a look at <a href="http://www2.mmu.ac.uk/birley/sustainability/birley-orchard/" class="content-text__link">Birley Orchard</a> to find out more about fruit tree cultivation and how you can help.</p>
      <p>The <a href="http://www2.mmu.ac.uk/birley/sustainability/birley-community-woodland/" class="content-text__link">woodland area</a> is managed by <a href="http://www.hulmegardencentre.org.uk/" class="content-text__link">Hulme Community Garden Centre</a>, who offer a wide range of activities, workshops and educational projects. Plants available to pick and forage include wild sorrel, sweet cicely, garlic mustard, nettles, blackberry and lemon balm, amongst others. Have a look at <a href="foraging/" class="content-text__link">Met Munch</a>’s fabulous suggestions for recipes using ingredients that can be found at Birley and the nearby Garden Centre.</p>
      <p>For information on bees and the Birley Artwork project read more at <a href="../case-studies/birley-artwork-project/" class="content-text__link">The Birley Artwork Project</a>.</p>

    </section>

    <aside class="sidebar">

      <section class="widget">
        <h4 class="widget__title widget__title--sustainability">Links</h4>
        <div class="widget__links">
          <a href="http://www2.mmu.ac.uk/birley/sustainability/birley-orchard/" class="widget__link">Birley Orchard</a>
          <a href="http://www2.mmu.ac.uk/birley/sustainability/birley-community-woodland/" class="widget__link">Birley Community Woodland</a>
          <a href="http://www.hulmegardencentre.org.uk/" class="widget__link">Hulme Community Garden Centre</a>
        </div>
      </section>

      <section class="widget">
        <h4 class="widget__title widget__title--sustainability">More from Grow Birley...</h4>
        <ul class="widget__submenu">
          <!-- <li class="widget__submenu-item"><a href="bees.php">Bees</a></li> -->
          <li class="widget__submenu-item"><a href="foraging/">Foraging Menus</a></li>
        </ul>
      </section>

    </aside>

  </section> <!-- content ends -->

</main>

<?php include('../assets/includes/footer.php'); ?>

</div> <!-- site-wrapper ends -->

<script src="<?php echo $assets?>/js/script.js?v=<?php echo $javaVersion?>"></script>
</body>
</html>
