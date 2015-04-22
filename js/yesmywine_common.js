$(function(){
	//头部我的账户弹出框
	$(".myaccount").mouseover(function(){
		$(this).addClass("dropdown-hover");				  
	});   
	$(".myaccount").mouseout(function(){
		$(this).removeClass("dropdown-hover");				  			  
	});   
	
	//头部购物车弹出框
	$(".head-shopcart").mouseover(function(){
		$(this).children(".shopcart-list").show();
	});
	$(".head-shopcart").mouseout(function(){
		$(this).children(".shopcart-list").hide();
	});
	
	if($(window).width()<1210)
	{
		$("body").addClass("s950");
	}
	
	
	
	
	

})

//头部删除购物车商品
function yesmywine_drop_goods(rec_id)
{

	Ajax.call('flow.php?step=yesmywine_drop_goods', 'rec_id=' + rec_id, yesmywineDropGoodsResponse, 'POST', 'JSON');
}
function yesmywineDropGoodsResponse(result)
{
	$("#ECS_CARTINFO").html(result);
}

function number_down(id)
{	
	if($("#goods_id_"+id+" [name='goods_number']").val() > 1)
	{
		$("#goods_id_"+id+" [name='goods_number']").val(Number($("#goods_id_"+id+" [name='goods_number']").val())-1);
	}
	else
	{
		alert("购买数量不能少于1件");	
	}
	
}
function number_up(id)
{
	$("#goods_id_"+id+" [name='goods_number']").val(Number($("#goods_id_"+id+" [name='goods_number']").val())+1);
	
}