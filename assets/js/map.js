scrollPosition();

/* -- Menu Icon -- */

var buttonMenu = document.getElementById('buttonMenu');

buttonMenu.addEventListener('click', function() {

  var headerNav = document.querySelector('.header__nav');

  if (headerNav.className === 'header__nav') {
    headerNav.className = 'header__nav menu-displayed';
  } else {
    headerNav.className = 'header__nav';
  }

}, false);

/* -- Sub menus -- */

var subMenuParent = document.getElementsByClassName('parent');

for (i = 0; i < subMenuParent.length; i++) {

  subMenuParent[i].addEventListener('click', function() {

    var subMenu = this.nextElementSibling;
    var parentIcon = this.firstElementChild + 1;

    if (subMenu.className.indexOf('menu-displayed') == -1 ) {
      subMenu.className = 'sub-menu menu-displayed';
      parentIcon.setAttribute('class', 'parent-icon rotate');

    } else {
      subMenu.className = 'sub-menu';
      parentIcon.setAttribute('class', 'parent-icon');
    }

  }, false);

}

/* -- Close sub-menus if user clicks elsewhere -- */

window.onclick = function(event) {
  if (!event.target.matches('.parent')) {

    var subMenu = document.getElementsByClassName('sub-menu');
    var parentIcon = document.getElementsByClassName('parent-icon');
    var i;
    for (i = 0; i < subMenu.length; i++) {
        subMenu[i].className = 'sub-menu';
        parentIcon[i].setAttribute('class', 'parent-icon');
      }
  }
};

// Function to add info-displayed class

function showIconInfo(iconName) {

  closeInfo();

  var iconInfo = document.querySelector(iconName);
  iconInfo.classList.add('info-displayed');

  var cross = iconInfo.firstElementChild;
  cross.addEventListener('click', function() {closeInfo();}, false);
}

// Function to close info

  function closeInfo() {
    var infoDisplayed = document.getElementsByClassName('info-displayed');

    for (i = 0; i < infoDisplayed.length; i++) {
      infoDisplayed[i].classList.remove('info-displayed');
    }
  }


/* -- Cross-browser Map Cursors -- */

map = document.getElementById('map');

map.addEventListener('mousedown', function() {

  var moveArrows = document.getElementById('moveArrows');
  moveArrows.className = 'movearrows movearrows--hidden';

  if ( $('.icon:hover').length != 0) {
    map.className = 'map dragscroll';
  } else {
    map.className = 'map dragscroll grabbing';
  } }, false );

map.addEventListener('mouseup', function() {
  map.className = 'map dragscroll';
  moveArrows.className = 'movearrows';
});

map.addEventListener('mouseout', function() {
  map.className = 'map dragscroll';
  moveArrows.className = 'movearrows';
});


  // -- Touch Equivalent -- //

   map.addEventListener('touchstart', function() {
    map.className = 'map dragscroll grabbing';
    moveArrows.className = 'movearrows movearrows--hidden';
  });

  map.addEventListener('touchmove', function() {
    map.className = 'map dragscroll grabbing';
    moveArrows.className = 'movearrows movearrows--hidden';
  });

  map.addEventListener('touchend', function() {
    map.className = 'map dragscroll';
    moveArrows.className = 'movearrows';
  });

/* -- Set initial scroll position of map -- */


function scrollPosition() {
  var windowWidth = window.innerWidth,
  scrollWidth = map.scrollWidth,
  clientWidth = map.clientWidth,
  scrollMax = scrollWidth - clientWidth;

  if (windowWidth < 1416) {
    map.scrollLeft = (scrollMax / 2) + 100;
    map.scrollTop = 100;
  } else {
    map.scrollTop = 331;
    map.scrollLeft = 104;
  }
}

/* -- Era selectors -- */

var eraBlockOne = document.getElementById('eraBlockOne'),
    eraBlockTwo = document.getElementById('eraBlockTwo'),
    eraBlockThree = document.getElementById('eraBlockThree'),
    eraBlockFour = document.getElementById('eraBlockFour');

    eraBlockOne.addEventListener('click', function() {
      clearEraSelections();
      this.className = 'era__block era__block--selected';
      this.setAttribute('aria-selected', true);
      $(".map.dragscroll").load("assets/includes/maps/map-pre1800s.php");
    }, false);

    eraBlockTwo.addEventListener('click', function() {
      clearEraSelections();
      this.className = 'era__block era__block--selected';
      $(".map.dragscroll").load("assets/includes/maps/map-1800s.php");
    }, false);

    eraBlockThree.addEventListener('click', function() {
      clearEraSelections();
      this.className = 'era__block era__block--selected';
      $(".map.dragscroll").load("assets/includes/maps/map-1960s1980s.php");
    }, false);

    eraBlockFour.addEventListener('click', function() {
      clearEraSelections();
      this.className = 'era__block era__block--selected';
      $(".map.dragscroll").load("assets/includes/maps/map-today.php");
    }, false);

    function clearEraSelections() {
      var eraBlocks = document.getElementsByClassName('era__block era__block--selected');

      for (i = 0; i < eraBlocks.length; i++) {
        eraBlocks[i].setAttribute('aria-selected', false);
        eraBlocks[i].className = 'era__block';        
      }
    }
