  <div class="map__inner">

    <div id="iconBrooks" class="icon icon__brooks">

      <img src="assets/img/icons/ui/information-pin.svg" alt="" class="information-pin information-pin--brooks" width="32">
      <div class="icon__brooks--hover">
        <h3>Brooks Building</h3>
        <p>The Brooks building was completed in 2014 to house Manchester Metropolitan University’s Faculties of Education and Health Psychology and Social Care.</p>
        <p>There is a multi-sports hall, a clinic, performance studios, a café and a restaurant.</p>

        <div class="read-more">
        <p>Find out more at <a href="the-site/site-history.php#presentDay">Site History</a></p>
        </div>

      </div>
    </div>

    <div id="iconVine" class="icon icon__vine">

      <img src="assets/img/icons/ui/information-pin.svg" alt="" class="information-pin information-pin--vine" width="32">
      <div class="icon__vine--hover">
        <h3>Birley Residences</h3>
        <p>A short walk from the city centre, Birley residences boasts a thriving student atmosphere with easy access to the sights and sounds of the city, whilst being part of the vibrant community of Hulme.</p>

        <div class="read-more">
        <p>Find out more at <a href="the-site/site-history.php#presentDay">Site History</a></p>
        </div>

      </div>
    </div>

    <div id="iconEnergy" class="icon icon__energy">

      <img src="assets/img/icons/ui/information-pin.svg" alt="" class="information-pin information-pin--energy" width="32">
      <div class="icon__energy--hover">
        <h3>Energy Centre</h3>
        <p>The Robert Angus Smith Energy Centre is the campus’ own Energy Centre. It uses combined Heat and Power (CHP), water storage and boiler systems to provide heating and hot water to the campus. It is possible to arrange educational visits.</p>

        <div class="read-more">
        <p>Find out more at <a href="the-site/site-history.php#presentDay">Site History</a></p>
        </div>

      </div>
    </div>

    <div id="iconOrchard" class="icon icon__orchard">

      <img src="assets/img/icons/ui/information-pin.svg" alt="" class="information-pin information-pin--orchard" width="32">
      <div class="icon__orchard--hover">
        <h3>Orchard</h3>
        <p>There are twenty-two fruit trees and four different varieties of pear, plum, cherry and apple trees, grown and nurtured by Hulme Community Garden Centre, before being planted on the Birley site.</p>

        <div class="read-more">
        <p>Find out more at <a href="grow-birley/sustainability.php">Grow Birley</a></p>
        </div>

      </div>
    </div>

    <div id="iconMural" class="icon icon__mural">

      <img src="assets/img/icons/ui/information-pin.svg" alt="" class="information-pin information-pin--mural" width="32">
      <div class="icon__mural--hover">
        <h3>Hulme Mural</h3>
        <p>The 84 foot long ceramic mural was created over two years by the ‘Hulme Urban Potters’ and unveiled by comedian Johnny Vegas in 2002. It chronicles the history of the community from Roman Times to the present day with key events like industrialisation, the Windrush and regeneration. </p>

        <div class="read-more">
        <p>Find out more at <a href="the-site/site-history.php#presentDay">Site History</a></p>
        </div>

      </div>
    </div>

  </div><!--map__inner ends -->
</div><!-- map ends -->
</div><!-- map container ends -->

<script type="text/javascript">

/* -- Show and close icon info at mobile size -- */

var iconBrooks = document.getElementById('iconBrooks'),
    iconVine = document.getElementById('iconVine'),
    iconEnergy = document.getElementById('iconEnergy'),
    iconOrchard = document.getElementById('iconOrchard'),
    iconMural = document.getElementById('iconMural');


iconBrooks.addEventListener('click', function() {

  showIconInfo('.icon-info--brooks');

}, false);

iconVine.addEventListener('click', function() {

  showIconInfo('.icon-info--vine');

}, false);

iconEnergy.addEventListener('click', function() {

  showIconInfo('.icon-info--energy');

}, false);

iconOrchard.addEventListener('click', function() {

  showIconInfo('.icon-info--orchard');

}, false);

iconMural.addEventListener('click', function() {

  showIconInfo('.icon-info--mural');

}, false);

</script>
