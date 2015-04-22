<?php if ($this->_var['step'] == "done"): ?>
<div class="midHeader">
<div class="midHeaderBox">
<div class="jxwLogo">
<p class="jxwIndex" style="background:url(themes/xinyu/images/logo.png) no-repeat;"><a href="index.php"></a></p>
</div>
<div class="orderFlow of-bg1"><span class="oStatus">1、我的购物车</span><span>2、确认订单信息</span><span>3、成功提交订单</span></div>
</div>
</div>

<link href="http://misc.jiuxian.com/css/pay_new/gopay.css?20150305" type="text/css" rel="stylesheet" />
<div class="OrderSec">


<div class="osBox">
	<div class="os-tit">
	<p class="os-tit-pro">订单已提交成功！</p>
	<p class="os-tit-tim">我们将精心打包您的包裹，预计在<span>24</span>小时内为您发货，请耐心等待！</p>
	</div>
	<div class="os-num">
	<p>
	<b>订单编号：</b>
	<span>
	<a href="user.php?act=order_list"><?php echo $this->_var['order']['order_sn']; ?></a>
	</span>
	</p>
	<p><b>订单金额：</b><em><?php echo $this->_var['total']['amount_formated']; ?></em></p>
	</div>
	 
	<div class="os-pay">
                <div class="os-pay-con">
                    <p>已选择付款方式：</p>
                    <p class="osp-ment"><b style=" background-position:0 -36px;"><?php echo $this->_var['order']['pay_name']; ?></b><a class="osp-altBut" href="javascript:;">其它支付方式</a></p>
                </div>
        </div>
	<?php if ($this->_var['pay_online']): ?>
            
            <tr>
              <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['pay_online']; ?></td>
            </tr>
            <?php endif; ?>
	  <?php if ($this->_var['virtual_card']): ?>
          <div style="text-align:center;overflow:hidden;border:1px solid #E2C822;background:#FFF9D7;margin:10px;padding:10px 50px 30px;">
          <?php $_from = $this->_var['virtual_card']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vgoods');if (count($_from)):
    foreach ($_from AS $this->_var['vgoods']):
?>
            <h3 style="color:#2359B1; font-size:12px;"><?php echo $this->_var['vgoods']['goods_name']; ?></h3>
            <?php $_from = $this->_var['vgoods']['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
              <ul style="list-style:none;padding:0;margin:0;clear:both">
              <?php if ($this->_var['card']['card_sn']): ?>
              <li style="margin-right:50px;float:left;">
              <strong><?php echo $this->_var['lang']['card_sn']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_sn']; ?></span>
              </li><?php endif; ?>
              <?php if ($this->_var['card']['card_password']): ?>
              <li style="margin-right:50px;float:left;">
              <strong><?php echo $this->_var['lang']['card_password']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_password']; ?></span>
              </li><?php endif; ?>
              <?php if ($this->_var['card']['end_date']): ?>
              <li style="float:left;">
              <strong><?php echo $this->_var['lang']['end_date']; ?>:</strong><?php echo $this->_var['card']['end_date']; ?>
              </li><?php endif; ?>
              </ul>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </div>
          <?php endif; ?> 
	<div class="os-ope">
		<div class="os-ope-other">您还可以：<a href="inedx.php">返回首页</a><a href="user.php?act=order_list">我的订单</a></div>
		<div class="os-ope-twoDim">
		<div class="twoDimCode"><span></span></div>
			<div class="twoDimText">手机扫一扫关注孝心网公众号，<br /> 及时获得您的包裹状态，<br /> 第一时间畅想优惠活动。</div>
			<div class="clear"></div>
		</div>
		</div>
		<div class="os-pre">
		<h2>注意事项：</h2>
		<p>"订单提交成功"仅表明孝心网收到您的订单，只有您的订单通过审核后，才代表订单正式生效；</p>
		<p>如遇自然灾害、停电、节假日、周年庆、双十一、全球首发（预售）等因素，发货时间将根据具体情况而定；</p>
		<p>请您务必先开箱验货，确认无误再签收！如发现商品有破损等情况请第一时间联系孝心网客服中心 或直接拒签；</p>
		</div>
	</div>
</div>

</div>



<?php endif; ?>