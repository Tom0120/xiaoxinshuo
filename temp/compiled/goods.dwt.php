<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<?php echo $this->fetch('library/commoncss.lbi'); ?>
<script type="text/javascript">
function $id(element) {
return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
var bt=$id(str+"_b").getElementsByTagName("h2");
for(var i=0;i<bt.length;i++){
bt[i].subj=str;
bt[i].pai=i;
bt[i].style.cursor="pointer";
bt[i].onclick=function(){
$id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
var ison=j==this.pai;
_bt.className=(ison?"":"h2bg");
}
}
}
$id(str+"_h").className="none";
$id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}
</script>
<script src="themes/xinyu/js/goods_pic.js"></script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<?php echo $this->fetch('library/xinyu_nav_common.lbi'); ?>
<div class="cover-page-details fl wfs" style="background:#FFF;">
<div class="cover-page-wrapper">
<?php echo $this->fetch('library/ur_here.lbi'); ?>
<div class="details fl wfs" style="position:relative;border:1px solid #ddd;">
<?php echo $this->fetch('library/goods_gallery.lbi'); ?>
<?php echo $this->fetch('library/goods_spjs.lbi'); ?>
<?php echo $this->fetch('library/goods_brand_right.lbi'); ?>
</div>
</div>
<div class="srp clearfix">

<?php echo $this->fetch('library/goods_xiangxi_left.lbi'); ?>
<?php echo $this->fetch('library/goods_xiangxi_right.lbi'); ?>
</div>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
changePrice();
fixpng();
try {onload_leftTime();}
catch (e) {}
}

function comment_location()
{
$(".content-icons ul li").removeClass("cur").eq(1).addClass("cur");
$(".j-content-item").eq(1).show().siblings(".j-content-item").hide();
var top= ($(".content").offset().top-48)+'px';
$('html,body').animate({scrollTop: top}, "slow");
mainleftnav();
}

function changeAtt(t) {
t.lastChild.checked='checked';
for (var i = 0; i<t.parentNode.childNodes.length;i++) {
if (t.parentNode.childNodes[i].className == 'now') {
t.parentNode.childNodes[i].className = '';
}
}
t.className = "now";
changePrice();
}
/**
* 点选可选属性或改变数量时修改商品价格的函数
*/
function changePrice()
{
var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}
/**
* 接收返回的信息
*/
function changePriceResponse(res)
{
if (res.err_msg.length > 0)
{
alert(res.err_msg);
}
else
{
document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

if (document.getElementById('ECS_GOODS_AMOUNT'))
document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
}
}

</script>

</body>
</html>