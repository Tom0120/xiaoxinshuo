
<?php if ($this->_var['action'] == 'booking_list'): ?>
<div class="rightBox">
<div class="rightTit"><h2><i></i><?php echo $this->_var['lang']['label_booking']; ?></h2></div>
<div class="rightCon">
<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
<tr align="center" height="35">
<td width="20%" bgcolor="#ffffff"><?php echo $this->_var['lang']['booking_goods_name']; ?></td>
<td width="10%" bgcolor="#ffffff"><?php echo $this->_var['lang']['booking_amount']; ?></td>
<td width="20%" bgcolor="#ffffff"><?php echo $this->_var['lang']['booking_time']; ?></td>
<td width="35%" bgcolor="#ffffff"><?php echo $this->_var['lang']['process_desc']; ?></td>
<td width="15%" bgcolor="#ffffff"><?php echo $this->_var['lang']['handle']; ?></td>
</tr>
<?php $_from = $this->_var['booking_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
<tr height="35">
<td align="left" bgcolor="#ffffff"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank" class="f6"><?php echo $this->_var['item']['goods_name']; ?></a></td>
<td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['goods_number']; ?></td>
<td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['booking_time']; ?></td>
<td align="left" bgcolor="#ffffff"><?php echo $this->_var['item']['dispose_note']; ?></td>
<td align="center" bgcolor="#ffffff"><a href="javascript:if (confirm('<?php echo $this->_var['lang']['confirm_remove_account']; ?>')) location.href='user.php?act=act_del_booking&id=<?php echo $this->_var['item']['rec_id']; ?>'" class="f6"><?php echo $this->_var['lang']['drop']; ?></a> </td>
</tr>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</table>
<?php endif; ?>
<div class="blank5"></div>

<?php if ($this->_var['action'] == 'add_booking'): ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['booking_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
<div class="rightTit"><h2><i></i><?php echo $this->_var['lang']['add']; ?><?php echo $this->_var['lang']['label_booking']; ?><</h2></div>
<form action="user.php" method="post" name="formBooking" onsubmit="return addBooking();">
<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
<tr height="35">
<td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['booking_goods_name']; ?></td>
<td bgcolor="#ffffff"><?php echo $this->_var['info']['goods_name']; ?></td>
</tr>
<tr height="35">
<td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['booking_amount']; ?>:</td>
<td bgcolor="#ffffff"><input name="number" type="text" value="<?php echo $this->_var['info']['goods_number']; ?>" class="inputBg" /></td>
</tr>
<tr height="35">
<td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['describe']; ?>:</td>
<td bgcolor="#ffffff"><textarea name="desc" cols="50" rows="5" wrap="virtual" class="B_blue"><?php echo $this->_var['goods_attr']; ?><?php echo htmlspecialchars($this->_var['info']['goods_desc']); ?></textarea>
</td>s
</tr>
<tr height="35">
<td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['contact_username']; ?>:</td>
<td bgcolor="#ffffff"><input name="linkman" type="text" value="<?php echo htmlspecialchars($this->_var['info']['consignee']); ?>" size="25"  class="inputBg"/>
</td>
</tr>
<tr height="35">
<td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['email_address']; ?>:</td>
<td bgcolor="#ffffff"><input name="email" type="text" value="<?php echo htmlspecialchars($this->_var['info']['email']); ?>" size="25" class="inputBg" /></td>
</tr>
<tr height="35">
<td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['contact_phone']; ?>:</td>
<td bgcolor="#ffffff"><input name="tel" type="text" value="<?php echo htmlspecialchars($this->_var['info']['tel']); ?>" size="25" class="inputBg" /></td>
</tr>
<tr height="35">
<td align="right" bgcolor="#ffffff">&nbsp;</td>
<td bgcolor="#ffffff"><input name="act" type="hidden" value="act_add_booking" />
<input name="id" type="hidden" value="<?php echo $this->_var['info']['id']; ?>" />
<input name="rec_id" type="hidden" value="<?php echo $this->_var['info']['rec_id']; ?>" />
<input type="submit" name="submit" class="submit" value="<?php echo $this->_var['lang']['submit_booking_goods']; ?>" />
<input type="reset" name="reset" class="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" />
</td>
</tr>
</table>
</form>
</div>
</div>
<?php endif; ?>