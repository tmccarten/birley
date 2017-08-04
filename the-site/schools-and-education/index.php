<?php

$pageTitle = "Birley Schools and Education | Living Lines: Birley Archives";
$pageDescription = "Schools and education in the area of Birley, Hulme, Manchester..";
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
          <p>The Site</p><p>Schools and Education</p>
        </div>

        <p>The site has a long history of connections to education, including the first Manchester School Board school which was established at Vine Street. The remains of Vine Street were uncovered during the archaeological excavations. Today one of the Birley Residence takes its name.</p>
        <p>Locally, Birley High School was another pioneering example of the area’s influence on Manchester’s history of educational reform and the strive for equality.</p>
        <ul class="content-text__list">
          <li class="content-text__list-item"><a class="content-text__link" href="birley-high.php">Birley High School</a></li>
          <li class="content-text__list-item"><a class="content-text__link" href="vine-street-school.php">Vine Street School</a></li>
        </ul>

      </section>

      <aside class="sidebar">

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
