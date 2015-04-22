<form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
<div class="right fl">
<div class="discount-msg">
<h3><?php echo $this->_var['goods']['goods_name']; ?></h3>
<h4><?php echo $this->_var['goods']['goods_brief']; ?></h4>
</div>
<div class="discount-msg-two">
<p class="price">
<?php if ($this->_var['goods']['promote_price'] == ""): ?>
<span><?php echo $this->_var['lang']['shop_price']; ?></span><?php echo $this->_var['goods']['promote_price']; ?>
<?php else: ?>
<span><?php echo $this->_var['lang']['shop_price']; ?></span><?php echo $this->_var['goods']['shop_price']; ?>
<?php endif; ?>
</p>
<p class="end-time">
<?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
<i class="time-pic"></i>
<font id="left_time_msg"><?php echo $this->_var['lang']['residual_time']; ?></font>
<font id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></font>
<?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?>
<?php endif; ?>
</p>
<p class="youhui">
<?php if ($this->_var['promotion']): ?>  
<span><?php echo $this->_var['lang']['activity']; ?></span>
<?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['item']['type'] == "snatch"): ?>
<a href="snatch.php" title="<?php echo $this->_var['lang']['snatch']; ?>"><span class="phrase1s"><?php echo $this->_var['lang']['snatch']; ?></span></a>
<?php elseif ($this->_var['item']['type'] == "group_buy"): ?>
<a href="group_buy.php" title="<?php echo $this->_var['lang']['group_buy']; ?>"><span class="phrase1"><?php echo $this->_var['lang']['group_buy']; ?></span></a>
<?php elseif ($this->_var['item']['type'] == "auction"): ?>
<a href="auction.php" title="<?php echo $this->_var['lang']['auction']; ?>"><span class="phrase1"><?php echo $this->_var['lang']['auction']; ?></span></a>
<?php elseif ($this->_var['item']['type'] == "favourable"): ?>
<a href="activity.php" title="<?php echo $this->_var['lang']['favourable']; ?>"><span class="phrase1"><?php echo $this->_var['lang']['favourable']; ?></span></a>
<?php endif; ?>
<a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>"><span><?php echo $this->_var['item']['act_name']; ?></span></a>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>
</p>
</div>  
<div class="center_add">
<span><?php echo $this->_var['lang']['number']; ?></span>
<div class="center_add_left"> <a onclick="buyNumber.minus()" href="javascript:;"><img src="themes/xinyu/images/jian.gif" ></a>
<input name="number" type="text" value="1" defaultnumber="1" onblur="changePrice()" id="product_num">
<a onclick="buyNumber.plus()" href="javascript:;"><img src="themes/xinyu/images/jia.gif" /></a></div>
<p><?php if ($this->_var['goods']['goods_number'] != "" && $this->_var['cfg']['show_goodsnumber']): ?> 
<?php if ($this->_var['goods']['goods_number'] == 0): ?> 
<?php echo $this->_var['lang']['goods_number']; ?>
<?php echo $this->_var['lang']['stock_up']; ?> 
<?php else: ?> 
<?php echo $this->_var['lang']['goods_number']; ?>
<?php echo $this->_var['goods']['goods_number']; ?> <?php echo $this->_var['goods']['measure_unit']; ?> 
<?php endif; ?> 
<?php endif; ?></p>
</div>
<script>
var buyNumber = {
maxNumber : 100,
minNumber : 1,
defaultNumber : function(){
var defaultnumber = $('#product_num').attr('defaultnumber');
defaultnumber = parseInt(defaultnumber)
if(defaultnumber < 1){
defaultnumber = 1;
}
return defaultnumber;
},
goodNumber : function(num){
if(typeof(num) == 'number'){
return $('#product_num').val(num);
}else{
return parseInt($('#product_num').val());
}
},
plus : function(){
var num = buyNumber.goodNumber() + buyNumber.defaultNumber();
if(num <= buyNumber.maxNumber){
buyNumber.goodNumber(num);
}
},
minus : function(){
var num = buyNumber.goodNumber() - buyNumber.defaultNumber();
if(num >= buyNumber.minNumber){
buyNumber.goodNumber(num);
}
}
}
</script>

<?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
<p class="attri">

<?php if ($this->_var['spec']['attr_type'] == 1): ?>
<?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
<i><?php echo $this->_var['spec']['name']; ?>:</i>
<?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');$this->_foreach['spec'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['spec']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
        $this->_foreach['spec']['iteration']++;
?>
<?php if ($this->_foreach['spec']['iteration'] < 2): ?>
<span style="color:#000; text-decoration:none" class="now"  onclick="changeAtt(this)" name="spec_<?php echo $this->_var['spec_key']; ?>" title="加<?php echo $this->_var['value']['format_price']; ?>">
<label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
<input style="display:none" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onclick="changePrice()"/>
<?php echo $this->_var['value']['label']; ?>
</label>
</span>
<?php endif; ?>
<?php if ($this->_foreach['spec']['iteration'] > 1): ?>
<span style="color:#000; text-decoration:none"  onclick="changeAtt(this)" name="spec_<?php echo $this->_var['spec_key']; ?>" title="加<?php echo $this->_var['value']['format_price']; ?>">
<label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
<input style="display:none" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onclick="changePrice()"/>
<?php echo $this->_var['value']['label']; ?>
</label>
</span>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
<?php else: ?>
<select name="spec_<?php echo $this->_var['spec_key']; ?>" onchange="changePrice()">
<?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
<option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?></option>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</select>
<input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
<?php endif; ?>
<?php else: ?>
<?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
<label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
<input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
<?php echo $this->_var['value']['label']; ?>  </label>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
<?php endif; ?>
</p>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

<p class="make fl wfs" id="gwc">
<?php if ($this->_var['goods']['goods_number'] == 0): ?>
<a class="make-cart fl" id="down_now" target="_blank" href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)">立即预定</a>
<?php else: ?>
<a class="make-cart fl" href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)">立即购买</a>
<?php endif; ?>
<a class="make-show fl" href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)" target="_blank"><i></i>加入收藏</a>
</p>
</div>
</form>