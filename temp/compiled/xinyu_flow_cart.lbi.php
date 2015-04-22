<?php if ($this->_var['step'] == "cart"): ?>
<script src="themes/xinyu/js/c.js?22281"></script>
<link href="themes/xinyu/css/cart.css" type="text/css" rel="stylesheet" />
<?php echo $this->smarty_insert_scripts(array('files'=>'showdiv.js')); ?>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
<div class="midHeader">
<div class="midHeaderBox">
<div class="jxwLogo">
<p class="jxwIndex" style="background:url(themes/xinyu/images/logo.png) no-repeat;"><a href="index.php"></a></p>
</div>
<div class="orderFlow of-bg1"><span class="oStatus">1、我的购物车</span><span>2、确认订单信息</span><span>3、成功提交订单</span></div>
</div>
</div>

<div class="cartW">


<div class="cartBox" style="padding:0px;margin:15px auto 10px;color:#666666;font-family:Arial, Helvetica, sans-serif, 宋体;">
<div class="mycartTit" style="padding:0px;margin:0px;">
<p class="mcT-l">
<b>我的购物车</b><span style="line-height:21px;">现在<a href="user.php"></a>，您购物车中的商品将被永久保存</span>
</p>
<p class="mcT-r">
满<b>100元</b>即可免运费
</p>
</div>
<?php if ($this->_var['goods']['goods_id'] < 0): ?>
<div id="cart_container" style="padding:0px;margin:0px;color:#666666;font-family:Arial, Helvetica, sans-serif, 宋体;">
<div class="cart-empty" style="padding:20px 0px 30px;margin:0px;text-align:center;">
<p class="empty-tit" style="font-size:18px;font-family:微软雅黑;color:#CC0000;">
<i></i>篮子空空~~去买点啥吧！
</p>
<p class="empty-pro">
温馨提醒：您可以选择现在<a class="pro-but" href="user.php"></a>，查看之前加入购物车的商品，或者<a class="pro-link" href="inndex.php">随便逛逛</a>
</p>
</div>
</div>
<?php else: ?>
<form id="formCart" name="formCart" method="post" action="flow.php">

<div id="cart_container" style="padding:0px;margin:0px;">
<div class="cart-t" style="padding:0px;margin:0px;">
<div class="cart-tHeader" style="padding:0px;margin:0px;background-color:#F6F6F6;">

<div class="tHeaderCon tHead-name" style="padding:0px;margin:0px;color:#000000;">
<?php echo $this->_var['lang']['goods_name']; ?>
</div>
<?php if ($this->_var['show_goods_attribute'] == 1): ?>
<div class="tHeaderCon tHead-name" style="width:230px;padding:0px;margin:0px;color:#000000;">	
<?php echo $this->_var['lang']['goods_attr']; ?>
</div>
<?php endif; ?>
<div class="tHeaderCon tHead-jxPri" style="padding:0px;margin:0px;text-align:center;color:#000000;">
<?php echo $this->_var['lang']['shop_prices']; ?>
</div>


<div class="tHeaderCon tHead-amount" style="padding:0px;margin:0px;text-align:center;color:#000000;">
<?php echo $this->_var['lang']['number']; ?>
</div>
<div class="tHeaderCon tHead-subt" style="padding:0px;margin:0px;text-align:center;color:#000000;">
<?php echo $this->_var['lang']['subtotal']; ?>
</div>
<div class="tHeaderCon tHead-ope" style="width:160px;padding:0px;margin:0px;text-align:center;color:#000000;">
<?php echo $this->_var['lang']['handle']; ?>
</div>
</div>
<div class="cart-tabBox" style="padding:0px;margin:0px;">
<table class="cartTab" cellpadding="0" cellspacing="0" id="tab">
<tbody>
<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
<tr class="cTab-tr" id="tr_goods_<?php echo $this->_var['goods']['rec_id']; ?>">
<td class="cTab-check">
</td>
<td class="cTab-name">
<div class="cn-Pic" style="padding:0px;margin:0px;">
<a target="_blank" href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" width="52" height="52" style="border:1px solid #CCCCCC;height:52px;width:52px;" /></a>
</div>
<div class="cn-Con" style="padding:0px 0px 0px 10px;margin:0px;">
<p class=" cn-Con-Name">
<a target="_blank" href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>"><?php echo $this->_var['goods']['goods_name']; ?></a>
</p>
<p class="cn-Con-Pro">
<?php if ($this->_var['goods']['is_gift'] > 0): ?>
<span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span>
<?php endif; ?>

</p>
</div>
</td>
<?php if ($this->_var['show_goods_attribute'] == 1): ?>
<td class="cTab-jxPri" style="width:200px;text-align:center;font-family:微软雅黑;"> 
<?php echo nl2br($this->_var['goods']['goods_attr']); ?>
</td>
<?php endif; ?>
<td class="cTab-gold" style="text-align:center;">
<?php echo $this->_var['goods']['goods_price']; ?>

</td>

<td class="list-num" align="center" style="width:120px;padding-left:0px;">
<div class="clearfix number">
<a href="javascript:;" onclick="changenum(<?php echo $this->_var['goods']['rec_id']; ?>,-1);return false;" class="Left sub" title="减少数量">-</a>
<input type="text" name="goods_number[<?php echo $this->_var['goods']['rec_id']; ?>]" id="goods_number_<?php echo $this->_var['goods']['rec_id']; ?>" value="<?php echo $this->_var['goods']['goods_number']; ?>" size="4" class="Left num" style="text-align:center " onBlur="change_goods_number(<?php echo $this->_var['goods']['rec_id']; ?>,this.value)"/>
<a class="Left add" href="javascript:;" onclick="changenum(<?php echo $this->_var['goods']['rec_id']; ?>,1);return false;" title="增加数量">+</a><span class="Left unit"></span> 
</div>
</td>
<td class="cTab-subt"  id="goods_subtotal_<?php echo $this->_var['goods']['rec_id']; ?>" style="text-align:center;font-weight:bold;color:#E6393D;font-family:微软雅黑;">
<?php echo $this->_var['goods']['subtotal']; ?>
</td>
<td class="cTab-ope" style="width:110px;text-align:right;">
<div class="opeBox" style="padding:20px 0px 0px;margin:0px;">
<span><a href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='flow.php?step=drop_goods&amp;id=<?php echo $this->_var['goods']['rec_id']; ?>'; ">删除</a></span>
<?php if ($_SESSION['user_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
<span><a href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='flow.php?step=drop_to_collect&amp;id=<?php echo $this->_var['goods']['rec_id']; ?>'; ">收藏</a></span>
<?php endif; ?>   
</div>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</tbody>
</table>

</div>
<div class="cart-settlement" style="padding:8px 25px 8px 20px;margin:0px;">
<div class="cSet-l" style="padding:0px;margin:0px;">
<p class="cSet-p">
<span class="cSet-qk"><i></i><a class="qingkong" id="clear_cart" onclick="javascript:if (confirm('确定<?php echo $this->_var['lang']['clear_cart']; ?>?'))location.href='flow.php?step=clear'">清空购物车</a></span>
</p>

</div>
<div class="cSet-r" style="padding:0px;margin:0px;">
<p>
<span>商品总计：</span><span class="cSet-span" style="font-family:微软雅黑;"  id="total_desc1"><?php echo $this->_var['total']['goods_price']; ?></span>
</p>
</div>

<div class="clear" style="padding:0px;margin:0px;font-size:0px;">
</div>
</div>
<div class="cart-total" id="cart-total" style="padding:0px;margin:0px;background-color:#F7F7F7;">
<div class="cart-but-cont" style="padding:16px 0px 16px 15px;margin:0px;">
<a href="index.php">继续购物</a>
</div>
<!--div class="cTotal-gol" style="padding:0px 0px 0px 25px;margin:0px;font-weight:bold;">
共送金币：<span style="font-weight:normal;color:#CC0000;">138</span>个
</div--->
<div class="cart-but" style="padding:10px 20px 10px 0px;margin:0px;">
<a href="flow.php?step=checkout"><span id="submitOrderBtn" class="cart-but-sett"></span></a>
<div class="cTotal-amo" style="padding:0px 10px 0px 0px;margin:0px;">
<span style="font-weight:bold;">总计（不含运费）：</span><span style="font-family:微软雅黑;color:#E6393D;font-size:22px;" id="total_desc"><?php echo $this->_var['total']['goods_price']; ?></span>
</div>
</div>
<div class="clear" style="padding:0px;margin:0px;font-size:0px;">
</div>
</div>
</div>

</div>
</div>
<input type="hidden" name="step" value="update_cart" />
</form>

<script language="javascript">
function changenum(rec_id, diff)
            {
                var goods_number =Number(document.getElementById('goods_number_' + rec_id).value) + Number(diff);             
                change_goods_number(rec_id,goods_number);
            }
            function change_goods_number(rec_id, goods_number)
            {     
               Ajax.call('flow.php?step=ajax_update_cart', 'rec_id=' + rec_id +'&goods_number=' + goods_number, change_goods_number_response, 'POST','JSON');                
            }
            function change_goods_number_response(result)
            {               
                if (result.error == 0)
                {
                    var rec_id = result.rec_id;
                    document.getElementById('goods_number_' +rec_id).value = result.goods_number;//更新数量
                    document.getElementById('goods_subtotal_' +rec_id).innerHTML = result.goods_subtotal;//更新小计
                    if (result.goods_number <= 0)
                    {// 数量为零则隐藏所在行
                        document.getElementById('tr_goods_' +rec_id).style.display = 'none';
                        document.getElementById('tr_goods_' +rec_id).innerHTML = '';
                    }
                    document.getElementById('total_desc').innerHTML =result.total_price;//更新合计
                    if (document.getElementById('ECS_CARTINFO'))
                    {//更新购物车数量
                       document.getElementById('ECS_CARTINFO').innerHTML = result.cart_info;
                    }
                }
                else if (result.message != '')
                {
                    alert(result.message);
                }                
            }
</script>

<?php endif; ?>
<?php echo $this->fetch('library/xinyu_flow_cart_best.lbi'); ?>
</div>
<?php endif; ?>