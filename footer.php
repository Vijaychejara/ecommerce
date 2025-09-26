<?php
// footer.php - include at bottom of every page
?>
 <link rel="stylesheet" href="style.css">
  </main> <!-- .site-content -->

  <footer class="site-footer">
    <div class="container footer-top">
      <div class="col">
        <h4>Customer Service</h4>
        <ul>
          <li><a href="#">Help Center</a></li>
          <li><a href="#">Returns</a></li>
          <li><a href="#">Track Order</a></li>
        </ul>
      </div>

      <div class="col">
        <h4>About ShopEasy</h4>
        <ul>
          <li><a href="#">About us</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">Press</a></li>
        </ul>
      </div>

      <div class="col">
        <h4>Policies</h4>
        <ul>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Security</a></li>
        </ul>
      </div>

      <div class="col newsletter">
        <h4>Stay in touch</h4>
        <form>
          <input type="email" placeholder="Your email address">
          <button type="submit">Subscribe</button>
        </form>
      </div>
    </div>

    <div class="container footer-bottom">
      <div class="copyright">© <?= date('Y') ?> ShopEasy. All rights reserved.</div>
      <div class="socials">
        <a href="#">Facebook</a> · <a href="#">Twitter</a> · <a href="#">Instagram</a>
      </div>
    </div>
  </footer>

</body>
</html>
