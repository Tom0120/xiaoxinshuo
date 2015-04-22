
<?php if ($this->_var['action'] == 'order_list'): ?>
<div class="rightBox">
<div class="rightTit"><h2><i></i><?php echo $this->_var['lang']['label_order']; ?></h2></div>
<div class="rightCon">
<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
<tr align="center" height="35px">
<td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_number']; ?></td>
<td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_addtime']; ?></td>
<td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_money']; ?></td>
<td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_status']; ?></td>
<td bgcolor="#ffffff"><?php echo $this->_var['lang']['handle']; ?></td>
</tr>
<?php $_from = $this->_var['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
<tr  height="35px">
<td align="center" bgcolor="#ffffff"><a href="user.php?act=order_detail&order_id=<?php echo $this->_var['item']['order_id']; ?>" class="f6"><?php echo $this->_var['item']['order_sn']; ?></a></td>
<td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['order_time']; ?></td>
<td align="right" bgcolor="#ffffff"><?php echo $this->_var['item']['total_fee']; ?></td>
<td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['order_status']; ?></td>
<td align="center" bgcolor="#ffffff"><font class="f6"><?php echo $this->_var['item']['handler']; ?></font></td>
</tr>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</table>
<div class="blank5"></div>

<div class="rightTit"><h2><i></i><?php echo $this->_var['lang']['merge_order']; ?></h2></div>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['merge_order_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
<form action="user.php" method="post" name="formOrder" onsubmit="return mergeOrder()">
<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
<tr height= "35">
<td width="22%"  align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['first_order']; ?>:</td>
<td width="12%" align="left" bgcolor="#ffffff"><select name="to_order">
<option value="0"><?php echo $this->_var['lang']['select']; ?></option>

<?php echo $this->html_options(array('options'=>$this->_var['merge'])); ?>

</select></td>
<td width="19%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['second_order']; ?>:</td>
<td width="11%" align="left" bgcolor="#ffffff"><select name="from_order">
<option value="0"><?php echo $this->_var['lang']['select']; ?></option>

<?php echo $this->html_options(array('options'=>$this->_var['merge'])); ?>

</select></td>
<td width="36%" bgcolor="#ffffff">&nbsp;<input name="act" value="merge_order" type="hidden" />
<input type="submit" name="Submit"  class="bnt_blue_1" style="border:none;"  value="<?php echo $this->_var['lang']['merge_order']; ?>" /></td>
</tr>
<tr height= "35">
<td bgcolor="#ffffff">&nbsp;</td>
<td colspan="4" align="left" bgcolor="#ffffff"><?php echo $this->_var['lang']['merge_order_notice']; ?></td>
</tr>
</table>
</form>
</div>
</div>
<?php endif; ?>
