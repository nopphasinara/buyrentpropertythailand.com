function is_undefined(data) {
  if (typeof data === 'undefined') {
    return true;
  }

  return false;
}

function is_empty(data) {
  if (typeof data === 'undefined' || data === '') {
    return true;
  }

  return false;
}

function get_target(el) {
  if (is_undefined(el) || is_empty(el)) {
    return '';
  }

  if (typeof el !== 'object') {
    el = $(el);
  }

  var data_target = '';

  if (!is_undefined(el.attr('data-target')) && !is_empty(el.attr('data-target')) && el.attr('data-target') !== '#') {
    data_target = el.attr('data-target');
  } else if (!is_undefined(el.attr('href')) && !is_empty(el.attr('href')) && el.attr('href') !== '#') {
    data_target = el.attr('href');
  }

  return data_target;
}
