<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />

<?php echo $this->fetch('library/commoncss.lbi'); ?>
</head>

<body>
<?php $_from = $this->_var['banner2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'banner2_0_76053500_1429665419');if (count($_from)):
    foreach ($_from AS $this->_var['banner2_0_76053500_1429665419']):
?>
<div class="toppromo">
<div class="banner" style="background:url(<?php echo $this->_var['banner2_0_76053500_1429665419']['ad_code']; ?>) no-repeat top center;">
<a name="sfbest_hp_hp_headbanner_1" class="trackref" href="<?php echo $this->_var['banner2_0_76053500_1429665419']['ad_link']; ?>" target="_blank"><?php echo $this->_var['banner2_0_76053500_1429665419']['title']; ?></a>
</div>
<span class="topclose">关闭</span>
</div> 
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

<?php echo $this->fetch('library/page_header.lbi'); ?>

<?php echo $this->fetch('library/xinyu_nav_common.lbi'); ?>
<?php echo $this->fetch('library/index_ad.lbi'); ?>

<div class="cover-page-index fl wfs pt30">
<div class="cover-page-wrapper">
<?php echo $this->fetch('library/gonglve.lbi'); ?>


<?php $this->assign('cat_goods',$this->_var['cat_goods_76']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_76']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_2']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_2']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_111']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_111']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_124']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_124']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_135']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_135']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_136']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_136']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_138']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_138']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>



</div>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>

<script type="text/javascript">
$(".topclose").click(function() {
$(".topclose").hide();
$(".banner").slideUp(500)
});
</script>
</body>
</html>