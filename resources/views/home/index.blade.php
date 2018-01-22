@extends('home.layouts.master')

@section('banner')
    <div id="banner">
        <div class="item" style="background-image: url(./assets/images/project/banner-index-1.png);">
            <div class="txt">
                <!--<p class="p1">打造中国一流的工程代建综合服务商 </p>-->
                <!--<p class="p2">To build China's first-class agent management services integrated service providers </p>-->
                <a href="#" class="more"></a>
            </div>
        </div>
        <div class="item"
             style="background-image: url(./assets/images/project/banner-index-2.png);">
            <div class="txt">
                <!--<p class="p1">打造中国一流的工程代建综合服务商 </p>-->
                <!--<p class="p2">To build China's first-class agent management services integrated service providers </p>-->
                <a href="#" class="more"></a>
            </div>
        </div>
        <div class="item" style="background-image: url(./assets/images/project/banner-index-3.png);">
            <div class="txt">
                <!--<p class="p1">打造中国一流的工程代建综合服务商 </p>-->
                <!--<p class="p2">To build China's first-class agent management services integrated service providers </p>-->
                <a href="#" class="more"></a>
            </div>
        </div>
        <div class="item" style="background-image: url(./assets/images/project/banner-index-4.png);">
            <div class="txt">
                <!--<p class="p1">打造中国一流的工程代建综合服务商 </p>-->
                <!--<p class="p2">To build China's first-class agent management services integrated service providers </p>-->
                <a href="#" class="more"></a>
            </div>
        </div>
        <div class="item" style="background-image: url(./assets/images/project/banner-index-5.png);">
            <div class="txt">
                <!--<p class="p1">打造中国一流的工程代建综合服务商 </p>-->
                <!--<p class="p2">To build China's first-class agent management services integrated service providers </p>-->
                <a href="#" class="more"></a>
            </div>
        </div>
    </div>
@endsection
@section('content')

    <!--资讯中心 start-->
    <style>
        .section-index-2 .list {
            margin-left: 0;
        }

        .section-index-2 .news-list {
            float: left;
            width: 32%;
            margin-right: 10px;
            margin-left: 0;
        }

        .section-index-2 .news-list h3 {
            font-size: 18px;
            color: #333;
            border-bottom: 1px solid #ddd;
            line-height: 45px;
            border-left: 4px solid #2e68d4;
            padding-left: 20px;
        }

        .section-index-2 .news-list h3 span {
            float: right;
        }

        .section-index-2 .news-list li {
            float: none;
            width: 100%;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
            /*height: 50px;*/
            /*line-height: 50px;*/
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

        .section-index-2 .news-list li a {
            font-size: 14px;
            color: #333;
            display: inline-block;
            line-height: 30px;
        }

        @media only screen and (max-width: 1023px) {
            .section-index-2 .news-list {
                width: 100%;
                padding-left: 10px;
                padding-right: 10px;
            }
        }
    </style>
    <div class="bd">
        <div class="section-index-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
            <h2 class="g-tit-1">
                <p class="p1">资讯中心</p>
                <p class="p2">news</p>
            </h2>
            <div class="wp">
                <div class="list">
                    <div class="news-list">
                        <h3><span><a href="../../xwdt/hydt/">更多&gt;&gt;</a></span>行业新闻</h3>
                        <ul>
                            <li><a href="/html/17094329.html" target="_blank" title="从2016年建筑业改革看2017年行业发展形势">从2016年建筑业改革看2017年行业发展形势</a>
                            </li>
                            <li><a href="/html/051948137.html" target="_blank"
                                   title="2017年，中国建筑业的十大猜想">2017年，中国建筑业的十大猜想</a>
                            </li>
                            <li><a href="/html/59748311.html" target="_blank" title="营改增后施工企业税负升高，可能是因为这些问题没搞懂！">营改增后施工企业税负升高，可能是因为这些问题没搞懂！</a>
                            </li>
                            <li><a href="/html/402695850.html" target="_blank" title="住房和城乡建设部：北京市建筑业企业资质问答汇总">住房和城乡建设部：北京市建筑业企业资质问答汇总</a>
                            </li>
                            <li><a href="/html/58206380.html" target="_blank"
                                   title="北京市人民政府办公厅关于印发市发展改革委等部门制定的《北京市新增产业的禁止和限制目录(2015年版)》的通知">北京市人民政府办公厅关于印发市发展改革委等部门制定的《北京市新增产业的禁止和限制目录(2015年版)》的通知</a>
                            </li>
                            <li><a href="/html/2871361856.html" target="_blank" title="关于尽快换发建筑业企业新版资质证书的通知">关于尽快换发建筑业企业新版资质证书的通知</a>
                            </li>
                        </ul>
                    </div>
                    <div class="news-list">
                        <h3><span><a href="../../xwdt/hydt/">更多&gt;&gt;</a></span>行业新闻</h3>
                        <ul>
                            <li><a href="/html/17094329.html" target="_blank" title="从2016年建筑业改革看2017年行业发展形势">从2016年建筑业改革看2017年行业发展形势</a>
                            </li>
                            <li><a href="/html/051948137.html" target="_blank"
                                   title="2017年，中国建筑业的十大猜想">2017年，中国建筑业的十大猜想</a>
                            </li>
                            <li><a href="/html/59748311.html" target="_blank" title="营改增后施工企业税负升高，可能是因为这些问题没搞懂！">营改增后施工企业税负升高，可能是因为这些问题没搞懂！</a>
                            </li>
                            <li><a href="/html/402695850.html" target="_blank" title="住房和城乡建设部：北京市建筑业企业资质问答汇总">住房和城乡建设部：北京市建筑业企业资质问答汇总</a>
                            </li>
                            <li><a href="/html/58206380.html" target="_blank"
                                   title="北京市人民政府办公厅关于印发市发展改革委等部门制定的《北京市新增产业的禁止和限制目录(2015年版)》的通知">北京市人民政府办公厅关于印发市发展改革委等部门制定的《北京市新增产业的禁止和限制目录(2015年版)》的通知</a>
                            </li>
                            <li><a href="/html/2871361856.html" target="_blank" title="关于尽快换发建筑业企业新版资质证书的通知">关于尽快换发建筑业企业新版资质证书的通知</a>
                            </li>
                        </ul>
                    </div>
                    <div class="news-list">
                        <h3><span><a href="../../xwdt/hydt/">更多&gt;&gt;</a></span>行业新闻</h3>
                        <ul>
                            <li><a href="/html/17094329.html" target="_blank" title="从2016年建筑业改革看2017年行业发展形势">从2016年建筑业改革看2017年行业发展形势</a>
                            </li>
                            <li><a href="/html/051948137.html" target="_blank"
                                   title="2017年，中国建筑业的十大猜想">2017年，中国建筑业的十大猜想</a>
                            </li>
                            <li><a href="/html/59748311.html" target="_blank" title="营改增后施工企业税负升高，可能是因为这些问题没搞懂！">营改增后施工企业税负升高，可能是因为这些问题没搞懂！</a>
                            </li>
                            <li><a href="/html/402695850.html" target="_blank" title="住房和城乡建设部：北京市建筑业企业资质问答汇总">住房和城乡建设部：北京市建筑业企业资质问答汇总</a>
                            </li>
                            <li><a href="/html/58206380.html" target="_blank"
                                   title="北京市人民政府办公厅关于印发市发展改革委等部门制定的《北京市新增产业的禁止和限制目录(2015年版)》的通知">北京市人民政府办公厅关于印发市发展改革委等部门制定的《北京市新增产业的禁止和限制目录(2015年版)》的通知</a>
                            </li>
                            <li><a href="/html/2871361856.html" target="_blank" title="关于尽快换发建筑业企业新版资质证书的通知">关于尽快换发建筑业企业新版资质证书的通知</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--资讯中心end-->

    <!--成功案例 start-->
    <style>
        .relative {
            position: relative !important;
        }

        .absolute {
            position: absolute !important;
        }

        .serviceSlid {
            z-index: 1;
            height: 600px;
        }

        .serviceSlid ul li {
            display: none;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            /*height: 600px;*/
        }

        .serviceSlid ul li img {
            display: block;
            width: 100%;
        }

        .serviceSlid ul li .txtBox {
            position: absolute;
            left: 0;
            bottom: 250px;
            display: none;
            z-index: 2;
            color: #fff;
            width: 100%;
        }

        .serviceSlid ul li .txtBox h2 {
            font-size: 25px;
            margin-left: 20px;
        }

        .serviceSlid ul li .txtBox h3 {
            font-size: 35px;
            opacity: 0.6;
            font-family: 'HelveticaNeueLTPro';
            line-height: 1;
            margin-left: 20px;
            text-transform: uppercase;
        }

        .serviceList {
            left: 0;
            bottom: 0px;
            z-index: 2;
            background-color: #818181;
        }

        .serviceList ul {
            width: 100%;
        }

        .serviceList ul li {
            position: relative;
            float: left;
            width: 25%;
            color: #fff;
        }

        .serviceList ul li:after {
            content: "";
            position: absolute;
            display: none;
            right: 0;
            top: 50%;
            width: 1px;
            height: 25px;
            margin-top: -25px;
        }

        .serviceList ul li .box {
            padding: 20px;
        }

        .serviceList ul li a {
            color: #fff;
        }

        .serviceList ul li a:hover {
            color: #fff !important;
        }

        .serviceList ul li.cur {
            background-color: #999;
        }

        .serviceList ul li h2 {
            font-size: 20px;
        }

        .serviceList ul li h2 .icon {
            display: block;
            width: 38px;
            height: 38px;
            margin-bottom: 5px;
        }

        .serviceList ul li h2 .consulting {
            background-position: -4px -33px;
        }

        .serviceList ul li h2 .proxy {
            background-position: -49px -33px;
        }

        .serviceList ul li h2 .financial {
            background-position: -94px -33px;
        }

        .serviceList ul li h2 .assets {
            background-position: -140px -33px;
        }

        .serviceList ul li .txtBox {
            font-size: 14px; /*height:44px;*/
            overflow: hidden;
        }

        .serviceList .detail {
            display: block;
            width: 40px;
            height: 19px;
            line-height: 1.6;
            overflow: hidden;
            border: none;
            padding: 0;
            text-align: left;
            color: #fff !important;
        }

        .serviceList .detail:hover {
            background: none;
            color: #D91E17 !important;
        }

        .serviceList .detail .icon {
            display: block;
            width: 3px;
            height: 5px;
            margin: 7px 0;
            background-position: -180px 0;
            position: relative;
            top: auto;
            right: auto;
        }

        .indexTitle {
            left: 0;
            top: 30px;
            z-index: 8;
            color: #fff;
            width: 100%;
            text-transform: uppercase;
        }

        .indexTitle h2 {
            font-size: 28px;
            font-family: 'HelveticaNeueLTPro';
            margin-left: 20px;
            line-height: 1;
        }

        .indexTitle h3 {
            font-size: 24px;
            margin-left: 20px;
            line-height: 1;
        }

        @media (min-width: 1200px) {
            .page {
                overflow: hidden;
            }

            .indexTitle h2 {
                font-size: 28px;
            }

            .indexTitle h3 {
                font-size: 24px;
            }

            .content {
                color: #fff;
                width: 1200px;
            }

            .service .content {
                width: 100%;
            }

            .serviceSlid, .serviceSlid > ul, .serviceSlid > ul > li {
                height: 750px;
            }

            .serviceSlid ul li .txtBox h2 {
                font-size: 28px;
            }

            .serviceSlid ul li .txtBox h3 {
                font-size: 24px;
            }

            .serviceList ul li .txtBox {
                font-size: 16px;
            }
        }

        @media only screen and (max-width: 1023px) {
            .serviceList ul li {
                width: 100%;
            }

            .serviceList.absolute {
                position: relative !important;
            }
        }

        @media only screen and (max-width: 959px) {
            .serviceSlid {
                height: 230px;
            }

            .serviceSlid {
                /*display: none;*/
            }

            .indexTitle {
                /*display: none;*/
            }
        }
    </style>
    <script>
        $(function () {
            /*** 成功案例 ***/
            $('.serviceSlid').find('li').eq(0).show();
            $('.serviceList').find('li').each(function (index, element) {
                $(this).hover(function () {
                    $(this).addClass('cur').siblings().removeClass('cur');
                    $('.serviceSlid').find('li').eq(index).fadeIn().siblings().fadeOut();
                }, function () {
                    /*$(this).removeClass('cur');*/
                })
            });

        });
    </script>
    <div class="wp page relative service content ofh fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
        <div class="indexTitle absolute">
            <div class="content">
                <h2>our Services</h2>
                <h3>我们的服务</h3>
            </div>
        </div>
        <div class="serviceSlid relative">
            <ul class="ofh w100">
                <li style="display: none;">
                    <img class="show" src="./assets/images/project/casus-1.png" alt="我们的服务">
                    <div class="txtBox">
                        <div class="content">
                            <h3></h3>
                            <h2></h2>
                        </div>
                    </div>
                </li>
                <li style="display: none;">
                    <img class="show" src="./assets/images/project/casus-2.png" alt="我们的服务">
                    <div class="txtBox">
                        <div class="content">
                            <h3></h3>
                            <h2></h2>
                        </div>
                    </div>
                </li>
                <li style="display: none;">
                    <img class="show" src="./assets/images/project/casus-3.png" alt="我们的服务">
                    <div class="txtBox">
                        <div class="content">
                            <h3></h3>
                            <h2></h2>
                        </div>
                    </div>
                </li>
                <li style="display: none;">
                    <img class="show" src="./assets/images/project/casus-4.png" alt="我们的服务">
                    <div class="txtBox">
                        <div class="content">
                            <h3></h3>
                            <h2></h2>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="serviceList absolute w100">
            <div class="content relative ofh">
                <ul class="ofh">
                    <li class="cur">
                        <div class="box">
                            <h2 class="mb-10"><i class="icon consulting"></i>顾问咨询</h2>
                            <div class="txtBox">深耕15年，布局22个分公司，业绩持续领先，每年执行顾问、策划经典项目1000余个。</div>
                        </div>
                    </li>
                    <li class="">
                        <div class="box">
                            <h2 class="mb-10"><i class="icon proxy"></i>代理营销</h2>
                            <div class="txtBox">2014年代理销售额成功突破3218亿，进驻1000余个案场，为30万个家庭实现置业梦。</div>
                        </div>
                    </li>
                    <li class="">
                        <div class="box">
                            <h2 class="mb-10"><i class="icon financial"></i>金融服务</h2>
                            <div class="txtBox">作为全国性专业持牌的互联网+金融机构，通过线上线下相结合的方式，在全国范围内，为有房一族提供短期资金融通的服务。</div>
                        </div>
                    </li>
                    <li class="">
                        <div class="box">
                            <h2 class="mb-10"><i class="icon assets"></i>资产服务</h2>
                            <div class="txtBox">布局全国16城，落地实践大资管集成服务模式，在管全委托项目93个，总面积达752万㎡。</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--成功案例 end-->

    <!--资质荣誉 start-->
    <style>
        #honor_list {
            width: 100%;
            height: 360px;
            background: #333;
            margin-top: 50px;
            overflow: hidden;
            min-width: 1200px;
        }

        #honor_list .honor_show {
            height: 150px;
            font-size: 40px;
            color: #eee;
            margin: 0 auto;
            line-height: 150px;
            text-align: center;
        }

        #honor_list .honor_show .en {
            background-color: #eee;
            color: #333;
            padding: 0 12px;
        }

        .picMarquee-left {
            width: 1190px;
            position: relative;
            margin: 0 auto;
        }

        .picMarquee-left .hd {
            position: relative;
        }

        .picMarquee-left .hd .prev, .picMarquee-left .hd .next {
            display: block;
            width: 40px;
            height: 156px;
            cursor: pointer;
            position: absolute;
        }

        .picMarquee-left .hd .next {
            background: url("./assets/images/next.png") no-repeat;
            top: 15px;
            left: 27px;
        }

        .picMarquee-left .hd .prev {
            background: url("./assets/images/prev.png") no-repeat;
            top: 15px;
            right: 10px;
        }

        .picMarquee-left .hd .prevStop {
            background-position: -60px 0;
        }

        .picMarquee-left .hd .nextStop {
            background-position: -60px -50px;
        }

        .picMarquee-left .bd {
            padding: 10px 50px 10px 113px;
            width: 1060px;
        }

        .picMarquee-left .bd ul {
            overflow: hidden;
            zoom: 1;
        }

        .picMarquee-left .bd ul li {
            margin: 0 8px;
            float: left;
            _display: inline;
            overflow: hidden;
            text-align: center;
        }

        .picMarquee-left .bd ul li .pic {
            text-align: center;
        }

        .picMarquee-left .bd ul li .pic img {
            width: 220px;
            height: 160px;
            display: block;
            padding: 2px;
            border: 1px solid #ccc;
        }

        .picMarquee-left .bd ul li .pic a:hover img {
            border-color: #999;
        }

        .picMarquee-left .bd ul li .title {
            line-height: 24px;
        }

        @media only screen and (max-width: 959px) {
            #honor_list {
                display: none;
            }
        }
    </style>
    <script src="./assets/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript">
        $(function () {
            jQuery(".picMarquee-left").slide({
                mainCell: ".bd ul",
                autoPlay: true,
                effect: "leftMarquee",
                vis: 4,
                interTime: 50
            });
        });
    </script>
    <div id="honor_list">
        <div class="wp honor_show"><strong class="zh_cn">资质荣誉</strong>&nbsp;<span class="en">Honors</span></div>
        <div class="wp picMarquee-left">
            <div class="hd">
                <a class="next"></a>
                <a class="prev"></a>
            </div>
            <div class="bd">
                <ul class="picList">
                    <li>
                        <div class="pic"><img src="./assets/images/project/honor-1.png"></div>
                    </li>
                    <li>
                        <div class="pic"><img src="./assets/images/project/honor-2.png"></div>
                    </li>
                    <li>
                        <div class="pic"><img src="./assets/images/project/honor-3.png"></div>
                    </li>
                    <li>
                        <div class="pic"><img src="./assets/images/project/honor-4.png"></div>
                    </li>
                    <li>
                        <div class="pic"><img src="./assets/images/project/honor-5.png"></div>
                    </li>
                    <li>
                        <div class="pic"><img src="./assets/images/project/honor-6.png"></div>
                    </li>
                    <li>
                        <div class="pic"><img src="./assets/images/project/honor-7.png"></div>
                    </li>

                    <li>
                        <div class="pic"><img src="./assets/images/project/honor-8.png"></div>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <style>
        .links {
            overflow: hidden;
            width: 100%;
            background: #eff2f5;
            margin-top: 50px;
            min-width: 1200px;
        }

        .link {
            width: 1200px;
            margin: 0 auto;
            display: block;
        }

        .link .zh_cn {
            color: red;
        }

        .link .en {
            color: #eee;
            background-color: #333;
            padding: 0 12px;
        }

        .link .title {
            font-size: 40px;
            text-align: center;
            padding: 50px 0;
        }

        .link ul {
            padding-bottom: 80px;
        }

        .link ul li {
            float: left;
        }

        .link ul li a {
            font-size: 14px;
            color: #333;
            line-height: 30px;
            padding: 0 15px;
        }

        .link ul li a:hover {
            color: #c8161d;
        }

        @media only screen and (max-width: 959px) {
            .links .link {
                display: none;
            }
        }
    </style>
    <div class="links">
        <div class="link">
            <div class="title"><strong class="zh_cn">友情链接</strong>&nbsp;<span class="en">Links</span></div>
            <ul>
                <li><a href="http://www.bjxch.gov.cn/index.ycs" target="_blank">北京西城区</a>|</li>
                <li><a href="http://www.bjjs.gov.cn/publish/portal0/" target="_blank">北京市住房和城乡建设委员</a>|</li>
                <li><a href="http://jsw.bjdch.gov.cn/n5687274/n5723322/index.html" target="_blank">北京市东城区建委</a>|</li>
                <li><a href="http://www.hdjw.gov.cn/" target="_blank">北京市海淀区建委</a>|</li>
                <li><a href="http://www.bjchy.gov.cn/" target="_blank">北京市朝阳区建委</a>|</li>
                <li><a href="http://www.bjmtg.gov.cn" target="_blank">北京门头沟区建委</a>|</li>
                <li><a href="http://www.bjft.gov.cn" target="_blank">北京市丰台区建委</a>|</li>
                <li><a href="http://www.bjjs.gov.cn" target="_blank">北京市崇文区建委</a>|</li>
                <li><a href="http://www.bjshy.gov.cn" target="_blank">北京市顺义区建委</a>|</li>
                <li><a href="http://www.bjchp.gov.cn/publish/portal0" target="_blank">北京市昌平区建委</a>|</li>
                <li><a href="http://www.bjhr.gov.cn" target="_blank">北京市怀柔区建委</a>|</li>
                <li><a href="http://www.bjmy.gov.cn/" target="_blank">北京市密云区建委</a>|</li>
                <li><a href="http://www.bjtzh.gov.cn/portal/index.htm" target="_blank">北京市通州区建委</a>|</li>
                <li><a href="http://www.bjfsh.gov.cn" target="_blank">北京市房山区建委</a>|</li>
            </ul>
        </div>
    </div>
@endsection
