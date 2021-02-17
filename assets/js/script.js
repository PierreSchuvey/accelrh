$(function() {
  $.scrollify({
		section:".scrollable-section",
    scrollbars:false,
    scrollSpeed:10,
    before:function(){
      $(".pagination .active").removeClass("active");
    },

    after:function(){
      var panelNumber = $.scrollify.current().attr("data-panel");
      $("#"+panelNumber).addClass("active");
    },
  });

  $(".pagination a").on("click",function() {
    $.scrollify.move($(this).attr("href"));
    $(".pagination .active").removeClass("active");
    $(this).addClass("active");
  });



});
