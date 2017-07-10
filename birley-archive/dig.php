<?php

$pageTitle = "Birley Dig | Living Lines: Birley Archives";
$pageDescription = "Birley archaeological dig history.";
$pageKeywords = "Birley, Dig, Archaeology, History";
$activePage = "Archive";

$assets = "../assets";

$favIcon = "../favicon.ico";

include('../assets/includes/head.php');?>

</head>

<?php

$linkHome = "../";
$linkAbout = "../about.php";
$linkContact = "../contact.php";

$linkHealth = "../birley-health-and-education/";
$linkArchive = ".";
$linkGrow = "../grow-birley/";
$linkMy = "../my-birley/";

include('../assets/includes/header.php'); ?>


<div class="breadcrumb">
  <a class="breadcrumb__link" href="<?php echo $linkHome?>">Home</a><p class="breadcrumb__grey">Birley Archive</p><p class="breadcrumb__grey">Dig</p>
</div>

<main id="skipnav" class="main">

  <div class="main-icon">
    <img src="<?php echo $assets?>/img/maps/icons/icon_bust.svg" class="main-icon__img" alt="Illustration of carved stone church bust">
    <h2 class="main-icon__text">Archaeological Dig</h2>
  </div>

  <section class="main-text">
    <h2 class="main-text__title">Archaeological Dig</h2>

    <p>Between 2011 and 2012, the university commissioned an archaeological investigation on the site that was to become the Birley development.</p>
    <p>The <a href="#" class="main-text__link">fascinating report</a> reveals the layers of history that lie beneath the site of the university campus; its alternative foundations that take the site through agricultural land, industrial landscapes, beautiful churches and urban regeneration.</p>
    <p>In March 2013, an exhibition was held of the finds. Further information can be found at the University’s <a href="#" class="main-text__link">Special Collections</a>, based on the third floor of the Library at the All Saints Campus.</p>

  </section>


</main>

</div> <!-- site-wrapper ends -->


<script src="<?php echo $assets?>/js/script.js?v=<?php echo date('his'); ?>"></script>
</body>
</html>
