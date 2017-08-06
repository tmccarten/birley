<?php

$pageTitle = "Home | Living Lines: Birley Archive Project";
$pageDescription = "Archives, history and information on the Birley area of Hulme, Manchester.";
$pageKeywords = "Birley, History, Archives";
$activePage = "Home";
$activeSubPage = "";

$assets = "assets";

$favIcon = "favicon.ico"; ?>

<?php include('assets/includes/head.php');?>

<script type="text/javascript" src="bower_components/dragscroll/dragscroll.js"></script>
<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>

</head>

<?php

$linkHome = "";
$linkAbout = "about.php";
$linkContact = "contact.php";

$linkSite = "the-site/";
$linkArchive = "birley-archive/";
$linkGrow = "grow-birley/";
$linkCaseStudies = "case-studies/";

include('assets/includes/header.php'); ?>

<main id="skipnav">

<div class="era-container">

  <div class="era">

    <a id="eraBlockOne" class="era__block" role="button" aria-label="Pre-1800s" href="javascript:;" aria-selected="false">
      <div class="era__circle"></div>
      <div class="era__label">
        <p>Pre-1800s</p>
      </div>
    </a>

    <a id="eraBlockTwo" class="era__block" role="button" aria-label="1800s" href="javascript:;" aria-selected="false">
      <div class="era__circle"></div>
      <div class="era__label">
        <p>1800s</p>
      </div>
    </a>

    <a id="eraBlockThree" class="era__block" role="button" aria-label="1960s-1980s" href="javascript:;" aria-selected="false">
      <div class="era__circle"></div>
      <div class="era__label">
        <p>1960s-1980s</p>
      </div>
    </a>

    <a id="eraBlockFour" class="era__block era__block--selected" role="button" aria-label="Today" href="javascript:;" aria-selected="true">
      <div class="era__circle"></div>
      <div class="era__label">
        <p>Today</p>
      </div>
    </a>

  </div><!-- era ends -->

</div><!-- era-container ends -->

<div class="map-container">

  <img src="assets/img/icons/ui/move-arrows.svg?2" width="100" alt="" id="moveArrows" class="movearrows">

  <div class="icon-info icon-info--brooks" tabindex="0">

    <div class="icon-info__close">
      <img src="<?php echo $assets?>/img/icons/ui/close.svg" alt="Close icon" aria-hidden="true">
    </div>

    <h3 class="icon-info__title">Brooks building</h3>
    <p>The Brooks building was completed in 2014 to house Manchester Metropolitan University’s Faculties of Education and Health Psychology and Social Care.</p>
    <p>There is a multi-sports hall, a clinic, performance studios, a café and a restaurant.</p>

    <div class="read-more">
    <p>Find out more at <a href="the-site/site-history.php#presentDay">Site History</a></p>
    </div>

  </div>

  <div class="icon-info icon-info--vine" tabindex="0">

    <div class="icon-info__close">
      <img src="<?php echo $assets?>/img/icons/ui/close.svg" alt="Close icon" aria-hidden="true">
    </div>

    <h3 class="icon-info__title">Birley Residences</h3>
    <p>A short walk from the city centre, Birley residences boasts a thriving student atmosphere with easy access to the sights and sounds of the city, whilst being part of the vibrant community of Hulme.</p>

    <div class="read-more">
    <p>Find out more at <a href="the-site/site-history.php#presentDay">Site History</a></p>
    </div>

  </div>

  <div class="icon-info icon-info--energy" tabindex="0">

    <div class="icon-info__close">
      <img src="<?php echo $assets?>/img/icons/ui/close.svg" alt="Close icon" aria-hidden="true">
    </div>

    <h3 class="icon-info__title">Energy centre</h3>
    <p>The Robert Angus Smith Energy Centre is the campus’ own Energy Centre. It uses combined Heat and Power (CHP), water storage and boiler systems to provide heating and hot water to the campus. It is possible to arrange educational visits.</p>

    <div class="read-more">
    <p>Find out more at <a href="the-site/site-history.php#presentDay">Site History</a></p>
    </div>

  </div>

  <div class="icon-info icon-info--mural" tabindex="0">

    <div class="icon-info__close">
      <img src="<?php echo $assets?>/img/icons/ui/close.svg" alt="Close icon" aria-hidden="true">
    </div>

    <h3 class="icon-info__title">Hulme mural</h3>
    <p>The 84 foot long ceramic mural was created over two years by the ‘Hulme Urban Potters’ and unveiled by comedian Johnny Vegas in 2002. It chronicles the history of the community from Roman Times to the present day with key events like industrialisation, the Windrush and regeneration. </p>

    <div class="read-more">
    <p>Find out more at <a href="the-site/site-history.php#presentDay">Site History</a></p>
    </div>

  </div>

  <div class="icon-info icon-info--orchard" tabindex="0">

    <div class="icon-info__close">
      <img src="<?php echo $assets?>/img/icons/ui/close.svg" alt="Close icon" aria-hidden="true">
    </div>

    <h3 class="icon-info__title">Orchard</h3>
    <p>There are twenty-two fruit trees and four different varieties of pear, plum, cherry and apple trees, grown and nurtured by Hulme Community Garden Centre, before being planted on the Birley site.</p>

    <div class="read-more">
    <p>Find out more at <a href="grow-birley/sustainability.php">Grow Birley</a></p>
    </div>

  </div>

  <div class="icon-info icon-info--deck" tabindex="0">

    <div class="icon-info__close">
      <img src="<?php echo $assets?>/img/icons/ui/close.svg" alt="Close icon" aria-hidden="true">
    </div>

    <h3 class="icon-info__title">Deck Access flats</h3>
    <p>The 1960s-1990s saw the rise and fall of the initially acclaimed deck access flats of Otterburn Close. The ‘decks’ had long walkways which sought to emulate the former terrace streets and were built around central courtyards. But flawed construction and design led to their eventual demolition.</p>

    <div class="read-more">
    <p>Find out more at <a href="the-site/site-history.php#deckAccess">Site History</a></p>
    </div>

  </div>

  <div class="icon-info icon-info--crescents" tabindex="0">

    <div class="icon-info__close">
      <img src="<?php echo $assets?>/img/icons/ui/close.svg" alt="Close icon" aria-hidden="true">
    </div>

    <h3 class="icon-info__title">The Crescents</h3>
    <p>The Hulme Crescents was one of the largest urban regenerations in Europe.</p>

    <div class="read-more">
    <p>Find out more at <a href="the-site/site-history.php#deckAccess">Site History</a></p>
    </div>

  </div>

  <div class="icon-info icon-info--birley-high" tabindex="0">

    <div class="icon-info__close">
      <img src="<?php echo $assets?>/img/icons/ui/close.svg" alt="Close icon" aria-hidden="true">
    </div>

    <h3 class="icon-info__title">Birley High School</h3>
    <p>A much loved and respected comprehensive, Birley High School welcomed its first pupils in 1967.</p>
    <p>The flame red phoenix emblem of the school symbolised the rebirth of the 1960's regeneration of Hulme. Hulme Business Park now occupies the former site of Birley High.</p>

    <div class="read-more">
    <p>Find out more at <a href="the-site/site-history.php#birleyHigh">Site History</a></p>
    </div>

  </div>

  <div class="icon-info icon-info--church" tabindex="0">

    <div class="icon-info__close">
      <img src="<?php echo $assets?>/img/icons/ui/close.svg" alt="Close icon" aria-hidden="true">
    </div>

    <h3 class="icon-info__title">Holy Trinity Church</h3>
    <p>A carved stone head, possibly representing church benefactress Eleanor Atherton, was recovered from demolition material at the site of Holy Trinity Church (built in 1843) along with pieces of church glazing and other artefacts. The church was damaged by an air raid in WWII and subsequently demolished in 1953.</p>
    <p>There was also a Catholic Apostolic church dating from around the 1840’s.</p>

    <div class="read-more">
    <p>Find out more at <a href="the-site/site-history.php#holyTrinityChurch">Site History</a></p>
    </div>

  </div>

  <div class="icon-info icon-info--terraces" tabindex="0">

    <div class="icon-info__close">
      <img src="<?php echo $assets?>/img/icons/ui/close.svg" alt="Close icon" aria-hidden="true">
    </div>

    <h3 class="icon-info__title">Terraces</h3>
    <p>The biggest development of workers’ houses in the industrial era was from the mid to late 1800s. The site and its surroundings formed a grid like pattern of streets, much of which was
    terraced housing. When built, the houses had small individual rear yards with ‘privies’: outdoor toilets.</p>
    <p>The terraces were cleared for a programme of new housing development in the 1960s.</p>

    <div class="read-more">
    <p>Find out more at <a href="the-site/site-history.php#theTerraces">Site History</a></p>
    </div>

  </div>

  <div class="icon-info icon-info--rolls-royce" tabindex="0">

    <div class="icon-info__close">
      <img src="<?php echo $assets?>/img/icons/ui/close.svg" alt="Close icon" aria-hidden="true">
    </div>

    <h3 class="icon-info__title">Rolls Royce</h3>
    <p>Henry Royce built his first car at a factory close to Cooke Street, Hulme, in 1904. Together with motoring pioneer and partner, Charles Stewart Rolls, Rolls-Royce started motoring history with one of the world’s best-known luxury cars commemorated at a site in Hulme Park.</p>

    <div class="read-more">
    <p>Find out more at <a href="the-site/site-history.php#theTerraces">Site History</a></p>
    </div>

  </div>

  <div class="icon-info icon-info--farm" tabindex="0">

    <div class="icon-info__close">
      <img src="<?php echo $assets?>/img/icons/ui/close.svg" alt="Close icon" aria-hidden="true">
    </div>

    <h3 class="icon-info__title">Jackson's Farm</h3>
    <p>The site of Jackson’s Farm lies within the present Birley boundaries, and is shown on an OS map of 1848 when it comprised a farmhouse and two further buildings...</p>

    <div class="read-more">
    <p>Find out more at <a href="the-site/site-history.php#jacksonsFarm">Site History</a></p>
    </div>

  </div>

  <div id="map" class="map dragscroll">

  <?php include('assets/includes/maps/map-today.php'); ?>


</main>

  <?php include('assets/includes/footer.php'); ?>

</div> <!-- site-wrapper ends -->

<script src="<?php echo $assets?>/js/script.js?v=<?php echo $javaVersion?>"></script>
<script src="<?php echo $assets?>/js/map.js?v=<?php echo $javaVersion?>"></script>

</body>
</html>
