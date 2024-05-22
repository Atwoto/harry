<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: space-between;
            margin: 20px auto;
            padding: 20px;
            width: 80%;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .order-summary {
            width: 30%;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            position: relative;
        }

        .order-summary h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .order-summary img.icon {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 24px;
            height: 24px;
        }
        

        .order-summary p {
            font-size: 16px;
            margin: 5px 0;
        }

        .order-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .order-summary img.icon {
    width: 24px;
    height: 24px;
    margin-right: 10px;
}

.order-item {
    display: flex;
    align-items: center;
    margin-bottom: 10px; /* Add margin for spacing */
}


        .payment-options {
            width: 65%;
            padding: 10px;
        }

        .mpesa-option {
            display: flex;
            margin: 0 5px;
            padding: 5px;
            margin-bottom: 10px;
        }

        .mpesa-option button {
            padding: 0;
            border: none;
            background: none;
            cursor: pointer;
        }

        .mpesa-option button img {
            width: 100%;
            max-width: 200px;
            height: auto;
        }

        .phone-number-section {
            margin-bottom: 20px;
        }

        .phone-number-section label {
            display: block;
            margin-bottom: 10px;
            font-size: 16px;
        }

        #phone-number, #transaction-code {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .payment-method {
            display: flex;
            flex-direction: column;
        }

        .payment-method div {
            margin-bottom: 10px;
        }

        .manual-payment-steps {
            margin-top: 20px;
        }

        .manual-payment-steps h3 {
            margin-bottom: 10px;
        }

        .manual-payment-steps ol {
            margin-left: 20px;
        }

        .manual-payment-steps .till-number {
            font-weight: bold;
        }

        .hidden {
            display: none;
        }

        .payment-section {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="payment-options">
            <h2>Payment Options</h2>
            <div class="mpesa-option">
                <button id="automatic-prompt">
                    <img src="images/automatic.png" alt="M-Pesa Automatic Payment">
                </button>
                <button id="manual-option">
                    <img src="images/manual.png" alt="M-Pesa Manual Payment">
                </button>
            </div>
            <div id="automatic-section" class="payment-section">
                <div class="phone-number-section">
                    <label for="phone-number">Provide your phone number to initiate the payment.</label>
                    <input type="text" id="phone-number" placeholder="0xxxxxxxxx">
                    <div class="payment-method">
                        <div>
                            <input type="radio" id="mpesa" name="payment-method" value="mpesa" checked>
                            <label for="mpesa">M-Pesa</label>
                        </div>
                        <div>
                            <input type="radio" id="wallet" name="payment-method" value="wallet">
                            <label for="wallet">Nimo Naturals E-Wallet</label>
                        </div>
                    </div>
                </div>
            </div>
            <div id="manual-section" class="payment-section hidden">
                <div class="manual-payment-steps">
                    <h3>FOLLOW THE STEPS</h3>
                    <ol>
                        <li>Go to m-pesa sim tool kit.</li>
                        <li>Click the M-Pesa option.</li>
                        <li>Click the Lipa na M-pesa.</li>
                        <li>Click the Buy Goods and Services.</li>
                        <li>Enter Till number: <span class="till-number">558069</span></li>
                        <li>Enter Amount = 1150</li>
                        <li>Enter your M-pesa PIN</li>
                        <li>Enter M-pesa Transaction Number to complete the order payment.</li>
                    </ol>
                    <input type="text" id="transaction-code" placeholder="M-PESA TRANSACTION CODE">
                    <div class="payment-method">
                        <div>
                            <input type="radio" id="mpesa" name="payment-method" value="mpesa" checked>
                            <label for="mpesa">M-Pesa</label>
                        </div>
                        <div>
                            <input type="radio" id="wallet" name="payment-method" value="wallet">
                            <label for="wallet">Nimo Naturals E-Wallet</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <div class="order-summary">
        <h2>Order Summary</h2>
        <div class="order-item">
            <img src="images/icon.png" alt="Icon" class="icon">
            <p>ACTIVATED CHARCOAL & TEA TREE SOAP 2 x</p>
            <p>KES 700.00</p>
        </div>
        <p>Subtotal: KES 750.00</p>
        <p>Coupon: KES 0.00</p>
        <p>Discount: KES 0.00</p>
        <p>Total Price: KES 750.00</p>
    </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('automatic-section').classList.remove('hidden');
        });

        document.getElementById('automatic-prompt').addEventListener('click', function() {
            document.getElementById('manual-section').classList.add('hidden');
            document.getElementById('automatic-section').classList.remove('hidden');
        });

        document.getElementById('manual-option').addEventListener('click', function() {
            document.getElementById('automatic-section').classList.add('hidden');
            document.getElementById('manual-section').classList.remove('hidden');
        });
    </script>
</body>
</html>
