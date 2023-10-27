<!doctype html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<title>{sort:name}-{pboot:sitesubtitle}</title>
		
				<meta name="keywords" content="{pboot:pagekeywords}">
		<meta name="description" content="{pboot:pagedescription}">
		<meta name="format-detection" content="telephone=no" />
		<meta name="format-detection" content="address=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
		<meta name="renderer" content="webkit">
		<link rel="stylesheet" href="{pboot:sitetplpath}/template/default/css/a_reset.css">
		<link rel="stylesheet" href="{pboot:sitetplpath}/template/default/css/layui.css">
		<link rel="stylesheet" href="{pboot:sitetplpath}/template/default/css/font-awesome.min.css">
		<link rel="stylesheet" href="{pboot:sitetplpath}/template/default/css/a_style.css">
		<link rel="stylesheet" href="{pboot:sitetplpath}/template/default/css/a_aos.css">

		<script src="{pboot:sitetplpath}/template/default/js/a_jquery.js"></script>
		<script type="text/javascript" src="{pboot:sitetplpath}/template/default/js/a_miso.js"></script>
		<script src="{pboot:sitetplpath}/template/default/js/layui.js"></script>
		<!-- 放大效果 -->
		<link rel="stylesheet" href="{pboot:sitetplpath}/template/default/css/baguetteBox.css">
		<script src="{pboot:sitetplpath}/template/default/js/baguetteBox.js"></script>
		<!--<![endif]-->
		<!-- Compatible files -->
		<!--[if lt IE 9]>
		<link rel="stylesheet" href="/{pboot:sitetplpath}/template/default/css/a_ie8.css">
		<script src="/{pboot:sitetplpath}/template/default/js/a_ijr.js"></script>
		<![endif]-->

	</head>

	<body>

		<div class="a_body" id="miso_scroll">
						<!--============================头部 开始=============================-->
		
			<header class="header ">
				<!-- pc导航start -->
				<div class="layui-container">
					<div class="layui-row">
						<div class="layui-col-xs12">
							<div class="content">
								<a href="index.html" class="logo">
									<img src="{pboot:sitetplpath}/static/upload/image/20210908/1631067802124557.jpg" alt="logo">
								</a>
								<div class="right fr">

									<nav class="nav">
										<ul>
											<li class="nav_item  {pboot:if(0=='{sort:scode}')}on{/pboot:if}">
												<a href="/" class="name">首页</a>
											</li>
											
											{pboot:nav num=20 parent=0}
											<li
												class="nav_item   nav_li 
{pboot:if('[nav:scode]'=='{sort:tcode}')}on{/pboot:if}">
												<a href="[nav:link]" class="name">[nav:name]</a>
												{pboot:if([nav:soncount]>0)}
												<ul class="rd-menu rd-navbar-dropdown">
													{pboot:2nav num=20 parent=[nav:scode]}
													<li class="rd-dropdown-item">
														<a href="[2nav:link]">[2nav:name]</a>
													</li>
													{/pboot:2nav}
													
												</ul>
												{/pboot:if}
											</li>
											{/pboot:nav}
											
											
										</ul>
									</nav>

									<dl>
										<dd>
											<a>
												<div class="con">19957976208</div>
												<img src="{pboot:sitetplpath}/template/default/images/header_icon01.png" alt="">
											</a>
										</dd>
										<dd>
											<a class="btn" name="t3">
												<img src="{pboot:sitetplpath}/template/default/images/header_icon02.png" alt="">
											</a>
										</dd>
									</dl>

									<button class="rd-navbar-toggle toggle-original"
										data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
								</div>
								<div class="clear"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- pc导航end -->
			</header>
			<!-- wap导航start -->
			<div class="rd-navbar-main-element">
				<div class="rd-navbar-nav-wrap toggle-original-elements">
					<ul class="rd-navbar-nav">
						<li class="rd-nav-item rd-navbar--has-dropdown rd-navbar-submenu"><a class="rd-nav-link"
								href="/">首页</a>
						</li>
						
						{pboot:nav num=20 parent=0}
						<li
							class="rd-nav-item rd-navbar--has-dropdown rd-navbar-submenu ">
							<a class="rd-nav-link" href="[nav:link]">[nav:name]</a>
							<span class="rd-navbar-submenu-toggle"></span>
								{pboot:if([nav:soncount]>0)}
							<ul class="rd-menu rd-navbar-dropdown rd-navbar-open-right" style="">
									{pboot:2nav num=20 parent=[nav:scode]}
								<li
									class="rd-dropdown-item ">
									<a class="rd-dropdown-link" href="[2nav:link]">[2nav:name]</a>
								</li>
								
								{/pboot:2nav}
								
							</ul>
									{/pboot:if}
						</li>
							{/pboot:nav}

					</ul>
				</div>
			</div>
			<!-- wap导航end -->
			<!--============================头部 结束=============================-->


<section id="n_banner" class="n_banner"
	style=" background:url({pboot:sitetplpath}/static/upload/image/20210818/1629255328543866.jpg) center top no-repeat;">
	<div class="table">
		<div class="table_cell">
			<div class="mianbao aos-init aos-animate" aos="fade-up" aos-duration="1000">
				<h4>{sort:name}</h4>
				<h3></h3>
				<h6>{pboot:position separator=>> indextext=首页}</h6>
			</div>
		</div>
	</div>
</section>



<!-- pc分类导航 -->
<div class="sanji" aos="flip-up" aos-duration="800">
	<ul>
		
		{pboot:nav num=10 parent={sort:tcode}}
		<li >
			<a href="[nav:link]"><span>[nav:name]</span></a>
		</li>
		
		{/pboot:nav}
		
	</ul>
</div>
<!-- mb分类导航 -->
<section id="m_n_nav">
	<div id="n_n_title">
		<a id="bnt_back" href="javascript:history.go(-1)" class="iconfont"><svg t="1596445421567" class="icon"
				viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3172" width="200"
				height="200">
				<path
					d="M352.411 512.289l39.518 39.51799999 230.692 230.69200001 0.021-0.021a28.115 28.115 0 0 0 0.809 0.851c10.935 10.935 28.663 10.935 39.598 0 10.935-10.935 10.935-28.663 0-39.598-0.278-0.278-0.564-0.545-0.85099999-0.809l0.02099999-0.021L431.528 512.21l231.94-231.94c10.935-10.935 10.935-28.663 0-39.598s-28.663-10.935-39.59799999 0L352.332 512.21l0.079 0.079z"
					p-id="3173"></path>
			</svg>
		</a>
		<h1>新闻中心</h1>
		<div id="bnt_sub_nav" class="iconfont"><svg t="1596445393980" class="icon" viewBox="0 0 1024 1024" version="1.1"
				xmlns="http://www.w3.org/2000/svg" p-id="3047" width="200" height="200">
				<path
					d="M276.8856842041015 70.16203155517582c47.26095886230469 0 94.44232177734374 0.4758453369140625 141.78201141357422 0C457.4421691894531 69.7657821655273 475.5225616455079 89.98574829101562 475.6800231933593 127.09649353027345c0.23792266845703125 98.24821929931642 0.23792266845703125 196.25765075683594-0.3166534423828125 294.34667816162107-0.31751861572265627 35.68320922851562-20.458753967285155 54.0006591796875-54.87275390625 54.238581848144534-98.16862335205077 0.5554412841796875-196.33724670410155 0.31751861572265627-294.5058700561524-0.3166534423828125C88.71653900146487 475.1263122558594 69.368667602539 456.09595947265626 69.6057250976562 417.6372741699219 69.84451293945312 321.2924362182617 69.84451293945312 225.10679016113284 69.28907165527346 128.682356262207 69.05114898681643 87.21027221679691 89.5877685546875 69.44826354980472 129.6331817626953 69.84451293945312c49.08474426269531 0.6350372314453125 98.16862335205077 0.23792266845703125 147.25250244140625 0.31751861572265627zM757.8165100097657 69.28993682861324c45.436308288574224 0 90.87348175048827 0.4758453369140625 136.30979003906248-0.15919189453125 39.96581726074219-0.3962493896484375 60.899551391601555 17.049105834960937 60.661628723144524 58.6795166015625-0.4758453369140625 96.34483795166017-0.4758453369140625 192.68967590332034-0.15832672119140626 289.1132446289063 0.15832672119140626 41.313757324218756-21.092926025390625 58.996170043945305-60.97914733886719 58.91743927001953-94.44145660400392-0.15919189453125-189.0412399291992-0.079595947265625-283.64188842773433 0.15832672119140626-43.45419616699219 0.079595947265625-62.167895507812496-22.123347473144534-61.85124206542968-64.62671813964842 0.4758453369140625-92.69640197753905 0.23878784179687504-185.4732650756836-0.07873077392578126-278.2492630004883-0.079595947265625-42.18585205078125 18.23785400390625-64.23046875 62.48541412353516-63.199182128906244 49.08387908935546 1.1896133422851562 98.16862335205077 0.23792266845703125 147.25250244140625 0.23792266845703125V69.28993682861324zM268.0046798706055 549.109880065918c47.41928558349609 0 94.75897521972655 0.7933639526367188 142.17826080322266-0.15832672119140626 42.34417877197265-0.951690673828125 65.57754364013671 16.33447265625 65.41921691894532 60.81995544433594-0.31751861572265627 94.75897521972655-0.15919189453125 189.59668121337893 0 284.3565216064453 0.07873077392578126 39.964086914062506-17.76200866699219 60.74035949707032-59.63120727539063 60.34324493408203-96.66149139404297-0.8720947265625001-193.24425201416017-0.792498779296875-289.90574340820314-0.15832672119140626-39.25204925537109 0.23792266845703125-56.45948181152343-19.189544677734375-56.45948181152343-56.85486602783203 0-96.6623565673828 0.15919189453125-193.32384796142577 0.15919189453125-289.74828186035154 0-41.47208404541016 21.251252746582033-59.23409271240235 61.454127502441416-58.52032470703125 45.594635009765625 0.6341720581054687 91.19100036621094-0.079595947265625 136.78563537597657-0.079595947265625zM954.0741607666015 753.3764404296874c0 49.08474426269531-0.079595947265625 98.16862335205077 0 147.17377166748048 0.079595947265625 35.68320922851562-17.286163330078125 53.76273651123047-53.28602600097656 53.60440979003906-98.089892578125-0.079595947265625-196.3381118774414-0.15919189453125-294.42713928222656 0.15832672119140626-38.29949340820312 0.15832672119140626-57.48990325927734-18.397045898437497-57.56863403320313-56.22069396972657-0.3962493896484375-96.42356872558594-0.3962493896484375-192.68967590332034-0.31751861572265627-288.9549179077149 0.079595947265625-40.04454803466797 19.74498596191406-60.2653793334961 60.42370605468751-60.18578338623046 96.26524200439452 0.15832672119140626 192.68967590332034 0.079595947265625 288.9549179077149 0.079595947265625 38.062435913085935 0.07873077392578126 56.696539306640624 18.87202606201172 56.4586166381836 57.172384643554686-0.4758453369140625 49.163475036621094-0.23792266845703125 98.16862335205077-0.23792266845703125 147.17290649414062z"
					p-id="3048"></path>
			</svg></div>
	</div>
	<div id="sub_nav_content" style=" display:block">
		<dl>
					{pboot:nav num=10 parent={sort:tcode}}
			<dt >
				<a href="[nav:link]">[nav:name]</a>
			</dt>
				{/pboot:nav}
			
		</dl>
	</div>
</section>



<div class="clear"></div>
<!--============================主体 开始=============================-->
<section class="n_container">
	<section class="n_news_detail">
		<div class="layui-container">
			<div class="layui-row">
				<div class="layui-col-xs12">
					<div class="left">
						<div class="title">
							<div class="ar_title">
								<h3>{content:title}</h3>
								<h6><img src="{pboot:sitetplpath}/template/default/images/time.png" alt="{content:title}">{content:date style=Y-m-d}</h6>
							</div>
						</div>

						<div class="ar_article">
							{content:content}
						</div>

						<section class="dibu">
							<div class="end">end</div>
						</section>
						<section id="ar_fot01">
							<h1 class="fl highlight">
								<span>上一篇：</span>
								<a href="javascript:;">{content:precontent} </a>
							</h1>
							<h1 class="fr highlight">
								<span>下一篇：</span>
								{content:nextcontent}
							</h1>
							<div class="clear"></div>
						</section>
					</div>

					<div class="right">
						<div class="sticky">
							<div class="fl00 fl02">
								<div class="title">
									<h3><img src="{pboot:sitetplpath}/template/default/images/line.png" alt="">推荐新闻</h3>
								</div>
								<ul>
									{pboot:list scode=2 num=2 order=date}
									<li>
										<a href="50.html">
											<div class="img">
												<img src="[list:ico]" alt="[list:title len=18]">
											</div>
											<div class="con">
												<h4>[list:title len=18]</h4>
												<p>[list:content drophtml=1 lencn=150]</p>
												<span>[list:date style=Y-m-d]</span>
											</div>
										</a>
									</li>
									
									{/pboot:list}
									
								</ul>
							</div>
							<div class="fl00 fl03">
								<ul>
									
								</ul>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</section>
</section>

<script>
	$('.fl02 ul').miso({
		autoplaySpeed: 4000,
		autoplay: true,
		speed: 800,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		fade: true,
		touchThreshold: 10,
		pauseOnHover: true,
		waitForAnimate: false,
		focusOnSelect: true,
		cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)'
	});
</script>
<style>body {
		overflow: visible;
	}
</style>

<!--============================主体 结束=============================-->
<!--============================底部 开始=============================-->

<div class="tc1">
	<div class="tc" name="t3">
		<div class="tc-box">
			<h3 class="imgContainer">
				<img src="{pboot:companyweixin}" alt="">
				<span class="scanMask"></span>
			</h3>
			<h5>微信咨询</h5>
		</div>
		<div class="tc-bg"></div>
	</div>
</div>

<!-- 底部strat -->
<footer>
	<div class="fl01">
		<div class="layui-container">
			<div class="layui-row">
				<div class="layui-col-xs12">

					<div class="left fl">
						<h3>{pboot:companyname} </h3>
						<div class="con">
							<h4><img src="{pboot:sitetplpath}/template/default/images/footer_tel.png" alt="">服务热线</h4>
							<h2><span>{pboot:companymobile}</span></h2>
						</div>
						<p>公司地址：{pboot:companyaddress}
							<a href="JavaScript(0);"
								target="_blank">
								<img src="{pboot:sitetplpath}/template/default/images/footer_locol.png" alt="">
							</a>
						</p>
					</div>

					<div class="right fr">
						<div class="img fr">
							<img src="{pboot:companyweixin}" alt="官方微信">
						</div>
						<div class="con fr">
							<h3><big>Contact us</big>关注我们</h3>
							<h4>关注官方微信</h4>
							<h5>扫描二维码 ● 了解更多信息</h5>
						</div>
						<div class="clear"></div>
						<div class="p">
							<p>{pboot:sitecopyright}
								
								<a href="https://beian.miit.gov.cn/" target="_blank">{pboot:siteicp}</a>
								
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<div class="container10">
	<div class="layui-container">
		<div class="layui-row">
			<div class="layui-col-xs12">
				<div class="nav01">友情链接：</div>
				<ul class="ul slow height">
                    {pboot:link gid=1 num=300}
                    <li>
                    	<a href="[link:link]" target="_blank">[link:name]</a> |
                    </li>
                    {/pboot:link}
                    
				</ul>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>

<!--============================底部 结束=============================-->

</div>
<div class="rolling-top"><span><i></i></span>
	<h6>返 回 顶 部</h6>
</div>

<!--============================动画 开始=============================-->

<script src="{pboot:sitetplpath}/template/default/js/a_style.js"></script>

<script src="{pboot:sitetplpath}/template/default/js/a_aos.js"></script>
<script>
	AOS.init({
		easing: 'ease-out-back',
		duration: 600,
	});
</script>

<!--============================动画 结束=============================-->
<!-- 放大效果 -->
<script>
	baguetteBox.run('.gallery', {
		// 配置参数
		buttons: Boolean, //是否显示导航按钮。
		noScrollbars: false, //是否在显示时隐藏滚动条。
		titleTag: true, //是否使用图片上的title属性作为图片标题
		async: false, //是否异步加载文件。

		afterShow: function() { //显示遮罩层之后的回调函数。   
			$(".pressing").fadeIn();
		},
		afterHide: function() { //隐藏遮罩层之后的回调函数。 
			$(".pressing").fadeOut();
		}
		//preload:5 预加载多少个文件。
		// onChange: function(currentIndex, imagesCount){} 图片改变时的回调函数 
		// overlayBackgroundColor:'rgba(0,0,0,0.8)' 遮罩层的背景颜色
	});
</script>

</body>
</html>

<?php return array (
  0 => '/Applications/MAMP/htdocs/template/default/html/header.html',
  1 => '/Applications/MAMP/htdocs/template/default/html/headNav.html',
  2 => '/Applications/MAMP/htdocs/template/default/html/pcPageBanner.html',
  3 => '/Applications/MAMP/htdocs/template/default/html/footer.html',
); ?>