<?php if ($this->_var['related_goods']): ?>
<div class="list_box_xg">
<h4 class="list_box_xg_title"><?php echo $this->_var['lang']['releate_goods']; ?></h4>
<div class="list_xg">
<?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'releated_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['releated_goods_data']):
?>
<ul class="goodsimg">
<li>
<a href="<?php echo $this->_var['releated_goods_data']['url']; ?>"><img src="<?php echo $this->_var['releated_goods_data']['goods_thumb']; ?>" alt="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>" style="width:180px;height:180px;"/></a>
<a href="<?php echo $this->_var['releated_goods_data']['url']; ?>" title="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>"><?php echo $this->_var['releated_goods_data']['short_name']; ?></a><br />
<?php if ($this->_var['releated_goods_data']['promote_price'] != 0): ?>
<font class="f11"><?php echo $this->_var['releated_goods_data']['formated_promote_price']; ?></font>
<?php else: ?>
<font class="f11"><?php echo $this->_var['releated_goods_data']['shop_price']; ?></font>
<?php endif; ?>
<p class="listDep-but">
<a  href="javascript:addToCart_choose(<?php echo $this->_var['releated_goods_data']['goods_id']; ?>)">加入购物车</a>
</p>
</li>
</ul>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
</div>
<div class="blank5"></div>
<?php endif; ?>
