<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_var['app_name']; ?></title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<link href="styles/general.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
$(function(){	
	//顶部导航切换
	$(".nav li a").click(function(){
		$(".nav li a.selected").removeClass("selected")
		$(this).addClass("selected");
	})	
})	
</script>
<script type="text/javascript">

function modalDialog(url, name, width, height)
{
  if (width == undefined)
  {
    width = 400;
  }
  if (height == undefined)
  {
    height = 300;
  }

  if (window.showModalDialog)
  {
    window.showModalDialog(url, name, 'dialogWidth=' + (width) + 'px; dialogHeight=' + (height+5) + 'px; status=off');
  }
  else
  {
    x = (window.screen.width - width) / 2;
    y = (window.screen.height - height) / 2;

    window.open(url, name, 'height='+height+', width='+width+', left='+x+', top='+y+', toolbar=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, modal=yes');
  }
}

function ShowToDoList()
{
  try
  {
    var mainFrame = window.top.frames['main-frame'];
    mainFrame.window.showTodoList(adminId);
  }
  catch (ex)
  {
  }
}


var adminId = "<?php echo $this->_var['admin_id']; ?>"; 
</script>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/transport.js,../js/jquery-1.9.1.min.js,../js/js/jquery.json.js')); ?>
</head>
<body style="background:url(images/topbg.gif) repeat-x;">
<div class="topleft">
<a href="http://www.xiaoxinshuo.com" target="_parent"><img src="images/logo.png" title="孝心说团队开发" /></a>
</div>
<ul class="nav">
<li><a href="index.php?act=main" target="main-frame"><img src="images/icon01.png" title="<?php echo $this->_var['lang']['admin_home']; ?>" />
<h2><?php echo $this->_var['lang']['admin_home']; ?></h2></a></li>
<li><a href="privilege.php?act=modif" target="main-frame"><img src="images/icon03.png" title="<?php echo $this->_var['lang']['set_navigator']; ?>" /><h2><?php echo $this->_var['lang']['set_navigator']; ?></h2></a></li>
<li><a href="template.php?act=setup" target="main-frame"><img src="images/icon02.png" title="设置模版" /><h2>设置模版</h2></a></li>
<?php $_from = $this->_var['nav_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['top_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top_goods']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['top_goods']['iteration']++;
?>
<li><a href="<?php echo $this->_var['key']; ?>" target="main-frame">
<!-- <?php if ($this->_foreach['top_goods']['iteration'] == 1): ?>-->
<img src="images/icon04.png" title="<?php echo $this->_var['item']; ?>" />
<!-- <?php endif; ?>-->
<!-- <?php if ($this->_foreach['top_goods']['iteration'] == 2): ?>-->
<img src="images/icon05.png" title="<?php echo $this->_var['item']; ?>" />
<!-- <?php endif; ?>-->
<!-- <?php if ($this->_foreach['top_goods']['iteration'] == 3): ?>-->
<img src="images/icon06.png" title="<?php echo $this->_var['item']; ?>" />
<!-- <?php endif; ?>-->
<h2><?php echo $this->_var['item']; ?></h2></a></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
<div class="topright">    
<ul>
<li><a href="../" target="_blank"><?php echo $this->_var['lang']['preview']; ?></a></li>
<li><a  onclick="ShowToDoList()" target="_blank"><?php echo $this->_var['lang']['todolist']; ?></a></li>
<li><a href="index.php?act=about_us" target="main-frame"><?php echo $this->_var['lang']['about']; ?></a></li>
<li><a href="javascript:window.top.frames['main-frame'].document.location.reload();window.top.frames['header-frame'].document.location.reload()" target="main-frame"" target="_top"><?php echo $this->_var['lang']['refresh']; ?></a></li>
<li><a href="index.php?act=clear_cache" target="main-frame"><?php echo $this->_var['lang']['clear_cache']; ?></a></li>
<li><a href="privilege.php?act=logout" target="_top"><?php echo $this->_var['lang']['signout']; ?></a></li>
</ul>
<div class="user">
<span><?php echo $this->_var['admin_name']; ?></span>
<a href="message.php?act=list" target="main-frame"><i>消息</i></a>
<a href="user_msg.php?act=list_all" target="main-frame"><b><?php echo $this->_var['feedback_number']; ?></b></a>
</div>    
</div>
</body>
</html>
