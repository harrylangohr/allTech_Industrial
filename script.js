$(document).ready(function() {
 console.log('javascript is running!');

  $(document).on('click', 'a[href^="#"]', function(e) {
    e.preventDefault();

    // target element id
    var id = $(this).attr('href');

    // target element
    var $id = $(id);
    if ($id.length === 0) {
      return;
    }

    // top position relative to the document
    var pos = $(id).get()[0].offsetTop - $('.content').offset().top;

    $('.content').animate({scrollTop: pos});
  });

});
