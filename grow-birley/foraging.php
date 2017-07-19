<?php

$pageTitle = "Foraging Birley | Living Lines: Birley Archives";
$pageDescription = "Foraging in Birley.";
$pageKeywords = "Birley, Foraging, Sustainability";
$activePage = "Grow";
$activeSubPage = "Foraging";

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
      <h2 class="banner__title">Foraging</h2>
    </div>

    <div class="banner-icon">
      <img src="<?php echo $assets?>/img/icons/icon_foraging.svg" class="banner-icon__img" alt="Illustration of a fern, berries and nuts.">
    </div>

  </section>

  <section class="content">

    <section class="content-text">



      <div class="breadcrumb">
        <p>Grow Birley</p><p class="breadcrumb__grey">Foraging</p>
      </div>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend eros ut ultrices posuere. Donec mattis rutrum felis vel pharetra.</p>
      <p>Mauris eget sollicitudin sapien, elementum aliquam lorem. Sed purus ante, <a class="content-text__link" href="#">eleifend faucibus</a> vestibulum id, iaculis nec orci. Integer porta arcu nec sem tincidunt, non viverra orci suscipit. Sed quis augue odio. Proin pretium convallis aliquam. Etiam cursus sagittis lobortis. Duis rutrum euismod nisl at convallis</p>

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
