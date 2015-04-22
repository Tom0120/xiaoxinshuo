$(function(){
	
	//商品推荐区商品滚动
	var tj_container = $("div.bListBox > div.bList-con > div.max");
	var tj_pages_count = tj_container.find("ul").length;
	var tj_crnt_page = 1;
	$("div.bList-prev > span").click(function(){
		tj_crnt_page --;
		if(tj_crnt_page < 1){tj_crnt_page = 1;}
		tj_container.stop().animate({"margin-left":((tj_crnt_page-1) * -1000) + "px"});
	});
	$("div.bList-next > span").click(function(){
		tj_crnt_page ++;
		if(tj_crnt_page > tj_pages_count){tj_crnt_page = tj_pages_count;}
		tj_container.stop().animate({"margin-left":((tj_crnt_page-1) * -1000) + "px"});
	});
    //商品推荐区加入购物车
    $("a[name='add_to_cart_btn']").click(function(){
    	var goodsId = $(this).attr("_proid");
    	jQuery.post("/addToCart.htm",{"pack":'',"count":1,"goods":goodsId},function(data){
    		if(data.status==1){
    			window.location="/";
    		}else{
    			if(data.stack){ 
    				if(data.stack.indexOf("快递停发") >-1){
    					var alertstrtpm = data.stack;
    					var eint = alertstrtpm.indexOf("]");
    					alertstr=alertstrtpm.substring(eint+1,alertstrtpm.length);
    					var startTime = alertstr.split(",")[0].split("-")[0];
    					var endTime = alertstr.split(",")[0].split("-")[1];
    					$(".start").html(startTime);
    					$(".end").html(endTime);
    					if(window.confirm('该地区于'+startTime+'至'+endTime+'快递停发，您可以继续下单，我们将会在年后第一时间给您发货!')){
    						setCookie("knowStopDelivery","true",1);
    		            }else{}
    				}else{
    					alert(data.stack);
    				}
    			}else{ alert("服务器繁忙，请稍后重试!"); }
    		}
    	});
    });
    //GA统计代码
    //ga('send', 'event', 'Cst_Dim1', 'orderSubmit', {'dimension1': 'cart'});
});
function rebindEvents(){
	if($(":checkbox[name='cart_item']").length == 0){return;}
	//参与的活动
	$(".cSet-prom").bind({
		'mouseover':function(){$(this).parent().siblings(".cSetPromBox").show();},
		'mouseout':function(){$(this).parent().siblings(".cSetPromBox").hide();}
	});
	$('.cSetPromBox').bind({
		'mouseover':function(){$(this).show();},
		'mouseout':function(){$(this).hide();}
	});
	//去结算
	$("#submitOrderBtn").click(function(){
		if($(":checked[name='cart_item']").length == 0){
			alert("请先勾选需要结算的商品");
			return;
		}
		if(stockout_gifts != "" && confirm("赠品已赠完，是否继续？") == false){
			return;
		}
		var submit_btn = $(this);
		submit_btn.hide();
		$(".sett-submit").show();
		$.ajax({
			type: "post",
		    url: "/verifyCart.htm",
            dataType: "json",
            success: function (data) {
            	if(data.status==1){
    				$("#stockoutGifts").val(stockout_gifts);
    				$("#orderForm").submit();
    			}else if(data.status == -1){
    				reloadCart();
    			}else{
    				submit_btn.show();
    				$(".sett-submit").hide();
    				alert(data.stack);
    			}
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
             alert(errorThrown);
            }
          });
	});
	//初始化地区选择控件
	initCitySelector();
}
//重载购物车
function reloadCart(){

}
function retf(th,num){
	var ind = num;
	switch(ind){
		case 0 :
			$(".city_select select").eq(ind+1).empty();
			$(".city_select select").eq(ind+2).empty();
			 var v = th.value;
			 for(var j=0;j<K.kind_region[v].length; j++){
				var op;
				if(j == 0){
					op = "<option value='"+K.kind_region[v][j][0]+"' selected='selected'>"+K.kind_region[v][j][1]+"</option>";
					$(".city_select select").eq(ind+1).append(op);
				}else{
					op = "<option value='"+K.kind_region[v][j][0]+"'>"+K.kind_region[v][j][1]+"</option>";
					$(".city_select select").eq(ind+1).append(op);
				}
			}
			var idx = $(".city_select select").eq(1).find("option:selected").val();
			for(var j=0; j< K.kind_region[idx].length;j++){
				if(j == 0){
					op = "<option value='"+K.kind_region[idx][j][0]+"' selected='selected'>"+K.kind_region[idx][j][1]+"</option>";
					$(".city_select select").eq(2).append(op);
				}else{
					op = "<option value='"+K.kind_region[idx][j][0]+"'>"+K.kind_region[idx][j][1]+"</option>";
					$(".city_select select").eq(2).append(op);
				}
			}
		break;
		case 1 : 
			$(".city_select select").eq(ind+1).empty();
			 var v = th.value;
			
			if(K.kind_region[v] != undefined){
				for(var j=0;j<K.kind_region[v].length; j++){
					var op = "<option value='"+K.kind_region[v][j][0]+"'>"+K.kind_region[v][j][1]+"</option>";
					$(".city_select select").eq(ind+1).append(op);
				}
			}
		break;
		case 2 :
			$(".cart_citybox").hide();
			var cookVal = new Array();
			cookVal.push($(".city_select select").eq(0).find("option:selected").val());
			cookVal.push($(".city_select select").eq(1).find("option:selected").val());
			cookVal.push($(".city_select select").eq(2).find("option:selected").val());
			//console.warn(cookVal[1] +"======="+ cookVal[2]);
			if(cookVal[1] == undefined || cookVal[2] == undefined){
				return;
			}
			$(".cart_city b").text($(".city_select select").eq(0).find("option:selected").text());
			setCookie("user_province", cookVal[0]+"_"+cookVal[1]+"_"+cookVal[2], 12);
			location.reload();
		break;
	}

}
