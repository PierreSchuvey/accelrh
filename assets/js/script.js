$(function() {
  $.scrollify({
		section:".scrollable-section",
    interstitialSection : "",
    easing: "easeOutExpo",
    scrollSpeed: 1100,
    offset : 0,
    scrollbars: true,
    standardScrollElements: "",
    setHeights: false,
    overflowScroll: true,
    updateHash: true,
    touchScroll:true,
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
