<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js,transport.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js')); ?>
<link rel="stylesheet" href="themes/xinyu/css/user_logo.css" type="text/css" media="screen" charset="utf-8" />
</head>
<body>
<?php echo $this->fetch('library/page_header1.lbi'); ?>
<div id="header_container">
    
    <div id="logo">
        <a href="index.php" id="home" title="孝心说" style="background:url(themes/xinyu/images/logo.png ) no-repeat top left;"> </a>
        <div class="header_logo_box">
            <a href="#" rel="nofollow" class="top_link lightning" target="_blank"></a>
            <a href="#" rel="nofollow" class="top_link gild" target="_blank"></a>
            <a href="#" rel="nofollow" class="top_link credit" target="_blank"></a>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/user_login.lbi'); ?>
<?php echo $this->fetch('library/user_register.lbi'); ?>
<?php echo $this->fetch('library/user_get_password.lbi'); ?>
<?php echo $this->fetch('library/user_getback_password.lbi'); ?>
<?php echo $this->fetch('library/page_footer1.lbi'); ?>
</body>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
</script>
<SCRIPT language=JavaScript>  
    function killErrors() {  
    return true;  
    }  
    window.onerror = killErrors;  
    </SCRIPT> 
</html>