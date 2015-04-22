
<?php if ($this->_var['action'] == 'message_list'): ?>
   <div class="rightBox">
<div class="rightTit"><h2><i></i><?php echo $this->_var['lang']['label_message']; ?></h2></div>
<div class="rightCon">
<?php $_from = $this->_var['message_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'message');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['message']):
?>
<div class="f_l">
<b><?php echo $this->_var['message']['msg_type']; ?>:</b>&nbsp;&nbsp;<font class="f4"><?php echo $this->_var['message']['msg_title']; ?></font> (<?php echo $this->_var['message']['msg_time']; ?>)
</div>
<div class="f_r">
<a href="user.php?act=del_msg&amp;id=<?php echo $this->_var['key']; ?>&amp;order_id=<?php echo $this->_var['message']['order_id']; ?>" title="<?php echo $this->_var['lang']['drop']; ?>" onclick="if (!confirm('<?php echo $this->_var['lang']['confirm_remove_msg']; ?>')) return false;" class="f6"><?php echo $this->_var['lang']['drop']; ?></a>
</div>
<div class="msgBottomBorder">
<?php echo $this->_var['message']['msg_content']; ?>
<?php if ($this->_var['message']['message_img']): ?>
<div align="right">
<a href="data/feedbackimg/<?php echo $this->_var['message']['message_img']; ?>" target="_bank" class="f6"><?php echo $this->_var['lang']['view_upload_file']; ?></a>
</div>
<?php endif; ?>
<br />
<?php if ($this->_var['message']['re_msg_content']): ?>
<a href="mailto:<?php echo $this->_var['message']['re_user_email']; ?>" class="f6"><?php echo $this->_var['lang']['shopman_reply']; ?></a> (<?php echo $this->_var['message']['re_msg_time']; ?>)<br />
<?php echo $this->_var['message']['re_msg_content']; ?>
<?php endif; ?>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php if ($this->_var['message_list']): ?>
<div class="f_r">

</div>
<?php endif; ?>
<div class="blank"></div>
<form action="user.php" method="post" enctype="multipart/form-data" name="formMsg" onSubmit="return submitMsg()">
<table width="100%" border="0" cellpadding="3">
<?php if ($this->_var['order_info']): ?>
<tr>
<td align="right"><?php echo $this->_var['lang']['order_number']; ?></td>
<td>
<a href ="<?php echo $this->_var['order_info']['url']; ?>"><img src="themes/xinyu/images/note.gif" /><?php echo $this->_var['order_info']['order_sn']; ?></a>
<input name="msg_type" type="hidden" value="5" />
<input name="order_id" type="hidden" value="<?php echo $this->_var['order_info']['order_id']; ?>" class="inputBg" />
</td>
</tr>
<?php else: ?>
<tr>
<td align="right"><?php echo $this->_var['lang']['message_type']; ?>：</td>
<td><input name="msg_type" type="radio" value="0" checked="checked" />
<?php echo $this->_var['lang']['type']['0']; ?>
<input type="radio" name="msg_type" value="1" />
<?php echo $this->_var['lang']['type']['1']; ?>
<input type="radio" name="msg_type" value="2" />
<?php echo $this->_var['lang']['type']['2']; ?>
<input type="radio" name="msg_type" value="3" />
<?php echo $this->_var['lang']['type']['3']; ?>
<input type="radio" name="msg_type" value="4" />
<?php echo $this->_var['lang']['type']['4']; ?> </td>
</tr>
<?php endif; ?>
<tr>
<td align="right"><?php echo $this->_var['lang']['message_title']; ?>：</td>
<td><input name="msg_title" type="text" size="30" class="inputBg" /></td>
</tr>
<tr>
<td align="right" valign="top"><?php echo $this->_var['lang']['message_content']; ?>：</td>
<td><textarea name="msg_content" cols="50" rows="4" wrap="virtual" class="B_blue"></textarea></td>
</tr>
<tr>
<td align="right"><?php echo $this->_var['lang']['upload_img']; ?>：</td>
<td><input type="file" name="message_img"  size="45"  class="inputBg" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="hidden" name="act" value="act_add_message" />
<input type="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_bonus" />
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>
<?php echo $this->_var['lang']['img_type_tips']; ?><br />
<?php echo $this->_var['lang']['img_type_list']; ?>
</td>
</tr>
</table>
</form>
</div>
</div>
<?php endif; ?>
