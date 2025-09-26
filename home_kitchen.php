<?php
// mobile.php - simple mobile products page
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
        .btn {
            display: inline-block;
            /* margin-top: 10px;
            padding: 8px 15px; */
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
<main class="content">
    <h2 style="text-align:center; margin-top:20px;">Home & Kitchen</h2>
  

    <div class="product-grid">
        <!-- Product 1 -->
        <div class="product-card">
            <img src="assets/images/home1.jpg" alt="Cookware Set">
            <h3>Cookware Set</h3>
            <p>Durable stainless steel cookware for your kitchen.</p>
            <span class="price">₹1,499</span>
            <button class="btn">Add to Cart</button>
        </div>

        <!-- Product 2 -->
        <div class="product-card">
            <img src="assets/images/home2.jpg" alt="Blender Mixer">
            <h3>Blender Mixer</h3>
            <p>Powerful and easy-to-use blender for daily cooking.</p>
            <span class="price">₹2,299</span>
            <button class="btn">Add to Cart</button>
        </div>

        <!-- Product 3 -->
        <div class="product-card">
            <img src="assets/images/home3.jpg" alt="Dinner Set">
            <h3>Dinner Set</h3>
            <p>Elegant 20-piece dinner set for modern dining.</p>
            <span class="price">₹999</span>
            <button class="btn">Add to Cart</button>
        </div>

        <!-- Product 4 -->
        <div class="product-card">
            <img src="assets/images/home4.jpg" alt="Vacuum Cleaner">
            <h3>Vacuum Cleaner</h3>
            <p>Compact vacuum cleaner with powerful suction.</p>
            <span class="price">₹3,999</span>
            <button class="btn">Add to Cart</button>
        </div>
    </div>
</main>

<?php 
include 'footer.php'; 
?>
