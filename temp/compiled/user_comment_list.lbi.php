
<?php if ($this->_var['action'] == 'comment_list'): ?>
<div class="rightBox">
<div class="rightTit"><h2><i></i><?php echo $this->_var['lang']['label_comment']; ?></h2></div>
<div class="rightCon">
<?php $_from = $this->_var['comment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment');if (count($_from)):
    foreach ($_from AS $this->_var['comment']):
?>
<div class="f_l">
<b><?php if ($this->_var['comment']['comment_type'] == '0'): ?><?php echo $this->_var['lang']['goods_comment']; ?><?php else: ?><?php echo $this->_var['lang']['article_comment']; ?><?php endif; ?>: </b><font class="f4"><?php echo $this->_var['comment']['cmt_name']; ?></font>&nbsp;&nbsp;(<?php echo $this->_var['comment']['formated_add_time']; ?>)
</div>
<div class="f_r">
<a href="user.php?act=del_cmt&amp;id=<?php echo $this->_var['comment']['comment_id']; ?>" title="<?php echo $this->_var['lang']['drop']; ?>" onclick="if (!confirm('<?php echo $this->_var['lang']['confirm_remove_msg']; ?>')) return false;" class="f6"><?php echo $this->_var['lang']['drop']; ?></a>
</div>
<div class="msgBottomBorder">
<?php echo htmlspecialchars($this->_var['comment']['content']); ?><br />
<?php if ($this->_var['comment']['reply_content']): ?>
<b><?php echo $this->_var['lang']['reply_comment']; ?>：</b><br />
<?php echo $this->_var['comment']['reply_content']; ?>
<?php endif; ?>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php if ($this->_var['comment_list']): ?>

<?php else: ?>
<?php echo $this->_var['lang']['no_comments']; ?>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
  