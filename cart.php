<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .cart-table th, .cart-table td {
            vertical-align: middle;
        }
        .cart-table img {
            width: 50px;
            height: 50px;
            object-fit: cover;
        }
        .delivery-option {
            margin-top: 20px;
        }
        .total-cost {
            margin-top: 20px;
            text-align: right;
        }
        .btn-container {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }
        .form-control {
            width: 100%;
        }
        .quantity-control {
            display: flex;
            align-items: center;
        }
        .quantity-control button {
            background-color: #fff;
            border: 1px solid #ced4da;
            padding: 5px 10px;
            cursor: pointer;
        }
        .quantity-control input {
            width: 40px;
            text-align: center;
            border: 1px solid #ced4da;
            margin: 0 5px;
        }
        .price {
            font-size: 1.25rem;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Shopping Cart</h2>
        <table class="table cart-table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Subtotal</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="cart-items">
                <!-- Cart items will be dynamically inserted here -->
            </tbody>
        </table>
        <div class="delivery-option">
            <label for="delivery-options">Select Delivery Option</label>
            <select id="delivery-options" class="form-control">
                <option value="0">Select Delivery Option</option>
                <option value="100">Doorstep Delivery - KES 100</option>
                <option value="200">Mombasa Pickup Agent - KES 200</option>
                <option value="150">Parcel Delivery - KES 150</option>
                <option value="250">Parcels (East Africa) - KES 250</option>
                <option value="180">Parcel (Thika, Juja, Kitengela, Kikuyu) - KES 180</option>
                <option value="120">Pickup Mtaani - KES 120</option>
            </select>
        </div>
        <div class="total-cost">
            <p>Subtotal: KES <span id="subtotal">0.00</span></p>
            <p>Shipping: KES <span id="shipping">0.00</span></p>
            <h3>Total: KES <span id="total-cost">0.00</span></h3>
        </div>
        <div class="btn-container">
            <button onclick="window.location.href='checkout.php'"  class="btn btn-primary" id="checkout-btn">Check Out</button>
            <button class="btn btn-secondary" id="add-to-pending-btn">Add Items To A Paid Pending Order</button>
        </div>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            const cartItems = [
                { name: 'Activated Charcoal & Tea Tree Soap', quantity: 1, price: 350, image: 'path/to/image.jpg' },
                // Add more items as needed
            ];

            let subtotal = 0;

            // Render cart items
            cartItems.forEach(item => {
                const itemSubtotal = item.quantity * item.price;
                subtotal += itemSubtotal;
                $('#cart-items').append(`
                    <tr>
                        <td>
                            <img src="${item.image}" alt="${item.name}">
                            ${item.name}
                        </td>
                        <td class="quantity-control">
                            <button class="btn-decrease">&ndash;</button>
                            <input type="text" value="${item.quantity}" class="quantity-input">
                            <button class="btn-increase">+</button>
                        </td>
                        <td class="price">KES ${item.price}</td>
                        <td class="price">KES ${itemSubtotal}</td>
                        <td><button class="btn btn-danger btn-remove">X</button></td>
                    </tr>
                `);
            });

            // Update subtotal
            $('#subtotal').text(subtotal.toFixed(2));

            // Handle delivery option change
            $('#delivery-options').change(function() {
                const shippingCost = parseFloat($(this).val());
                $('#shipping').text(shippingCost.toFixed(2));
                const totalCost = subtotal + shippingCost;
                $('#total-cost').text(totalCost.toFixed(2));
            });

            // Handle quantity increase
            $(document).on('click', '.btn-increase', function() {
                let quantityInput = $(this).siblings('.quantity-input');
                let quantity = parseInt(quantityInput.val());
                quantityInput.val(quantity + 1);
                updateCart();
            });

            // Handle quantity decrease
            $(document).on('click', '.btn-decrease', function() {
                let quantityInput = $(this).siblings('.quantity-input');
                let quantity = parseInt(quantityInput.val());
                if (quantity > 1) {
                    quantityInput.val(quantity - 1);
                    updateCart();
                }
            });

            // Handle item removal
            $(document).on('click', '.btn-remove', function() {
                $(this).closest('tr').remove();
                updateCart();
            });

            // Update cart total
            function updateCart() {
                subtotal = 0;
                $('#cart-items tr').each(function() {
                    const quantity = parseInt($(this).find('.quantity-input').val());
                    const price = parseFloat($(this).find('.price').first().text().replace('KES ', ''));
                    const itemSubtotal = quantity * price;
                    $(this).find('.price').last().text('KES ' + itemSubtotal.toFixed(2));
                    subtotal += itemSubtotal;
                });
                $('#subtotal').text(subtotal.toFixed(2));
                const shippingCost = parseFloat($('#delivery-options').val());
                $('#shipping').text(shippingCost.toFixed(2));
                const totalCost = subtotal + shippingCost;
                $('#total-cost').text(totalCost.toFixed(2));
            }

            // Handle checkout button click
            $('#checkout-btn').click(function() {
                alert('Proceeding to checkout...');
                // Add your checkout logic here
            });

            // Handle add to pending order button click
            $('#add-to-pending-btn').click(function() {
                alert('Adding items to a paid pending order...');
                // Add your add to pending order logic here
            });
        });
    </script>
</body>
</html>
