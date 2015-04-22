<?php if ($this->_var['step'] == "consignee"): ?>
<div class="midHeader">
<div class="midHeaderBox">
<div class="jxwLogo">
<p class="jxwIndex" style="background:url(themes/xinyu/images/logo.png) no-repeat;"><a href="index.php"></a></p>
</div>
<div class="orderFlow of-bg1"><span class="oStatus">1、我的购物车</span><span>2、确认订单信息</span><span>3、成功提交订单</span></div>
</div>
</div>
<div class="cartWrap">
<div class="cartMain" style="width:950px;">
<link href="http://misc.jiuxian.com/css/order/order.css?20150305" type="text/css" rel="stylesheet" />

<?php echo $this->smarty_insert_scripts(array('files'=>'region.js,utils.js')); ?>
<script type="text/javascript">
region.isAdmin = false;
<?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_50994400_1429623184');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_50994400_1429623184']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item_0_50994400_1429623184']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>


onload = function() {
if (!document.all)
{
document.forms['theForm'].reset();
}
}

</script>

<?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee');$this->_foreach['consignee'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['consignee']['total'] > 0):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee']):
        $this->_foreach['consignee']['iteration']++;
?>
<?php if ($this->_foreach['consignee']['iteration'] < 2): ?>
<form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkConsignee(this)">
<?php echo $this->fetch('/library/consignee.lbi'); ?>
</form>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
</div>
<?php endif; ?>