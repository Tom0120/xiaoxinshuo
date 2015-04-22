<form id="formCart" name="formCart" method="post" action="flow.php" >
<div  id="ECS_CARTINFO" style="position:relative;z-index: 9999999;">

<div class="shopingcar" id="topCart">
<s class="setCart"></s><a href="flow.php" class="t" rel="nofollow">我的购物车</a>
<b id="cartNum">
<?php if ($this->_var['goods']): ?>
<?php echo $this->_var['goods_number']; ?>
<?php else: ?>
0
<?php endif; ?>
</b>
<span class="outline"></span>
<span class="blank"></span>
<div id="cart_lists" style="border:1px solid #EFEFEF;background-color:white;color:#666666;font-family:Microsoft YaHei,微软雅黑,SimSun,宋体;">
<div id="cat_form13" class="floatcar" style="padding:10px;">
<div class="btnhover">
</div>
<div class="btnhover">
</div>
<?php if ($this->_var['goods']): ?>
        <div class="title" style="color:#6C6C6C;">
	满99元顺丰包邮！
	</div>
	<ul id="tEvent">
	<?php $_from = $this->_var['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_81009000_1429540440');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_81009000_1429540440']):
        $this->_foreach['goods']['iteration']++;
?>
	<li style="color:#565656;background-color:#F5F5F5;">
	<div class="l">
	<a href="<?php echo $this->_var['goods_0_81009000_1429540440']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods_0_81009000_1429540440']['goods_thumb']; ?>" style="border:1px solid #CCCCCC;width:40px;height:40px;" /></a>
	</div>
	<div class="c">
	<a href="<?php echo $this->_var['goods_0_81009000_1429540440']['url']; ?>" target="_blank"><?php echo $this->_var['goods_0_81009000_1429540440']['short_name']; ?></a><span style="color:#CECECE;"></span>
	</div>
	<div class="r" style="text-align:right;">
	<span><?php echo $this->_var['goods_0_81009000_1429540440']['goods_price']; ?></span>&nbsp;×<?php echo $this->_var['goods_0_81009000_1429540440']['goods_number']; ?>&nbsp;<br />
	<a href="javascript:;" onClick="deleteCartGoods(<?php echo $this->_var['goods_0_81009000_1429540440']['rec_id']; ?>)" >删除</a>
	</div>
	</li>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</ul>
	<div class="total">
	<p style="float:left;width:140px;">
	共有&nbsp;<span id="listCartNum"><?php echo $this->_var['str']; ?>&nbsp;</span>件商品&nbsp;<br />
	总重&nbsp;<span id="listCartNum">50</span>&nbsp;kg（免包装费）
	</p>
	<p style="float:left;width:180px;text-align:right;">
	共计：<span>¥<?php echo $this->_var['order_amount']; ?></span><br />
	<a href="flow.php?step=checkout" class="submit5">去购物车结算</a>
	</p>
	</div>

<?php else: ?>

        
	<div class="floatcar1" id="cat_form13" style="padding:10px 0px;">
	<div class="nopro" style="margin:0px 0px 0px 85px;">
	<p>
	购物车中暂无商品
	</p>
	<p>
	<span style="color:#969696;">如您已添加商品，请<a id="loginReturnUrl" href="user.php" class="no_dl">登录</a>查看</span>
	</p>
	</div>
	</div>
	


<?php endif; ?>
</div>
<div class="clear"></div>
</div>
</div>
















</div>

<script type="text/javascript" src="themes/xinyu/js/cart_gwc.js"></script>
<script type="text/javascript">
function deleteCartGoods(rec_id)
{
Ajax.call('delete_cart_goods.php', 'id='+rec_id, deleteCartGoodsResponse, 'POST', 'JSON');
}
/**
* 接收返回的信息
*/
function deleteCartGoodsResponse(res)
{
if (res.error)
{
alert(res.err_msg);
}
else
{
document.getElementById('ECS_CARTINFO').innerHTML = res.content;
}
}
</script>
<script type="text/javascript">
function display()
{
document.getElementById("cartbox").style.display="block"; 
}
function disappear()
{
document.getElementById("cartbox").style.display="none"; 
}
</script>
</form>