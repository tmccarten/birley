<div class="map__inner map__inner--pre">

  <div id="iconFarm" class="icon icon__farm" tabindex="0">

    <img src="assets/img/icons/ui/information-pin.svg?2" alt="" class="information-pin information-pin--farm" width="32">

    <div class="icon__farm--hover">
      <h3>Jackson's Farm</h3>
      <p>The site of Jackson’s Farm lies within the present Birley boundaries, and is shown on an OS map of 1848 when it comprised a farmhouse and two further buildings...</p>

      <div class="read-more">
      <p>Find out more at <a href="the-site/site-history.php#jacksonsFarm">Site History</a></p>
      </div>

    </div>
  </div>

</div><!-- map__inner ends -->
</div><!-- map ends -->
</div><!-- map container ends -->

<script>
var iconFarm = document.getElementById('iconFarm');


iconFarm.addEventListener('click', function() {

  showIconInfo('.icon-info--farm');

}, false);
</script>
