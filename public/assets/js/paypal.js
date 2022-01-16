paypal.Buttons({
  style:{
    layout: 'vertical',
    color:  'blue',
    shape:  'rect',
    label:  'paypal',
  },
  createOrder: function(data, actions) {
      // Set up the transaction
    return actions.order.create({
      purchase_units: [{
        amount: {
          value: '0.01'
        }
      }]
    });
  },
  onApprove: function(data, actions) {
    return actions.order.capture().then(function(details){
      document.getElementById("step2").style.display="none";
      document.getElementById("success-payment").style.display="block";
      var type_method = document.createElement("INPUT");
      type_method.type = "hidden";
      type_method.name = "method_payment";
      type_method.value = "Paypal";
      document.getElementById('form_infos').appendChild(type_method);
      setTimeout(() => {
        localStorage.removeItem("user-mail");
        document.forms["infos_form_step1"].submit();
      }, 3000);
    })
  },
  onCancel: function (data) {
    document.getElementById("step2").style.display="none";
    document.getElementById("failed-payment").style.display="block";
    setTimeout(() => {
      window.location.replace('/register')
    }, 3000);
  }
}).render('#paypal-button-container')
