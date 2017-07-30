<?php

$pageTitle = "Stories from the Hearth | Birley Artwork | Living Lines: Birley Archives";
$pageDescription = "Stories from the hearth, stories about Birley, Hulme past and present.";
$pageKeywords = "Birley, Artwork, Hulme";
$activePage = "Case Studies";
$activeSubPage = "Birley Artwork Project";

$assets = "../../../assets";

$favIcon = "../../../favicon.ico";

include('../../../assets/includes/head.php');?>

</head>

<?php

$linkHome = "../../../";
$linkAbout = "../../../about.php";
$linkContact = "../../../contact.php";

$linkSite = "../../../the-site/";
$linkArchive = "../../../birley-archive/";
$linkGrow = "../../../grow-birley/";
$linkCaseStudies = "../../";

include('../../../assets/includes/header.php'); ?>

<main id="skipnav">

  <section class="banner">

    <div class="banner-title-container">
      <h2 class="banner__title">The Birley Artwork Project</h2>
    </div>

    <div class="banner-icon">
      <img src="<?php echo $assets?>/img/icons/illustrations/icon_stories.svg" class="banner-icon__svg" alt="Illustration of a construction in process.">
    </div>

  </section>

  <section class="content">

    <section class="content-text">

      <div class="breadcrumb">
        <a href="../">Birley Artwork Project</a><p>Stories from the Hearth</p>
      </div>

      <h3 class="content-text__title">Stories from the Hearth</h3>

      <blockquote>
        <p>&ldquo;After all, what is history if it is not an imagined past – a collection of facts which are viewed and interpreted in the light of our own experiences.&rdquo;</p>
        <footer>
          <cite> - <a href="http://shirleybakerphotography.com/bio/" class="content-text__link">Shirley Baker, Photographer</a></cite>
        </footer>
      </blockquote>

      <p>Stories from the Hearth was a workshop held by sculptor and artist Brigitte Jurack in March 2017. Members of the Hulme History Society who had lived in the area before the slum clearances chose coloured pieces of paper with questions about their memories of the fireplaces in their terrace homes. Although the intention of this workshop was to etch words from these memories to ‘light up’ the two chimney breasts in the design of the Golden Terrace, the conversations are used here to form a collage of oral history and recollection.</p>
      <figure class="content-image content-image--floatright">
        <a href="<?php echo $assets?>/img/case-studies/stories-from-the-hearth/coke-collection.jpg">
          <img src="<?php echo $assets?>/img/case-studies/stories-from-the-hearth/coke-collection.jpg" alt="Women carrying bags of coal/coke in prams" width="250">
        </a>
        <figcaption>Women carrying sacks of coke</figcaption>
      </figure>
      <p class="small-bottom-margin">This is a reworked narrative and particular thanks go to Nicola, Paul and Dorothy whose collective memories, notes and newspaper clippings posted through my letterbox serve to form this account. Also to Ann for helping to organise the meet-up as the focal point of the group, provider of tea and biscuits, social secretary, et. al.</p>
      <small>- Eleanor Donaldson (Project Coordinator)</small></p>

      <ul class="content-text__list">
        <li class="content-text__list-item"><a href="stories-from-the-hearth.php" class="content-text__link">Stories from the Hearth</a></li>
      </ul>

    </section>

    <aside class="sidebar">

      <section class="widget">
        <h4 class="widget__title  widget__title--stories-from-the-hearth">Images</h4>
        <div class="widget__images">
        <a href="<?php echo $assets?>/img/case-studies/stories-from-the-hearth/coke-collection.jpg" class="widget__image">
          <img src="<?php echo $assets?>/img/case-studies/stories-from-the-hearth/coke-collection_thumb.jpg" alt="Women carrying bags of coal/coke in prams" width="250" class="widget__thumbnail">
        </a>
      </div>
    </section>

      <!-- <section class="widget">
        <h4 class="widget__title widget__title--artwork">More from Case Studies...</h4>
        <ul class="widget__submenu">
        </ul>
      </section> -->

    </aside>

  </section> <!-- content ends -->

</main>

<?php include('../../../assets/includes/footer.php'); ?>

</div> <!-- site-wrapper ends -->

<script src="<?php echo $assets?>/js/script.js?v=30"></script>
</body>
</html>
