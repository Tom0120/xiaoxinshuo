String.prototype.replaceAll = function(s1,s2){return this.replace(new RegExp(s1,"gm"),s2);}

function changeNum(n, i) {
    var num = document.getElementById("InputNum" + i).value;
    var reg = new RegExp("^[0-9]*$");
    if (!reg.test(num)) {
        alert("请输入正确的数字!");
        document.getElementById("InputNum" + i).value = 1
    } else {
        var n2 = parseInt(num) >= 1 ? parseInt(num) : 1;
        document.getElementById("InputNum" + i).value = n2
    }
}
var timer = null;
var toCartCallBack = function(data) {
    var cartNum = data.goods_count;
    $("#alt_num").html(cartNum);
    if (cartNum > 999) {
        $(".jx_car_num").text("999+")
    } else {
        $(".jx_car_num").text(cartNum)
    }
    setTimeout(function() {
        timer
    },
    500);
    var sc = $(document).scrollTop() + ($(window).height() / 2) - 110;
    $(".alt_succ").css({
        "top": sc
    });
    $(".alt_succ").show();
    timer = setTimeout(function() {
        if ($.browser.version == "6.0" || $.browser.version == "7.0") {
            $(".alt_succ").hide()
        } else {
            $(".alt_succ").fadeOut(600)
        }
        clearTimeout(timer)
    },
    5000)
};
function changeNum(n, i) {
    var num = document.getElementById("InputNum" + i).value;
    var reg = new RegExp("^[0-9]*$");
    if (!reg.test(num)) {
        alert("请输入正确的数字!");
        document.getElementById("InputNum" + i).value = 1
    } else {
        var n2 = parseInt(num) >= 1 ? parseInt(num) : 1;
        document.getElementById("InputNum" + i).value = n2
    }
}
$(function() {
    if ($(".cpp .brandv").find("ul").eq(0).height() > 80) {
        $(".cpp .brandv").find("ul").eq(0).css({
            "overflow": "hidden",
            "height": "70px"
        });
        $(".cpp .brandv").find("ul").eq(0).attr("str", "b")
    } else {
        $(".cpp .brandv").find("ul").eq(0).css({
            "overflow": "",
            "height": ""
        });
        $(".cppr_all .brd_more").hide();
        $(".cpp .brandv").find("ul").eq(0).attr("str", "t")
    }
    $(".cpp .brandv").find("ul").eq(0).show();
    var lzTipNum, lzTipWidth;
    var mWidth = $(window).width();
    if (mWidth < 1200) {
        lzTipWidth = 777
    } else {
        lzTipWidth = 984
    }
    $roundDiv = $(".hot_buy_pr_list ul");
    $("#lzTip span").mouseover(function() {
        lzTipNum = $("#lzTip span").index($(this));
        if (mWidth < 1200) {
            $roundDiv.stop(true, false).animate({
                left: -($(this).index()) * lzTipWidth
            },
            300)
        } else {
            $roundDiv.stop(true, false).animate({
                left: -($(this).index()) * lzTipWidth
            },
            300)
        }
        $("#lzTip span").removeClass("hota");
        $("#lzTip span").eq(lzTipNum).addClass("hota")
    });
    $(window).bind("resize",
    function() {
        var num = $("#lzTip span").index($("#lzTip .hota"));
        var mWidth = $(window).width();
        if (mWidth < 1200) {
            lzTipWidth = 777;
            lzTipNum = 0;
            $("#lzTip span").removeClass("hota");
            $("#lzTip span").eq(lzTipNum).addClass("hota");
            $roundDiv.css("left", -num * lzTipWidth + "px")
        } else {
            lzTipWidth = 984;
            lzTipNum = 0;
            $("#lzTip span").removeClass("hota");
            $("#lzTip span").eq(lzTipNum).addClass("hota");
            $roundDiv.css("left", -num * lzTipWidth + "px")
        }
        $("#lzTip span").mouseover(function() {
            if (mWidth < 1200) {
                $roundDiv.stop(true, false).animate({
                    left: -($(this).index()) * lzTipWidth
                },
                300)
            } else {
                $roundDiv.stop(true, false).animate({
                    left: -($(this).index()) * lzTipWidth
                },
                300)
            }
        })
    });
    $(".cppr_all a").mousemove(function() {
        var num = $(".cppr_all a").index($(this));
        var state = $(this).parents("ul").siblings("div").find("i").attr("class");
        $(".cppr_all a").attr("class", "");
        $(this).attr("class", "cppron");
        if ($(this).text() == "全部品牌") {
            if (state == "more2") {
                $(".cpp .brandv").find("ul").eq(0).css({
                    "overflow": "",
                    "height": ""
                })
            } else {
                if ($(".cpp .brandv").find("ul").eq(0).attr("str") == "b") {
                    $(".cpp .brandv").find("ul").eq(0).css({
                        "overflow": "hidden",
                        "height": "70px"
                    })
                }
            }
            if ($(".cpp .brandv").find("ul").eq(0).attr("str") == "b") {
                $(".cppr_all .brd_more").show()
            } else {
                $(".cppr_all .brd_more").hide()
            }
        }
        $(".brandv ul").hide();
        $(".brandv ul").eq(num).show();
        $(".brd_more.brd_more01").hide();
        if (num == 0 && $(".cpp .brandv").find("ul").eq(0).attr("str") == "b") {
            $(".brd_more.brd_more01").show()
        }
    });
    $(".brd_nav_cd").css({
        "overflow": "hidden",
        "height": "24px"
    });
    $(".brd_nav").css({
        "overflow": "hidden",
        "height": "24px"
    });
    $(".brd_more.brd_more01").click(function() {
        if ($(this).find("i").attr("class") == "more1") {
            $(this).find("i").attr("class", "more2");
            $(this).find("span").text("收起");
            $(".brandv ul").eq(0).css({
                "overflow": "",
                "height": ""
            })
        } else {
            $(this).find("i").attr("class", "more1");
            $(this).find("span").text("更多");
            $(".brandv ul").eq(0).css({
                "overflow": "hidden",
                "height": "70px"
            })
        }
    });
    $(".brd_more[more=0]").click(function() {
        if ($(this).find("i").attr("class") == "more1") {
            $(this).find("i").attr("class", "more2");
            $(this).find("span").text("收起");
            $(this).parent(".brd_nav").css({
                "overflow": "",
                "height": ""
            });
            $(this).parent(".brd_nav_cd").css({
                "overflow": "",
                "height": ""
            })
        } else {
            $(this).find("i").attr("class", "more1");
            $(this).find("span").text("更多");
            $(this).parent(".brd_nav").css({
                "overflow": "hidden",
                "height": "24px"
            });
            $(this).parent(".brd_nav_cd").css({
                "overflow": "hidden",
                "height": "24px"
            })
        }
    });
    if ($("#slb").offset() != null) {
        var a = $("#slb").offset().top;
        $(window).bind("scroll",
        function() {
            var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
            if ($("#slb").attr("class") == "slb") {
                a = $("#slb").offset().top
            }
            if (scrollTop >= a) {
                $("#slb").attr("class", "scroll");
                $(".slb1").show()
            } else {
                $("#slb").attr("class", "slb");
                $(".slb1").hide()
            }
        })
    }
    $("#link .brd_nav_zd ul").css({
        "overflow": "",
        "height": ""
    });
    $("#link .brd_more").hide();
    if (parseInt($("#link .brd_nav_zd ul").css("height")) > "72") {
        $("#link .brd_more").show();
        $("#link .brd_nav_zd ul").css({
            "overflow": "hidden",
            "height": "72px"
        })
    }
    $("#link .brd_more[more1=0]").click(function() {
        if ($(this).find("i").attr("class") == "more1") {
            $(this).find("i").attr("class", "more2");
            $(this).find("span").text("收起");
            $(this).siblings("ul").css({
                "overflow": "",
                "height": ""
            })
        } else {
            $(this).find("i").attr("class", "more1");
            $(this).find("span").text("更多");
            $(this).siblings("ul").css({
                "overflow": "hidden",
                "height": "72px"
            })
        }
    });
    $("#link1 .brd_nav_zd ul").css({
        "overflow": "",
        "height": ""
    });
    $("#link1 .brd_more").hide();
    if (parseInt($("#link1 .brd_nav_zd ul").css("height")) > "72") {
        $("#link1 .brd_more").show();
        $("#link1 .brd_nav_zd ul").css({
            "overflow": "hidden",
            "height": "72px"
        })
    }
    $("#link1 .brd_more[more1=0]").click(function() {
        if ($(this).find("i").attr("class") == "more1") {
            $(this).find("i").attr("class", "more2");
            $(this).find("span").text("收起");
            $(this).siblings("ul").css({
                "overflow": "",
                "height": ""
            })
        } else {
            $(this).find("i").attr("class", "more1");
            $(this).find("span").text("更多");
            $(this).siblings("ul").css({
                "overflow": "hidden",
                "height": "72px"
            })
        }
    });
    if ($(".brd_nav_cd ul").height() <= 30) {
        $(".brd_nav_cd .brd_more").hide()
    }
    if ($(".brd_nav ul").height() <= 30) {
        $(".brd_nav .brd_more").hide()
    }
    $(".prtlt_add").live("click",
    function() {
        var num = $(this).siblings(".prtlt_txt").val();
        num++;
        $(this).siblings(".prtlt_txt").val(num);
        $(this).siblings(".prtlt_next").removeClass("prtlt_on")
    });
    $(".prtlt_next").live("click",
    function() {
        var num = $(this).siblings(".prtlt_txt").val();
        num--;
        if (num <= 1) {
            num = 1;
            $(this).siblings(".prtlt_txt").val(num);
            $(this).addClass("prtlt_on");
            return
        } else {
            $(this).siblings(".prtlt_txt").val(num)
        }
    });
    $(".prtlt_btn2").live("click",
    function(e) {
        clearTimeout(timer);
        if ($.browser.version == "6.0" || $.browser.version == "7.0") {
            $(".alt_succ").hide()
        } else {
            $(".alt_succ").fadeOut(1)
        }
        var num = $(this).siblings("span").find("input").val();
        var goodsId = $(this).siblings("span").find("input").attr("gid");
        var goodsName = $(this).siblings("span").find("input").attr("gname");
//        $.support.cors = true;
//        jQuery.ajax({
//            type: "POST",
//            url: "/checkProductStock.htm",
//            data: {
//                "proId": goodsId,
//                "num": num
//            },
//            dataType: "json",
//            success: function(result) {
//                if (result.code == 0) {
//                    alert("商品[" + goodsName + "]" + result.msg);
//                    return false
//                } else {
//                    if (result.code == 1) {
                        var fromId = $("#fromUrlId").val();
                        addSkuToCartWithSrc(goodsId, num, "", fromId, toCartCallBack)
//                    }
//                }
//            }
//        })
    });
    $(".succ_close,.contgo").live("click",
    function() {
        $(this).parents(".alt_succ").hide()
    })
});

$(function() {

	$(".search input").focus(function(e) {
    	if( $.trim($(this).val()) == "在结果中查找"){
    		$(this).val("");
    	}
    });
    $(".search input").blur(function(e) {
    	if( $.trim($(this).val()) == ""){
        	$(this).val("在结果中查找");
    	}
    });

    $(".buyArea input").attr('value', 1);
    $(".buyArea input").blur(function() { //手动输入数量
        var num = parseInt($(this).val());
        if (num > 99) {
            $(this).next(".edit").css({
                "background-position": "-185px -138px"
            })

            $(this).attr('value', 1);
            alert("该商品限99件！")
        }

        else if (num == 1) {
            $(this).next(".edit").css({
                "background-position": "-185px -138px"
            })
        } else if (num < 0) {
            $(this).attr('value', 1);
        } else {

            $(this).next(".edit").css({
                "background-position": "-233px -138px"
            })

        }

    });

    $(".increase").live("click", function() { //增加数量
        //var num = parseInt($(this).parent().prev("input").val());
        var num = parseInt($(this).parent().siblings("span").find("input").val());
        if (num < 98) {
            //$(this).parent().prev("input").attr('value', num + 1);
        	$(this).parent().siblings("span").find("input").attr('value', num + 1);
            $(this).parent(".edit").css({
                "background-position": "-233px -138px"
            });
            return false;
        } else if (num == 98) {
            //$(this).parent().prev("input").attr('value', num + 1);
        	$(this).parent().siblings("span").find("input").attr('value', num + 1);
            $(this).parent(".edit").css({
                "background-position": "-209px -138px"
            });
            return false;

        }

        else {
            alert("该商品限购99件！");
            return false;
        }

    });
    $(".decrease").live("click",function() { //减少数量
        //var num = parseInt($(this).parent().prev("input").val());
        var num = parseInt($(this).parent().siblings("span").find("input").val());
        if (num > 2) {
            //$(this).parent().prev("input").attr('value', num - 1);
        	$(this).parent().siblings("span").find("input").attr('value', num - 1);
            $(this).parent(".edit").css({
                "background-position": "-233px -138px"
            });
            return false;

        }

        else if (num == 2) {
            //$(this).parent().prev("input").attr('value', num - 1);
        	$(this).parent().siblings("span").find("input").attr('value', num - 1);
            $(this).parent(".edit").css({
                "background-position": "-185px -138px"
            });
            return false;

        } else {

            return false;
        }

    })
    
    
    
    
    $(".collect_box").hover(function() { //鼠标进入图片区域”收藏“      显示/隐藏切换
    	var proObj = $(this).find('img');
    	proObj.parent(".img").prev("span").show();
    	// 获取对应的商品的id
    	var goodsId = proObj.attr("proImgId");
    	if(goodsId > 0){
    		$.getJSON("/checkCollect.htm?t="+new Date().getTime(),{'proId':goodsId},function(data){
				if(data){
					if(data.code == 0){
						proObj.parent(".img").prev("span").html("<i></i>收藏").removeClass().addClass("collect collect2");
					}else if(data.code == 1){
						proObj.parent(".img").prev("span").html("<i></i>已收藏").removeClass().addClass("collect collect3");
//						proObj.parent(".img").prev("span").show();
					}
				}
			 });
    	}
    },function() {
		$(this).find('img').parent(".img").prev("span").hide();
    });


    
    $(".collect").hover(function() { //鼠标进入"收藏区域"       显示/隐藏切换
        var flag = $(this).text();
        if (flag == "已收藏") {
            $(this).html("<i></i>取消");
        }
        if (flag == "收藏") {
            $(this).removeClass("collect2").addClass("collect1");
        }
        $(this).show()

    },function() {
    	var flag = $(this).text();
    	if (flag == "取消") {
            $(this).html("<i></i>已收藏");
        }
        $(this).removeClass("collect1").addClass("collect2");
    });
    
    
    
    //收藏商品
    $(".collect").click(function() { //点击收藏
    	var proObj = $(this);
        var flag = $(this).text();
        var goodsId = $(this).attr("id").split("_")[1];
        if (flag == "收藏") {
			 $.getJSON("/saveCollect.htm?t="+new Date().getTime(),{'proId':goodsId},function(data){
				if(data){
					if(data.code == -1){
						alert('收藏失败!');
						return false;
					}else if(data.code == 0){
						alert('收藏成功!');
						proObj.html("<i></i>已收藏").addClass("collect3");
						ga('send','event','store','button','goods-'+goodsId);
						return false;
					}else if(data.code == 1){
						window.location.href='https://login.jiuxian.com/login.htm?from='+window.location.href;
						return false;
					}else if(data.code == 2){
						alert("您已经收藏过此商品了！");
						proObj.html("<i></i>已收藏").addClass("collect3");
						return false;
					}
				}
			 });
        } else if (flag == "取消") {
        	$.getJSON("/cancelCollect.htm?t="+new Date().getTime(),{'proId':goodsId},function(data){
				if(data){
					if(data.code == -1){
						alert("参数错误！");
						return false;
					}else if(data.code == 0){
						window.location.href='https://login.jiuxian.com/login.htm?from='+window.location.href;
						return false;
					}else if(data.code == 1){
						proObj.html("<i></i>收藏").removeClass().addClass("collect collect2");
						alert("取消收藏成功。");
			            return false;
					}else if(data.code == 2){
						alert("您没有收藏该商品。");
						return false;
					}
				}
        	})
            
        }

    });
    
    $(".get").click(function() {
		 var CouponId = $(this).attr("id").split("_")[1];
		 $.getJSON("/saveCoupon.htm",{'CouponId':CouponId},function(data){
			if(data){
				if(data.code == -1){
					alert('领取失败!');
					return false;
				}else if(data.code == 8){
					alert('领取成功!');
					return false;
				}else if(data.code == 1){
					//alert("您还没有登录，请先登录！");
					window.location.href='https://login.jiuxian.com/login.htm';
					return false;
				}else if(data.code == 2){
					alert("红包不存在了！");
					return false;
				}else if(data.code == 3){
					alert("您领取红包太频繁了！");
					return false;
				}
			}
		 });
    });
    
    $(".letterS li a").click(function(e) {
        return false;	
		
    });
	
	$(".letter").mouseover(function(e) {
		var text = $(this).text();	
		$(".brandAll").hide();
		$("#brand-"+text).show();
    });
	
	$(".all").mouseover(function(e) {
		var text = $(this).text();	
		$(".brandAll").hide();
		$("#brandAll").show();
    });
	
	var itop;

    $(".open").live("click",
    function() { //搜索区域  展开/收起切换
        var flag = $(this).text();
        if (flag == "收起") {
            $(".letterS").hide();
            $(".brandAll").css({
                "height": "84px",
                "overflow": "hidden"
            });
            $(".showHide").css({
           	 "height": "84px",
             "overflow": "hidden"     	
           });
            $(this).html("展开<i></i>");
            $(".open i").css({
                "background-position": "-71px -53px"
            });
            $(".brandAll").hide();
    		$("#brandAll").show();
    		itop = $('#order').offset().top;
            return false;
        }else {
            $(".letterS").show();
            $(".letterS").css({
                "height": "30px"
            });
            $(".brandAll").css({
                "height": "165px",
                "overflow": "auto"  
                
            });     
            $(".showHide").css({
            	 "height": "auto",
                 "overflow": "visible"            	
            })
            $(this).html("收起<i></i>");
            $(".open i").css({
                "background-position": "-55px -53px"
            });
            itop = $('#order').offset().top;
            return false;
        }
        

    });
    
    

    var divHeight = $(".showHide").height()
    var ulHeight = $(".showHide ul").height()
	 if(ulHeight>=divHeight){
		 
		 $(".open").show();
		 $(".showHide").css({"height":"84px","overflow":"hidden"});
		 }
	else{
		 $(".open").hide();
		 $(".showHide").css("height","auto");
		}
	

    $(".innerSearch input").keyup(function() { //品牌搜索
        var brand = $(this).val();
        if (brand != "") {
            var num = $(".brandAll li").size();
            for (var i = 0; i < num; i++) {
                if ($(".brandAll li").eq(i).find("a").text().indexOf(brand) > -1) {
                    $(".brandAll li").hide();
                    $(".brandAll li").eq(i).show();
                    return false;

                }

            }

        }

        else {
            $(".brandAll li").show();
            return false;
        }

    });
    
    
    $(".choose").hover(function() { //   显示更多选项box
        $(this).next(".box").show();
    }, function() {
        $(this).next(".box").hide();
    });
    $(".box").hover(function() { //   选项列表
        $(this).show();
    }, function() {
        $(this).hide();
    });
    
  //一周销量排行榜
    $('.board .list li').bind('mouseover', function() {

        $('.board .list li').find('.name_s').show();
        $('.board .list li').find('.listBig').hide();
        $('.board .list li').removeClass('on');
        $(this).addClass('on');
        $(this).find('.listBig').show();
        $(this).find('.name_s').hide();

    });
	

    //产品搜索导航
    itop = $('#order').offset().top;

    $(window).bind('scroll', function() {

        if ($(window).scrollTop() > itop) {

            $("#order").attr('class', 'order_fixed');
            $('.order_div').css('display', 'block');
            //alert($("#order").attr('class'))
        } else {
            $("#order").attr('class', 'order');
            $('.order_div').css('display', 'none');

        }

        if ($(window).scrollTop() < itop) {

            $("#order").attr('class', 'order');
            $('.order_div').css('display', 'none');
        }
    });
    
    
  //商品价格搜索确定按钮的显隐
    $('.priceArea[priceArea=0] input').focus(function() {
        $(this).parent('span').siblings('.sure').show();
    });
	$('.priceArea[priceArea=0] input').blur(function() {
        //$(this).parent('span').siblings('.sure').hide();
    });

    $(".order .cancle").click(function(e) {
        $(".order").find("input").val("");
        $('.priceArea[priceArea=0] input').parent('span').siblings('.sure').hide();
    });
	

    $("#order .ok").click(function(e) { //验证输入的价格区间
        var value1 = parseInt($("#order").find("input").eq(0).val());
        var value2 = parseInt($("#order").find("input").eq(1).val());
        if (isNaN(value1) || isNaN(value2) || value1 > value2 || value1 <0 || value2<0) {
            $("#order").find("input").val("");
            alert('请输入正确的价格区间！例如：￥10-￥100。');
            return;
        } else {
        	var nowUrl =$("#nowUrl").val();
        	nowUrl = nowUrl.replaceAll("#v2","");
        	var targetUrl = "";
        	if(nowUrl.indexOf("search.htm") >= 0){
        		var params = nowUrl.split('&');
            	var flag = false;
            	for(var i=0;i<params.length;i++){
            		if(params[i].indexOf("pr=")>=0){
            			flag = true;
            			targetUrl += "pr="+value1+"|"+value2+"&";
            		}else{
            			targetUrl += params[i]+"&";
            		}
            	}
            	if(!flag){
            		targetUrl += "pr="+value1+"|"+value2;
            	}
        	}else{
            	var params = nowUrl.split('-');
	        	for(var i=0;i<params.length;i++){
	        		if(i==6){
	        			targetUrl += value1+"|"+value2+"-";
	        		}else if(i==params.length-1){
	        			targetUrl += params[i];
	        		}else{
	        			targetUrl += params[i]+"-";
	        		}
	        	}
        	}
        	window.location.href=targetUrl;
        	return;
        }

    });
    
    $(".proListSearch li").hover(function() { //移入商品显示外层
        $(this).css({
            "z-index": "18"
        });
        $(this).find("div").eq(0).show();

    },
    function() {
        $(this).find("div").eq(0).hide();

        $(this).css({
            "z-index": "15"
        });
    });
    
    $(".searchBottomBtn").click(function(e) {
		$(this).parent().submit();
	});

});




function setMark(id,type){
	if(type == '1'){
		//直降
		$("#mark_"+id).html("直降");
		$("#mark_"+id).show();
	}else if(type == '2'){
		//人气
		$("#mark_"+id).html("人气");
		$("#mark_"+id).show();
	}else if(type == '3'){
		//高性价
		$("#mark_"+id).html("高性价");
		$("#mark_"+id).show();
	}else if(type == '4'){
		//疯抢
		$("#mark_"+id).html("疯抢");
		$("#mark_"+id).show();
	}else if(type == '5'){
		//限量
		$("#mark_"+id).html("限量");
		$("#mark_"+id).show();
	}else if(type == '6'){
		//新品
		$("#mark_"+id).html("新品");
		$("#mark_"+id).show();
	}else if(type == '7'){
		//AOC
		$("#mark_"+id).html("AOC");
		$("#mark_"+id).show();
	}else if(type == '8'){
		//热卖
		$("#mark_"+id).html("热卖");
		$("#mark_"+id).show();
	}else if(type == '9'){
		//爆款
		$("#mark_"+id).html("爆款");
		$("#mark_"+id).show();
	}else if(type == '10'){
		//特价
		$("#mark_"+id).html("特价");
		$("#mark_"+id).show();
	}else if(type == '11'){
		//赠品
		$("#mark_"+id).html("赠品");
		$("#mark_"+id).show();
	}else if(type == '12'){
		//秒杀
		$("#mark_"+id).html("秒杀");
		$("#mark_"+id).show();
	}else if(type == '13'){
		//DOC
		$("#mark_"+id).html("DOC");
		$("#mark_"+id).show();
	}else if(type == '14'){
		//限时抢购
		$("#mark_"+id).html("限时抢购");
		$("#mark_"+id).show();
	}else if(type == '15'){
		//惊爆价
		$("#mark_"+id).html("惊爆价");
		$("#mark_"+id).show();
	}else if(type == '16'){
		//好评
		$("#mark_"+id).html("好评");
		$("#mark_"+id).show();
	}else if(type == '17'){
		//送礼
		$("#mark_"+id).html("送礼");
		$("#mark_"+id).show();
	}else if(type == '18'){
		//已售完
		$("#mark_"+id).html("已售完");
		$("#mark_"+id).show();
	}
	
	
}





