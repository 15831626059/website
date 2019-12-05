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
    }else{
        location.href="/mobile/article/" + id
    }
}
</script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新闻详情</title>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="/js/jquery_3.js"></script>
    <script src="/js/detail.js"></script>
    <link rel="stylesheet" href="/css/detail.css">
</head>

<body>
     <div class="side">
            <div class="appDownload">
                <div class="ewmCode">
                    <img src="http://www.tanzhouedu.com/templets/1/tzEDU//asset/tz_edu_ewm.png" alt="">
                    <div class="ewmCodeFont">
                        下载潭州课堂APP 随时随地学习111
                    </div>
                </div>
            </div>
            <div class="sideContent sideContent1">
               <div class="tz_side_xz"></div>
                <span class="sideFont">
                    APP下载
                </span>
            </div>
            <div class="sideContent sideContent2">
                <div class="tz_side_wt"></div>
                <span class="sideFont">
                    常见问题
                </span>
            </div>
            <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=3003419127&site=qq&menu=yes"
                class="sideContent sideContent3">
                <div class="tz_side_kf"></div>
                <span class="sideFont">
                    咨询投诉
                </span>
            </a>
            <div class="sideContent sideContent4" id="backTop">
                <div class="tz_side_hdb"></div>
            </div>
        </div>
    <div class="header">
        <div id="headerAll">
            <div class="logoBox">
                <img src="http://www.tanzhouedu.com/templets/1/tzEDU//asset/logo_002.png" class="logoPng">
            </div>
            <ul class="navigationDetails">
<template>
                    <li v-for="item,index in msgArr" @mouseenter='enter(index)' @mouseleave='leave(index)' @click='pageJump(index)' :class='index==5?"hots":""'>
                        <div class="colorTab" :class='index==3?"active":""' v-text="item">
                        </div>
                        <span class="bottomList" v-show='index==3'></span>
                        <img src="/picture/hot_1.png" class="hot" v-if='index==5'>
                        <div class="suspension" @mouseenter="enterD(index)" @mouseleave="leaveD(index)" v-show='index==5&&current==5&&seen'>
                            <div class="triangle">
                                <img src="/picture/sjx_1.png">
                            </div>
                            <div class="suspensionBox">
                                <div class="suspensionTop">
                                    <div class="suspensionPhone suspensionApp">
                                        <img src="/picture/phone_1.png">
                                        <div>扫码 下载APP</div>
                                    </div>
                                    <div class="suspensionPhone suspensionPC">
                                        <img src="/picture/pc_1.png" alt="">
                                        <div>PC端下载</div>
                                    </div>
                                </div>
                                <div class="suspensionBottom">
                                    <div class="code">
                                        <img src="/picture/topcode_1.png">
                                    </div>
                                    <div class="system">
                                        <div class="window">Windows系统</div>
                                        <div class="winXP">winXP系统</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
</template>
            </ul>
        </div>
    </div>
    <div class="newsContent">
        <div class="title">{{$article->title}}</div>
        <div class="tips">
            <div class="tips1">
                发布时间：{{$article->created_at}}
            </div>
            <input type="hidden" id="surlValue" value="<!--未找到该标签内容-->">
            <div class="tips2">
            </div>
        </div>
        <div class="fristTitle">
            <p>{!!$article->content!!}</p>
        </div>

    </div>
    <div class="footer">
        <div class="content">
            <div class="contentMargin contentMarginSencond">
                <div class="detalisTop">
                    <img src="http://www.tanzhouedu.com/templets/1/tzEDU//asset/phoneNumber.png" alt="">
                    <div class="titleClass">服务热线</div>
                </div>
                <div class="service">
                    <!-- <img src="http://www.tanzhouedu.com/templets/1/tzEDU//asset/serviceTime.png" alt=""> -->
                    <div class="telNum">4008-500-888</div>
                    <div class="telData">9 : 00 - 23 : 00 周一至周日</div>
                </div>
                <div class="Bottomline"></div>
                <div class="beian">
                    <div>
                        Copyright &#169 All Rights Reserved.版权所有：湖南潭州教育网络科技有限公司
                    </div>
                    <a href="http://www.miitbeian.gov.cn" target="view_window">
                        <img style="vertical-align:middle;display: inline-block;" src="http://www.tanzhouedu.com/templets/1/tzEDU//asset/icon.png"> 备案号：湘ICP备15014315号—1
                    </a>
                </div>
            </div>
            <div class="contentMargin contentMarginFrist">
                <div class="detalisTop">
                    <img src="http://www.tanzhouedu.com/templets/1/tzEDU//asset/follow.png" alt="">
                    <div class="titleClass">关注我们</div>
                </div>
                <div class="tzktBox">
                    <div class="tzktAPP leftBox">
                        <div><img src="http://www.tanzhouedu.com/templets/1/tzEDU//asset/app.png"></div>
                        <div class="tzkt">潭州课堂APP下载</div>
                    </div>
                    <div class="tzktAPP">
                        <div><img src="http://www.tanzhouedu.com/templets/1/tzEDU//asset/gzh.png"></div>
                        <div class="tzkt">潭州课堂公众号</div>
                    </div>
                </div>
            </div>
            <div class="contentMargin">
                <div class="detalisTop">
                    <img src="http://www.tanzhouedu.com/templets/1/tzEDU//asset/title.png" alt="">
                    <div class="titleClass">公司信息</div>
                </div>
                <div>
                    <ul>
                            <li><a href="/">首页</a></li>
                            <li><a href="/service">潭州优势</a></li>
                            <li><a href="contact">校企合作</a></li>
                            <li><a href="/enter">走进潭州</a></li>
                            <li><a href="/article">新闻动态</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>

<script>
    $(document).ready(function () {
        $('.sideContent2').click(function () {
            window.location.href = "/faq";
        })

        $('.tzNews').click(function () {
            window.location.href = "http://www.tanzhouedu.com/html/1/150/151/index.html";
        })

        $('.media').click(function () {
            window.location.href = "http://www.tanzhouedu.com/html/1/150/152/index.html";
        })
      $('.window').click(function() {
            window.location.href = 'https://cstore.shiguangkey.com/resource/TZKTSetup4.1.7.5334.exe'
        })
        $('.winXP').click(function() {
            window.location.href = 'https://cstore.shiguangkey.com/resource/TZKTSetup4.1.7.5334XP.exe'
        })
    })
</script>

<script>
    $(document).ready(function() {
        $("#surl").attr("href","http://"+$("#surlValue").val());
        console.log($('.system').children());

        $('.system').children().hover(function() {
            console.log(111);
            $(this).css('background', '#F92F2F').siblings().css('background', '#111111')
        })
        console.log($('.navigationDetails').children());
        $('.navigationDetails').children().mouseenter(function() {
            console.log();
            // if ($(this).index() == 5) {
            //     $('.suspension').show()
            // }

            $(this).css('color', '#F92F2F')
        })
        $('.navigationDetails').children().mouseleave(function() {
            $(this).css('color', '#666666')
        })

    })

    var app = new Vue({
        el: '#headerAll',
        data: {
            seen: true,
            current: 4,
            timer1: '',
            timer2: '',
            msgArr: [
                // { homePage: '首页' }, { homePage: '潭州优势' }, { homePage: '校企合作' }, { homePage: '走进潭州' }, { homePage: '新闻报道' }, { homePage: '关于我们' }, { homePage: '客户端下载' }
                '首页', '走进潭州', '产品与服务', '新闻报道', '关于我们', '客户端下载'
            ]
        },
        methods: {
            enter: function(index) {
                 clearTimeout(this.timer1)
                clearTimeout(this.timer2)
                this.current = index
                this.seen = true;
            }, //添加幻灯片
            leave: function(index) {
                this.timer1 = setTimeout(() => {
                    this.seen = false;
                }, 2000);
            }, //删除方法
            enterD: function() {
                console.log(this.timer1);

                 clearTimeout(this.timer1)
                clearTimeout(this.timer2)
                this.seen = true;
            },
            leaveD: function() {
                this.timer2 = setTimeout(() => {
                    this.seen = false;
                }, 2000);
            },
            pageJump: function(index) {
                switch (index) {
                    case 0:
                        url = "/";
                        break;
                    case 1:
                        url = "/enter";
                        break;
                    case 2:
                        url = "/service";
                        break;
                    case 3:
                        url = "/article";
                        break;
                    case 4:
                        url = "/contact";
                        break;
                }
                window.location.href=url;
            }
        },
    })
</script>
