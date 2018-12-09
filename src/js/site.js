(function($) {
  $("#header_nav_button").on("click",function() {
    $("body").toggleClass("menu_open");
  });

  $(".main_nav_expand").on("click",function() {
    if( $(this).parent().hasClass("expanded") ) {
      $(this).parent().removeClass("expanded");
    } else {
      $(".main_nav .menu-item").removeClass("expanded");
      $(this).parent().addClass("expanded");
    }
  });

  $(".owl-carousel").each(function() {
    var options = $(this).data("options");
    $(this).owlCarousel(options);
  });

  if( $(".hero_item_sm_inner").length ) {
    $(".hero_item_sm_inner").each(function() {
      var bg = $(this).data("background");
      $(this)
        .addClass("bg")
        .css({"background-image":"url("+bg+")"});
    });
  }

  $(window).load(function() {
    // Check for hash in url
    var hash = window.location.hash;
    if( hash ) {
      var scroll = $(window).scrollTop() - $("header.header").height();
      $(window).scrollTop(scroll);
    }
  });
})(jQuery);
