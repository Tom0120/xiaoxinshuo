<div  class="site-nav">
<div class="site-nav-bd" >
<ul  class="site-nav-bd-l" >
<li class="menu favorite">
<div class="menu-hd">
<a target="_top" onclick="javascript:addFavorite2()"><span class="iconfont"><img src="themes/xinyu/images/shouchang.png" alt="孝心说官方微信"></span><span><?php echo $this->_var['lang']['welcome']; ?></span></a>
</div>
<div class="menu-bd menu_w"> <img src="themes/xinyu/images/weixin1.png" alt="孝心说官方微信"> </div>
</li>
<li id="J_Weekend" class="menu weekend" ></li>
</ul>
<ul id="J_SiteNavBdR" class="site-nav-bd-r">
 <font id="ECS_MEMBERZONE"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
</ul>
</div>
</div>
<div class="blank5"></div>  

<div class="head fl wfs">
<div class="cover-page-wrapper">
<a class="fl" href="index.php"><img src="themes/xinyu/images/logo.png" title="孝心说" alt="孝心说"></a>
<a class="listing fl" target="_blank" href="topic.php"><img src="themes/xinyu/images/cover-page-listing.gif"></a>
<div class="searchbox">
<form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
<input type="text" name="keywords" id="keyword" placeholder="搜索商品、攻略">
<input class="submit" type="submit" value="搜&nbsp;索"> 
<i></i>
</form>
<div class="hotwords" > 
热门搜索：
<?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
<a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a> 
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
</div>     
<?php echo $this->fetch('library/cart.lbi'); ?> 
<script type="text/javascript">
<!--
function checkSearchForm()
{
if(document.getElementById('keyword').value)
{
return true;
}
else
{
alert("请输入搜索关键词！");
return false;
}
}
-->
</script>
</div>
</div>
<script type="text/javascript">
(function(){ 
var $menuLi =$('#nav .menu');
var $menuHd = $('#nav .menu-hd');
var $menuBd = $('#nav .menu-bd');
var $arrow = $('#nav .m1 i');
$menuBd.hover(function(){
$menuHd.addClass('on');
},function(){
$menuHd.removeClass('on');
});
$menuLi.hover(function(){
$menuHd.children('b').addClass('b-on');
},function(){
$menuHd.children('b').removeClass('b-on');
})
})();
</script>
<style>
.menu_w {
        POSITION: relative;
	left: 134px;
	top: 30px;
}
.site-nav-bd .favorite .menu_w img {
	background: none;
}
.site-nav-bd .favorite:hover .menu-bd {
	MARGIN-TOP: -1px;
	DISPLAY: block;
	Z-INDEX: 999999;
	POSITION: absolute;
}
.top-banner{margin:0 auto;position:relative;text-align:center;}
.top-close{position:absolute;top:5px;left:50%;margin-left:645px;width:25px;height:16px;background:url(themes/xinyu/images/guanbi.gif) no-repeat center center;cursor:pointer;text-indent:-9999px;}
.top-banner .banner{width:100%;height:50px;}
.top-banner .banner a{width:1200px;height:50px;display:block;text-indent:-9999px;margin:0 auto;}
</style>