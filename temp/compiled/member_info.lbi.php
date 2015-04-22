<style>
.dd{display:none;left:-50px;top:32px;}
.dd .sf_wx_t{width:136px; height:20px; line-height:22px; color:#515151;}
.dd .sf_wx{display:block;width:136px;height:110px;background:url(themes/xinyu/images/weixin.png) no-repeat top center #FFFFFF;}
</style>
<li class="menu login-info" data-fn-name="fn-login-info" >
<div class="menu-hd login_reg">
<div  class="menu-hd login_reg" id="ECS_MEMBERZONE">
<div id="append_parent"></div>
<?php if ($this->_var['user_info']): ?>
<a href="javascript:void(0)" target="_top"><?php echo $this->_var['lang']['hello']; ?>！</a> 
<a href="user.php" target="_top" title="<?php echo $this->_var['lang']['user_center']; ?>" class="h" ><?php echo $this->_var['user_info']['username']; ?></a> 
<a href="user.php?act=logout" target="_top"><?php echo $this->_var['lang']['user_logout']; ?></a>
<li class="site-nav-pipe">|</li>
<li class="menu home" >
<div class="menu-hd">
<a href="user.php?act=order_list" target="_top"   title="我的订单">我的订单</a>
</div>
</li>
<li class="site-nav-pipe">|</li>
<li class="menu home" >
<div class="menu-hd" style="font-size:12px;">
<a href="user.php?act=collection_list" target="_top" title="我的收藏">我的收藏</a>
</div>
</li>
<?php else: ?>
<span id="ECS_MEMBERZONE"> 
<li class="J_Menu menu my-taobao" >
<div class="menu-hd">
<a href="user.php" target="_top" class="h" ><span>您好，请登录</span></a> 
</div>
</li>
<li class="site-nav-pipe">|</li>
<li class=" J_Menu menu my-taobao" >
<div class="menu-hd">
<a href="user.php?act=register" target="_top" class="h"><span>免费注册</span></a> 
</div>
</li>
<li class="site-nav-pipe">|</li>
<li class="menu home" >
<div class="menu-hd">
<a href="help.php?id=1" target="_top" title="帮助中心">帮助中心</a>
</div>
</li>
</span>
<?php endif; ?>
</div>
</div>
</li>

