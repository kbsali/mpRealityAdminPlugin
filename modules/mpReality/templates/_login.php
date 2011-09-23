<?php use_helper('I18N');  ?>
<?php use_stylesheet('/mpRealityAdminPlugin/css/login.css'); ?>
<div id="container">
  <div id="header" class="png_bg">
    <div id="head_wrap">
      <div id="logo">
        <h1><a href="#"><?php echo sfConfig::get('app_mp_reality_plugin_title', 'Site title'); ?></span></a></h1>
      </div>
      <div class="clear"></div>
      <h2 class="user_login"><?php echo __('Login', array(), 'mpRealityAdmin'); ?></h2>
    </div>
  </div>
  <div id="login-holder">
    <div class="clear"></div>
    <div id="loginbox">
      <div id="login-inner">
        <form id="loginform" action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
          <?php echo $form->renderGlobalErrors(); ?>
          <div class="bloc_field">
            <label><?php echo __('Username', array(), 'mpRealityAdmin'); ?></label><br/>
            <?php echo $form['username']->render() ?>
            <?php if ($form['username']->hasError()): ?>
              <label for="signin_username" class="error"><?php echo $form['username']->getError() ?></label>
            <?php endif; ?>
          </div>
          <div class="bloc_field password_bloc">
            <label><?php echo __('Password', array(), 'mpRealityAdmin'); ?></label><br/>
            <?php echo $form['password']->render() ?>
            <?php if ($form['password']->hasError()): ?>
              <label for="signin_password" class="error"><?php echo $form['password']->getError() ?></label>
            <?php endif; ?>
          </div>
          <?php if (isset($form['_csrf_token'])): ?>
            <?php echo $form['_csrf_token']->render(); ?>
          <?php endif; ?>
          <!--<a href="" class="forgot-pwd"><?php echo __('Forgot your password?', array(), 'mpRealityAdmin'); ?></a>-->
          <?php echo $form['remember']->render() ?>
          <label for="login-check"><?php echo __('Remember?', array(), 'mpRealityAdmin'); ?></label><br/>
          <input type="submit" value="<?php echo __('Send', array(), 'mpRealityAdmin'); ?>" class="submit-login"  />
        </form>
      </div><!--  #login-inner -->
    </div><!-- #loginbox -->
  </div><!-- #login-holder -->
</div>