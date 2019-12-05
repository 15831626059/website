
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
//JS操作cookies方法!
//写cookies
function setCookie(name, value) {
	var Days = 365;
	var exp = new Date();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

/**
 * 
 * @param modelId 表单模块的ID  
 * @param cols 提交的字段数组[col1,col2,col3,...]，有多少个就放多少个,最多能放十个
 * @param 提交成功执行的回调 可以不传
 * @param 提交失败执行的回调 可以不传
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
				//检查响应文本
				response.json().then(function(data) {
					if(successMetond)successMetond();
				});
			}
		)
		.catch(function(err) {
			if(failMethod)failMethod();
		});

}
	
