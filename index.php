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
        /* Custom CSS after prefixing classes and IDs */
        .fo-navbar-nav .fo-dropdown-menu {
            margin-top: 0;
        }
        .fo-dropdown-submenu {
            position: relative;
        }
        .fo-dropdown-submenu .fo-dropdown-menu {
            top: 0;
            left: 100%;
            margin-left: .1rem;
            margin-right: .1rem;
            display: none;
        }
        .fo-dropdown-menu > .fo-dropdown-submenu:hover > .fo-dropdown-menu {
            display: block;
        }
        .fo-dropdown:hover > .fo-dropdown-menu {
            display: block;
        }
        
        
        /* Custom CSS */
        #hero-section {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
        }
        #hero-background-images img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }
        #hero-background-images img.hero-active {
            opacity: 1;
        }
        #hero-content {
            position: relative;
            z-index: 1;
            text-align: left;
            max-width: 600px;
            color: #333;
        }
        #hero-content h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        #hero-content p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
        }
        #hero-content .btn {
            font-size: 1rem;
            padding: 0.75rem 1.5rem;
        }
        
         /* Custom CSS for Cards */
        #unique-card-section {
            padding: 2rem 0;
        }
        .unique-product-card {
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            border: none;
        }
        .unique-product-card:hover {
            transform: scale(1.05);
        }
        .unique-product-card img {
            transition: transform 0.3s ease-in-out;
        }
        .unique-product-card:hover img {
            transform: scale(1.1);
        }
        .unique-card-body {
            position: absolute;
            bottom: 20px;
            left: 20px;
            color: #fff;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px 20px;
            border-radius: 5px;
        }
        .unique-card-body h5 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .unique-card-body a {
            font-size: 1rem;
            color: #fff;
            background-color: #28a745;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            text-decoration: none;
        }
        .unique-card-body a:hover {
            background-color: #218838;
        }
        
         /* Custom CSS for Featured Products Section */
        #unique-featured-products {
            padding: 2rem 0;
            text-align: center;
        }
        .unique-product-card {
            position: relative;
            border: none;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }
        .unique-product-card img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease-in-out;
        }
        .unique-product-card:hover img {
            transform: scale(1.05);
        }
        .unique-product-info {
            padding: 1rem 0;
        }
        .unique-product-info h5 {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }
        .unique-product-info p {
            font-size: 1rem;
            margin-bottom: 0.5rem;
            color: #28a745;
        }
        .unique-product-info a {
            font-size: 1rem;
            color: #28a745;
            text-decoration: none;
        }
        .unique-product-info a:hover {
            text-decoration: underline;
        }
        .unique-product-reviews {
            display: flex;
            justify-content: center;
            margin-top: 0.5rem;
        }
        .unique-product-reviews i {
            color: #ffc107;
            margin-right: 0.2rem;
        }
        
/*
        body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
*/
}

 /* Custom CSS for Testimonials */
        
        /* You don't need to specify .unique-testimonial-container .unique-testimonial-contain */





/*
        .unique-testimonial-contain {
            width: 80%;
            max-width: 600px;
            margin: 2rem auto;
            position: relative;
            overflow: hidden;
        
        }
*/
        .unique-testimonial {
            display: none;
            text-align: center;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            background-color: #fff;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            animation: fade 1s ease-in-out forwards;
        }

        .unique-testimonial-image {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-bottom: 15px;
        }
        .unique-testimonial-text {
            font-size: 1.2em;
            margin-bottom: 10px;
            color: #333;
        }
        .unique-testimonial-author {
            font-weight: bold;
            color: #666;
        }
        @keyframes fade {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        

  /* Custom CSS for Why Shop With Nimo Naturals */
/* Custom CSS for Why Shop With Nimo Naturals */
.unique-why-shop {
    text-align: center;
    padding: 2rem 0;
    background-color: #f9f9f9;
    margin-top: 2rem;
}
.unique-why-shop h2 {
    font-size: 2em;
    margin-bottom: 1.5rem;
}
.unique-why-shop-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 2rem;
}
.unique-why-shop-item {
    max-width: 300px;
    text-align: center;
}
.unique-why-shop-image {
    width: 100px;
    height: 100px;
    margin-bottom: 1rem;
}
        
        
.instagram-images {
  display: flex;
  justify-content: flex-start; /* Align images to start from the left */
  align-items: center;
  overflow-x: auto;
  padding: 20px 0;
  width: 100%;
  margin: 0; /* Remove any default margins */
}

.instagram-image {
  margin: 0; /* Remove any default margins */
  transition: transform 0.3s ease-in-out;
  flex: 1 0 auto; /* Allow images to grow equally to fill the container */
}

.instagram-image img {
  max-width: 100%;
  height: auto;
}

.instagram-image:hover {
  transform: scale(1.1);
}

/* Make the section responsive */
@media (max-width: 768px) {
  .instagram-images {
    padding: 20px; /* Adjust padding for smaller screens */
    overflow-x: auto;
    flex-wrap: wrap; /* Allow images to wrap to the next line on smaller screens */
  }

  .instagram-image {
    flex: 0 0 calc(20% - 10px); /* Adjust image width for smaller screens */
    margin: 5px; /* Adjust spacing between images */
  }
}



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
        
/*        testimonials*/
         
        .testimonial-hidden {
    display: none; /* Hide testimonials initially */
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



 <!-- Hero Section -->
    <section id="hero-section">
        <div id="hero-background-images">
            <img src="image1.jpg" alt="Background Image 1" class="hero-active">
            <img src="image2.jpg" alt="Background Image 2">
            <img src="image3.jpg" alt="Background Image 3">
        </div>
        <div id="hero-content">
            <h1>Affordable, Natural, High Quality</h1>
            <p>We offer value for money and keep our products as affordable as possible without compromising on quality.</p>
            <a href="#" class="btn btn-primary">Shop Now</a>
        </div>
    </section>
    
    
    
<!-- Product Cards Section -->
    <section id="unique-card-section" class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="unique-product-card">
                    <img src="image1.jpg" class="img-fluid" alt="Our Top Picks">
                    <div class="unique-card-body">
                        <h5>Our Top Picks</h5>
                        <a href="#" class="btn">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="unique-product-card">
                    <img src="image2.jpg" class="img-fluid" alt="Currently on Sale">
                    <div class="unique-card-body">
                        <h5>Currently on Sale</h5>
                        <a href="#" class="btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    
    
     <!-- Featured Products Section -->
    <section id="unique-featured-products" class="container">
        <h2>Our Featured Products</h2>
        <p>Looking for something specific? You can shop by category or different skin concerns</p>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="unique-product-card">
                    <img src="product1.jpg" alt="Hydrating Facial Toner">
                    <div class="unique-product-info">
                        <h5>Hydrating Facial Toner</h5>
                        <p>KES 1,150</p>
                        <a href="#">0 reviews</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="unique-product-card">
                    <img src="product2.jpg" alt="Glow Face Mask">
                    <div class="unique-product-info">
                        <h5>Glow Face Mask</h5>
                        <p>KES 850</p>
                        <a href="#">1 reviews</a>
                        <div class="unique-product-reviews">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="unique-product-card">
                    <img src="product3.jpg" alt="Niacinamide Facial Serum">
                    <div class="unique-product-info">
                        <h5>Niacinamide Facial Serum</h5>
                        <p>KES 1,500</p>
                        <a href="#">0 reviews</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="unique-product-card">
                    <img src="product4.jpg" alt="Vanilla Shea Body Cream">
                    <div class="unique-product-info">
                        <h5>Vanilla Shea Body Cream</h5>
                        <p>KES 1,000</p>
                        <a href="#">0 reviews</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    
  <!-- Testimonials Section -->
   <!-- Testimonials Section -->
<div id="unique-testimonial-container" class="container">
    <div class="row">
        <div id="testimonial-column" class="col-md-8 mx-auto">
            <!-- Testimonial 1 -->
            <div class="unique-testimonial testimonial-hidden">
                <img src="path/to/image1.jpg" alt="User 1" class="unique-testimonial-image">
                <p class="unique-testimonial-text">"Thank you. Your products are legit. I can't get enough of my skin it's glowing"</p>
                <p class="unique-testimonial-author">GODANOWARIO</p>
            </div>
            <!-- Testimonial 2 -->
            <div class="unique-testimonial testimonial-hidden">
                <img src="path/to/image2.jpg" alt="User 2" class="unique-testimonial-image">
                <p class="unique-testimonial-text">"Amazing results! My skin has never felt better."</p>
                <p class="unique-testimonial-author">USER 2</p>
            </div>
            <!-- Testimonial 3 -->
            <div class="unique-testimonial testimonial-hidden">
                <img src="path/to/image3.jpg" alt="User 3" class="unique-testimonial-image">
                <p class="unique-testimonial-text">"I love these products. They have transformed my skin."</p>
                <p class="unique-testimonial-author">USER 3</p>
            </div>
        </div>
    </div>
</div>



 <!-- New Section: Why Shop With Nimo Naturals -->
<div id="unique-why-shop" class="unique-why-shop">
    <h2>Why Shop With Nimo Naturals?</h2>
    <div class="unique-why-shop-container">
        <div class="unique-why-shop-item">
            <img src="path/to/affordable-image.jpg" alt="Affordable" class="unique-why-shop-image">
            <h3>Affordable</h3>
            <p>Our products are high quality and affordable. We offer value for your money.</p>
        </div>
        <div class="unique-why-shop-item">
            <img src="path/to/high-quality-image.jpg" alt="High Quality" class="unique-why-shop-image">
            <h3>High Quality</h3>
            <p>We ensure our products are made with the highest standards for your satisfaction.</p>
        </div>
        <div class="unique-why-shop-item">
            <img src="path/to/customer-support-image.jpg" alt="Customer Support" class="unique-why-shop-image">
            <h3>Customer Support</h3>
            <p>We provide excellent customer service to help you with your needs.</p>
        </div>
    </div>
</div>
    
<!--follows us on Instagram-->

    <section class="instagram-section">
  <h2>Follow us on Instagram</h2>
  <div class="instagram-images">
    <div class="instagram-image">
      <img src="image1.jpg" alt="Instagram Image 1">
    </div>
    <div class="instagram-image">
      <img src="image2.jpg" alt="Instagram Image 2">
    </div>
    <div class="instagram-image">
      <img src="image3.jpg" alt="Instagram Image 3">
    </div>
    <div class="instagram-image">
      <img src="image4.jpg" alt="Instagram Image 4">
    </div>
    <div class="instagram-image">
      <img src="image5.jpg" alt="Instagram Image 5">
    </div>
  </div>
</section>

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

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Custom JS -->
<script src="JS/scripts.js"></script>
    
     <!-- Font Awesome for star icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
     <!-- Custom JS -->
    <script>
        // JavaScript for image transition
        let heroCurrentIndex = 0;
        const heroImages = document.querySelectorAll('#hero-background-images img');
        const heroTotalImages = heroImages.length;

        function heroShowNextImage() {
            heroImages[heroCurrentIndex].classList.remove('hero-active');
            heroCurrentIndex = (heroCurrentIndex + 1) % heroTotalImages;
            heroImages[heroCurrentIndex].classList.add('hero-active');
        }

        setInterval(heroShowNextImage, 3000); // Change image every 3 seconds
    </script>
    <!-- Custom JS -->
    <script>
        // JavaScript for image transition in hero section
        let heroCurrentIndex = 0;
        const heroImages = document.querySelectorAll('#unique-hero-background-images img');
        const heroTotalImages = heroImages.length;

        function heroShowNextImage() {
            heroImages[heroCurrentIndex].classList.remove('unique-hero-active');
            heroCurrentIndex = (heroCurrentIndex + 1) % heroTotalImages;
            heroImages[heroCurrentIndex].classList.add('unique-hero-active');
        }

        setInterval(heroShowNextImage, 3000); // Change image every 3 seconds
    </script>
    <!-- unique testimonials-->
    <script>
    document.addEventListener("DOMContentLoaded", function() {
    const testimonials = document.querySelectorAll('.unique-testimonial');
    let currentIndex = 0;

    function showNextTestimonial() {
        testimonials[currentIndex].style.display = 'none';
        currentIndex = (currentIndex + 1) % testimonials.length;
        testimonials[currentIndex].style.display = 'block';
    }

    testimonials[currentIndex].style.display = 'block'; // Show the first testimonial
    setInterval(showNextTestimonial, 3000); // Change testimonial every 3 seconds
});
        

   </script>
    

<script>
            // Show the "Why Shop With Nimo Naturals" section with transition
const slides = document.querySelectorAll('.slide');
let currentSlide = 0;

function showNextSlide() {
    slides[currentSlide].classList.remove('active');
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].classList.add('active');
}

setInterval(showNextSlide, 3000);

    </script>
    <script>
    $(document).ready(function(){
    $(".unique-testimonial").each(function(index) {
        $(this).delay(1000 * index).fadeIn(500); // Delay and fade in each testimonial
    });
});

    </script>
 


</body>
</html>
