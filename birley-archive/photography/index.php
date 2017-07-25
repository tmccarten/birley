<?php

$pageTitle = "Birley Photography | Living Lines: Birley Archives";
$pageDescription = "Photographs of Hulme, Manchester throughout the ages.";
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
      <a href="<?php echo $assets?>/img/birley-archive/photography/3-legs-of-man.jpg" class="photo__item">
        <img src="<?php echo $assets?>/img/birley-archive/photography/3-legs-of-man.jpg" class="photo__img" width="1024" height="653" alt="'From the three legs of man', black and white photo, men with horse and cart.">
      </a>
      <figcaption>From the three legs of man</figcaption>
    </figure>

    <figure class="photo">
      <a href="<?php echo $assets?>/img/birley-archive/photography/charlesbarry1.png" class="photo__item">
        <img src="<?php echo $assets?>/img/birley-archive/photography/charlesbarry1.png" class="photo__img" width="792" height="529" alt="Hooded woman and two dogs walking down concrete ramp with The Crescents flats in background.">
      </a>
      <figcaption>The Crescents</figcaption>
    </figure>

    <figure class="photo">
      <a href="<?php echo $assets?>/img/birley-archive/photography/crescents.jpg" class="photo__item">
        <img src="<?php echo $assets?>/img/birley-archive/photography/crescents.jpg" class="photo__img" width="400" height="300" alt="Black and white aerial shot of The Crescents flats, Hulme.">
      </a>
      <figcaption>The Crescents from above</figcaption>
    </figure>

    <figure class="photo">
      <a href="<?php echo $assets?>/img/birley-archive/photography/hoardings-1.jpg" class="photo__item">
        <img src="<?php echo $assets?>/img/birley-archive/photography/hoardings-1.jpg" class="photo__img" width="1024" height="790" alt="Black and white shot of children standing at Hugh Woods shop front.">
      </a>
      <figcaption>Hoardings</figcaption>
    </figure>

    <figure class="photo">
      <a href="<?php echo $assets?>/img/birley-archive/photography/hoardings-2.jpg" class="photo__item">
        <img src="<?php echo $assets?>/img/birley-archive/photography/hoardings-2.jpg" class="photo__img" width="1024" height="726" alt="Black and white shot of a terraced house with net curtain.">
      </a>
      <figcaption>Hoardings</figcaption>
    </figure>

    <figure class="photo">
      <a href="<?php echo $assets?>/img/birley-archive/photography/Jackson-crescent.jpg" class="photo__item">
        <img src="<?php echo $assets?>/img/birley-archive/photography/Jackson-crescent.jpg" class="photo__img" width="1024" height="757" alt="Black and white shot of Jackson Crescent flats with cars in distance.">
      </a>
      <figcaption>Jackson Crescent</figcaption>
    </figure>

    <figure class="photo">
      <a href="<?php echo $assets?>/img/birley-archive/photography/Ringbeck-crescent.jpg" class="photo__item">
        <img src="<?php echo $assets?>/img/birley-archive/photography/Ringbeck-crescent.jpg" class="photo__img" width="1024" height="741" alt="Black and white shot of Ringbeck Crescent flats with cars and policeman.">
      </a>
      <figcaption>Ringbeck Crescent</figcaption>
    </figure>

    <figure class="photo">
      <a href="<?php echo $assets?>/img/birley-archive/photography/streets-hulme.jpg" class="photo__item">
        <img src="<?php echo $assets?>/img/birley-archive/photography/streets-hulme.jpg" class="photo__img" width="1024" height="785" alt="Black and white shot of a cobbled Hulme street with fallen cart centre.">
      </a>
      <figcaption>Hulme street</figcaption>
    </figure>

    <div class="fill-space-photos">
    </div>

    <div class="fill-space-photos">
    </div>

    <div class="fill-space-photos">
    </div>

    <div class="fill-space-photos">
    </div>

  </div>

  <section class="content">

    <section class="content-text">

      <div class="breadcrumb">
        <p>Birley Archive</p><p>Photography</p>
      </div>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend eros ut ultrices posuere. Donec mattis rutrum felis vel pharetra.</p>
      <a href="al-baker.php" class="content-text__link">Al Baker shoots Hulme</a>

    </section>

    <aside class="sidebar">

      <section class="widget">
        <h4 class="widget__title widget__title--photography">More from Birley Archive...</h4>
        <ul class="widget__submenu">
          <li class="widget__submenu-item"><a href="../dig.php">Archaeological Dig</a></li>
          <li class="widget__submenu-item"><a href="../poetry/">Poetry</a></li>
          <li class="widget__submenu-item"><a href="../stories.php">Stories</a></li>
          <li class="widget__submenu-item"><a href="../music.php">Music</a></li>
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