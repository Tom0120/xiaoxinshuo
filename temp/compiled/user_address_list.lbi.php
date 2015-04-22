<?php if ($this->_var['action'] == 'address_list'): ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,region.js,shopping_flow.js')); ?>
<script type="text/javascript">
region.isAdmin = false;
<?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

onload = function() {
if (!document.all)
{
document.forms['theForm'].reset();
}
}

</script>

<div class="rightBox">
<div class="rightTit"><h2><i></i>收货地址</h2> <a href="#allInput" class="addressTrue">添加新地址</a> </div>
<div class="rightCon">
<?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee');if (count($_from)):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee']):
?>
<div class="ln_addressBox" id="allInput<?php echo $this->_foreach['goods']['iteration']; ?>">
<div class="ln_addressBoxTit">
<div class="ln_addressBoxTitL" c=0>添加新地址</div>
<div class="ln_addressBoxTitR">最多保存<span>20</span>个地址</div>
</div>
<input type="hidden" name = "code" id = "code" value = "">
<form action="user.php" method="post" name="theForm" onsubmit="return checkConsignee(this)">	
<div class="ln_addressCon">
<div class="ln_addressTr">
<span class="ln_addressTrTit"><i>*</i><?php echo $this->_var['lang']['country_province']; ?>：</span>
<select name="country" id="selCountries_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 1, 'selProvinces_<?php echo $this->_var['sn']; ?>')">
<option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['0']; ?></option>
<?php $_from = $this->_var['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?>
<option value="<?php echo $this->_var['country']['region_id']; ?>" <?php if ($this->_var['consignee']['country'] == $this->_var['country']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['country']['region_name']; ?></option>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</select>
<select name="province" id="selProvinces_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 2, 'selCities_<?php echo $this->_var['sn']; ?>')">
<option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>
<?php $_from = $this->_var['province_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?>
<option value="<?php echo $this->_var['province']['region_id']; ?>" <?php if ($this->_var['consignee']['province'] == $this->_var['province']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['province']['region_name']; ?></option>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</select>
<select name="city" id="selCities_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 3, 'selDistricts_<?php echo $this->_var['sn']; ?>')">
<option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>
<?php $_from = $this->_var['city_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?>
<option value="<?php echo $this->_var['city']['region_id']; ?>" <?php if ($this->_var['consignee']['city'] == $this->_var['city']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['city']['region_name']; ?></option>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</select>
<select name="district" id="selDistricts_<?php echo $this->_var['sn']; ?>" <?php if (! $this->_var['district_list'][$this->_var['sn']]): ?>style="display:none"<?php endif; ?>>
<option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>
<?php $_from = $this->_var['district_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>
<option value="<?php echo $this->_var['district']['region_id']; ?>" <?php if ($this->_var['consignee']['district'] == $this->_var['district']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['district']['region_name']; ?></option>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</select>
</div>

<div class="ln_addressTr">
<span class="ln_addressTrTit"><i>*</i><?php echo $this->_var['lang']['consignee_name']; ?></span>
<input name="consignee" type="text" class="qjwSubmit4"  id="consignee_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?>"  />
</div>

<div class="ln_addressTr"><span class="ln_addressTrTit"><?php echo $this->_var['lang']['postalcode']; ?>：</span><input name="zipcode" type="text" id="zipcode_<?php echo $this->_var['sn']; ?>" class="qjwSubmit4" value="<?php echo htmlspecialchars($this->_var['consignee']['zipcode']); ?>" /></div>

<div class="ln_addressTr"><span class="ln_addressTrTit"><i>*</i><?php echo $this->_var['lang']['detailed_address']; ?>：</span>
<input name="address" type="text"  class="qjwSubmit4" id="address_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['address']); ?>" />
</div>

<div class="ln_addressTr"><span class="ln_addressTrTit">固定电话：</span><input name="tel" type="text" class="qjwSubmit4" id="tel_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['tel']); ?>" /></div> 
<div class="ln_addressTr"><span class="ln_addressTrTit"><?php echo $this->_var['lang']['email_address']; ?>：</span><input name="email" type="text" class="qjwSubmit4" id="email_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['email']); ?>" /></div> 

<div class="ln_addressTr pt10">
<?php if ($this->_var['consignee']['consignee'] && $this->_var['consignee']['email']): ?>

<input type="submit" name="submit" class="qjwSubmit2" value="<?php echo $this->_var['lang']['confirm_edit']; ?>" />
<input name="button" type="button" class="qjwSubmit2"  onclick="if (confirm('<?php echo $this->_var['lang']['confirm_drop_address']; ?>'))location.href='user.php?act=drop_consignee&id=<?php echo $this->_var['consignee']['address_id']; ?>'" value="<?php echo $this->_var['lang']['drop']; ?>" />
<?php else: ?>
<input type="submit" name="submit" class="qjwSubmit2"  value="<?php echo $this->_var['lang']['add_address']; ?>"/>
<?php endif; ?>
<input type="hidden" name="act" value="act_edit_address" />
<input name="address_id" type="hidden" value="<?php echo $this->_var['consignee']['address_id']; ?>" />


</div>
</div>

</form>

</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
</div>


<?php endif; ?>
