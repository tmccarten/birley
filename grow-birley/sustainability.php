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

$linkHealth = "../birley-health-and-education/";
$linkArchive = "../birley-archive/";
$linkGrow = "./";
$linkMy = "../my-birley/";

include('../assets/includes/header.php'); ?>

<main id="skipnav">

  <section class="banner">

    <div class="banner-title-container">
      <h2 class="banner__title">Sustainability</h2>
    </div>

    <div class="banner-icon">
      <img src="<?php echo $assets?>/img/icons/icon_sustainability.svg" class="banner-icon__img" alt="Illustration of a fern.">
    </div>

  </section>

  <section class="content">

    <section class="content-text">



      <div class="breadcrumb">
        <p>Grow Birley</p><p class="breadcrumb__grey">Sustainability</p>
      </div>

      <p>An abundance of culinary herbs are grown in the Sensory Garden which are available to all. Look out for the ‘How to Harvest’ guidelines available by each planter to ensure herb plants remain healthy for the future. Or take a look at <a href="http://www2.mmu.ac.uk/birley/sustainability/birley-orchard/" class="content-text__link">Birley Orchard</a> to find out more about fruit tree cultivation and how you can help.</p>
      <p>The <a href="http://www2.mmu.ac.uk/birley/sustainability/birley-community-woodland/" class="content-text__link">woodland area</a> is managed by <a href="http://www.hulmegardencentre.org.uk/" class="content-text__link">Hulme Community Garden Centre</a>, who offer a wide range of activities, workshops and educational projects. Plants available to pick and forage include wild sorrel, sweet cicely, garlic mustard, nettles, blackberry and lemon balm, amongst others. Have a look at Met Munch’s fabulous suggestions for <a href="foraging.php" class="content-text__link">recipes</a> using ingredients that can be found at Birley and the nearby Garden Centre.</p>
      <p>And spare a thought for the pollinators! For information on bees and bee-related projects take a look at our <a href="bees.php" class="content-text__link">Bee Birley</a> page.</p>

    </section>

    <aside class="sidebar">

      <section class="widget">
        <h4 class="widget__title">Links</h4>
        <div class="widget__links">
          <a href="http://www2.mmu.ac.uk/birley/sustainability/birley-orchard/" class="widget__link">Birley Orchard</a>
          <a href="http://www2.mmu.ac.uk/birley/sustainability/birley-community-woodland/" class="widget__link">Birley Community Woodland</a>
          <a href="http://www.hulmegardencentre.org.uk/" class="widget__link">Hulme Community Garden Centre</a>
        </div>
      </section>
      
    </aside>

  </section> <!-- content ends -->

</main>

</div> <!-- site-wrapper ends -->

<script src="<?php echo $assets?>/js/script.js?v=<?php echo date('his'); ?>"></script>
</body>
</html>
