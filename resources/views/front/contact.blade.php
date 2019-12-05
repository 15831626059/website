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
        // PC 端
        location.href="/mobile/about"
    }
}
</script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>关于我们</title>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="/js/jquery_3.js"></script>
    <script src="/js/contact.js"></script>
    <link rel="stylesheet" href="/css/contact.css">
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
                            <div class="colorTab" style="color: #666;" :class='index==4?"active":""' v-text="item"  v-cloak>
                            </div>
                            <span class="bottomList" v-show='index==4'></span>
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
        <!-- 广告图 -->
        
        <div class="banner">
          <img :src="itemImg" alt="">
        </div>

        <!-- tab切换 -->
        <div class="contact-wrap">
            <div class="contact">
                <div class="tab-title">
                  <ul>
                    <li v-for="(item,ind) in titleVal" ::key="ind" @click="changeTab(ind)" :class="cur==ind?'active01':''"><div class="icon-img"><img :src="cur==ind?item.url2:item.url1" alt=""></div><span v-text="item.name"></span></li>
                  </ul>
                </div>
      
                <div class="tab-content">
                  <div class="item-content" v-if="cur==0">
                    <div class="current01_img">
                        <img src="http://www.tanzhouedu.com/templets/1/tzEDU//asset/current01.png" alt="">
                    </div>
                    <div class="edu_list">
                      <ul>
                          <li v-for="(item,ind) in eduList" ::key="ind" :class="(ind+1)%4==0?'active03':''">
                            <p class="item-title" v-text="item.title"></p>
                            <p class="item-name" v-text="item.name"></p>
                            <p class="item-address" v-text="item.address"></p>
                          </li>
                      </ul>
                    </div>
                  </div>

                  <div class="item-content02" v-else-if="cur==1">
                   <div class="item-img"><img src="http://www.tanzhouedu.com/templets/1/tzEDU//asset/item01.png" alt=""></div>
                    <div class="item-img"><img src="http://www.tanzhouedu.com/templets/1/tzEDU//asset/item02.png" alt=""></div>
                    <div class="item-img"><img src="http://www.tanzhouedu.com/templets/1/tzEDU//asset/item03.png" alt=""> </div>
                    <div class="item-img"><img src="http://www.tanzhouedu.com/templets/1/tzEDU//asset/item04.png" alt=""> </div>
                    <div class="item-img"><img src="http://www.tanzhouedu.com/templets/1/tzEDU//asset/item05.png" alt=""> </div>

                  </div>
                  <div class="item-content" v-else>
                    <div class="cate-img">
                      <img src="http://www.tanzhouedu.com/templets/1/tzEDU//asset/cate01.png" alt="">
                      <img src="http://www.tanzhouedu.com/templets/1/tzEDU//asset/cate02.png" alt="">
                      <img src="http://www.tanzhouedu.com/templets/1/tzEDU//asset/cate03.png" alt="">
                      <img src="http://www.tanzhouedu.com/templets/1/tzEDU//asset/cate04.png" alt="">
                      <img src="http://www.tanzhouedu.com/templets/1/tzEDU//asset/cate05.png" alt="">
                      <img src="http://www.tanzhouedu.com/templets/1/tzEDU//asset/cate06.png" alt="">
                      <img src="http://www.tanzhouedu.com/templets/1/tzEDU//asset/cate07.png" alt="">
                    </div>
                  </div>
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

  <div class="tz_floating_wrap" id="tz_floating_wrap">
            <div class="tz_floating">
                <div class="tz_floating_left">
                    <img src="http://www.tanzhouedu.com/templets/1/tzEDU//asset/tz_gz.png" alt="">
                   
                </div>
                <p class="tz_floating_text" style=" margin-bottom:0;">立即预约<b>“免费”</b>获取在线公开课</p>
                <input type="text" placeholder="请填写您的名字" class="tz_floating_name" id="username1">
                <input type="text" placeholder="请填写您的手机号码" class="tz_floating_tel" id="telephone1">
                <div class="tz_selector_wrap">
                    <p class="tz_selector_text">选择感兴趣科目</p>
                    <img src="http://www.tanzhouedu.com/templets/1/tzEDU//asset/tz_zhixiang.png" alt="" class="tz_zhixiang">
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
                    <img src="http://www.tanzhouedu.com/templets/1/tzEDU//asset/tz_close.png" alt="">
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    $(document).ready(function () {
        $('.sideContent2').click(function () {
            window.location.href = "http://www.tanzhouedu.com/html/1/156/157/index.html";
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
        el: '#app',
        data: {
            itemImg:'http://www.tanzhouedu.com/templets/1/tzEDU//asset/banner01.png',
            bannerImg:['http://www.tanzhouedu.com/templets/1/tzEDU//asset/banner01.png','http://www.tanzhouedu.com/templets/1/tzEDU//asset/banner02.png','http://www.tanzhouedu.com/templets/1/tzEDU//asset/banner03.png'],
            seen: true,
            current: 4,
            timer1: '',
            timer2: '',
            msgArr: [
                '首页', '走进潭州', '产品与服务', '新闻报道', '关于我们', '客户端下载'
            ],
            titleVal:[{name:'城市布局',url1:'http://www.tanzhouedu.com/templets/1/tzEDU//asset/iconone01.png',url2:'http://www.tanzhouedu.com/templets/1/tzEDU//asset/iconone02.png'},
            {name:'发展历程',url1:'http://www.tanzhouedu.com/templets/1/tzEDU//asset/icontwo01.png',url2:'http://www.tanzhouedu.com/templets/1/tzEDU//asset/icontwo02.png'},
            {name:'企业荣誉',url1:'http://www.tanzhouedu.com/templets/1/tzEDU//asset/iconthree01.png',url2:'http://www.tanzhouedu.com/templets/1/tzEDU//asset/iconthree02.png'},
            ],
            cur:0,
            eduList:[{title:'潭州教育全球总部',name:'湖南，长沙',address:'长沙市高新区岳麓西大道588号芯城科技园10栋'},
            {title:'长沙第二分公司',name:'湖南，长沙',address:'长沙市经开区德普企业公元6D栋四楼'},
            {title:'长沙第三分公司',name:'湖南，长沙',address:'长沙市雨花区长沙总部基地1-B栋北塔4003室'},
            {title:'长沙天心分公司',name:'湖南，长沙',address:'长沙市天心区芙蓉中路三段380号汇金国际金座6楼'},
            {title:'长沙西中心分公司',name:'湖南，长沙',address:'湖南省长沙市岳麓区西中心T3栋14楼'},
            {title:'北京分公司海淀区',name:'北京',address:'北京市海淀区长远天地A1座602'},
            {title:'北京分公司石景山区',name:'北京',address:'北京市石景山区古城金融街长安中心26号院2号楼1401-1405'},
            {title:'成都第一分公司',name:'四川，成都',address:'成都市高新区天府三街萃华路89号中国节能大厦A座38楼'},
            {title:'成都第二分公司',name:'四川，成都',address:'成都市锦江区红星路三段IFS国际金融中心二号楼33层07室'},
            {title:'成都第三分公司',name:'四川，成都',address:'成都市成华区建设北路二段157号万科华茂广场16层'},
            {title:'成都第四分公司',name:'四川，成都',address:'成都市武侯区天仁路388号凯德天府17楼'},
            {title:'广州第一分公司',name:'广东，广州',address:'广州市天河区棠东东路47号潭州大厦'},
            {title:'广州第二分公司',name:'广东，广州',address:'广州市白云区石井街道聚源街50号欣凯科创园8号楼13层'},
            {title:'广州第三分公司',name:'广东，广州',address:'广州市海珠区布衣港电商产业园7栋'},
            {title:'广州第一子公司',name:'广东，广州',address:'广州市天河区棠东东路47号潭州大厦'},
            {title:'广州第二子公司',name:'广东，广州',address:'广州市天河区五山路371号之一中公教育大厦22楼2206-2208'},
            {title:'深圳分公司',name:'广东，深圳',address:'深圳市宝安区福海街道桥头社区宝安大道6093号中正财富大厦303～305～306室'},
            {title:'武汉第一分公司',name:'湖北，武汉',address:'武汉市光谷金融港B6栋902室'},
            {title:'武汉第二分公司',name:'湖北，武汉',address:'武汉市武昌区德成国贸中心b座36楼'},
            {title:'南宁分公司',name:'广西，南宁',address:'广西南宁市西乡塘区科园大道77号汇丰大厦A座19层1901-1916'},
            {title:'杭州第一分公司',name:'浙江，杭州',address:'杭州市滨江区江南大道3880号华荣时代大厦21楼2111-2112'},
            {title:'杭州第二分公司',name:'浙江，杭州',address:'杭州余杭区利尔达物联网大厦1号楼1002'},
            {title:'郑州分公司',name:'河南，郑州',address:'河南省郑州市金水区经三北路68号平安保险大厦1203'},
            {title:'大连分公司',name:'辽宁，大连',address:'辽宁省大连市甘井子区高新街大连高新壹号大厦20楼'},
            {title:'贵阳分公司',name:'贵州，贵阳',address:'贵阳南明区花果园国际中心3号楼B座2506'},
            {title:'衡阳分公司',name:'湖南，衡阳',address:'衡阳市石鼓区中建国际大夏21004'},
            {title:'西安分公司',name:'陕西，西安',address:'西安市高新区绿地领海大厦A座1501'},
            {title:'南京分公司',name:'江苏，南京',address:'南京市建邺区云龙山路60号龙熙大厦12楼1204室'},
            {title:'南昌分公司',name:'江西，南昌',address:'南昌市南昌县紫阳大道1199号紫晶国际广场写字楼20楼'},
            {title:'苏州分公司',name:'江苏，苏州',address:'苏州市吴中区星海街189号恒宇广场B座503'},
            {title:'青岛分公司',name:'山东，青岛',address:'青岛市市北区延吉路76号中海大厦2204'},
            {title:'重庆分公司',name:'重庆',address:'——'},
          ]
        },
        methods: {
          changeTab (index){
            this.cur = index
            this.itemImg = this.bannerImg[index]
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
            enterD: function() {
                 clearTimeout(this.timer1)
                clearTimeout(this.timer2)

                this.seen = true;
            },
            leaveD: function() {
                this.timer2 = setTimeout(() => {
                    this.seen = false;
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
