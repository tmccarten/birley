<?php

$pageTitle = "Birley Poetry | Living Lines: Birley Archives";
$pageDescription = "Birley poetry.";
$pageKeywords = "Birley, Poetry, Hulme";
$activePage = "Archive";
$activeSubPage = "Poetry";

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
      <h2 class="banner__title">Poetry</h2>
    </div>

    <div class="banner-icon">
      <img src="<?php echo $assets?>/img/icons/illustrations/icon_notepad.svg" class="banner-icon__svg" alt="Illustration of a notepad and pen.">
    </div>

  </section>

  <section class="content">

    <section class="content-text">

      <div class="breadcrumb">
        <p>Birley Archive</p><p>Poetry</p>
      </div>

      <p>The poetry on this page is a series of poems that have been collected whilst researching the site.</p>
      <p><a href="hulme-in-the-1950s.php">Hulme in the 1950s</a> by poet <a href="http://www.applesandsnakes.org/page/84/Performance+poets/198">SuAndi</a> was commissioned as part of designs for the <a href="../../case-studies/birley-artwork-project/golden-terrace.php">Golden Terrace</a> and is also available to view at <a href="http://www.reelmcr.co.uk/">ReelMcr</a>. It reflects on memories of growing up in Hulme in a Nigerian-Liverpudlian family.</p>
      <p><a href="hulme-through-my-ages.php">Hulme Through my Ages</a> was written by Tina Cribbens. Her connections with the Irish community and the area have a strong presence in her writing. <a href="hulme.php">Hulme</a> was written during the construction of the Birley site; <a href="the-crescents-the-sonnets.php">Crescents: the Sonnets</a> was written by a Manchester Met graduate and jazz-lyricist who has been working with students in the Birley residences on an installation project; and <a href="living-lines.php">Living Lines</a> is a reflection of the changes seen through the eyes of the distinctive sculpted head found during the archaeological dig.</p>

      <h3 class="content-text__title content-text__title--plain">Quick links</h3>

      <ul class="content-text__list">
        <li class="content-text__list-item"><a href="hulme-in-the-1950s.php">Hulme in the 1950s</a></li>
        <li class="content-text__list-item"><a href="hulme-through-my-ages.php">Hulme through my ages</a></li>
        <li class="content-text__list-item"><a href="hulme.php">Hulme</a></li>
        <li class="content-text__list-item"><a href="the-crescents-the-sonnets.php">Crescents: the Sonnets</a></li>
        <li class="content-text__list-item"><a href="living-lines.php">Living Lines</a></li>
      </ul>

    </section>

    <aside class="sidebar">

      <section class="widget">
        <h4 class="widget__title widget__title--poetry">More from Birley Archive...</h4>
        <ul class="widget__submenu">
          <li class="widget__submenu-item"><a href="../dig.php">Archaeological Dig</a></li>
          <!-- <li class="widget__submenu-item"><a href="../stories/">Stories</a></li> -->
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
