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
        location.href="/mobile/enter"
    }
}
</script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>走进潭州</title>
    <script src="js/d20052ba448345dfb0e3f34d416b02f8.js"></script>
    <script src="js/jquery_1.js"></script>
    <script src="js/entertz.js"></script>
    <link rel="stylesheet" href="css/entertz.css">
</head>

<body>
    <div id="app">
            <div class="side">
                    <div class="appDownload">
                        <div class="ewmCode">
                            <img src="picture/tz_edu_ewm_1.png" alt="">
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
                    <img src="picture/logo_002.png" class="logoPng">
                </div>
                <ul class="navigationDetails">
<template>
                    <li v-for="item,index in msgArr" @mouseenter='enter(index)' @mouseleave='leave(index)' @click='pageJump(index)' :class='index==5?"hots":""'>
                        <div class="colorTab" :class='index==1?"active":""' v-text="item">
                        </div>
                        <span class="bottomList" v-show='index==1'></span>
                        <img src="picture/hot_1.png" class="hot" v-if='index==5'>
                        <div class="suspension" @mouseenter="enterD(index)" @mouseleave="leaveD(index)" v-show='index==5&&current==5&&seen'>
                            <div class="triangle">
                                <img src="picture/sjx_1.png">
                            </div>
                            <div class="suspensionBox">
                                <div class="suspensionTop">
                                    <div class="suspensionPhone suspensionApp">
                                        <img src="picture/phone_1.png">
                                        <div>扫码 下载APP</div>
                                    </div>
                                    <div class="suspensionPhone suspensionPC">
                                        <img src="picture/pc_1.png" alt="">
                                        <div>PC端下载</div>
                                    </div>
                                </div>
                                <div class="suspensionBottom">
                                    <div class="code">
                                        <img src="picture/topcode_1.png">
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

        <div class="enterTz">
            <img src="picture/tz_tgfw_bg.png" alt="">
        </div>
        <div class="briefIntroduction">
            <div class="moonIntroduce">
                <div class="content1">
                    <img src="picture/sign_quan_1.png" class="logoR">
                    <div class="newsTitle">
                        <img src="picture/founder.png" class="news1">
                        <div class="newsFont">创始人</div>
                    </div>
                </div>
                <div>
                    <div class="post">
                        <div>
                            潭州教育董事长
                        </div>
                        <div>
                            Moon老师
                        </div>
                    </div>
                    <div>
                        <p class="tz_rw_js">
                            管理工程师，《淘宝天猫运营一本通》作者，中国民盟成员，在线教育专委会主任，湖南女子学院专业建设咨询委员会副主任，长沙市高新区移动互联网创新人物、优秀企业家，感动湖南十佳人物，网易教育杰出贡献人物，互联网在线教育行业自律公约发起人，开创公开课直播授课模式。
                        </p>
                    </div>
                </div>
            </div>
            <div class="moonPng">
                <img src="picture/moon.png">
            </div>
        </div>
        <div class="bg">
            <div class="briefIntroduction1">
                <div class="moonIntroduce">
                    <div class="content1">
                        <img src="picture/sign_quan_1.png" class="logoR">
                        <div class="newsTitle">
                            <img src="picture/our.png" class="news1">
                            <div class="newsFont">潭州教育企业文化</div>
                        </div>
                    </div>
                </div>
                <div class="scrollpic">
                    <div id="right"></div>
                    <div id="left"></div>
                    <div id="myscroll">
                        <div id="myscrollbox">
                            <ul>
                                    <li>
                                            <a>
                                                <div class="bgColor">
        
                                                </div>
                                                <div class="mission">
                                                    <div class="missionTitle">使命</div>
                                                    <div class="missionContent">
                                                         <p>激发学员学习兴趣，唤醒学员良知!</p> 
                                                        <p>兴趣是最好的老师，我们必须想尽一切办法让学员下定决心学习，并始终坚持下来。我们认为传递知识固然重要，但是促使学员拥有健全的人格更重要，我们必须树立榜样，引导学员建立正确的价值观。 </p>
                                                        <!-- <p> 日月既往，不可复追。我们深知一刻也不能停歇，这些将要解决的问题，已经让我们明白任重而道远。</p> -->
                                                    </div>
                                                </div>
        
                                                <img src="picture/tz_enter_culture.png" alt="" class="zindex">
        
                                            </a>
                                        </li>
                                <li>
                                    <a>
                                        <div class="bgColor">

                                        </div>
                                        <div class="mission">
                                            <div class="missionTitle">愿景</div>
                                            <div class="missionContent">
                                                <p>为全球70亿人提供教育服务！</p>
                                                <p>我们是一群有着共同想法、共同信念的人，在黑暗中摸索，没有成功与失败的教训可以借鉴，唯有不忘初心，永远热泪盈眶，传递我们的光和热，一起开辟在线教育的新时代，为社会教育不断做贡献，把这个世界变得更美好。</p>
                                                
                                            </div>
                                        </div>

                                        <img src="picture/tz_shiming.png" alt="" class="zindex">

                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <div class="bgColor">

                                        </div>
                                        <div class="mission">
                                            <div class="missionTitle">经营理念</div>
                                            <div class="missionContent">
                                                <p>在追求全体小伙伴精神和物质两方面幸福的同时</p>
                                                <p>通过教学激发学员学习的兴趣，唤醒学员的良知</p>
                                                <p> 为社会的进步和发展做贡献！</p>
                                            </div>
                                        </div>

                                        <img src="picture/bitmap2.png" alt="" class="zindex">

                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
        <div class="briefIntroduction">
            <div class="moonIntroduce">
                <div class="content1">
                    <img src="picture/sign_quan_1.png" class="logoR">
                    <div class="newsTitle">
                        <img src="picture/vedio.png" class="news1">
                        <div class="newsFont">宣传视频</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="xcVideo">
            <div class="videoM"></div>
            <!-- <div class="starPlay" v-if="isShow" @click="autPlay">
                <img src="picture/bofang_1.png" alt="开始播放">
            </div> -->
            <div v-for='item,index in messageArr' v-if='videoCurrent==index'>
                 <video class="bannerVideo" :src="item" id="isPlay" @click.stop.prevent="fn2" poster="http://www.tanzhouedu.com/templets/1/tzEDU//asset/tz_tzenter_videobg.jpg"></video>
<span class="tz_bofang" v-show="isImg">
                    <img src="picture/bofang_1.png" alt="" id="tz_bofang_01" @click.stop.parent="fn1">
                </span>
            </div>

            <div class="tabBox">
                <div class="tabTips" v-for='item,index in messageArr' :class='index==videoCurrent?"current":""' @click='tab(index)'></div>
            </div>
            <div class="next" @click='next'>></div>
            <div class="prev" @click='prev'>
                <</div>
            </div>
        </div>
        <!--办公环境 -->
        <div class="office">
            <div class="briefIntroduction">
                <div class="moonIntroduce">
                    <div class="content1">
                        <img src="picture/sign_quan_1.png" class="logoR">
                        <div class="newsTitle">
                            <img src="picture/office.png" class="news1">
                            <div class="newsFont">办公环境</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="myscrollStyle">
                <div class="myscroll">
                    <div class="scrollBox">
                        <ul>
                            <li>
                                <div class="myPng">
                                    <div><img src="picture/enter1.png" alt=""></div>
                                    <div class="rightPng">
                                        <div class="rightTopPng">
                                            <img src="picture/enter2.png" class="rightPngF" alt="">
                                            <img src="picture/enter3.png" alt="">
                                        </div>
                                        <div>
                                            <img src="picture/enter4.png" class="rightPngF" alt="">
                                            <img src="picture/enter5.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="myPng">
                                    <div><img src="picture/left1.png" alt=""></div>
                                    <div class="rightPng">
                                        <div class="rightTopPng">
                                            <img src="picture/right1.png" class="rightPngF" alt="">
                                            <img src="picture/right2.png" alt="">
                                        </div>
                                        <div>
                                            <img src="picture/right3.png" class="rightPngF" alt="">
                                            <img src="picture/right4.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- 发展历程 -->
        <div class="briefIntroduction">
            <div class="moonIntroduce">
                <div class="content1">
                    <img src="picture/sign_quan_1.png" class="logoR">
                    <div class="newsTitle">
                        <img src="picture/history.png" class="news1">
                        <div class="newsFont">发展历程</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="history">
            <div class="historyContent">
                <div class="line"></div>
                <!-- <div class="year">2018年</div> -->
                <div class="yearMonth">
                    <div class="month">2018年10月</div>
                    <div class="circular"></div>
                    <div class="leftjt"><img src="picture/leftjt.png" alt=""></div>
                    <div class="yearMonthTitle">
                        <div class="yearMonthTitle1">教育部产学合作协同育人项目立项</div>
                        <div class="yearMonthTitle2">潭州教育与教育部产学合作协同育人项目</div>
                    </div>
                </div>

                <div class="yearMonth">
                    <div class="month">2018年8月</div>
                    <div class="circular"></div>
                    <div class="leftjt"><img src="picture/leftjt.png" alt=""></div>
                    <div class="yearMonthTitle">
                        <div class="yearMonthTitle1">潭州课堂畅听卡</div>
                        <div class="yearMonthTitle2">与中国联通签署战略合作协议，推出潭州课堂畅听卡</div>
                    </div>
                </div>

                <div class="yearMonth">
                    <div class="month">2018年2月</div>
                    <div class="circular"></div>
                    <div class="leftjt"><img src="picture/leftjt.png" alt=""></div>
                    <div class="yearMonthTitle">
                        <div class="yearMonthTitle1">6300万A轮融资</div>
                        <div class="yearMonthTitle2">潭州教育完成6300万A轮融资</div>
                    </div>
                </div>
                <!-- <div class="year1">2017年</div> -->
                <div class="yearMonth">
                    <div class="month">2017年12月</div>
                    <div class="circular"></div>
                    <div class="leftjt"><img src="picture/leftjt.png" alt=""></div>
                    <div class="yearMonthTitle">
                        <div class="yearMonthTitle1">潭州教育与阿里云大学战略合作计划正式启动</div>
                        <div class="yearMonthTitle2"></div>
                    </div>
                </div>

                <div class="yearMonth">
                    <div class="month">2017年11月</div>
                    <div class="circular"></div>
                    <div class="leftjt"><img src="picture/leftjt.png" alt=""></div>
                    <div class="yearMonthTitle">
                        <div class="yearMonthTitle1">潭州教育吉祥物T仔发布</div>
                        <div class="yearMonthTitle2"></div>
                    </div>
                </div>

                <div class="yearMonth">
                    <div class="month">2017年8月</div>
                    <div class="circular"></div>
                    <div class="leftjt"><img src="picture/leftjt.png" alt=""></div>
                    <div class="yearMonthTitle">
                        <div class="yearMonthTitle1">“趣创无忧”平台上线 </div>
                        <div class="yearMonthTitle2"> 致力于为内容创业者提供全方位创业服务的“趣创无忧”平台上线</div>
                    </div>
                </div>

                <div class="yearMonth">
                    <div class="month">2017年7月</div>
                    <div class="circular"></div>
                    <div class="leftjt"><img src="picture/leftjt.png" alt=""></div>
                    <div class="yearMonthTitle">
                        <div class="yearMonthTitle1">“ITSTAR”在北京正式成立 </div>
                        <div class="yearMonthTitle2"> 专注大数据教育领域的全资子品牌“ITSTAR”在北京正式成立</div>
                    </div>
                </div>

                <div class="yearMonth">
                    <div class="month">2017年5月</div>
                    <div class="circular"></div>
                    <div class="leftjt"><img src="picture/leftjt.png" alt=""></div>
                    <div class="yearMonthTitle">
                        <div class="yearMonthTitle1">全球教学服务中心正式挂牌成立 </div>
                        <div class="yearMonthTitle2"> 潭州教育全球教学服务中心正式挂牌成立，教学服务体系全面升级</div>
                    </div>
                </div>

                <div class="yearMonth">
                    <div class="month">2016年9月</div>
                    <div class="circular"></div>
                    <div class="leftjt"><img src="picture/leftjt.png" alt=""></div>
                    <div class="yearMonthTitle">
                        <div class="yearMonthTitle1">与中捷产业园签订合作入驻协议 </div>
                        <div class="yearMonthTitle2"> 潭州教育入驻中捷产业园，作为互联网+教育行业的代表在中捷建立子公司</div>
                    </div>
                </div>


                <div class="yearMonth">
                    <div class="month">2016年</div>
                    <div class="circular"></div>
                    <div class="leftjt"><img src="picture/leftjt.png" alt=""></div>
                    <div class="yearMonthTitle">
                        <div class="yearMonthTitle1">潭州课堂客户端上线 </div>
                        <div class="yearMonthTitle2"></div>
                    </div>
                </div>


                <div class="yearMonth">
                    <div class="month">2015年</div>
                    <div class="circular"></div>
                    <div class="leftjt"><img src="picture/leftjt.png" alt=""></div>
                    <div class="yearMonthTitle">
                        <div class="yearMonthTitle1">成立湖南潭州教育网络科技有限公司</div>
                        <div class="yearMonthTitle2"></div>
                    </div>
                </div>


                <div class="yearMonth">
                    <div class="month">2014年</div>
                    <div class="circular"></div>
                    <div class="leftjt"><img src="picture/leftjt.png" alt=""></div>
                    <div class="yearMonthTitle">
                        <div class="yearMonthTitle1">进驻腾讯课堂</div>
                        <div class="yearMonthTitle2"></div>
                    </div>
                </div>


                <div class="yearMonth">
                    <div class="month">2013年</div>
                    <div class="circular"></div>
                    <div class="leftjt"><img src="picture/leftjt.png" alt=""></div>
                    <div class="yearMonthTitle">
                        <div class="yearMonthTitle1">正式更名为潭州学院</div>
                        <div class="yearMonthTitle2"></div>
                    </div>
                </div>
                <div class="yearMonth">
                    <div class="month">2012年</div>
                    <div class="circular"></div>
                    <div class="leftjt"><img src="picture/leftjt.png" alt=""></div>
                    <div class="yearMonthTitle">
                        <div class="yearMonthTitle1">行业率先在YY进行线上教学</div>
                        <div class="yearMonthTitle2"></div>
                    </div>
                </div>
                <div class="yearMonth">
                    <div class="month">2010年</div>
                    <div class="circular"></div>
                    <div class="leftjt"><img src="picture/leftjt.png" alt=""></div>
                    <div class="yearMonthTitle">
                        <div class="yearMonthTitle1">成立长沙黎露网络科技有限公司</div>
                        <div class="yearMonthTitle2"></div>
                    </div>
                </div>
                <div class="yearMonth">
                    <div class="month">2007年</div>
                    <div class="circular"></div>
                    <div class="leftjt"><img src="picture/leftjt.png" alt=""></div>
                    <div class="yearMonthTitle">
                        <div class="yearMonthTitle1">SEO技术研究中心成立</div>
                        <div class="yearMonthTitle2"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 合作媒体 -->
        <div class="media">
            <div class="briefIntroduction1">
                <div class="moonIntroduce">
                    <div class="content1">
                        <img src="picture/sign_quan_1.png" class="logoR">
                        <div class="newsTitle">
                            <img src="picture/media.png" class="news1">
                            <div class="newsFont">合作媒体</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cooperationMedia">
                <div><img src="picture/unicom.png" alt=""></div>
                <div><img src="picture/tencent.png" alt=""></div>
                <div><img src="picture/baidu.png" alt=""></div>
                <div><img src="picture/jrtt01.png" alt=""></div>
                <div class="noMargin"><img src="picture/360.png" alt=""></div>

                <div><img src="picture/youdao.png" alt=""></div>
                <div><img src="picture/tmall.png" alt=""></div>
                <div><img src="picture/ali.png" alt=""></div>
                <div><img src="picture/bilibili.png" alt=""></div>
                <div class="noMargin"><img src="picture/xj.png" alt=""></div>
            </div>

        </div>


    </div>
    <div class="footer">
        <div class="content">
            <div class="contentMargin contentMarginSencond">
                <div class="detalisTop">
                    <img src="picture/phonenumber_1.png" alt="">
                    <div class="titleClass">服务热线</div>
                </div>
                <div class="service">
                    <!-- <img src="picture/servicetime_1.png" alt=""> -->
                    <div class="telNum">4008-500-888</div>
                    <div class="telData">9 : 00 - 23 : 00 周一至周日</div>
                </div>
                <div class="Bottomline"></div>
                <div class="beian">
                    <div>
                        Copyright &#169 All Rights Reserved.版权所有：湖南潭州教育网络科技有限公司
                    </div>
                    <a href="http://www.miitbeian.gov.cn" target="view_window">
                        <img style="vertical-align:middle;display: inline-block;" src="picture/icon_1.png"> 备案号：湘ICP备15014315号—1
                    </a>
                </div>
            </div>
            <div class="contentMargin contentMarginFrist">
                <div class="detalisTop">
                    <img src="picture/follow_1.png" alt="">
                    <div class="titleClass">关注我们</div>
                </div>
                <div class="tzktBox">
                    <div class="tzktAPP leftBox">
                        <div><img src="picture/app_1.png"></div>
                        <div class="tzkt">潭州课堂APP下载</div>
                    </div>
                    <div class="tzktAPP">
                        <div><img src="picture/gzh_1.png"></div>
                        <div class="tzkt">潭州课堂公众号</div>
                    </div>
                </div>
            </div>
            <div class="contentMargin">
                <div class="detalisTop">
                    <img src="picture/title_1.png" alt="">
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
    <div class="tz_floating_wrap" id="tz_floating_wrap">
            <div class="tz_floating">
                <div class="tz_floating_left">
                    <img src="picture/tz_gz_1.png" alt="">
                   
                </div>
                <p class="tz_floating_text" style=" margin-bottom:0;">立即预约<b>“免费”</b>获取在线公开课</p>
                <input type="text" placeholder="请填写您的名字" class="tz_floating_name" id="username1">
                <input type="text" placeholder="请填写您的手机号码" class="tz_floating_tel" id="telephone1">
                <div class="tz_selector_wrap">
                    <p class="tz_selector_text">选择感兴趣科目</p>
                    <img src="picture/tz_zhixiang_1.png" alt="" class="tz_zhixiang">
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
                    <img src="picture/tz_close_1.png" alt="">
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
        $('.window').click(function() {
            window.location.href = 'https://cstore.shiguangkey.com/resource/TZKTSetup4.1.7.5334.exe'
        })
      //  $('.winXP').click(function() {
        //    window.location.href = 'https://cstore.shiguangkey.com/resource/TZKTSetup4.1.7.5334XP.exe'
       // })
       // $('.system').children().hover(function() {
         //   console.log(111);
           // $(this).css('background', '#F92F2F').siblings().css('background', '#111111')
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
                window.location.href = url;
            }
        },
    })
</script>
<script>
    var app = new Vue({
        el: '#xcVideo',
        data() {
            return {
                isImg:true,
                // isPlay:false,
                // isShow:true,
                videoCurrent: 0,
                messageArr: [
                    'https://qiniu-test.shiguangkey.com/tz_edu_enter01.mp4',
                    'https://qiniu-test.shiguangkey.com/tz_edu_enter02.mp4',
                    'https://qiniu-test.shiguangkey.com/tz_edu_enter03.mp4',
                ],
            }
        },
        created() {
            console.log(123)
        },
        methods: {
  fn1(){
                this.isImg=false
               document.getElementById("isPlay").play()
            },
            fn2(){
                this.isImg=true
                document.getElementById("isPlay").pause()
            },
            autPlay(){
                // console.log(222222)
                // var vdo = document.getElementById("isPlay");
                // vdo.play();
                // this.isShow=false
            },
            tab: function(index) {
                this.videoCurrent = index
            },
            next: function() {
                if (this.videoCurrent < this.messageArr.length - 1) {
                    this.videoCurrent++
                }
            },
            prev: function() {
                if (this.videoCurrent > 0) {
                    this.videoCurrent--
                }
            }
        },
    })
</script>
