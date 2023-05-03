

<form action="{{ route('donations.storeArgent') }}" method="post" id="payment-form">
  @csrf
        
        <div class="form-group">
          <label for="card-element">{{__('Carte de crédit')}}</label>
          <div id="card-element" class="form-control">
              <!-- Stripe Element will be inserted here. -->
          </div>
      </div>

      <button type="submit" id="submit-button">Donate</button>

    </form>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        // Set up Stripe.js and the Elements card payment form
        const stripe = Stripe('{{ env('STRIPE_KEY') }}');
        const elements = stripe.elements();
        const cardElement = elements.create('card');
        cardElement.mount('#card-element');
    
        // Handle form submission and payment processing
        const form = document.getElementById('payment-form');
        const submitButton = document.getElementById('submit-button');
    
        form.addEventListener('submit', async (event) => {
            event.preventDefault();
    
            // Disable the submit button to prevent multiple clicks
            submitButton.disabled = true;
    
            // Create a payment method using the card element and the customer's email
            const { paymentMethod, error } = await stripe.createPaymentMethod({
                type: 'card',
                card: cardElement,
                billing_details: {
                    email: document.getElementById('email').value,
                },
            });
    
            // Handle any errors from creating a payment method
            if (error) {
                const errorElement = document.getElementById('card-errors');
                errorElement.textContent = error.message;
                submitButton.disabled = false;
                return;
            }
    
            // Send the payment method ID to the server to complete the payment
            const tokenInput = document.createElement('input');
            tokenInput.setAttribute('type', 'hidden');
            tokenInput.setAttribute('name', 'payment_method');
            tokenInput.setAttribute('value', paymentMethod.id);
            form.appendChild(tokenInput);
    
            // Submit the form
            form.submit();
        });
    </script>