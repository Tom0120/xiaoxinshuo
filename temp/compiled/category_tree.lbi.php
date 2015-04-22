
<script language="javascript">
function changeImg(obImg,sNewURL)
{
if(sNewURL!="") obImg.src=sNewURL;
}
</script>
<div class="CFBtn">
<div class="dot sCB">
<div style=" position:absolute;left:34px;top:-2px;z-index:9999999">商品分类</div>
<div class="fenlei" style="width:112px;height:40px;border-left:1px solid #EE4136;border-right:1px solid #EE4136;">
<img style="cursor:hand;" src="themes/xinyu/images/fenlei.jpg"  width="110" height="40" onmouseover="changeImg(this,'themes/xinyu/images/fenleixia.jpg');" onmouseout="changeImg(this,'themes/xinyu/images/fenlei.jpg');">
</div>
<div class="CFCon dn">
<div class="l left">
<ul class="CateTitle">
<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['cat']['iteration']++;
?>
<li <?php if ($this->_foreach['cat']['iteration'] == 1): ?> class="current" <?php else: ?><?php endif; ?>>
<div class="ocicon"><div>
<?php if ($this->_foreach['cat']['iteration'] == 1): ?>
<img src="http://img.miyabaobei.com/other/15212054710946.png" img1="http://img.miyabaobei.com/other/15212054706985.png" img2="http://img.miyabaobei.com/other/15212054710946.png" alt="" class="flimg">
<?php endif; ?>
<?php if ($this->_foreach['cat']['iteration'] == 2): ?>
<img src="http://img.miyabaobei.com/other/15212062547389.png" img1="http://img.miyabaobei.com/other/15212062547389.png" img2="http://img.miyabaobei.com/other/15212062550131.png" alt="" class="flimg">
<?php endif; ?>
<?php if ($this->_foreach['cat']['iteration'] == 3): ?>
<img src="http://img.miyabaobei.com/other/15212062719335.png" img1="http://img.miyabaobei.com/other/15212062719335.png" img2="http://img.miyabaobei.com/other/15212062722138.png" alt="" class="flimg">
<?php endif; ?>
<?php if ($this->_foreach['cat']['iteration'] == 4): ?>
<img src="http://img.miyabaobei.com/other/15212062901133.png" img1="http://img.miyabaobei.com/other/15212062901133.png" img2="http://img.miyabaobei.com/other/15212062904265.png" alt="" class="flimg">
<?php endif; ?>
<?php if ($this->_foreach['cat']['iteration'] == 5): ?>
<img src="http://img.miyabaobei.com/other/15212063403504.png" img1="http://img.miyabaobei.com/other/15212063403504.png" img2="http://img.miyabaobei.com/other/15212063406102.png" alt="" class="flimg">
<?php endif; ?>
<?php if ($this->_foreach['cat']['iteration'] == 6): ?>
<img src="http://img.miyabaobei.com/other/15212063504225.png" img1="http://img.miyabaobei.com/other/15212063504225.png" img2="http://img.miyabaobei.com/other/15212063507959.png" alt="" class="flimg">
<?php endif; ?>
<?php if ($this->_foreach['cat']['iteration'] == 7): ?>
<img src="http://img.miyabaobei.com/other/15212063602218.png" img1="http://img.miyabaobei.com/other/15212063602218.png" img2="http://img.miyabaobei.com/other/15212063604951.png" alt="" class="flimg">
<?php endif; ?>
</div>
</div>
<?php echo htmlspecialchars($this->_var['cat']['name']); ?>
</li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
</div>
<div class="l right CateCon">
<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['cat']['iteration']++;
?>
<div class="tcate" <?php if ($this->_foreach['cat']['iteration'] == 1): ?> style="display:block;width:663px;" <?php else: ?>style="width:663px;"<?php endif; ?>>
<?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
<div class="ctitle">
<span><?php echo htmlspecialchars($this->_var['child']['name']); ?></span>
</div>
<div class="ccon pb0">
<?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?>
<a href="<?php echo $this->_var['childer']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
</div>
</div>
</div>

