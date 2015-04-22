<?php if ($this->_var['action'] == 'default'): ?>

<div class="account">

<div class="money">
<ul class="clearfix">
<li class="first"><div class="title"><i></i><span><?php echo $this->_var['lang']['your_surplus']; ?></span></div><p><a href="user.php?act=account_log" class="_capitalAccount"><?php echo $this->_var['info']['surplus']; ?></a></p></li>
<li class="second"><div class="title"><i></i><span><?php echo $this->_var['lang']['credit_line']; ?></span></div><p><a href="javascript:;" class="_backAccount"><?php echo $this->_var['info']['formated_credit_line']; ?></a></p></li>
<li class="third"><div class="title"><i></i><span> 金币</span></div><p><a id="myGoldCoin" href="javascript:;" class="_goldAccount"><?php echo $this->_var['info']['integral']; ?></a></p></li>
<li class="fourth"><div class="title"><i></i><span><?php echo $this->_var['lang']['your_bonus']; ?></span></div><p><a href="user.php?act=bonus" class="_couponNums"><?php echo $this->_var['info']['bonus']; ?></a></p></li>
</ul>
</div>


<div class="security clearfix">
<?php if ($this->_var['info']['is_validate'] == 0): ?>    
<div class="improve">
<span>账户安全：</span><strong class="low">低</strong><i class="low"><em></em></i><a href="#" title="提升账户安全等级">提升 ></a></div>
<div class="yzHome clearfix">
<div class="mail yzType"><i class="titIcon"></i><span class="yzTit">邮箱：</span><a class="res" href="javascript:sendHashMail()">未验证点我验证</a></div>
</div>
<?php else: ?>
<div class="improve"><span>账户安全：</span><strong class="middle">中</strong><i class="middle"><em></em></i><a href="/myaccount/acc_security.htm" title="提升账户安全等级">提升 ></a></div>
<div class="mail yzType"><i class="titIcon"></i><span class="yzTit">邮箱：</span><a class="res" href="javascript:;"><i></i>已验证</a></div>
<?php endif; ?>
</div>


<div class="middle order">
<div class="line clearfix"><div class="title"><i></i><span>最近订单</span></div><div class="status">
<ul>
<li>
 <?php echo $this->_var['lang']['last_month_order']; ?><span id="uc_dfkdd"><?php echo $this->_var['info']['order_count']; ?></span><?php echo $this->_var['lang']['order_unit']; ?>
</li>
</ul>
</div><a class="more" href="user.php?act=order_list" title="查看全部订单" >查看全部订单 ></a></div>
		
<div class="proListEmpty emptyFrame clearfix"><i></i><span>你买的东西太少了，这里空空的，快去挑选合适的商品吧！</span></div>
</div>


<div id="_usercollects">
<div class="middle collect" >
<div class="line clearfix"><div class="title"><i></i><span>我的收藏</span></div></div>
<div class="colListEmpty emptyFrame clearfix"><i></i><span>您还没有收藏任何商品，看到感兴趣的商品就果断收藏吧！</span></div>
</div>
</div>

<div id="_userrecommend">
<div class="middle reco" >
<div class="line clearfix"><div class="title"><i></i><span>为您推荐</span></div></div>
<div class="colList clearfix"><a class="prev" href="javascript:;" title="上一页"></a>
<div class="colFrame">
<ul class="clearfix">
<li class="first"><a href="#" title="52°水井坊·井台瓶经典装500ml" target="_blank"><img src="http://img08.jiuxian.com/2014/1211/aff3860db1e3460f930b1b6bf5b9e4847.jpg" alt="52°水井坊·井台瓶经典装500ml" /></a>
<a class="name" href="#" title="52°水井坊·井台瓶经典装500ml" target="_blank">52°水井坊·井台瓶经典装500ml</a><p class="price userCenter_nowPrice_14546"></p></li>
<li ><a href="#" title="烈酒金杯5cl（6支套装）" target="_blank"><img src="http://img09.jximage.com/2014/0325/423a37e2a6f94ac091791d3337830bf97.jpg" alt="烈酒金杯5cl（6支套装）" /></a>
<a class="name" href="#" title="烈酒金杯5cl（6支套装）" target="_blank">烈酒金杯5cl（6支套装）</a><p class="price userCenter_nowPrice_14472"></p></li>
<li ><a href="#" title="53°汾阳王古法手工酿造1500ml" target="_blank"><img src="http://img06.jiuxian.com/2014/0722/6e06e2d7a81b443e89d75816a02319ea7.jpg" alt="53°汾阳王古法手工酿造1500ml" /></a>
<a class="name" href="#" title="53°汾阳王古法手工酿造1500ml" target="_blank">53°汾阳王古法手工酿造1500ml</a><p class="price userCenter_nowPrice_15265"></p>
</li>
</ul></div><a class="next" href="javascript:;" title="下一页"></a>
</div>
</div>

</div>

</div>


<div class="club">

<div class="sign" id="001" name="001"><div class="cartoon clearfix">
<div class="left"></div><div class="right"><p class="time user_center_dayweek"></p>
<a class="enter" href="javascript:;" title="每日签到" ><i></i><span>每日签到</span></a>
<p class="slogan"><a href="#" target="_blank">赚金币变土豪</a></p></div><div class="pop"><i></i></div>
<div class="hjRegDateBox"><div class="hjRegMonth"><div class="hjReg-shut">关闭</div>
<div class="hjRegselect"><a href="javascript:;" class="hjRegPrev"></a><span>6月</span><a href="javascript:;" class="hjRegNext"></a></div>
<div class="weekTitle"><ul><li>日</li><li>一</li><li>二</li><li>三</li><li>四</li><li>五</li><li>六</li><div class="clear"></div></ul></div></div>
<div class="hjRegCalBg"><div class="hjRegCalList"><input type="hidden" value="" class="checkToday">
<ul><li class="last">27</li><li class="last">28</li><li class="last">29</li><li class="last">30</li><li class="last">31</li>
<li class="t-mon">1</li><li class="t-mon">2</li><li class="t-mon">3</li><li class="t-mon">4</li><li class="t-mon">5</li>
<li class="t-mon">6</li><li class="t-mon">7</li><li class="t-mon">8</li><li class="t-mon">9</li><li class="t-mon">10</li>
<li class="t-mon">11</li><li class="t-mon">12</li><li class="t-mon">13</li><li class="t-mon">14</li><li class="t-mon">15</li>
<li class="t-mon">16</li><li class="t-mon">17</li><li class="t-mon">18</li><li class="t-mon">19</li><li class="t-mon">20</li>
<li class="t-mon">21</li><li class="t-mon">22</li><li class="t-mon">23</li><li class="t-mon">24</li><li class="t-mon">25</li>
<li class="t-mon">26</li><li class="t-mon">27</li><li class="t-mon">28</li><li class="t-mon">29</li><li class="t-mon">30</li>
<li class="t-mon">31</li><li class="last">1</li><li class="last">2</li><li class="last">3</li><li class="last">4</li>
<li class="last">5</li><li class="last">6</li></ul>
<div class="clear"></div>
</div>
</div>
</div>

</div>
<p class="profit">你的金币<span class="_goldAccount">0</span>个,已击败<span class="_goldPercent">0%</span>的人</p>
</div>


<div class="coin announce"><div class="title clearfix"><i></i><span>公告</span></div>
<ul><li><i></i><a href="#" title="关于不法分子冒充酒仙网员工推销酒水" target="_blank">关于不法分子冒充酒仙网员工推销酒水</a></li>
<li><i></i><a href="#" title="双地址订单公告" target="_blank">双地址订单公告</a></li>
<li><i></i><a href="#" title="红酒部分区域配送公告" target="_blank">红酒部分区域配送公告</a></li>
<li><i></i><a href="#" title="最新配送运费说明" target="_blank">最新配送运费说明</a></li>
</ul></div>
</div>

<?php endif; ?>