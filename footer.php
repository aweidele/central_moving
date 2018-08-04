    <footer class="footer">
      <div class="footer_top">
        <div class="row">
          <div class="col-3 push-1">
            Column
          </div>
          <div class="col-3">
            column
          </div>
          <div class="col-4">
            column
          </div>
        </div>
      </div>
      <div class="footer_bottom">
        <div class="row">
          <div class="col-3 push-1">
            © <?=date("Y")?> Central Moving & Storage Inc.
          </div>
          <div class="col-7">
            <div class="footer_utility_nav">

              <?php wp_nav_menu( array('theme_location' => 'footer-utility-menu') ); ?>

            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
<?php wp_footer(); ?>
</body>
</html>
