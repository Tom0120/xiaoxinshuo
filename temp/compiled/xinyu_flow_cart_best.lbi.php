<?php if ($this->_var['fittings_list']): ?>

<div class="cart-bList">
		<div class="bList-tit"><p>购买了同样商品的顾客还购买了</p></div>
<div class="bListBox">
		<div class="bList-prev"><span></span></div>
<div class="bList-con">
 <form action="flow.php" method="post">
		<div class="max">
	<?php $_from = $this->_var['fittings_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'fittings');if (count($_from)):
    foreach ($_from AS $this->_var['fittings']):
?>	
		<ul >
		<li>
		<div class="blc-pic"><a target="_blank" href="<?php echo $this->_var['fittings']['url']; ?>" ><img src="<?php echo $this->_var['fittings']['goods_thumb']; ?>" width="160" height="160"/></a></div>
		<div class="blc-intro">
		<p class="blc-int-name"><a target="_blank" href="<?php echo $this->_var['fittings']['url']; ?>"><?php echo htmlspecialchars($this->_var['fittings']['short_name']); ?></p>
		<p class="blc-int-pri"><b><span _data="price" ><?php echo $this->_var['fittings']['fittings_price']; ?></span></b></p>
		<p class="blc-int-buy"><a href="javascript:fittings_to_flow(<?php echo $this->_var['fittings']['goods_id']; ?>,<?php echo $this->_var['fittings']['parent_id']; ?>)"  name="add_to_cart_btn"></a></p>
		</div>
		</li>
		</ul>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
</form>
</div>
	<div class="bList-next"><span></span></div>
	<div class="clear"></div>
</div>
</div>
<?php endif; ?>