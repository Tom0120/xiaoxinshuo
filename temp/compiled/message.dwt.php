<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<?php if ($this->_var['auto_redirect']): ?>
<meta http-equiv="refresh" content="3;URL=<?php echo $this->_var['message']['back_url']; ?>" />
<?php endif; ?>

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link rel="stylesheet" href="themes/xinyu/css/index.css">
<link rel="stylesheet" href="themes/xinyu/css/common.css">

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<style type="text/css">
p a{color:#006acd; text-decoration:underline;}
</style>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="fl wfs bceb">
<div class="shop-cart-wrapper">
<div class="cart-message fl wfs">
<h4 class="title"><?php echo $this->_var['lang']['system_info']; ?></h4>
<p class="content"><?php echo $this->_var['message']['content']; ?></p>
<p class="operate">
<?php if ($this->_var['message']['url_info']): ?>
<?php $_from = $this->_var['message']['url_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('info', 'url');if (count($_from)):
    foreach ($_from AS $this->_var['info'] => $this->_var['url']):
?>
<a href="<?php echo $this->_var['url']; ?>"><?php echo $this->_var['info']; ?></a>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>
</p>
</div>
</div>
</div>
<div class="blank5"></div>

<div class="cover-page-foot fl wfs"  style="background:#FFF;">
<p class="copyright"><?php echo $this->_var['copyright']; ?></p>
<p class="address"> <?php echo $this->_var['shop_address']; ?></p>
<p class="address">
<?php if ($this->_var['icp_number']): ?>
<?php echo $this->_var['lang']['icp_number']; ?>:<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a>
<?php endif; ?>
</p>
<p class="verify">
<a href="#"><img src="themes/xinyu/images/cover-page-foot-3.png" alt="可信网站"></a>
<a href="#"><img src="themes/xinyu/images/cover-page-foot-4.png" alt="可信网站"></a>
<a href="#"><img src="themes/xinyu/images/cover-page-foot-6.png" alt="财付通"></a>
<a href="#"><img src="themes/xinyu/images/bottom_large_img.png" alt="可信网站"></a>
<a href="http://webscan.360.cn/index/checkwebsite/url/www.xiaoxinshuo.com"><img  src="http://img.webscan.360.cn/status/pai/hash/e8c492a1413b531dae9e929d1e390e30" alt="360网站安全检测认证"/></a>
</p>
<p class="verify"><?php echo $this->_var['stats_code']; ?></p>
</div>
</body>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
</html>