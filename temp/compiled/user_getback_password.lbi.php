<?php if ($this->_var['action'] == 'reset_password'): ?>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
<div class="regist-process-forget fl">
<div class="forget-header fl wfs">
<div class="forget-header fl wfs">
<a class="fr" href="user.php">返回登录</a>
<h2>重设密码</h2>
</div>
<form action="user.php" method="post" name="getPassword2" onSubmit="return submitPwd()">

<div class="forget-items fl wfs">
<span class="title"><?php echo $this->_var['lang']['new_password']; ?>：</span>
<input type="password" class="form-control fl" id="username" name="new_password">
</div>
<div class="forget-items fl wfs">
<span class="title"><?php echo $this->_var['lang']['confirm_password']; ?>：</span>
<input class="form-control fl" id="username" name="confirm_password" type="password">
<b class="tips">请您牢记密码！</b>
</div>
<input type="hidden" name="act" value="send_pwd_email" />
<input type="hidden" name="act" value="act_edit_password" />
<input type="hidden" name="uid" value="<?php echo $this->_var['uid']; ?>" />
<input type="hidden" name="code" value="<?php echo $this->_var['code']; ?>" />
<input type="submit" name="submit" class="btn btn-danger find-pwd" value="<?php echo $this->_var['lang']['confirm_submit']; ?>" />
</form>
</div>
<?php endif; ?>

<div class="blank"></div>