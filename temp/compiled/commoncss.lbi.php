<link rel="stylesheet" href="themes/xinyu/css/index.css">
<script src="themes/xinyu/js/jquery.min.js"></script>
<script type='text/javascript' src='themes/xinyu/js/jquery.lazyload.js'></script>

<script type="text/javascript">
	$(function(){
		$('img[data-original]').lazyload({effect:"fadeIn"});
	})
</script>

<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js,utils.js')); ?>