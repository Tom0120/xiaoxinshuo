$(function(){
	//头部分类导航
	if($.support.shrinkWrapBlocks)
	{
		$(".categorys").mouseenter(function(){
			$(this).find(".categroup").fadeIn();						  
		})	
		$(".categorys").mouseleave(function(){
			$(this).find(".categroup").fadeOut();						  
		})	

		$(".first").mouseenter(function(){
			$(this).find(".h400").fadeIn();						  
		})	
		$(".first").mouseleave(function(){
			$(this).find(".h400").fadeOut();						  
		})	
			
	}
		   
	$("#catalog").slide({ 
		mainCell:".imgbox1 ul",
		effect:"top",
		vis:4,
		scroll:1,
		trigger:"click"
	});
	
	MagicZoom.options = {
		'hint-text' : '',
		'zoom-width' : 350,
   		'zoom-height' : 350
	}
	
	$("#image_list img:eq(0)").css('border-color','#EE4136');
	
	$(".MagicZoom img").ajaxStart(function(){
		$(this).attr('src','images/loading.gif');								   
	})
	
	$("#vip1,#vip2").mouseenter(function(){
		$("#vip2").show();										  
	})	
	$("#vip2").mouseleave(function(){
		$("#vip2").hide();										  
	})		


	$(".right").click(function(){
		var old_number = $("#number").val();	
		var new_numer = parseInt(old_number)+1;
		$("#number").val(new_numer);
		changePrice();
	})
	
	$(".left").click(function(){
		var old_number = $("#number").val();	
		if((old_number-1) == 0)
		{
			alert("购买数量不能小于1件");
		}
		else
		{
			$("#number").val((old_number-1));	
			changePrice();
		}
	})
	$("#proChange1").mouseenter(function(){
			$("#proChange1").removeClass("promotionMiddleKey");			
			$("#proChange1").addClass("promotionMiddleKeyC");	
			$("#proChange2").removeClass("promotionMiddleKeyN");			
			$("#proChange2").addClass("promotionMiddleKeyD");	
	})		
	$("#proChange1").mouseleave(function(){
			$("#proChange1").removeClass("promotionMiddleKeyC");			
			$("#proChange1").addClass("promotionMiddleKey");	
			$("#proChange2").removeClass("promotionMiddleKeyD");			
			$("#proChange2").addClass("promotionMiddleKeyN");	
	})	
	
	
	var dateTime = new Date();
    var difference = dateTime.getTime() - serverTime;
    setInterval(function(){
      $(".endtime").each(function(){
        var obj = $(this);
        var endTime = new Date(parseInt(obj.attr('value')) * 1000);
        var nowTime = new Date();
        var nMS=endTime.getTime() - nowTime.getTime() + difference;
        var myD=Math.floor(nMS/(1000 * 60 * 60 * 24));
		var myH=Math.floor(nMS/(1000*60*60) % 24);
        var myM=Math.floor(nMS/(1000*60)) % 60;
        var myS=Math.floor(nMS/1000) % 60;
        var myMS=Math.floor(nMS/100) % 10;
        if(myD>= 0){
			var str = "距离抢购结束：<br><span><b>"+myD+"</b><em class='tim-fontColor'>天</em><b id='hour'>"+myH+"</b>:<b id='min'>"+myM+"</b>:<b id='sec'>"+myS+"</b></span>";
        }else{
			var str = "已结束！";	
		}

		obj.html(str);
      });
    }, 100);
	
	
	$(".btn-addcomment").click(function(){
		var h = $(document).height();
		var w = $(document).width();
		$("#black_bg").css({width:w+'px',height:h+'px'}).fadeIn();
		$('#comment_box').fadeIn().css("top",$(document).scrollTop()+100);							
	})
	
	$(window).scroll(function () {
		if($(document).scrollTop() > 505)
		{
			if($("#util-floattop").length == 0)
			{
				$("body").append('<div id="util-floattop" style="z-index:999999; position: fixed; top: 0px; left: 0px; right: 0px; display: block;"></div>');
				if($(window).width()>1210)
				{
					$(".returntop").fadeIn();
					$(".head-shopcart").clone().prependTo("#util-floattop");
					$(".head-main div").remove(".head-shopcart");
					$(".head-shopcart").css("position","absolute");			
				}
			}
			
				//头部购物车弹出框
			$(".head-shopcart").mouseover(function(){
				$(this).children(".shopcart-list").show();
			});
			$(".head-shopcart").mouseout(function(){
				$(this).children(".shopcart-list").hide();
			});
			
		}
		else
		{
			if($("#util-floattop").length != 0)
			{
				
				if($(window).width()>1210)
				{
					$(".head-shopcart").clone().appendTo(".head-main");
					$("#util-floattop div").remove(".head-shopcart");
					$(".head-shopcart").css("position","relative");			
					$(".returntop").fadeOut();
				}
				$("body #util-floattop").remove();	
				
				//头部购物车弹出框
				$(".head-shopcart").mouseover(function(){
					$(this).children(".shopcart-list").show();
				});
				$(".head-shopcart").mouseout(function(){
					$(this).children(".shopcart-list").hide();
				});
			}

		}
	})
	

	
	
})

function show_con(btn)
{
	$(".xiangqing_btn").removeClass("hover"); 
	$("div.show_con_box").not("#"+btn+"_con").hide();
	$("#"+btn).addClass("hover"); 
	$("#"+btn+"_con").show();
}


