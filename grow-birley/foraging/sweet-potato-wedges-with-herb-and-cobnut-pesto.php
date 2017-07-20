<?php

$pageTitle = "Sweet potato wedges foraging recipe | Foraging Birley | Living Lines: Birley Archives";
$pageDescription = "Sweet potato wedges with herbs and cobnut pesto foraging recipe.";
$pageKeywords = "Birley, Foraging, Sweet Potatoes, Sustainability";
$activePage = "Grow";
$activeSubPage = "Foraging Menus";

$assets = "../../assets";

$favIcon = "../../favicon.ico";

include('../../assets/includes/head.php');?>

</head>

<?php

$linkHome = "../../";
$linkAbout = "../../about.php";
$linkContact = "../../contact.php";

$linkSite = "../../the-site/";
$linkArchive = "../../birley-archive/";
$linkGrow = "../";
$linkMy = "../../my-birley/";

include('../../assets/includes/header.php'); ?>

<main id="skipnav">

  <section class="banner">

    <div class="banner-title-container">
      <h2 class="banner__title">Foraging Recipes</h2>
    </div>

    <div class="banner-icon">
      <img src="<?php echo $assets?>/img/icons/icon_foraging.svg" class="banner-icon__img" alt="Illustration of a fern, berries and nuts.">
    </div>

  </section>

  <section class="content">

    <section class="content-text">

      <div class="breadcrumb">
        <a href="./">Foraging Menus</a><p>Sweet potato wedges with herb and cobnut pesto</p>
      </div>

      <h3 class="content-text__title content-text__title--recipes">Sweet potato wedges with herb and cobnut pesto</h3>

      <ol class="content-text__recipe">
        <li class="content-text__recipe-item"><p>Preheat the oven to 220C/425F/Gas 7.</p></li>
        <li class="content-text__recipe-item"><p>Place the sweet potato wedges in the oven and cook for 25 minutes.</p></li>
        <li class="content-text__recipe-item"><p>Remove the wedges from the oven, sprinkle with salt and set aside to keep warm.</p></li>
        <li class="content-text__recipe-item"><p>For the pesto, place all of the ingredients into a small food processor and blend until smooth.</p></li>
        <li class="content-text__recipe-item"><p>To serve, place the chips into a bowl and pour over the pesto.</p></li>
      </ol>

    </section>

    <aside class="sidebar">

      <section class="widget">
        <h4 class="widget__title widget__title--foraging">Ingredients</h4>
        <div class="widget__links">
          <ul class="ingredients">
            <li class="ingredients__item">30g/1oz <b>cobnuts</b></li>
            <li class="ingredients__item">2tbsp olive oil</li>
            <li class="ingredients__item">large handful each of fresh basil, parsley and chives</li>
            <li class="ingredients__item">25g/1oz fresh breadcrumbs</li>
            <li class="ingredients__item">salt and freshly ground black pepper</li>
            <li class="ingredients__item">squeeze of lemon juice</li>
            <li class="ingredients__item">1 <b>wild garlic</b> clove, chopped</li>
          </ul>
        </div>
      </section>

    </aside>

  </section> <!-- content ends -->

</main>

</div> <!-- site-wrapper ends -->

<script src="<?php echo $assets?>/js/script.js?v=<?php echo date('his'); ?>"></script>
</body>
</html>
