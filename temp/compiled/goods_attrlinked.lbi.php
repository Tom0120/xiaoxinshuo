<?php $_from = $this->_var['attribute_linked']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'linked');if (count($_from)):
    foreach ($_from AS $this->_var['linked']):
?>
<?php if ($this->_var['linked']['goods']): ?>
<div class="alsoBuy">
<h3><?php echo sub_str($this->_var['linked']['title'],11); ?></h3>
<div class="list">
<?php $_from = $this->_var['linked']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'linked_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['linked_goods_data']):
?>
<ul id="buy">
<li><a class="img" href="<?php echo $this->_var['linked_goods_data']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['linked_goods_data_name']); ?>" target="_blank"><img src="<?php echo $this->_var['linked_goods_data']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['linked_goods_data_name']); ?>"/></a><a class="name" href="<?php echo $this->_var['linked_goods_data']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['linked_goods_data_name']); ?>" target="_blank"><?php echo htmlspecialchars($this->_var['linked_goods_data']['short_name']); ?><span class="slogan"></span></a>
<p class="price" id="buy_17493">
<?php echo $this->_var['linked_goods_data']['shop_price']; ?>
</p>
</li>
</ul>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
</div>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>