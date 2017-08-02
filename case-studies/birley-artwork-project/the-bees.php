<?php

$pageTitle = "The Bees | Birley Artwork | Living Lines: Birley Archives";
$pageDescription = "Birley artwork.";
$pageKeywords = "Birley, Artwork, Hulme";
$activePage = "Case Studies";
$activeSubPage = "Birley Artwork Project";

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
$linkCaseStudies = "../";

include('../../assets/includes/header.php'); ?>

<main id="skipnav">

  <section class="banner">

    <div class="banner-title-container">
      <h2 class="banner__title">The Birley Artwork Project</h2>
    </div>

    <div class="banner-icon">
      <img src="<?php echo $assets?>/img/icons/illustrations/icon_bee.svg" class="banner-icon__svg" alt="Illustration of a bee.">
    </div>

  </section>

  <section class="content">

    <section class="content-text">

      <div class="breadcrumb">
        <a href="index.php">The Birley Artwork Project</a><p>The Bees</p>
      </div>

      <h3 class="content-text__title">The Bees</h3>

      <p>When Manchester adopted the worker bee as its emblem in the Industrial Revolution it was because the city had undergone a rapid period of industrialisation and had become a hive of activity. This was certainly reflected in the terraces built to house Manchester’s growing population of mill workers and associated industries as evidenced on the Birley site until the middle of last century</p>
      <p>The bee itself has recently become a powerful symbol of unity. With installed bee hives on the roof of Manchester Art Gallery, an increasing number of creative projects are now raising awareness of our relationship with the bee as an essential part of our ecosystem, and an important symbol of interdependency, cooperation and creative networks. As part of this project, the artist and project coordinator conducted research into the life of bees, including their patterns of movement and their communication and how this might be represented artistically.</p>
      <p>In 2014-2015, artist Janet Griffiths researched proposals for woven bee hives and planters as part of a feasibility study into options for public art installation on the site. The project further explored the potential for live bee hives. This investigation concluded, however, that forage, i.e. planting for bees was a more important component. The Bees sub-page has more information in relation to Birley planting.</p>

      <h4>Project Proposal Summary:</h4>
      <h5>Option 1</h5>
      <div class="serif-text">
      <p><i>The bee project proposes a large scale sculpture implanted with dwarf lavender plants. Smaller worker bees could be made out of various materials through schools and community projects. The project works alongside existing planting schemes and aims to emphasise the ecological cycle with opportunities for learning and real hives.</p>
      <p>If using metal, there is potential for recycling and references to Rolls Royce, who had a factory close to the site where the first Rolls Royce was made.</i></p>
      </div>

      <h5>Option 2</h5>
      <div class="serif-text">
        <p><i>Hanging willow structure implanted with smaller baskets filled with moss/ compost and flowers which attract bees (pollinators) with smaller worker bees placed around a central sculpture as in a hive. Smaller groups of bees could also be placed in the green areas across the site and in the trees. Associated planting.</p>
        <p>Another possibility, with relevant permission, is to include text art in the form of a poem by poet laureate Carol Ann Duffy from ‘The Bees’ to tie in with events and/or poetry events and summer events in Hulme.</i></p>


    </section>


    <aside class="sidebar">

      <section class="widget">
        <h4 class="widget__title widget__title--artwork">More from Birley Artwork Project...</h4>
        <ul class="widget__submenu">
          <li class="widget__submenu-item"><a href="research.php">Research</a></li>
          <li class="widget__submenu-item"><a href="golden-terrace.php">Golden Terrace</a></li>
          <li class="widget__submenu-item"><a href="where-the-wind-blows.php">Where The Wind Blows</a></li>
          <li class="widget__submenu-item"><a href="thresholds.php">Thresholds</a></li>
          <li class="widget__submenu-item"><a href="terrace-seating.php">Terrace Seating</a></li>
          <li class="widget__submenu-item"><a href="stories-from-the-hearth/">Stories from the Hearth</a></li>
        </ul>
      </section>

      <section class="widget">
        <h4 class="widget__title  widget__title--birley-high">Images</h4>
        <div class="widget__images">
          <a href="<?php echo $assets?>/img/case-studies/the-bees/hexagon.jpg" class="widget__image">
            <img class="widget__thumbnail" src="<?php echo $assets?>/img/case-studies/the-bees/hexagon_thumb.jpg" alt="Bee hive drawing" width="250">
          </a>
          <a href="<?php echo $assets?>/img/case-studies/the-bees/bee-skep.jpg" class="widget__image">
            <img class="widget__thumbnail" src="<?php echo $assets?>/img/case-studies/the-bees/bee-skep_thumb.jpg" alt="Bee skep drawing" width="250">
          </a>
          <a href="<?php echo $assets?>/img/case-studies/the-bees/planters.jpg" class="widget__image">
            <img class="widget__thumbnail" src="<?php echo $assets?>/img/case-studies/the-bees/planters_thumb.jpg" alt="Bee planters" width="250">
          </a>
        </div>

      </section>

    </aside>

  </section> <!-- content ends -->

</main>

<?php include('../../assets/includes/footer.php'); ?>

</div> <!-- site-wrapper ends -->

<script src="<?php echo $assets?>/js/script.js?v=<?php echo $javaVersion?>"></script>
</body>
</html>
