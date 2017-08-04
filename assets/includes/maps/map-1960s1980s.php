<div class="map__inner map__inner--1960s1980s">

  <div id="iconDeck" class="icon icon__deckaccess" tabindex="0">

    <img src="assets/img/icons/ui/information-pin.svg?2" alt="" class="information-pin information-pin--deckaccess" width="32">
    <div class="icon__deckaccess--hover">
      <h3>Deck Access Flats</h3>
      <p>The 1960s-1990s saw the rise and fall of the initially acclaimed deck access flats of Otterburn Close. The ‘decks’ had long walkways which sought to emulate the former terrace streets and were built around central courtyards. But flawed construction and design led to their eventual demolition.</p>

      <div class="read-more">
      <p>Find out more at <a href="the-site/site-history.php#deckAccess">Site History</a></p>
      </div>

    </div>
  </div>

  <div id="iconCrescents" class="icon icon__crescents" tabindex="0">

    <img src="assets/img/icons/ui/information-pin.svg?2" alt="" class="information-pin information-pin--crescents" width="32">
    <div class="icon__crescents--hover">
      <h3>The Crescents</h3>
      <p>The Hulme Crescents was one of the largest urban regenerations in Europe.</p>

      <div class="read-more">
      <p>Find out more at <a href="the-site/site-history.php#deckAccess">Site History</a></p>
      </div>

    </div>
  </div>

  <div id="iconBirley" class="icon icon__birleyhigh" tabindex="0">

    <img src="assets/img/icons/ui/information-pin.svg?2" alt="" class="information-pin information-pin--birleyhigh" width="32">
    <div class="icon__birleyhigh--hover">
      <h3>Birley High School</h3>
      <p>A much loved and respected comprehensive, Birley High School welcomed its first pupils in 1967.</p>
      <p>The flame red phoenix emblem of the school symbolised the rebirth of the 1960's regeneration of Hulme. Hulme Business Park now occupies the former site of Birley High.</p>

      <div class="read-more">
      <p>Find out more at <a href="the-site/site-history.php#birleyHigh">Site History</a></p>
      </div>
    </div>
  </div>

</div><!-- map__inner ends -->
</div><!-- map ends -->
</div><!-- map container ends -->

<script>

/* -- Show and close icon info at mobile size -- */

var iconDeck = document.getElementById('iconDeck'),
    iconCrescents = document.getElementById('iconCrescents'),
    iconBirley = document.getElementById('iconBirley');


iconDeck.addEventListener('click', function() {

  showIconInfo('.icon-info--deck');

}, false);

iconCrescents.addEventListener('click', function() {

  showIconInfo('.icon-info--crescents');

}, false);

iconBirley.addEventListener('click', function() {

  showIconInfo('.icon-info--birley-high');

}, false);

</script>
