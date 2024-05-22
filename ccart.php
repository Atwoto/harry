<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Femme Organics</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="CSS/styles.css" rel="stylesheet">
    <link href="CSS/style.css" rel="stylesheet">
    <style>
   

         .navbar-nav .dropdown-menu {
            margin-top: 0;
        }
        .dropdown-submenu {
            position: relative;
        }
        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-left: .1rem;
            margin-right: .1rem;
            display: none;
        }
        .dropdown-menu > .dropdown-submenu:hover > .dropdown-menu {
            display: block;
        }
        .dropdown:hover > .dropdown-menu {
            display: block;
        }

    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <div class="icons mr-auto">
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-tiktok"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="shopDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
          <div class="dropdown-menu" aria-labelledby="shopDropdown">
            <a class="dropdown-item" href="#">All</a>
            <div class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="concerns_products.php">Shop by Concerns</a>
           <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="ACNE_BLACKHEADS _WHITEHEADS.php">Acne, Blackheads & Whiteheads</a></li>
                <li><a class="dropdown-item" href="Dark Spots & Hyperpigmentation.php">Dark Spots & Hyperpigmentation</a></li>
                <li><a class="dropdown-item" href="Rough Textured Skin.php">Rough Textured Skin</a></li>
                <li><a class="dropdown-item" href="Stretch Marks.php">Stretch Marks</a></li>
                <li><a class="dropdown-item" href="Eczema.php">Eczema</a></li>
                <li><a class="dropdown-item" href="Dehydrated Skin.php">Dehydrated Skin</a></li>
              </ul>
            </div>
            <div class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="category_products.php">Shop by Categories</a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="cleaners.php">Cleaners</a></li>
                <li><a class="dropdown-item" href="Toners.php">Toners</a></li>
                <li><a class="dropdown-item" href="masks.php">Masks</a></li>
                <li><a class="dropdown-item" href="sunscreen.php">Sunscreen</a></li>
              </ul>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blogs.php">Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="FAQS.php">FAQs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
    <div class="icons">
      <a href="#"><i class="fas fa-shopping-cart"></i></a>
      <a href="#"><i class="fas fa-user"></i></a>
    </div>
  </div>
</nav>
    
    
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
            <button class="btn btn-primary" id="checkout-btn">Check Out</button>
            <button class="btn btn-secondary" id="add-to-pending-btn">Add Items To A Paid Pending Order</button>
        </div>
    </div>



<!-- Footer -->
<footer class="bg-secondary text-light py-4">
    <div class="container">
        <div class="row">
            <!-- Femme Organics -->
            <div class="col-md-3">
                <h5>Femme Organics</h5>
                <p>Your destination for premium organic products</p>
            </div>
            <!-- Useful Links -->
            <div class="col-md-3">
                <h5>Useful Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Best Sellers</a></li>
                    <li><a href="#">Wishlist</a></li>
                    <li><a href="#">Cart</a></li>
                    <li><a href="#">New Products</a></li>
                </ul>
            </div>
            <!-- Information -->
            <div class="col-md-3">
                <h5>Information</h5>
                <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Privacy and Policy</a></li>
                </ul>
            </div>
            <!-- Glow with Femme Organics -->
            <div class="col-md-3">
                <h5>Glow with Femme Organics</h5>
                <p>Subscribe to get the latest updates</p>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter your email" aria-label="Enter your email" aria-describedby="subscribe-button">
                    <button class="btn btn-primary" type="button" id="subscribe-button">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <!-- Social Media Links -->
            <div class="col-md-4 text-center">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-tiktok"></i></a>
                <p>&copy; 2024 Femme Organics. All rights reserved.</p>
            </div>
            <!-- Middle Section with Image -->
            <div class="col-md-4 text-center">
                <img src="logo.png" alt="Femme Organics Logo" class="img-fluid mb-3">
                <p>Your trusted destination for premium organic products</p>
            </div>
            <!-- Right Side Image -->
            <div class="col-md-4 text-center">
                <img src="image.png" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $('.dropdown-submenu a.dropdown-toggle').on("click", function(e) {
            e.preventDefault();
            $(this).next('ul').toggle();
            e.stopPropagation();
        });
    });
    
    
    
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
