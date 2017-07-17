<?php

$pageTitle = "Sport - Past and Present | Living Lines: Birley Archives";
$pageDescription = "Sport past and present in Birley, Hulme, Manchester..";
$pageKeywords = "Birley, History, Sports";
$activePage = "Health";
$activeSubPage = "Sport";

$assets = "../assets";

$favIcon = "../favicon.ico";

include('../assets/includes/head.php');?>

</head>

<?php

$linkHome = "../";
$linkAbout = "../about.php";
$linkContact = "../contact.php";

$linkHealth = "./";
$linkArchive = "../birley-archive/";
$linkGrow = "../grow-birley/";
$linkMy = "../my-birley/";

include('../assets/includes/header.php'); ?>

<main id="skipnav">

  <section class="banner">

    <h2 class="banner__title">Sport</h2>

    <div class="banner-icon">
      <img src="<?php echo $assets?>/img/icons/icon_birleyhighbadge.svg" class="banner-icon__img" alt="Illustration of Birley High motif.">
    </div>

  </section>

  <div class="breadcrumb">
    <p class="breadcrumb__grey">Birley Health and Education</p><p class="breadcrumb__grey">Sport</p>
  </div>

  <section class="content">

    <section class="content-text">

      <h3 class="content-text__title">About</h3>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend eros ut ultrices posuere. Donec mattis rutrum felis vel pharetra.</p>
      <p>Mauris eget sollicitudin sapien, elementum aliquam lorem. Sed purus ante, <a class="content-text__link" href="#">eleifend faucibus</a> vestibulum id, iaculis nec orci. Integer porta arcu nec sem tincidunt, non viverra orci suscipit. Sed quis augue odio. Proin pretium convallis aliquam. Etiam cursus sagittis lobortis. Duis rutrum euismod nisl at convallis</p>

    </section>

    <aside class="sidebar">

      <section class="widget">
        <h4 class="widget__title">Images</h4>
        <div class="widget__images">
          <a href="<?php echo $assets?>/img/birley-archive/terraces-1.jpg" class="widget__image">
            <img class="widget__thumbnail" src="<?php echo $assets?>/img/birley-archive/terraces-1.jpg" alt="" width="250">
          </a>
          <a href="<?php echo $assets?>/img/birley-archive/terraces-2.jpg" class="widget__image">
            <img class="widget__thumbnail" src="<?php echo $assets?>/img/birley-archive/terraces-2.jpg" alt="" width="250">
          </a>
          <a href="<?php echo $assets?>/img/birley-archive/terraces-3.jpg" class="widget__image">
            <img class="widget__thumbnail" src="<?php echo $assets?>/img/birley-archive/terraces-3.jpg" alt="" width="250">
          </a>
          <a href="<?php echo $assets?>/img/birley-archive/terraces-4.jpg" class="widget__image">
            <img class="widget__thumbnail" src="<?php echo $assets?>/img/birley-archive/terraces-4.jpg" alt="" width="250">
          </a>
          <a href="<?php echo $assets?>/img/birley-archive/terraces-5.jpg" class="widget__image">
            <img class="widget__thumbnail" src="<?php echo $assets?>/img/birley-archive/terraces-5.jpg" alt="" width="250">
          </a>
          <a href="<?php echo $assets?>/img/birley-archive/terraces-6.jpg" class="widget__image">
            <img class="widget__thumbnail" src="<?php echo $assets?>/img/birley-archive/terraces-6.jpg" alt="" width="250">
          </a>
        </div>
      </section>

    </aside>

  </section> <!-- content ends -->

</main>

</div> <!-- site-wrapper ends -->

<script src="<?php echo $assets?>/js/script.js?v=<?php echo date('his'); ?>"></script>
</body>
</html>
