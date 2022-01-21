<?php require PATH . '/theme/view/common/assets.php'; ?>

<header class="showcase">
    <div class="header">
        <div class="logo">
            <a href="<?php echo APP;?>"><img src="<?php echo ASSETS.'/img/logoAeo.png';?>" alt="Aeonnovel Logo"></a>
        </div>
        <div class="mail-user">
            <a href="<?php echo APP.'/';?>" class="btn btn-rounded"><?php echo $AuthUser['email'];?></a>
        </div>
    </div>      
    <div id="step2" class="flex-fill" style="margin-top:3%; ">
        <div class="auth auth-login">
            <i class="fas fa-lock fa-3x" style="color:#37b6ff;margin-bottom: 30px;"></i>
            <h6 class="step">STEP 2 OF 2</h6>
            <h2 class="title">11,70$/month</h2><br>
            <h2 class="title">Set up your payment</h2><br>
            <p class="sub-title">Your membership starts as <br> soon as you set up <br> payment</p>
            <p class="payment-quote"> No commitments.<br>Cancel online anytime. </p>
            <!-- <button id="btn-next" class="btn btn-block btn-lg"><?php echo __('Next');?></button> -->
            <span class="secure-quote">Secure Server <i class="fas fa-lock fa-sm" style="color:#FFD700;"></i></span><br>
            <div id="payment-card">
                <!-- <div id="paypal-button-container" style="margin-top:30px;"></div> -->
                <div id="stripe-button-container" class="payment">
                    <p>Credit or Debit Card</p>
                    <div class="logos-payment">
                        <img src="<?php echo ASSETS.'/img/logoPayment/visa-v3.svg';?>" alt="visa-card">
                        <img src="<?php echo ASSETS.'/img/logoPayment/mastercard-v2.svg';?>" alt="master-card">
                        <img src="<?php echo ASSETS.'/img/logoPayment/amex.svg';?>" alt="amex-card">
                        <img src="<?php echo ASSETS.'/img/logoPayment/unionpay.svg';?>" alt="unionpay-card">
                    </div>
                    <img class="arrow_right" src="<?php echo ASSETS.'/img/logoPayment/arrow_right.svg';?>" alt="">
                </div>
                <!-- <button id="stripe-button-container" class="btn btn-block btn-stripe"><i class="fab fa-stripe fa-3x" style="color:white;"></i></button> -->
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

<!-- <script src="https://www.paypal.com/sdk/js?client-id=Acrki1IgTtAer0iOKUw_jY8pGIkZZmH5ui-LVq3PzceH8P0lCVglyAQ20IGJbvxeGkT_lBWVFuEWfrAp&disable-funding=credit,card"></script> -->
<script src="https://js.stripe.com/v3/"></script>
<script src="https://checkout.stripe.com/checkout.js"></script>

<!-- <script src="<?php echo ASSETS.'/js/paypal.js' ?>"></script> -->
<script src="<?php echo ASSETS.'/js/stripe.js' ?>"></script>


