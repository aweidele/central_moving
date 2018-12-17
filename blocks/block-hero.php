<div class="hero_wrapper<?php if( $carousel ) { ?> hero_carousel<?php } ?>">
  <?php if( $carousel ) { ?>
  <div class="hero owl-carousel" data-options='{"items":1,"dots":false,"loop":true,"autoplay":true,"autoplayTimeout":<?=$heroSpeed?>}'>
    <?php
      foreach($hero as $slide) {
    ?>
    <div class="hero_item">
      <figure class="hero_image">
        <img src="<?=$slide["hero_image"]["sizes"]["hero-image-sm"]; ?>">
      </figure>
      <div class="hero_content">
        <div class="row">
          <div class="col_xl_8 push_xl_1">
            <div class="hero_copy">
              <?=wpautop($slide["hero_copy"])?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col_xl_8 push_xl_1">
            <a href="<?=$slide["hero_link"]["url"]?>" class="hero_cta"><?=$slide["hero_link"]["title"] ? $slide["hero_link"]["title"] : "Read More"?></a>
          </div>
        </div>
      </div>
    </div>
    <?php
      }
    ?>
  </div>
<?php } else { ?>
  <div class="hero">
    <div class="hero_item_sm">
      <div class="hero_item_sm_inner" data-background="<?=$hero["sizes"]["hero-image-sm"]; ?>">
        <figure class="hero_image">
          <img src="<?=$hero["sizes"]["hero-image-sm"]; ?>">
        </figure>
      </div>
    </div>
  </div>
<?php } ?>
</div>
