;$(document).ready(function () {
  console.log('Load custom.js file successfully');

  // $('.dropdown').on('mouseenter mouseleave click', function () {
  //   var dropdown = $(this);
  //   var dropdown_toggler = dropdown.children('[data-toggle="dropdown"]');
  //   var dropdown_menu = dropdown.children('.dropdown-menu');
  //   if (dropdown_menu.length) {
  //     dropdown.toggleClass('show');
  //     dropdown_toggler.each(function () {
  //       var expanded = 'false';
  //       if (typeof $(this).attr('aria-expanded') != 'undefined' && $(this).attr('aria-expanded')) {
  //         if ($(this).attr('aria-expanded') == 'true') {
  //           expanded = 'false';
  //         } else if ($(this).attr('aria-expanded') == 'false') {
  //           expanded = 'true';
  //         }
  //       }
  //
  //       $(this).attr('aria-expanded', ''+ expanded +'');
  //     });
  //     dropdown_menu.each(function () {
  //       $(this).toggleClass('show');
  //     });
  //   }
  // });

  $('.collapse-btn-close, [data-toggle="offcanvas"]').on('click', function (evt) {
    evt.preventDefault();
    evt.stopPropagation();

    var self = $(this);
    var data_target = '';

    if (typeof self.attr('data-target') != 'undefined' && self.attr('data-target') != '#' && self.attr('data-target')) {
      data_target = self.attr('data-target');
    } else {
      if (typeof self.attr('href') != 'undefined' && self.attr('href') != '#' && self.attr('href')) {
        data_target = self.attr('href');
      }
    }

    $(''+ data_target +'').toggleClass('open');
  });
});
