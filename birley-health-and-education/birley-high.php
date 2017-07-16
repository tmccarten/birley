<?php

$pageTitle = "Birley High | Living Lines: Birley Archives";
$pageDescription = "History of former high school Birley High of Birley, Hulme, Manchester..";
$pageKeywords = "Birley, History, Education, Highschool";
$activePage = "Health";
$activeSubPage = "Birley High";

$assets = "../assets";

$favIcon = "../favicon.ico";

include('../assets/includes/head.php');?>

</head>

<?php

$linkHome = "../";
$linkAbout = "../about.php";
$linkContact = "../contact.php";

$linkHealth = "./";
$linkArchive = "../birley-archive/";
$linkGrow = "../grow-birley/";
$linkMy = "../my-birley/";

include('../assets/includes/header.php'); ?>

<section id="skipnav" class="main">

  <div class="main-icon">
    <img src="<?php echo $assets?>/img/icons/icon_birleyhighbadge.svg" class="main-icon__img" alt="Illustration of Birley High motif.">
  </div>

  <h2 class="main-text__title">Birley High</h2>

</section>

<div class="breadcrumb">
  <p class="breadcrumb__grey">Birley Health and Education</p><p class="breadcrumb__grey">Birley High</p>
</div>

</div> <!-- site-wrapper ends -->

<script src="<?php echo $assets?>/js/script.js?v=<?php echo date('his'); ?>"></script>
</body>
</html>
