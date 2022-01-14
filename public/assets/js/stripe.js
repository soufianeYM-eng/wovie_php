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
    successUrl: "http://wovie.test/",
    cancelUrl: "http://wovie.test/register",
  }).then(function(result){
    document.getElementById("form_infos").submit();
  }).catch(function(){
    window.location.replace('http://wovie.test/register')
  })
});