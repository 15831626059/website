$(document).ready(function() {
  $(".title>li").click(function(){
    $(this)
      .addClass("active")
      .siblings("li")
      .removeClass("active");
  });
})