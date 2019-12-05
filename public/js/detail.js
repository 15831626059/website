$(document).ready(function() {
    $(".navigation").load("../header/header.html");
    $(".footerContent").load("../footer/footer.html");
    $('.sideContent4').click(function() {
        document.body.scrollTop = document.documentElement.scrollTop = 0;
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