<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_var['lang']['cp_home']; ?><?php if ($this->_var['ur_here']): ?> - <?php echo $this->_var['ur_here']; ?><?php endif; ?></title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js/jquery.js"></script>
<script src="js/cloud.js" type="text/javascript"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?>
<script language="javascript">
<!--
// 这里把JS用到的所有语言都赋值到这里
<?php $_from = $this->_var['lang']['js_languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

if (window.parent != window)
{
window.top.location.href = location.href;
}

$(function(){
$('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
$(window).resize(function(){  
$('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
})  
}); 
//-->
</script> 
</head>
<body style="background-color:#1c77ac; background-image:url(images/light.png); background-repeat:no-repeat; background-position:center top; overflow:hidden;">
<div id="mainBody">
<div id="cloud1" class="cloud"></div>
<div id="cloud2" class="cloud"></div>
</div>  
<div class="logintop">    
<span><?php echo $this->_var['lang']['cp_home']; ?></span>    
<ul>
<li><a href="../"><?php echo $this->_var['lang']['back_home']; ?></a></li>
<li><a href="http://www.xiaoxinshuo.com/articles.php?id=26">帮助</a></li>
<li><a href="http://www.xiaoxinshuo.com/article.php?id=5">关于</a></li>
</ul>    
</div>
<div class="loginbody">
<span class="systemlogo"></span> 
<form method="post" action="privilege.php" name='theForm' onsubmit="return validate()">
<div class="loginbox">
<ul>
<li><input name="username" type="text"  class="loginuser" placeholder="<?php echo $this->_var['lang']['label_username']; ?>" onclick="JavaScript:this.value=''"/></li>
<li><input name="password" type="password" class="loginpwd" placeholder="<?php echo $this->_var['lang']['label_password']; ?>"  onclick="JavaScript:this.value=''"/></li>
<?php if ($this->_var['gd_version'] > 0): ?>
<li style="height:20px;margin-top:-12px;">
<?php echo $this->_var['lang']['label_captcha']; ?>
<input type="text" name="captcha" style="height:25px;width:50px;border:1px solid #ccc;"/>
<img src="index.php?act=captcha&<?php echo $this->_var['random']; ?>" width="100" height="25" alt="CAPTCHA" border="1" onclick= this.src="index.php?act=captcha&"+Math.random() style="cursor: pointer;" title="<?php echo $this->_var['lang']['click_for_another']; ?>" />
</li>
<?php endif; ?>
<li>
<p>
<label><input name="remember" type="checkbox" value="1" checked="checked" /><?php echo $this->_var['lang']['remember']; ?></label>
<label><a href="#"><?php echo $this->_var['lang']['forget_pwd']; ?></a></label>
</p>
<input type="submit" class="loginbtn" value="<?php echo $this->_var['lang']['signin_now']; ?>"/>
</li>
</ul>
</div>
 <input type="hidden" name="act" value="signin" />
</form>
</div>
</div>
<script language="JavaScript">
<!--
document.forms['theForm'].elements['username'].focus();

/**
* 检查表单输入的内容
*/
function validate()
{
var validator = new Validator('theForm');
validator.required('username', user_name_empty);
validator.required('password', password_empty);
if (document.forms['theForm'].elements['captcha'])
{
validator.required('captcha', captcha_empty);
}
return validator.passed();
}

//-->
</script>   
</body>
</html>
