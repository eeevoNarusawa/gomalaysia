<!-- Footer Start -->
      <footer>
        <div>
          <a href="<?php echo home_url(); ?>">Home</a>
          <a href="<?php echo home_url('/inquiry/'); ?>">お問い合わせ</a>
          <a href="<?php echo home_url('/company/'); ?>">運営会社</a>
          <a href="<?php echo home_url('/terms/'); ?>">利用規約</a>
          <a href="<?php echo home_url('/privacy/'); ?>">プライバシーポリシー</a>
        </div>
        <div>Copyright &#169; Go Malaysia All Rights Reserved</div>
      </footer>
      <!-- Footer End -->
    </div><!-- /#main -> header.php -->
    <?php wp_footer(); ?>
    <?php if (is_front_page()) { ?>
      <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
    <?php } ?>
  </body>
</html>
