
<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/xinyu/css/base.css" type="text/css" rel="stylesheet" />
<link href="themes/xinyu/css/user_nav.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="themes/xinyu/css/user.css">


<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,common.js,user.js,utils.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header_category.lbi'); ?>
<?php echo $this->fetch('library/xinyu_nav_common.lbi'); ?>
<div class="clear"  style="height:5px"><a name="v2"></a></div>
<div class="user clearfix">
<?php echo $this->fetch('library/user_menu.lbi'); ?>
<?php echo $this->fetch('library/user_default.lbi'); ?>
<?php echo $this->fetch('library/user_my_collect.lbi'); ?>
<?php echo $this->fetch('library/user_comment_list.lbi'); ?>
<?php echo $this->fetch('library/user_message_list.lbi'); ?>
<?php echo $this->fetch('library/user_booking_list.lbi'); ?>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['clips_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</html>