<?php
  $footer = get_field('footer', 'option');
?>
    <footer class="footer">
      <div class="footer_top">
        <div class="row">
          <div class="col push_lg_1">
            <h1 class="footer_logo">
              <a href="<?php echo get_home_url(); ?>">
                <svg viewBox="0 0 121.72 144"><use href="#site_logo"></use></svg>
                <span class="header_logo_title">Central Moving & Storage</span>
              </a>
            </h1>
          </div>
        </div>
        <div class="row">
          <div class="col_sm-2 col_md_2 col_lg_3 push_lg_1">
            <?php foreach($footer["footer_column_1"] as $block) {
              include("blocks/block-".$block["acf_fc_layout"].".php");
            } ?>
          </div>
          <div class="col_sm-2 col_md_2 col_lg_3 ">
            <?php foreach($footer["footer_column_2_footer_column_1"] as $block) {
              include("blocks/block-".$block["acf_fc_layout"].".php");
            } ?>
          </div>
          <div class="col_sm-2 col_md_4 col_lg_4">
            <nav class="footer_nav">
              <?php wp_nav_menu( array('theme_location' => 'footer-menu') ); ?>
            </nav>
          </div>
        </div>
      </div>
      <div class="footer_bottom">
        <div class="row">
          <div class="col_sm-2 col_md_2 col_lg_3 push_lg_1">
            © <?=date("Y")." ".$footer["copyright_info"]?>
          </div>
          <div class="col_sm-2 col_md_2 col_lg_7">
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
