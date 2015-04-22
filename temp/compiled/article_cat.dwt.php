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
<link rel="stylesheet" href="themes/xinyu/css/help-center.css">

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<?php echo $this->fetch('library/xinyu_nav_common.lbi'); ?>
<div class="cover-page-details fl wfs" style="background:#FFF">
<div class="cover-page-wrapper">
<?php echo $this->fetch('library/ur_here.lbi'); ?>
<?php echo $this->fetch('library/article_cat_left.lbi'); ?>
<?php echo $this->fetch('library/article_cat_right.lbi'); ?>
<?php echo $this->fetch('library/pages.lbi'); ?>
</div>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>

</html>