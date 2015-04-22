
<?php if ($this->_var['bought_goods']): ?>
<div class="alsoBuy">
<h3><?php echo $this->_var['lang']['shopping_and_other']; ?></h3>
<div class="list">
<ul id="buy">
 <?php $_from = $this->_var['bought_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bought_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['bought_goods_data']):
?>
<li><a class="img" href="<?php echo $this->_var['bought_goods_data']['url']; ?>" title="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>" target="_blank"><img src="<?php echo $this->_var['bought_goods_data']['goods_thumb']; ?>g" alt="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>"/></a>
<a class="name" href="<?php echo $this->_var['bought_goods_data']['url']; ?>" title="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>" target="_blank">40°加拿大水晶头骨伏特加750ml<span class="slogan"></span></a>
<p class="price" id="buy_17493">
<?php if ($this->_var['bought_goods_data']['promote_price'] != 0): ?>
<?php echo $this->_var['bought_goods_data']['formated_promote_price']; ?>
<?php else: ?>
<?php echo $this->_var['bought_goods_data']['shop_price']; ?>
<?php endif; ?>
</p>
</li>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
</div>
</div>
<?php endif; ?>
