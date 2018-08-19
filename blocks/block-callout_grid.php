<?php
  if(!$grid_image_sz1) {
    $grid_image_sz1 = "grid-image-443";
  }

  if(!$grid_image_sz2) {
    $grid_image_sz2 = "grid-image-546";
  }
?>
<section class="callout_grid <?=$block["acf_fc_layout"]?>">
  <div class="row">
    <div class="col col_lg_<?=$col?> push_lg_1">

      <div class="callout_grid_wrapper">
        <header class="callout_grid_header">
          <h2><?=$block["title"]?></h2>
        </header>
        <div class="callout_grid_inner">
          <?php if($block["subtitle"]) { ?>
          <h3 class="callout_grid_subhead"><?=$block["subtitle"]?></h3>
          <?php } ?>
          <div class="callout_grid_intro">
            <div class="callout_grid_intro_inner">
              <?=$block["description"]?>
            </div>
          </div>
          <figure class="callout_grid_image callout_grid_image_1">
            <img src="<?=$block["image_1"]["sizes"][$grid_image_sz1]?>">
          </figure>
          <figure class="callout_grid_image callout_grid_image_2">
            <img src="<?=$block["image_2"]["sizes"][$grid_image_sz2]?>">
          </figure>
          <div class="callout_grid_cta">
            <a href="<?=$block["link"]["url"]?>"><?=$block["link"]["title"] ? $block["link"]["title"] : "Read More"?></a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
