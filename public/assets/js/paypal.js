paypal.Buttons({
  style:{
    layout: 'vertical',
    color:  'gold',
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
      //alert(document.querySelector(".name").value)
      document.forms["form_infos"].submit();
      //document.getElementById("form_infos").submit()
    })
  },
  onCancel: function (data) {
    alert('Error')
  }
}).render('#paypal-button-container')
