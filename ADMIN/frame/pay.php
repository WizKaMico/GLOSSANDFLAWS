<!-- Process  -->
<div class="modal fade" id="procees_<?php echo $row['appoint_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">PAYPAL PAY</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<Input type="hidden" value="<?php echo $row['appoint_id']; ?>"/>
			<div id="paypal-button-container"></div>

			<script>
			      paypal.Buttons({
			        // Sets up the transaction when a payment button is clicked
			        createOrder: (data, actions) => {
			          return actions.order.create({
			            purchase_units: [{
			              amount: {
			              	currency: 'PHP',
			                value: '100' // Can also reference a variable or function
			              }
			            }]
			          });
			        },
			        // Finalize the transaction after payer approval
			        onApprove: (data, actions) => {
			          return actions.order.capture().then(function(orderData) {
			            // Successful capture! For dev/demo purposes:
			            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
			            const transaction = orderData.purchase_units[0].payments.captures[0];
			            // alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
			            // When ready to go live, remove the alert and show a success message within this page. For example:
			            const element = document.getElementById('paypal-button-container');
			            element.innerHTML = '<h3>Thank you for your payment!</h3>';
			            // Or go to another URL:  
			            window.location.href = "success.php?appoint_id=<?php echo $row['appoint_id']; ?>&user_id=<?php echo $user_id; ?>";;
			          });
			        }
			      }).render('#paypal-button-container');
			    </script>
			   
            </div>

        </div>
    </div>
</div>
</div>