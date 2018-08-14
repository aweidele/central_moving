  <section class="testimonial">
    <header class="row">
      <div class="col push_xl_1">
        <h2><?=$block["testimonial_heading"]?></h2>
      </div>
    </header>
    <div class="row">
      <div class="col_sm_2 col_md_2 col_lg_7 push_xl_1">
        <blockquote>
          <?=nl2br($block["testimonial"])?>
        </blockquote>
        <cite><?=$block["attribution"]?></cite>
      </div>
      <div class="col_sm_2 col_md_2 col_lg_3">
        <a class="testimonial_cta" href="<?=$block["cta"]["url"]?>"<?php if($block["cta"]["target"]) { echo ' target="'.$block["cta"]["target"] .'"'; } ?>><?=$block["cta"]["title"]?></a>
      </div>
    </div>
  </section>
