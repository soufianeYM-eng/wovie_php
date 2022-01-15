<?php require PATH . '/theme/view/common/assets.php'; ?>

<header class="showcase">
    <div class="header">
        <div class="logo">
            <img src="<?php echo ASSETS.'/img/logoMovie.png';?>" alt="Aeonnovel Logo">
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
                <button id="btn-next" type="button" class="btn btn-block btn-lg"><?php echo __('Next');?></button>
            </form>
        </div>
    </div>
    <div id="step2" class="flex-fill" style="margin-top:3%; display:none;">
        <div class="auth auth-login">
            <i class="fas fa-lock fa-3x" style="color:#37b6ff;margin-bottom: 30px;"></i>
            <h6 class="step">STEP 2 OF 2</h6>
            <h2 class="title">11,70$/month</h2><br>
            <h2 class="title">Set up your payment</h2><br>
            <p class="sub-title">Your membership starts as <br> soon as you set up <br> payment</p>
            <p class="payment-quote"> No commitments.<br>Cancel online anytime. </p>
            <!-- <button id="btn-next" class="btn btn-block btn-lg"><?php echo __('Next');?></button> -->
            <span class="secure-quote">Secure Server <i class="fas fa-lock fa-sm" style="color:#FFD700;"></i></span>
            <div id="payment-card">
                <div id="paypal-button-container" style="margin-top:30px;"></div>
                <button id="stripe-button-container" class="btn btn-block btn-stripe"><i class="fab fa-stripe fa-3x" style="color:white;"></i></button>
            </div>
            <!-- <div class="text-center my-3"><?php echo __('I have a registered account');?> <a href="<?php echo APP.'/login';?>" class="text-white"><?php echo __('Login');?></a></div> -->
        </div>
    </div>

    <div id="success-payment" class="flex-fill" style="margin-top:3%; display:none;">
        <div class="auth auth-login">
            <div class="card-success">
            <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                <i class="checkmark">✓</i>
            </div>
                <h1>Success</h1> 
                <p>We received your purchase request;<br/> we'll be in touch shortly!</p><br>
                <p class="redirect">You will be redirect to your account...</p>
            </div>
        </div>
    </div>
    <div id="failed-payment" class="flex-fill" style="margin-top:3%; display:none;">
        <div class="auth auth-login">
            <div class="card-failed">
            <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                <i class="checkmark">X</i>
            </div>
                <h1>Failed</h1> 
                <p>Your subscription payment failed;<br/> please try again!</p><br>
                <p class="redirect">You will be redirect to payment page...</p>
            </div>
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
            step_1.style.display="none";
            step_2.style.display="block";
        }
    });

</script>
<script src="https://www.paypal.com/sdk/js?client-id=Acrki1IgTtAer0iOKUw_jY8pGIkZZmH5ui-LVq3PzceH8P0lCVglyAQ20IGJbvxeGkT_lBWVFuEWfrAp&disable-funding=credit,card"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="<?php echo ASSETS.'/js/paypal.js' ?>"></script>
<script src="<?php echo ASSETS.'/js/stripe.js' ?>"></script>


