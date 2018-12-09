<section class="<?=$block["acf_fc_layout"]?>"<?php if($block["id"]) { echo ' id="'.$block["id"].'"'; } ?>>
  <div class="row">
      <div class="col col_lg_4 push_xl_1">
        <h2><?=$block["copy"]["title"]?></h2>
        <?=wpautop($block["copy"]["copy"])?>
      </div>
      <div class="col col_lg_6">
        <figure>
          <img src="<?=$block["image"]["sizes"]["grid-image-700"]?>" alt="<?=$block["image"]["alt"]?>">
        </figure>
      </div>
  </div>
</section>
