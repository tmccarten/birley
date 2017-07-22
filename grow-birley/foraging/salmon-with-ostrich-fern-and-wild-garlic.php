<?php

$pageTitle = "Salmon foraging recipe | Foraging Birley | Living Lines: Birley Archives";
$pageDescription = "Salmon with ostrich fern and wild garlic Birley foraging recipe.";
$pageKeywords = "Birley, Foraging, Salmon, Sustainability";
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
      <img src="<?php echo $assets?>/img/icons/illustrations/icon_foraging.svg" class="banner-icon__img" alt="Illustration of a fern, berries and nuts.">
    </div>

  </section>

  <section class="content">

    <section class="content-text">

      <div class="breadcrumb">
        <a href="./">Foraging Menus</a><p>Salmon with ostrich fern and wild garlic</p>
      </div>

      <h3 class="content-text__title content-text__title--recipes">Salmon with ostrich fern and wild garlic</h3>

      <ol class="content-text__recipe">
        <li class="content-text__recipe-item"><p>Peel, halve and with a teaspoon to scrape the seeds out of the cucumber. Slice into 1-2cm thick pieces. Cut the potatoes into even-sized chunks and put in a pan of boiling water to cook for about 10 minutes until just tender.</p></li>
        <li class="content-text__recipe-item"><p>While the potatoes are boiling, make the dressing by combining the white wine vinegar, 5 tbsps of olive oil, juniper berries and mustard and whisking to a thick emulsion. Season. Drain the potatoes and mix with the dressing while hot.</p></li>
        <li class="content-text__recipe-item"><p>Fry the salmon fillets, skin-side down, in hot oil until the skin is crispy and the fish just cooked through. Mix the garlic leaves, Ostrich Fern, cucumber and lemon zest into the potato salad and serve immediately.</p></li>
      </ol>

    </section>

    <aside class="sidebar">

      <section class="widget">
        <h4 class="widget__title widget__title--foraging">Ingredients</h4>
        <div class="widget__links">
          <ul class="ingredients">
            <li class="ingredients__item">⅓ of a cucumber</li>
            <li class="ingredients__item">500g small waxy new potatoes <i>(such as Charlotte)</i></li>
            <li class="ingredients__item">1tbsp white wine vinegar</li>
            <li class="ingredients__item">olive oil</li>
            <li class="ingredients__item">4 juniper berries, gently crushed</li>
            <li class="ingredients__item">2 generous tbsp dijon mustard</li>
            <li class="ingredients__item">2 salmon fillets, skin on</li>
            <li class="ingredients__item">2 handfuls <b>wild garlic</b> leaves, shredded</li>
            <li class="ingredients__item">1 handful <b>ostrich fern</b><p><i>Fiddleheads are the first ostrich fern shoots to show in the spring and are so called because of their resemblance to the neck of a fiddle. These are the sterile shoots that will grow into the largest fronds. Pick no more than half from each crown while they are small and tightly curled. Before cooking, wash them carefully and remove the brown papery covering</i></p></li>
            <li class="ingredients__item">½ a lemon, finely zested</li>
          </ul>
        </div>
      </section>

    </aside>

  </section> <!-- content ends -->

</main>

<?php include('../../assets/includes/footer.php'); ?>

</div> <!-- site-wrapper ends -->

<script src="<?php echo $assets?>/js/script.js?v=<?php echo date('his'); ?>"></script>
</body>
</html>
