<?php if ($this->_var['action'] == 'get_password'): ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
<style>
.top_nav_hot{position: absolute;left:81px;top:-4px;}

</style>
<link rel="stylesheet" href="themes/xinyu/css/xiaoxin_sign1.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="themes/xinyu/css/xiaoxin_sign2.css" type="text/css" media="screen" charset="utf-8" />
<form action="user.php" method="post" name="getPassword" onsubmit="return submitPwdInfo();">

<div class="container" style="margin:0px;padding:0px;font-family:Tahoma, Geneva, sans-serif;background-color:#FFFFFF;">
<div style="margin:0px;padding:0px;">
<div class="sign" style="margin:0px;padding:0px;">
<div class="sign_main resetreq_main" style="margin:20px auto;padding:0px;border:1px solid #F5F5F5;font-size:14px;color:#666666;">
<div class="main" style="margin:0px auto;padding:0px;height:460px;">
<div class="content_head" style="margin:0px;padding:23px 0px 0px 67px;color:#333333;">
<h1 style="font-size:24px;font-weight:400;color:#E31256;font-family:'Microsoft YaHei', 微软雅黑, 黑体;">
找回密码
</h1>
<ul class="forget_step">
<li class="step_item done first">
<a class="step_number number_1"></a>
</li>
<li class="step_item">
<span class="step_line"></span><a class="step_number number_2"></a>
</li>
<li class="step_item">
<span class="step_line"></span><a class="step_number number_3"></a>
</li>
<li class="step_item">
<span class="step_line"></span><a class="step_number number_4"></a>
</li>
</ul>
<div class="clear" style="margin:0px;padding:0px;">
</div>
<ul class="step_text">
<li class="text_1 done" style="color:#F8296D;">
确认账号
</li>
<li class="text_2" style="color:#999999;">
验证身份
</li>
<li class="text_3" style="color:#999999;">
设置密码
</li>
<li class="text_4" style="color:#999999;">
完成
</li>
</ul>

</div>
<div class="ret_wrapper forget_content step_1" style="margin:0px auto 0px 223px;padding:0px;">
<div class="line tip" style="margin:40px 0px 0px;padding:0px;font-size:12px;color:#999999;">
<div class="textbox_ui" style="margin:0px;padding:0px;vertical-align:middle;">
<?php echo $this->_var['lang']['username_and_email']; ?>
</div>
</div>
<div class="line hastip" style="margin:4px 0px 0px;padding:0px;font-size:12px;color:#333333;">

<div class="textbox_ui error_ui" style="margin:0px;padding:0px;vertical-align:middle;">
<input name="user_name" type="text" size="30" placeholder="<?php echo $this->_var['lang']['username']; ?>" />
</div>
<div class="textbox_ui error_ui" style="margin-top:10px;padding:0px;vertical-align:middle;">
<input name="email" type="text" size="30" placeholder="<?php echo $this->_var['lang']['email']; ?>" />
</div>


<div class="act" style="font-size:12px;color:#333333;">
<input type="hidden" name="act" value="send_pwd_email" />
<input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
<input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>"  class="bnt_blue" />
</div>
<div class="line msg" style="padding:0px;font-size:12px;color:#999999;">
<div class="textbox_ui" style="margin:0px;padding:0px;vertical-align:middle;">
<span>如果您忘记了登录名，将无法找回您的账户信息，您还可以</span><a href="user.php?act=register">重新注册</a>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>

</form>
<?php endif; ?>
