<?php

?>
<section class="callout_grid services_grid">
  <div class="row">
    <div class="col_lg_9 push_lg_1 push_xl_2">
      <div class="callout_grid_wrapper">
        <header class="callout_grid_header">
          <h2><?=$block["title"]?></h2>
        </header>

        <div class="callout_grid_inner">
          <figure class="callout_grid_image">
            <img src="<?=$block["image"]["sizes"]["grid-image-700"]?>">
          </figure>
          <div class="callout_grid_intro">
            <p class="callout_grid_intro_inner">
              <?=$block["description"]?>
            </p>
          </div>
          <div class="callout_grid_cta">
            <a href=""><?=$block["link_label"] ? $block["link_label"] : "Our Services"?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
