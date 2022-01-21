// var stripe = Stripe('pk_test_51KHDXdCl0WW6IfVYmyCSNwbCjpasz2ccpXixtnzBQydKWRYsrIe4eePFI9ies5fgO2Y9xUbUSU9ydLBjLLJDeudc000MSUOvQP');

// const btn = document.getElementById("stripe-button-container")
// btn.addEventListener('click', function(e) {
//   var email = localStorage.getItem("email")
//   e.preventDefault();
//   stripe.redirectToCheckout({
//     lineItems:[
//       {
//         price: "price_1KHDkACl0WW6IfVY0ZvzojaV",
//         quantity: 1,
//       }
//     ],
//     mode: "subscription",
//     successUrl: "http://wovie.test/successCheckout",
//     cancelUrl: "http://wovie.test/failedCheckout",
//     // successUrl: "https://aeonnovel.com/successCheckout",
//     // cancelUrl: "https://aeonnovel.com/failedCheckout",
//   }).then(function(result){
      
//   })
// });


var stripe = Stripe('pk_live_51JYzJ6G7Xe1IFfvWRoxakEhdZN6FbcXWkir2rY4b4OCZM6JXhlybNxFJZbk0AG08lYNJbDpcY4ePagEroPtK3Glo00YAqii0CB');

const btn = document.getElementById("stripe-button-container")
btn.addEventListener('click', function(e) {
  var email = localStorage.getItem("email")
  e.preventDefault();
  stripe.redirectToCheckout({
    lineItems:[
      {
        price: "price_1KJkbIG7Xe1IFfvWa6ZmPOk7",
        quantity: 1,
      }
    ],
    mode: "subscription",
    successUrl: "http://wovie.test/successCheckout",
    cancelUrl: "http://wovie.test/failedCheckout",
    // successUrl: "https://aeonnovel.com/successCheckout",
    // cancelUrl: "https://aeonnovel.com/failedCheckout",
  }).then(function(result){
      
  })
});


// var stripe = Stripe('#');

// const btn = document.getElementById("stripe-button-container")
// btn.addEventListener('click', function(e) {
//   fetch('/checkout-stripe',{
//     method:"POST",
//     headers:{
//       'Content-Type':'application/json',
//     },
//     body: JSON.stringify({})
//   }).then((res) => {
//     console.log(res.json());
//   })
//   .then(payload => {
//     stripe.redirectToCheckout({sessionId : payload.id})
//   })
// });


// var handler = StripeCheckout.configure({
// key: '#',
// image: 'https://i.ibb.co/9cr0CYf/favicon.png',
// locale: 'auto',
// token: function(token) {
//   document.getElementById("step2").style.display="none";
//   document.getElementById("success-payment").style.display="block";
//   var type_method = document.createElement("INPUT");
//   type_method.type = "hidden";
//   type_method.name = "method_payment";
//   type_method.value = "Stripe";
//   document.getElementById('form_infos').appendChild(type_method);
//   setTimeout(() => {
//     localStorage.removeItem("user-mail");
//     document.forms["infos_form_step1"].submit();
//   }, 3000);
// }
// });

// document.getElementById('stripe-button-container').addEventListener('click', function(e) {
// // Open Checkout with further options:
// handler.open({
//   name: 'Aeonnovel',
//   description: 'Monthly Subscription',
//   currency: 'usd',
//   amount: 1170
// });
// e.preventDefault();
// });

// // Close Checkout on page navigation:
// window.addEventListener('popstate', function() {
// handler.close();
// });
