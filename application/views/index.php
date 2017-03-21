<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>达喀尔·上下学--让孩子出行更省心</title>
    <meta name="keywords" content="上下学，上下学专车，达喀尔上下学，接送孩子">
    <meta name="description" content="上下学--安全，准时，高品质，让孩子出行更省心">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta name="format-detection" content="telephone=no,email=no">
    <meta content="yes" name="apple-touch-fullscreen">
    <link rel="shortcut icon" href="" type="image/png">
    <script>!function(e,t){function i(){var t=n.getBoundingClientRect().width;t/m>540&&(t=540*m);var i=t/10;n.style.fontSize=i+"px",d.rem=e.rem=i}var a,r=e.document,n=r.documentElement,o=r.querySelector('meta[name="viewport"]'),l=r.querySelector('meta[name="flexible"]'),m=0,s=0,d=t.flexible||(t.flexible={});if(o){console.warn("将根据已有的meta标签来设置缩放比例");var p=o.getAttribute("content").match(/initial\-scale=([\d\.]+)/);p&&(s=parseFloat(p[1]),m=parseInt(1/s))}else if(l){var c=l.getAttribute("content");if(c){var u=c.match(/initial\-dpr=([\d\.]+)/),f=c.match(/maximum\-dpr=([\d\.]+)/);u&&(m=parseFloat(u[1]),s=parseFloat((1/m).toFixed(2))),f&&(m=parseFloat(f[1]),s=parseFloat((1/m).toFixed(2)))}}if(!m&&!s){var v=(e.navigator.appVersion.match(/android/gi),e.navigator.appVersion.match(/iphone/gi)),h=e.devicePixelRatio;m=v?h>=3&&(!m||m>=3)?3:h>=2&&(!m||m>=2)?2:1:1,s=1/m}if(n.setAttribute("data-dpr",m),!o)if(o=r.createElement("meta"),o.setAttribute("name","viewport"),o.setAttribute("content","initial-scale="+s+", maximum-scale="+s+", minimum-scale="+s+", user-scalable=no"),n.firstElementChild)n.firstElementChild.appendChild(o);else{var x=r.createElement("div");x.appendChild(o),r.write(x.innerHTML)}e.addEventListener("resize",function(){clearTimeout(a),a=setTimeout(i,300)},!1),e.addEventListener("pageshow",function(e){e.persisted&&(clearTimeout(a),a=setTimeout(i,300))},!1),"complete"===r.readyState?r.body.style.fontSize=12*m+"px":r.addEventListener("DOMContentLoaded",function(){r.body.style.fontSize=12*m+"px"},!1),i(),d.dpr=e.dpr=m,d.refreshRem=i,d.rem2px=function(e){var t=parseFloat(e)*this.rem;return"string"==typeof e&&e.match(/rem$/)&&(t+="px"),t},d.px2rem=function(e){var t=parseFloat(e)/this.rem;return"string"==typeof e&&e.match(/px$/)&&(t+="rem"),t}}(window,window.lib||(window.lib={}));</script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=KbYVkobh6YxXQqyFDm7INWyDhmVdwz34"></script>
    <link rel="stylesheet" href="<?php echo MOBILE_STATIC_HOST;?>/static/css/index.css?ver=20170308ddddxx">
</head>
<body>
    <div class="header">
        <div class="view header-inner global-padding">
            <a href="/" class="header-logo"></a>
            <div class="header-nav">
                <div class="header-nav-links">
                    <a href="/" class="header-nav-link selected">首页</a>
                    <a href="/faq" class="header-nav-link">服务FAQ</a>
                </div>
                <span href="#" class="button header-nav-button" id="buy-button">购买服务</span>
            </div>
        </div>
    </div>

    <div class="global-padding banner">
        <div class="view banner-inner">
            <div class="banner-pic"></div>
            <div class="banner-desc">
                <div class="banner-desc-inner">
                    <h4>让孩子出行更省心</h4>
                    <p><span>安全</span><span>准时</span><span>高品质</span></p>
                    <a class="button banner-button" id="show-video-intro" href="http://v.youku.com/v_show/id_XMjU1MTMyOTkxMg==.html" style="text-decoration:none;">观看视频介绍</a>
                </div>
            </div>
        </div>
    </div>

    <div class="view cases">
        <div class="cases-title">
            <p>已开通<br>学校</p>
        </div>
        <div class="cases-list" id="showcase">
            <div class='cases-list-con'>
                <span class="case-item" style="background-image:url(<?php echo IMG_HOST;?>/school/1.jpg)"></span>
                <span class="case-item" style="background-image:url(<?php echo IMG_HOST;?>/school/2.jpg)"></span>
                <span class="case-item" style="background-image:url(<?php echo IMG_HOST;?>/school/3.jpg)"></span>
                <span class="case-item" style="background-image:url(<?php echo IMG_HOST;?>/school/4.jpg)"></span>
                <span class="case-item" style="background-image:url(<?php echo IMG_HOST;?>/school/5.jpg)"></span>
                <span class="case-item" style="background-image:url(<?php echo IMG_HOST;?>/school/6.jpg)"></span>
                <span class="case-item" style="background-image:url(<?php echo IMG_HOST;?>/school/7.jpg)"></span>
                <span class="case-item" style="background-image:url(<?php echo IMG_HOST;?>/school/8.jpg)"></span>
                <span class="case-item" style="background-image:url(<?php echo IMG_HOST;?>/school/9.jpg)"></span>
                <span class="case-item" style="background-image:url(<?php echo IMG_HOST;?>/school/10.jpg)"></span>
                <span class="case-item" style="background-image:url(<?php echo IMG_HOST;?>/school/11.jpg)"></span>
                <span class="case-item" style="background-image:url(<?php echo IMG_HOST;?>/school/12.jpg)"></span>
            </div>
        </div>
    </div>

    <div class="view evaluate">
         <h4>在线快捷评估</h4>
         <div class="evaluate-control">
             <input type="tel" placeholder="手机号" name="phone" maxlength="14"/>
         </div>
         <div class="evaluate-control">
             <input type="text" placeholder="家庭住址" name="address" id="suggestHome"/>
         </div>
         <div class="evaluate-control">
             <input type="text" placeholder="学校名称" name="school" id="suggestSchool"/>
         </div>
         <div class="evaluate-control">
             <span class="button evaluate-button" id="evaluate-price-button">估算价格</span>
         </div>
         <div class="evaluate-help">
             <input type="checkbox" id="price-desc" style="display:none">
             <label for="price-desc">查看价格说明&nbsp;&gt;</label>
             <div class="evaluate-price">
                 <div class="evaluate-price-title">价格说明</div>
                 <p>服务费根据家庭住址与学校的距离而定：<br>15公里以内——¥1088／月<br>15-30公里——¥1288／月<br>30公里以上每增加5公里增加¥300/月</p>
             </div>
         </div>
         <div id="mapview"></div>
         <div id="searchHomeResultPanel" style="border:1px solid #C0C0C0;width:150px;height:auto; display:none;"></div>
    </div>

    <div class="features">
         <div class="feature">
            <div class="view">
                <p class="feature-title">上下学服务流程</p>
            </div>
            <div class="row feature-process">
                <div class="view global-padding">
                    <img class="feature-img" src="<?php echo MOBILE_STATIC_HOST;?>/static/imgs/feature-process2.png">
                </div>
            </div>
            <div class="evaluate-title" id="evaluate-title">
                <img src="<?php echo MOBILE_STATIC_HOST;?>/static/imgs/evaluate.png" />
                <div class="clear-both"></div>
            </div>
            <div class="row customer-messages" id="custumer-message">
                <div class="customer-messages-con clearfix" id="customer-messages-con">
                    <div class="customer-messages-con-box">
                        <div class="customer-message global-padding" id="customer-message">
                            <img src="<?php echo MOBILE_STATIC_HOST;?>/static/imgs/Annie.png">
                            <div class="customer-message-content">
                                <h4>Annie</h4>
                                <p>上下学专车真的让我们很放心，特别准时。我们家孩子觉得驾驶员叔叔特别好，很关心孩子！非常感谢你们细心的协调，把我们的需求放在第一。真的很少看见这么负责任的公司。</p>
                            </div>
                        </div>
                        <div class="customer-message global-padding">
                            <img src="<?php echo MOBILE_STATIC_HOST;?>/static/imgs/Lily.jpg">
                            <div class="customer-message-content">
                                <h4>Lily 欣</h4>
                                <p>上下学的车子特别新，非常干净，贴的标志也很漂亮，走在路上一眼就能看出来是他们的车。车里面还有空气净化器，这点很惊喜，解决了北京经常有雾霾的问题。</p>
                            </div>
                        </div>
                    </div>
                    <div class="customer-messages-con-box">
                        <div class="customer-message global-padding">
                            <img src="<?php echo MOBILE_STATIC_HOST;?>/static/imgs/Annie.png">
                            <div class="customer-message-content">
                                <h4>Annie</h4>
                                <p>上下学专车真的让我们很放心，特别准时。我们家孩子觉得驾驶员叔叔特别好，很关心孩子！非常感谢你们细心的协调，把我们的需求放在第一。真的很少看见这么负责任的公司。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="view feature">
            <p class="feature-title" style="background-color: #f9b62d">严格筛选司机</p>
            <img class="feature-img" src="<?php echo MOBILE_STATIC_HOST;?>/static/imgs/feature-driver.png">
        </div>
        <div class="view feature">
            <p class="feature-title">高端7座商务车</p>
            <img class="feature-img" src="<?php echo MOBILE_STATIC_HOST;?>/static/imgs/feature-bus.png">
        </div>
        <div class="view feature">
            <p class="feature-title" style="background-color: #694d96">车载空气净化器</p>
            <img class="feature-img" src="<?php echo MOBILE_STATIC_HOST;?>/static/imgs/feature-air-cleaner.png">
        </div>
        <div class="view feature">
            <p class="feature-title">上下学品牌</p>
            <img class="feature-img" src="<?php echo MOBILE_STATIC_HOST;?>/static/imgs/feature-brand.png">
        </div>
    </div>

    <div class="footer">
        <div class="view footer-inner">
            <div class="footer-email">
                <div class="footer-email-item">
                    <h4>商务合作</h4>
                    <p>zhangxinlin@dakarfleet.com</p>
                </div>
                <div class="footer-email-item">
                    <h4>市场合作</h4>
                    <p>zhangxinlin@dakarfleet.com</p>
                </div>
            </div>
            <div class="footer-contact">
                <img class="footer-contact-qrcode" src="<?php echo MOBILE_STATIC_HOST;?>/static/imgs/wx-qrcode.png"><!--
                --><div class="footer-contact-detail">
                    <a href='tel:4008-910-622' class="footer-tel-link">4008-910-622</a>
                    <p>微信关注【上下学】公众号</p>
                </div>
            </div>

            <p class="footer-copy">Copyright&copy;2017上下学版权所有</p>
        </div>
    </div>
</body>
<script src="<?php echo MOBILE_STATIC_HOST;?>/static/js/lib/iscroll.js"></script>
<script src="<?php echo MOBILE_STATIC_HOST;?>/static/js/lib/zepto.min.js"></script>
<script src="<?php echo MOBILE_STATIC_HOST;?>/static/js/lib/pgwmodal.min.js"></script>
<script src='<?php echo MOBILE_STATIC_HOST;?>/static/js/buy.js?ver=20170305272346'></script>
<script src='<?php echo MOBILE_STATIC_HOST;?>/static/js/index.js?ver=20170308272348'></script>
<script type="text/javascript">
    // 百度地图API功能
    function G(id) {
        return document.getElementById(id);
    }
    var map = new BMap.Map("mapview");
    map.centerAndZoom("北京",12);                   // 初始化地图,设置城市和地图级别。
    var achome = new BMap.Autocomplete(    //建立一个自动完成的对象
        {"input" : "suggestHome"
        ,"location" : map
    });
    achome.addEventListener("onhighlight", function(e) {  //鼠标放在下拉列表上的事件
    var str = "";
        var _value = e.fromitem.value;
        var value = "";
        if (e.fromitem.index > -1) {
            value = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
        }
        str = "FromItem<br />index = " + e.fromitem.index + "<br />value = " + value;

        value = "";
        if (e.toitem.index > -1) {
            _value = e.toitem.value;
            value = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
        }
        str += "<br />ToItem<br />index = " + e.toitem.index + "<br />value = " + value;
        G("searchHomeResultPanel").innerHTML = str;
    });

    var myValue;
    achome.addEventListener("onconfirm", function(e) {    //鼠标点击下拉列表后的事件
    var _value = e.item.value;
        myValue = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
        G("searchHomeResultPanel").innerHTML ="onconfirm<br />index = " + e.item.index + "<br />myValue = " + myValue;
        setPlace();
    });

    function setPlace(){
        map.clearOverlays();    //清除地图上所有覆盖物
        function myFun(){
            var pp = local.getResults().getPoi(0).point;    //获取第一个智能搜索的结果
            map.centerAndZoom(pp, 18);
            //map.addOverlay(new BMap.Marker(pp));    //添加标注
        }
        var local = new BMap.LocalSearch(map, { //智能搜索
          onSearchComplete: myFun
        });
        local.search(myValue);
    }

    var acschool = new BMap.Autocomplete(    //建立一个自动完成的对象
            {"input" : "suggestSchool"
            ,"location" : map
        });
        acschool.addEventListener("onhighlight", function(e) {  //鼠标放在下拉列表上的事件
        var str = "";
            var _value = e.fromitem.value;
            var value = "";
            if (e.fromitem.index > -1) {
                value = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
            }
            str = "FromItem<br />index = " + e.fromitem.index + "<br />value = " + value;

            value = "";
            if (e.toitem.index > -1) {
                _value = e.toitem.value;
                value = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
            }
            str += "<br />ToItem<br />index = " + e.toitem.index + "<br />value = " + value;
            G("searchHomeResultPanel").innerHTML = str;
        });

        var myValue2;
        acschool.addEventListener("onconfirm", function(e) {    //鼠标点击下拉列表后的事件
        var _value = e.item.value;
            myValue2 = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
            G("searchHomeResultPanel").innerHTML ="onconfirm<br />index = " + e.item.index + "<br />myValue = " + myValue2;
            setPlace2();
        });

        function setPlace2(){
            map.clearOverlays();    //清除地图上所有覆盖物
            function myFun(){
                var pp = local.getResults().getPoi(0).point;    //获取第一个智能搜索的结果
                map.centerAndZoom(pp, 18);
                //map.addOverlay(new BMap.Marker(pp));    //添加标注
            }
            var local = new BMap.LocalSearch(map, { //智能搜索
              onSearchComplete: myFun
            });
            local.search(myValue2);
        }

</script>
</html>