scrollPosition();

/* -- Cross-browser Map Cursors -- */

document.getElementById('map');

map.addEventListener('mousedown', function() {
  map.className = 'map dragscroll grabbing';
});

map.addEventListener('mouseup', function() {
  map.className = 'map dragscroll';
});

map.addEventListener('mouseout', function() {
  map.className = 'map dragscroll';
});

  // -- Touch Equivalent -- //

   map.addEventListener('touchstart', function() {
    map.className = 'map dragscroll grabbing';
  });

  map.addEventListener('touchmove', function() {
    map.className = 'map dragscroll grabbing';
  });

  map.addEventListener('touchend', function() {
    map.className = 'map dragscroll';
  });

/* -- Set initial scroll position of map on window resize -- */

//window.addEventListener("resize", function() { scrollPosition() }, false);

function scrollPosition() {
  var windowWidth = window.innerWidth,
  scrollWidth = map.scrollWidth,
  clientWidth = map.clientWidth,
  scrollMax = scrollWidth - clientWidth;

  if (windowWidth < 1416) {
    map.scrollLeft = (scrollMax / 2) + 100;
    map.scrollTop = 100;
  }
}

/* -- Slider -- */

// set up an array to hold the months
var era = ["Pre­-1800s", "1800s", "1960s-1980s", "Today"];

$(".slider")

    // activate the slider with options
    .slider({
        min: 0,
        max: era.length-1,
        value: 3
    })

    // add pips with the labels set to "months"
    .slider("pips", {
        rest: "label",
        labels: era
    });
