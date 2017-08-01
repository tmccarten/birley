<?php

$pageTitle = "Vine Street School | Schools and Education | Living Lines: Birley Archives";
$pageDescription = "History of Vine Street School of Birley, Hulme, Manchester..";
$pageKeywords = "Birley, History, Education, Highschool";
$activePage = "Site";
$activeSubPage = "Schools and Education";

$assets = "../../assets";

$favIcon = "../../favicon.ico";

include('../../assets/includes/head.php');?>

</head>

<?php

$linkHome = "../../";
$linkAbout = "../../about.php";
$linkContact = "../../contact.php";

$linkSite = "../";
$linkArchive = "../../birley-archive/";
$linkGrow = "../../grow-birley/";
$linkCaseStudies = "../../case-studies/";

include('../../assets/includes/header.php'); ?>

  <main id="skipnav">

    <section class="banner">

      <div class="banner-title-container">
        <h2 class="banner__title">Schools and Education</h2>
      </div>

      <div class="banner-icon">
        <img src="<?php echo $assets?>/img/icons/illustrations/icon_birley.svg" class="banner-icon__svg" alt="Birley.">
      </div>

    </section>

    <section class="content">

      <section class="content-text">

        <div class="breadcrumb">
          <a href="index.php">Schools and Education</a><p>Vine Street School</p>
        </div>

        <h3 class="content-text__title">Vine Street School</h3>

        <p>Vine Street was one of a series of grid-iron streets lying under the Birley site. Vine Street comprised pubs and dwellings and is most notable for being the site of the first Manchester School Board school.</p>
        <figure class="content-image content-image--floatleft">
          <a href="<?php echo $assets?>/img/the-site/vine-street-school/school1.jpg">
            <img src="<?php echo $assets?>/img/the-site/vine-street-school/school1_thumb.jpg" alt="Vine Street School" width="250">
          </a>
          <figcaption>Manchester School Board school</figcaption>
        </figure>
        <p>Earlier in the 1800s, schools were mostly run and supported by individuals, institutions and charities. They were not always regulated and the quality and access to education was not consistent. Following educational reforms, School Boards were set up to standardise education. Manchester led the way in the creation of one of the first state schools. The foundation stone for Vine Street School was laid by the Chairman of the Manchester School Board, Herbert Birley, in 1874. The school opened in 1875.</p>
        <figure class="content-image content-image--floatright">
          <a href="<?php echo $assets?>/img/the-site/vine-street-school/stone.jpg">
            <img src="<?php echo $assets?>/img/the-site/vine-street-school/stone_thumb.jpg" alt="Stone at Vine Street School">
          </a>
          <figcaption>Stone at Vine Street School</figcaption>
        </figure>
        <p>The foundation stone was retained and moved location following demolition of the school. It has since been recovered and there are plans to return it to the site in future.</p>
        <p>The <a href="http://www.victoriansociety.org.uk/publications/manchester-board-schools/" class="content-text__link">Victorian Society</a> publication on Manchester School Boards contains more on the architectural detail of early schools.</p>
      </section>

      <aside class="sidebar">

        <section class="widget">
          <h4 class="widget__title  widget__title--birley-high">Images</h4>
          <div class="widget__images">
            <a href="<?php echo $assets?>/img/the-site/vine-street-school/stone.jpg" class="widget__image">
              <img class="widget__thumbnail" src="<?php echo $assets?>/img/the-site/vine-street-school/stone_thumb.jpg" alt="Stone at Vine Street School" width="250">
            </a>
            <a href="<?php echo $assets?>/img/the-site/vine-street-school/school1.jpg" class="widget__image">
              <img class="widget__thumbnail" src="<?php echo $assets?>/img/the-site/vine-street-school/school1_thumb.jpg" alt="Vine Street School" width="250">
            </a>
            <a href="<?php echo $assets?>/img/the-site/vine-street-school/school2.jpg" class="widget__image">
              <img class="widget__thumbnail" src="<?php echo $assets?>/img/the-site/vine-street-school/school2_thumb.jpg" alt="Vine Street School Manchester School Board" width="250">
            </a>
          </div>

        </section>

        <section class="widget">
          <h4 class="widget__title widget__title--schools-and-education">More from The Site...</h4>
          <ul class="widget__submenu">
            <li class="widget__submenu-item"><a href="../site-history.php">Site History</a></li>
            <li class="widget__submenu-item"><a href="../faculty-history.php">Faculty History</a></li>
            <!-- <li class="widget__submenu-item"><a href="../sport-and-wellbeing.php">Sport and Wellbeing</a></li> -->
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
