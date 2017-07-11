<?php

$pageTitle = "Birley Poetry | Living Lines: Birley Archives";
$pageDescription = "Birley poetry.";
$pageKeywords = "Birley, Poetry, Hulme";
$activePage = "Archive";
$activeSubPage = "Poetry";

$assets = "../assets";

$favIcon = "../favicon.ico";

include('../assets/includes/head.php');?>

</head>

<?php

$linkHome = "../";
$linkAbout = "../about.php";
$linkContact = "../contact.php";

$linkHealth = "../birley-health-and-education/";
$linkArchive = "./";
$linkGrow = "../grow-birley/";
$linkMy = "../my-birley/";

include('../assets/includes/header.php'); ?>


<div class="breadcrumb">
  <p class="breadcrumb__grey">Birley Archive</p><p class="breadcrumb__grey">Poetry</p>
</div>

<main id="skipnav" class="main">

  <div class="main-icon">
    <img src="<?php echo $assets?>/img/icons/icon_notepad.svg" class="main-icon__img" alt="Illustration of notepad and pen.">
  </div>

  <section class="main-text">
    <h2 class="main-text__title">Poetry</h2>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend eros ut ultrices posuere. Donec mattis rutrum felis vel pharetra.</p>
    <p>Mauris eget sollicitudin sapien, elementum aliquam lorem. Sed purus ante, <a class="main-text__link" href="#">eleifend faucibus</a> vestibulum id, iaculis nec orci. Integer porta arcu nec sem tincidunt, non viverra orci suscipit. Sed quis augue odio. Proin pretium convallis aliquam. Etiam cursus sagittis lobortis. Duis rutrum euismod nisl at convallis</p>

  </section>


</main>

</div> <!-- site-wrapper ends -->


<script src="<?php echo $assets?>/js/script.js?v=<?php echo date('his'); ?>"></script>
</body>
</html>
