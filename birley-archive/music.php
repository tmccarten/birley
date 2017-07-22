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
$linkMy = "../my-birley/";

include('../assets/includes/header.php'); ?>


<main id="skipnav">

  <section class="banner">

    <div class="banner-title-container">
      <h2 class="banner__title">Music</h2>
    </div>

    <div class="banner-icon">
      <img src="<?php echo $assets?>/img/icons/illustrations/icon_music.svg" class="banner-icon__img" alt="Illustration of blaring speakers.">
    </div>

  </section>

  <section class="content">

    <section class="content-text">

      <div class="breadcrumb">
        <p>Birley Archive</p><p>Music</p>
      </div>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend eros ut ultrices posuere. Donec mattis rutrum felis vel pharetra.</p>
      <p>Mauris eget sollicitudin sapien, elementum aliquam lorem. Sed purus ante, <a class="content-text__link" href="#">eleifend faucibus</a> vestibulum id, iaculis nec orci. Integer porta arcu nec sem tincidunt, non viverra orci suscipit. Sed quis augue odio. Proin pretium convallis aliquam. Etiam cursus sagittis lobortis. Duis rutrum euismod nisl at convallis</p>      

    </section>

    <aside class="sidebar">

    <section class="widget">
      <h4 class="widget__title widget__title--music">Audio</h4>
      <div class="widget__audio">
        <audio class="widget__audio-inner" controls>
          <source src="horse.ogg" type="audio/ogg">
          <source src="../assets/audio/audio_test.mp3" type="audio/mpeg">
          Your browser does not support the audio element.
        </audio>
      </div>
    </section>

      <section class="widget">
        <h4 class="widget__title widget__title--music">Video</h4>
        <div class="widget__video">
          <video class="widget__video-inner" width="464" height="261" controls>
            <source src="../assets/video/video_test.mp4" type="video/mp4">
            <source src="movie.ogg" type="video/ogg">
            Your browser does not support the video tag.
          </video>
        </div>
      </section>

      <section class="widget">
        <h4 class="widget__title widget__title--music">Also in this section...</h4>
        <ul class="widget__submenu">
          <li class="widget__submenu-item"><a href="dig.php">Archaeological Dig</a></li>
          <li class="widget__submenu-item"><a href="poetry.php">Poetry</a></li>
          <li class="widget__submenu-item"><a href="stories.php">Stories</a></li>
          <li class="widget__submenu-item"><a href="photography.php">Photography</a></li>
        </ul>
      </section>

    </aside>

  </section> <!-- content ends -->

</main>

<?php include('../assets/includes/footer.php'); ?>

</div> <!-- site-wrapper ends -->


<script src="<?php echo $assets?>/js/script.js?v=<?php echo date('his'); ?>"></script>
</body>
</html>
