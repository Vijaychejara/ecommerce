<?php
// mobile.php - simple mobile products page
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobiles - Flipkart Replica</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .product-container {
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
            transform: scale(1.05);
        }
        .product-name {
            font-size: 16px;
            font-weight: bold;
            margin: 10px 0;
        }
        .price {
            color: green;
            font-size: 18px;
            font-weight: bold;
        }
        .old-price {
            text-decoration: line-through;
            color: gray;
            font-size: 14px;
            margin-left: 5px;
        }
        .buy-btn {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 15px;
            background: #0ea5a4;
            color: #fff;
            border-radius: 4px;
            text-decoration: none;
            transition: 0.3s;
        }
        .buy-btn:hover {
            background: #0d47a1;
        }
    </style>
</head>
<body>
    

    <h2 style="text-align:center; margin-top:20px;">Latest Mobiles</h2>

    <div class="product-container">
        <!-- Product 1 -->
        <div class="product-card">
            <img src="assets/images/mobile1.jpg" alt="Mobile 1">
            <div class="product-name">Samsung Galaxy S24</div>
            <div class="price">₹79,999 <span class="old-price">₹89,999</span></div>
            <a href="#" class="buy-btn">Buy Now</a>
        </div>

        <!-- Product 2 -->
        <div class="product-card">
            <img src="assets/images/mobile2.jpg" alt="Mobile 2">
            <div class="product-name">iPhone 15 Pro</div>
            <div class="price">₹1,39,999 <span class="old-price">₹1,49,999</span></div>
            <a href="#" class="buy-btn">Buy Now</a>
        </div>

        <!-- Product 3 -->
        <div class="product-card">
            <img src="assets/images/mobile3.jpg" alt="Mobile 3">
            <div class="product-name">OnePlus 12</div>
            <div class="price">₹59,999 <span class="old-price">₹64,999</span></div>
            <a href="#" class="buy-btn">Buy Now</a>
        </div>

        <!-- Product 4 -->
        <div class="product-card">
            <img src="assets/images/mobile4.jpg" alt="Mobile 4">
            <div class="product-name">Realme GT 5 Pro</div>
            <div class="price">₹39,999 <span class="old-price">₹44,999</span></div>
            <a href="#" class="buy-btn">Buy Now</a>
        </div>
    </div>
</body>
</html>
<?php
include 'footer.php';
?>