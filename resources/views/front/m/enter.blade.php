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
        location.href="/enter"
    }
}
</script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>走进潭州</title>
    <link rel="stylesheet" href="/m/enter.css">
    <link rel="stylesheet" href="/m/reset.css">
    <script src="/m/rem.js"></script>
    <script src="/m/jquery.js"></script>
    <script src="/m/vue.js"></script>
    <script src="/m/public.js"></script>
    
</head>

<body>
    <div id="introduce">
        <!-- 头部 -->
        <div class="header">
            <div class="logo">
                <img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/logo.png" alt="">
            </div>
            <ul class="title">
                <li @click='pageJump(0)'>
                    <a href="#">
                       首页
                    </a>
                </li>
                    <li>
                        <a href="#" class="active" @click='pageJump(1)'>
                            走进潭州
                        </a>
                    </li>
                  <li @click='pageJump(2)'>
                      <a href="#">
                          产品服务
                      </a>
                  </li>
                   <li @click='pageJump(3)'>
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
        <div class="main">
            <div class="main_wrap">
                <!-- 潭州由来 -->
                <div class="origin">
                    <h4>潭州由来</h4>
                    <p>北宋开宝五年，宋朝为了新朝的繁荣昌盛，特令潭州(湖南)太守朱洞筹资建造了岳麓书院。<br /> 公元1015年周式得到了宋真宗召见，并题赐“岳麓书院”匾额。<br />
                        2007年，周有贵传承先辈使命，毅然承担教书育人的大任，开办潭州教育。<br />
                        截止至2018年底，潭州教育拥有教职工3000余人，并在北京、深圳、广州、武汉、成都、长沙、星沙成立分公司。潭州课堂注册用户数突破200万。</p>
                </div>

                <!-- 企业文化 -->
                <div class="culture">
                    <h4>企业文化</h4>
                    <ul>
                        <li>
                            <a href="#">
                                <div class="culture_img"><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/intro_1.png" alt=""></div>
                                <h5>愿景</h5>
                                <p>为全球70亿人提供教育服务</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="culture_img"><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/intro_2.png" alt=""></div>
                                <h5>使命</h5>
                                <p>激发学员学习兴趣，唤醒学员良知</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="culture_img"><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/intro_3.png" alt=""></div>
                                <h5>潭州logo寓意</h5>
                                <p>月亮是黑夜里的光明，代表理想与希望。太阳是中心，代表付出和利他。怀揣教育梦想的潭州人，以匠人的精神传道、授业、解惑，引领在线教育的发展。</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- 办公环境 -->
                <div class="ambient">
                    <h4>办公环境</h4>
                    <ul>
                        <li><a href="#"><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/adm_1.png" alt=""></a></li>
                        <li><a href="#"><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/adm_2.png" alt=""></a></li>
                        <li><a href="#"><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/adm_3.png" alt=""></a></li>
                        <li><a href="#"><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/adm_4.png" alt=""></a></li>
                    </ul>
                </div>
                <!-- 发展历程 -->
                <div class="course">
                    <h4>发展历程</h4>
                    <div class="history">
                        <ul>
                            <li>
                                <h6>2019年</h6>
                                <ol>
                                    <li><span>3月</span>
                                        <p>荣获淘宝教育技能培训商家行业领军奖、淘宝教育2018年度成交卓越奖</p>
                                    </li>
                                    <li><span style="width: 1rem;">1月</span>
                                        <p>入选全国信息技术标准化技术委员会教育技术分技术委员会单位委员，推动在线教育行业标准化体系建立</p>
                                    </li>
                                    <li><span>1月</span>
                                        <p>在南宁、杭州、海口建立分公司，深化全国战略布局</p>
                                    </li>
                                    <li><span>1月</span>
                                        <p>营业额突破4.65亿元人民币，实现同比增长173%</p>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <h6>2018年</h6>
                                <ol>
                                    <li><span>11月</span>
                                        <p>荣获百度2018年度影响力在线教育机构</p>
                                    </li>
                                    <li><span>8月</span>
                                        <p>与中国联通开展战略合作</p>
                                    </li>
                                    <li><span style="width: 1.5rem;">3月~4月</span>
                                        <p>在成都、广州、武汉、深圳成立分公司，全面开启全国战略布局</p>
                                    </li>
                                    <li><span>2月</span>
                                        <p>当选为湖南省民办教育协会第五届理事会副会长单位</p>
                                    </li>
                                    <li><span>2月</span>
                                        <p>完成6300万A轮融资</p>
                                    </li>
                                    <li><span>1月</span>
                                        <p>潭州教育营业额突破1.7亿元</p>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <h6>2017年</h6>
                                <ol>
                                    <li><span>12月</span>
                                        <p>与阿里云大学战略合作计划正式启动 </p>
                                    </li>
                                    <li><span>10月</span>
                                        <p>获批教育部高教司产学合作协同育人项目</p>
                                    </li>
                                    <li><span>7月</span>
                                        <p>北京分公司正式成立，开启全国化征程</p>
                                    </li>
                                    <li><span>5月</span>
                                        <p>全球VIP教学服务中心正式挂牌成立，教学服务体系全面升级</p>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <h6>2016年</h6>
                                <i>自主研发的在线教育平台“潭州课堂”上线 </i>
                            </li>
                            <li>
                                <h6>2015年</h6>
                                <i>湖南潭州教育网络科技有限公司正式注册 </i>
                            </li>
                            <li>
                                <h6>2013年</h6>
                                <i>正式启用“潭州教育”品牌。 新增淘宝、网络营销、java等科目，开启多类目在线课程教学 </i>
                            </li>
                            <li>
                                <h6>2010年</h6>
                                <i>线上官网正式上线，相继推出SEO技术教程一、二、三版，形成SEO系统课程</i>
                            </li>
                            <li>
                                <h6>2009年</h6>
                                <i>成立SEO研究中心，以工作室的形式教研、授课 </i>
                            </li>
                            <li>
                                <h6>2007年</h6>
                                <i>创建技术交流论坛，在网上分享SEO技术，开始进入在线教育领域</i>
                            </li>
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

    })
</script>
<script>
    var app = new Vue({
        el: '#introduce',
        data: {
            msgArr: [
                '首页', '走进潭州', '产品服务', '新闻报道'
            ],
            cur: 1
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
