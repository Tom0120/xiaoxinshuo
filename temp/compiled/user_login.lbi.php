<?php if ($this->_var['action'] == 'login'): ?>

<div class="sign">
    <div class="loginWrap">
        <div class="loginPic">
            <div class="loginBord">
                <div class="loginTit">
                    <div class="tosignup">还没有聚孝心说账号？<a href="user.php?act=register">30秒注册</a></div>
                    <h1><strong>登录孝心说</strong></h1>
                </div>
		 <form id="loginForm" name="formLogin" action="user.php" method="post" onSubmit="return userLogin()">
                       <div class="textbox_ui user">
                        <input type="text" name="username" placeholder="已验证邮箱/用户名" id="username" autofocus autocomplete="off" value="">
                        <div class="focus_text">请输入登录名，登录名可能是您的邮箱或用户名</div>
                    </div>
                    <div class="textbox_ui pass">
                        <input type="password" placeholder="密码"  name="password" id="login_password" autocomplete="off">
                        <div class="focus_text">请输入您的密码，您的密码可能为字母、数字或符号的组合</div>
                     </div>
		     <?php if ($this->_var['enabled_captcha']): ?>
                    <div class="verityWrap">
                        <div class="textbox_ui">
                            <input type="text" name="captcha" placeholder="验证码" autocomplete="off" id="verify_code">
                            <div class="focus_text">按右图填写，不区分大小写</div>
                        </div>
                        <span id="change_verify_code">
                           <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" />
                            换一张
                        </span>
                    </div>
		   <?php endif; ?>
                    <p>
                        <a href="user.php?act=get_password" class="fr">忘记密码?</a>
                        <label for="auto_login">
                            <input type="checkbox" id="auto_login" checked>
                            &nbsp;自动登录
                        </label>
                    </p>
		     <input type="hidden" name="act" value="act_login" />
                   <input type="hidden" name="back_act" value="index.php" />
                    <input class="loginbtn submit_btn" type="submit" value="登 录" style=" display: block;width: 100%;">
                    <div id="errorMsg"></div>
                </form>

               <div class="shadow_l"></div>
               <div class="shadow_r"></div>
        </div>
    </div>
</div>
</div>
</div>

<?php endif; ?>