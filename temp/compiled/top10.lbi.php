<?php if ($this->_var['top_goods']): ?>

<div class="board">
<h3>销量排行榜</h3>
<div class="list">
<ul>
<?php $_from = $this->_var['top_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_03908600_1429625879');$this->_foreach['top_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_03908600_1429625879']):
        $this->_foreach['top_goods']['iteration']++;
?>
<?php if ($this->_foreach['top_goods']['iteration'] < 4): ?>
<li class=" on first clearfix">
<span <?php if ($this->_foreach['top_goods']['iteration'] < 4): ?> class=" num top3" <?php endif; ?>><?php echo $this->_foreach['goods']['iteration']; ?></span>
<div class="listBig" style="display:block;">
<a class="img" href="<?php echo $this->_var['goods_0_03908600_1429625879']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_03908600_1429625879']['name']); ?>" target="_blank"><img src="http://img07.jximage.com/2013/1002/9a4670f3f2eb44dabb1c11929c4f7cff4.jpg" alt="<?php echo htmlspecialchars($this->_var['goods_0_03908600_1429625879']['name']); ?>"/></a>
<div class="info">
<a class="name" title="<?php echo htmlspecialchars($this->_var['goods_0_03908600_1429625879']['name']); ?>" href="<?php echo $this->_var['goods_0_03908600_1429625879']['url']; ?>" target="_blank"><?php echo $this->_var['goods_0_03908600_1429625879']['short_name']; ?></a>
<p class="price" id="pop_3">
<?php echo $this->_var['goods_0_03908600_1429625879']['price']; ?>
</p>
</div>
</div>
<span class="name_s" style="display:none;"><?php echo $this->_var['goods_0_03908600_1429625879']['short_name']; ?></span>
</li>
<?php endif; ?>	
<?php if ($this->_foreach['top_goods']['iteration'] > 4): ?>
<li><span class="num "><?php echo $this->_foreach['goods']['iteration']; ?></span>
<div class="listBig" style="display:none;">
<a class="img" href="<?php echo $this->_var['goods_0_03908600_1429625879']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_03908600_1429625879']['name']); ?>" target="_blank"><img src="<?php echo $this->_var['goods_0_03908600_1429625879']['thumb']; ?>" alt=""/></a>
<div class="info">
<a class="name" title="<?php echo htmlspecialchars($this->_var['goods_0_03908600_1429625879']['name']); ?>" href="<?php echo $this->_var['goods_0_03908600_1429625879']['url']; ?>" target="_blank"><?php echo $this->_var['goods_0_03908600_1429625879']['short_name']; ?></a>
<p class="price" id="pop_4867">
<?php echo $this->_var['goods_0_03908600_1429625879']['price']; ?>
</p>
</div>
</div>
<span class="name_s"><?php echo $this->_var['goods_0_03908600_1429625879']['short_name']; ?></span>
</li>
<?php endif; ?>	
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
</div>
</div>

<?php endif; ?>