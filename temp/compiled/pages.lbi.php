
<form name="selectPageForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
<?php if ($this->_var['pager']['styleid'] == 0): ?>
<div class="fl wfs">
<ul class="pagination pages">
<li><a><span><?php echo $this->_var['lang']['pager_1']; ?><?php echo $this->_var['pager']['record_count']; ?><?php echo $this->_var['lang']['pager_2']; ?></span></a></li>
<li><a><span><?php echo $this->_var['lang']['pager_3']; ?><?php echo $this->_var['pager']['page_count']; ?><?php echo $this->_var['lang']['pager_4']; ?></a></span></li>
<li <?php if ($this->_var['pager']['page_first']): ?>class="active"<?php else: ?> <?php endif; ?>><a href="<?php echo $this->_var['pager']['page_first']; ?>"><span><?php echo $this->_var['lang']['page_first']; ?></span></a></li>
<li <?php if ($this->_var['pager']['page_prev']): ?>class="active"<?php else: ?> <?php endif; ?>><a href="<?php echo $this->_var['pager']['page_prev']; ?>"><span><?php echo $this->_var['lang']['page_prev']; ?></span></a> </li>
<li <?php if ($this->_var['pager']['page_next']): ?>class="active"<?php else: ?> <?php endif; ?>><a href="<?php echo $this->_var['pager']['page_next']; ?>"><span><?php echo $this->_var['lang']['page_next']; ?></span></a></li>
<li <?php if ($this->_var['pager']['page_last']): ?>class="active"<?php else: ?> <?php endif; ?>><a href="<?php echo $this->_var['pager']['page_last']; ?>"><span><?php echo $this->_var['lang']['page_last']; ?></span></a></li>
<li><a><span>
<?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] == 'keywords'): ?>
<input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo urldecode($this->_var['item']); ?>" />
<?php else: ?>
<input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item']; ?>" />
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<select name="page" id="page" onchange="selectPage(this)">
<?php echo $this->html_options(array('options'=>$this->_var['pager']['array'],'selected'=>$this->_var['pager']['page'])); ?>
</select>
</span></a></li>
</ul>
</div>
<?php else: ?>

<div class="clearfix">
<div class="fanye clearfix">
<?php if ($this->_var['pager']['page_count'] != 1): ?>
<a href="<?php echo $this->_var['pager']['page_prev']; ?>" class="prevpage">上一页</a>
<?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['pager']['page'] == $this->_var['key']): ?>
<a class="number on" ><?php echo $this->_var['key']; ?></a>
<?php else: ?>
<a href="<?php echo $this->_var['item']; ?>"  class="number" class="active"><?php echo $this->_var['key']; ?></a>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  	
<a href="<?php echo $this->_var['pager']['page_next']; ?>" class="nextpage">下一页</a>
<?php endif; ?>
</div>
</div>

<?php endif; ?>
</form>
<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
sel.form.submit();
}

//-->
</script>
