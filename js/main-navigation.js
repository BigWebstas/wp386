// Open dropdown menus on hover, with a short delay before closing.
document.addEventListener('DOMContentLoaded', function() {
  var DELAY = 200;

  document.querySelectorAll('.navbar-nav .menu-item.dropdown').forEach(function(dropdown) {
    var link = dropdown.querySelector(':scope > a');
    var menu = dropdown.querySelector(':scope > ul.dropdown-menu');
    var timeout;

    function show() {
      window.clearTimeout(timeout);
      menu.classList.add('show');
      link.classList.add('hover');
    }

    function hide() {
      timeout = window.setTimeout(function() {
        menu.classList.remove('show');
        link.classList.remove('hover');
      }, DELAY);
    }

    [link, menu].forEach(function(el) {
      el.addEventListener('mouseenter', show);
      el.addEventListener('mouseleave', hide);
    });
  });
});
