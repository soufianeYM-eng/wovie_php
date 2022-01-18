<?php require PATH . '/theme/view/common/assets.php'; ?>

<header class="showcase">
    <div class="header">
        <div class="logo">
            <img src="<?php echo ASSETS.'/img/logoAeo.png';?>" alt="Aeonnovel Logo">
        </div>
        <div class="mail-user">
            <a href="<?php echo APP.'/';?>" class="btn btn-rounded"><?php echo $AuthUser['email'];?></a>
        </div>
    </div>      

    <div id="failed-payment" class="flex-fill" style="margin-top:3%;">
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
    <div id="form-detail">

    </div>
</header>

<script>
    setTimeout(() => {
        window.location.replace('/payment');
    }, 4000);
</script>

