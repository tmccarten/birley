// -- Cross-browser Map Cursors -- //

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

map.addEventListener('touchmove', function() {
  map.className = 'map dragscroll grabbing';
});

map.addEventListener('touchend', function() {
  map.className = 'map dragscroll';
});
