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



<div class="clear"></div>
<!--============================主体 开始=============================-->
<section class="n_container">
	<div class="n_product">
		<div class="layui-container">
			<div class="layui-row">
				<div class="layui-col-xs12">
					<div class="siji">
	<ul>
		
{pboot:nav num=10 parent={sort:tcode}}
		<li >
			<a href="[nav:link]"><span>[nav:name]</span></a>
		</li>
		
{/pboot:nav}
		
	</ul>
</div>

					<section class="container03">
						<ul>
							{pboot:list num=10 order=date}
							<li>
								<a href="[list:link]">
									<div class="img slow">
										<img src="[list:ico]" alt="[list:title]">
									</div>
									<div class="con">
										<div class="icon">
											<span>+</span>
										</div>
										<h5>[list:title]</h5>
										<p>[list:content drophtml=1 lencn=100]</p>
									</div>
								</a>
							</li>
							
							{/pboot:list}
							
							
						</ul>
						<div class="clear"></div>
					</section>
					<!-- 分页 -->

	  <div class="dux-page">
          {page:bar}
        </div> 
                            <style type="text/css">
                                .dux-page { text-align:center; margin-left:auto; margin-right:auto; clear:both; overflow:hidden; padding:20px 0;}
.dux-page a { background:#fff; padding:5px 10px;  height:35px; margin:0 3px; line-height:35px; font-size:14px; text-align:center; color:#333; text-decoration:none; border:#efefef solid 1px; border-radius:5px;}
.dux-page a:hover,.dux-page a.active-page { background:#0A9718; color:#FFF;}
.dux-page a.prePage,.m-page a.nextPage { font-family:"Tahoma";}
.dux-page .hidden { display:none;}
                            </style>


				</div>
			</div>
		</div>
	</div>
</section>
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
  3 => '/Applications/MAMP/htdocs/template/default/html/bar.html',
  4 => '/Applications/MAMP/htdocs/template/default/html/footer.html',
); ?>