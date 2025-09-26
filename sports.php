<?php
$pageTitle = "Sports - Flipkart Replica";
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronics - Flipkart Replica</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .product-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            text-align: center;
            padding: 15px;
            transition: 0.3s;
        }
        .product-card img {
            width: 150px;
            height: 150px;
            object-fit: contain;
        }
        .product-card:hover {
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            transform: translateY(-5px);
        }
        .product-card h3 {
            font-size: 16px;
            font-weight: bold;
            margin: 10px 0;
        }
        .price {
            color: green;
            font-size: 18px;
            font-weight: bold;
        }
        button {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 15px;
            background: #0ea5a4;
            color: #fff;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #0b7272;
        }
    </style>
</head>
<body>
    <main class="content">
        <!-- Hero Section -->
        <div class="sports-hero">
            <h2 style="text-align:center; margin-top:20px;">Sports</h2>
        <p style="text-align:center; margin-top:20px;">Get the best sports gear and accessories for your active lifestyle.</p>
    </div>

    <div class="product-grid sports-grid">
        <!-- Product 1 -->
        <div class="product-card">
            <img src="assets/images/sports1.jpg" alt="Cricket Bat">
            <h3>Cricket Bat</h3>
            <p>Professional-grade cricket bat for powerful shots.</p>
            <span class="price">₹3,499</span>
            <button>Add to Cart</button>
        </div>

        <!-- Product 2 -->
        <div class="product-card">
            <img src="assets/images/sports2.jpg" alt="Football">
            <h3>Football</h3>
            <p>Durable football suitable for all grounds.</p>
            <span class="price">₹899</span>
            <button>Add to Cart</button>
        </div>

        <!-- Product 3 -->
        <div class="product-card">
            <img src="assets/images/sports3.jpg" alt="Tennis Racket">
            <h3>Tennis Racket</h3>
            <p>Lightweight racket for better control and power.</p>
            <span class="price">₹2,199</span>
            <button>Add to Cart</button>
        </div>

        <!-- Product 4 -->
        <div class="product-card">
            <img src="assets/images/sports4.jpg" alt="Running Shoes">
            <h3>Running Shoes</h3>
            <p>Comfortable shoes for running and daily workouts.</p>
            <span class="price">₹2,999</span>
            <button>Add to Cart</button>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>
