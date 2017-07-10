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
  </section>


</main>

</div> <!-- site-wrapper ends -->


<script src="<?php echo $assets?>/js/script.js?v=<?php echo date('his'); ?>"></script>
</body>
</html>
