<?php
  $footer = get_field('footer', 'option');
?>
    <footer class="footer">
      <div class="footer_top">
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
          <div class="col">
            <figure class="site_logo"><svg id="site_logo" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 121.72 144"><path class="logo_path" d="M121.72,110.28H0V0H121.72ZM2.25,108H119.47V2.25H2.25Zm111.32-5.91H8.16v-94H113.57ZM10.41,99.87h100.9V10.41H10.41Zm2,15.26V144H31.84V115.13Zm77.47,0V144h19.43V115.13ZM37.57,15.34V56.25h68.82V15.34ZM68.82,63.15V94.94h37.56V63.15Zm-44.44,0V94.94H61.93V63.15Z"/></svg></figure>
          </div>
        </div>
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
