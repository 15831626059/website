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
    var url = window.location.href;
    var urls = url.split('/');
    var id = urls[urls.length-1];
    if (!(ipad || iphone || midp || uc7 || uc || android || windowsce || windowsmd)) {
        // PC 端
        location.href="/article/" + id
    }
}
</script>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>新闻详情</title>
  <link rel="stylesheet" href="/m/detail.css">
    <link rel="stylesheet" href="/m/reset.css">
    <script src="/m/rem.js"></script>
    <script src="/m/jquery.js"></script>
    <script src="/m/vue.js"></script>
    <style>
        .article_content p{
            font-size: 14px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
  <div id="newsDetail" class="news_detail">
    <div class="detail_line"></div>
    <div class="article">
      <div class="artcle_title">{{$article->title}}</div>
      <div class="artcle_info">
        <span class="artcle_time fl" style="width:50%;">{{$article->created_at}}</span>
      </div>
      <div class="article_content">
            <p>{!!$article->content!!}</p>
      </div>
    </div>
  </div>
</body>
</html>
<script>
  var app = new Vue({
    el: '#newsDetail',
    data: {

    },

    created: function () {

    },
    methods: {

    },

  })
</script>
