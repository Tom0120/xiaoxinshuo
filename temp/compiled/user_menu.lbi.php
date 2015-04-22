<div class="sideNav">
<h1><a href="user.php"><i></i><span>我的孝心网</span></a></h1>

<div class="userInfo">
<div class="myInfo clearfix">
<div class="photo">
<div class="mask"></div>
<img id="headImagePath" src="http://misc.jiuxian.com/img/usercenter/phoPic02.jpg?version=1426586908113"  width="80" height="80" />
<div class="maskInn"></div>
<a class="edit" href="user.php?act=profile" title="" target="_blank">编辑资料</a>
</div>
<div class="info">
<p class="name"><?php echo $this->_var['info']['username']; ?></p>
<p class="level level1"><i></i><a href="javascript:void(0);" title="<?php echo $this->_var['rank_name']; ?>" > <?php echo $this->_var['rank_name']; ?></a></p>
</div>
</div>
<p class="cost">当前消费金额：<a href="http://jifen.jiuxian.com/memberintro.htm?expense=2" title="已入账消费金额" target="_blank">0.00</a></p>
<p class="cost">待确认消费金额：<a href="http://jifen.jiuxian.com/memberintro.htm?expense=3" title="待确认消费金额" id="uc_unrecorded" target="_blank">0.00</a></p>
</div>


<div class="navList">
<div class="func func1 clearfix">
<p class="title"><i></i><span>交易管理</span></p>
<a class="item" href="user.php?act=order_list" title=""><span>我的订单</span><i></i></a>
<a class="item" href="/trademanage/deal_return.htm" title=""><span>退货记录</span><i></i></a>
<a class="item" href="user.php?act=collection_list" title=""><span>我的收藏</span><i></i></a>
<a class="item" href="user.php?act=booking_list" title=""><span>到货通知</span><i></i></a>
</div>
<div class="func func2 clearfix">
<p class="title"><i></i><span>孝心钱包</span></p>
<a class="item" href="user.php?act=bonus" title=""><span>我的红包</span><i></i></a>
<a class="item" href="user.php?act=account_log" title=""><span>资金管理</span><i></i></a>
<a class="item" href="user.php?act=tag_list" title=""><span>我的标签</span><i></i></a>

</div>
<div class="func func3 clearfix">
<p class="title"><i></i><span>孝心圈</span></p>
<a class="item" href="" title=""><span>消息中心</span><span class="pop _user_message_num">0<i></i></span><i></i></a>
<a class="item" href="user.php?act=comment_list" title=""><span>我的评价</span><i></i></a>
<a class="item" href="user.php?act=message_list" title=""><span>购买咨询</span><i></i></a>
</div>
<div class="func func4 clearfix">
<p class="title"><i></i><span>我的账户</span></p>
<a class="item" href="user.php?act=profile" title=""><span>基本信息</span><i></i></a>
<a class="item" href="user.php?act=address_list" title=""><span>收货地址</span><i></i></a>
</div>
</div>


<a class="bottomClub" href="" title="会员俱乐部" target="_blank"><i></i><span>会员俱乐部</span></a>

</div>
<script type="text/javascript">  
/*编辑用户信息*/
$(".myInfo .mask").hover(function(){		
$(".myInfo .maskInn,.myInfo .edit").show();
},function(){
$(".myInfo .maskInn,.myInfo .edit").hide();
});

$(".myInfo .maskInn, .myInfo .edit").hover(function(){		
$(".myInfo .maskInn,.myInfo .edit").show();
},function(){
$(".myInfo .maskInn,.myInfo .edit").hide();
});
</script>

