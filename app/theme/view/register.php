<?php require PATH . '/theme/view/common/header.php';?>
<div class="flex-fill">
    <div class="auth auth-login">
        <form method="post" autocomplete="off" class="form-content">
            <input type="hidden" name="_TOKEN" value="<?php echo $Token;?>">
            <input type="hidden" name="_ACTION" value="register">
            <div class="form-group">
                <label class="custom-label"><?php echo __('Name');?></label>
                <input type="text" name="name" class="form-control" placeholder="<?php echo __('Name');?>" required="true" value="<?php echo Input::cleaner($_POST['name']);?>">
            </div>
            <div class="form-group">
                <label class="custom-label"><?php echo __('Username');?></label>
                <input type="text" name="username" class="form-control" placeholder="<?php echo __('Username');?>" required="true" value="<?php echo Input::cleaner($_POST['username']);?>">
            </div>
            <div class="form-group">
                <label class="custom-label"><?php echo __('Email');?></label>
                <input type="email" name="email" class="form-control" placeholder="<?php echo __('Email');?>" required="true" value="<?php echo Input::cleaner($_POST['email']);?>">
            </div>
            <div class="form-group">
                <label class="custom-label"><?php echo __('Password');?></label>
                <input type="password" name="password" class="form-control" placeholder="<?php echo __('Password');?>" required="true">
            </div>
            <button type="submit" class="btn btn-block btn-theme btn-lg"><?php echo __('Register');?></button>
        </form>
        <div id="paypal-button-container" style="margin-top:20px;">
            
        </div>

        <div class="text-center my-3"><?php echo __('I have a registered account');?> <a href="<?php echo APP.'/login';?>" class="text-white"><?php echo __('Login');?></a></div>
    </div>
</div>
<script src="https://www.paypal.com/sdk/js?client-id=Acrki1IgTtAer0iOKUw_jY8pGIkZZmH5ui-LVq3PzceH8P0lCVglyAQ20IGJbvxeGkT_lBWVFuEWfrAp&disable-funding=credit,card"></script>
<script src="<?php echo ASSETS.'/js/paypal.js' ?>"></script>
<?php require PATH . '/theme/view/common/footer.php';?>