<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .order-summary {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-section {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            margin-bottom: 15px;
        }
        .total-price {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }
        .btn-container {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="form-section">
                    <h2>Shipping Information</h2>
                    <form id="checkout-form">
                        <div class="form-group">
                            <label>Order as Nimo Naturals:</label>
                            <div>
                                <input type="radio" name="orderType" value="guest" checked> Guest
                                <input type="radio" name="orderType" value="customer"> Customer
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="delivery-point">Delivery Point</label>
                            <input type="text" id="delivery-point" class="form-control" placeholder="Search point of pick up...">
                            <button type="button" class="btn btn-primary">Load More</button>
                        </div>
                        <div class="form-group">
                            <input type="radio" name="pickupPoint" value="Mombasa Pickup Agent" checked> MOMBASA PICKUP AGENT (IN-MOTION TOWN BRANCH)
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Full Names" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Street" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Zip Code/Address/Location" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Phone number" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Coupon Code (Optional)">
                        </div>
                        <div class="btn-container">
                            <button onclick="window.location.href='payment.php'"  type="button" class="btn btn-primary" id="proceed-to-payment">Proceed To Payment</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="order-summary">
                    <h2>Order Summary</h2>
                    <div id="order-items">
                        <!-- Static Example Item -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <img src="path/to/image.jpg" alt="Activated Charcoal & Tea Tree Soap" style="width: 50px; height: 50px;">
                            <div class="ml-3">
                                <p class="mb-1">Activated Charcoal & Tea Tree Soap x 2</p>
                                <p class="mb-1"> KES 700.00</p>
                            </div>
                        </div>
                    </div>
                    <p>Subtotal: KES <span id="subtotal">700.00</span></p>
                    <p>Shipping: KES <span id="shipping">50.00</span></p>
                    <p>Discount: KES <span id="discount">0.00</span></p>
                    <h3>Total Price: KES <span id="total-price">750.00</span></h3>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Example items in the cart
            const cartItems = [
                {
                    name: 'Activated Charcoal & Tea Tree Soap',
                    quantity: 2,
                    price: 350,
                    image: 'path/to/image.jpg'
                },
                {
                    name: 'Lavender & Peppermint Soap',
                    quantity: 1,
                    price: 300,
                    image: 'path/to/lavender_image.jpg'
                }
            ];

            // Populate order summary
            let subtotal = 0;
            $('#order-items').empty();
            cartItems.forEach(item => {
                const itemTotal = item.quantity * item.price;
                subtotal += itemTotal;
                $('#order-items').append(`
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <img src="${item.image}" alt="${item.name}" style="width: 50px; height: 50px;">
                        <div class="ml-3">
                            <p class="mb-1">${item.name} x ${item.quantity}</p>
                            <p class="mb-0">KES ${itemTotal.toFixed(2)}</p>
                        </div>
                    </div>
                `);
            });

            const shipping = 50; // Example shipping cost
            const discount = 0; // Example discount
            const totalPrice = subtotal + shipping - discount;

            $('#subtotal').text(subtotal.toFixed(2));
            $('#shipping').text(shipping.toFixed(2));
            $('#discount').text(discount.toFixed(2));
            $('#total-price').text(totalPrice.toFixed(2));

            // Handle proceed to payment
            $('#proceed-to-payment').click(function() {
                // Implement your payment logic here
                alert('Proceeding to payment...');
            });
        });
    </script>
</body>
</html>
