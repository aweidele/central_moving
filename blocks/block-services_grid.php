<?php
  $services = new WP_Query([
    "post_type" => "services"
  ]);
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
            <?php if( $services -> have_posts() ) { ?>
            <ul class="services_grid_list">
              <?php while( $services -> have_posts() ) { $services -> the_post(); ?>
              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
              <?php } ?>
            </ul>
            <?php } ?>
          </div>
          <div class="callout_grid_cta">
            <a href="<?=$block["link"]["url"]?>"><?=$block["link"]["title"] ? $block["link"]["title"] : "Our Services"?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
