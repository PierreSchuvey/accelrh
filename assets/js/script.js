if(!window.matchMedia("(max-width: 915px)").matches) {
  $(function() {
    $.scrollify({
  		section:".scrollable-section",
      interstitialSection : "",
      easing: "easeOutExpo",
      scrollSpeed: 100,
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
    $(".buttonStart").on("click",function() {
      $.scrollify.move($(this).attr("href"));
      $(".pagination .active").removeClass("active");
      $(".first").addClass("active");
    });


  });
}else{
  $('.pagination').css('display','none');
}

document.querySelector('#callDemo').addEventListener('click', function() {
  document.querySelector('.contactBar').classList.toggle('expand');
});
document.querySelector('#closeForm').addEventListener('click', function() {
  document.querySelector('.contactBar').classList.toggle('expand');
});
