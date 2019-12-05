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
        location.href="/mobile"
    }
}
</script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>潭州教育</title>

  <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/common.css">
<script src="js/vue.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/polyfill.min.js"></script>
    
    <script src="js/index.js"></script>
<script src="js/tzform.js"></script>
</head>

<body>
    <div id="app">
        <div class="video" v-show='startVideo' style="display:none;">
        </div>
        <div class="videoBox" v-show='startVideo' style="display:none;">
            <video src="https://res.shiguangkey.com/res/special/video/tanzhou.mp4" width="100%" height="100%"class="completeVideo"></video>
            <img src="picture/xx.png" class="xx" alt="" @click='close'>
        </div>
        <div class="side">
            <div class="appDownload">
                <div class="ewmCode">
                    <img src="picture/tz_edu_ewm.png" alt="">
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

            <!-- 导航栏 -->
            <div class="navigation a">
                <script src="js/jquery.js"></script>
                <script src="js/8726b8b0d743443eabb92a2ae5322027.js"></script>
                <div id="headerAll">
                    <div class="logoBox">
                        <img src="picture/logo_001.png" class="logoPng">
                    </div>
                    <ul class="navigationDetails">
<template>
                        <li v-for="item,index in msgArr" @mouseenter="enter(index)" @mouseleave="leave(index)"
                            :class='index==5?"hots":""' @click='pageJump(index)'  v-cloak>
                            <div class="colorTab" :class='index==0?"active":""' v-text="item"  v-cloak>
                            </div>
                            <span class="bottomList" v-show='index==0'></span>
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

            <!-- banner -->
            <div class="banner">

                <div v-for='item,index in messageArr' v-if='videoCurrent==index'>
                    <div>
                    </div>
                    <div class="videoLinear" v-if='item.type==2'></div>
                    <img src="picture/bofang.png" alt="开始播放" class="startPlay" @click='startPlay'
                        v-if='item.type==2'>
                    <video v-if='item.type==2' muted class="bannerVideo" :src="item.url" autoplay loop="loop"></video>
                    <a :href="item.jump_url">
                        <img v-if='item.type==1' :src="item.url" alt="" class="bannerVideo">
                    </a>
                </div>

                <div class="tabBox">
                    <div class="tabTips" v-for='item,index in messageArr' :class='index==videoCurrent?"current":""'
                        @click='tab(index)'></div>
                </div>
            </div>
        </header>

<div class="index" style="margin-top: 20px;">
<div class="floor_3 w1200" id="Indexrequire">
        <div class="y-title clearfix">
            <h3 :class="ifShow?'hover':''"><a href="javascript:void(0);"  @click="show('v1')">最新需求</a></h3>
            <span class="split"></span>
            
            <h3 :class="!ifShow?'hover':''"><a href="javascript:void(0);" @click="show('v2')">热点需求</a></h3>
        </div>
        <div class="clearfix">


            <div class="floor_3_left fl">
                <div class="list  clearfix" v-show="ifShow">

                            <div class="item">
                                <a href="/xuqiu" title="需电力工程造价讲师一位" target="_blank">
                                    <h3><span class="price">议价</span>需电力工程造价讲师..</h3>
                                    <p>发布者：尹*生  0投标 <s class="y-ico a1"></s>山东省 菏泽市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="http://task.zhugebang.net/1000117" title="企业中高层综合能力提升培训" target="_blank">
                                <a href="/xuqiu" title="企业中高层综合能力提升培训" target="_blank">
                                    <h3><span class="price">议价</span>企业中高层综合能力..</h3>
                                    <p>发布者：朱*青  0投标 <s class="y-ico a1"></s>天津市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="http://task.zhugebang.net/1000116" title="大客户销售策略" target="_blank">
                                    <h3><span class="price">议价</span>大客户销售策略</h3>
                                    <p>发布者：王*生  0投标 <s class="y-ico a1"></s>湖南省湘潭市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="http://task.zhugebang.net/1000115" title="企业员工职业生涯发展规划" target="_blank">
                                    <h3><span class="price">议价</span>企业员工职业生涯发..</h3>
                                    <p>发布者：马*生  0投标 <s class="y-ico a1"></s>福建省福州市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="http://task.zhugebang.net/1000114" title="人才驱动的组织成功/人力资源相关课程" target="_blank">
                                    <h3><span class="price">￥16000.00</span>人才驱动的组织成功..</h3>
                                    <p>发布者：周*生  0投标 <s class="y-ico a1"></s>北京市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="http://task.zhugebang.net/1000113" title="企业管理能力提升" target="_blank">
                                    <h3><span class="price">议价</span>企业管理能力提升</h3>
                                    <p>发布者：*  0投标 <s class="y-ico a1"></s>辽宁省 朝阳市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="http://task.zhugebang.net/1000112" title="课程名称；高绩效目标与部门创新职能指标制定；" target="_blank">
                                    <h3><span class="price">议价</span>课程名称；高绩效目..</h3>
                                    <p>发布者：132****4507  0投标 <s class="y-ico a1"></s>湖南省 长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="http://task.zhugebang.net/1000111" title="课程名称；高绩效目标与部门创新职能指标制定；" target="_blank">
                                    <h3><span class="price">议价</span>课程名称；高绩效目..</h3>
                                    <p>发布者：132****4507  0投标 <s class="y-ico a1"></s>湖南省 长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="http://task.zhugebang.net/1000110" title="课程名称；高绩效目标与部门创新职能指标制定；" target="_blank">
                                    <h3><span class="price">议价</span>课程名称；高绩效目..</h3>
                                    <p>发布者：132****4507  0投标 <s class="y-ico a1"></s>湖南省 长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="http://task.zhugebang.net/1000109" title="课程名称；中华新道德经--新道法术器理念与高绩效领导力；" target="_blank">
                                    <h3><span class="price">议价</span>课程名称；中华新道..</h3>
                                    <p>发布者：132****4507  0投标 <s class="y-ico a1"></s>湖南省 长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="http://task.zhugebang.net/1000108" title="课程名称；中华新道德经--新道法术器理念与高绩效领导力；" target="_blank">
                                    <h3><span class="price">议价</span>课程名称；中华新道..</h3>
                                    <p>发布者：132****4507  0投标 <s class="y-ico a1"></s>湖南省 长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="http://task.zhugebang.net/1000107" title="课程名称；中华新道德经--新道法术器理念与高绩效领导力；" target="_blank">
                                    <h3><span class="price">议价</span>课程名称；中华新道..</h3>
                                    <p>发布者：132****4507  0投标 <s class="y-ico a1"></s>湖南省 长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="http://task.zhugebang.net/1000106" title="课程名称；中华新道德经--新道法术器理念与高绩效领导力；" target="_blank">
                                    <h3><span class="price">议价</span>课程名称；中华新道..</h3>
                                    <p>发布者：132****4507  0投标 <s class="y-ico a1"></s>湖南省 长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="http://task.zhugebang.net/1000105" title="课程名称；中华新道德经--新道法术器理念与高绩效领导力；" target="_blank">
                                    <h3><span class="price">议价</span>课程名称；中华新道..</h3>
                                    <p>发布者：132****4507  0投标 <s class="y-ico a1"></s>湖南省 长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="http://task.zhugebang.net/1000104" title="课程名称；中华新道德经--新道法术器理念与高绩效领导力；" target="_blank">
                                    <h3><span class="price">议价</span>课程名称；中华新道..</h3>
                                    <p>发布者：132****4507  0投标 <s class="y-ico a1"></s>湖南省 长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="http://task.zhugebang.net/1000101" title="找老师微信群讲销售课程（长期）1000/节" target="_blank">
                                    <h3><span class="price">￥1000.00</span>找老师微信群讲销售..</h3>
                                    <p>发布者：186****3980  0投标 <s class="y-ico a1"></s>湖南省 长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="http://task.zhugebang.net/1000100" title="广州60人规模企业内训" target="_blank">
                                    <h3><span class="price">议价</span>广州60人规模企业内..</h3>
                                    <p>发布者：134****0919  0投标 <s class="y-ico a1"></s>广东省 广州市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="http://task.zhugebang.net/1000099" title="促进沟通 增强凝聚" target="_blank">
                                    <h3><span class="price">议价</span>促进沟通 增强凝聚..</h3>
                                    <p>发布者：151****5981  0投标 <s class="y-ico a1"></s>湖南省 长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="http://task.zhugebang.net/1000098" title="中国铁塔湘西自治州分公司凝聚力提升计划" target="_blank">
                                    <h3><span class="price">议价</span>中国铁塔湘西自治州..</h3>
                                    <p>发布者：188****3203  1投标 <s class="y-ico a1"></s>湖南省 湘西土<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">
                                <a href="http://task.zhugebang.net/1000097" title="跨部门沟通与协调" target="_blank">
                                    <h3><span class="price">￥10000.00</span>跨部门沟通与协调</h3>
                                    <p>发布者：*  1投标 <s class="y-ico a1"></s>湖南省长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>

                </div>
                <div class="list clearfix" v-show="!ifShow">
              
                            <div class="item">                               
                                <a href="http://task.zhugebang.net/1000000" title="公司员工执行力培训" target="_blank">
                                    <h3><span class="price">议价</span>公司员工执行力培训..</h3>
                                    <p>发布者：李*红 1投标 <s class="y-ico a1"></s>上海市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">                               
                                <a href="http://task.zhugebang.net/1000001" title="销售团队拓展训练" target="_blank">
                                    <h3><span class="price">议价</span>销售团队拓展训练</h3>
                                    <p>发布者：158****9800 1投标 <s class="y-ico a1"></s>湖南省 长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">                               
                                <a href="http://task.zhugebang.net/1000003" title="新上任主管人员角色认知与管理技能提升" target="_blank">
                                    <h3><span class="price">￥30000.00</span>新上任主管人员角色..</h3>
                                    <p>发布者：137****2092 1投标 <s class="y-ico a1"></s>湖南省 长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">                               
                                <a href="http://task.zhugebang.net/1000023" title="销售团队销售技巧和潜能激发" target="_blank">
                                    <h3><span class="price">￥15000.00</span>销售团队销售技巧和..</h3>
                                    <p>发布者：186****8018 1投标 <s class="y-ico a1"></s>湖南省 长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">                               
                                <a href="http://task.zhugebang.net/1000014" title="公司需要进行中基层管理领导力提升，为期3天" target="_blank">
                                    <h3><span class="price">议价</span>公司需要进行中基层..</h3>
                                    <p>发布者：138****1088 0投标 <s class="y-ico a1"></s>湖南省 长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">                               
                                <a href="http://task.zhugebang.net/1000009" title="50人的员工激励培训" target="_blank">
                                    <h3><span class="price">￥30000.00</span>50人的员工激励培训..</h3>
                                    <p>发布者：155****6131 1投标 <s class="y-ico a1"></s>湖南省 长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">                               
                                <a href="http://task.zhugebang.net/1000021" title="“从目标到执行”高绩效团队打造" target="_blank">
                                    <h3><span class="price">议价</span>“从目标到执行”高绩..</h3>
                                    <p>发布者：朱*姐 1投标 <s class="y-ico a1"></s>湖南省 长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">                               
                                <a href="http://task.zhugebang.net/1000018" title="高效团队训练" target="_blank">
                                    <h3><span class="price">￥15000.00</span>高效团队训练</h3>
                                    <p>发布者：易*生 0投标 <s class="y-ico a1"></s>湖南省 湘潭市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">                               
                                <a href="http://task.zhugebang.net/1000005" title="中层骨干培训" target="_blank">
                                    <h3><span class="price">议价</span>中层骨干培训</h3>
                                    <p>发布者：139****3136 0投标 <s class="y-ico a1"></s>湖南省 湘西土<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">                               
                                <a href="http://task.zhugebang.net/1000006" title="“商业项目操盘手”培训项目" target="_blank">
                                    <h3><span class="price">议价</span>“商业项目操盘手”培..</h3>
                                    <p>发布者：186****6765 0投标 <s class="y-ico a1"></s>湖南省 长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">                               
                                <a href="http://task.zhugebang.net/1000017" title="销售团队培训，有实力的培训公司来" target="_blank">
                                    <h3><span class="price">议价</span>销售团队培训，有实..</h3>
                                    <p>发布者：* 0投标 <s class="y-ico a1"></s>湖南省 长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">                               
                                <a href="http://task.zhugebang.net/1000002" title="公司全员服务礼仪培训" target="_blank">
                                    <h3><span class="price">议价</span>公司全员服务礼仪培..</h3>
                                    <p>发布者：159****8877 0投标 <s class="y-ico a1"></s>湖南省 长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">                               
                                <a href="http://task.zhugebang.net/1000004" title="员工时间管理培训" target="_blank">
                                    <h3><span class="price">议价</span>员工时间管理培训</h3>
                                    <p>发布者：137****2092 0投标 <s class="y-ico a1"></s>湖南省 长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">                               
                                <a href="http://task.zhugebang.net/1000082" title="员工拓展培训" target="_blank">
                                    <h3><span class="price">议价</span>员工拓展培训</h3>
                                    <p>发布者：186****1575 1投标 <s class="y-ico a1"></s>湖南省 长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">                               
                                <a href="http://task.zhugebang.net/1000016" title="阳光心态" target="_blank">
                                    <h3><span class="price">￥8000.00</span>阳光心态</h3>
                                    <p>发布者：131****8664 0投标 <s class="y-ico a1"></s>湖南省 长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">                               
                                <a href="http://task.zhugebang.net/1000015" title="员工职业化培训" target="_blank">
                                    <h3><span class="price">￥46000.00</span>员工职业化培训</h3>
                                    <p>发布者：189****9176 0投标 <s class="y-ico a1"></s>湖南省 岳阳市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">                               
                                <a href="http://task.zhugebang.net/1000012" title="企业文化建设" target="_blank">
                                    <h3><span class="price">议价</span>企业文化建设</h3>
                                    <p>发布者：周*生 1投标 <s class="y-ico a1"></s>浙江省杭州市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">                               
                                <a href="http://task.zhugebang.net/1000026" title="乐在工作（或乐在事业、乐在职业）" target="_blank">
                                    <h3><span class="price">议价</span>乐在工作（或乐在事..</h3>
                                    <p>发布者：135****4643 1投标 <s class="y-ico a1"></s>湖南省 长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">                               
                                <a href="http://task.zhugebang.net/1000011" title="企业管理培训服务 - 管理技能 - 领导力" target="_blank">
                                    <h3><span class="price">议价</span>企业管理培训服务 ..</h3>
                                    <p>发布者：176****2297 1投标 <s class="y-ico a1"></s>湖南省 长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>
                            <div class="item">                               
                                <a href="http://task.zhugebang.net/1000020" title="高绩效部署培育" target="_blank">
                                    <h3><span class="price">￥10000.00</span>高绩效部署培育</h3>
                                    <p>发布者：张*铮 1投标 <s class="y-ico a1"></s>湖南省 长沙市<s class="y-ico a2"></s></p>
                                </a>
                            </div>

                </div>
               
            </div>
            <div class="floor_3_right fr">
                <a class="btn" href="http://task.zhugebang.net/Publish" target="_blank">免费发布需求</a>              
                        <div class="item">
                            <a href="http://task.zhugebang.net/1000000" title="公司员工执行力培训" target="_blank">
                                <h3><span class="price">议价</span>公司员工执行力培训..</h3>
                                <p><span class="fr">投标已截止</span>1个服务商参与</p>                               
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://task.zhugebang.net/1000001" title="销售团队拓展训练" target="_blank">
                                <h3><span class="price">议价</span>销售团队拓展训练</h3>
                                <p><span class="fr">投标已截止</span>1个服务商参与</p>                               
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://task.zhugebang.net/1000003" title="新上任主管人员角色认知与管理技能提升" target="_blank">
                                <h3><span class="price">￥30000.00</span>新上任主管人员角色..</h3>
                                <p><span class="fr">投标已截止</span>1个服务商参与</p>                               
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://task.zhugebang.net/1000023" title="销售团队销售技巧和潜能激发" target="_blank">
                                <h3><span class="price">￥15000.00</span>销售团队销售技巧和..</h3>
                                <p><span class="fr">投标已截止</span>1个服务商参与</p>                               
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://task.zhugebang.net/1000014" title="公司需要进行中基层管理领导力提升，为期3天" target="_blank">
                                <h3><span class="price">议价</span>公司需要进行中基层..</h3>
                                <p><span class="fr">投标已截止</span>0个服务商参与</p>                               
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://task.zhugebang.net/1000081" title="团队拓展建设，强化凝聚力和战斗力，暑期会战启动" target="_blank">
                                <h3><span class="price">议价</span>团队拓展建设，强化..</h3>
                                <p><span class="fr">投标已截止</span>1个服务商参与</p>                               
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://task.zhugebang.net/1000009" title="50人的员工激励培训" target="_blank">
                                <h3><span class="price">￥30000.00</span>50人的员工激励培训..</h3>
                                <p><span class="fr">投标已截止</span>1个服务商参与</p>                               
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://task.zhugebang.net/1000021" title="“从目标到执行”高绩效团队打造" target="_blank">
                                <h3><span class="price">议价</span>“从目标到执行”高绩..</h3>
                                <p><span class="fr">投标已截止</span>1个服务商参与</p>                               
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://task.zhugebang.net/1000018" title="高效团队训练" target="_blank">
                                <h3><span class="price">￥15000.00</span>高效团队训练</h3>
                                <p><span class="fr">投标已截止</span>0个服务商参与</p>                               
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://task.zhugebang.net/1000005" title="中层骨干培训" target="_blank">
                                <h3><span class="price">议价</span>中层骨干培训</h3>
                                <p><span class="fr">投标已截止</span>0个服务商参与</p>                               
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://task.zhugebang.net/1000006" title="“商业项目操盘手”培训项目" target="_blank">
                                <h3><span class="price">议价</span>“商业项目操盘手”培..</h3>
                                <p><span class="fr">投标已截止</span>0个服务商参与</p>                               
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://task.zhugebang.net/1000017" title="销售团队培训，有实力的培训公司来" target="_blank">
                                <h3><span class="price">议价</span>销售团队培训，有实..</h3>
                                <p><span class="fr">投标已截止</span>0个服务商参与</p>                               
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://task.zhugebang.net/1000002" title="公司全员服务礼仪培训" target="_blank">
                                <h3><span class="price">议价</span>公司全员服务礼仪培..</h3>
                                <p><span class="fr">投标已截止</span>0个服务商参与</p>                               
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://task.zhugebang.net/1000004" title="员工时间管理培训" target="_blank">
                                <h3><span class="price">议价</span>员工时间管理培训</h3>
                                <p><span class="fr">投标已截止</span>0个服务商参与</p>                               
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://task.zhugebang.net/1000082" title="员工拓展培训" target="_blank">
                                <h3><span class="price">议价</span>员工拓展培训</h3>
                                <p><span class="fr">投标已截止</span>1个服务商参与</p>                               
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://task.zhugebang.net/1000016" title="阳光心态" target="_blank">
                                <h3><span class="price">￥8000.00</span>阳光心态</h3>
                                <p><span class="fr">投标已截止</span>0个服务商参与</p>                               
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://task.zhugebang.net/1000015" title="员工职业化培训" target="_blank">
                                <h3><span class="price">￥46000.00</span>员工职业化培训</h3>
                                <p><span class="fr">投标已截止</span>0个服务商参与</p>                               
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://task.zhugebang.net/1000012" title="企业文化建设" target="_blank">
                                <h3><span class="price">议价</span>企业文化建设</h3>
                                <p><span class="fr">投标已截止</span>1个服务商参与</p>                               
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://task.zhugebang.net/1000026" title="乐在工作（或乐在事业、乐在职业）" target="_blank">
                                <h3><span class="price">议价</span>乐在工作（或乐在事..</h3>
                                <p><span class="fr">投标已截止</span>1个服务商参与</p>                               
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://task.zhugebang.net/1000011" title="企业管理培训服务 - 管理技能 - 领导力" target="_blank">
                                <h3><span class="price">议价</span>企业管理培训服务 ..</h3>
                                <p><span class="fr">投标已截止</span>1个服务商参与</p>                               
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://task.zhugebang.net/1000020" title="高绩效部署培育" target="_blank">
                                <h3><span class="price">￥10000.00</span>高绩效部署培育</h3>
                                <p><span class="fr">投标已截止</span>1个服务商参与</p>                               
                            </a>
                        </div>
            </div>
        </div>
    </div>
<div class="floor_5 w1200">
        <div class="y-title clearfix">
            <h3 class="hover"><a href="javascript:void(0);" _tcat="0">职业讲师</a></h3>

<!--
                <h3><a href="http://teacher.zhugebang.net/?cat=1" _tcat="1">职业讲师</a></h3>
                <h3><a href="http://teacher.zhugebang.net/?cat=2" _tcat="2">学院教授</a></h3>
                <h3><a href="http://teacher.zhugebang.net/?cat=3" _tcat="3">行业大咖</a></h3>
            <a class="more" href="http://teacher.zhugebang.net" style="margin-top: 0;">更多讲师 &gt;</a>
-->
            <span class="line"></span>
        </div>
        <div class="clearfix">
            <div class="floor_5_left fl">
                <img src="http://file.zhugebang.net/upload/images/1807/02/53a8f33f120e446ab4c851923635b917.jpg" title="国家高级礼仪培训师" alt="国家高级礼仪培训师">
            </div>
            <div class="floor_5_right fr">

                <div class="list">
                            <div class="item">
                            <a class="img" href="http://teacher.zhugebang.net/100024" title="蒋小华" target="_blank"><img src="http://file.zhugebang.net/upload/images/1710/12/36cfbf8734d14b42b2ec92bdb095a414.jpg" alt="蒋小华" title="蒋小华"></a>
                            <h3><a href="http://teacher.zhugebang.net/100024" title="蒋小华" target="_blank"><em class="fr">职业讲师</em><span>姓名：</span>蒋小华</a></h3>
                            <div class="txt">

                                <p><span>主讲课程：</span>职业技能</p>
                                <p><span>价格：</span><em>￥15000</em><i>/天</i></p>
                                <p><span>常驻地点：</span>浙江省杭州市</p>
                            </div>
                            <a class="btn" href="http://teacher.zhugebang.net/100024" target="_blank">立即预约</a>
                        </div>
                            <div class="item">
                            <a class="img" href="http://teacher.zhugebang.net/100019" title="黄志伟" target="_blank"><img src="http://file.zhugebang.net/upload/images/1709/28/acc1c0e2aca145479f32f3a33359463e.jpg" alt="黄志伟" title="黄志伟"></a>
                            <h3><a href="http://teacher.zhugebang.net/100019" title="黄志伟" target="_blank"><em class="fr">职业讲师</em><span>姓名：</span>黄志伟</a></h3>
                            <div class="txt">

                                <p><span>主讲课程：</span>管理技能</p>
                                <p><span>价格：</span><em>￥12000</em><i>/天</i></p>
                                <p><span>常驻地点：</span>广东省深圳市</p>
                            </div>
                            <a class="btn" href="http://teacher.zhugebang.net/100019" target="_blank">立即预约</a>
                        </div>
                            <div class="item">
                            <a class="img" href="http://teacher.zhugebang.net/100076" title="李平" target="_blank"><img src="http://file.zhugebang.net/upload/images/1808/15/89412ed16aac4de58e5bbf1baf03d104.jpg" alt="李平" title="李平"></a>
                            <h3><a href="http://teacher.zhugebang.net/100076" title="李平" target="_blank"><em class="fr">学院教授</em><span>姓名：</span>李平</a></h3>
                            <div class="txt">

                                <p><span>主讲课程：</span>银行金融</p>
                                <p><span>价格：</span><em>￥12000</em><i>/天</i></p>
                                <p><span>常驻地点：</span>湖南省长沙市</p>
                            </div>
                            <a class="btn" href="http://teacher.zhugebang.net/100076" target="_blank">立即预约</a>
                        </div>
                            <div class="item">
                            <a class="img" href="http://teacher.zhugebang.net/100058" title="宏皓" target="_blank"><img src="http://file.zhugebang.net/upload/images/1801/25/c34c4f58a7414ec68ba4b903505a1d9d.png" alt="宏皓" title="宏皓"></a>
                            <h3><a href="http://teacher.zhugebang.net/100058" title="宏皓" target="_blank"><em class="fr">职业讲师</em><span>姓名：</span>宏皓</a></h3>
                            <div class="txt">

                                <p><span>主讲课程：</span>银行金融</p>
                                <p><span>价格：</span><em>￥20000</em><i>/天</i></p>
                                <p><span>常驻地点：</span>北京市</p>
                            </div>
                            <a class="btn" href="http://teacher.zhugebang.net/100058" target="_blank">立即预约</a>
                        </div>
                            <div class="item">
                            <a class="img" href="http://teacher.zhugebang.net/100106" title="周应恒" target="_blank"><img src="http://file.zhugebang.net/upload/images/1809/10/b601fe0fb4bf4ca8a877306139e2a09f.jpg" alt="周应恒" title="周应恒"></a>
                            <h3><a href="http://teacher.zhugebang.net/100106" title="周应恒" target="_blank"><em class="fr">学院教授</em><span>姓名：</span>周应恒</a></h3>
                            <div class="txt">

                                <p><span>主讲课程：</span>行业培训</p>
                                <p><span>价格：</span><em>￥15000</em><i>/天</i></p>
                                <p><span>常驻地点：</span>江苏省南京市</p>
                            </div>
                            <a class="btn" href="http://teacher.zhugebang.net/100106" target="_blank">立即预约</a>
                        </div>
                            <div class="item">
                            <a class="img" href="http://teacher.zhugebang.net/100113" title="何敬敏" target="_blank"><img src="http://file.zhugebang.net/upload/images/1810/17/b714dbcb3ad1495dba4f47de17404b67.jpg" alt="何敬敏" title="何敬敏"></a>
                            <h3><a href="http://teacher.zhugebang.net/100113" title="何敬敏" target="_blank"><em class="fr">行业大咖</em><span>姓名：</span>何敬敏</a></h3>
                            <div class="txt">

                                <p><span>主讲课程：</span>热点培训</p>
                                <p><span>价格：</span><em>￥6000</em><i>/天</i></p>
                                <p><span>常驻地点：</span>湖南省长沙市</p>
                            </div>
                            <a class="btn" href="http://teacher.zhugebang.net/100113" target="_blank">立即预约</a>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>


        <div class="briefIntroduction">
            <div class="content1">
                <img src="picture/sign_quan.png" class="logoR">
                <div class="newsTitle">
                    <img src="picture/news1.png" class="news1">
                    <div class="newsFont">以在线教育为基础的科技和文化公司</div>
                </div>
            </div>
            <div class="newsList">
                <ul>
                    <li>
                        <span class="listStyle"></span> 潭州教育于2007年进入在线教育行业，是一家以在线教育为基础的科技和文化公司，员工3000余人，教师人数1000人。
                    </li>
                    <li>
                        <span class="listStyle"></span> 潭州课堂在线教育平台，注册用户200万人，服务数百万用户。
                    </li>
                    <li>
                        <span class="listStyle"></span> 我们的愿景是“为全球70亿人提供教育服务”。
                    </li>
                </ul>
            </div>
            <div class="more">
                <div>
                    了解更多
                </div>
                <img src="picture/more.png">
            </div>
        </div>
        <!-- 教学特色 -->
        <div class="tz_characteristic">
            <div class="tz_characteristic_wrap">
                <img src="picture/sign_quan.png" class="logoR">
                <div class="newsTitle">
                    <img src="picture/characteristic.png" class="news1">
                    <div class="newsFont">教学特色</div>
                </div>
            </div>
            <div class="tz_characteristic_list">
                <ul>
                    <li>
                        <img src="picture/tz_broadcast.png" alt="">
                        <span class="tz_characteristic_title">
                            <b>直播互动</b>
                            <p>直播教学，灵活互动助你随时随地 高效学习</p>
                        </span>
                    </li>
                    <li>
                        <img src="picture/tz_curriculum.png" alt="">
                        <span class="tz_characteristic_title">
                            <b>课程种类全</b>
                            <p>海量课程任选，从出生到老都可以 在此学习</p>
                        </span>
                    </li>
                    <li>
                        <img src="picture/tz_interest.png" alt="">
                        <span class="tz_characteristic_title">
                            <b>激发兴趣</b>
                            <p>以轻松诙谐的方式授业激发兴趣 培养习惯</p>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- 教学实力 -->
        <div class="tz_promoting ">
            <div class="tz_promoting_wrap">
                <img src="picture/sign_quan.png" class="logoR">
                <div class="newsTitle">
                    <img src="picture/promoting_title_01.png" class="news1">
                    <div class="newsFont">教学实力</div>
                </div>
            </div>
            <div class="tz_promoting_list">
                <ul>
                    <li>
                        <div class="tz_promoting_top">
                            <i>12</i>
                            <em>年</em>
                        </div>
                        <p class="content_one">12年在线教育行业探索 成就潭州</p>
                        <span>
                            <img src="picture/tz_logo_12.png" alt="">
                        </span>
                    </li>
                    <li class="activeTow">
                        <div class="tz_promoting_top">
                            <i>30</i>
                            <em>万</em>
                        </div>
                        <p class="content_tow">付费用户达到30万人，众多用户的选择 值得信赖</p>
                        <span class="activeThree" style="display: block">
                            <img src="picture/tz_min.png" alt="">
                        </span>
                    </li>
                    <li>
                        <div class="tz_promoting_top">
                            <i>700</i>
                            <em>+</em>
                        </div>
                        <p class="content_three">700余名教师团队全职授课大品 牌有保障</p>
                        <span>
                            <img src="picture/tz_my.png" alt="">
                        </span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bgBox">
            <div class="content2">
                <img src="picture/sign_quan.png" class="logoR">
                <div class="newsTitle">
                    <img src="picture/tz_adviser.png" class="news1">
                    <div class="newsFont">潭州顾问</div>
                </div>
            </div>
            <div class="scrollpic">
                <div id="myscroll">
                    <div id="right"></div>
                    <div id="left"></div>
                    <div id="myscrollbox">
                        <ul>
                            <li>
                                <a>
                                    <div class="photo">
                                        <img src="picture/1.png" width="320" height="305">
                                        <div class="teacherDetails">
                                            <div class="teacherName">
                                                赵老师 （赵渝强）
                                            </div>
                                            <div class="teacherPost1">
                                                ITSTAR大数据科学家/清华大学软件工程毕业/Oracle高级技术总监
                                            </div>
                                        </div>
                                    </div>
                                    <span class="intro">
                                        <div class="detailsName">
                                            赵老师 （赵渝强）
                                        </div>
                                        <div class="detalsPost">
                                            在Oracle任职12年在BEA、甲骨文、摩托罗拉担任技术顾问、数据处理和挖掘专家；多年来，为数家上市公司做大数据开发内训；已经为百余名学员入职一线互联网公司；精通Oracle数据库、Weblogic、Java、Hadoop、Storm、Spark
                                        </div>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <div class="photo">
                                        <img src="picture/2.png" width="320" height="305">
                                        <div class="teacherDetails">
                                            <div class="teacherName">
                                                段老师 （段振雨）
                                            </div>
                                            <div class="teacherPost1">
                                                中国矿业大学 本科/中国科学院大学 硕士/资深算法工程师
                                            </div>
                                        </div>
                                    </div>
                                    <span class="intro">
                                        <div class="detailsName">
                                            段老师 （段振雨）
                                        </div>
                                        <div class="detalsPost">
                                            就职于全球知名美股上市公司，长期从事机器学习相关工作，有丰富的学习实战经验精通Python，有较深的机器学习理论基础，熟练掌握Sklearn机器学习开发包及主流的TensorFlow深度学习开发框架；熟练掌握numpy、pandas等数据分析、处理工具；
                                            熟练掌握机器学习模型和离线大数据应用及线上实时应用方法及框架。
                                        </div>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <div class="photo">
                                        <img src="picture/3.png" width="320" height="305">
                                        <div class="teacherDetails">
                                            <div class="teacherName">
                                                李老师（李辉熠）
                                            </div>
                                            <div class="teacherPost1">
                                                工信部高级影视动画师、高级虚拟现实设计师、技能竞赛评审专家
                                            </div>
                                        </div>
                                    </div>
                                    <span class="intro">
                                        <div class="detailsName">
                                            李老师（李辉熠）
                                        </div>
                                        <div class="detalsPost">
                                            湖南省数字媒体应用技术专业中高职衔接教学标准项目执行负责人。主持和主要参与了国家汉办《唱歌学汉语》系列动画、中宣部《健康农家》系列动画、湖南省《公共艺术数字博物馆》、长沙县《红色旅游虚拟现实系统》等数十项目数字媒体项目的研发制作。
                                        </div>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <div class="photo">
                                        <img src="picture/4.png" width="320" height="305">
                                        <div class="teacherDetails">
                                            <div class="teacherName">
                                                Young老师（杨连报）
                                            </div>
                                            <div class="teacherPost1">
                                                北京交通大学硕士/中国铁道科学研究院博士
                                            </div>
                                        </div>
                                    </div>
                                    <span class="intro">
                                        <div class="detailsName">
                                            Young老师（杨连报）
                                        </div>
                                        <div class="detalsPost">
                                            在《铁道学报》《交通运输工程学报》以及ITSC、ICSTTE等
                                            IEEE国际会议发表论文10余篇，荣获国家奖学金、中国铁道科学技术奖等奖项。拥有多年从事Java
                                            web工程开发、大数据平台架构和研发的经验曽参与传统行业大数据平台自主研发设计、工业领域文本大数据分析挖掘、主数据管理平台设计与研发等
                                        </div>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a>
                                    <div class="photo">
                                        <img src="picture/5.png" width="320" height="305">
                                        <div class="teacherDetails">
                                            <div class="teacherName">
                                                陈超
                                            </div>
                                            <div class="teacherPost1">
                                                七牛云高级技术总监，Spark Summit China 终身主席
                                            </div>
                                        </div>
                                    </div>
                                    <span class="intro">
                                        <div class="detailsName">
                                            陈超
                                        </div>
                                        <div class="detalsPost">
                                            七牛云高级技术总监，Spark Summit China
                                            终身主席，专注于大规模分布式计算与机器学习领域。全面负责七牛大数据产品的设计与研发，近年来一直专注于分布式计算与机器学习等领域，参与了 Spark,
                                            Alluxio 及 InfluxDB 等多个知名开源项目，并且有非常丰富的分布式系统设计与实现经验，在分布式数据库方面也有深入研究。
                                        </div>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <div class="photo">
                                        <img src="picture/6.png" width="320" height="305">
                                        <div class="teacherDetails">
                                            <div class="teacherName">
                                                迟亚雄
                                            </div>
                                            <div class="teacherPost1">
                                                西安电子科技大学人工智能学院博士，华为云EI资深算法架构师
                                            </div>
                                        </div>
                                    </div>
                                    <span class="intro">
                                        <div class="detailsName">
                                            迟亚雄
                                        </div>
                                        <div class="detalsPost">
                                            毕业于西安电子科技大学人工智能学院，获得博士学位，2017年加入华为云EI服务产品部担任，负责图像识别、内容审核算法架构设计和开发工作，目前担任华为云EI资深算法架构师。
                                        </div>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <div class="photo">
                                        <img src="picture/7.png" width="320" height="305">
                                        <div class="teacherDetails">
                                            <div class="teacherName">
                                                许文达
                                            </div>
                                            <div class="teacherPost1">
                                                腾讯云架构师、VMware VCP虚拟化认证
                                            </div>
                                        </div>
                                    </div>
                                    <span class="intro">
                                        <div class="detailsName">
                                            许文达
                                        </div>
                                        <div class="detalsPost">
                                            多年IT行业经验，曾任曙光深度技术支持，对系统架构和安全性有深刻理解。现任腾讯云架构师，负责解决大客户平滑向云迁移的问题。参与宜昌广电中心、中科院物理所虚拟化项目、联通沃云平台项目、联通大数据公司蓝鲸项目，获得VMware
                                            VCP虚拟化认证。
                                        </div>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <div class="photo">
                                        <img src="picture/8.png" width="320" height="305">
                                        <div class="teacherDetails">
                                            <div class="teacherName">
                                                吴老师 （吴通）
                                            </div>
                                            <div class="teacherPost1">
                                                北京大学软件工程毕业/曾任职百度大数据研发工程师
                                            </div>
                                        </div>
                                    </div>
                                    <span class="intro">
                                        <div class="detailsName">
                                            吴老师 （吴通）
                                        </div>
                                        <div class="detalsPost">
                                            现任全球知名纳斯达克上市公司大数据创新中心数据平台负责人；多年大数据领域一线开发经验，从0到1构建大型数据平台；深耕数据结构及算法、网络、操作系统、分布式系统等；
                                        </div>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <div class="photo">
                                        <img src="picture/9.png" width="320" height="305">
                                        <div class="teacherDetails">
                                            <div class="teacherName">
                                                云骧老师（宁尚兵）
                                            </div>
                                            <div class="teacherPost">
                                                阿里云大数据学院院长
                                            </div>
                                        </div>
                                    </div>
                                    <span class="intro">
                                        <div class="detailsName">
                                            云骧老师（宁尚兵）
                                        </div>
                                        <div class="detalsPost">
                                            现为阿里云大数据学院院长，精通阿里云数据类产品和解决方案，设计了阿里云大数据人才培养方案和课程体系。17年IT从业经验，其中超过12年的DW/BI、数据分析、挖掘等经验，熟悉Hadoop、BigData、DB2、Teradata、Oracle、Sysbase、MySQL等，有丰富的数据分析经验，多次实施海外数据挖掘项目。
                                        </div>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <div class="photo">
                                        <img src="picture/10.png" width="320" height="305">
                                        <div class="teacherDetails">
                                            <div class="teacherName">
                                                伍建平
                                            </div>
                                            <div class="teacherPost1">
                                                长沙民政学院艺术学院教授、著名水彩画家、油画家
                                            </div>
                                        </div>
                                    </div>
                                    <span class="intro">
                                        <div class="detailsName">
                                            伍建平
                                        </div>
                                        <div class="detalsPost">
                                            长期致力于水彩画、油画创作研究，数十篇水彩艺术专业论文和水彩画作品发表于国家专业学术期刊，出版个人专著《水彩画创作语境》及教材六本。其水彩画、油画作品多次在全国性展览获奖，并多次举办个人作品展，并曾受英国中英文化交流协会邀请在英举办个人水彩画作品展，作品被很多专业人士与收藏机构收藏。
                                        </div>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="tz_service">
                <div class="tz_promoting_wrap">
                        <img src="picture/sign_quan.png" class="logoR">
                        <div class="newsTitle">
                            <img src="picture/tz_service.png" class="news1">
                            <div class="newsFont">平台服务</div>
                        </div>
                </div>
                <div class="Propaganda">
                        <div class="clearance">
                            <div class="PropagandaPng">
                                <img src="picture/tz_kt.png" alt="">
                            </div>
                            <div class="PropagandaDetails">
                                <div class="PropagandaName">
                                    潭州课堂
                                </div>
                                <div class="PropagandaContent">
                                    <p>
                                        潭州课堂是潭州教育旗下的在线教育直播平台。集教学管理、在线授课听课、作业考试、互动学习功能于一体支持web、PC、app、h5、小程序等多端同时在线互动直播。
                                    </p>
                                    <p>
                                        开设300多门课程，涵盖编程、营销、设计、公考、艺术、语言、学历等多个科目，并实现万人同时在线互动学习。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="PropagandaPng">
                                <img src="picture/tz_xqhz.png" alt="">
                            </div>
                            <div class="PropagandaDetails">
                                <div class="PropagandaName">
                                    校企合作
                                </div>
                                <div class="PropagandaContent">
                                    <p>
                                        潭州教育荣获首批教育部高教司产学合作协同育人企业。
                                    </p>
                                    <p>
                                        与全国53家高校建立产学合作新工科建设、师资培训、实践条件和实践基地A类、实践条件和实践基地B类、创新创业联合基金等五类项目进行合作。为培训机构和学校创建多维度课解决课程体系不完善、品牌识别度低、师资不稳定、教学模式单一等问题。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        <div class="newsPage">
            <div class="content1">
                <img src="picture/sign_quan.png" class="logoR">
                <div class="newsTitle">
                    <img src="picture/news3.png" class="news1">
                    <div class="newsFont">新闻报道</div>
                </div>
            </div>
            <div class="newsCardAll">
                
                    @foreach($article as $item)
                <div class="newsCard" @mouseenter="enter()" @mouseleave="leave()" name='/article/{{$item->id}}'>
                    <div class="newsPng">
                        <img class="newsPng" src="{{$item->cover_image}}" alt="">
                    </div>
                    <div class="newsTips">
                        <div class="titleTips">
                                <a href='article/{{$item->id}}' target="_self">{{$item->title}}</a>
                        </div>
                        <div class="newsIntroduce">
                                {{$item->introduction}}
                        </div>
                    </div>
                </div>
                    @endforeach
                
            </div>
        </div>
        <div class="footer">
            <div class="content">
                <div class="contentMargin contentMarginSencond">
                    <div class="detalisTop">
                        <img src="picture/phonenumber.png" alt="">
                        <div class="titleClass">服务热线</div>
                    </div>
                    <div class="service">
                        <!-- <img src="picture/servicetime.png" alt=""> -->
                        <div class="telNum">4008-500-888</div>
                        <div class="telData">9 : 00 - 23 : 00 周一至周日</div>
                    </div>
                    <div class="Bottomline"></div>
                    <div class="beian">
                        <div>
                            Copyright &#169 All Rights Reserved.版权所有：湖南潭州教育网络科技有限公司
                        </div>
                        <a href="http://www.beian.miit.gov.cn" target="view_window">
                            <img style="vertical-align:middle;display: inline-block;" src="picture/icon.png">
                            备案号：湘ICP备15014315号
                        </a>
                    </div>
                </div>
                <div class="contentMargin contentMarginFrist">
                    <div class="detalisTop">
                        <img src="picture/follow.png" alt="">
                        <div class="titleClass">关注我们</div>
                    </div>
                    <div class="tzktBox">
                        <div class="tzktAPP leftBox">
                            <div><img src="picture/app.png"></div>
                            <div class="tzkt">潭州课堂APP下载</div>
                        </div>
                        <div class="tzktAPP">
                            <div><img src="picture/gzh.png"></div>
                            <div class="tzkt">潭州课堂公众号</div>
                        </div>
                    </div>
                </div>
                <div class="contentMargin">
                    <div class="detalisTop">
                        <img src="picture/title.png" alt="">
                        <div class="titleClass">公司信息</div>
                    </div>
                    <div class="detalisBottom">
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
                    <img src="picture/tz_gz.png" alt="">
                   
                </div>
                <p class="tz_floating_text">立即预约<b>“免费”</b>获取在线公开课</p>
                <input type="text" placeholder="请填写您的名字" class="tz_floating_name" id="username1">
                <input type="text" placeholder="请填写您的手机号码" class="tz_floating_tel" id="telephone1">
                <div class="tz_selector_wrap">
                    <p class="tz_selector_text">选择感兴趣科目</p>
                    <img src="picture/tz_zhixiang.png" alt="" class="tz_zhixiang">
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
                   <img src="picture/tz_close.png" alt="">
                </div>
            </div>
        </div>

    </div>
</body>

</html>
<script>
    $(document).ready(function () {
        $('.jumpPage').click(function () {
            console.log(11111)
        })
        $('.more').click(function () {
            window.location.href = "/enter"

        })
        $('.newsCardAll').children().click(function () {
            console.log($(this).attr("name"));
            console.log($(this).attr('name'));
            window.location.href = $(this).attr('name')

        })
        $('.sideContent2').click(function () {
            window.location.href = "/faq";
        })
        $('.window').click(function () {
            window.location.href = 'https://cstore.shiguangkey.com/resource/TZKTSetup4.1.7.5334.exe'
        })
        // $('.winXP').click(function() {
        //   window.location.href = 'https://cstore.shiguangkey.com/resource/TZKTSetup4.1.7.5334XP.exe'
        //})
    })
</script>
<script>
    var app = new Vue({
        el: '#app',
        data: {
            ifShow: true,
            startVideo: false,
            seen: true,
            current: 0,
            videoCurrent: 0,
            pngMin: 0,
            pngMax: 3,
            timer1: '',
            timer2: '',
            msgArr: [
                '首页', '走进潭州', '产品与服务', '新闻报道', '关于我们', '客户端下载'
            ],
            messageArr: [
                //1图片,2是视频
                //{"type":2,"url":"https://cstore.shiguangkey.com/resource/品牌官网轮播视频_2mb.mp4"},
                {"type":1,"url":"images/1550031815674.png","jump_url":"/article"},
                {"type":1,"url":"images/1550031835235.png","jump_url":"/article"},
                {"type":1,"url":"images/1550031851259.png","jump_url":"/article"},
            ],
            pngArr: [1, 2, 3, 4, 5],
        },
        methods: {
            show(i) {
                if(i == 'v1'){
                    this.ifShow = true
                }else{
                    this.ifShow = false
                }
            },
            enter: function (index) {
                clearTimeout(this.timer1)
                clearTimeout(this.timer2)
                this.seen = true;
                this.current = index;
            }, //添加幻灯片
            leave: function (index) {
                var that = this;
                this.timer1 = setTimeout(function () {

                    that.seen = false;
                }, 2000);
                // this.seen = false;
                // this.seen = false;
                this.current = index;
            }, //删除方法
            tab: function (index) {
                this.videoCurrent = index
            },
            pngAdd: function () {
                if (this.pngArr.length - 3 > 0) {
                    if (this.pngMin < this.pngArr.length - 3) {
                        this.pngMin++
                    }
                }
            },
            enterD: function () {
                console.log(this.timer1);

                clearTimeout(this.timer1)
                clearTimeout(this.timer2)
                this.seen = true;
            },
            leaveD: function () {
                var that = this
                this.timer2 = setTimeout(function () {
                    that.seen = false;
                }, 1000);
            },
            pngReduce: function () {
                if (this.pngArr.length - 3 > 0) {
                    if (this.pngMin > 0) {
                        this.pngMin--
                    }
                }
            },
            startPlay: function () {
                this.startVideo = true
            },
            close() {
                this.startVideo = false
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
