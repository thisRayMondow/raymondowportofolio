$(window).load(function() {
    var hash = "#'.$page.'";
    $("html, body").animate({scrollTop:$(hash).offset().top}, 0);
  });