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
    }else{
        location.href="/mobile/article"
    }
}
</script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新闻</title>
 <link rel="stylesheet" href="/css/news.css">
        <link rel="stylesheet" href="/css/zxf_page.css">
    <script src="/js/jquery_3.js"></script>
    <script src="/js/628814ea1e934529afbe7b4d04f5da72.js"></script>
    <script src="/js/zxf_page.js"></script>
    <script src="/js/news.js"></script>
</head>

<body>
    <div id="app">
            <div class="side">
                    <div class="appDownload">
                        <div class="ewmCode">
                            <img src="picture/tz_edu_ewm_3.png" alt="">
                            <div class="ewmCodeFont">
                                下载潭州课堂APP 随时随地学习
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
                    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=3360119648&site=qq&menu=yes"
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
                <header class="headerStyle">
        <div class="header">
            <div id="headerAll">
                <div class="logoBox">
                    <img src="picture/logo_002_2.png" class="logoPng">
                </div>
                <ul class="navigationDetails">
<template>
                        <li v-for="item,index in msgArr" @mouseenter="enter(index)" @mouseleave="leave(index)"
                            :class='index==5?"hots":""' @click='pageJump(index)'  v-cloak>
                            <div class="colorTab" :class='index==3?"active":""' v-text="item"  v-cloak>
                            </div>
                            <span class="bottomList" v-show='index==3'></span>
                            <img src="picture/hot.png" class="hot" v-if='index==5'>
                            <div class="suspension" @mouseenter="enterD(index)" @mouseleave="leaveD(index)"
                                v-show='index==5&&current==5&&seen'>
                                <div class="triangle">
                                    <img src="picture/sjx.png">
                                </div>
                                <div class="suspensionBox">
                                    <div class="suspensionTop">
                                        <div class="suspensionPhone suspensionApp">
                                            <img src="picture/phone.png">
                                            <div>扫码 下载APP</div>
                                        </div>
                                        <div class="suspensionPhone suspensionPC">
                                            <img src="picture/pc.png" alt="">
                                            <div>PC端下载</div>
                                        </div>
                                    </div>
                                    <div class="suspensionBottom">
                                        <div class="code">
                                            <img src="picture/topcode.png">
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
        <div class="banner">
            <img src="picture/tz_tzjd_bg.png" alt="">
        </div>
        <div class="newsContent">
        
            <div class="newsContent1">
                <div class="newsDetails">
                    
                    @foreach($article as $item)
                    <div class="newsCard" @mouseenter="enter()" @mouseleave="leave()" name='/article/{{$item->id}}'>
                        <div class="newsPng">
                            <img class="newsPng1" src="{{$item->cover_image}}" alt="">
                        </div>
                        <div class="newsTips">
                            <div class="titleTips">
                                <a href='article/{{$item->id}}' target="_self">{{$item->title}}</a>
                            </div>
                            <div class="newsIntroduce">
                                {{$item->introduction}}
                            </div>
                            <div class="newsData">
                                {{$item->created_at}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
  
            </div>
        </div>
    
        <div class="footer">
            <div class="content">
                <div class="contentMargin contentMarginSencond">
                    <div class="detalisTop">
                        <img src="picture/phonenumber_3.png" alt="">
                        <div class="titleClass">服务热线</div>
                    </div>
                    <div class="service">
                        <!-- <img src="picture/servicetime_3.png" alt=""> -->
                        <div class="telNum">4008-500-888</div>
                        <div class="telData">9 : 00 - 23 : 00 周一至周日</div>
                    </div>
                    <div class="Bottomline"></div>
                    <div class="beian">
                        <div>
                            Copyright &#169 All Rights Reserved.版权所有：湖南潭州教育网络科技有限公司
                        </div>
                        <a href="http://www.miitbeian.gov.cn" target="view_window">
                            <img style="vertical-align:middle;display: inline-block;" src="picture/icon_3.png"> 备案号：湘ICP备15014315号—1
                        </a>
                    </div>
                </div>
                <div class="contentMargin contentMarginFrist">
                    <div class="detalisTop">
                        <img src="picture/follow_3.png" alt="">
                        <div class="titleClass">关注我们</div>
                    </div>
                    <div class="tzktBox">
                        <div class="tzktAPP leftBox">
                            <div><img src="picture/app_3.png"></div>
                            <div class="tzkt">潭州课堂APP下载</div>
                        </div>
                        <div class="tzktAPP">
                            <div><img src="picture/gzh_3.png"></div>
                            <div class="tzkt">潭州课堂公众号</div>
                        </div>
                    </div>
                </div>
                <div class="contentMargin">
                    <div class="detalisTop">
                        <img src="picture/title_3.png" alt="">
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

    <div class="tz_floating_wrap" id="tz_floating_wrap">
            <div class="tz_floating">
                <div class="tz_floating_left">
                    <img src="picture/tz_gz_3.png" alt="">
                   
                </div>
                <p class="tz_floating_text">立即预约<b>“免费”</b>获取在线公开课</p>
                <input type="text" placeholder="请填写您的名字" class="tz_floating_name" id="username1">
                <input type="text" placeholder="请填写您的手机号码" class="tz_floating_tel" id="telephone1">
                <div class="tz_selector_wrap">
                    <p class="tz_selector_text">选择感兴趣科目</p>
                    <img src="picture/tz_zhixiang_3.png" alt="" class="tz_zhixiang">
                    <div class="tz_selector_oneClass">
                        <ul>
                            <li >
                                <span>IT互联网</span>
                                <div class="tz_selector_details" style="display: block">
                                    <ol>
                                        <li>
                                            <span class="tz_selector_towClass">IT互联网</span>
                                            <div class="tz_selector_threeClass">
                                                <span>C</span>
                                                <span>PHP</span>
                                                <span>Python</span>
                                                <span>C++</span>
                                                <span>Java</span>
                                                <span>Linux</span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="tz_selector_towClass">互联网运营</span>
                                            <div class="tz_selector_threeClass">
                                                <span>淘宝运营</span>
                                                <span>新媒体运营</span>
                                                <span>SEO</span>
                                                <span>SEM</span>
                                                <span>Java</span>
                                                <span>Linux</span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="tz_selector_towClass">前端开发</span>
                                            <div class="tz_selector_threeClass">
                                                <span>JavaScri</span>
                                                <span>DIV</span>
                                                
                                            </div>
                                        </li>
                                        <li>
                                            <span class="tz_selector_towClass">移动开发</span>
                                            <div class="tz_selector_threeClass">
                                                <span>Android</span>
                                                <span>iOS</span>
                                                
                                            </div>
                                        </li>
                                        <li>
                                            <span class="tz_selector_towClass">游戏开发</span>
                                            <div class="tz_selector_threeClass">
                                                <span>Coco2d-x游戏开发</span>
                                                <span>Unity3d游戏开发</span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="tz_selector_towClass">云计算大数据</span>
                                            <div class="tz_selector_threeClass">
                                                <span>大数据</span>
                                                <span>区块链</span>
                                                <span>人工智能</span>

                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </li>
                            <li>
                                <span>设计创作</span>
                                <div class="tz_selector_details" >
                                        <!-- 平面设计PhotoshopUI设计形象设计服装设计淘宝美工
                                        游戏动漫
                                        游戏模型插画游戏原画
                                        摄影
                                        影视后期摄影拍摄后期修图
                                        环境艺术
                                        室内设计建筑设计
                                        工业设计
                                        模具设计机械设计UG产品设计CADUG编程 -->
                                    <ol>
                                        <li>
                                            <span class="tz_selector_towClass">视觉设计</span>
                                            <div class="tz_selector_threeClass">
                                                <span>平面设计</span>
                                                <span>UI设计</span>
                                                <span>形象设计</span>
                                                <span>服装设计</span>
                                                <span>淘宝美工</span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="tz_selector_towClass">游戏动漫</span>
                                            <div class="tz_selector_threeClass">
                                                <span>游戏模型</span>
                                                <span>插画</span>
                                                <span>游戏原画</span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="tz_selector_towClass">摄影</span>
                                            <div class="tz_selector_threeClass">
                                                <span> 影视后期</span>
                                                <span>摄影拍摄</span>
                                                <span>后期修图</span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="tz_selector_towClass">环境艺术</span>
                                            <div class="tz_selector_threeClass">
                                                <span>室内设计</span>
                                                <span>建筑设计</span>
                                                
                                            </div>
                                        </li>
                                        <li>
                                            <span class="tz_selector_towClass">工业设计</span>
                                            <div class="tz_selector_threeClass">
                                                <span>模具设计</span>
                                                <span>机械设计</span>
                                                <span>UG产品设计</span>
                                                <span>CAD</span>
                                                <span>UG编程</span>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </li>
                            <li>
                                <span>实用外语</span>
                                <div class="tz_selector_details" >
                                
                                        <ol>
                                                <li>
                                                    <span class="tz_selector_towClass">英语</span>
                                                    <div class="tz_selector_threeClass">
                                                        <span>基础英语</span>
                                                        <span>英语口语</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="tz_selector_towClass">日语</span>
                                                    <div class="tz_selector_threeClass">
                                                        <span>日语零基础</span>
                                                        <span>日语初级</span>
                                                        <span>日语中级</span>
                                                        <span>日语高级</span>
                                                    </div>
                                                </li>
                                                <li>
                                                        
                                                           
                                                    <span class="tz_selector_towClass">韩语</span>
                                                    <div class="tz_selector_threeClass">
                                                        <span>韩语零基础</span>
                                                        <span>韩语初级</span>
                                                        <span>韩语中级</span>
                                                        <span>韩语高级</span>
                                                    </div>
                                                </li>
                                                <li>
                                                        
                                                            
                                                    <span class="tz_selector_towClass">法语</span>
                                                    <div class="tz_selector_threeClass">
                                                        <span>法语初级</span>
                                                        <span>法语中级</span>
                                                        <span>法语高级</span>
                                                        <span>法语发音班</span>
                                                        <span>法语零基础</span>
                                                    </div>
                                                </li>
                                                <li>      
                                                    <span class="tz_selector_towClass">泰语</span>
                                                    <div class="tz_selector_threeClass">
                                                        <span>泰语初级</span>
                                                        <span>泰语中级</span>
                                                        <span>泰语高级</span>
                                                    </div>
                                                </li>
                                                <li>      
                                                        <span class="tz_selector_towClass">西班牙语</span>
                                                        <div class="tz_selector_threeClass">
                                                            <span>西班牙语初级</span>
                                                            <span>西班牙语中级</span>
                                                            <span>西班牙语高级</span>
                                                        </div>
                                                    </li>
                                                    <li>      
                                                            <span class="tz_selector_towClass">德语</span>
                                                            <div class="tz_selector_threeClass">
                                                                <span>零基础</span>
                                                            </div>
                                                        </li>
                                                        <li>      
                                                                <span class="tz_selector_towClass">对外汉语</span>
                                                                <div class="tz_selector_threeClass">
                                                                    <span>基础汉语</span>
                                                                    <span>高级汉语</span>
                                                                </div>
                                                            </li>
                                            </ol>

                                </div>
                            </li>
                            <li>
                                <span>兴趣艺术</span>
                                <div class="tz_selector_details">  
                                        <ol>
                                                <li>
                                                    <span class="tz_selector_towClass">美术</span>
                                                    <div class="tz_selector_threeClass">
                                                        <span>素描</span>
                                                        <span>彩铅</span>
                                                        <span>水彩油画</span>
                                                        <span>手绘</span>
                                                    </div>
                                                </li>
                                                <li>      
                                                    <span class="tz_selector_towClass">音乐</span>
                                                    <div class="tz_selector_threeClass">
                                                        <span>钢琴</span>
                                                        <span>二胡</span>
                                                        <span>古筝</span>
                                                        <span>声乐</span>
                                                    </div>
                                                </li>
                                                <li>            
                                                    <span class="tz_selector_towClass">播音主持</span>
                                                    <div class="tz_selector_threeClass">
                                                        <span>主持朗诵</span>
                                                        <span>配音</span>
                                                        <span>普通话</span>
                                                        <span>声音美化</span>
                                                    </div>
                                                </li>
                                                <li>          
                                                    <span class="tz_selector_towClass">成人教育</span>
                                                    <div class="tz_selector_threeClass">
                                                        <span>高升专</span>
                                                        <span>专升本</span>
                                                        <span>高升本</span>
                                                        <span>自考</span>
                                                    </div>
                                                </li>
                                                <li>                
                                                    <span class="tz_selector_towClass">职业资格证</span>
                                                    <div class="tz_selector_threeClass">
                                                        <span>教师资格证</span>
                                        
                                                    </div>
                                                </li>
                                                <li>      
                                                        <span class="tz_selector_towClass">中小幼教育</span>
                                                        <div class="tz_selector_threeClass">
                                                            <span>美育</span>
                                                            <span>书法</span>
                                                            <span>趣味语文</span>
                                                            <span>趣味数学</span>
                                                            <span>趣味英语</span>
                                                            <span>亲子课堂</span>
                                                        </div>
                                                    </li>
                                                    <li>       
                                                            <span class="tz_selector_towClass">会计直播间</span>
                                                            <div class="tz_selector_threeClass">
                                                                <span>会计实操</span>
                                                                <span>零基础会计</span>
                                                                <span>助理会计师</span>
                                                                <span>中级会计师</span>
                                                                <span>CPA</span>
                                                                <span>其他考证</span>
                                                                <span>开放专科</span>
                                                            </div>
                                                        </li>
                                                        <li>         
                                                                <span class="tz_selector_towClass">职场指导</span>
                                                                <div class="tz_selector_threeClass">
                                                                    <span>办公软件</span>
                                                                    <span>就业指导</span>
                                                                    <span>职场管理</span>
                                                                    <span>职场心理学</span>
                                                                </div>
                                                            </li>
                                                            <li>       
                                                                    <span class="tz_selector_towClass">海外艺术</span>
                                                                    <div class="tz_selector_threeClass">
                                                                        <span>艺术课程</span>
                                                                        <span>艺术合作</span>
                                                                    </div>
                                                                </li>
                                            </ol>


                                </div>
                            </li>
                            <li>
                                <span>农业生产</span>
                                <div class="tz_selector_details" >
                                        <ol>   
                                                <li>
                                                    <span class="tz_selector_towClass">农产品种植</span>
                                                    <div class="tz_selector_threeClass">
                                                        <span>蔬菜种植</span>
                                                        <span>瓜果种植</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="tz_selector_towClass">养殖畜牧</span>
                                                    <div class="tz_selector_threeClass">
                                                        <span>对虾养殖</span>
                                                        <span>养猪</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="tz_selector_towClass">农业技术</span>
                                                    <div class="tz_selector_threeClass">
                                                        <span> 植保飞防</span>
                                                    </div>
                                                </li>
                                            </ol>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tz_floating_btn" id="btn1">
                    立即预约
                </div>
                <div class="tz_floating_close">
                    <img src="picture/tz_close_3.png" alt="">
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    $(document).ready(function () {
$('.newsDetails').children().click(function(){
window.location.href=$(this).attr('name')
})
        $('.sideContent2').click(function () {
            window.location.href = "/faq";
        })

        $('.tzNews').click(function () {
            window.location.href = "http://www.tanzhouedu.com/html/1/150/151/index.html";
        })

        $('.media').click(function () {
            window.location.href = "http://www.tanzhouedu.com/html/1/150/152/index.html";
        })
    })
</script>

<script>
    $(document).ready(function() {
        console.log($('.system').children());
      $('.window').click(function() {
            window.location.href = 'https://cstore.shiguangkey.com/resource/TZKTSetup4.1.7.5334.exe'
        })
       // $('.winXP').click(function() {
         //   window.location.href = 'https://cstore.shiguangkey.com/resource/TZKTSetup4.1.7.5334XP.exe'
        //})
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
        el: '#app',
        data: {
            seen: true,
            current: 4,
            tabStyle: false,
            timer1: '',
            timer2: '',
            msgArr: [
                // { homePage: '首页' }, { homePage: '潭州优势' }, { homePage: '校企合作' }, { homePage: '走进潭州' }, { homePage: '新闻报道' }, { homePage: '关于我们' }, { homePage: '客户端下载' }
                '首页', '走进潭州', '产品与服务', '新闻报道', '关于我们', '客户端下载'
            ]
        },
        methods: {
            enter: function() {
                this.tabStyle = true;
            },
            leave: function() {
                this.tabStyle = false;
            },
            enterT: function(index) {
                 clearTimeout(this.timer1)
                clearTimeout(this.timer2)
                this.current = index
                this.seen = true;
            }, //添加幻灯片
            leaveT: function(index) {
let that=this
                this.timer1 = setTimeout(function(){
                    that.seen = false;
                }, 2000);
            }, //删除方法
            enterD: function() {
                console.log(this.timer1);

                  clearTimeout(this.timer1)
                clearTimeout(this.timer2)
                this.seen = true;
            },
            leaveD: function() {
let that=this
                this.timer2 = setTimeout(function(){
                    that.seen = false;
                }, 1000);
            },
            pageJump: function (index) {
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
