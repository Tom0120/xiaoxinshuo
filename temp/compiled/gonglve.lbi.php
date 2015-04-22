<div class="layout style0 yxl">
<div class="hd">
<div class="mt-tag-elem">孝心攻略</div>            
<span>一千零一种爱的表达方式</span>
<a href="article_cat.php?id=4" class="changeBnt" id="xxlChg">全部 ></a>
</div>

<div class="boutique3">
<div class="bd">
<ul class="picLB" id="picLBxxl">

<?php $_from = $this->_var['class_articles_4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');$this->_foreach['articles'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['articles']['total'] > 0):
    foreach ($_from AS $this->_var['article']):
        $this->_foreach['articles']['iteration']++;
?>
<?php if (($this->_foreach['articles']['iteration'] - 1) < 8): ?>
<li class="items-li j-items-li">
<a href="<?php echo $this->_var['article']['url']; ?>">
<img src="<?php echo $this->_var['article']['file_url']; ?>" alt="" />
<p class="name"><?php echo htmlspecialchars($this->_var['article']['title']); ?></p>
<p>
<i class="like"></i><span><?php echo $this->_var['article']['click_count']; ?></span>
<i class="commont"></i><span>0</span>
<i class="shouchang"></i>
<span>
<div class="bdsharebuttonbox" data-tag="share_1" >
<a class="bds_count" data-cmd="count"  style="width:50px;height:100px;line-height:50px;background:#FFF;margin-left:-50px;"></a>
</div>
<style>
.bdsharebuttonbox a：hover{background:none;}
</style>
</span>
</p>
</a>
</li>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

</ul>
</div>
</div>

</div>
