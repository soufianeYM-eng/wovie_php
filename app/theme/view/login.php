<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo ASSETS.'/css/signInStyle.css';?>">
    <link rel="shortcut icon" href="<?php echo ASSETS.'/img/favicon.png';?>">
    <title>Aeonnovel - Watch TV Shows Online, Watch Movies Online</title>
</head>
<body>
    <header class="showcase">
            <div class="logo">
                <a href="<?php echo APP.'/main';?>"><img src="<?php echo ASSETS.'/img/logoAeo.png';?>"></a>
            </div>
            <div class="showcase-content">
                <div class="formm">
                    <form method="post">
                        <h1>Sign In</h1>
                        <div class="info">
                            <input type="hidden" name="_TOKEN" value="<?php echo $Token;?>">
                            <input type="hidden" name="_ACTION" value="login">
                            <input class="email" name="email" type="email" id="input-email" placeholder="<?php echo __('Email');?>" value="<?php echo Input::cleaner($_POST['email']);?>" required="true" autocomplete="off"> <br>                            
                            <input class="email" name="password" type="password" id="input-password" placeholder="<?php echo __('Password');?>" required="true" autocomplete="off">
                        </div>
                        <div class="btn">
                            <button class="btn-primary" type="submit">Sign In</button>
                        </div>
                        <div class="help">
                            <div>
                                <input value="true" type="checkbox"><label>Remember me</label>
                            </div>
                            <a href="<?php echo APP.'/forgot-password';?>"><?php echo __('Forgot password ?');?></a>
                        </div>
                    </form>
                </div>
                <div class="signup">
                    <p>New to Aeonnovel ?</p>
                    <a href="<?php echo APP.'/register';?>" class="text-white"><?php echo __('Sign up now');?></a>
                </div>
                <div class="more">
                    <p>
                        This page is protected by Google reCAPTCHA to ensure you're not a bot. <a href="#">Learn more.</a> 
                    </p>
                </div>
            </div>
            <!-- <footer>
                <div class="ftr-content">
                    <div class="contact">
                        <a href="#">Quesions? Contact us.</a>
                    </div>
                    <div class="ftr">
                        <a href="#">Gift Card Terms</a>
                        <a href="#">Terms of Use</a>
                        <a href="#">Privacy Statement</a>
                    </div>
                    <div class="select">
                        <select>
                            <option>English</option>
                            <option>العربية</option>
                            <option>Français</option>
                        </select>
                    </div>
                </div>
            </footer> -->
    </header>
</body>
</html>


<!-- Old Code -->

<!-- <div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-6 col-lg-6 col-xl-6 py-3 py-md-5">
            <form method="post" class="py-5" autocomplete="off"> 
                <input type="hidden" name="_TOKEN" value="<?php echo $Token;?>">
                <input type="hidden" name="_ACTION" value="login">
                <div class="form-group">
                    <label class="form-control-label"><?php echo __('Email');?></label>
                    <input type="email" name="email" class="form-control" id="input-email" placeholder="<?php echo __('Email');?>" value="<?php echo Input::cleaner($_POST['email']);?>" required="true" autocomplete="off">
                </div>
                <div class="form-group mb-0">
                    <label class="form-control-label"><?php echo __('Password');?></label>
                    <input type="password" name="password" class="form-control" id="input-password" placeholder="<?php echo __('Password');?>" required="true" autocomplete="off">
                    <a href="<?php echo APP.'/forgot-password';?>" class="d-inline-block mt-2 text-12"><?php echo __('Forgot password');?></a>
                </div> 
                <div class="my-3">
                    <button type="submit" class="btn btn-block btn-theme btn-lg"><?php echo __('Login');?></button>
                </div>
                <div class="text-center"><?php echo __('Don\'t have an account ?');?>
                    <a href="<?php echo APP.'/register';?>" class="text-white"><?php echo __('Register');?></a>
                </div>
            </form>
        </div>
    </div>
</div>  -->
