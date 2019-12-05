<!DOCTYPE html>
<html lang="en">
<script>
iswap();
function iswap() {
    var uA = navigator.userAgent.toLowerCase();
    var ipad = uA.match(/ipad/i) == "ipad";
    var iphone = uA.match(/iphone os/i) == "iphone os";
    var midp = uA.match(/midp/i) == "midp";
    var uc7 = uA.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
    var uc = uA.match(/ucweb/i) == "ucweb";
    var android = uA.match(/android/i) == "android";
    var windowsce = uA.match(/windows ce/i) == "windows ce";
    var windowsmd = uA.match(/windows mobile/i) == "windows mobile"; 
    if (!(ipad || iphone || midp || uc7 || uc || android || windowsce || windowsmd)) {
        // PC 端
        location.href="/service"
    }
}
</script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>产品服务</title>
    <link rel="stylesheet" href="/m/service.css">
    <link rel="stylesheet" href="/m/reset.css">
    <script src="/m/rem.js"></script>
    <script src="/m/jquery.js"></script>
    <script src="/m/vue.js"></script>
    <script src="/m/public.js"></script>
</head>

<body>
    <div id="product">
        <!-- 头部 -->
        <div class="header">
            <div class="logo">
                <img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/logo.png" alt="">
            </div>
            <ul class="title">
               <li @click='pageJump(0)'>
                    <a href="#">
                       首页
                    </a>
                </li>
                    <li @click='pageJump(1)'>
                        <a href="#">
                            走进潭州
                        </a>
                    </li>
                  <li @click='pageJump(2)'>
                      <a href="#" class="active">
                          产品服务
                      </a>
                  </li>
                   <li @click='pageJump(3)'>
                       <a href="#">
                           新闻报道
                       </a>
                   </li>
 <li @click="pageJump(4)" >
            <a href="#">
              关于我们
            </a>
          </li>
            </ul>
        </div>
        <!-- 潭州课堂 -->
        <div class="tzkt">
            <div class="tzkt_img">
                <div class="banner_img"><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/product_banner.png" alt=""></div>
                <div class="tz_icon"><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/tz_icon.png" alt=""></div>
                <h6>潭州课堂</h6>
                <p>网上教育，就选潭州课堂</p>
            </div>
            <button class="btn"  @click='download'>点击下载</button>
        </div>
        <!-- 产品介绍 -->
        <div class="recommend">
            <h4>产品介绍</h4>
            <p>潭州课堂是潭州教育旗下的在线教学直播平台，集课程发布、教学管理、在线授课听课、作业考试、互动学习功能于一体，支持web、PC、app、h5、小程序五端同时在线直播。现已服务超百万学员在线学习，日均开课300门以上，涵盖编程、营销、设计、艺术、语言、农业等多个科目，同时在线人数已超6.6万。
            </p>
        </div>
    </div>
</body>

</html>
<script>
    $(document).ready(function () {

    })
</script>
<script>
    var app = new Vue({
        el: '#product',
        data: {
            msgArr: [
                '首页', '走进潭州', '产品服务', '新闻报道'
            ],
            cur:2
        },

        created: function () {

        },
        methods: {
            pageJump: function(index) {
                        switch (index) {
                            case 0:
                                url = "/mobile";
                                break;
                            case 1:
                                url = "/mobile/enter";
                                break;
                            case 2:
                                url = "/mobile/service";
                                break;
                            case 3:
                                url = "/mobile/article";
                                break;
                            case 4:
                                url = "/mobile/about";
                                break;
                        }
                        window.location.href=url;
            },
            download() {
                if(this.isAndroid_ios()){
                //安卓
                    console.log('安卓')
                    window.location.href='https://res.shiguangkey.com/res/appdown/tzkt/sgkt-release-3.1.9.2-4.22.apk'
                }else{
                //ios
                    console.log('ios')
                    window.location.href='https://itunes.apple.com/cn/app/id1267214955?l=zh&ls=1&mt=8'
                }
            },
            //判断是否是安卓还是ios  
            isAndroid_ios () {  
            var u = navigator.userAgent, app = navigator.appVersion
            var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Linux') > -1 //android终端或者uc浏览器  
            var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/) //ios终端  
            return isAndroid == true?true:false
            }
        },

    })
</script>
