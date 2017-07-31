<div class="map__inner map__inner--1800s">

  <div id="iconChurch" class="icon icon__church">

    <img src="assets/img/icons/ui/information-pin.svg" alt="" class="information-pin information-pin--church" width="32">
    <div class="icon__church--hover">
      <h3>Holy Trinity Church</h3>
      <p>A carved stone head, possibly representing church benefactress Eleanor Atherton, was recovered from demolition material at the site of Holy Trinity Church (built in 1843) along with pieces of church glazing and other artefacts. The church was damaged by an air raid in WWII and subsequently demolished in 1953.</p>
      <p>There was also a Catholic Apostolic church dating from around the 1840’s.</p>

      <div class="read-more">
      <p>Find out more at <a href="the-site/site-history.php#holyTrinityChurch">Site History</a></p>
      </div>

    </div>
  </div>

  <div id="iconTerraces" class="icon icon__terraces">

    <img src="assets/img/icons/ui/information-pin.svg" alt="" class="information-pin information-pin--terraces" width="32">
    <div class="icon__terraces--hover">
      <h3>Terraces</h3>
      <p>The biggest development of workers’ houses in the industrial era was from the mid to late 1800s. The site and its surroundings formed a grid like pattern of streets, much of which was
      terraced housing. When built, the houses had small individual rear yards with ‘privies’: outdoor toilets.</p>
      <p>The terraces were cleared for a programme of new housing development in the 1960s.</p>

      <div class="read-more">
      <p>Find out more at <a href="the-site/site-history.php#theTerraces">Site History</a></p>
      </div>

    </div>
  </div>

  <div id="iconRolls" class="icon icon__rolls-royce">

    <img src="assets/img/icons/ui/information-pin.svg" alt="" class="information-pin information-pin--rollsroyce" width="32">
    <div class="icon__rolls-royce--hover">
      <h3>Rolls-Royce</h3>
      <p>Henry Royce built his first car at a factory close to Cooke Street, Hulme, in 1904. Together with motoring pioneer and partner, Charles Stewart Rolls, Rolls-Royce started motoring history with one of the world’s best-known luxury cars commemorated at a site in Hulme Park.</p>

      <div class="read-more">
      <p>Find out more at <a href="the-site/site-history.php#theTerraces">Site History</a></p>
      </div>

    </div>
  </div>

</div><!-- map__inner ends -->
</div><!-- map ends -->
</div><!-- map container ends -->

<script>
/* -- Show and close icon info at mobile size -- */

var iconChurch = document.getElementById('iconChurch'),
    iconTerraces = document.getElementById('iconTerraces'),
    iconRolls = document.getElementById('iconRolls');

iconChurch.addEventListener('click', function() {

  showIconInfo('.icon-info--church');

}, false);

iconTerraces.addEventListener('click', function() {

  showIconInfo('.icon-info--terraces');

}, false);

iconRolls.addEventListener('click', function() {

  showIconInfo('.icon-info--rolls-royce');

}, false);
</script>
