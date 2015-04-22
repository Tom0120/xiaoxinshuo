<script src="themes/xinyu/js/newnav.js"></script>
<script src="themes/xinyu/js/nav.js"></script>
<div style="height:40px;" class="fl wfs">
<div class="Nnav">
<div class="cover-page-wrapper cover-page-wrapper2 clearfix">
<?php echo $this->fetch('/library/category_tree.lbi'); ?>
<ul>
<li class="current"><a href="index.php">首页</a></li>
<?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['xinyuindex'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['xinyuindex']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['xinyuindex']['iteration']++;
?>
<?php if ($this->_foreach['xinyuindex']['iteration'] < 9): ?>
<li ><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?><span></span></a> </li>           
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
</div>
</div>
</div>