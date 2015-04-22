
<div class="hot">
<h3>热卖推荐</h3>
<div class="list">
<ul id="hot">
<?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
<li><a class="img" href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"/></a>
<p class="price" id="recommend_13">
<?php if ($this->_var['goods']['promote_price'] != ""): ?>
<?php echo $this->_var['goods']['promote_price']; ?>
<?php else: ?>
<?php echo $this->_var['goods']['shop_price']; ?>
<?php endif; ?> 
</p>
<a class="name" href="#" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank"><?php echo htmlspecialchars($this->_var['goods']['name']); ?></a>
<p class="sppl">
喜欢<a href="<?php echo $this->_var['goods']['url']; ?>#answerArea" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank">1048条</a>
</p>
</li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
</div>
</div>
