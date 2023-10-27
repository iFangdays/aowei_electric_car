// JavaScript Document

// JavaScript Document

/*<script language="JavaScript">
document.oncontextmenu=new Function("event.returnValue=false;");
document.onselectstart=new Function("event.returnValue=false;");
</script>*/

/*document.onkeydown = function(){
	if(window.event && window.event.keyCode == 123) {
		event.keyCode=0;
		event.returnValue=false;
	}
	if(window.event && window.event.keyCode == 13) {
		window.event.keyCode = 505;
	}
	if(window.event && window.event.keyCode == 8) {
		window.event.returnValue=false;
	}
}

document.oncontextmenu = function (event){
	if(window.event){
	event = window.event;
	}try{
	var the = event.srcElement;
	if (!((the.tagName == "INPUT" && the.type.toLowerCase() == "text") || the.tagName == "TEXTAREA")){
	return false;
	}
	return true;
	}catch (e){
	return false;
	}
}


//屏蔽键盘事件
document.onkeydown = function (){
	var e = window.event || arguments[0];
	//F12
	if(e.keyCode == 123){
		return false;
	//Ctrl+Shift+I
	}else if((e.ctrlKey) && (e.shiftKey) && (e.keyCode == 73)){
		return false;
	//Shift+F10
	}else if((e.shiftKey) && (e.keyCode == 121)){
		return false;
	//Ctrl+U
	}else if((e.ctrlKey) && (e.keyCode == 85)){
		setTimeout(function(){
		  },1);
		return false;
	}
};
//屏蔽鼠标右键
document.oncontextmenu = function (){
	setTimeout(function(){
	  },1);
	return false;
}*/

$(window).scroll(function () {
	var windowTop = $(window).scrollTop();
	if (windowTop > 50) {
		$(".header").addClass("width");
	} else {
		$(".header").removeClass("width");
	}
	
	var $this = $(this);
	var targetTop = $(this).scrollTop();
	var height = $(window).height();
	if (targetTop >= 10){
		$(".rolling-top").show();
	}else{
		$(".rolling-top").hide();
	}
})

$("nav>ul>li").hover(function() {
	$(this).find(".rd-navbar-dropdown").stop().addClass("focus");
}, function() {
	$(this).find(".rd-navbar-dropdown").removeClass("focus");
});

$(".rd-navbar-toggle").click(function(){
	$(this).toggleClass("active");
	$(".rd-navbar-nav-wrap").toggleClass("active");
	$(".rd-navbar-submenu").removeClass("opened");
});
$(".rd-navbar-submenu-toggle").click(function(){
	$(this).parents(".rd-navbar-submenu").toggleClass("opened");
	$(this).parents(".rd-navbar-submenu").siblings().removeClass("opened");
});

$('.btn[name]').click(function() {
	var tf_name_id = $(this).attr('name');
	$('.tc[name=' + tf_name_id + ']').addClass('act');
});
$('.close').click(function() {
	$(this).parents('.tc').removeClass('act');
});
$('.tc-bg').click(function() {
	$(this).parents('.tc').removeClass('act');
});

$('.rolling-top').on('click', function(e) {
	$("body,html").animate({
		scrollTop: '0px'
	}, 500);
});

$(function(){
	/* 导航滚动监听 */
	
	//移动端内页导航
	$("#bnt_sub_nav").click(function(){
  	$(this).toggleClass("on");
		$("#sub_nav_content").slideToggle();
	  });

	$("#sub_nav_content dt.title a").attr("href","javascript:void(0)");
	$("#sub_nav_content dt.title_on").next("dd").show();
	$("#sub_nav_content dt.title").click(function() {
		if ($(this).hasClass("title_on")) {
			$(this).next("dd").slideToggle();
			$(this).removeClass("title_on");
		} else {
			$("#sub_nav_content dd").slideUp();
			$("#sub_nav_content dt.title").removeClass("title_on").removeClass("on");
			$(this).toggleClass("title_on");
			$(this).next("dd").slideDown();
		}
	});
	//IE9 兼容placdholder属性
    function placeholderSupport() {
        return 'placeholder' in document.createElement('input');
    }
    if(!placeholderSupport()){   // 判断浏览器是否支持 placeholder
        $("[placeholder]").each(function(){
            var _this = $(this);
           // console.log($(this).height());
            var inputHeight = parseInt(parseInt($(this).height()-2)-14)/2;
            var inputHeight = parseInt(parseInt(parseInt($(this).height()-2)/2)-7)+'px';
            _this.parent().css({"position": "relative"});
            var left = _this.position().left+parseInt(_this.css("padding-left"))+parseInt(_this.css("margin-left"))+"px";
            var top = parseInt(_this.css("padding-top"));//+parseInt(_this.css("margin-top"))+"px";
            var top = parseInt(_this.css("padding-top"));//+parseInt(_this.css("margin-top"))+"px";
            _this.after('<span class="placeholder" data-type="placeholder" style="position: absolute;font-size:14px; top: '+ inputHeight +'; left: ' + left + '">' + _this.attr("placeholder") + '</span>');
            //_this.after('<span class="placeholder" data-type="placeholder" style="position: absolute; top: 0px; left: ' + left + '">' + _this.attr("placeholder") + '</span>');
            if(_this.val() != ""){
                _this.parent().find("span.placeholder").hide();
            }
            else{
                _this.parent().find("span.placeholder").show();
            }
        }).on("focus", function(){
            $(this).parent().find("span.placeholder").hide();
        }).on("blur", function(){
            var _this = $(this);
            if(_this.val() != ""){
                _this.parent().find("span.placeholder").hide();
            }
            else{
                _this.parent().find("span.placeholder").show();
            }
        });
        // 点击表示placeholder的标签相当于触发input
        $("span.placeholder").on("click", function(){
            $(this).hide();
            $(this).siblings("[placeholder]").trigger("click");
            $(this).siblings("[placeholder]").trigger("focus");
        });
    }
	
	/*$('.container00 .miso_hd').miso({
	  autoplaySpeed: 6000,
	  autoplay: false,
	  speed: 300,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  arrows: false, 
	  dots:false, 
	  touchThreshold: 10,
	  pauseOnHover: false,
	  focusOnSelect: true,
	  asNavFor: '.container00 .miso_bd'
	});
	$('.container00 .miso_bd').miso({
	  autoplaySpeed: 6000,
	  autoplay: false,
	  speed: 300,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false, 
	  dots:false, 
	  touchThreshold: 10,
	  pauseOnHover: false,
	  focusOnSelect: true,
	  asNavFor: '.container00 .miso_hd'
	});
	
	var smVideo = {
		load: function (objs) {
			var objplay = jwplayer(objs.vcontainer).setup({
				html5player: '/static/style/pc/js/video/html5player.js',
				file: objs.vfiles,
				image: objs.vfimg,
				width: '100%',
				height: '100%',
				aspectratio: '16:9',
				stretching: 'fill',
				controls: 'true',
				autostart: objs.isautoplay
			});
			return objplay;
		}
	}
	$('').click(function () { 
		smVideo.load({
            vcontainer: 'videobox',  //视频容器
            vfiles:  jQuery(this).attr("data-video"), //视频地址
            vfimg: jQuery(this).attr("data-img"), //视频缩略图(封面)
            isautoplay: 'true'
        });
	    $(".vwrap").fadeIn();
	});
	
	$(".vwrap .close").click(function () { 
		$(".vwrap").hide();
        $('#videobox').html("");
	});*/
});