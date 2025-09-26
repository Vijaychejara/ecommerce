<?php
$pageTitle = "Fashion - Flipkart Replica";
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
            height: 200px;
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
        /* button {
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
        } */
    </style>
</head>
<body>
    <main class="content">
        <h1>Fashion</h1>
        <p>Discover the latest fashion trends for men, women, and kids.</p>

    <div class="product-grid">
        <!-- Product 1 -->
        <div class="product-card">
            <img src="assets/images/fashion1.jpg" alt="Men's Jacket">
            <h3>Men's Jacket</h3>
            <p>Stylish winter jacket for men.</p>
            <span class="price">₹2,499</span>
            <button>Add to Cart</button>
        </div>

        <!-- Product 2 -->
        <div class="product-card">
            <img src="assets/images/fashion2.jpg" alt="Women's Dress">
            <h3>Women's Dress</h3>
            <p>Elegant evening dress for women.</p>
            <span class="price">₹1,799</span>
            <button>Add to Cart</button>
        </div>

        <!-- Product 3 -->
        <div class="product-card">
            <img src="assets/images/fashion3.jpg" alt="Sneakers">
            <h3>Unisex Sneakers</h3>
            <p>Comfortable sneakers for casual wear.</p>
            <span class="price">₹1,299</span>
            <button>Add to Cart</button>
        </div>

        <!-- Product 4 -->
        <div class="product-card">
            <img src="assets/images/fashion4.jpg" alt="Kids T-shirt">
            <h3>Kids T-shirt</h3>
            <p>Colorful printed T-shirt for kids.</p>
            <span class="price">₹499</span>
            <button>Add to Cart</button>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>
