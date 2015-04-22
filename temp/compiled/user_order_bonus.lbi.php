    <?php if ($this->_var['action'] == 'bonus'): ?>
      <script type="text/javascript">
        <?php $_from = $this->_var['lang']['profile_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_74975600_1429624155');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_74975600_1429624155']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item_0_74975600_1429624155']; ?>";
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </script>
      <div class="rightBox">
<div class="rightTit"><h2><i></i><?php echo $this->_var['lang']['label_bonus']; ?></h2></div>
<div class="rightCon">
   
       <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <tr height="35">
          <th align="center" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['bonus_sn']; ?></th>
          <th align="center" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['bonus_name']; ?></th>
          <th align="center" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['bonus_amount']; ?></th>
          <th align="center" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['min_goods_amount']; ?></th>
          <th align="center" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['bonus_end_date']; ?></th>
          <th align="center" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['bonus_status']; ?></th>
        </tr>
        <?php if ($this->_var['bonus']): ?>
        <?php $_from = $this->_var['bonus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item_0_75005100_1429624155');if (count($_from)):
    foreach ($_from AS $this->_var['item_0_75005100_1429624155']):
?>
        <tr height="35">
          <td align="center" bgcolor="#FFFFFF"><?php echo empty($this->_var['item_0_75005100_1429624155']['bonus_sn']) ? 'N/A' : $this->_var['item_0_75005100_1429624155']['bonus_sn']; ?></td>
          <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['item_0_75005100_1429624155']['type_name']; ?></td>
          <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['item_0_75005100_1429624155']['type_money']; ?></td>
          <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['item_0_75005100_1429624155']['min_goods_amount']; ?></td>
          <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['item_0_75005100_1429624155']['use_enddate']; ?></td>
          <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['item_0_75005100_1429624155']['status']; ?></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php else: ?>
        <tr height="35">
          <td colspan="6" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['user_bonus_empty']; ?></td>
        </tr>
        <?php endif; ?>
      </table>
      <div class="blank5"></div>
      
      <div class="blank5"></div>
      <div class="rightTit"><h2><i></i><?php echo $this->_var['lang']['add_bonus']; ?></h2></div>
      <form name="addBouns" action="user.php" method="post" onSubmit="return addBonus()">
        <div style="padding: 15px;">
        <?php echo $this->_var['lang']['bonus_number']; ?>
          <input name="bonus_sn" type="text" size="30" style="height:30px;" />
          <input type="hidden" name="act" value="act_add_bonus"  />
          <input type="submit" class="inputBg2" style="border:none;" value="<?php echo $this->_var['lang']['add_bonus']; ?>" />
        </div>
      </form>
      </div>
      </div>
    <?php endif; ?>
   