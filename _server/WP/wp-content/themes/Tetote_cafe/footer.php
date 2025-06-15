<?php
global $template_url;
global $home_url;
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>


<?php wp_footer(); ?>


<footer>
  <div class="footer-block outer-block">
    <div class="nav">
      <div class="nav-wrap">
        <div class="footer-left">
          <p class="footer-info">
            東京都中央区日本橋1-2-3 tetote building 1F <br>平日 8:00-18:00 / 土日・祝日 9:00-17:00 <br> <a href="tel:03-1234-5678">03-1234-5678</a>
          </p>
        </div>
        <div class="footer-right">
          <ul class="nav-list">
            <li><a href="<?php echo $home_url; ?>/news/">NEWS</a></li>
            <li><a href="<?php echo $home_url; ?>/menu/">MENU</a></li>
            <li><a href="<?php echo $home_url; ?>/shop-info/">SHOP INFO</a></li>
            <li><a href="<?php echo $home_url; ?>/contact/">CONTACT</a></li>
            <li><a href=""><img class="instagram" src="<?php echo $template_url; ?>/image/home/instagram_logo.svg" alt=""></a></li>
          </ul>
        </div>
      </div>
      <p class="copy-right">Copyright © Tetote Cafe All Rights Reserved.</p>
    </div>
  </div>
</footer>

</div><!-- /wrapper -->

<script src="<?php echo $template_url; ?>/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo $template_url; ?>/js/slick.min.js"></script>
<script src="<?php echo $template_url; ?>/js/midnight.jquery.min.js"></script>
<script src="<?php echo $template_url; ?>/js/common.js"></script>
<script>
  function initMidnight() {
    $('header').midnight();
  }

  $(document).ready(function() {
    if (window.matchMedia("(min-width: 768px)").matches) {
      initMidnight()
    }

    $(window).resize(function() {
      if (window.matchMedia("(min-width: 768px)").matches) {
        initMidnight()
      }
    })
  })
</script>
</body>

</html>