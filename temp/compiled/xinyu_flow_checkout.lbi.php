<script src="themes/xinyu/js/jquery.min.js"></script>
<?php if ($this->_var['step'] == "checkout"): ?>
<div class="midHeader">
<div class="midHeaderBox">
<div class="jxwLogo">
<p class="jxwIndex" style="background:url(themes/xinyu/images/logo.png) no-repeat;"><a href="index.php"></a></p>
</div>
<div class="orderFlow of-bg1"><span class="oStatus">1、我的购物车</span><span>2、确认订单信息</span><span>3、成功提交订单</span></div>
</div>
</div>
<link href="http://misc.jiuxian.com/css/order/order.css?20150305" type="text/css" rel="stylesheet" />
<form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkOrderForm(this)">
<script type="text/javascript">
var flow_no_payment = "<?php echo $this->_var['lang']['flow_no_payment']; ?>";
var flow_no_shipping = "<?php echo $this->_var['lang']['flow_no_shipping']; ?>";
</script>
<div class="cartWrap">
<div class="cartMain">
<h3>确认订单信息</h3>
<div class="orderInfo" style="padding:0px;margin:0px;background-color:#FFFFFF;">
<div class="step-1" style="padding:0px;margin:0px;border:1px solid #DDDDDD;">
<div class="stepTitle" style="padding:0px 0px 0px 20px;margin:0px;font-weight:bold;color:#323232;font-size:14px;background-color:#F7F7F7;">
<div class="field-tit" style="padding:0px;margin:0px;">
收货人信息
</div>
<div class="clear" style="padding:0px;margin:0px;font-size:0px;">
</div>
</div>
<div class="orderAddress" style="padding:10px 0px 0px;margin:0px;">
<div class="orderItem first" style="padding:0px 33px;margin:0px;color:#999999;">
<b><?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?></b><span style="line-height:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo htmlspecialchars($this->_var['consignee']['address']); ?>&nbsp;&nbsp;&nbsp;<?php echo $this->_var['consignee']['tel']; ?>&nbsp;&nbsp;<?php echo htmlspecialchars($this->_var['consignee']['email']); ?></span><a href="flow.php?step=consignee" class="update" style="color:red;">&nbsp;&nbsp;&nbsp;修改</a>
<div class="clear" style="padding:0px;margin:0px;font-size:0px;">
</div>
</div>
</div>
<div class="addAddress" style="padding:0px 0px 0px 33px;margin:0px;">
<a href="flow.php?step=consignee">+ 新增收货地址</a>
</div>
</div>

<?php if ($this->_var['is_exchange_goods'] != 1 || $this->_var['total']['real_goods_count'] != 0): ?>
<div class="step-2" style="padding:0px;margin:10px 0px 0px;border:1px solid #DDDDDD;color:#666666;font-family:Arial, Helvetica, sans-serif, 宋体;">
<div class="stepTitle" style="padding:0px 0px 0px 20px;margin:0px;font-weight:bold;color:#323232;font-size:14px;background-color:#F7F7F7;">
支付方式
</div>
<div class="paymentInfo" style="padding:0px;margin:0px;background-color:#FFFFFF;">
<ul>
<?php $_from = $this->_var['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'payment');if (count($_from)):
    foreach ($_from AS $this->_var['payment']):
?>

<li id="hdfk_li" class="selected" onClick="chaCloor(this)" style="vertical-align:top;background-color:#FBFBFB;">
<span class="paymentList1"><input type="radio" name="payment" value="<?php echo $this->_var['payment']['pay_id']; ?>" <?php if ($this->_var['order']['pay_id'] == $this->_var['payment']['pay_id']): ?>checked<?php endif; ?> isCod="<?php echo $this->_var['payment']['is_cod']; ?>" onclick="selectPayment(this)" <?php if ($this->_var['cod_disabled'] && $this->_var['payment']['is_cod'] == "1"): ?>disabled="true"<?php endif; ?>/></span>
<span class="paymentList2" style="color:#333333;font-weight:bold;"><?php echo $this->_var['payment']['pay_name']; ?></span>
<span class="paymentList3" style="padding-left:30px;color:#333333;"><?php echo $this->_var['payment']['pay_desc']; ?></span>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</li>
</ul>
</div>
</div>
<?php else: ?>
<input name = "payment" type="radio" value = "-1" checked="checked"  style="display:none"/>
<?php endif; ?>

<div id="goods_list_container" style="padding:0px;margin:0px;">
<div class="step-7" style="padding:0px;margin:10px 0px 0px;border:1px solid #DDDDDD;">
<div class="stepTitle" style="padding:0px 0px 0px 20px;margin:0px;font-weight:bold;color:#323232;font-size:14px;background-color:#F7F7F7;">
<?php echo $this->_var['lang']['goods_list']; ?>
</div>
<?php if ($this->_var['allow_edit_cart']): ?><a href="flow.php" class="backCart"><?php echo $this->_var['lang']['modify']; ?></a><?php endif; ?>
<div class="productInfoWrap" style="padding:0px 0px 10px;margin:0px;">
<div class="productInfoTitle" style="padding:0px 0px 0px 33px;margin:0px;">
<div class="InfoTitle-1" style="padding:0px;margin:0px 13px 0px 0px;font-weight:bold;">
</div>
<div class="InfoTitle-2" style="padding:0px 0px 0px 188px;margin:0px 25px 0px 0px;font-weight:bold;">
<?php echo $this->_var['lang']['goods_name']; ?>
</div>
<div class="InfoTitle-3" style="padding:0px 0px 0px 64px;margin:0px 25px 0px 0px;font-weight:bold;">
<?php if ($this->_var['gb_deposit']): ?><?php echo $this->_var['lang']['deposit']; ?><?php else: ?><?php echo $this->_var['lang']['shop_prices']; ?><?php endif; ?>
</div>
<div class="InfoTitle-4" style="padding:0px 0px 0px 43px;margin:0px 25px 0px 0px;font-weight:bold;">
<?php echo $this->_var['lang']['number']; ?>
</div>
<div class="InfoTitle-5" style="padding:0px 0px 0px 63px;margin:0px;font-weight:bold;">
<?php echo $this->_var['lang']['subtotal']; ?>
</div>
</div>
<div class="productListW" style="padding:0px;margin:0px 0px 15px;">
<div class="productList" style="padding:0px;margin:0px;">
<div class="productTable" style="padding:0px;margin:0px;">
<table cellpadding="0" cellspacing="0" style="width:998px;">
<tbody>
<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_36906900_1429576964');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_36906900_1429576964']):
?>
<tr class="bg bb">
<td width="542" style="background-color:#FBFBFB;">
<div class="productImg" style="padding:0px;margin:0px 12px 0px 33px;vertical-align:top;border:1px solid #DDDDDD;text-align:center;">
<a href="goods.php?id=<?php echo $this->_var['goods_0_36906900_1429576964']['goods_id']; ?>" target="_blank"><img src="<?php echo $this->_var['goods_0_36906900_1429576964']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods_0_36906900_1429576964']['goods_name']; ?>" width="52" height="52" /></a>
</div>
<div class="productName" style="padding:0px;margin:0px 25px 0px 5px;vertical-align:top;">
<p class="twoName">
<a target="_blank" href="goods.php?id=<?php echo $this->_var['goods_0_36906900_1429576964']['goods_id']; ?>"><?php echo $this->_var['goods_0_36906900_1429576964']['goods_name']; ?></a>
</p>
<p class="twoName">
<span style="color:#CC0000;">【禁用优惠劵】</span>
</p>
</div>
</td>
<td width="165" rowspan="1" style="background-color:#FBFBFB;">
<div class="productPriM" style="padding:0px;margin:0px 10px;vertical-align:top;font-family:微软雅黑;text-align:center;">
<?php echo $this->_var['goods_0_36906900_1429576964']['formated_goods_price']; ?>
</div>
</td>
<td width="130" rowspan="1" style="background-color:#FBFBFB;">
<div class="productNum" style="padding:0px;margin:0px 10px;vertical-align:top;text-align:center;">
<span><?php echo $this->_var['goods_0_36906900_1429576964']['goods_number']; ?></span>
</div>
</td>
<td width="150" rowspan="1" class="bb" style="background-color:#FBFBFB;">
<div class="productPri" style="padding:0px;margin:0px 10px;vertical-align:top;font-family:微软雅黑;color:#CC0000;font-weight:bold;font-size:14px;text-align:center;">
<?php echo $this->_var['goods_0_36906900_1429576964']['formated_subtotal']; ?>
</div>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</tbody>
</table>
<div class="tabBotLine" style="padding:0px;margin:0px;">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="step-8" style="padding:0px;margin:10px 0px 0px;">
<div class="stepTitle" style="padding:0px 0px 0px 20px;margin:0px;font-weight:bold;color:#323232;font-size:14px;background-color:#F7F7F7;">
订单结算
</div>
<div class="settlementList" style="padding:10px 0px 20px;margin:0px auto;">
<ul>
<?php if ($_SESSION['user_id'] > 0 && ( $this->_var['config']['use_integral'] || $this->_var['config']['use_bonus'] )): ?>
<li id="cxyh" style="vertical-align:top;">
<div class="settlementWrap" style="padding:10px 0px 10px 3px;margin:0px;">
<div class="settlementTitle" style="padding:0px 0px 0px 3px;margin:0px;">
<i class="off" id="cuxiaoyouhui"></i>促销优惠
</div>
</div>
<div class="settlementCon" id="cxyhdetail" style="padding:0px;margin:0px 0px 10px;">
<ul>
<?php if ($this->_var['config']['use_bonus']): ?>
<li class="gray" style="vertical-align:top;background-color:#FBFBFB;">
<div class="settlementRule" style="padding:0px;margin:0px;">
<?php if ($this->_var['config']['use_integral'] && $this->_var['config']['use_bonus']): ?>，<?php echo $this->_var['lang']['with_price']; ?>  <?php endif; ?>
<font class="f4_b"><?php echo $this->_var['total']['will_get_bonus']; ?></font><?php echo $this->_var['lang']['de']; ?><?php echo $this->_var['lang']['bonus']; ?>。
</div>
</li>
<?php endif; ?> 
</ul>
</div>
</li>
<?php endif; ?>
<?php if ($this->_var['allow_use_bonus']): ?>
<li id="jxlpk">
<div class="settlementWrap">
<div class="settlementTitle"><i class="on" id='shiyongjiuxianlipk' onClick="return click_a('divOne_2')" style="cursor:pointer;"></i><span>使用孝心网礼品卡</span></div>
</div>
<div class="balanceWrap giftCard" id="divOne_2" style="display:none;" >
<div class="balanceBox">
<div class="m"> <?php echo $this->_var['lang']['select_bonus']; ?>：</div>
<div>
<select name="bonus" onchange="changeBonus(this.value)" id="ECS_BONUS" style="border:1px solid #ccc;">
<option value="0" <?php if ($this->_var['order']['bonus_id'] == 0): ?>selected<?php endif; ?>><?php echo $this->_var['lang']['please_select']; ?></option>
<?php $_from = $this->_var['bonus_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bonus');if (count($_from)):
    foreach ($_from AS $this->_var['bonus']):
?>
<option value="<?php echo $this->_var['bonus']['bonus_id']; ?>" <?php if ($this->_var['order']['bonus_id'] == $this->_var['bonus']['bonus_id']): ?>selected<?php endif; ?>><?php echo $this->_var['bonus']['type_name']; ?>[<?php echo $this->_var['bonus']['bonus_money_formated']; ?>]</option>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</select>
</div>
</div>
<div class="balanceBox">
<div class="m">或输入序列号：</div>
<div class="g">
<input name="bonus_sn" type="text" class="inputBg" size="15" value="<?php echo $this->_var['order']['bonus_sn']; ?>" />
<input name="validate_bonus" type="button" value="<?php echo $this->_var['lang']['validate_bonus']; ?>" onclick="validateBonus(document.forms['theForm'].elements['bonus_sn'].value)" style="vertical-align:middle;" />
</div>
<div>
<i class="orderSubPro" id="alertstyle6"></i>
</div>
</div>
<div class="balanceBox">
<p><b>温馨提示：</b>提交订单前，请您在上方点选一个支付方式。若有疑问请致电：<?php echo $this->_var['service_phone']; ?></p>
</div>
</div>
</li>
<?php endif; ?>
<?php if ($this->_var['inv_content_list']): ?>
<li id="invoiceInforBox" style="vertical-align:top;" >
<div class="settlementWrap" style="height:40px;">
<div class="settlementTitle" onClick="return click_a('divOne_21')">
<span style="font-weight:bold;"><br class="Apple-interchange-newline" />
<i class="on" id="cuxiaoyouhui"></i>发票信息</span>
</div>
</div>
<div  id="divOne_21" style="display:none;margin-top:20px;padding-bottom:20px;">
<div class="invoiceWrap" >
<div id="fapiao" class="invoiceCon invCon01" >
<div class="giftItem invoiceTit" >
<?php if ($this->_var['inv_type_list']): ?>
<?php echo $this->_var['lang']['invoice_type']; ?>
<select name="inv_type" id="ECS_INVTYPE" <?php if ($this->_var['order']['need_inv'] != 1): ?>disabled="true"<?php endif; ?> onchange="changeNeedInv()" style="border:1px solid #ccc;">
<?php echo $this->html_options(array('options'=>$this->_var['inv_type_list'],'selected'=>$this->_var['order']['inv_type'])); ?></select>
<?php endif; ?><input name="need_inv" type="checkbox"  class="input" id="ECS_NEEDINV" onclick="changeNeedInv()" value="1" <?php if ($this->_var['order']['need_inv']): ?>checked="true"<?php endif; ?> />
<?php echo $this->_var['lang']['invoice_title']; ?>
<input name="inv_payee" type="text"  class="input" id="ECS_INVPAYEE" size="20" <?php if (! $this->_var['order']['need_inv']): ?>disabled="true" <?php endif; ?> value="<?php echo $this->_var['order']['inv_payee']; ?>" onblur="changeNeedInv()" />             
</div>
</div>
<div class="giftItem fapiaoSelect border"  style="padding:4px 0px 10px;margin:0px;">
<span><?php echo $this->_var['lang']['invoice_content']; ?>：</span>
<div class="field" style="padding:0px;margin:0px;">
<select name="inv_content" id="ECS_INVCONTENT" <?php if ($this->_var['order']['need_inv'] != 1): ?>disabled="true"<?php endif; ?>  onchange="changeNeedInv()" style="border:1px solid #ccc;">
<?php echo $this->html_options(array('values'=>$this->_var['inv_content_list'],'output'=>$this->_var['inv_content_list'],'selected'=>$this->_var['order']['inv_content'])); ?>
</select>
</div>
</div>
</div>
</div>
</li>
<?php endif; ?>
<li id="leaveComBox" style="vertical-align:top;">
<div class="settlementWrap" style="padding:10px 0px 10px 3px;margin:0px;">
<div class="settlementTitle" style="padding:0px 0px 0px 3px;margin:0px;">
<i class="on" id="cuxiaoyouhui"></i><span style="font-weight:bold;">留言信息</span>
</div>
</div>
<div class="invoiceWrap" id="liuyanxinxi" style="padding:10px 20px;margin:0px;background-color:#FBFBFB;">
<div class="invoiceCon invCon03" style="padding:10px 0px;margin:0px;">
<div class="paymentWrapLam" style="padding:0px;margin:0px;">
<textarea name="postscript" cols="80" rows="3" ><?php echo htmlspecialchars($this->_var['order']['postscript']); ?></textarea>
</div>
</div>
</div>
</li>
<?php echo $this->fetch('Library/order_total.lbi'); ?>
</ul>
</div>
</div>
<div class="step-9" style="padding:0px 10px 0px 33px;margin:0px;background-color:#F6F6F6;">
<div class="settleGold" style="padding:0px;margin:0px;color:#666666;font-weight:bold;">
共送<?php echo $this->_var['points_name']; ?>： 
<?php if ($this->_var['config']['use_integral']): ?>
<font class="f4_b"><?php echo $this->_var['total']['will_get_integral']; ?>个</font> 
<?php endif; ?>
</div>
<div class="subBtnBox" style="padding:0px;margin:13px 18px 0px 0px;">
<i></i>
</div>
<div class="toPay" style="padding:0px 25px 0px 0px;margin:0px;">
<?php if ($this->_var['is_group_buy']): ?>
<?php echo $this->_var['lang']['notice_gb_order_amount']; ?><?php endif; ?>
<?php if ($this->_var['total']['exchange_integral']): ?>
<?php echo $this->_var['lang']['notice_eg_integral']; ?><font class="f4_b"><?php echo $this->_var['total']['exchange_integral']; ?></font>
<?php endif; ?>
<strong>应付总金额：</strong>
<span id="payPrice" style="font-size:28px;color:#CC0000;font-family:微软雅黑;"><?php echo $this->_var['total']['amount_formated']; ?></span>
</div>
</div>
</div>
</div>
<div align="center" style="position:relative;">
<input type="image" src="themes/xinyu/images/bnt_subOrder.png" style="z-index:999999;position: absolute;margin-left:320px;margin-top:-65px;" />
<input type="hidden" name="step" value="done" style="position: relative;margin-top:-65px;"/>
</div>
</form>
<script language="javascript" type="text/javascript">
/***
*功能：隐藏和显示div
*参数divDisplay：html标签id
***/
function click_a(divDisplay)
{
if(document.getElementById(divDisplay).style.display != "block")
{
document.getElementById(divDisplay).style.display = "block";
}
else
{
document.getElementById(divDisplay).style.display = "none";
}
}

function click_a1(divDisplay)
{
if(document.getElementById(divDisplay).style.display != "block")
{
document.getElementById(divDisplay).style.display = "block";
}
else
{
document.getElementById(divDisplay).style.display = "none";
}
}
</script>
<?php endif; ?> 