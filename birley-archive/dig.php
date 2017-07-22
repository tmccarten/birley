<?php

$pageTitle = "Birley Dig | Living Lines: Birley Archives";
$pageDescription = "Birley archaeological dig history.";
$pageKeywords = "Birley, Dig, Archaeology, History";
$activePage = "Archive";
$activeSubPage = "Dig";

$assets = "../assets";

$favIcon = "../favicon.ico";

include('../assets/includes/head.php');?>

</head>

<?php

$linkHome = "../";
$linkAbout = "../about.php";
$linkContact = "../contact.php";

$linkSite = "../the-site/";
$linkArchive = "./";
$linkGrow = "../grow-birley/";
$linkMy = "../my-birley/";

include('../assets/includes/header.php'); ?>

<main id="skipnav">

  <section class="banner">

    <div class="banner-title-container">
      <h2 class="banner__title">Archaeological Dig</h2>
    </div>

    <div class="banner-icon">
      <img src="<?php echo $assets?>/img/icons/illustrations/icon_bust.svg" class="banner-icon__img" alt="Illustration of carved stone church bust.">
    </div>

  </section>


  <section class="content">

    <section class="content-text">

      <div class="breadcrumb">
        <p>Birley Archive</p><p>Archaeological Dig</p>
      </div>

      <p>Between 2011 and 2012, the university commissioned an archaeological investigation on the site that was to become the Birley development.</p>
      <p>The <a href="http://www2.mmu.ac.uk/media/mmuacuk/content/documents/birley-fields/Birley-Archaeological-Report-2012.pdf" class="content-text__link">fascinating report</a> reveals the layers of history that lie beneath the site of the university campus; its alternative foundations that take the site through agricultural land, industrial landscapes, beautiful churches and urban regeneration.</p>
      <p>In March 2013, an exhibition was held of the finds. Further information can be found at the University’s <a href="http://www.specialcollections.mmu.ac.uk/" class="content-text__link">Special Collections</a>, based on the third floor of the Library at the All Saints Campus.</p>

    </section>

    <aside class="sidebar">

      <section class="widget">
        <h4 class="widget__title widget__title--dig">Links</h4>
        <div class="widget__links">
          <a href="http://www2.mmu.ac.uk/media/mmuacuk/content/documents/birley-fields/Birley-Archaeological-Report-2012.pdf" class="widget__link">Birley Archaeological Report 2012</a>
          <a href="http://www.specialcollections.mmu.ac.uk/" class="widget__link">MMU Special Collections</a>
        </div>
      </section>

      <section class="widget">
        <h4 class="widget__title  widget__title--dig">Images</h4>
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

      <section class="widget">
        <h4 class="widget__title widget__title--dig">Also in this section...</h4>
        <ul class="widget__submenu">
          <li class="widget__submenu-item"><a href="music.php">Music</a></li>
          <li class="widget__submenu-item"><a href="poetry.php">Poetry</a></li>
          <li class="widget__submenu-item"><a href="stories.php">Stories</a></li>
          <li class="widget__submenu-item"><a href="photography.php">Photography</a></li>
      </section>

    </aside>

  </section> <!-- content ends -->

</main>

<?php include('../assets/includes/footer.php'); ?>

</div> <!-- site-wrapper ends -->


<script src="<?php echo $assets?>/js/script.js?v=<?php echo date('his'); ?>"></script>
</body>
</html>
