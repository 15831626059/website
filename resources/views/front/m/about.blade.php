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
        location.href="/contact"
    }
}
</script>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>走进潭州</title>
    <link rel="stylesheet" href="/m/about.css" />
    <link rel="stylesheet" href="/m/reset.css">
    <script src="/m/rem.js"></script>
    <script src="/m/jquery.js"></script>
    <script src="/m/public.js"></script>
    <script src="/m/vue.js"></script>
  </head>

  <body>
    <div id="contact">
      <!-- 头部 -->
      <div class="header">
        <div class="logo">
          <img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/logo.png" alt="" />
        </div>
        <ul class="title">
          <li @click="pageJump(0)">
            <a href="#">
              首页
            </a>
          </li>
          <li @click="pageJump(1)">
            <a href="#"  >
              走进潭州
            </a>
          </li>
          <li @click="pageJump(2)">
            <a href="#">
              产品服务
            </a>
          </li>
          <li @click="pageJump(3)">
            <a href="#">
              新闻报道
            </a>
          </li>
          <li @click="pageJump(4)" class="active">
            <a href="#">
              关于我们
            </a>
          </li>
        </ul>
      </div>
      <div class="main">
        <div class="banner">
          <img :src="itemImg" alt="" />
        </div>

        <!-- tab切换 -->
        <div class="tab">
          <div class="tab-title">
            <ul>
              <li
                v-for="(item,ind) in titleVal"
                ::key="ind"
                @click="changeTab(ind)"
                :class="cur==ind?'active01':''"
              >
                <div class="icon-img">
                  <img :src="cur==ind?item.url2:item.url1" alt="" />
                </div>
                <span v-text="item.name"></span>
              </li>
            </ul>
          </div>

          <div class="tab-content">
            <div class="tab-content_wrap">
              <div class="tab-item01" v-if="cur==0">
                <img class="tab-current01" src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/current01.png" alt="">
                <ul>
                  <li
                    :class="[{'abc':item.type==2},{'li-active':!item.status}]"
                    v-for="(item,ind) in eduList"
                    ::key="ind"
                  >
                    <div class="list_title_wrap">
                      <span class="list-title" v-text="item.title"></span>
                      <span class="list-address" v-if="item.type"
                        ><img src="http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/address.png" alt="" /><i v-text="item.name"></i></span
                      >
                    </div>
                    <div class="list_address" v-if="item.address" v-text="'地址:'+item.address">
                       
                    </div>
                  </li>
                </ul>
              </div>
              <div class="tab-item02" v-else-if="cur==1">
                <img
                  class="tab-item02-img"
                  v-for="(item,ind) in courseImg"
                  ::key="ind"
                  :src="item"
                  alt=""
                />
              </div>
              <div class="tab-item03" v-else>
                  <img
                  class="tab-item03-img"
                  v-for="(item,ind) in honorImg"
                  ::key="ind"
                  :src="item"
                  alt=""
                />
                  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
<script>
  $(document).ready(function() {});
</script>
<script>
  var app = new Vue({
    el: "#contact",
    data: {
      msgArr: ["首页", "走进潭州", "产品服务", "新闻报道"],
      cur: 0,
      itemImg: "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/banner01.png",
      bannerImg: [
        "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/banner01.png",
        "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/banner02.png",
        "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/banner03.png"
      ],
      titleVal: [
        {
          name: "城市布局",
          url1: "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/icononeS01.png",
          url2: "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/icononeS02.png"
        },
        {
          name: "发展历程",
          url1: "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/icontwoS01.png",
          url2: "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/icontwoS02.png"
        },
        {
          name: "企业荣誉",
          url1: "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/iconthreeS01.png",
          url2: "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/iconthreeS02.png"
        }
      ],
      eduList: [
        {
          title: "潭州教育全球总部",
          name: "湖南，长沙",
          address: "长沙市高新区岳麓西大道588号芯城科技园10栋",
          type: 1
        },
        {
          title: "长沙第二分公司",
          name: "湖南，长沙",
          address: "长沙市经开区德普企业公元6D栋四楼"
        },
        {
          title: "长沙第三分公司",
          name: "湖南，长沙",
          address: "长沙市雨花区长沙总部基地1-B栋北塔4003室"
        },
        {
          title: "长沙天心分公司",
          name: "湖南，长沙",
          address: "长沙市天心区芙蓉中路三段380号汇金国际金座6楼"
        },
        {
          title: "长沙西中心分公司",
          name: "湖南，长沙",
          address: "湖南省长沙市岳麓区西中心T3栋14楼",
          status: 1
        },
        {
          title: "北京分公司海淀区",
          name: "北京",
          address: "北京市海淀区长远天地A1座602",
          type: 2
        },
        {
          title: "北京分公司石景山区",
          name: "北京",
          address: "北京市石景山区古城金融街长安中心26号院2号楼1401-1405",
          status: 1
        },
        {
          title: "成都第一分公司",
          name: "四川，成都",
          address: "成都市高新区天府三街萃华路89号中国节能大厦A座38楼",
          type: 2
        },
        {
          title: "成都第二分公司",
          name: "四川，成都",
          address: "成都市锦江区红星路三段IFS国际金融中心二号楼33层07室"
        },
        {
          title: "成都第三分公司",
          name: "四川，成都",
          address: "成都市成华区建设北路二段157号万科华茂广场16层"
        },
        {
          title: "成都第四分公司",
          name: "四川，成都",
          address: "成都市武侯区天仁路388号凯德天府17楼",
          status: 1
        },
        {
          title: "广州第一分公司",
          name: "广东，广州",
          address: "广州市天河区棠东东路47号潭州大厦",
          type: 2
        },
        {
          title: "广州第二分公司",
          name: "广东，广州",
          address: "广州市白云区石井街道聚源街50号欣凯科创园8号楼13层"
        },
        {
          title: "广州第三分公司",
          name: "广东，广州",
          address: "广州市海珠区布衣港电商产业园7栋"
        },
        {
          title: "广州第一子公司",
          name: "广东，广州",
          address: "广州市天河区棠东东路47号潭州大厦"
        },
        {
          title: "广州第二子公司",
          name: "广东，广州",
          address: "广州市天河区五山路371号之一中公教育大厦22楼2206-2208",
          status: 1
        },
        {
          title: "深圳分公司",
          name: "广东，深圳",
          address:
            "深圳市宝安区福海街道桥头社区宝安大道6093号中正财富大厦303～305～306室",
          type: 2,
          status: 1
        },
        {
          title: "武汉第一分公司",
          name: "湖北，武汉",
          address: "武汉市光谷金融港B6栋902室",
          type: 2
        },
        {
          title: "武汉第二分公司",
          name: "湖北，武汉",
          address: "武汉市武昌区德成国贸中心b座36楼",
          status: 1
        },
        {
          title: "南宁分公司",
          name: "广西，南宁",
          address: "广西南宁市西乡塘区科园大道77号汇丰大厦A座19层1901-1916",
          type: 2,
          status: 1
        },
        {
          title: "杭州第一分公司",
          name: "浙江，杭州",
          address: "杭州市滨江区江南大道3880号华荣时代大厦21楼2111-2112",
          type: 2
        },
        {
          title: "杭州第二分公司",
          name: "浙江，杭州",
          address: "杭州余杭区利尔达物联网大厦1号楼1002",
          status: 1
        },
        {
          title: "郑州分公司",
          name: "河南，郑州",
          address: "河南省郑州市金水区经三北路68号平安保险大厦1203",
          type: 2,
          status: 1
        },
        {
          title: "大连分公司",
          name: "辽宁，大连",
          address: "辽宁省大连市甘井子区高新街大连高新壹号大厦20楼",
          type: 2,
          status: 1
        },
        {
          title: "贵阳分公司",
          name: "贵州，贵阳",
          address: "贵阳南明区花果园国际中心3号楼B座2506",
          type: 2,
          status: 1
        },
        {
          title: "衡阳分公司",
          name: "湖南，衡阳",
          address: "衡阳市石鼓区中建国际大夏21004",
          type: 2,
          status: 1
        },
        {
          title: "西安分公司",
          name: "陕西，西安",
          address: "西安市高新区绿地领海大厦A座1501",
          type: 2,
          status: 1
        },
        {
          title: "南京分公司",
          name: "江苏，南京",
          address: "南京市建邺区云龙山路60号龙熙大厦12楼1204室",
          type: 2,
          status: 1
        },
        {
          title: "南昌分公司",
          name: "江西，南昌",
          address: "南昌市南昌县紫阳大道1199号紫晶国际广场写字楼20楼",
          type: 2,
          status: 1
        },
        {
          title: "苏州分公司",
          name: "江苏，苏州",
          address: "苏州市吴中区星海街189号恒宇广场B座503",
          type: 2,
          status: 1
        },
        {
          title: "青岛分公司",
          name: "山东，青岛",
          address: "青岛市市北区延吉路76号中海大厦2204",
          type: 2,
          status: 1
        },
        { title: "重庆分公司", name: "重庆", address: "", type: 2, status: 1 }
      ],
      courseImg: [
        "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/course01.png",
        "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/course02.png",
        "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/course03.png",
        "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/course04.png",
        "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/course05.png",
        "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/course06.png"
      ],
      honorImg: [
        "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/honor01.png",
        "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/honor02.png",
        "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/honor03.png",
        "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/honor04.png",
        "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/honor05.png",
        "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/honor06.png",
        "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/honor07.png",
        "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/honor08.png",
        "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/honor09.png",
        "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/honor10.png",
        "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/honor11.png",
        "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/honor12.png",
        "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/honor13.png",
        "http://www.tanzhouedu.com/templets/1/tzEDU//m/asset/images/honor14.png"
      ]
    },

    created: function() {},
    methods: {
      changeTab(index) {
        this.cur = index;
        this.itemImg = this.bannerImg[index];
      },
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
        window.location.href = url;
      }
    }
  });
</script>
