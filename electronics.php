<?php
// electronics.php
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
        .product-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
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
            width: 180px;
            height: 180px;
            object-fit: contain;
        }
        .product-card:hover {
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            transform: translateY(-5px);
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


    <h2 style="text-align:center; margin-top:20px;">Electronics</h2>

    <div class="product-container">
        <!-- Product 1 -->
        <div class="product-card">
            <img src="assets/images/laptop.jpg" alt="Laptop">
            <div class="product-name">Dell Inspiron 15</div>
            <div class="price">₹55,999 <span class="old-price">₹62,999</span></div>
            <a href="#" class="buy-btn">Buy Now</a>
        </div>

        <!-- Product 2 -->
        <div class="product-card">
            <img src="assets/images/tv.jpg" alt="Smart TV">
            <div class="product-name">Sony Bravia 55" Smart TV</div>
            <div class="price">₹64,999 <span class="old-price">₹74,999</span></div>
            <a href="#" class="buy-btn">Buy Now</a>
        </div>

        <!-- Product 3 -->
        <div class="product-card">
            <img src="assets/images/headphones.jpg" alt="Headphones">
            <div class="product-name">JBL Wireless Headphones</div>
            <div class="price">₹5,499 <span class="old-price">₹7,999</span></div>
            <a href="#" class="buy-btn">Buy Now</a>
        </div>

        <!-- Product 4 -->
        <div class="product-card">
            <img src="assets/images/camera.jpg" alt="Camera">
            <div class="product-name">Canon EOS 1500D</div>
            <div class="price">₹34,999 <span class="old-price">₹39,999</span></div>
            <a href="#" class="buy-btn">Buy Now</a>
        </div>
    </div>
</body>
</html>
<?php
include 'footer.php';
?>