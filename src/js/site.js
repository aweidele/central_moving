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
})(jQuery);
