<?php

$pageTitle = "Home | Living Lines: Birley Archives";
$pageDescription = "Archives, history and information on the Birley area of Hulme, Manchester.";
$pageKeywords = "Birley, History, Archives";
$activePage = "Home";
$activeSubPage = "";

$assets = "assets";

$favIcon = "favicon.ico";

include('assets/includes/head.php');?>

<script type="text/javascript" src="bower_components/dragscroll/dragscroll.js"></script>
<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="bower_components/jQuery-ui-Slider-Pips/dist/jquery-ui-slider-pips.js"></script>

</head>

<?php

$linkHome = ".";
$linkAbout = "about.php";
$linkContact = "contact.php";

$linkSite = "the-site/";
$linkArchive = "birley-archive/";
$linkGrow = "grow-birley/";
$linkMy = "case-studies/";

include('assets/includes/header.php'); ?>

<main id="skipnav">

<div class="slider-container">

<div class="slider"></div>

</div>

<div id="map" class="map dragscroll"> ..

  <?php include('assets/includes/maps/map-today.php'); ?>

</div>

</main>

  <?php include('assets/includes/footer.php'); ?>

</div> <!-- site-wrapper ends -->

<script src="<?php echo $assets?>/js/script.js?v=<?php echo date('his'); ?>"></script>

</body>
</html>
