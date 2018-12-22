<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>Hello World!</title>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
  <h1>Hello, world!</h1>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script>$(function () { var nua = navigator.userAgent; var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1); if (isAndroid) { $('select.form-control').removeClass('form-control').css('width', '100%'); } });</script>
  <script>
  $('#myModal').on('show.bs.modal', function (e) {
    // stops modal from being shown
    if (!data) {
      return e.preventDefault();
    }
  });

  $('#myCollapse').on('shown.bs.collapse', function (e) {
    // Action to execute once the collapsible area is expanded
  });

  $('#myCarousel').on('slid.bs.carousel', function (e) {
    // Will slide to the slide 2 as soon as the transition to slide 1 is finished
    $('#myCarousel').carousel('2');
  });

  $('.btn.danger').button('toggle').addClass('fat');

  $.fn.modal.Constructor.Default.keyboard = false; // changes default for the modal plugin's `keyboard` option to false
  </script>
</body>
</html>
