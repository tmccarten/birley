// -- Cross-browser Map Cursors -- //

document.getElementById('map');

map.addEventListener('mousedown', function() {
  map.className = 'site-wrapper map dragscroll grabbing';
});

map.addEventListener('mouseup', function() {
  map.className = 'site-wrapper map dragscroll';
});

map.addEventListener('mouseout', function() {
  map.className = 'site-wrapper map dragscroll';
});
