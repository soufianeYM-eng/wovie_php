<?php require PATH . '/theme/view/common/assets.php'; ?>

<header class="showcase">
    <div class="header">
        <div class="logo">
            <a href="<?php echo APP.'/home';?>"><img src="<?php echo ASSETS.'/img/logoAeo.png';?>" alt="Aeonnovel Logo"></a>
        </div>
        <div class="sign-in">
            <a href="<?php echo APP.'/login';?>" class="btn btn-rounded">Sign In</a>
        </div>
    </div>      
    <div id="step1" class="flex-fill" style="margin-top:3%;">
        <div class="auth auth-login">
            <h6 class="step">STEP 1 OF 2</h6>
            <h2 class="title">Create a password to start your membership</h2>
            <p class="sub-title">Just a few more steps and you're done! <br> We hate paperwork, too.</p>
            <form id="form_infos" name="infos_form_step1" method="post" autocomplete="off" class="form-content">
                <input type="hidden" name="_TOKEN" value="<?php echo $Token;?>">
                <input type="hidden" name="_ACTION" value="register">
                <ul class="errors"></ul>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="<?php echo __('Email');?>" required="true" value="<?php echo Input::cleaner($_POST['email']);?>">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="<?php echo __('Password');?>" required="true">
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                    <span class="checkbox-title">Je ne souhaite pas recevoir les offres spéciales de Aeonnovel par e-mail.</span>
                  </label>
                </div>
                <!-- <button type="submit" class="btn btn-block btn-theme btn-lg"><?php echo __('Register');?></button> -->
                <button id="btn-next" type="submit" class="btn btn-block btn-lg"><?php echo __('Next');?></button>
            </form>
        </div>
    </div>
</header>
<script>
    if(localStorage.getItem("user-mail")){
        document.forms["infos_form_step1"]["email"].value = localStorage.getItem("user-mail")
    }
    var errors = document.querySelector('.errors')
    var btn_next = document.getElementById("btn-next")
    var step_1 = document.getElementById("step1")
    var step_2 = document.getElementById("step2")
    btn_next.addEventListener("click", function(){
        var email = document.forms["infos_form_step1"]["email"].value;
        var password = document.forms["infos_form_step1"]["password"].value;
        if( email == "" && password == ""){
            errors.innerHTML ="<li>Please can you enter your email</li>"
            errors.innerHTML +="<li>Please can you enter your password</li>"
        }else if(!email.includes('@')){
            errors.innerHTML ="<li>Please can you enter a correct email</li>"
        }else if( email == ""){
            errors.innerHTML ="<li>Please can you enter your email</li>"
        }else if(password == ""){
            errors.innerHTML ="<li>Please can you enter your password</li>"
        }else{
            localStorage.setItem("email", document.forms["infos_form_step1"]["email"].value)
        }
    });

</script>
<!-- <script src="https://www.paypal.com/sdk/js?client-id=Acrki1IgTtAer0iOKUw_jY8pGIkZZmH5ui-LVq3PzceH8P0lCVglyAQ20IGJbvxeGkT_lBWVFuEWfrAp&disable-funding=credit,card"></script> -->
<!-- <script src="https://js.stripe.com/v3/"></script>
<script src="https://checkout.stripe.com/checkout.js"></script> -->

<!-- <script src="<?php echo ASSETS.'/js/paypal.js' ?>"></script> -->
<!-- <script src="<?php echo ASSETS.'/js/stripe.js' ?>"></script> -->


