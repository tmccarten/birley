<?php

$pageTitle = "Foraging Birley | Living Lines: Birley Archives";
$pageDescription = "Foraging in Birley.";
$pageKeywords = "Birley, Foraging, Sustainability";
$activePage = "Grow";
$activeSubPage = "Foraging";

$assets = "../assets";

$favIcon = "../favicon.ico";

include('../assets/includes/head.php');?>

</head>

<?php

$linkHome = "../";
$linkAbout = "../about.php";
$linkContact = "../contact.php";

$linkHealth = "../birley-health-and-education";
$linkArchive = "../birley-archive/";
$linkGrow = "./";
$linkMy = "../my-birley/";

include('../assets/includes/header.php'); ?>

<div class="breadcrumb">
  <p class="breadcrumb__grey">Grow Birley</p><p class="breadcrumb__grey">Foraging</p>
</div>

<main id="skipnav" class="main">

  <div class="main-icon">
    <img src="<?php echo $assets?>/img/icons/icon_foraging.svg" class="main-icon__img" alt="Illustration of ferns, fruit and nuts.">
  </div>

  <section class="main-text">
    <h2 class="main-text__title">Foraging</h2>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend eros ut ultrices posuere. Donec mattis rutrum felis vel pharetra.</p>
    <p>Mauris eget sollicitudin sapien, elementum aliquam lorem. Sed purus ante, <a class="main-text__link" href="#">eleifend faucibus</a> vestibulum id, iaculis nec orci. Integer porta arcu nec sem tincidunt, non viverra orci suscipit. Sed quis augue odio. Proin pretium convallis aliquam. Etiam cursus sagittis lobortis. Duis rutrum euismod nisl at convallis</p>

  </section>

</main>

</div> <!-- site-wrapper ends -->

<script src="<?php echo $assets?>/js/script.js?v=<?php echo date('his'); ?>"></script>
</body>
</html>
