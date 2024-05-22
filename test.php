<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop by Categories</title>
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

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #fff;
            padding: 10px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .header-content {
            width: 80%;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-content .logo img {
            width: 150px;
        }

        .header-content nav {
            display: flex;
            gap: 20px;
        }

        .header-content nav a {
            text-decoration: none;
            color: #000;
            font-weight: bold;
        }

        .header-content .cart {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .container {
            width: 80%;
            margin: auto;
            padding-top: 20px;
        }

        .search-sort-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            margin-bottom: 20px;
        }

        .search-bar {
            display: flex;
            margin-left: 15px; /* Align with the left margin */
        }

        .search-bar input {
            padding: 10px;
            font-size: 16px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
        }

        .search-bar button {
            padding: 10px 20px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-left: none;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }

        .sort-bar {
            display: flex;
            margin-right: 15px; /* Align with the right margin */
        }

        .sort-bar select {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }

        .product-card {
            position: relative;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            transition: box-shadow 0.3s ease-in-out;
        }

        .product-card:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .product-card img {
            width: 100%;
            display: block;
        }

        .hover-icons {
            position: absolute;
            top: 10px;
            right: 10px;
            display: flex;
            flex-direction: column;
            gap: 5px;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .product-card:hover .hover-icons {
            opacity: 1;
        }

        .hover-icons span {
            background: rgba(255, 255, 255, 0.8);
            padding: 5px;
            border-radius: 50%;
            cursor: pointer;
        }

        .product-info {
            padding: 10px;
            text-align: center;
        }

        .load-more {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: 1px solid #ccc;
            border-radius: 5px;
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

            <div class="logo">
                <img src="logo.png" alt="Nimo Naturals">
            </div>
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
                    <a class="nav-link" href="FAQS.php">FAQs</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="cart">
            <a href="#"><span>👤</span></a>
            <a href="#" id="favorite-count"><span>❤️ 0</span></a>
            <a href="#" id="cart-count"><span>🛒 0 items</span></a>
            <a href="cart.php" id="cart-total"><span>KES 0.00</span></a>
        </div>
    </div>
</nav>

 <!-- Navbar and other elements -->
    <div class="container">
        <div class="search-sort-container">
            <div class="search-bar">
                <input type="text" placeholder="Search...">
                <button>🔍</button>
            </div>
            <div class="sort-bar">
                <select id="sort-options">
                    <option value="default">Default Sorting</option>
                    <option value="price-low-to-high">Price low to high</option>
                    <option value="price-high-to-low">Price high to low</option>
                    <option value="random">Random</option>
                </select>
            </div>
        </div>

        <div class="product-grid" id="product-grid">
            <!-- Example product card -->
            <div class="product-card" data-price="2000" data-index="1">
                <img src="product1.jpg" alt="Product 1">
                <div class="hover-icons">
                    <a href="product-details.php"><span class="eye-icon"><i class="fas fa-eye"></i></span></a>
                    <span class="favorite-icon" data-price="2000"><i class="fas fa-heart"></i></span>
                    <span class="cart-icon" data-price="2000"><i class="fas fa-shopping-cart"></i></span>
                </div>
                <div class="product-info">
                    <h4>Product 1</h4>
                    <p>KES 1000.00</p>
                </div>
            </div>
            <div class="product-card" data-price="4000" data-index="2">
                <img src="product1.jpg" alt="Product 2">
                <div class="hover-icons">
                    <a href="product-details.php"><span class="eye-icon"><i class="fas fa-eye"></i></span></a>
                    <span class="favorite-icon" data-price="4000"><i class="fas fa-heart"></i></span>
                    <span class="cart-icon" data-price="4000"><i class="fas fa-shopping-cart"></i></span>
                </div>
                <div class="product-info">
                    <h4>Product 2</h4>
                    <p>KES 3000.00</p>
                </div>
            </div>
            <div class="product-card" data-price="2000" data-index="1">
                <img src="product1.jpg" alt="Product 1">
                <div class="hover-icons">
                    <a href="product-details.php"><span class="eye-icon"><i class="fas fa-eye"></i></span></a>
                    <span class="favorite-icon" data-price="2000"><i class="fas fa-heart"></i></span>
                    <span class="cart-icon" data-price="2000"><i class="fas fa-shopping-cart"></i></span>
                </div>
                <div class="product-info">
                    <h4>Product 1</h4>
                    <p>KES 2000.00</p>
                </div>
            </div>
            <div class="product-card" data-price="4000" data-index="2">
                <img src="product1.jpg" alt="Product 2">
                <div class="hover-icons">
                    <a href="product-details.php"><span class="eye-icon"><i class="fas fa-eye"></i></span></a>
                    <span class="favorite-icon" data-price="4000"><i class="fas fa-heart"></i></span>
                    <span class="cart-icon" data-price="4000"><i class="fas fa-shopping-cart"></i></span>
                </div>
                <div class="product-info">
                    <h4>Product 2</h4>
                    <p>KES 4000.00</p>
                </div>
            </div>
            
            <!-- Repeat similar blocks for other products -->
        </div>

    <button class="load-more">Load More</button>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
        document.addEventListener("DOMContentLoaded", function() {
            const cartTotalElement = document.getElementById("cart-total");
            const cartCountElement = document.getElementById("cart-count");
            const favoriteCountElement = document.getElementById("favorite-count");
            const productGridElement = document.getElementById("product-grid");
            const sortOptionsElement = document.getElementById("sort-options");
            const loadMoreButton = document.querySelector(".load-more");

            let totalAmount = 0;
            let cartCount = 0;
            let favoriteCount = 0;

            function updateCart(amount) {
                totalAmount += amount;
                cartCount++;
                cartTotalElement.innerHTML = `<span>KES ${totalAmount.toFixed(2)}</span>`;
                cartCountElement.innerHTML = `<span>🛒 ${cartCount} items</span>`;
            }

            function updateFavorites(count) {
                favoriteCount += count;
                favoriteCountElement.innerHTML = `<span>❤️ ${favoriteCount}</span>`;
            }

            function sortProducts(criteria) {
                const products = Array.from(productGridElement.children);
                products.sort((a, b) => {
                    const priceA = parseFloat(a.dataset.price);
                    const priceB = parseFloat(b.dataset.price);
                    const nameA = a.querySelector(".product-info h4").textContent.toLowerCase();
                    const nameB = b.querySelector(".product-info h4").textContent.toLowerCase();
                    if (criteria === "price-low-to-high") {
                        return priceA - priceB;
                    } else if (criteria === "price-high-to-low") {
                        return priceB - priceA;
                    } else if (criteria === "random") {
                        return 0.5 - Math.random();
                    } else if (criteria === "default") {
                        return parseInt(a.dataset.index) - parseInt(b.dataset.index);
                    }
                    return 0;
                });
                productGridElement.innerHTML = "";
                products.forEach(product => productGridElement.appendChild(product));
            }

            document.querySelectorAll(".cart-icon").forEach(function(icon) {
                icon.addEventListener("click", function() {
                    const price = parseFloat(this.dataset.price);
                    updateCart(price);
                });
            });

            document.querySelectorAll(".favorite-icon").forEach(function(icon) {
                icon.addEventListener("click", function() {
                    updateFavorites(1);
                });
            });

            sortOptionsElement.addEventListener("change", function() {
                sortProducts(this.value);
            });

            loadMoreButton.addEventListener("click", function() {
                // Add logic to load more products (e.g., via AJAX)
                const products = document.querySelectorAll(".product-card");
                products.forEach(product => {
                    const newProduct = product.cloneNode(true);
                    newProduct.querySelector(".cart-icon").addEventListener("click", function() {
                        const price = parseFloat(this.dataset.price);
                        updateCart(price);
                    });
                    newProduct.querySelector(".favorite-icon").addEventListener("click", function() {
                        updateFavorites(1);
                    });
                    productGridElement.appendChild(newProduct);
                });
            });
        });
    </script>
</body>
</html>
