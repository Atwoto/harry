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

<!-- News Section -->
<div class="container mt-5">
    <h1 class="text-center mb-4">News</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="news-card">
                <img src="images/news1.jpg" alt="News 1">
                <div class="overlay">
                    <h5>Mastering Double Cleansing: The Key to Clean and Clear Skin</h5>
                    <p class="posted-by">Posted by Jane Doe</p>
                    <p class="post-date">May 2024</p>
                </div>
                <div class="category">Skincare 101</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="news-card">
                <img src="images/news2.jpg" alt="News 2">
                <div class="overlay">
                    <h5>The Magic of Alpha Arbutin in Skincare: A Comprehensive Guide</h5>
                    <p class="posted-by">Posted by Jane Doe</p>
                    <p class="post-date">May 2024</p>
                </div>
                <div class="category">Ingredients Highlight</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="news-card">
                <img src="images/news3.jpg" alt="News 3">
                <div class="overlay">
                    <h5>The Transformative Power of Serums</h5>
                    <p class="posted-by">Posted by Jane Doe</p>
                    <p class="post-date">May 2024</p>
                </div>
                <div class="category">Product Information</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="news-card">
                <img src="images/news1.jpg" alt="News 1">
                <div class="overlay">
                    <h5>Mastering Double Cleansing: The Key to Clean and Clear Skin</h5>
                    <p class="posted-by">Posted by Jane Doe</p>
                    <p class="post-date">May 2024</p>
                </div>
                <div class="category">Skincare 101</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="news-card">
                <img src="images/news2.jpg" alt="News 2">
                <div class="overlay">
                    <h5>The Magic of Alpha Arbutin in Skincare: A Comprehensive Guide</h5>
                    <p class="posted-by">Posted by Jane Doe</p>
                    <p class="post-date">May 2024</p>
                </div>
                <div class="category">Ingredients Highlight</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="news-card">
                <img src="images/news3.jpg" alt="News 3">
                <div class="overlay">
                    <h5>The Transformative Power of Serums</h5>
                    <p class="posted-by">Posted by Jane Doe</p>
                    <p class="post-date">May 2024</p>
                </div>
                <div class="category">Product Information</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="news-card">
                <img src="images/news1.jpg" alt="News 1">
                <div class="overlay">
                    <h5>Mastering Double Cleansing: The Key to Clean and Clear Skin</h5>
                    <p class="posted-by">Posted by Jane Doe</p>
                    <p class="post-date">May 2024</p>
                </div>
                <div class="category">Skincare 101</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="news-card">
                <img src="images/news2.jpg" alt="News 2">
                <div class="overlay">
                    <h5>The Magic of Alpha Arbutin in Skincare: A Comprehensive Guide</h5>
                    <p class="posted-by">Posted by Jane Doe</p>
                    <p class="post-date">May 2024</p>
                </div>
                <div class="category">Ingredients Highlight</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="news-card">
                <img src="images/news3.jpg" alt="News 3">
                <div class="overlay">
                    <h5>The Transformative Power of Serums</h5>
                    <p class="posted-by">Posted by Jane Doe</p>
                    <p class="post-date">May 2024</p>
                </div>
                <div class="category">Product Information</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="news-card">
                <img src="images/news1.jpg" alt="News 1">
                <div class="overlay">
                    <h5>Mastering Double Cleansing: The Key to Clean and Clear Skin</h5>
                    <p class="posted-by">Posted by Jane Doe</p>
                    <p class="post-date">May 2024</p>
                </div>
                <div class="category">Skincare 101</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="news-card">
                <img src="images/news2.jpg" alt="News 2">
                <div class="overlay">
                    <h5>The Magic of Alpha Arbutin in Skincare: A Comprehensive Guide</h5>
                    <p class="posted-by">Posted by Jane Doe</p>
                    <p class="post-date">May 2024</p>
                </div>
                <div class="category">Ingredients Highlight</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="news-card">
                <img src="images/news3.jpg" alt="News 3">
                <div class="overlay">
                    <h5>The Transformative Power of Serums</h5>
                    <p class="posted-by">Posted by Jane Doe</p>
                    <p class="post-date">May 2024</p>
                </div>
                <div class="category">Product Information</div>
            </div>
        </div>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('.dropdown-submenu a.dropdown-toggle').on("click", function(e) {
            e.preventDefault();
            $(this).next('ul').toggle();
            e.stopPropagation();
        });
    });
</script>
</body>
</html>

