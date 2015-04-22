<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />

<link href="themes/xinyu/css/base.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="themes/xinyu/css/index.css">
<link rel="stylesheet" href="themes/xinyu/css/cart_order.css">


<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js,transport.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,shopping_flow.js,utils.js')); ?>
<script src="themes/xinyu/js/jquery.min.js"></script>
</head>

<body>

<?php echo $this->fetch('library/page_header1.lbi'); ?>

<?php echo $this->fetch('library/xinyu_flow_cart.lbi'); ?>
<?php echo $this->fetch('library/xinyu_flow_login.lbi'); ?>
<?php echo $this->fetch('library/xinyu_flow_consignee.lbi'); ?>
<?php echo $this->fetch('library/xinyu_flow_checkout.lbi'); ?>
<?php echo $this->fetch('library/xinyu_flow_done.lbi'); ?>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>