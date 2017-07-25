<?php

$pageTitle = "Birley High | Schools and Education | Living Lines: Birley Archives";
$pageDescription = "History of former high school Birley High of Birley, Hulme, Manchester..";
$pageKeywords = "Birley, History, Education, Highschool";
$activePage = "Site";
$activeSubPage = "Schools and Education";

$assets = "../../assets";

$favIcon = "..././favicon.ico";

include('../../assets/includes/head.php');?>

</head>

<?php

$linkHome = "../../";
$linkAbout = "../../about.php";
$linkContact = "../../contact.php";

$linkSite = "../";
$linkArchive = "../../birley-archive/";
$linkGrow = "../../grow-birley/";
$linkMy = "../../my-birley/";

include('../../assets/includes/header.php'); ?>

  <main id="skipnav">

    <section class="banner">

      <div class="banner-title-container">
        <h2 class="banner__title">Schools and Education</h2>
      </div>

      <div class="banner-icon">
        <img src="<?php echo $assets?>/img/icons/illustrations/icon_birleyhighbadge.svg" class="banner-icon__img" alt="Illustration of Birley High motif.">
      </div>

    </section>

    <section class="content">

      <section class="content-text">

        <div class="breadcrumb">
          <a href="index.php">Schools and Education</a><p>Birley High</p>
        </div>

        <h3 class="content-text__title">Birley High</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend eros ut ultrices posuere. Donec mattis rutrum felis vel pharetra.</p>
        <p>Mauris eget sollicitudin sapien, elementum aliquam lorem. Sed purus ante, <a class="content-text__link" href="#">eleifend faucibus</a> vestibulum id, iaculis nec orci. Integer porta arcu nec sem tincidunt, non viverra orci suscipit. Sed quis augue odio. Proin pretium convallis aliquam. Etiam cursus sagittis lobortis. Duis rutrum euismod nisl at convallis</p>

      </section>

      <aside class="sidebar">

        <section class="widget">
          <h4 class="widget__title  widget__title--dig">Images</h4>
          <div class="widget__images">
          </div>
        </section>

        <section class="widget">
          <h4 class="widget__title widget__title--schools-and-education">More from The Site...</h4>
          <ul class="widget__submenu">
            <li class="widget__submenu-item"><a href="../site-history.php">Site History</a></li>
            <li class="widget__submenu-item"><a href="../faculty-history.php">Faculty History</a></li>
            <li class="widget__submenu-item"><a href="../sport-and-wellbeing.php">Sport and Wellbeing</a></li>
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