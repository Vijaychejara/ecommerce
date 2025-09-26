<?php
// header.php - include at top of every page
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>ShopEasy - Demo E-commerce</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <header class="site-header">
    <div class="topbar">
      <div class="container topbar-inner">
        <div class="brand">
          <a href="index.php" class="logo">
            <img src="assets/images/logo.png" alt="ShopEasy" onerror="this.style.display='none'">
            <span class="brand-text">ShopEasy</span>
          </a>
        </div>

        <form class="search-form" action="index.php" method="get" role="search">
          <input name="q" type="search" placeholder="Search products, brands and more..." aria-label="Search">
          <button type="submit">Search</button>
        </form>

        <div class="header-actions">
          <a class="action" href="#"><span class="material">👤</span> Sign in</a>
          <a class="action cart" href="#">
            <span class="material">🛒</span>
            <span class="cart-count">2</span>
          </a>
        </div>
      </div>
    </div>

    <nav class="main-nav">
      <div class="container nav-inner">
        <ul class="nav-cats">
          <li><a href="mobile.php">Mobiles</a></li>
          <li><a href="electronics.php">Electronics</a></li>
          <li><a href="home_kitchen.php">Home & Kitchen</a></li>
          <li><a href="fashion.php">Fashion</a></li>
          <li><a href="sports.php">Sports</a></li>
          <li><a href="#">Travel</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <main class="site-content">
