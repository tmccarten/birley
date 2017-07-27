<?php

$pageTitle = "Stories from the Hearth | Birley Artwork | Living Lines: Birley Archives";
$pageDescription = "Stories from the hearth, stories about Birley, Hulme past and present.";
$pageKeywords = "Birley, Artwork, Hulme";
$activePage = "My";
$activeSubPage = "Artwork";

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
$linkGrow = "../../grow-birley/";
$linkMy = "../";

include('../../assets/includes/header.php'); ?>

<main id="skipnav">

  <section class="banner">

    <div class="banner-title-container">
      <h2 class="banner__title">The Birley Art Project</h2>
    </div>

    <div class="banner-icon">
      <img src="<?php echo $assets?>/img/icons/illustrations/icon_stories.svg" class="banner-icon__img" alt="Illustration of a construction in process.">
    </div>

  </section>

  <section class="content">

    <section class="content-text">

      <div class="breadcrumb">
        <a href="index.php">Case Studies</a><p>Stories from the Hearth</p>
      </div>

      <h3 class="content-text__title">Stories from the Hearth</h3>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend eros ut ultrices posuere. Donec mattis rutrum felis vel pharetra.</p>
    </section>

    <aside class="sidebar">

      <section class="widget">
        <h4 class="widget__title widget__title--artwork">More from Case Studies...</h4>
        <ul class="widget__submenu">
        </ul>
      </section>

    </aside>

  </section> <!-- content ends -->

</main>

<?php include('../../assets/includes/footer.php'); ?>

</div> <!-- site-wrapper ends -->

<script src="<?php echo $assets?>/js/script.js?v=30"></script>
</body>
</html>
