<?php require PATH . '/theme/view/common/assets.php'; ?>

<header class="showcase">
    <div class="header">
        <div class="logo">
            <img src="<?php echo ASSETS.'/img/logoAeo.png';?>" alt="Aeonnovel Logo">
        </div>
        <div class="sign-in">
            <a href="<?php echo APP.'/login';?>" class="btn btn-rounded">Sign In</a>
        </div>
    </div>      

    <div id="success-payment" class="flex-fill" style="margin-top:3%;">
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
</header>

<script>
    $.ajax({
        type: "POST",
        url: "/register",
        data: {
            email: document.getElementById(field),
            password: document.getElementById(field),
            paypal: document.getElementById(field),
        },
        dataType: "json",
        success: function(data) {
            // do what ever you want with the server response
        },
        error: function(){
            // error handling
        }
    });
</script>

