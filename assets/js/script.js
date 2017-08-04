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
    var parentIcon = this.firstElementChild;

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
