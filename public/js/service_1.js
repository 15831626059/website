$(document).ready(function() {
    // var version = navigator.userAgent;
    // console.log(version);
    // if (version.indexOf("Windows NT 5") != -1) {
    //     $('body').css({ "font-familty": "Microsoft YaHei", })
    // } else if (version.indexOf("Windows NT 7") != -1) {
    //     $('body').css({ "font-familty": "Microsoft YaHei", })
    // } else if (version.indexOf("Windows NT 10") != -1) {
    //     $('body').style({ "font-familty": "Microsoft YaHei", })
    // }
    // $(".navigation").load("../index/template/header/header.html");
    // $(".footerContent").load("../index/template/footer/footer.html");
    // $('.sideContent4').click(function() {
    //     document.body.scrollTop = document.documentElement.scrollTop = 0;
    // })
    $('.sideContent1').mouseenter(function() {
        $('.appDownload').show()
    })
    $('.sideContent1').mouseleave(function() {
        $('.appDownload').hide()
    })

    $('.sideContent4').click(function () {
        // document.body.scrollTop = document.documentElement.scrollTop = 0;
        $('html , body').animate({scrollTop: 0},'slow');
    })
    // 选择器hove显示效果
    $('.tz_selector_oneClass>ul>li').hover(function () {

        $(this).children('.tz_selector_details').show().parent('.tz_selector_oneClass>ul>li').siblings().children('.tz_selector_details').hide()
    })
    // 点击出现选择内容

   var clickFlag=0
    $(".tz_selector_text").click(function () {
        clickFlag++
       if(clickFlag%2==0){
        $('.tz_selector_oneClass').hide()
        $('.tz_zhixiang').css("transform","rotate("+180+"deg)")
       }else{
        $('.tz_selector_oneClass').show()
        $('.tz_zhixiang').css("transform","rotate("+360+"deg)")
       } 
    })
    $(".tz_zhixiang").click(function(){
        clickFlag++
       if(clickFlag%2==0){
        $('.tz_selector_oneClass').hide()
        $('.tz_zhixiang').css("transform","rotate("+180+"deg)")
       }else{
        $('.tz_selector_oneClass').show()
        $('.tz_zhixiang').css("transform","rotate("+360+"deg)")
       } 
    })
    $("#app").click(function(){
        clickFlag++
        $('.tz_selector_oneClass').hide()
        $('.tz_zhixiang').css("transform","rotate("+180+"deg)")
    })
    //选择内容
    $('.tz_selector_threeClass>span').click(function () {
 clickFlag++
        console.log();
        // 拿到点击的内容
        let value = $(this).text()
        //把选中的内容给到
        $(".tz_selector_text").text($(this).text())
$(".tz_selector_text").css("color","#111")
        $('.tz_selector_oneClass').hide()
        $('.tz_zhixiang').css("transform","rotate("+180+"deg)")
    })

 // 滚动浮窗显示影藏
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

  $("#tz_bofang_01").click(function(){
        $("#tz_video_01").trigger('play');
        $("#tz_bofang_01").hide()
        $(".tz_shadow_01").hide()
    })
    $("#tz_video_01").click(function(){
        $(this).trigger('pause')
        $("#tz_bofang_01").show()
$(".tz_shadow_01").show()
    })

  $("#tz_bofang_02").click(function(){
        $("#tz_video_02").trigger('play');
        $("#tz_bofang_02").hide()
 $(".tz_shadow_02").hide()
    })
    $("#tz_video_02").click(function(){
        $(this).trigger('pause')
        $("#tz_bofang_02").show()
$(".tz_shadow_02").show()
    })






   // 浮窗拿到信息发送到后台
    $(function(){
        var reg = /^[1]+[123456789]+[0-9]{9}/; // 验证电话号码的正则
        var k = 0;  // 为了保险起见 使用变量
        $("#btn1").click(function(){    //需要点击的按钮
            submit("#username1", "#telephone1");  //需要提交元素的ID
        });

        function submit(id1,id2){
            var name = $(id1).val();   // 获取表单的值
            var tel  = $(id2).val();   //  获取表单的值
            if (name !== "" && reg.test(tel)){
                if(tel == localStorage.getItem("tel") || k){
                    alert("亲，您提交的信息我们正在处理！")
                }else{
                    function successMethod(){
                        alert("提交成功！");
                        k = 1;
                        localStorage.setItem("tel",tel);
                        $(id1).val(""); //重置表单
                        $(id2).val(""); //重置表单
                         $('.tz_selector_text').text("选择感兴趣科目").css("color","#A1A1A1")
                    }
                    var modelId = 662;
                    var cols = [];
                    cols.push(name);
                    cols.push(tel);
                    cols.push($('.tz_selector_text').text());
                    saveForm(modelId,cols,successMethod);
                }
            }else{
                alert("请完善您的有效信息！");
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
//JS鎿嶄綔cookies鏂规硶!
//鍐檆ookies
function setCookie(name, value) {
	var Days = 365;
	var exp = new Date();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

/**
 * 
 * @param modelId 琛ㄥ崟妯″潡鐨処D  
 * @param cols 鎻愪氦鐨勫瓧娈垫暟缁刐col1,col2,col3,...]锛屾湁澶氬皯涓氨鏀惧灏戜釜,鏈€澶氳兘鏀惧崄涓�
 * @param 鎻愪氦鎴愬姛鎵ц鐨勫洖璋� 鍙互涓嶄紶
 * @param 鎻愪氦澶辫触鎵ц鐨勫洖璋� 鍙互涓嶄紶
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
				//妫€鏌ュ搷搴旀枃鏈�
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
