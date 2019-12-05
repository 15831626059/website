$(document).ready(function() {
 $(".title>li").click(function(){
    $(this)
      .addClass("active")
      .siblings("li")
      .removeClass("active");
  });
  //杞挱鍥�1
  var swiper = new Swiper(".swiper-container", {
    slidesPerView: 1,
    loop: true,
  });
  //鐗硅仒椤鹃棶杞挱鏁堟灉
  var swiper2 = new Swiper(".swiper-container2", {
    loop: true,
    slidesPerView: "auto",
    centeredSlides: true,
    pagination: {
      el: ".swiper-pagination2"
    }
  });

  //鍥炲埌椤堕儴
  $("#goToTop").click(function() {
    $('section').animate({ scrollTop: 0 },500)
     return false
  });


});