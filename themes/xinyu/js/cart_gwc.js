

$.fn.dropdown = function(b, c) {
	if (this.length) {
		"function" == typeof b && (c = b, b = {});
		var d = $.extend({
			event: "mouseover",
			current: "hover",
			delay: 0
		}, b || {}),
			e = "mouseover" == d.event ? "mouseout" : "mouseleave";
		$.each(this, function() {
			var b = null,
				f = null,
				g = !1;
			$(this).bind(d.event, function() {
				if (g) clearTimeout(f);
				else {
					var e = $(this);
					b = setTimeout(function() {
						e.addClass(d.current), g = !0, c && c(e)
					}, d.delay)
				}
			}).bind(e, function() {
				if (g) {
					var c = $(this);
					f = setTimeout(function() {
						c.removeClass(d.current), g = !1
					}, d.delay)
				} else clearTimeout(b)
			})
		})
	}
};
function imgAnimate(t) {
    var e = $(t);
	var i = e.find(".a-img");
	i.bind("mouseenter", function() {
		$(this).find("img").stop(!0).animate({
			left: "-10px"
		}, 300)
	}).bind("mouseleave", function() {
		$(this).find("img").stop(!0).animate({
			left: "0px"
		}, 300)
	})
}



$(function(){
$(".topMenu .menus").dropdown({
	delay: 50
}),$(".allCat").dropdown({
	delay: 50},function(){
		/*
		var flag = $('#allCategory').attr('flag');
		if(0==flag){
			$.ajax({
			type: 'get',
			async: false,
			dataType: 'jsonp',
			url: "/ajax/HeadAllCategory/",
			success: function(data){	
				$('#allCategory').html(data.data);
                                $('#floatAllCategory').html(data.data);
				$('#allCategory').attr('flag','1');
				//alert(data);
			}
			});
		}*/

		
}),$("#topCart").dropdown({
	delay: 50
	},function(){
		$("#cat_form13").show();
		$("#cat_form13 li").length && $("#topCart").find("s").addClass("setCart");
}),$(".topMenu .tShow").dropdown({
	delay: 50
});
if($(".floatBar").length > 0){
	var floatBar=function(){
		var floatBarTop = $(document).scrollTop(),startTop=$(".navmenu").offset().top;
		(floatBarTop > startTop) ? $(".floatBar").removeClass("hide") : $(".floatBar").addClass("hide");
		(floatBarTop > startTop) ? $(".flads").removeClass("hide") : $(".flads").addClass("hide");
	};
	$(window).bind("scroll", floatBar);
	floatBar();
}
0 !== $(".rTopImg").length && imgAnimate(".rTopImg");
var index_win_w = $(window).width();
if (index_win_w <= 1440) {$(".index_rfloat").addClass("index_side");}
else {$(".index_rfloat").removeClass("index_side");}
$(window).resize(function() {
	var index_win_width = $(window).width();
	if (index_win_width <= 1440) {$(".index_rfloat").addClass("index_side");}
	else {$(".index_rfloat").removeClass("index_side");}
});  
})