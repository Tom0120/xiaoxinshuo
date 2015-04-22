<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/xinyu/css/base.css" type="text/css" rel="stylesheet"/>
<link href="themes/xinyu/css/product_list-20140511.css" type="text/css" rel="stylesheet"/>
<link id="newLink" href="themes/xinyu/css/index_1024.css" type='text/css' rel='stylesheet'/>
<script src="themes/xinyu/js/jquery.min.js" type="text/javascript"></script>
<script src="themes/xinyu/js/jquery.lazyload.js" type="text/javascript"></script>
<script src="themes/xinyu/js/list.js" type="text/javascript"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header_category.lbi'); ?>
<?php echo $this->fetch('library/xinyu_nav_common.lbi'); ?>
<div class="clear"><a name="v2"></a></div>
<div class="srp clearfix">
<?php echo $this->fetch('library/category_left.lbi'); ?>
<?php echo $this->fetch('library/goods_list_search.lbi'); ?>	
</div>
</body>
<div class="toTopBox" id="toTop">
<ul>
<li class="advisory" title="客服" style="display:none;" popstate="off">
<div class="advisoryIcon" style="display:none;">
</div>
</li>
<li class="indexPopAd" title="热门促销">
<div class="indexPopAdIcon">
</div>
</li>
<li class="shortCart"><a title="我的购物车" href="#" target="_blank"></a>
<div class="digital jx_car_num">
0
</div>
</li>
<li class="collectWeb"><a title="我的收藏" href="#" target="_blank"></a></li>
<li class="feedBack"><a title="CEO邮箱" href="#" target="_blank"></a></li>
<li class="toTop"><a title="返回顶部" href="#"></a></li>
</ul>
<div class="popAdvisory">
<div class="indexPopAdClose">
x
</div>
<div class="div1_con">
<a href="#" target="_blank"><img alt="" src="http://misc.jiuxian.com/image/popAdvisory.jpg" width="230" height="170"/></a>
</div>
</div>
</div>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
sel.form.submit();
}
//-->
</script>
</html>