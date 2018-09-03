<?php
/* Template Name: Services */
get_header();

$services = get_posts([
  "post_type" => "services",
  "orderby" => "menu_order",
  "posts_per_page" => -1
]);

$nextService = get_permalink($services[0]->ID);
$prevService = get_permalink($services[sizeof($services) - 1]->ID);

if( have_posts() ): while( have_posts() ): the_post();
  $fields = get_fields();
  $hero = $fields["hero_image"];

  include("blocks/block-hero.php");
?>
  <main class="main services_main">
    <div class="row reverse">
      <div class="col_11 col_lg_7 col_xl_8">
        <div class="services_content_wrapper">
          <div class="services_content">
            <h1><?=$fields["title"] ? $fields["title"] : get_the_title()?></h1>
            <?php if($fields["intro_text"]) { ?>
            <p class="intro_text"><?=$fields["intro_text"]?></p>
            <?php } ?>
            <?php the_content(); ?>
          </div>
          <div class="services_right_rail">
            <?php if($fields["right_images"]) { ?>
            <aside class="services_images">
              <?php foreach($fields["right_images"] as $image) { ?>
              <figure class="services_figure">
                <img src="<?=$image["sizes"]["grid-image-443"]?>" alt="<?=$image["alt"]?>">
              </figure>
              <?php } ?>
            </aside>
            <?php } ?>
            <?php if($fields["stat_box"]["stat_description"]) { ?>
            <aside class="services_stat">
              <p>
                <span class="stat_figure"><?=$fields["stat_box"]["stat_figure"]?></span>
                <span class="stat_description"><?=$fields["stat_box"]["stat_description"]?></span>
              </p>
            </aside>
            <?php } ?>
            <nav class="services_nextprev">
              <a href="<?=$prevService?>">Prev</a>
              <a href="<?=$nextService?>">Next</a>
            </nav>
          </div>
        </div>
      </div>
      <div class="col_11 col_lg_4 col_xl_3">
        <nav class="services_nav">
          <ul>
            <li class="active"><a href=""><span>Our Services</span></a></li>
            <?php foreach($services as $service) { ?>
            <li><a href="<?=get_permalink($service->ID)?>"><span><?=$service->post_title?></span></a></li>
            <?php } ?>
          </ul>
        </nav>
      </div>
    </div>
  </main>
  <?php cm_blocks($fields["blocks"]); ?>
<?php
  endwhile;
  endif;
  get_footer();
