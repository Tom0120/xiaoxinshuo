<div class="cover-page-index-slide j-index-slide fl wfs">
<div class="border">
<div class="center">
<div class="relative">
<div class="location">
<div id="wrap" class="wrap">
<div class="slide" id="slide">
<ul class="slide_ul">
<?php $_from = $this->_var['ad_diy']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'diyAd');if (count($_from)):
    foreach ($_from AS $this->_var['diyAd']):
?>
<li><a href="<?php echo $this->_var['diyAd']['imglink']; ?>"><img src="<?php echo $this->_var['diyAd']['imgcode']; ?>" alt="<?php echo htmlspecialchars($this->_var['diyAd']['title']); ?>"></a></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
</div>
</div>
</div>
<a href="javascript:void(0);" class="show_pre j-slide-btn">左边</a>
<a href="javascript:void(0);" class="show_next j-slide-btn">右边</a>
</div>
</div>
</div>
<div class="icons fl wfs" >
<ul id="tips">
<li><span></span></li>
<li><span></span></li>
<li><span></span></li>
<li><span></span></li>
<li><span></span></li>
<li><span></span></li>
</ul>
</div>
<script src="themes/xinyu/js/jquery.SuperSlide.js"></script>
<script>
$(function(){
$(".j-index-slide").slide({
mainCell:"#slide .slide_ul",
effect:"leftLoop",
prevCell:".show_pre",
nextCell:".show_next",
titCell:"#tips li",
titOnClassName:"cur",
interTime:"5000",
autoPlay:true
});
});
</script>
</div>