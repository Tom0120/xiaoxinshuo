<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>孝心说 Menu</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js/jquery.js"></script>
<script type="text/javascript">
$(function(){	
//导航切换
$(".menuson li").click(function(){
$(".menuson li.active").removeClass("active")
$(this).addClass("active");
});
$('.title').click(function(){
var $ul = $(this).next('ul');
$('dd').find('ul').slideUp();
if($ul.is(':visible')){
$(this).next('ul').slideUp();
}else{
$(this).next('ul').slideDown();
}
});
})	
</script>
</head>
<body style="background:#f0f9fd;">
<div class="lefttop"><a href="javascript:toggleCollapse();"><span></span></a>菜单导航</div>
<dl class="leftmenu"> 
<?php $_from = $this->_var['menus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'menu');$this->_foreach['top_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top_goods']['total'] > 0):
    foreach ($_from AS $this->_var['k'] => $this->_var['menu']):
        $this->_foreach['top_goods']['iteration']++;
?>
<dd><div class="title"><span>
<!-- <?php if ($this->_foreach['top_goods']['iteration'] == 1): ?>-->
<img src="images/leftico01.png" />
<!-- <?php endif; ?>-->
<!-- <?php if ($this->_foreach['top_goods']['iteration'] == 2): ?>-->
<img src="images/leftico02.png" />
<!-- <?php endif; ?>-->
<!-- <?php if ($this->_foreach['top_goods']['iteration'] == 3): ?>-->
<img src="images/leftico03.png" />
<!-- <?php endif; ?>-->
<!-- <?php if ($this->_foreach['top_goods']['iteration'] == 4): ?>-->
<img src="images/leftico04.png" />
<!-- <?php endif; ?>-->
<!-- <?php if ($this->_foreach['top_goods']['iteration'] == 5): ?>-->
<img src="images/leftico01.png" />
<!-- <?php endif; ?>-->
<!-- <?php if ($this->_foreach['top_goods']['iteration'] == 6): ?>-->
<img src="images/leftico02.png" />
<!-- <?php endif; ?>-->
<!-- <?php if ($this->_foreach['top_goods']['iteration'] == 7): ?>-->
<img src="images/leftico03.png" />
<!-- <?php endif; ?>-->
<!-- <?php if ($this->_foreach['top_goods']['iteration'] == 8): ?>-->
<img src="images/leftico04.png" />
<!-- <?php endif; ?>-->
<!-- <?php if ($this->_foreach['top_goods']['iteration'] == 9): ?>-->
<img src="images/leftico01.png" />
<!-- <?php endif; ?>-->
<!-- <?php if ($this->_foreach['top_goods']['iteration'] == 10): ?>-->
<img src="images/leftico02.png" />
<!-- <?php endif; ?>-->
<!-- <?php if ($this->_foreach['top_goods']['iteration'] == 11): ?>-->
<img src="images/leftico03.png" />
<!-- <?php endif; ?>-->
<!-- <?php if ($this->_foreach['top_goods']['iteration'] == 12): ?>-->
<img src="images/leftico04.png" />
<!-- <?php endif; ?>-->
<!-- <?php if ($this->_foreach['top_goods']['iteration'] == 13): ?>-->
<img src="images/leftico01.png" />
<!-- <?php endif; ?>-->
<!-- <?php if ($this->_foreach['top_goods']['iteration'] == 14): ?>-->
<img src="images/leftico04.png" />
<!-- <?php endif; ?>-->
</span><?php echo $this->_var['menu']['label']; ?></div>
<ul class="menuson">
 <?php $_from = $this->_var['menu']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
<li><cite></cite><a href="<?php echo $this->_var['child']['action']; ?>" target="main-frame"><?php echo $this->_var['child']['label']; ?></a><i></i></li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
</dd> 
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</dl>
</body>
</html>
