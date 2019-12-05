$(document).ready(function() {
    $(".navigation").load("../header/header.html");
    $(".footerContent").load("../footer/footer.html");

    $('.leftTab').children().click(function() {
        let index = $(this).index()
        console.log(index);

        $('.showRight').children().eq(index).show().siblings().hide()
        $(this).addClass('defalut').siblings().removeClass('defalut')
        $(this).children().addClass('defalutBorder').siblings().children().removeClass('defalutBorder')
    })
    $('.sideContent4').click(function() {
        $('html , body').animate({scrollTop: 0},'slow');
    })
    $('.sideContent1').mouseenter(function() {
        $('.appDownload').show()
    })
    $('.sideContent1').mouseleave(function() {
        $('.appDownload').hide()
    })
  $(window).bind("scroll", function () {
        
        var sTop = $(window).scrollTop();
        var sTop = parseInt(sTop);
        // if(flag){
        //     if (sTop >= 100) {
        //         if (!$("#tz_floating_wrap").is(":visible")) {
        //             try {
        //                 $("#tz_floating_wrap").slideDown();
        //             } catch (e) {
        //                 $("#tz_floating_wrap").show();
        //             }
        //         }
        //     } else {
        //         if ($("#tz_floating_wrap").is(":visible")) {
        //             try {
        //                 $("#tz_floating_wrap").slideUp();
        //             } catch (e) {
        //                 $("#tz_floating_wrap").hide();
        //             }
        //         }
        //     }

        // }
        console.log("OOOOO",sTop)
        if (sTop >= 100) {
            if (!$("#backTop").is(":visible")) {
                    $("#backTop").show();
            }
        } else {
            if ($("#backTop").is(":visible")) {
                    $("#backTop").hide();
            }
        }
      
    })
})