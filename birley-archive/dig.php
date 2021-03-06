<?php

$pageTitle = "Birley Dig | Birley Archive Project";
$pageDescription = "Birley campus archaeological dig history.";
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
$linkCaseStudies = "../case-studies/";

include('../assets/includes/header.php'); ?>

<main id="skipnav">

  <section class="banner">

    <div class="banner-title-container">
      <h2 class="banner__title">Archaeological Dig</h2>
    </div>

    <div class="banner-icon">
      <img src="<?php echo $assets?>/img/icons/illustrations/icon_bust.svg" class="banner-icon__svg" alt="Illustration of carved stone church bust.">
    </div>

  </section>


  <section class="content">

    <section class="content-text">

      <div class="breadcrumb">
        <p>Birley Archive</p><p>Archaeological Dig</p>
      </div>

      <p>Between 2011 and 2012, the University commissioned an archaeological investigation on the site that was to become the Birley development.</p>
      <figure class="content-image content-image--floatleft">
      <a href="<?php echo $assets?>/img/birley-archive/archaeological-dig/terraces-6.jpg">
        <img src="<?php echo $assets?>/img/birley-archive/archaeological-dig/terraces-6_thumb.jpg" alt="Archaeological dig site" width="250">
      </a>
      <figcaption>Excavation</figcaption>
      </figure>
      <p>The <a href="http://www2.mmu.ac.uk/media/mmuacuk/content/documents/birley-fields/Birley-Archaeological-Report-2012.pdf">fascinating report</a> reveals the layers of history that lie beneath the site of the University campus; its alternative foundations that take the site through agricultural land, industrial landscapes, beautiful churches and urban regeneration.</p>
      <p>In March 2013, an exhibition - &ldquo;<i>Birley Fields: Exploring our past</i>&rdquo; was held of the finds. Further information can be found at the University’s <a href="http://www.specialcollections.mmu.ac.uk/">Special Collections</a>, based on the third floor of the Library at the All Saints Campus.</p>

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
          <a href="<?php echo $assets?>/img/birley-archive/archaeological-dig/terraces-1.jpg" class="widget__image">
            <img class="widget__thumbnail" src="<?php echo $assets?>/img/birley-archive/archaeological-dig/terraces-1_thumb.jpg" alt="Archaeological dig site" width="250">
          </a>
          <a href="<?php echo $assets?>/img/birley-archive/archaeological-dig/terraces-2.jpg" class="widget__image">
            <img class="widget__thumbnail" src="<?php echo $assets?>/img/birley-archive/archaeological-dig/terraces-2_thumb.jpg" alt="Archaeological dig site" width="250">
          </a>
          <a href="<?php echo $assets?>/img/birley-archive/archaeological-dig/terraces-3.jpg" class="widget__image">
            <img class="widget__thumbnail" src="<?php echo $assets?>/img/birley-archive/archaeological-dig/terraces-3_thumb.jpg" alt="Archaeological dig site" width="250">
          </a>
          <a href="<?php echo $assets?>/img/birley-archive/archaeological-dig/terraces-4.jpg" class="widget__image">
            <img class="widget__thumbnail" src="<?php echo $assets?>/img/birley-archive/archaeological-dig/terraces-4_thumb.jpg" alt="Archaeological dig site" width="250">
          </a>
          <a href="<?php echo $assets?>/img/birley-archive/archaeological-dig/terraces-5.jpg" class="widget__image">
            <img class="widget__thumbnail" src="<?php echo $assets?>/img/birley-archive/archaeological-dig/terraces-5_thumb.jpg" alt="Archaeological dig site" width="250">
          </a>
          <a href="<?php echo $assets?>/img/birley-archive/archaeological-dig/terraces-6.jpg" class="widget__image">
            <img class="widget__thumbnail" src="<?php echo $assets?>/img/birley-archive/archaeological-dig/terraces-6_thumb.jpg" alt="Archaeological dig site" width="250">
          </a>
        </div>
      </section>

      <section class="widget">
        <h4 class="widget__title widget__title--dig">More from Birley Archive...</h4>
        <ul class="widget__submenu">
          <li class="widget__submenu-item"><a href="music.php">Music</a></li>
          <li class="widget__submenu-item"><a href="poetry/">Poetry</a></li>
          <!-- <li class="widget__submenu-item"><a href="stories/">Stories</a></li> -->
          <li class="widget__submenu-item"><a href="photography/">Photography</a></li>
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
