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
    <div id="form-detail">

    </div>
</header>

<script>

    // var email = localStorage.getItem("email");
    var form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("name", "payment_done");

    // var FN = document.createElement("input");
    // FN.setAttribute("type", "hidden");
    // FN.setAttribute("name", "email");
    // FN.setAttribute("value", email);

    var Payment_type = document.createElement("input");
    Payment_type.setAttribute("type", "hidden");
    Payment_type.setAttribute("name", "method_payment");
    Payment_type.setAttribute("value", "Stripe");

    var Action = document.createElement("input");
    Action.setAttribute("type", "hidden");
    Action.setAttribute("name", "_ACTION");
    Action.setAttribute("value", "payment");
    
    form.appendChild(Action);
    form.appendChild(Payment_type);
    // form.appendChild(FN);
    
    
    document.getElementById('form-detail').appendChild(form);
    setTimeout(() => {
        document.forms["payment_done"].submit();
    }, 4000);
</script>

