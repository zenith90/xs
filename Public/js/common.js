//返回顶部
$(function() {
			//当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
			$(function() {
				$(window).scroll(function() {
					if ($(window).scrollTop() > 300) {
						$("#back-to-top").fadeIn(1500);
					} else {
						$("#back-to-top").fadeOut(1500);
					}
				});

				//当点击跳转链接后，回到页面顶部位置

				$("#back-to-top").click(function() {
					$('body,html').animate({
						scrollTop : 0
					}, 1000);
					return false;
				});
			});
		});
		
		function addfavorite() {
		    URL = "<{$siteinfo.site_url}>";
		    title = "<{$siteinfo.site_name}>";
		    try {
		        window.external.addFavorite(URL, title);
		    } catch (e) {
		        try {
		            window.sidebar.addPanel(title, URL, "");
		        } catch (e) {
		            alert("加入收藏失败，请使用Ctrl+D进行添加");
		        }
		    }
		}

$("#nav-looked").live({
	mouseenter:
	function(){
		$(this).find(".drop-box").css("display","block"); 
	},
	mouseleave:
	function(){
		$(this).find(".drop-box").css("display","none"); 
	}
});

$("#loginbarx").live({
	mouseenter:
	function(){
		$(this).find(".drop-box").css("display","block"); 
	},
	mouseleave:
	function(){
		$(this).find(".drop-box").css("display","none"); 
	}
});

// close-his	
$("#my_close").click(function(){
	$(this).parents(".drop-box").hide();
});

function postkey(){
	$('#searform').submit();
	var cb=$('#key').value;
	
	window.location="__ROOT__/search/keyword/"+cb; 
}