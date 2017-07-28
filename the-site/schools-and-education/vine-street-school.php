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
        <img src="<?php echo $assets?>/img/icons/illustrations/icon_birleyhighbadge.svg" class="banner-icon__svg" alt="Illustration of Birley High motif.">
      </div>

    </section>

    <section class="content">

      <section class="content-text">

        <div class="breadcrumb">
          <a href="index.php">Schools and Education</a><p>Vine Street School</p>
        </div>

        <h3 class="content-text__title">Vine Street School</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend eros ut ultrices posuere. Donec mattis rutrum felis vel pharetra.</p>        

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



<script src="<?php echo $assets?>/js/script.js?v=30"></script>
</body>
</html>
