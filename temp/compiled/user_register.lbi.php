<?php if ($this->_var['action'] == 'register'): ?>
<?php if ($this->_var['shop_reg_closed'] == 1): ?>
<div class="f1 f5" align="center"><?php echo $this->_var['lang']['shop_register_closed']; ?></div>
<?php else: ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>

<div class="sign">
    <div class="loginWrap">
        <div class="loginPic1">
            <a href="index.php" target="_blank" class="signup_link"></a>
            <div class="loginBord">
                <div class="loginTit">
                    <div class="tosignup">已有账号<a href="user.php">在此登录</a></div>
                    <h1><strong>用户注册</strong></h1>
                </div>
                 <form action="user.php" method="post" name="formUser" onsubmit="return register();">
		 <div class="line">
                        <div class="textbox_ui">
                            <input type="text"  name="username"  id="username" placeholder="用户名"  onblur="is_registered(this.value);" autofocus autocomplete="off">
                            <div id="username_notice" class="focus_text"></div>
                        </div>
                    </div>
                    <div class="line">
                        <div class="textbox_ui">
                            <input type="text" name="email" id="email" placeholder="邮箱" autofocus autocomplete="off" onblur="checkEmail(this.value);" >
                            <div id="email_notice" class="focus_text"></div>
			</div>
                    </div>
                     <div class="line">
                        <div class="textbox_ui">
                            <input name="password" type="password" id="password1" placeholder="密码" autocomplete="off"  onkeyup="checkIntensity(this.value)"  onblur="check_password(this.value);">
                            <div class="focus_text">
                                <p id="password_notice" class="default"></p>
                            </div>
                        </div>
                    </div>
                    <div class="line">
                        <div class="textbox_ui">
                            <input name="confirm_password" type="password" id="conform_password" onblur="check_conform_password(this.value);" placeholder="重复密码" autocomplete="off">
                            <div id="conform_password_notice" class="focus_text"></div>
                        </div>
                    </div>
		    <?php if ($this->_var['enabled_captcha']): ?>
                    <div class="line verityWrap">
                        <div class="textbox_ui">
                            <input type="text" placeholder="<?php echo $this->_var['lang']['comment_captcha']; ?>" name="captcha" onblur="changeCaptcha(this.value)" id="captcha" autocomplete="off">
                            <div id="captcha_text" class="focus_text">按右图填写，不区分大小写</div>
                        </div>
                        <span id="change_verify_code">
                            <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha"   style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?'+Math.random()" />                    
                        </span>
                    </div>
		      <?php endif; ?>
                    <div class="act" style="margin-left: 0px;">
                        <p> 
			   <input name="act" type="hidden" value="act_register" >
                            <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
                            <input  name="Submit" type="submit" class="submit_btn" value="同意协议并注册"  style="width: 100%;">
                        </p>
                        <p style="color:#ed145b;"> 
			<label>
                           <input name="agreement" type="checkbox" value="1" checked="checked"  style="display:none;"/>
                           <?php echo $this->_var['lang']['agreement']; ?></label>
                           
                        </p>
                    </div>
                    <br />
                </form>
                <div class="shadow_l"></div>
                <div class="shadow_r"></div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php endif; ?>