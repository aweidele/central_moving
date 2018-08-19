
<div class="row">
  <div class="col_md_9 push_lg_1">
    <section class="callout_grid grid_1">
      <div class="callout_grid_wrapper">
        <header class="callout_grid_header">
          <h2><?=$block["title"]?></h2>
        </header>
        <div class="callout_grid_inner">
          <p class="callout_grid_intro">
            <?=nl2br($block["description"])?>
          </p>
          <figure class="callout_grid_image callout_grid_image_1">
            <img src="<?=$block["image_1"]["sizes"]["grid-image-443"]?>">
          </figure>
          <figure class="callout_grid_image callout_grid_image_2">
            <img src="<?=$block["image_2"]["sizes"]["grid-image-546"]?>">
          </figure>
          <div class="callout_grid_cta">
            <a href="<?=$block["link"]["url"]?>"><?=$block["link"]["title"] ? $block["link"]["title"] : "Read More"?></a>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<pre><?php print_r($block); ?></pre>
