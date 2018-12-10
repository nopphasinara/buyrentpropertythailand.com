;$(document).ready(function () {
  console.log('Load custom.js file successfully');

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
