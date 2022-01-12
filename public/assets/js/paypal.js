paypal.Buttons({
    style: {
        layout: 'vertical',
        color:  'blue',
        shape:  'rect',
        label:  'paypal'
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
            console.log(details);
        })
    },
    onCancel: function (data) {
        alert('Error in payment');
    }
}).render('#paypal-button-container')
