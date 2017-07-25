<?php

$pageTitle = "Al Baker shoots Hulme | Birley Photography | Living Lines: Birley Archives";
$pageDescription = "Al Baker photographs of Hulme in the 80s.";
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
$linkMy = "../../my-birley/";

include('../../assets/includes/header.php'); ?>

<main id="skipnav">

  <section class="banner">

    <div class="banner-title-container">
      <h2 class="banner__title">Photography</h2>
    </div>

    <div class="banner-icon">
      <img src="<?php echo $assets?>/img/icons/illustrations/icon_artwork.png" class="banner-icon__img" width="373" height="219" alt="Illustration of a mural.">
    </div>

  </section>

  <div class="gallery">

    <figure class="photo">
      <a href="<?php echo $assets?>/img/birley-archive/photography/al-baker/bmx.jpg" class="photo__item">
        <img src="<?php echo $assets?>/img/birley-archive/photography/al-baker/bmx.jpg" class="photo__img" width="750" height="422" alt="Man on BMX and man doing graffiti in subway.">
      </a>
      <figcaption>BMX</figcaption>
    </figure>

    <figure class="photo">
      <a href="<?php echo $assets?>/img/birley-archive/photography/al-baker/man.jpg" class="photo__item">
        <img src="<?php echo $assets?>/img/birley-archive/photography/al-baker/man.jpg" class="photo__img" width="750" height="422" alt="Man wearing jeans lying on back holding can of lager on chest.">
      </a>
      <figcaption>Man</figcaption>
    </figure>

    <figure class="photo">
      <a href="<?php echo $assets?>/img/birley-archive/photography/al-baker/mix.jpg" class="photo__item">
        <img src="<?php echo $assets?>/img/birley-archive/photography/al-baker/mix.jpg" class="photo__img" width="750" height="422" alt="Two men hold vinyl records with face-painted children.">
      </a>
      <figcaption>Mix</figcaption>
    </figure>

  </div>

  <section class="content">

    <section class="content-text">

      <div class="breadcrumb">
        <a href="index.php">Photography</a><p>Al Baker shoots Hulme</p>
      </div>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend eros ut ultrices posuere. Donec mattis rutrum felis vel pharetra.</p>

    </section>

    <aside class="sidebar">

      <section class="widget">
        <h4 class="widget__title widget__title--photography">More from Birley Archive...</h4>
        <ul class="widget__submenu">
          <li class="widget__submenu-item"><a href="dig.php">Archaeological Dig</a></li>
          <li class="widget__submenu-item"><a href="poetry/">Poetry</a></li>
          <li class="widget__submenu-item"><a href="stories.php">Stories</a></li>
          <li class="widget__submenu-item"><a href="music.php">Music</a></li>
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
