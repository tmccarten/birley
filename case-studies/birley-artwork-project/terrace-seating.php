<?php

$pageTitle = "Terrace Seating | Birley Artwork | Birley Archive Project";
$pageDescription = "Information on the Terrace Seating project proposal at Birley campus.";
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
      <img src="<?php echo $assets?>/img/icons/illustrations/icon_terraces2.svg" class="banner-icon__svg" alt="Illustration of a construction in process.">
    </div>

  </section>

  <section class="content">

    <section class="content-text">

      <div class="breadcrumb">
        <a href="index.php">The Birley Artwork Project</a><p>Terrace Seating</p>
      </div>

      <h3 class="content-text__title">Terrace Seating</h3>

      <p>Initially presenting a design to provide seating through constructed, permanent, hay bales, to link the once rural environment of Jackson’s Farm with the urban landscaping, 3D designer, Dave Grimshaw, responded to the brief by drafting new designs to link with the Golden Terrace project. The summary of the proposal for Terrace Seating illustrates how functional design can be used to highlight themes in the artwork installations.</p>

      <h4>Project Proposal Summary</h4>
      <div class="serif-text">
        <p>‘The Birley campus is just the latest layer to overlay onto the site’s long architectural and cultural history. The use has changed from open fields, to farmland, to terrace housing, to high-density residential flats, and now the Manchester Met campus.</p>

        <p>This proposal is to develop seating that responds to the historical and layered blueprint of the Birley site to reveal the history of people and place to today’s student and local community.</p>

        <p>Inspired by historical maps of the area, and the written and spoken histories gathered as part of the archaeological investigations of the Birley site, the sunken seating is an ambiguous reconstruction of the remains of the 1890’s terrace houses excavated and documented prior to the campus construction.</p>

        <p>Sunken 0.5m and entered via two small sets of steps, the seating installations share the footprints of the original buildings. The design uses reclaimed red brick in a four-stretcher English garden wall bond construction, and these walls are topped with sandstone slabs to become public seating. The communication with the user is further developed via text incised onto the sandstone slabs that make up the seating surfaces. These speak of the street names, people and trades of the residents, recounting stories of life and community within these streets.</p>

        <p>Reclaimed cast-iron fire surrounds lie in the grass in their original locations, and tin-baths inhabit the back rooms. These additions become planters within each scheme - the red, orange and blue planting adding a whimsical engagement with the necessities of fire and water within the house. Archaeological measuring poles mark the corners of the houses, adding to the sense of ambiguity – are these new constructions or actual cellars and floor plans, revealed and re-purposed?</p>

        <p>The ‘terrace seating’ project contextualizes and locates the Birley Fields site within a geography of location and history - connecting the present to the past, and the campus with the community.’</p>
      </div>

    </section>

    <aside class="sidebar">

      <section class="widget">
        <h4 class="widget__title  widget__title--dig">Images</h4>
        <div class="widget__images">
          <a href="<?php echo $assets?>/img/case-studies/terrace-seating/terrace-seating1.jpg" class="widget__image">
            <img class="widget__thumbnail" src="<?php echo $assets?>/img/case-studies/terrace-seating/terrace-seating1_thumb.jpg" alt="Archaeological dig site" width="250">
          </a>
          <a href="<?php echo $assets?>/img/case-studies/terrace-seating/terrace-seating2.jpg" class="widget__image">
            <img class="widget__thumbnail" src="<?php echo $assets?>/img/case-studies/terrace-seating/terrace-seating2.jpg" alt="Blueprint" width="250">
          </a>
          <a href="<?php echo $assets?>/img/case-studies/terrace-seating/terrace-seating3.jpg" class="widget__image">
            <img class="widget__thumbnail" src="<?php echo $assets?>/img/case-studies/terrace-seating/terrace-seating3.jpg" alt="Design drawings site" width="250">
          </a>
          <a href="<?php echo $assets?>/img/case-studies/terrace-seating/terrace-seating-proposal.jpg" class="widget__image">
            <img class="widget__thumbnail" src="<?php echo $assets?>/img/case-studies/terrace-seating/terrace-seating-proposal_thumb.jpg" alt="Terrace Seating proposal" width="250">
          </a>
        </div>
      </section>

      <section class="widget">
        <h4 class="widget__title widget__title--artwork">More from Birley Artwork Project...</h4>
        <ul class="widget__submenu">
          <li class="widget__submenu-item"><a href="research.php">Research</a></li>
          <li class="widget__submenu-item"><a href="golden-terrace.php">Golden Terrace</a></li>
          <li class="widget__submenu-item"><a href="where-the-wind-blows.php">Where the Wind Blows</a></li>
          <li class="widget__submenu-item"><a href="thresholds.php">Thresholds</a></li>
          <li class="widget__submenu-item"><a href="stories-from-the-hearth/">Stories From The Hearth</a></li>
          <li class="widget__submenu-item"><a href="the-bees.php">The Bees</a></li>
        </ul>
      </section>

    </aside>

  </section> <!-- content ends -->

</main>

<?php include('../../assets/includes/footer.php'); ?>

</div> <!-- site-wrapper ends -->

<script src="<?php echo $assets?>/js/script.js?v=<?php echo $javaVersion?>"></script>
</body>
</html>
