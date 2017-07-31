<?php

$pageTitle = "Birley Music | Living Lines: Birley Archives";
$pageDescription = "Birley music history.";
$pageKeywords = "Birley, Music, History";
$activePage = "Archive";
$activeSubPage = "Music";

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
      <h2 class="banner__title">Music</h2>
    </div>

    <div class="banner-icon">
      <img src="<?php echo $assets?>/img/icons/illustrations/icon_music.svg" class="banner-icon__svg" alt="Illustration of blaring speakers.">
    </div>

  </section>

  <section class="content">

    <section class="content-text">

      <div class="breadcrumb">
        <p>Birley Archive</p><p>Music</p>
      </div>

      <p>One of the most notable music history landmarks adjacent to Birley is the Epping Road bridge, popularly known locally as the ‘Joy Division’ bridge after it appeared on the cover of their Best Of album. The image of the band in the snow was taken by renowned rock photographer Kevin Cummins.</p>
      <p>In fact the whole area is often credited with germinating some of the most distinctive sounds of the late 1970s, 1980s and Madchester music scenes, from beats, hip-hop and reggae to gigs in a ‘squat club’ in Barry Close: ‘The Kitchen’, and the former Russell Club with its links to Factory Records in Royce Road.</p>
      <p><a href="http://www.newmanchesterwalks.com/" class="content-text__link">Musical history tours</a> are available.</p>

    </section>

    <aside class="sidebar">

      <section class="widget">
        <h4 class="widget__title widget__title--music">Video</h4>

        <div class="widget__video-youtube-wrap">
          <iframe width="464" height="261" class="widget__video-youtube" src="https://www.youtube.com/embed/MhEm4S-4v_U" frameborder="0" allowfullscreen rel=0 ></iframe>
        </div>

      </section>

      <section class="widget">
        <h4 class="widget__title widget__title--music">More from Birley Archive...</h4>
        <ul class="widget__submenu">
          <li class="widget__submenu-item"><a href="dig.php">Archaeological Dig</a></li>
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


<script src="<?php echo $assets?>/js/script.js?v=34"></script>
</body>
</html>
