<div class="help-details fl w700" style="margin-top:-10px;">
<div class="article fl wfs">
<div class="cover">
<img src="<?php echo $this->_var['article']['file_url']; ?>" alt=""/>
</div>
<h3 class="title"><?php echo htmlspecialchars($this->_var['article']['title']); ?></h3>
<div class="msg fz12">
<p>
<i class="like"></i><span><?php echo $this->_var['article']['click_count']; ?></span>
<i class="commont"></i><span><?php echo $this->_var['article']['add_time']; ?></span>
<i class="shouchang"></i><span></span>
<span style="float:right;margin-right:150px;">分享到</span>
<div class="bdsharebuttonbox" data-tag="share_1" style="right:500px; position:absolute;">
<div class="bdsharebuttonbox">
<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
<a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
<a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
<a class="bds_count" data-cmd="count" style="right:460px; position:absolute;background:none;color:#333"></a>
</div>
</div>
</p>
</div>
<hr class="fancy-line"></hr>
<?php if ($this->_var['article']['content']): ?>
<?php echo $this->_var['article']['content']; ?>
<?php endif; ?>
</div>
</div>