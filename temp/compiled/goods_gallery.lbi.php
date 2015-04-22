<?php if ($this->_var['pictures']): ?>
<div class="preview">
<div id="vertical" class="bigImg">
<img src="<?php echo $this->_var['goods']['goods_img']; ?>" width="348" height="348" alt="" id="midimg" />
<div style="display:none;" id="winSelector"></div>
</div>
<div class="smallImg">
<div class="scrollbutton smallImgUp disabled"></div>
<div id="imageMenu">
<ul>
<?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');if (count($_from)):
    foreach ($_from AS $this->_var['picture']):
?>
<li><img src="<?php echo $this->_var['picture']['thumb_url']; ?>" width="68" height="68" alt="<?php echo $this->_var['picture']['goods_name']; ?>"/></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
</div>
<div class="scrollbutton smallImgDown"></div>
</div>	
<div id="bigView" style="display:none;"><img width="800" height="800" alt="" src="" /></div>
<div class="fenxiang-text">
<i class="fenxiangimg"></i>
<span>分享到：</span>
</div>
<div class="fenxiang">
<div class="bdsharebuttonbox" data-tag="share_1">
<div class="bdsharebuttonbox">
<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
<a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
<a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
</div>
</div>
</div>
<div class="shoucang">
<img src="themes/xinyu/images/shoucang2.png" onClick="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)"  style="cursor:pointer;" />
</div>
</div>
<?php endif; ?>