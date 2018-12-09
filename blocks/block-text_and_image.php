<?php
  if($block["format"] == "narrow") {
    $size = "grid-image-381";
  } else if( $block["format"] == "wide" ) {
    $size = "grid-image-500";
  } else {
    $size = "";
  }

  $blockID = uniqid();
?>
<section class="text_and_image <?=$block["format"]?>"<?php if($block["offset"]) { echo 'style="transform: translateX('.$block["offset"].'px)"'; } ?>>
  <?php if($block["image"]) { ?>

  <figure class="text_and_image_figure">
    <img src="<?=$block["image"]["sizes"][$size]?>">
  </figure>

  <?php } ?>
  <?php if($block["text"]) { ?>

  <div class="text_and_image_text">
    <?=wpautop($block["text"])?>
  </div>

  <?php } ?>
</section>
