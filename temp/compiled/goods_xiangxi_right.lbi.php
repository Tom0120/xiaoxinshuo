<script src="themes/xinyu/js/FengTab.js" type="text/javascript"></script>
<style>
/* 选项卡示例样式 */
.main,.box {float:right;width:813px;margin:10px auto;}
.tab{overflow:hidden;width:812px;height:40px;background:#FAFAFA;border:1px solid #ddd;cursor:pointer}
.tab li{float:left;width:110px;text-align:center;color:#333;line-height:40px;border-right:1px solid #ddd;}
.tab li.on{background:#CF0404;color:#FFF;}
.con{width:800px;padding:9px;border-top:0;}
</style>
<div class="main" id="answerArea">
<div>
<ul class="tab">
<li><?php echo $this->_var['lang']['goods_brief']; ?></li>
<li><?php echo $this->_var['lang']['user_comment']; ?></li>
<li>正品保证</li>
</ul>
</div>
<div class="con">
<div>
<blockquote>
<?php echo $this->_var['goods']['goods_desc']; ?>
</blockquote>
</div>
<div>
<?php echo $this->fetch('library/comments.lbi'); ?>
</div>
<div>
<?php echo $this->fetch('library/zhengpinbaozheng.lbi'); ?>
</div>
</div>
</div>
<script>
$(".main").FengTab({titCell:".tab",mainCell:".con",defaultIndex:1,trigger:"click",titOnClassName:"on",showtime: 0});
</script>