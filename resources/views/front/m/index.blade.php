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
        location.href="/"
    }
}
</script>

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>潭州教育</title>
    <link rel="stylesheet" href="/m/index.css">
    <link rel="stylesheet" href="/m/swiper.css">
    <link rel="stylesheet" href="/m/reset.css">
    <script src="/m/rem.js"></script>
    <script src="/m/jquery.js"></script>
    <script src="/m/swiper.js"></script>
    <script src="/m/vue.js"></script>
    <script src="/m/index.js"></script>
    <script src="/m/public.js"></script>
</head>

<body>
    <div id="app">
        <!-- 头部 -->
        <div class="header">
            <div class="logo">
                <img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/logo.png" alt="">
            </div>
            <ul class="title">
                <!-- '首页', '走进潭州', '产品服务', '新闻报道' -->
              <li class="active" @click='pageJump(0)' >
                    <a href="#">
                       首页
                    </a>
                </li>
                    <li @click='pageJump(1)' >
                        <a href="#">
                            走进潭州
                        </a>
                    </li>
                  <li @click='pageJump(2)' >
                      <a href="#">
                          产品服务
                      </a>
                  </li>
                   <li @click='pageJump(3)' >
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
        <section>
            <!-- 轮播图 -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" v-for="(item,ind) of banners" ::key="ind">
                        <img :src="item" alt="" class="banner_img">
                    </div>
                </div>
            </div>
            <!-- 简介 -->
            <div class="change_box">
                <div class="summary_box">
                    <div class="summary">
                        <h3>以在线教育为基础的科技和文化公司</h3>
                        <p>
                            潭州教育于2007年进入在线教育行业，是一家以在线教育为基础的科技和文化公司。拥有员工3000余人，专职讲师人数700余人，VIP用户近30万人。
                        </p>
                        <div class="more">
                            <span @click="pageJump(1)" >查看更多</span>
                            <i><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/right_all.png" alt=""></i>
                        </div>
                    </div>
                </div>
                <!-- 视频 -->
                <div class="video">
             <!--        <div class="videc_box">
                        <video id="ovideo" webkit-playsinline playsinline x5-video-player-type="h5" x5-video-player-fullscreen="false" src="https://res.shiguangkey.com/res/special/video/tanzhou.mp4" ref="video" @click="changePlay" loop poster="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/banner_vido.png"></video>
                    </div>
                    <div class="bofang" id="bofang" @click="changeShow" v-show="bfshow" >
                        <img class="play" v-show="isshow" src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/play.svg" alt="">
                        <img class="pause" v-show="noshow" src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/paused.svg" alt="">
                    </div> -->
                    
                       <div class="videc_box">
                        <video 
                        controls   
                        id="ovideo"  src="https://res.shiguangkey.com/res/special/video/tanzhou.mp4" ref="video"  loop poster="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/banner_vido.png"></video>
                    </div>
                </div>
                <!-- 专注在线教育12年 -->
                <div class="nav_box">
                    <div class="nav">
                        <h4>专注在线教育12年</h4>
                        <ul class="slide-box">
                            <li>
                                <span><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/12.png" alt=""></span>
                                <p>12年在线教育经验时间成就潭州</p>
                                <i><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/time.png" alt=""></i>
                            </li>
                            <li>
                                <span><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/30.png" alt=""></span>
                                <p>付费用户达30万人 众多用户的选择值得信赖</p>
                                <i><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/user.png" alt=""></i>
                            </li>
                            <li>
                                <span><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/700.png" alt=""></span>
                                <p>700余名教师团队全职授课，大品牌有保障</p>
                                <i><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/school.png" alt=""></i>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- 特聘顾问 -->
            <div class="adviser">
                <h4>特聘顾问</h4>
                <div class="swiper-container2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="user"><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/1.png" alt=""></div>
                            <div class="detail">
                                <h6>
                                    赵老师 （赵渝强）
                                </h6>
                                <p> ITSTAR大数据科学家/清华大学软件工程毕业/Oracle高级技术总监</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="user"><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/2.png" alt=""></div>
                            <div class="detail">
                                <h6>
                                    段老师 （段振雨）
                                </h6>
                                <p> 中国矿业大学 本科/中国科学院大学 硕士/资深算法工程师</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="user"><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/3.png" alt=""></div>
                            <div class="detail">
                                <h6>
                                    李老师（李辉熠）
                                </h6>
                                <p>
                                    工信部高级影视动画师、高级虚拟现实设计师、技能竞赛评审专家
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="user"><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/4.png" alt=""></div>
                            <div class="detail">
                                <h6>
                                    Young老师（杨连报）
                                </h6>
                                <p>
                                    北京交通大学硕士/中国铁道科学研究院博士
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="user"><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/5.png" alt=""></div>
                            <div class="detail">
                                <h6>
                                    陈超
                                </h6>
                                <p>
                                    七牛云高级技术总监，Spark Summit China 终身主席
                                </p>
                            </div>
                        </div>

                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination2"></div>
                </div>

            </div>
            <!-- 在线咨询 -->
            <div class="Navigater">
                <ul>
                    <li>
                        <a href="mqq://im/chat?chat_type=wpa&uin=3003419127&version=1&src_type=web" @click="chatQQ()">
                            <i><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/info.png" alt=""></i>
                            <span>在线咨询</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.tanzhouedu.com/html/1/m/156/157/index.html">
                            <i><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/is.png" alt=""></i>
                            <span>常见问答</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" @click='download'>
                            <i><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/down.png" alt=""></i>
                            <span>APP下载</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- 底部 -->
            <div class="footor">
                <div class="footor_top">
                    <h5>服务热线</h5>
                    <div class="tel"><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/tel.png" alt=""></div>
                    <div class="day"><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/day.png" alt=""></div>
                </div>
                <div class="footor_bottom">
                    <p>
                        Copyright © All Rights Reserved. 版权所有：湖南潭州教育网络科技有限公司
                    </p>
                    <div class="beian">
                        <i><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/guohui.png" alt=""></i> 备案号：湘ICP备15014315号—1
                    </div>
                </div>
            </div>
            <!-- 返回顶部 -->
            <div class="black" id="goToTop">
                返回顶部
            </div>
        </section>
    </div>
</body>
</html>
<script>

    var app = new Vue({
        el: '#app',
        data: {
            timer:"",
            bfshow:true,
            isshow:true,
            noshow:false,
            banners: ["http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/banner1.png"
            ],
            routerlist: ["http://www.tanzhouedu.com/templets/1/tzEDU//m/src/introduce/introduce.html"],
            cur: 0
        },

        created: function () {

        },
        mounted() {
            window.addEventListener('scroll', this.scrollToTop)
        },
        destroyed() {
            window.removeEventListener('scroll', this.scrollToTop)
        },

        methods: {
           chatQQ(){
                 
                  window.location.href = "mqqwpa://im/chat?chat_type=wpa&uin=3003419127&version=1&src_type=web&web_src=oicqzone.com";
           
                  function is_weixin(e) {
                  　　var ua = window.navigator.userAgent.toLowerCase();
                  　 if (ua.match(/MicroMessenger/i) == 'micromessenger') {
                  　　　　e.attr('href', 'http://wpa.qq.com/msgrd?v=3&uin=3003419127&site=潭州官方&menu=yes'); }
                  　　else {
                  　　　　e.attr('href','mqq://im/chat?chat_type=wpa&uin=3003419127&version=1&src_type=web'); }
                  }
                  　$('.u-cs').click(function () {
                  　　　　is_weixin($(this));
                  　})
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
            },
//             backTop() {
//                 var scrollTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
// 　　            console.log(scrollTop) 
//             },
//             changeShow(){
//                console.log( this.$refs.video.paused)
//                if(this.$refs.video.paused){
//                 this.$refs.video.play()
//                 this.isshow=false
//                 this.noshow=true
//                 this.bfshow=false
//                }else{
//                 this.$refs.video.pause() 
//                 this.bfshow=true
//                 this.isshow=true
//                 this.noshow=false  
//                }
//             },
//             changePlay(){
//                 if(this.bfshow===false){
//                     this.bfshow=true
//                 }else{
//                     this.bfshow=false
//                 }
//             },
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
        // watch:{
        //     changedata(ele){
        //         if(ele==true){
        //             this.timer = setTimeout( () =>{
        //                     this.bfshow=false
        //                 }, 3000)
        //         }else{
        //             clearInterval(this.timer)
        //             console.log(this.timer)
        //         }
        //     }
        // },
        computed: {
            changedata(){
                return this.bfshow
            }
        },

    })
</script>
