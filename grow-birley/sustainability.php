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

<div class="breadcrumb">
  <p class="breadcrumb__grey">Grow Birley</p><p class="breadcrumb__grey">Sustainability</p>
</div>

<main id="skipnav" class="main">

  <div class="main-icon">
    <img src="<?php echo $assets?>/img/icons/icon_sustainability.svg" class="main-icon__img" alt="Illustration of a fern.">
  </div>

  <section class="main-text">
    <h2 class="main-text__title">Sustainability</h2>

    <p>An abundance of culinary herbs are grown in the Sensory Garden which are available to all. Look out for the ‘How to Harvest’ guidelines available by each planter to ensure herb plants remain healthy for the future. Or take a look at <a href="http://www2.mmu.ac.uk/birley/sustainability/birley-orchard/" class="main-text__link">Birley Orchard</a> to find out more about fruit tree cultivation and how you can help.</p>
    <p>The <a href="http://www2.mmu.ac.uk/birley/sustainability/birley-community-woodland/" class="main-text__link">woodland area</a> is managed by <a href="http://www.hulmegardencentre.org.uk/" class="main-text__link">Hulme Community Garden Centre</a>, who offer a wide range of activities, workshops and educational projects. Plants available to pick and forage include wild sorrel, sweet cicely, garlic mustard, nettles, blackberry and lemon balm, amongst others. Have a look at Met Munch’s fabulous suggestions for <a href="foraging.php" class="main-text__link">recipes</a> using ingredients that can be found at Birley and the nearby Garden Centre.</p>
    <p>And spare a thought for the pollinators! For information on bees and bee-related projects take a look at our <a href="bees.php" class="main-text__link">Bee Birley</a> page.</p>

  </section>

</main>

</div> <!-- site-wrapper ends -->

<script src="<?php echo $assets?>/js/script.js?v=<?php echo date('his'); ?>"></script>
</body>
</html>
