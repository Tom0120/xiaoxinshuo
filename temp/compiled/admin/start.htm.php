<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->_var['lang']['cp_home']; ?><?php if ($this->_var['ur_here']): ?> - <?php echo $this->_var['ur_here']; ?> <?php endif; ?></title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="styles/general.css" rel="stylesheet" type="text/css" />
<link href="styles/style.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'../js/transport_old.js,common.js')); ?>
<script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
<?php $_from = $this->_var['lang']['js_languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
//-->
</script>
</head>
<body style="margin: 20px;">
<div style="margin:0 auto; width:98%;">
<div class="panel-left">
<div>
<div class="box">
<div class="title">
<i><img src="./images/username.png"/></i><span>个人信息</span>
<!--<a href="#" class="minimize hide"></a>-->
</div>
<div class="content">
<p>你好，admin</p>
<p>所属角色：系统管理员</p>
<p>上次登录时间：2015-03-05 09:14:12</p>
<p>上次登录IP：127.0.0.1</p>
</div>
</div>
</div>
<div>
<div class="box">
<div class="title">
<i><img src="./images/attachment.png"/></i><span><?php echo $this->_var['lang']['acess_stat']; ?></span>
</div>
<div class="content">
<table cellspacing='1' cellpadding='3'>

<tr height="25">
<td width="20%"><?php echo $this->_var['lang']['acess_today']; ?></td>
<td width="30%"><strong><?php echo $this->_var['today_visit']; ?></strong></td>
<td width="20%"><?php echo $this->_var['lang']['online_users']; ?></td>
<td width="30%"><strong><?php echo $this->_var['online_users']; ?></strong></td>
</tr>
<tr height="25">
<td><a href="user_msg.php?act=list_all"><?php echo $this->_var['lang']['new_feedback']; ?></a></td>
<td><strong><?php echo $this->_var['feedback_number']; ?></strong></td>
<td><a href="comment_manage.php?act=list"><?php echo $this->_var['lang']['new_comments']; ?></a></td>
<td><strong><?php echo $this->_var['comment_number']; ?></strong></td>
</tr>
</table>

</div>
</div>
<div class="box">
<div class="title">
<i><img src="./images/editor.png"/></i><span><?php echo $this->_var['lang']['system_info']; ?></span>
</div>
<div class="content">
<table cellspacing='1' cellpadding='3'>

<tr height="25">
<td width="20%"><?php echo $this->_var['lang']['os']; ?></td>
<td width="30%"><?php echo $this->_var['sys_info']['os']; ?> (<?php echo $this->_var['sys_info']['ip']; ?>)</td>
<td width="20%"><?php echo $this->_var['lang']['web_server']; ?></td>
<td width="30%"><?php echo $this->_var['sys_info']['web_server']; ?></td>
</tr>
<tr height="25">
<td><?php echo $this->_var['lang']['php_version']; ?></td>
<td><?php echo $this->_var['sys_info']['php_ver']; ?></td>
<td><?php echo $this->_var['lang']['mysql_version']; ?></td>
<td><?php echo $this->_var['sys_info']['mysql_ver']; ?></td>
</tr>
<tr height="25">
<td><?php echo $this->_var['lang']['safe_mode']; ?></td>
<td><?php echo $this->_var['sys_info']['safe_mode']; ?></td>
<td><?php echo $this->_var['lang']['safe_mode_gid']; ?></td>
<td><?php echo $this->_var['sys_info']['safe_mode_gid']; ?></td>
</tr>
<tr height="25">
<td><?php echo $this->_var['lang']['socket']; ?></td>
<td><?php echo $this->_var['sys_info']['socket']; ?></td>
<td><?php echo $this->_var['lang']['timezone']; ?></td>
<td><?php echo $this->_var['sys_info']['timezone']; ?></td>
</tr>
<tr height="25">
<td><?php echo $this->_var['lang']['gd_version']; ?></td>
<td><?php echo $this->_var['sys_info']['gd']; ?></td>
<td><?php echo $this->_var['lang']['zlib']; ?></td>
<td><?php echo $this->_var['sys_info']['zlib']; ?></td>
</tr>
<tr height="25">
<td><?php echo $this->_var['lang']['ip_version']; ?></td>
<td><?php echo $this->_var['sys_info']['ip_version']; ?></td>
<td>上传限制</td>
<td><?php echo $this->_var['sys_info']['max_filesize']; ?></td>
</tr>

<tr height="25">
<td><?php echo $this->_var['lang']['install_date']; ?></td>
<td><?php echo $this->_var['install_date']; ?></td>
</tr>
</table>
</div>
</div>
</div>
</div>
<div class="panel-right">
<div>
<?php if ($this->_var['admin_msg']): ?>
<div class="box">
<div class="title">
<i><img src="./images/help_con.png"/></i><span><?php echo $this->_var['lang']['virtual_card_stat']; ?></span>
<a href="#" class="minimize hide"></a>
</div>
<div class="content fast-opt help-opt" style="display: block;">

<div class="list-div">
  <table cellspacing='1' cellpadding='3'>
    <tr height="25">
      <th width="80px"><?php echo $this->_var['lang']['pm_title']; ?></th>
      <th width="80px"><?php echo $this->_var['lang']['pm_username']; ?></th>
      <th width="80px"> <?php echo $this->_var['lang']['pm_time']; ?></th>
    </tr>
    <?php $_from = $this->_var['admin_msg']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'msg');if (count($_from)):
    foreach ($_from AS $this->_var['msg']):
?>
      <tr height="25" align="center">
        <td align="left"><a href="message.php?act=view&id=<?php echo $this->_var['msg']['message_id']; ?>"><?php echo sub_str($this->_var['msg']['title'],60); ?></a></td>
        <td><?php echo $this->_var['msg']['user_name']; ?></td>
        <td><?php echo $this->_var['msg']['send_date']; ?></td>
      </tr>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </table>
  </div>
</div>
</div>
<?php endif; ?>
<div class="box">
<div class="title">
<i><img src="./images/help_con.png"/></i><span><?php echo $this->_var['lang']['virtual_card_stat']; ?></span>
<a href="#" class="minimize hide"></a>
</div>
<div class="content fast-opt help-opt" style="display: block;">
<table cellspacing='1' cellpadding='3'>
 
  <tr height="25">
    <td width="20%"><?php echo $this->_var['lang']['goods_count']; ?></td>
    <td width="30%"><strong><?php echo $this->_var['virtual_card']['total']; ?></strong></td>
    <td width="20%"><a href="goods.php?act=list&amp;stock_warning=1&amp;extension_code=virtual_card"><?php echo $this->_var['lang']['warn_goods']; ?></a></td>
    <td width="30%"><strong style="color: red"><?php echo $this->_var['virtual_card']['warn']; ?></strong></td>
  </tr>
  <tr height="25">
    <td><a href="goods.php?act=list&amp;intro_type=is_new&amp;extension_code=virtual_card"><?php echo $this->_var['lang']['new_goods']; ?></a></td>
    <td><strong><?php echo $this->_var['virtual_card']['new']; ?></strong></td>
    <td><a href="goods.php?act=list&amp;intro_type=is_best&amp;extension_code=virtual_card"><?php echo $this->_var['lang']['recommed_goods']; ?></a></td>
    <td><strong><?php echo $this->_var['virtual_card']['best']; ?></strong></td>
  </tr>
  <tr height="25">
    <td><a href="goods.php?act=list&amp;intro_type=is_hot&amp;extension_code=virtual_card"><?php echo $this->_var['lang']['hot_goods']; ?></a></td>
    <td><strong><?php echo $this->_var['virtual_card']['hot']; ?></strong></td>
    <td><a href="goods.php?act=list&amp;intro_type=is_promote&amp;extension_code=virtual_card"><?php echo $this->_var['lang']['sales_count']; ?></a></td>
    <td><strong><?php echo $this->_var['virtual_card']['promote']; ?></strong></td>
  </tr>
</table>
<div style="clear:both"></div>
</div>
</div>

<div>
<div class="box">
<div class="title">
<i><img src="./images/info.png"/></i><span><?php echo $this->_var['lang']['order_stat']; ?></span>
</div>
<div class="content sys">

<table cellspacing='1' cellpadding='3'>
<tr height="25">
<td width="20%"><a href="order.php?act=list&composite_status=<?php echo $this->_var['status']['await_ship']; ?>"><?php echo $this->_var['lang']['await_ship']; ?></a></td>
<td width="30%"><strong style="color: red"><?php echo $this->_var['order']['await_ship']; ?></strong></td>
<td width="20%"><a href="order.php?act=list&composite_status=<?php echo $this->_var['status']['unconfirmed']; ?>"><?php echo $this->_var['lang']['unconfirmed']; ?></a></td>
<td width="30%"><strong><?php echo $this->_var['order']['unconfirmed']; ?></strong></td>
</tr>
<tr height="25">
<td><a href="order.php?act=list&composite_status=<?php echo $this->_var['status']['await_pay']; ?>"><?php echo $this->_var['lang']['await_pay']; ?></a></td>
<td><strong><?php echo $this->_var['order']['await_pay']; ?></strong></td>
<td><a href="order.php?act=list&composite_status=<?php echo $this->_var['status']['finished']; ?>"><?php echo $this->_var['lang']['finished']; ?></a></td>
<td><strong><?php echo $this->_var['order']['finished']; ?></strong></td>
</tr>
<tr height="25">
<td><a href="goods_booking.php?act=list_all"><?php echo $this->_var['lang']['new_booking']; ?></a></td>
<td><strong><?php echo $this->_var['booking_goods']; ?></strong></td>
<td><a href="user_account.php?act=list&process_type=1&is_paid=0"><?php echo $this->_var['lang']['new_reimburse']; ?></a></td>
<td><strong><?php echo $this->_var['new_repay']; ?></strong></td>
</tr>
<!-- mod by angel -->
<tr height="25">
<td><a href="order.php?act=refund_list">退换货申请</a></td>
<td><strong><?php echo $this->_var['refund_goods']; ?></strong></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
</div>
</div>
</div>
<div>
<div class="box">
<div class="title">
<i><img src="./images/icon-flag.png"/></i><span><?php echo $this->_var['lang']['goods_stat']; ?></span>
</div>
<div class="content">

<table cellspacing='1' cellpadding='3'>

  <tr height="25">
    <td width="20%"><?php echo $this->_var['lang']['goods_count']; ?></td>
    <td width="30%"><strong><?php echo $this->_var['goods']['total']; ?></strong></td>
    <td width="20%"><a href="goods.php?act=list&stock_warning=1"><?php echo $this->_var['lang']['warn_goods']; ?></a></td>
    <td width="30%"><strong style="color: red"><?php echo $this->_var['goods']['warn']; ?></strong></td>
  </tr>
  <tr height="25">
    <td><a href="goods.php?act=list&amp;intro_type=is_new"><?php echo $this->_var['lang']['new_goods']; ?></a></td>
    <td><strong><?php echo $this->_var['goods']['new']; ?></strong></td>
    <td><a href="goods.php?act=list&amp;intro_type=is_best"><?php echo $this->_var['lang']['recommed_goods']; ?></a></td>
    <td><strong><?php echo $this->_var['goods']['best']; ?></strong></td>
  </tr>
  <tr height="25">
    <td><a href="goods.php?act=list&amp;intro_type=is_hot"><?php echo $this->_var['lang']['hot_goods']; ?></a></td>
    <td><strong><?php echo $this->_var['goods']['hot']; ?></strong></td>
    <td><a href="goods.php?act=list&amp;intro_type=is_promote"><?php echo $this->_var['lang']['sales_count']; ?></a></td>
    <td><strong><?php echo $this->_var['goods']['promote']; ?></strong></td>
  </tr>
</table>

</div>
</div>
</div>
<div>
</div>
</div>
</div>

<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js')); ?>
<script type="Text/Javascript" language="JavaScript">
<!--
onload = function()
{
/* 检查订单 */
startCheckOrder();
}
Ajax.call('index.php?is_ajax=1&act=main_api','', start_api, 'GET', 'TEXT','FLASE');

function start_api(result)
{
apilist = document.getElementById("lilist").innerHTML;
document.getElementById("lilist").innerHTML =result+apilist;
if(document.getElementById("mar") != null)
{
var Mar = document.getElementById("mar");
lis = Mar.getElementsByTagName('div');
//alert(lis.length); //显示li元素的个数
if(lis.length>3)
{
api_styel();
}      
}


}
function api_styel()
{
if(document.getElementById("mar") != null)
{
var Mar = document.getElementById("mar");
if (Browser.isIE)
{
Mar.style.height = "52px";
}
else
{
Mar.style.height = "36px";
}

var child_div=Mar.getElementsByTagName("div");

var picH = 16;//移动高度
var scrollstep=2;//移动步幅,越大越快
var scrolltime=30;//移动频度(毫秒)越大越慢
var stoptime=4000;//间断时间(毫秒)
var tmpH = 0;

function start()
{
if(tmpH < picH)
{
tmpH += scrollstep;
if(tmpH > picH )tmpH = picH ;
Mar.scrollTop = tmpH;
setTimeout(start,scrolltime);
}
else
{
tmpH = 0;
Mar.appendChild(child_div[0]);
Mar.scrollTop = 0;
setTimeout(start,stoptime);
}
}
setTimeout(start,stoptime);
}
}
//-->
</script>

</body>
</html>