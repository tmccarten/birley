<?php

$pageTitle = "About | Living Lines: Birley Archives";
$pageDescription = "About the Living Lines Birley project.";
$pageKeywords = "Birley, About";
$activePage = "About";
$activeSubPage = "";

$assets = "assets";

$favIcon = "favicon.ico";

include('assets/includes/head.php');?>

</head>

<?php

$linkHome = "index.php";
$linkAbout = ".";
$linkContact = "contact.php";

$linkSite = "the-site/";
$linkArchive = "birley-archive/";
$linkGrow = "grow-birley/";
$linkMy = "case-studies/";

include('assets/includes/header.php'); ?>

<main id="skipnav">

  <section class="content content-about">

    <div class="content-text">
      <h3 class="content-text__title">About</h3>

      <p>The Birley Archive project developed as a result of a research project into large scale public art installations using Manchester Metropolitan University’s Birley site as a platform for inspiration. It aims to act as record in the long history of transition of the site.</p>
      <p>The archive captures information that was uncovered as part of site investigations which helped inform concept designs, poetry and imagery to use both as a springboard for research and as an educational resource. A further section has been added on the History of the Faculties and their journey to the Birley site.</p>
      <p>A more detailed record of the Birley Artwork Project is to be found in <a class="content-text__link" href="case-studies/artwork">Case Studies</a>.</p>
      <p>For visual resources on the history of the Birley site: slides, photography and some artefacts from the archaeological dig are held in Manchester Metropolitan University’s <a href="http://www.specialcollections.mmu.ac.uk/" class="content-text__link">Special Collections</a>; film footage of the Hulme Area, the demolition of the terraces and the building of the Crescents is available at the University managed <a href="http://nwfa.mmu.ac.uk/" class="content-text__link">North West Film Archive</a>. Further information on the Hulme area can be obtained from <a href="http://nwfa.mmu.ac.uk/" class="content-text__link">Archive+</a> at Manchester Central Library. There are a number of Hulme archive collections, including an extensive project recording life in the former and existing 1960s housing redevelopments by <a href="http://www.reelmcr.co.uk/" class="content-text__link">Reel Mcr</a>.</p>
    </div>

    <img src="<?php echo $assets?>/img/birley-archive/photography/Jackson-crescent.jpg" width="1024" height="757" alt="Black and white shot of Jackson Crescent flats with cars in distance.">

  </section>

</main>

<?php include('assets/includes/footer.php'); ?>

</div> <!-- site-wrapper ends -->

<script src="<?php echo $assets?>/js/script.js?v=<?php echo date('his'); ?>"></script>
</body>
</html>
