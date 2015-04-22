
<?php if ($this->_var['action'] == 'profile'): ?>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['profile_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
<div class="rightBox">
<div class="rightTit"><h2><i></i>基本信息</h2> <span class="rt-couponInt">完善个人信息，可获得<strong class="redStrong">50</strong>金币！金币可以兑换商品哦，赶快行动吧</span></div>
<div class="rightCon">
<div class="zpBaseInfo">

<div class="main">
<div>
<ul class="tab">
<li>个人信息</li>
<li>密码修改</li>
</ul>
</div>
<div class="con">
<div>

<div class="zpPart1 clearfix" id="allInput" style="display:block;">
<form name="formEdit" action="user.php" method="post" onSubmit="return userEdit()">
<div class="zpInfo">
<ul class="basePart">
<li class="clearfix">
<p class="zpName">用户名：</p>
<span class="userCheckContact"><?php echo $this->_var['info']['username']; ?></span>
</li>
<li class="clearfix">
<p class="zpName"><strong>*</strong>昵称：</p>
<input type="text" class="name" name="anotherName" id="anotherName" value="" maxlength="20"/> 
<div class="acc">
<div class="accNotic" style="display:none"><i></i><span>请输入昵称</span></div>
</div>
</li>
<li class="clearfix">
<p class="zpName">真实姓名：</p>
<input type="text" class="realName" name="realName" id="realName" value="" maxlength="20"/>
<div class="acc">
<div id="realNameTS" class="accNotic" style="display:none"><i></i><span>请输入真实姓名</span></div>
</div>
</li>
<li class="clearfix">
<p class="zpName"><strong>*</strong>性别：</p>

<input type="radio" class="zpSex" name="sex" value="0" <?php if ($this->_var['profile']['sex'] == 0): ?>checked="checked"<?php endif; ?> />
<span class="zpSexText"> <?php echo $this->_var['lang']['secrecy']; ?></span>
<input type="radio" class="zpSex" name="sex" value="1" <?php if ($this->_var['profile']['sex'] == 1): ?>checked="checked"<?php endif; ?> />
<span class="zpSexText"> <?php echo $this->_var['lang']['male']; ?></span>
<input type="radio" class="zpSex" name="sex" value="2" <?php if ($this->_var['profile']['sex'] == 2): ?>checked="checked"<?php endif; ?> />
<span class="zpSexText"> <?php echo $this->_var['lang']['female']; ?></span>
</li>
<li class="clearfix">
<p class="zpName"><strong>*</strong>生日：</p>
<?php echo $this->html_select_date(array('field_order'=>'YMD','prefix'=>'birthday','start_year'=>'-60','end_year'=>'+1','display_days'=>'true','month_format'=>'%m','day_value_format'=>'%02d','time'=>$this->_var['profile']['birthday'])); ?>
</li>
</ul>
<ul>
<li class="clearfix">
<p class="zpName">邮箱：</p>
<span class="userCheckContact uEmail">
<input name="email" type="text" value="<?php echo $this->_var['profile']['email']; ?>" size="25" class="inputBg" />
</span>
</li>
<?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?>
<?php if ($this->_var['field']['id'] == 6): ?>
<li class="clearfix">
<p class="zpName"><?php echo $this->_var['lang']['passwd_question']; ?>：</p>
<select name='sel_question'>
<option value='0'><?php echo $this->_var['lang']['sel_question']; ?></option>
<?php echo $this->html_options(array('options'=>$this->_var['passwd_questions'],'selected'=>$this->_var['profile']['passwd_question'])); ?>
</select>
</li>
<li class="clearfix">
<p class="zpName"  <?php if ($this->_var['field']['is_need']): ?>id="passwd_quesetion"<?php endif; ?>><?php echo $this->_var['lang']['passwd_answer']; ?>：</p>
<input name="passwd_answer" type="text" size="25"  class="detailAdd" maxlengt='20' value="<?php echo $this->_var['profile']['passwd_answer']; ?>"/><?php if ($this->_var['field']['is_need']): ?><span style="color:#FF0000"> *</span><?php endif; ?>
</li>
<?php else: ?>
<li class="clearfix">
<p class="zpName" <?php if ($this->_var['field']['is_need']): ?>id="extend_field<?php echo $this->_var['field']['id']; ?>i"<?php endif; ?>><?php echo $this->_var['field']['reg_field_name']; ?>：</p>
<input name="extend_field<?php echo $this->_var['field']['id']; ?>" type="text"  class="detailAdd" value="<?php echo $this->_var['field']['content']; ?>"/><?php if ($this->_var['field']['is_need']): ?><span style="color:#FF0000"> *</span><?php endif; ?>
</li>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
</div>
<input name="act" type="hidden" value="act_edit_profile" />
<input name="submit" type="submit" value="<?php echo $this->_var['lang']['confirm_edit']; ?>"class="submitZpInfo" style="border:none;" />
</form>
</div>
</div>
<div>
<div class="zpPart3 clearfix">
<div class="zpInfo">
<ul class="basePart">
  <form name="formPassword" action="user.php" method="post" onSubmit="return editPassword()" >
     <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
       <li class="clearfix">
         <p class="zpName"><?php echo $this->_var['lang']['old_password']; ?>：</p>
          <input name="old_password" type="password" size="25"  class="inputBg" />
       </li>
        <li class="clearfix">
        <p class="zpName"><?php echo $this->_var['lang']['new_password']; ?>：</p>
          <input name="new_password" type="password" size="25"  class="inputBg" />
        </li>
        <li class="clearfix">
         <p class="zpName"><?php echo $this->_var['lang']['confirm_password']; ?>：</p>
         <input name="comfirm_password" type="password" size="25"  class="inputBg" />
       </li>
        <li class="clearfix">
       
	  <input name="act" type="hidden" value="act_edit_password" />
            <input name="submit" type="submit" class="zpSub" style="border:none;" value="<?php echo $this->_var['lang']['confirm_edit']; ?>" />
       
        </li>
      </table>
    </form>
</ul>
</div>
</div>
</div>
</div>
</div>
<script>
$(".main").FengTab({titCell:".tab",mainCell:".con",defaultIndex:1,trigger:"click",titOnClassName:"on",showtime: 0});
</script>
</div>
</div>
</div>
<?php endif; ?>


