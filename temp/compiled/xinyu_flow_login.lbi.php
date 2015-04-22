<?php if ($this->_var['step'] == "login"): ?>
<link rel="stylesheet" href="themes/xinyu/css/cart_logo.css">

<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,user.js')); ?>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['flow_login_register']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_50897400_1429623184');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_50897400_1429623184']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item_0_50897400_1429623184']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

function checkLoginForm(frm) {
if (Utils.isEmpty(frm.elements['username'].value)) {
alert(username_not_null);
return false;
}
if (Utils.isEmpty(frm.elements['password'].value)) {
alert(password_not_null);
return false;
}
return true;
}
function checkSignupForm(frm) {
if (Utils.isEmpty(frm.elements['username'].value)) {
alert(username_not_null);
return false;
}
if (Utils.trim(frm.elements['username'].value).match(/^\s*$|^c:\\con\\con$|[%,\'\*\"\s\t\<\>\&\\]/))
{
alert(username_invalid);
return false;
}
if (Utils.isEmpty(frm.elements['email'].value)) {
alert(email_not_null);
return false;
}
if (!Utils.isEmail(frm.elements['email'].value)) {
alert(email_invalid);
return false;
}

if (Utils.isEmpty(frm.elements['password'].value)) {
alert(password_not_null);
return false;
}

if (frm.elements['password'].value.length < 6) {
alert(password_lt_six);
return false;
}

if (frm.elements['password'].value != frm.elements['confirm_password'].value) {
alert(password_not_same);
return false;
}
return true;
}

</script>

<div class="midHeader">
<div class="midHeaderBox">
<div class="jxwLogo">
<p class="jxwIndex" style="background:url(themes/xinyu/images/logo.png) no-repeat;"><a href="index.php"></a></p>
</div>
<div class="orderFlow of-bg1"><span class="oStatus">1、我的购物车</span><span>2、确认订单信息</span><span>3、成功提交订单</span></div>
</div>
</div>
<div class="shop-cart-wrapper">
<table class="regist-process-body fl wfs" style="margin-top:55px;margin-bottom:30px;height:350px;">
<tr>
<td>
<div style="margin-left:-50px;margin-top:-50px;margin-bottom:-50px;width:511px;height:455px"><img src="themes/xinyu/images/54618841N50a59944.png" /></div>
</td>
<td width="50%" valign="top" bgcolor="#ffffff">
<form action="flow.php?step=login" method="post" name="loginForm" id="loginForm" onsubmit="return checkLoginForm(this)">
<table width="70%" border="0" cellpadding="8" cellspacing="1" style="background:#FFF;margin-left:120px;">
<tr height="15px">             
</tr>
<tr>             
<td><div class="item"><span><?php echo $this->_var['lang']['username']; ?>/邮箱/用户名</span></div></td>
</tr>
<tr height="45">             
<td><input name="username" type="text" class="text"  id="username" placeholder="请输入用户名/邮箱" style="background:url(themes/xinyu/images/loginflow1.png) no-repeat ;background-position:left center;"/>
</td>
</tr>
<tr height="5px">             
</tr>
<tr>
<td><div class="item"><span><?php echo $this->_var['lang']['password']; ?></span></div></td>
</tr>
<tr height="35px">
<td bgcolor="#ffffff"><input name="password" class="text"  type="password" placeholder="请输入密码"  style="background:url(themes/xinyu/images/loginflow.png) no-repeat ;background-position:left center;"/></td>
</tr>
<?php if ($this->_var['enabled_login_captcha']): ?>
<tr>
<td bgcolor="#ffffff"><div align="right"><strong><?php echo $this->_var['lang']['comment_captcha']; ?>:</strong></div></td>
<td bgcolor="#ffffff"><input type="text" size="8" name="captcha"  />
<img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /> </td>
</tr>
<?php endif; ?>
<tr height="50px">
</tr>
<tr>
<td><input type="checkbox" value="1" name="remember" id="remember" /><label for="remember"><div class="qbcdl"><span>&nbsp;<?php echo $this->_var['lang']['remember']; ?></span></div></label></td>
</tr>
<tr height="30px">
<td>
<a href="user.php?act=get_password" class="f6"><?php echo $this->_var['lang']['get_password_by_mail']; ?></a>
<td>
</tr>
<tr height="80px">
<td colspan="2">
<div class="item login-btn2013">
<input type="submit"  name="login" value="<?php echo $this->_var['lang']['forthwith_login']; ?>" class="denglu"/>
<?php if ($this->_var['anonymous_buy'] == 1): ?>
<input type="button" class="denglu" value="<?php echo $this->_var['lang']['direct_shopping']; ?>" onclick="location.href='flow.php?step=consignee&amp;direct_shopping=1'" />
<?php endif; ?>
<input name="act" type="hidden" value="signin" />
</div>
</td>
</tr>
</table>
</form>
<div class="free-regist">
<span><a href="user.php?act=register">免费注册</a></span>
</div>
</td>
</tr>
<?php if ($this->_var['need_rechoose_gift']): ?>
<tr>
<td colspan="2" align="center" style="border-top:1px #ccc solid; padding:5px; color:red;"><?php echo $this->_var['lang']['gift_remainder']; ?></td>
</tr>
<?php endif; ?>
</table>
</div>

<?php endif; ?>