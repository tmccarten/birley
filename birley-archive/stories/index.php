<?php

$pageTitle = "Birley Stories | Living Lines: Birley Archives";
$pageDescription = "Birley stories.";
$pageKeywords = "Birley, Stories, Hulme";
$activePage = "Archive";
$activeSubPage = "Stories";

$assets = "../../assets";

$favIcon = "../../favicon.ico";

include('../../assets/includes/head.php');?>

</head>

<?php

$linkHome = "../../";
$linkAbout = "../../about.php";
$linkContact = "../../contact.php";

$linkSite = "../../the-site/";
$linkArchive = "../";
$linkGrow = "../../grow-birley/";
$linkCaseStudies = "../../case-studies/";

include('../../assets/includes/header.php'); ?>


<main id="skipnav">

  <section class="banner">

    <div class="banner-title-container">
      <h2 class="banner__title">Stories</h2>
    </div>

    <div class="banner-icon">
      <img src="<?php echo $assets?>/img/icons/illustrations/icon_notepad.svg" class="banner-icon__svg" alt="Illustration of blaring speakers.">
    </div>

  </section>

  <section class="content">

    <section class="content-text">

      <div class="breadcrumb">
        <p>Birley Archive</p><p>Stories</p>
      </div>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend eros ut ultrices posuere. Donec mattis rutrum felis vel pharetra.</p>

    </section>

    <aside class="sidebar">

      <section class="widget">
        <h4 class="widget__title widget__title--stories">Audio</h4>

        <div class="widget__audio">
          <audio controls class="widget__audio-inner">
            <source src="horse.ogg" type="audio/ogg">
            <source src="horse.mp3" type="audio/mpeg">
          Your browser does not support the audio element.
          </audio>
        </div>

      </section>

      <section class="widget">
        <h4 class="widget__title widget__title--poetry">More from Birley Archive...</h4>
        <ul class="widget__submenu">
          <li class="widget__submenu-item"><a href="../dig.php">Archaeological Dig</a></li>
          <li class="widget__submenu-item"><a href="../music.php">Music</a></li>
          <li class="widget__submenu-item"><a href="../photography.php">Photography</a></li>
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
