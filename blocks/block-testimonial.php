  <section class="testimonial">
    <header class="row">
      <div class="col push_xl_1">
        <h2><?=$block["testimonial_heading"]?></h2>
      </div>
    </header>
    <div class="row">
      <div class="col_sm_2 col_md_2 col_lg_7 push_xl_1">
        <div class="testimonials<?php if( sizeof($block["testimonials"]) > 1 ) { echo " owl-carousel"; } ?>" data-options='{"items":1,"loop":true,"animateIn": "fadeIn","animateOut": "fadeOut","autoplay":true,"autoplayTimeout":<?=$block["speed"]?>}'>
          <?php foreach($block["testimonials"] as $testimonial) { ?>

          <div class="testimonial_item">
            <blockquote>
              <?=nl2br($testimonial["testimonial"])?>
            </blockquote>
            <cite><?=$testimonial["attribution"]?></cite>
          </div>

          <?php } ?>
        </div>
      </div>
      <div class="col_sm_2 col_md_2 col_lg_3">
        <a class="testimonial_cta" href="<?=$block["cta"]["url"]?>"<?php if($block["cta"]["target"]) { echo ' target="'.$block["cta"]["target"] .'"'; } ?>><?=$block["cta"]["title"]?></a>
      </div>
    </div>
  </section>
