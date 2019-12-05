$(document).ready(function() {
    $(".navigation").load("../header/header.html");
    $(".footerContent").load("../footer/footer.html");
    $('.mapPath').children().eq(5).show()
    $('.map').children().mouseenter(function() {
        let index = $(this).index();
        $(this).children().eq(0).children().attr('src', 'templets/1/tzEDU/asset/location_selected.png');
        $(this).children().eq(1).css('color', '#F92F2F')
        $(this).siblings().children('.pathPng').children().attr('src', 'templets/1/tzEDU/asset/location.png')
        $(this).siblings().children('.path').css('color', '#666666')
        $('.mapPath').children().eq(index).show().siblings().hide()
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

 // 閫夋嫨鍣╤ove鏄剧ず鏁堟灉
    $('.tz_selector_oneClass>ul>li').hover(function () {

        $(this).children('.tz_selector_details').show().parent('.tz_selector_oneClass>ul>li').siblings().children('.tz_selector_details').hide()
    })
    // 鐐瑰嚮鍑虹幇閫夋嫨鍐呭
    var clickFlag=0
  
    $(".tz_selector_text").click(function () {
console.log(333333333)
        clickFlag++
       if(clickFlag%2==0){
        $('.tz_selector_oneClass').hide()
        $('.tz_zhixiang').css("transform","rotate("+180+"deg)")
       }else{
        $('.tz_selector_oneClass').show()
        $('.tz_zhixiang').css("transform","rotate("+360+"deg)")
       } 
return false;
    })
    $(".tz_zhixiang").click(function(){
console.log(22222222222)
        clickFlag++
       if(clickFlag%2==0){
        $('.tz_selector_oneClass').hide()
        $('.tz_zhixiang').css("transform","rotate("+180+"deg)")
       }else{
        $('.tz_selector_oneClass').show()
        $('.tz_zhixiang').css("transform","rotate("+360+"deg)")
       } 
return false;
    })
 $("#app").click(function(){
        console.log(111111111)
        clickFlag++
        $('.tz_selector_oneClass').hide()
        $('.tz_zhixiang').css("transform","rotate("+180+"deg)")
    })

    //閫夋嫨鍐呭
    $('.tz_selector_threeClass>span').click(function () {
     clickFlag++
        console.log();
        // 鎷垮埌鐐瑰嚮鐨勫唴瀹�
        let value = $(this).text()
        //鎶婇€変腑鐨勫唴瀹圭粰鍒�
        $(".tz_selector_text").text($(this).text())
 $(".tz_selector_text").css("color","#111")
        $('.tz_selector_oneClass').hide()
        $('.tz_zhixiang').css("transform","rotate("+180+"deg)")
return false;
    })
    // 婊氬姩娴獥鏄剧ず褰辫棌
    $(window).bind("scroll", function () {
        
        var sTop = $(window).scrollTop();
        var sTop = parseInt(sTop);
        if(flag){
            if (sTop >= 100) {
                if (!$("#tz_floating_wrap").is(":visible")) {
                    try {
                        $("#tz_floating_wrap").slideDown();
                    } catch (e) {
                        $("#tz_floating_wrap").show();
                    }
                }
            } else {
                if ($("#tz_floating_wrap").is(":visible")) {
                    try {
                        $("#tz_floating_wrap").slideUp();
                    } catch (e) {
                        $("#tz_floating_wrap").hide();
                    }
                }
            }

        }
        if (sTop >= 200) {
            if (!$("#backTop").is(":visible")) {
                    $("#backTop").show();
            }
        } else {
            if ($("#backTop").is(":visible")) {
                    $("#backTop").hide();
            }
        }
      
    })
    var flag=true
    $(".tz_floating_close").click(function(){
        flag=false
        console.log(111111111)
        $("#tz_floating_wrap").slideUp()
    })


// 娴獥鎷垮埌淇℃伅鍙戦€佸埌鍚庡彴
 $(function(){
    var reg = /^[1]+[123456789]+[0-9]{9}/; // 楠岃瘉鐢佃瘽鍙风爜鐨勬鍒�
    var k = 0;  // 涓轰簡淇濋櫓璧疯 浣跨敤鍙橀噺
    $("#btn1").click(function(){    //闇€瑕佺偣鍑荤殑鎸夐挳
        submit("#username1", "#telephone1");  //闇€瑕佹彁浜ゅ厓绱犵殑ID
    });

    function submit(id1,id2){
        var name = $(id1).val();   // 鑾峰彇琛ㄥ崟鐨勫€�
        var tel  = $(id2).val();   //  鑾峰彇琛ㄥ崟鐨勫€�
        if (name !== "" && reg.test(tel)){
            if(tel == localStorage.getItem("tel") || k){
                alert("浜诧紝鎮ㄦ彁浜ょ殑淇℃伅鎴戜滑姝ｅ湪澶勭悊锛�")
            }else{
                function successMethod(){
                    alert("鎻愪氦鎴愬姛锛�");
                    k = 1;
                    localStorage.setItem("tel",tel);
                    $(id1).val(""); //閲嶇疆琛ㄥ崟
                    $(id2).val(""); //閲嶇疆琛ㄥ崟
                     $('.tz_selector_text').text("閫夋嫨鎰熷叴瓒ｇ鐩�").css("color","#A1A1A1")
                }
                var modelId = 662;
                var cols = [];
                cols.push(name);
                cols.push(tel);
                cols.push($('.tz_selector_text').text());
                saveForm(modelId,cols,successMethod);
            }
        }else{
            alert("璇峰畬鍠勬偍鐨勬湁鏁堜俊鎭紒");
        }
    }
});



var key = "tzdata_ga_user";
var baseurl="http://tzdata.tzidt.com";

function getCookie(name) {
var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
if(arr = document.cookie.match(reg)) {
    return unescape(arr[2]);
} else {
    return null;
}
}

var username = document.cookie.split(";")[0].split("=")[1];
/*setCookie('token', '1487925874291569384');
setCookie('_ga', 'aaasdgsd');*/
//JS閹垮秳缍攃ookies閺傝纭�!
//閸愭獑ookies
function setCookie(name, value) {
var Days = 365;
var exp = new Date();
exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

/**
* 
* @param modelId 鐞涖劌宕熷Ο鈥虫健閻ㄥ嚘D  
* @param cols 閹绘劒姘﹂惃鍕摟濞堝灚鏆熺紒鍒恈ol1,col2,col3,...]閿涘本婀佹径姘毌娑擃亜姘ㄩ弨鎯ь樋鐏忔垳閲�,閺堚偓婢舵俺鍏橀弨鎯у磩娑擄拷
* @param 閹绘劒姘﹂幋鎰閹笛嗩攽閻ㄥ嫬娲栫拫锟� 閸欘垯浜掓稉宥勭炊
* @param 閹绘劒姘︽径杈Е閹笛嗩攽閻ㄥ嫬娲栫拫锟� 閸欘垯浜掓稉宥勭炊
*/
function saveForm(modelId,cols,successMetond,failMethod) {
var body="";
var ga = getCookie('_ga');
var token = getCookie('token');
if(!modelId)modelId=-1;
body+="modelId="+modelId;
if(token)body+="&token="+token;
if(ga)body+="&col19="+ga;

for(var i=1;i<cols.length+1;i++){
    if(i>11)break;
    if(body!="")body+="&";
    body+="col"+i+"="+cols[i-1];
}

fetch(baseurl+'/data/saveFormData.json?mode', {
        method: 'POST',
        mode: 'cors',
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
          },
        body: body
    }).then(
        function(response) {
            if(response.status !== 200) {
                if(failMethod)failMethod();		
                return;
            }
            //濡偓閺屻儱鎼锋惔鏃€鏋冮張锟�
            response.json().then(function(data) {
                if(successMetond)successMetond();
            });
        }
    )
    .catch(function(err) {
        if(failMethod)failMethod();
    });

}


})