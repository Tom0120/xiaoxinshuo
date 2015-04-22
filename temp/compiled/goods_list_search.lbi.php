
<div class="main-srp">

<div class="breadcrumb">
<div class="line">
</div>
<div class="crumb clearfix">
<i class="square"></i><?php echo $this->_var['ur_here']; ?><i class="arrow"></i>
</div>
</div>


<div class="select">
<?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>

<?php if ($this->_var['brands']['1']): ?>
<div class=" alcohol property clearfix" style="display:block">
<div class="selectLine1 clearfix">
<div class="proLeft">
品牌
</div>
<div class="proRight limit flow showHide clearfix ">
<ul class="clearfix">
<?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand_0_93560000_1429623233');if (count($_from)):
    foreach ($_from AS $this->_var['brand_0_93560000_1429623233']):
?>
<li><a href="<?php echo $this->_var['brand_0_93560000_1429623233']['url']; ?>"><?php echo $this->_var['brand_0_93560000_1429623233']['brand_name']; ?></a></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
<a class="open" href="#">展开<i></i></a>
</div>
</div>
<?php endif; ?>

<?php if ($this->_var['price_grade']['1']): ?>

<div class="selectLine2 clearfix" style="border-top: 1px dotted #ccc;">
<div class="proLeft">
价格
</div>
<div class="proRight clearfix">
<ul class="clearfix">
<?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?>
<li  style="width:82px;" ><a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
</div>
</div>

<?php endif; ?>
<?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr']):
?>

<div class="ty_sycj selectLine1 clearfix" style="border-top: 1px dotted #ccc;">
<div class="proLeft">
<?php echo htmlspecialchars($this->_var['filter_attr']['filter_attr_name']); ?>
</div>
<div class="proRight clearfix">
<ul class="clearfix">
<?php $_from = $this->_var['filter_attr']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
<li><a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
</div>
</div>

<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
<?php endif; ?>
</div>


<div class="order" id="order">
<ul class="clearfix">
<li class="tab first "><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list">默认排序</a></li>
<li class="tab"><a href="">销量 <i></i></a></li>
<li class="tab jg"><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list" title=" 默认 ">价格 <i style="background-position: -86px -108px; "></i></a></li>
<!--li class="tab"><a href="#" title=" 默认 ">评价 <i></i></a></li-->
<li class="tab sjsj"><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=last_update&order=<?php if ($this->_var['pager']['sort'] == 'last_update' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" title=" 默认 ">上架时间 <i></i></a></li>
<!--li class="priceArea clearfix" pricearea="0">
<span class="left clearfix"><i>&yen;</i><input type="text" value="" id="minPrice"></span><span class="zhi"></span>
<span class="right clearfix"><i>&yen;</i><input type="text" value="" id="maxPrice"></span>
<span class="sure"><a class="ok" href="#">确定</a><a class="cancle" href="#">取消</a></span>
</li-->
<li class="page clearfix">
<p>
<span class="cur">1</span><span>/</span><span class="total"><?php echo $this->_var['pager']['page_count']; ?></span>
</p>
<a class="btn prev" href="#" style="background-position: 0px -142px; "></a>
<a class="btn next" href="#" style="background-position: -35px -142px; "></a>
</li>
<li class="relate">相关产品<span><?php echo $this->_var['pager']['record_count']; ?></span>件</li>
</ul>
</div>

<?php if (isset ( $this->_var['goods_list'] )): ?>
<div class="proListSearch">
<ul class="clearfix">
<?php if ($this->_var['goods_list']): ?>
<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
<?php if ($this->_var['goods']['goods_id']): ?>
<li>
<div class="frameA">
<div class="frameB">
</div>
</div>
<div class="content clearfix">
<div class="collect_box">
<span class="collect" id="cell_9892"><a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>);" style="color:#FFF"><i></i>收藏</a></span>
<a class="img clearfix" href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo $this->_var['goods']['goods_name']; ?>" target="_blank">
<span id="mark_9892" class="cxtag tj" style="display:none"></span>
<img proimgid="9892" src="<?php echo $this->_var['goods']['goods_thumb']; ?>"/></a>
</div>
<a class="proName" href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo $this->_var['goods']['goods_name']; ?>" target="_blank"><?php echo $this->_var['goods']['goods_name']; ?><span id="promote_9892" class="slogan"><?php echo $this->_var['goods']['goods_brief']; ?></span></a>
<div class="priceArea clearfix">
<p class="price" id="product_9892">
<?php if ($this->_var['goods']['promote_price'] != ""): ?>
<?php echo $this->_var['goods']['promote_price']; ?>
<?php else: ?>
<?php echo $this->_var['goods']['shop_price']; ?>
<?php endif; ?>
</p>
<div id="activity_9892">
</div>
</div>
<a class="judge" href="<?php echo $this->_var['goods']['url']; ?>#answerArea" title="" target="_blank">已有<span>321</span>人评价</a>
<div class="buyArea clearfix">
<span>
<input name="number" type="text" value="1" defaultnumber="1" onblur="changePrice()" id="product_num">
</span>
<div class="edit">
<a class="increase" href="<?php echo $this->_var['goods']['url']; ?>"></a><a class="decrease" href="#"></a>
</div>
<a class="cart clearfix prtlt_btn2" href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)">加入购物车</a>
</div>
</div>
</li>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php else: ?>
<div class="notic_box"><i></i>
<p>抱歉，没有找到符合条件的商品<br/>您可以适当减少筛选条件或者<a class="rePrePage" href="javascript:history.go(-1)">返回上一页</a></p>
<div class="clear"></div>
</div>
<?php endif; ?>
</ul>
</div>
<?php endif; ?>


<?php echo $this->fetch('library/pages.lbi'); ?>
<!--div class="clearfix">
<div class="searchBottom">
<form action="" method="get">
<input id="bottomKeys" type="text" name="keys" value=" "/><a class="searchBottomBtn" href="#">搜索</a>
</form>
</div>
</div-->
</div>

<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script>
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>