<div class="detail-credit">
<div class="credit-jyScore">
<?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
<p class="jyScore-pic">
<a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>"  target="_blank">
<img src="data/brandlogo/<?php echo $this->_var['goods']['brand_logo']; ?>" height="70" width="165" />   
<span><?php echo $this->_var['goods']['goods_brand']; ?></span>
</a>
</p>
<?php endif; ?>
<p class="jyScore-strip"></p>
<p class="jyScore-fra">孝友评分
<span>
<em style="width:63.92px;"></em>
</span>

</p>
<p class="jyScore-com">孝友点评（<a href="#answerArea">共<?php 
$k = array (
  'name' => 'comments_count',
  'type' => $this->_var['type'],
  'id' => $this->_var['id'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>条评论</a>）</p>
<?php if ($this->_var['goods']['give_integral'] > 0): ?>     																																																																																																	    </div>
<div class="credit-gold">赠送<?php echo $this->_var['points_name']; ?>：<b id="_goldCoinNubStr"><?php echo $this->_var['goods']['give_integral']; ?></b></div>
<?php endif; ?>
<?php if ($this->_var['cfg']['show_goodssn']): ?>
<div class="credit-proNum"><span><?php echo $this->_var['lang']['goods_sn']; ?><?php echo $this->_var['goods']['goods_sn']; ?></span></div>
<?php endif; ?>
<div class="credit-question">
<span>
<a href="http://www.jiuxian.com/pro/editAsk.htm?prodId=15644" target="_blank">商品纠错</a>
<i></i>
</span>
<span>
<a href="http://special.jiuxian.com/goldPlan.htm" target="_blank">什么是金币</a>
<i></i>
</span>
</div>
</div>
