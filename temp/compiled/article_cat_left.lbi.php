<style>
 .dt{padding-bottom:10px;padding-top:10px;background-color:#fff;}
 .dd1{padding-top:15px;padding-bottom:15px;background-color:#fff;border-bottom:1px solid #e0e0e0}
.dd1 .img{margin-right:25px}
 .dd1 .img img{width:245px;height:185px;}
 .dd1 .title-date{width:500px;padding-bottom:10px}
.dd1 .title-date h2{padding-bottom:5px;}
 .dd1 .title-date a{color:#333;white-space:nowrap}
 .dd1 .title-date a:hover{color:#ff5b57}
 .dd1 .title-date span{float:left;font-size:12px;color:#888;margin-top:5px;}
 .dd1 .view-details{font-size:12px;color:#333}
 .dd1 .description{width:500px;padding-top:50px;padding-bottom:30px;font-size:12px;line-height:25px;}
</style>
<div class="help-list fl w770">
<p style="border-bottom:1px solid #e0e0e0;"></p>
<?php $_from = $this->_var['artciles_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
<dl>
<dd class="dd1 fl wfs">
<a class="img fl" href="<?php echo $this->_var['article']['url']; ?>">
<img src="<?php echo $this->_var['article']['file_url']; ?>">
</a>
<h2><a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>"><?php echo htmlspecialchars($this->_var['article']['title']); ?></a></h2>
<p class="description fl">
<?php echo sub_str(strip_tags($this->_var['article']['content']),90); ?> 
</p>
<div class="title-date">
<p>
<i class="like"></i><span><?php echo $this->_var['article']['click_count']; ?></span>
<i class="commont"></i><span>1223</span>
<i class="shouchang"></i>
<span>
<div class="bdsharebuttonbox" data-tag="share_1" style="right:680px; position:absolute;">
<div class="bdsharebuttonbox">
<a class="bds_count" data-cmd="count" style="margin-top:160px;margin-left:-103px;position:absolute;background:none;color:#333"></a>
</div>
</div>

</span>
</p>
</div>
</dd>
</dl>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>