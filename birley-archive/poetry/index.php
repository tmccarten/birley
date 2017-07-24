<?php

$pageTitle = "Birley Poetry | Living Lines: Birley Archives";
$pageDescription = "Birley poetry.";
$pageKeywords = "Birley, Poetry, Hulme";
$activePage = "Archive";
$activeSubPage = "Poetry";

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
      <h2 class="banner__title">Poetry</h2>
    </div>

    <div class="banner-icon">
      <img src="<?php echo $assets?>/img/icons/illustrations/icon_notepad.svg" class="banner-icon__img" alt="Illustration of a notepad and pen.">
    </div>

  </section>

  <section class="content">

    <section class="content-text">

      <div class="breadcrumb">
        <p>Birley Archive</p><p>Poetry</p>
      </div>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend eros ut ultrices posuere. Donec mattis rutrum felis vel pharetra.</p>

      <h3 class="content-text__title content-text__title--plain">Poems</h3>

      <ul class="content-text__list">
        <li class="content-text__list-item"><a href="hulme-in-the-1950s.php" class="content-text__link">&ldquo;Hulme in the 1950s&rdquo;</a></li>
        <li class="content-text__list-item"><a href="hulme-through-my-ages.php" class="content-text__link">&ldquo;Hulme through my ages&rdquo;</a></li>
        <li class="content-text__list-item"><a href="hulme.php" class="content-text__link">&ldquo;Hulme&rdquo;</a></li>
        <li class="content-text__list-item"><a href="the-crescents-the-sonnets.php" class="content-text__link">&ldquo;The Crescents - Sonnets&rdquo;</a></li>
      </ul>

    </section>

    <aside class="sidebar">

      <section class="widget">
        <h4 class="widget__title widget__title--poetry">Also in this section...</h4>
        <ul class="widget__submenu">
          <li class="widget__submenu-item"><a href="../dig.php">Archaeological Dig</a></li>
          <li class="widget__submenu-item"><a href="../stories.php">Stories</a></li>
          <li class="widget__submenu-item"><a href="../music.php">Music</a></li>
          <li class="widget__submenu-item"><a href="../photography.php">Photography</a></li>
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
