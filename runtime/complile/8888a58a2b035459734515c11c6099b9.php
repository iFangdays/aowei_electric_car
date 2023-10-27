<!doctype html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<title>{pboot:sitetitle}</title>
		
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
									<img src="{pboot:sitelogo}" alt="logo">
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
												<div class="con">{pboot:companymobile}</div>
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

<!-- PC banner strat -->
<section class="banner ar_web">
	<ul class="slider">
		{pboot:slide num=5 gid=1}
		<li style="background:url('[slide:src]') center center no-repeat">
			<img src="{pboot:sitetplpath}/static/upload/image/20220423/1650692976509517.jpg" alt="" class="layui-img-responsive">
		</li>
		
		{/pboot:slide}
		
	</ul>
</section>
<!-- PC banner end -->
<!-- Wap banner strat -->
<section class="banner ar_wap">
	<ul class="slider">
		{pboot:slide num=5 gid=1}
		<li>
			<img src="[slide:src]" alt="" class="layui-img-responsive">
		</li>
		
			{/pboot:slide}
	</ul>
</section>
<!-- Wap banner end -->
<script>
	$('.banner ul').miso({
		autoplaySpeed: 4000,
		autoplay: true,
		speed: 1000,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		touchThreshold: 10,
		pauseOnHover: false,
		cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
		focusOnSelect: true
	});
</script>

<script>
	var css = function(t, s) {
		s = document.createElement('style');
		s.innerText = t;
		document.body.appendChild(s);
	};

	$(function() {
		css('.banner ul.miso-dots:after{content:\'03\'}');
	});
</script>


<!--============================主体 开始=============================-->

<section class="container00 container01">
	<div class="fl01">
		<div class="layui-container">
			<div class="layui-row">
				<div class="layui-col-xs12">
					<div class="title">
						<h5>应用领域</h5>
						<h3>Application Area</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container02">
	<div class="right fr">
		<div class="slider_for">
			<ul>
				
				<li>
					<div class="box">
						<div class="img slow" style=" background:url({pboot:sitetplpath}/static/upload/image/20210629/1624952667915643.jpg) center no-repeat;">
						</div>

						<div class="top">
							<div class="table">
								<div class="table_cell">
									<h3><img src="{pboot:sitetplpath}/static/upload/image/20210629/1624953903970154.png" alt="民用建筑">
									</h3>
									<h2>民用建筑</h2>
									<p>产品广泛应用于住宅小区、学校、办公楼、医院、公共场馆、市政工程、城乡集镇、工业建筑、公共建筑群、民用建筑生活污水处理、农村生活污水处理、污水雨水废水输送工程。
									</p>
									<a href="/case/"><span>探索更多</span></a>
								</div>
							</div>
						</div>
					</div>
				</li>
				
				<li>
					<div class="box">
						<div class="img slow" style=" background:url({pboot:sitetplpath}/static/upload/image/20210629/1624952678104216.jpg) center no-repeat;">
						</div>

						<div class="top">
							<div class="table">
								<div class="table_cell">
									<h3><img src="{pboot:sitetplpath}/static/upload/image/20210629/1624953910333728.png" alt="学校">
									</h3>
									<h2>学校</h2>
									<p>产品广泛应用于住宅小区、学校、办公楼、医院、公共场馆、市政工程、城乡集镇、工业建筑、公共建筑群、民用建筑生活污水处理、农村生活污水处理、污水雨水废水输送工程。
									</p>
									<a href="/case/"><span>探索更多</span></a>
								</div>
							</div>
						</div>
					</div>
				</li>
				
				<li>
					<div class="box">
						<div class="img slow" style=" background:url({pboot:sitetplpath}/static/upload/image/20210629/1624952696240431.jpg) center no-repeat;">
						</div>

						<div class="top">
							<div class="table">
								<div class="table_cell">
									<h3><img src="{pboot:sitetplpath}/static/upload/image/20210629/1624953918220689.png" alt="医院">
									</h3>
									<h2>医院</h2>
									<p>产品广泛应用于住宅小区、学校、办公楼、医院、公共场馆、市政工程、城乡集镇、工业建筑、公共建筑群、民用建筑生活污水处理、农村生活污水处理、污水雨水废水输送工程。
									</p>
									<a href="/case/"><span>探索更多</span></a>
								</div>
							</div>
						</div>
					</div>
				</li>
				
				<li>
					<div class="box">
						<div class="img slow" style=" background:url({pboot:sitetplpath}/static/upload/image/20210629/1624952705204913.jpg) center no-repeat;">
						</div>

						<div class="top">
							<div class="table">
								<div class="table_cell">
									<h3><img src="{pboot:sitetplpath}/static/upload/image/20210629/1624953927577519.png" alt="办公楼">
									</h3>
									<h2>办公楼</h2>
									<p>产品广泛应用于住宅小区、学校、办公楼、医院、公共场馆、市政工程、城乡集镇、工业建筑、公共建筑群、民用建筑生活污水处理、农村生活污水处理、污水雨水废水输送工程。
									</p>
									<a href="/case/"><span>探索更多</span></a>
								</div>
							</div>
						</div>
					</div>
				</li>
				
				<li>
					<div class="box">
						<div class="img slow" style=" background:url({pboot:sitetplpath}/static/upload/image/20210528/1622188179195381.jpg) center no-repeat;">
						</div>

						<div class="top">
							<div class="table">
								<div class="table_cell">
									<h3><img src="{pboot:sitetplpath}/static/upload/image/20210629/1624953935642396.png" alt="公共建筑">
									</h3>
									<h2>公共建筑</h2>
									<p>产品广泛应用于住宅小区、学校、办公楼、医院、公共场馆、市政工程、城乡集镇、工业建筑、公共建筑群、民用建筑生活污水处理、农村生活污水处理、污水雨水废水输送工程。
									</p>
									<a href="/case/"><span>探索更多</span></a>
								</div>
							</div>
						</div>
					</div>
				</li>
				
			</ul>
		</div>

		<div class="slider_nav">
			<ul>
				
				<li data-num="0">
					<div class="box">
						<div class="img slow">
							<img src="{pboot:sitetplpath}/static/upload/image/20210629/1624952667915643.jpg" alt="民用建筑">
						</div>

						<div class="top">
							<div class="table">
								<div class="table_cell">
									<h2>民用建筑</h2>
								</div>
							</div>
						</div>
					</div>
				</li>
				
				<li data-num="1">
					<div class="box">
						<div class="img slow">
							<img src="{pboot:sitetplpath}/static/upload/image/20210629/1624952678104216.jpg" alt="学校">
						</div>

						<div class="top">
							<div class="table">
								<div class="table_cell">
									<h2>学校</h2>
								</div>
							</div>
						</div>
					</div>
				</li>
				
				<li data-num="2">
					<div class="box">
						<div class="img slow">
							<img src="{pboot:sitetplpath}/static/upload/image/20210629/1624952696240431.jpg" alt="医院">
						</div>

						<div class="top">
							<div class="table">
								<div class="table_cell">
									<h2>医院</h2>
								</div>
							</div>
						</div>
					</div>
				</li>
				
				<li data-num="3">
					<div class="box">
						<div class="img slow">
							<img src="{pboot:sitetplpath}/static/upload/image/20210629/1624952705204913.jpg" alt="办公楼">
						</div>

						<div class="top">
							<div class="table">
								<div class="table_cell">
									<h2>办公楼</h2>
								</div>
							</div>
						</div>
					</div>
				</li>
				
				<li data-num="4">
					<div class="box">
						<div class="img slow">
							<img src="{pboot:sitetplpath}/static/upload/image/20210528/1622188179195381.jpg" alt="公共建筑">
						</div>

						<div class="top">
							<div class="table">
								<div class="table_cell">
									<h2>公共建筑</h2>
								</div>
							</div>
						</div>
					</div>
				</li>
				
			</ul>
		</div>
	</div>

	<div class="left fl">
		<div class="table">
			<div class="table_cell">
				<div class="top" aos="fade-right" aos-duration="1500">
					<ul>
						
						<li>
							<a>
								<div class="icon">
									<div class="ii">
										<img src="{pboot:sitetplpath}/static/upload/image/20210629/1624953903970154.png" alt="[list:name]">
									</div>
									<div class="table">
										<div class="table_cell">
											<h5>民用建筑</h5>
										</div>
									</div>
								</div>
							</a>
						</li>
						
						<li>
							<a>
								<div class="icon">
									<div class="ii">
										<img src="{pboot:sitetplpath}/static/upload/image/20210629/1624953910333728.png" alt="[list:name]">
									</div>
									<div class="table">
										<div class="table_cell">
											<h5>学校</h5>
										</div>
									</div>
								</div>
							</a>
						</li>
						
						<li>
							<a>
								<div class="icon">
									<div class="ii">
										<img src="{pboot:sitetplpath}/static/upload/image/20210629/1624953918220689.png" alt="[list:name]">
									</div>
									<div class="table">
										<div class="table_cell">
											<h5>医院</h5>
										</div>
									</div>
								</div>
							</a>
						</li>
						
						<li>
							<a>
								<div class="icon">
									<div class="ii">
										<img src="{pboot:sitetplpath}/static/upload/image/20210629/1624953927577519.png" alt="[list:name]">
									</div>
									<div class="table">
										<div class="table_cell">
											<h5>办公楼</h5>
										</div>
									</div>
								</div>
							</a>
						</li>
						
						<li>
							<a>
								<div class="icon">
									<div class="ii">
										<img src="{pboot:sitetplpath}/static/upload/image/20210629/1624953935642396.png" alt="[list:name]">
									</div>
									<div class="table">
										<div class="table_cell">
											<h5>公共建筑</h5>
										</div>
									</div>
								</div>
							</a>
						</li>
						
					</ul>
				</div>

				<div class="ban_po ban_po01" aos="fade-right" aos-duration="1500">
					<div class="wrap">
						<p>
							<font>0</font><span class="current">1</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</section>

<script>
	$(".container02 .left ul").miso({
		autoplay: true,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		infinite: false,
		asNavFor: '.container02 .slider_nav ul,.container02 .slider_for ul',
		arrows: true,
		focusOnSelect: true,
		waitForAnimate: false
	});

	$(".container02 .slider_for ul").miso({
		autoplay: true,
		speed: 300,
		fade: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		infinite: false,
		arrows: true,
		asNavFor: '.container02 .left ul,.container02 .slider_nav ul',
		waitForAnimate: false
	});

	$(".container02 .slider_nav ul").miso({
		autoplay: true,
		speed: 300,
		slidesToShow: 5,
		slidesToScroll: 1,
		dots: false,
		infinite: false,
		asNavFor: '.container02 .slider_for ul,.container02 .left ul',
		arrows: true,
		focusOnSelect: true,
		waitForAnimate: false,
		responsive: [{
			breakpoint: 768,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1
			}
		}, {
			breakpoint: 480,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		}]
	});

	$('.container02').on('afterChange', function(event, miso, currentSlide) {
		var num = parseInt($('.container02 .slider_nav li.miso-current').attr("data-num")) + 1;
		$('.ban_po .current').html(num);
	});
</script>

<section class="container00 container03">
	<div class="layui-container">
		<div class="layui-row">
			<div class="layui-col-xs12">
				<div class="title">
					<h5>产品中心</h5>
					<h3>Product Center</h3>
				</div>

				<ul>
					{pboot:list scode=5 num=9 order=sorting}
					<li>
						<a href="[list:link]" aos="fade-up" aos-duration="1500">
							<div class="img slow">
								<img src="[list:ico]" alt="[list:title]">
							</div>
							<div class="con">
								<div class="icon">
									<span>+</span>
								</div>
								<h5>[list:title]</h5>
								<p>[list:content drophtml=1 lencn=100] </p>
							</div>
						</a>
					</li>
					
					{/pboot:list}
					
				</ul>
				<div class="clear"></div>
				<div class="more">
					<a href="/product/"><span>更多产品</span></a>
				</div>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript" src="{pboot:sitetplpath}/template/default/js/jquery.particleground01.min.js"></script>
<section class="container00 container04">
	<div class="layui-container">
		<div class="layui-row">
			<div class="layui-col-xs12">
				<div class="content">
					<!-- <h2><img src="/{pboot:sitetplpath}/template/default/images/container04_img.png" alt=""></h2> -->
					<div class="table">
						<div class="table_cell">
							<h3>服务社会 回馈员工 自强不息 奉献进取</h3>
							<h5>Serve the society, give back to employees, keep improving, dedication and
								progress</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	$('.container04').particleground({
		dotColor: '#238adb',
		lineColor: '#238adb',
		parallaxMultiplier: 30
	});
</script>

<section class="container00 container05">
	<div class="layui-container">
		<div class="layui-row">
			<div class="layui-col-xs12">
				<div class="title">
					<h5>关于我们</h5>
					<h3>about us</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="fl01">
		<div class="layui-container">
			<div class="layui-row">
				<div class="layui-col-xs12">
					<ul>
						<li>
							<a>
								<div class="table">
									<div class="table_cell">
										<h3 aos="fade-up" aos-duration="1000" class="aos-init aos-animate">
											<span class="counter">3000</span>
											<font>万</font>
										</h3>
										<h5 aos="fade-up" aos-duration="1000" class="aos-init aos-animate">
											注册资本</h5>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a>
								<div class="table">
									<div class="table_cell">
										<h3 aos="fade-up" aos-duration="1000" class="aos-init aos-animate">
											<span class="counter">7000</span>
											<font>㎡</font>
										</h3>
										<h5 aos="fade-up" aos-duration="1000" class="aos-init aos-animate">
											厂房面积</h5>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a>
								<div class="table">
									<div class="table_cell">
										<h3 aos="fade-up" aos-duration="1000" class="aos-init aos-animate">
											<span class="counter">20</span>
											<font>+</font>
										</h3>
										<h5 aos="fade-up" aos-duration="1000" class="aos-init aos-animate">
											资质证书</h5>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a>
								<div class="table">
									<div class="table_cell">
										<h3 aos="fade-up" aos-duration="1000" class="aos-init aos-animate">
											<span class="counter">500</span>
											<font>+</font>
										</h3>
										<h5 aos="fade-up" aos-duration="1000" class="aos-init aos-animate">
											合作案例</h5>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<script src="{pboot:sitetplpath}/template/default/js/a_jquery.waypoints.min.js"></script>
	<script type="text/javascript" src="{pboot:sitetplpath}/template/default/js/a_jquery.countup.min.js"></script>
	<script type="text/javascript">
		$('.counter').countUp();
	</script>
	<!-- 公司简介strat -->
	<div class="fl02">
		<div class="layui-container">
			<div class="layui-row">
				
				<div class="layui-col-xs12">
					<div class="left fl">
						<img src="{pboot:sitetplpath}/static/upload/image/20210528/1622181592364671.jpg" alt="" class="layui-img-responsive">
					</div>
					<div class="right fr" aos="fade-left" aos-duration="1500">
						<h5>{pboot:companyname}</h5>
						<h3>致力于打造环保建材优质供应商</h3>
						{pboot:content id=18}
						<p>&nbsp; &nbsp; &nbsp; &nbsp;
[content:content drophtml=1 len=250]
</p>{/pboot:content}
						<div class="more"><a href="/aboutus/"><span>了解我们 &gt;</span></a>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- 公司简介end -->
	<div class="waves" style="opacity:.5; position:absolute; bottom:0; width:100%; height:250px; z-index:0">
	</div>
	<script type="text/javascript" src="{pboot:sitetplpath}/template/default/js/jquery.particleground.min.js"></script>
</section>

<section class="container00 container06">
	<div class="layui-container01">
		<div class="layui-row">
			<div class="layui-col-xs12">
				<div class="title">
					<h5>新闻中心</h5>
					<h3>News Center</h3>
				</div>

				<div class="content">
					<!-- 新闻轮播strat -->
					<div class="box box01">
						<ul>
							{pboot:list scode=2 num=5 order=date}
							
							<li>
								<a href="[list:link]">
									<div class="img slow">
										<img src="[list:ico]" alt="[list:title]" class="layui-img-responsive">
									</div>
									<div class="con">
										<div class="time">
											<div class="table">
												<div class="table_cell">
													<h3>[list:date style=m-d]</h3>
													<h5>[list:date style=Y] </h5>
												</div>
											</div>
										</div>
										<h4>[list:title]</h4>
										<p>[list:content drophtml=1 lencn=100]</p>
										<div class="more"><span>查看详细</span></div>
									</div>
								</a>
							</li>
							
							{/pboot:list}
							
						</ul>
					</div>
					<!-- 新闻轮播end -->
					<!-- 新闻列表*2strat -->
					<div class="box box02">
						<div class="title01">
							<img src="{pboot:sitetplpath}/template/default/images/container06_icon01.png" alt="">
							<big>公司新闻</big><small>Corporate News</small>
						</div>

						<ul>
							{pboot:list scode=3 num=3 order=date}
							<li>
								<a href="company/46.html">
									<h4>[list:date style=Y-m-d]</h4>
									<h5>[list:title]</h5>
									<p>[list:content drophtml=1 lencn=100]</p>
								</a>
							</li>
							
							{/pboot:list}
							
						</ul>
					</div>

					<div class="box box02">
						<div class="title01">
							<img src="{pboot:sitetplpath}/template/default/images/container06_icon02.png" alt="">
							<big>行业动态</big><small>Industry News</small>
						</div>

						<ul>
							
							{pboot:list scode=4 num=3 order=date}
							<li>
								<a href="company/46.html">
									<h4>[list:date style=Y-m-d]</h4>
									<h5>[list:title]</h5>
									<p>[list:content drophtml=1 lencn=100]</p>
								</a>
							</li>
							
							{/pboot:list}
							
						</ul>
					</div>
					<!-- 新闻列表end -->
					<div class="clear"></div>

					<div class="more01">
						<a href="/article/"><span>更多新闻</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	$('.container06 .content .box01 ul').miso({
		autoplaySpeed: 4000,
		autoplay: true,
		speed: 1000,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		fade: true,
		touchThreshold: 10,
		waitForAnimate: false,
		pauseOnHover: false,
		focusOnSelect: true
	});
</script>

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
  0 => '/Applications/MAMP/htdocs/电动车/template/default/html/header.html',
  1 => '/Applications/MAMP/htdocs/电动车/template/default/html/headNav.html',
  2 => '/Applications/MAMP/htdocs/电动车/template/default/html/footer.html',
); ?>