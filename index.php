<?php
$page_title = "Everest Decor | Authentic Nepali Art in Australia";
$meta_description = "Shop authentic Nepali art, paintings, sculptures and home decor in Australia. Support local artists and elevate your space with Everest Decor.";
$meta_keywords = "Nepali art Australia, thangka art, Himalayan decor, handmade art, Everest Decor";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>

    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="keywords" content="<?php echo $meta_keywords; ?>">
    <meta name="robots" content="index, follow">

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $meta_description; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://everestdecor.com.au">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: #f8f6f2;
            color: #1f2a30;
        }

        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
        }

        header {
            background: #0f2a35;
            color: #fff;
            padding: 10px 0;
            font-size: 14px;
            text-align: center;
        }

        nav {
            background: #fff;
            border-bottom: 1px solid #eee;
        }

        nav .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 0;
        }

        .logo {
            font-weight: bold;
            font-size: 22px;
            letter-spacing: 2px;
        }

        .menu a {
            margin: 0 15px;
            text-decoration: none;
            color: #333;
            font-weight: 500;
        }

        .hero {
            display: flex;
            align-items: center;
            padding: 80px 0;
        }

        .hero-text {
            flex: 1;
        }

        .hero-text h1 {
            font-size: 42px;
            margin-bottom: 20px;
        }

        .hero-text p {
            font-size: 18px;
            margin-bottom: 25px;
        }

        .btn {
            padding: 12px 20px;
            background: #0f2a35;
            color: #fff;
            text-decoration: none;
            margin-right: 10px;
            border-radius: 4px;
        }

        .btn.secondary {
            background: #c9a96a;
            color: #fff;
        }

        .features {
            display: flex;
            justify-content: space-between;
            margin: 60px 0;
            text-align: center;
        }

        .feature {
            width: 23%;
        }

        .categories {
            margin: 60px 0;
        }

        .grid {
            display: flex;
            gap: 20px;
        }

        .card {
            flex: 1;
            background: #fff;
            padding: 20px;
            border-radius: 6px;
            text-align: center;
        }

        .artist-section {
            background: #0f2a35;
            color: #fff;
            padding: 60px 0;
            margin-top: 60px;
        }

        footer {
            background: #0f2a35;
            color: #fff;
            padding: 40px 0;
            margin-top: 60px;
        }

        footer a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>

<body>

<header>
    Authentic Nepali Art Delivered Across Australia | Supporting Local Artists
</header>

<nav>
    <div class="container">
        <div class="logo">EVEREST DECOR</div>
        <div class="menu">
            <a href="#">Home</a>
            <a href="#">Shop Art</a>
            <a href="#">Artists</a>
            <a href="#">Collections</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
    </div>
</nav>

<section class="hero container">
    <div class="hero-text">
        <h1>Authentic Art. Timeless Beauty.</h1>
        <p>Discover original Nepali artworks, handcrafted by skilled artists and delivered to your home in Australia.</p>
        <a href="#" class="btn">Shop Artwork</a>
        <a href="#" class="btn secondary">Explore Artists</a>
    </div>
</section>

<section class="features container">
    <div class="feature">
        <h3>Authentic Nepali Art</h3>
        <p>Original handmade pieces from Nepal</p>
    </div>
    <div class="feature">
        <h3>Support Artists</h3>
        <p>Empowering local creators</p>
    </div>
    <div class="feature">
        <h3>Secure Delivery</h3>
        <p>Carefully packed and shipped</p>
    </div>
    <div class="feature">
        <h3>Safe Payments</h3>
        <p>Trusted checkout system</p>
    </div>
</section>

<section class="categories container">
    <h2>Shop By Category</h2>
    <div class="grid">
        <div class="card">Paintings</div>
        <div class="card">Sculptures</div>
        <div class="card">Thangka Art</div>
        <div class="card">Home Decor</div>
    </div>
</section>

<section class="artist-section">
    <div class="container">
        <h2>Showcase Your Talent to the World</h2>
        <p>Join Everest Decor and connect with art lovers across Australia.</p>
        <a href="#" class="btn secondary">Artist Login / Register</a>
    </div>
</section>

<section class="container">
    <h2>How It Works</h2>
    <div class="features">
        <div class="feature">1. Artists upload artwork</div>
        <div class="feature">2. You browse & order</div>
        <div class="feature">3. We handle delivery</div>
        <div class="feature">4. Delivered to your door</div>
    </div>
</section>

<footer>
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> Everest Decor. All rights reserved.</p>
        <p>Bringing the richness of Nepali art to homes across Australia.</p>
    </div>
</footer>

</body>
</html>
