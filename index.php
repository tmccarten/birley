<?php

$pageTitle = "Home | Living Lines: Birley Archives";
$pageDescription = "Archives, history and information on the Birley area of Hulme, Manchester.";
$pageKeywords = "Birley, History, Archives";
$activePage = "Home";

$css = "assets/css/"; ?>

<link rel="stylesheet" href="bower_components/jQuery-ui-Slider-Pips/dist/jquery-ui-slider-pips.css">

<?php
$favIcon = "favicon.ico";

include('assets/includes/head.php');?>

<script type="text/javascript" src="bower_components/dragscroll/dragscroll.js"></script>
<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="bower_components/jQuery-ui-Slider-Pips/dist/jquery-ui-slider-pips.min.js"></script>

</head>

<?php

$linkHome = ".";
$linkAbout = "about.php";
$linkContact = "contact.php";

$linkHealth = "birley-health-and-education/";
$linkArchive = "birley-archive/";
$linkGrow = "grow-birley/";
$linkMy = "my-birley/";

include('assets/includes/header.php'); ?>

<div class="slider-container">

<div class="slider"></div>

</div>

<section id="map" class="map dragscroll">

  <div class="map__inner">

    <div class="clickable"></div>

  </div>

</section>


<script src="assets/js/script.js?v=<?php echo date('his'); ?>"></script>
</body>
</html>
