
<?php if ($this->_var['action'] == 'collection_list'): ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
<div class="rightBox">
<div class="rightTit"><h2><i></i>我的收藏</h2></div>
<div class="rightCon">
<ul class="mycolNav clearfix">
<li id="all"><a href="user.php?act=collection_list">全部关注</a></li>
<li><a class="j-item " href="user.php?act=collection_list&type5=is_promote">促销</a></li>
<li><a class="j-item " href="user.php?act=collection_list&type1=is_on_sale">上架</a></li>
<li><a class="j-item " href="user.php?act=collection_list&type2=is_best">精品</a></li>
<li><a class="j-item " href="user.php?act=collection_list&type3=is_new">新品</a></li>
<li><a href="user.php?act=collection_list&type4=is_hot">热销</a></li>
<script type="text/javascript">
$("#all").addClass("mctOn"); 		
</script>
</ul>
<table cellpadding="0" cellspacing="0" border="0" class="mycolBox">
<tr>
<th class="mycT0" width="10"></th>
<th class="mycT1" width="70"><span class="mycT2All">缩略图</span></th>
<th class="mycT2" width="330"><span>商品</span></th>
<th class="mycT3" width="135">收藏时间</th>
<th class="mycT4" width="225">当前价格</th>
<th class="mycT5" width="165">操作</th>
</tr>

<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
<tr class="first">
<td class="mycT0"></td>
<td  class="mycT2">
<a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="" width="60px" height="60px"></a>
</td>
<td class="mycT2"><a href="<?php echo $this->_var['goods']['url']; ?>" class="f6"><?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?></a></td>
<td class="mycT4">1122222222</td>
<td bgcolor="#ffffff"><?php if ($this->_var['goods']['promote_price'] != ""): ?>
<?php echo $this->_var['lang']['promote_price']; ?><span class="goods-price"><?php echo $this->_var['goods']['promote_price']; ?></span>
<?php else: ?>
<?php echo $this->_var['lang']['shop_price']; ?><span class="goods-price"><?php echo $this->_var['goods']['shop_price']; ?></span>
<?php endif; ?>       
</td>
<td mycT5>
<?php if ($this->_var['goods']['is_attention']): ?>
<a href="javascript:if (confirm('<?php echo $this->_var['lang']['del_attention']; ?>')) location.href='user.php?act=del_attention&rec_id=<?php echo $this->_var['goods']['rec_id']; ?>'" class="f6"><?php echo $this->_var['lang']['no_attention']; ?></a>
<?php else: ?>
<a href="javascript:if (confirm('<?php echo $this->_var['lang']['add_to_attention']; ?>')) location.href='user.php?act=add_to_attention&rec_id=<?php echo $this->_var['goods']['rec_id']; ?>'" class="f6"><?php echo $this->_var['lang']['attention']; ?></a>
<?php endif; ?>
<a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" class="f6"><?php echo $this->_var['lang']['add_to_cart']; ?></a> <a href="javascript:if (confirm('<?php echo $this->_var['lang']['remove_collection_confirm']; ?>')) location.href='user.php?act=delete_collection&collection_id=<?php echo $this->_var['goods']['rec_id']; ?>'" class="f6"><?php echo $this->_var['lang']['drop']; ?></a>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</tr>
</table>
</div>
 

</div>
</div>

<?php endif; ?>
