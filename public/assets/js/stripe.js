var stripe = Stripe('pk_test_51KHDXdCl0WW6IfVYmyCSNwbCjpasz2ccpXixtnzBQydKWRYsrIe4eePFI9ies5fgO2Y9xUbUSU9ydLBjLLJDeudc000MSUOvQP');

const btn = document.getElementById("stripe-button-container")
btn.addEventListener('click', function(e) {
  e.preventDefault();
  stripe.redirectToCheckout({
    lineItems:[
        {
          price: "price_1KHDkACl0WW6IfVY0ZvzojaV",
          quantity: 1,
        }
    ],
    mode: "subscription",
  }).then(function(result){
      document.getElementById("step2").style.display="none";
      document.getElementById("success-payment").style.display="block";
      var type_method = document.createElement("INPUT");
      type_method.type = "hidden";
      type_method.name = "method_payment";
      type_method.value = "Paypal";
      document.getElementById('form_infos').appendChild(type_method);
      localStorage.removeItem("user-mail");
      document.forms["infos_form_step1"].submit();
  }).catch(function(){
    window.location.replace('http://wovie.test/register')
  })
});