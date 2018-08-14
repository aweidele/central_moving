<div class="hero_wrapper">
  <div class="hero">
    <?php
      foreach($hero as $slide) {
    ?>
    <div class="hero_item">
      <figure class="hero_image">
        <img src="<?php echo $slide["hero_image"]["sizes"]["hero-image-sm"]; ?>">
      </figure>
    </div>
    <?php
      }
    ?>
  </div>
</div>
