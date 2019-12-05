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
        location.href="/article"
    }
}
</script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新闻报道</title>
    <link rel="stylesheet" href="/m/new.css">
    <link rel="stylesheet" href="/m/reset.css">
    <script src="/m/rem.js"></script>
    <script src="/m/jquery.js"></script>
    <script src="/m/public.js"></script>
    <script src="/m/vue.js"></script>
</head>
<body>
    <div id="news">
         <!-- 头部 -->
         <div class="header">
                <div class="logo">
                    <img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/logo.png" alt="">
                </div>
                <ul class="title">
                    <li @click='pageJump(0)' >
                    <a href="#">
                       首页
                    </a>
                </li>
                    <li @click='pageJump(1)' >
                        <a href="#">
                            走进潭州
                        </a>
                    </li>
                  <li @click='pageJump(2)'>
                      <a href="#"  >
                          产品服务
                      </a>
                  </li>
                   <li>
                       <a href="#" class="active" @click='pageJump(3)' >
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
       <div class="news_list">
            <div class="news_wrap">
                <ul>
                     
                    @foreach($article as $item)
                    <li name='/mobile/article/{{$item->id}}'><a href='/mobile/article/{{$item->id}}'>
                        <div class="news_img">
                            <img src="{{$item->cover_image}}" alt="">
                        </div>
                        <div class="news_detail">
                            <p>{{$item->introduction}}</p>
                            <span>{{$item->created_at}}</span>
                        </div>
                    </a>
                    </li>
                    @endforeach
                    
                    
                </ul>
            </div>
       </div>
      
    </div>
</body>
</html>
    <script>
        var app = new Vue({
            el: '#news',
            data: {
                msgArr: [
                '首页', '走进潭州', '产品服务', '新闻报道'
            ],
            cur: 3
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
                    }
            },
    
        })
    </script>
