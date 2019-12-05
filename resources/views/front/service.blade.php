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
        location.href="/mobile/service"
    }
}
</script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>产品与服务</title>
<script src="js/vue.js"></script>
    <script src="js/jquery_4.js"></script>
    <script src="js/service_4.js"></script>
    <link rel="stylesheet" href="css/service_4.css">
    <link rel="stylesheet" href="css/index.css">
<style>
.active{
color: #3073F4!important;
}
</style>
</head>

<body>
    <div id="app">
            <div class="side">
                    <div class="appDownload">
                        <div class="ewmCode">
                            <img src="picture/tz_edu_ewm_4.png" alt="">
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
                    <img src="picture/logo_002_4.png" class="logoPng">
                </div>
                <ul class="navigationDetails">
<template>
                        <li v-for="item,index in msgArr" @mouseenter="enter(index)" @mouseleave="leave(index)"
                            :class='index==5?"hots":""' @click='pageJump(index)'  v-cloak>
                            <div class="colorTab"  style="color: #666;" :class='index==2?"active":""' v-text="item"  v-cloak>
                            </div>
                            <span class="bottomList" v-show='index==2'></span>
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
        <div class="serviceBanner">
            <img src="picture/tz_jfxq02_4.png" alt="">
        </div>
        <div class="native">
            <div :class="classroom?'tzClassroom1':'tzClassroom'" @click='tzClassroom'>
                <img :src="classroom?'http://www.tanzhouedu.com/templets/1/tzEDU//asset/classroom2.png':'http://www.tanzhouedu.com/templets/1/tzEDU//asset/classroom1.png'">
                <div>潭州课堂</div>
            </div>
            <div :class="classroom?'cooperation1':'cooperation'" @click='cooperation'>
                <img :src="classroom?'http://www.tanzhouedu.com/templets/1/tzEDU//asset/cooperation2.png':'http://www.tanzhouedu.com/templets/1/tzEDU//asset/cooperation1.png'">
                <div>校企合作</div>
            </div>
        </div>
        <!-- 潭州课堂 -->
        <div v-if='!classroom' class="classroomContent">
            <div class="intelligentlearning">
                <div class="content1">
                    <img src="picture/sign_quan_4.png" class="logoR">
                    <div class="newsTitle">
                        <img src="picture/intelligentlearning_4.png" class="news1">
                        <div class="newsFont">多端智慧学习平台</div>
                    </div>
                </div>
                <div class="title">
                    <ul>
                        <li>
                            <video src="https://qiniu-pre.shiguangkey.com/tz_01.mp4"   class="tz_video_01" id="tz_video_01" height="350" width="580" poster="http://www.tanzhouedu.com/templets/1/tzEDU//asset/tz_001.jpg"></video>
 <span class="tz_bofang">
                                <img src="picture/bofang_4.png" alt="" id="tz_bofang_01">
                            </span>
<div class="tz_shadow_01"></div>
                        </li>
                        <li style="margin-left: 30px">
                            <div class="tz_title_img01"><img src="picture/tz_yh_4.png" alt=""></div>
                            <div class="tz_title_01">APP、PC、WEB、H5、小程序多端教学</div>
                            <div class="tz_title_02">潭州课堂是潭州教育旗下的在线教学直播平台，集课程发布、教学管理、在线授课听课、作业考试、互动学习功能于一体。</div>
                            <div class="tz_ewm">
                                <div>
                                    <img src="picture/tz_app_ewm_4.png" alt="">
                                    <div class="tz_ewm_js">潭州课堂APP下载</div>
                                </div>
                                <div>
                                    <img src="picture/tz_gzh_ewm_4.png" alt="">
                                    <div class="tz_ewm_js">潭州课堂APP下载</div>
                                </div>
                            </div>
                        </li>
                        <li style="margin-top: 90px">
                                <div class="tz_title_img01"><img src="picture/tz_yh_4.png" alt=""></div>
                                <div class="tz_title_01">评测+作业批改+问答解析充分了解学员</div>
                                <div class="tz_title_02"> 现已服务超百万学员在线学习，日均开课230门以上，涵盖编程、营销、设计、艺术、语言、农业等多个科目，同时在线人数已超5.5万，每天访问人数超过 8万。</div>
                        </li>
                        <li style="margin-top: 90px;margin-left: 30px" >
                           <video src="https://qiniu-pre.shiguangkey.com/tz_02.mp4"  id="tz_video_02"  height="350" width="580" poster="http://www.tanzhouedu.com/templets/1/tzEDU//asset/tz_002.jpg"></video>
 <span class="tz_bofang">
                                <img src="picture/bofang_4.png" alt="" id="tz_bofang_02">
                            </span>
<div class="tz_shadow_02"></div>
                        </li>
                    </ul>
                    <!-- <div class="title1">APP、PC、WEB、H5、小程序多端</div>
                    <div class="title2">评测+作业批改+问答解析充分了解学员学习动态</div>
                    <div class="title3">
                        <p>
                            潭州课堂是潭州教育旗下的在线教学直播平台，集课程发布、教学管理、在线授课听课、作业考试、互动学习功能于一体，支持web、PC、app、h5、小程序五端同时在线直播。
                        </p>
                        <p>
                            现已服务超百万学员在线学习，日均开课230门以上，涵盖编程、营销、设计、艺术、语言、农业等多个科目，同时在线人数已超5.5万，每天访问人数超过 8万。
                        </p>
                    </div>
                    <div class="title4">
                        <div>
                            <img src="picture/tzsmall_4.png" alt="">
                            <span>潭州课堂APP下载</span>
                        </div>
                        <div class="tzSmall">
                            <img src="picture/tzapp_4.png" alt="">
                            <span>
                                潭州课堂小程序
                            </span>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="quality">
                <div class="content1">
                    <img src="picture/sign_quan_4.png" class="logoR">
                    <div class="newsTitle">
                        <img src="picture/high-quality goods c_4.png" class="news1">
                        <div class="newsFont">海量精品课程</div>
                    </div>
                </div>
                <div class="qualityTitle1">
                    海量课程任选，从出生到老都可在此学习
                </div>
                <div class="qualityTitle2">
                    <div class="card">
                        <div class="cardContent1">
                            <img src="picture/tz_internet_4.png" alt="">
                        </div>
                        <div class="cardContent2">
                            <div class="cardContent2Font1">IT互联网 </div>
                            <div class="cardContent2Font2">IT & Internet</div>
                        </div>
                        <div class="cardContent3">web 前端、java、Python、C++、 Andriod、iOS、大数据、人工智能、 SEO、SEM网络营销、淘宝运营、淘宝美工等IT互联网系列课程</div>
                    </div>
                    <div class="card">
                        <div class="cardContent1">
                            <img src="picture/tz_study_4.png" alt="">
                        </div>
                        <div class="cardContent2">
                            <div class="cardContent2Font1">语言留学</div>
                            <div class="cardContent2Font2">Foreign Language & Study Abroad</div>
                        </div>
                        <div class="cardContent3">日语、汉语、西班牙语、英语、法语 泰语、等语种考级课程</div>
                    </div>
                    <div class="card1">
                        <div class="cardContent1">
                            <img src="picture/tz_design_4.png" alt="">
                        </div>
                        <div class="cardContent2">
                            <div class="cardContent2Font1">创意设计</div>
                            <div class="cardContent2Font2">Creative Design</div>
                        </div>
                        <div class="cardContent3">CAD、五金模具设计、塑料模具、ug编程、ug产品设计、SW/PLC等工业相关课程；平面设计、UI设计、影视后期、摄影、摄影后期、插画、家装/室内设计、3d Max、游戏动漫等职业系统课程</div>
                    </div>
                    <div class="card">
                        <div class="cardContent1">
                            <img src="picture/tz_left_4.png" alt="">
                        </div>
                        <div class="cardContent2">
                            <div class="cardContent2Font1">兴趣生活</div>
                            <div class="cardContent2Font2">Interests & Life</div>
                        </div>
                        <div class="cardContent3">素描、彩铅、播音主持、声乐、 时尚美妆、美食烹饪、手工DIY 婚恋等兴趣生活类课程</div>
                    </div>
                    <div class="card">
                        <div class="cardContent1">
                            <img src="picture/tz_agriculture_4.png" alt="">
                        </div>
                        <div class="cardContent2">
                            <div class="cardContent2Font1">农业种植</div>
                            <div class="cardContent2Font2">Agriculture</div>
                        </div>
                        <div class="cardContent3">农业蔬菜种植、葡萄种植等农业生产种植系列课程</div>
                    </div>
                    <div class="card1">
                        <div class="cardContent1">
                            <img src="picture/tz_education_4.png" alt="">
                        </div>
                        <div class="cardContent2">
                            <div class="cardContent2Font1">学历教育</div>
                            <div class="cardContent2Font2">Certificate & Education</div>
                        </div>
                        <div class="cardContent3">自考、成人高考、远程教育、国家开放大学等提升学历系列课程</div>
                    </div>
                    <div class="card">
                        <div class="cardContent1">
                            <img src="picture/tz_examination_4.png" alt="">
                        </div>
                        <div class="cardContent2">
                            <div class="cardContent2Font1">职业考证</div>
                            <div class="cardContent2Font2">Professional Examination</div>
                        </div>
                        <div class="cardContent3">公务员考试、事业单位考证、职场社交、人际关系、面试等职场类课程</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 校企合作 -->
        <div v-if='classroom' class="cooperationContent">
            <div class="cooperationContent1">
                <div class="content1">
                    <img src="picture/sign_quan_4.png" class="logoR">
                    <div class="newsTitle">
                        <img src="picture/school-enterprise_4.png" class="news1">
                        <div class="newsFont">潭州教育校企合作项目</div>
                    </div>
                </div>
            </div>
            <div class="cooperationCard">
                <div class="cardDetails">
                    <div class="cardImg"><img src="picture/tz_data_4.png" alt=""></div>
                    <div class="cardFont">新工科项目</div>
                    <div class="CardSuspension">
                        <div class="CardSuspensionTitle">
                            新工科项目
                        </div>
                        <div class="CardSuspensionContent">
                            人工智能、大数据、Python、C++、iOS。
                        </div>
                    </div>
                </div>
                <div class="cardDetails">
                    <div class="cardImg"><img src="picture/tz_tescher_4.png" alt=""></div>
                    <div class="cardFont">师资培训项目</div>
                    <div class="CardSuspension">
                        <div class="CardSuspensionTitle">
                            师资培训项目
                        </div>
                        <div class="CardSuspensionContent">
                            在线授课技巧、精品课程、精品视频公开课录制等相关培训。
                        </div>
                    </div>
                </div>
                <div class="cardDetails">
                    <div class="cardImg"><img src="picture/tz_practicea_4.png" alt=""></div>
                    <div class="cardFont">实践条件和实践基</div>
                    <div>地建设项目</div>
                    <div>（A类）</div>
                    <div class="CardSuspension">
                        <div class="CardSuspensionTitle">
                            实践条件和实践基地建设项目（A类）
                        </div>
                        <div class="CardSuspensionContent">
                            日语、韩语、法语、英语、西班牙语、新媒体、电子商务、美术、摄影、影视制作、平面设计、农业等。
                        </div>
                    </div>
                </div>
                <div class="cardDetails">
                    <div class="cardImg"><img src="picture/tz_practiceb_4.png" alt=""></div>
                    <div class="cardFont">实践条件和实践基</div>
                    <div>
                        地建设项目
                    </div>
                    <div>
                        （B类）
                    </div>
                    <div class="CardSuspension">
                        <div class="CardSuspensionTitle">
                            实践条件和实践基地建设项目（B类）
                        </div>
                        <div class="CardSuspensionContent">
                            共建互联网+教育校内实训基地项目。
                        </div>
                    </div>
                </div>
                <div class="cardDetails">
                    <div class="cardImg"><img src="picture/tz_innovate_4.png" alt=""></div>
                    <div class="cardFont">创新创业联合基金 项目</div>
                    <div class="CardSuspension">
                        <div class="CardSuspensionTitle">
                            创新创业联合基金项目
                        </div>
                        <div class="CardSuspensionContent">
                            《内容创业基础班》、《内容创业创新能力实训高级班》、《创业班》。
                        </div>
                    </div>
                </div>
            </div>
            <div class="cooperationContent2" v-if='!showAlltips'>
                <div class="parent">
                    <div class="content1">
                        <img src="picture/sign_quan_4.png" class="logoR">
                        <div class="newsTitle">
                            <img src="picture/partner institutions_4.png" class="news2">
                            <div class="newsFont">潭州教育合作院校</div>
                        </div>
                    </div>
                    <div class="institutions">
                        <div class="institutionsName">
                            <img src="picture/img-hn_4.png" alt="" class="institutionsNamePng">
                            <div>湖南大学</div>
                        </div>
                        <div class="institutionsName">
                            <img src="picture/img-sd_4.png" alt="" class="institutionsNamePng">
                            <div>山东师范大学</div>
                        </div>
                        <div class="institutionsName">
                            <img src="picture/img-xn_4.png" alt="" class="institutionsNamePng">
                            <div>西南政法大学</div>
                        </div>
                        <div class="institutionsName institutionsName1">
                            <img src="picture/img-xt_4.png" alt="" class="institutionsNamePng">
                            <div>湘潭大学</div>
                        </div>
                        <div class="institutionsName">
                            <img src="picture/img-js_4.png" alt="" class="institutionsNamePng">
                            <div>吉首大学</div>
                        </div>
                        <div class="institutionsName">
                            <img src="picture/img-xb_4.png" alt="" class="institutionsNamePng">
                            <div>西北大学</div>
                        </div>
                        <div class="institutionsName">
                            <img src="picture/img-bj_4.png" alt="" class="institutionsNamePng">
                            <div>北京语言大学</div>
                        </div>
                        <div class="institutionsName institutionsName1">
                            <img src="picture/img-ya_4.png" alt="" class="institutionsNamePng">
                            <div>延安大学</div>
                        </div>
                        <div class="institutionsName">
                            <img src="picture/img-gd_4.png" alt="" class="institutionsNamePng">
                            <div>广东东软学院</div>
                        </div>
                        <div class="institutionsName">
                            <img src="picture/img-zj_4.png" alt="" class="institutionsNamePng">
                            <div>浙江师范大学</div>
                        </div>
                        <div class="institutionsName">
                            <img src="picture/img-yn_4.png" alt="" class="institutionsNamePng">
                            <div>云南师范大学</div>
                        </div>
                        <div class="institutionsName institutionsName1">
                            <img src="picture/img-nz_4.png" alt="" class="institutionsNamePng">
                            <div>湖南女子学院</div>
                        </div>
                    </div>
                    <div class="bottom" @click='showAll'>
                        <img src="picture/bottom_4.png" alt="">
                    </div>
                </div>

            </div>

            <div class="cooperationContent3" v-if='showAlltips'>
                <div class="parent">
                    <div class="content1">
                        <img src="picture/sign_quan_4.png" class="logoR">
                        <div class="newsTitle">
                            <img src="picture/partner institutions_4.png" class="news2">
                            <div class="newsFont">潭州教育合作院校</div>
                        </div>
                    </div>
                    <div class="institutions">
                        <div class="institutionsName">
                            <img src="picture/img-hn_4.png" alt="" class="institutionsNamePng">
                            <div>湖南大学</div>
                        </div>
                        <div class="institutionsName">
                            <img src="picture/img-sd_4.png" alt="" class="institutionsNamePng">
                            <div>山东师范大学</div>
                        </div>
                        <div class="institutionsName">
                            <img src="picture/img-xn_4.png" alt="" class="institutionsNamePng">
                            <div>西南政法大学</div>
                        </div>
                        <div class="institutionsName institutionsName1">
                            <img src="picture/img-xt_4.png" alt="" class="institutionsNamePng">
                            <div>湘潭大学</div>
                        </div>
                        <div class="institutionsName">
                            <img src="picture/img-js_4.png" alt="" class="institutionsNamePng">
                            <div>吉首大学</div>
                        </div>
                        <div class="institutionsName">
                            <img src="picture/img-xb_4.png" alt="" class="institutionsNamePng">
                            <div>西北大学</div>
                        </div>
                        <div class="institutionsName">
                            <img src="picture/img-bj_4.png" alt="" class="institutionsNamePng">
                            <div>北京语言大学</div>
                        </div>
                        <div class="institutionsName institutionsName1">
                            <img src="picture/img-ya_4.png" alt="" class="institutionsNamePng">
                            <div>延安大学</div>
                        </div>
                        <div class="institutionsName">
                            <img src="picture/img-gd_4.png" alt="" class="institutionsNamePng">
                            <div>广东东软学院</div>
                        </div>
                        <div class="institutionsName">
                            <img src="picture/img-zj_4.png" alt="" class="institutionsNamePng">
                            <div>浙江师范大学</div>
                        </div>
                        <div class="institutionsName">
                            <img src="picture/img-yn_4.png" alt="" class="institutionsNamePng">
                            <div>云南师范大学</div>
                        </div>
                        <div class="institutionsName institutionsName1">
                            <img src="picture/img-nz_4.png" alt="" class="institutionsNamePng">
                            <div>湖南女子学院</div>
                        </div>
                        <div class="institutionsName">
                            <img src="picture/hn_4.png" alt="" class="institutionsNamePng">
                            <div>华南师范大学</div>
                        </div>
                        <div class="institutionsName">
                            <img src="picture/xy_4.png" alt="" class="institutionsNamePng">
                            <div>信阳师范学院</div>
                        </div>
                        <div class="institutionsName">
                            <img src="picture/img-dysf_4.png" alt="" class="institutionsNamePng">
                            <div>湖南第一师范</div>
                        </div>
                        <div class="institutionsName institutionsName1">
                            <img src="picture/img-lg_4.png" alt="" class="institutionsNamePng">
                            <div>长沙理工大学</div>
                        </div>
                    </div>
                    <div class="up" @click='hideAll'>
                        <img src="picture/upup_4.png" alt="">
                    </div>
                </div>
            </div>

            <div class="cooperationContent4">
                <div class="case">
                    <div class="content1">
                        <img src="picture/sign_quan_4.png" class="logoR">
                        <div class="newsTitle">
                            <img src="picture/partner institutions_4.png" class="news2">
                            <div class="newsFont">潭州教育合作院校</div>
                        </div>
                    </div>
                    <div class="casePng">
                        <div class="caseBox">
<aside class='overflowBox'>
 <img src="picture/img-1_4.png" alt=""  class="caseBoxImg">
</aside>
                           
                            <div>
                                <span>
                                  海南大学、山东大学
                              </span>
                            </div>
                        </div>
                        <div class="caseBox">
                         <aside class='overflowBox'>
 <img src="picture/img-2_4.png" alt=""  class="caseBoxImg">
</aside>
                            <div>
                                <span>
                                延安大学
                            </span>
                            </div>
                        </div>
                        <div class="caseBox">
                          <aside class='overflowBox'>
 <img src="picture/img-3_4.png" alt=""  class="caseBoxImg">
</aside>
                            <div>
                                <span>
                                    厦门大学
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="footer">
            <div class="content">
                <div class="contentMargin contentMarginSencond">
                    <div class="detalisTop">
                        <img src="picture/phonenumber_4.png" alt="">
                        <div class="titleClass">服务热线</div>
                    </div>
                    <div class="service">
                        <!-- <img src="picture/servicetime_4.png" alt=""> -->
                        <div class="telNum">4008-500-888</div>
                        <div class="telData">9 : 00 - 23 : 00 周一至周日</div>
                    </div>
                    <div class="Bottomline"></div>
                    <div class="beian">
                        <div>
                            Copyright &#169 All Rights Reserved.版权所有：湖南潭州教育网络科技有限公司
                        </div>
                        <a href="http://www.miitbeian.gov.cn" target="view_window">
                            <img style="vertical-align:middle;display: inline-block;" src="picture/icon_4.png"> 备案号：湘ICP备15014315号—1
                        </a>
                    </div>
                </div>
                <div class="contentMargin contentMarginFrist">
                    <div class="detalisTop">
                        <img src="picture/follow_4.png" alt="">
                        <div class="titleClass">关注我们</div>
                    </div>
                    <div class="tzktBox">
                        <div class="tzktAPP leftBox">
                            <div><img src="picture/app_4.png"></div>
                            <div class="tzkt">潭州课堂APP下载</div>
                        </div>
                        <div class="tzktAPP">
                            <div><img src="picture/gzh_4.png"></div>
                            <div class="tzkt">潭州课堂公众号</div>
                        </div>
                    </div>
                </div>
                <div class="contentMargin">
                    <div class="detalisTop">
                        <img src="picture/title_4.png" alt="">
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
                    <img src="picture/tz_gz_4.png" alt="">
                   
                </div>
                <p class="tz_floating_text">立即预约<b>“免费”</b>获取在线公开课</p>
                <input type="text" placeholder="请填写您的名字" class="tz_floating_name" id="username1">
                <input type="text" placeholder="请填写您的手机号码" class="tz_floating_tel" id="telephone1">
                <div class="tz_selector_wrap">
                    <p class="tz_selector_text">选择感兴趣科目</p>
                    <img src="picture/tz_zhixiang_4.png" alt="" class="tz_zhixiang">
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
                    <img src="picture/tz_close_4.png" alt="">
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
            classroom1: 'http://www.tanzhouedu.com/templets/1/tzEDU//asset/classroom1',
            classroom2: 'http://www.tanzhouedu.com/templets/1/tzEDU//asset/classroom2',
            cooperation1: 'http://www.tanzhouedu.com/templets/1/tzEDU//asset/cooperation1',
            cooperation2: 'http://www.tanzhouedu.com/templets/1/tzEDU//asset/cooperation2',
            classroom: false,
            showAlltips: false,
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
                this.timer1 = setTimeout(function() {
                    that.seen = false;
                }, 1000);
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
                }, 2000);
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
            },
            tzClassroom: function() {
                if (this.classroom) {
                    this.classroom = false
                }
            },
            cooperation: function() {
                if (!this.classroom) {
                    this.classroom = true
                }
            },
            showAll: function() {
                this.showAlltips = true
            },
            hideAll: function() {
                this.showAlltips = false
            }
        },
    })
</script>
