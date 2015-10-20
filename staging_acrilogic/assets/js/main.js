// $("#circuit-background").css({height: $(document).height(),
//      width: $(document).width()});
$("#nav-icon").click(function() {
  $("#nav").animate({
    left: 0
  }, 500);
});

$("#nav-close-item, #content, #footer").click(function() {
  $("#nav").animate({
    left: "-66.67%"
  }, 500);
});

$(".nav-tabs ul li a").click(function(e) {
  $(this).parent().addClass("active").siblings().removeClass("active");
  $(this.getAttribute("href")).show().siblings().hide();
  e.preventDefault();
});