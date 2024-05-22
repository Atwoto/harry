<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cleaners</title>
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
          <a class="nav-link" href="FAQS.php">FAQs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
     <div class="cart">
    <a href="#"><span>👤</span></a>
    <a href"#"><span>❤️</span></a>
    <a href="#"><span>🛒 KES 0.00</span></a>
</div>

  </div>
    </nav>
    
    
    <!-- Heading 1 centered and bold -->
    <div class="container mt-4">
        <h1 class="text-center font-weight-bold">Cleaners</h1>
    </div>
    
    
     <div class="container">
    <!-- Search and Sort Bar on the Same Line -->
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
                <option value="featured">Featured</option>
                <option value="best-sell">Best Sell</option>
            </select>
        </div>
    </div>

        <div class="product-grid" id="product-grid">
            <div class="product-card" data-price="1800">
                <img src="sunscreen.jpg" alt="Sunscreen SPF50+">
                <div class="hover-icons">
                    <span>👁️</span>
                    <span>❤️</span>
                    <span>🛒</span>
                </div>
                <div class="product-info">
                    <p>KES 1,800</p>
                    <p>SUNSCREEN SPF50+</p>
                </div>
            </div>
            <div class="product-card" data-price="1500">
                <img src="serum.jpg" alt="Niacinamide Facial Serum">
                <div class="hover-icons">
                    <span>👁️</span>
                    <span>❤️</span>
                    <span>🛒</span>
                </div>
                <div class="product-info">
                    <p>KES 1,500</p>
                    <p>NIACINAMIDE FACIAL SERUM</p>
                </div>
            </div>
            <div class="product-card" data-price="1600">
                <img src="shea_butter.jpg" alt="Shea Butter (Nilotica)">
                <div class="hover-icons">
                    <span>👁️</span>
                    <span>❤️</span>
                    <span>🛒</span>
                </div>
                <div class="product-info">
                    <p>KES 1,600</p>
                    <p>SHEA BUTTER (NILOTICA) 1KG</p>
                </div>
            </div>
            <div class="product-card" data-price="1000">
                <img src="body_cream.jpg" alt="Vanilla Shea Body Cream">
                <div class="hover-icons">
                    <span>👁️</span>
                    <span>❤️</span>
                    <span>🛒</span>
                </div>
                <div class="product-info">
                    <p>KES 1,000</p>
                    <p>VANILLA SHEA BODY CREAM</p>
                </div>
            </div>
        </div>
        <button class="load-more">Load More</button>
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
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script>
document.querySelector('.load-more').addEventListener('click', () => {
    const productGrid = document.querySelector('.product-grid');
    for (let i = 0; i < 4; i++) {
        const newProduct = document.createElement('div');
        newProduct.classList.add('product-card');
        newProduct.dataset.price = "2000"; // Example price for new products
        newProduct.innerHTML = `
            <img src="product.jpg" alt="New Product">
            <div class="hover-icons">
                <span>👁️</span>
                <span>❤️</span>
                <span>🛒</span>
            </div>
            <div class="product-info">
                <p>KES 2,000</p>
                <p>NEW PRODUCT</p>
            </div>
        `;
        productGrid.appendChild(newProduct);
    }
});

document.getElementById('sort-options').addEventListener('change', function() {
    const sortBy = this.value;
    const productGrid = document.getElementById('product-grid');
    const products = Array.from(productGrid.getElementsByClassName('product-card'));

    switch (sortBy) {
        case 'price-low-to-high':
            products.sort((a, b) => parseFloat(a.dataset.price) - parseFloat(b.dataset.price));
            break;
        case 'price-high-to-low':
            products.sort((a, b) => parseFloat(b.dataset.price) - parseFloat(a.dataset.price));
            break;
        case 'random':
            products.sort(() => Math.random() - 0.5);
            break;
        case 'default':
        default:
            products.sort((a, b) => parseInt(a.dataset.index) - parseInt(b.dataset.index));
            break;
    }

    // Clear existing products and re-append sorted products
    productGrid.innerHTML = '';
    products.forEach(product => productGrid.appendChild(product));
});


</script>
    
    </body>
</html>
        

    