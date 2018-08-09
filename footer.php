<?php
  $footer = get_field('footer', 'option');
?>
    <footer class="footer">
      <div class="footer_top">
        <div class="row">
          <div class="col_sm-2 col_md-2 col_lg-3 push_lg-1">
            <?php foreach($footer["footer_column_1"] as $block) {
              include("blocks/block_".$block["acf_fc_layout"].".php");
            } ?>
          </div>
          <div class="col_sm-2 col_md-2 col_lg-3 ">
            <?php foreach($footer["footer_column_2_footer_column_1"] as $block) {
              include("blocks/block_".$block["acf_fc_layout"].".php");
            } ?>
          </div>
          <div class="col_sm-2 col_md-4 col_lg-4">
            <nav class="footer_nav">
              <?php wp_nav_menu( array('theme_location' => 'footer-menu') ); ?>
            </nav>
          </div>
        </div>
      </div>
      <div class="footer_bottom">
        <div class="row">
          <div class="col_sm-2 col_md-2 col_lg-3 push_lg-1">
            © <?=date("Y")." ".$footer["copyright_info"]?>
          </div>
          <div class="col_sm-2 col_md-2 col_lg-7">
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
