
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>常见问题问答</title>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="/js/jquery_3.js"></script>
    <script src="/js/faq.js"></script>
    <link rel="stylesheet" href="/css/faq.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div id="app">
          <div class="side">
            <div class="appDownload">
                <div class="ewmCode">
                    <img src="http://www.tanzhouedu.com/templets/1/tzEDU//asset/tz_edu_ewm.png" alt="">
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
                        <li v-for="item,index in msgArr" @mouseenter="enter(index)" @mouseleave="leave(index)"
                            :class='index==5?"hots":""' @click='pageJump(index)'  v-cloak>
                            <div  style="color: #666;" class="colorTab" v-text="item"  v-cloak>
                            </div>
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
        <div class="faqBox">
            <!-- 右边内容 -->
            <div class="showRight">

                <div class="rightContent">
                    <div class="contentTitle">常见问题</div>
                    
                    <div class="tipsBox">
                        <span class="tips"></span>
                        <div class="tipsTitle">我要报名课程</div>
                    </div>
                    <div class="tipsContent"><p>报名课程可以搜索我们的官方商城潭州课堂，或者在淘宝京东搜索潭州教育官方旗舰店，都可以找到您心仪的课程。<br/></p></div>
                    
                    <div class="tipsBox">
                        <span class="tips"></span>
                        <div class="tipsTitle">我想投诉怎么办？</div>
                    </div>
                    <div class="tipsContent"><p>您好，欢迎您关注潭州，如果您对我们的服务存在任何疑问，都可以拨打我们的4001567315服务投诉电话，您的意见是促使我们发展和前进的动力！</p></div>
                    
                    <div class="tipsBox">
                        <span class="tips"></span>
                        <div class="tipsTitle">潭州教育是真的吗？</div>
                    </div>
                    <div class="tipsContent"><p>潭州教育是国内领先的在线教育企业，公司包含有200余门课程，累计服务上千万学员，分公司和线下体验店遍布北京、广州、深圳、武汉、长沙、南宁、海南、昆明、乌鲁木齐等地，2018年潭州教育成为教育部产学合作协同育人企业，曾获得过央视、湖南卫视等一线媒体报道。总之，我们是家值得信赖的大企业。欢迎您来我们的线下店体验，也欢迎您对潭州的任何意见。</p></div>
                    
                </div>

                <div class="rightContent defalutContent">
                    <div class="contentTitle">投诉</div>

                    
                    <div class="tipsBox">
                        <span class="tips"></span>
                        <div class="tipsTitle">投诉点击这里</div>
                    </div>
                    <div class="tipsContent"><p>打算范德萨发撒的发的说法是的范德萨发撒的发士大夫大所发生的范德萨范德萨发</p></div>
                    
                </div>

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
    </div>

</body>

</html>
<script>
    $(document).ready(function() {
        $('.sideContent2').click(function() {
            window.location.href = "/faq";
        })
    })
</script>
<script>
    $(document).ready(function() {
        console.log($('.system').children());
      $('.window').click(function() {
            window.location.href = 'https://cstore.shiguangkey.com/resource/TZKTSetup4.1.7.5334.exe'
        })
        $('.winXP').click(function() {
            window.location.href = 'https://cstore.shiguangkey.com/resource/TZKTSetup4.1.7.5334XP.exe'
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
