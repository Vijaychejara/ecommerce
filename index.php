<?php
// index.php - main landing page
include 'header.php';
include 'products.php';
?>

<div class="container hero">
  <div class="hero-left">
    <h1>Big Savings. Everyday Products.</h1>
    <p>Discover offers across electronics, fashion, home & more.</p>
    <a class="btn-primary" href="#">Shop Now</a>
  </div>
  <div class="hero-right">
    <div class="hero-banner" role="img" aria-label="Hero banner">
      <!-- replace with banner image -->
      <img src="assets/images/hero.jpg" alt="Deals banner" onerror="this.style.display='none'">
    </div>
  </div>
</div>

<section class="section container top-categories">
  <h2>Top Categories</h2>
  <div class="categories-grid">
    <a class="cat" href="mobile.php"><img src="assets/images/cat-mobile.png" alt="">Mobiles</a>
    <a class="cat" href="#"><img src="assets/images/cat-television.png" alt="">TV & Audio</a>
    <a class="cat" href="#"><img src="assets/images/cat-kitchen.png" alt="">Home & Kitchen</a>
    <a class="cat" href="#"><img src="assets/images/cat-fashion.png" alt="">Fashion</a>
  </div>
</section>

<section class="section container featured-products">
  <div class="section-header">
    <h2>Featured Products</h2>
    <a href="#" class="viewall">View all</a>
  </div>

  <div class="products-grid">
    <?php foreach($products as $p): ?>
      <div class="product-card">
        <div class="product-media">
          <?php if(file_exists($p['image'])): ?>
            <img src="<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['title']) ?>">
          <?php else: ?>
            <div class="placeholder-image"><?= htmlspecialchars($p['title']) ?></div>
          <?php endif; ?>
          <?php if(!empty($p['tag'])): ?>
            <span class="badge"><?= htmlspecialchars($p['tag']) ?></span>
          <?php endif; ?>
        </div>
        <div class="product-body">
          <h3 class="product-title"><?= htmlspecialchars($p['title']) ?></h3>
          <div class="price">
            <span class="current">₹<?= number_format($p['price'], 2) ?></span>
            <?php if($p['old_price']): ?>
              <span class="old">₹<?= number_format($p['old_price'], 2) ?></span>
            <?php endif; ?>
          </div>
          <div class="product-actions">
            <a class="btn" href="product.php?id=<?= $p['id'] ?>">View</a>
            <button class="btn-outline" onclick="alert('Add to cart demo')">Add to cart</button>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="section deals container">
  <h2>Deals & Offers</h2>
  <div class="deals-grid">
    <div class="deal-card">Up to 50% off on electronics</div>
    <div class="deal-card">Travel deals from ₹799</div>
    <div class="deal-card">Home appliances: extra 10% off</div>
  </div>
</section>

<?php
include 'footer.php';
?>
