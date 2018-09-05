<?php
get_header();
$services = get_posts([
  "post_type" => "services",
  "orderby" => "menu_order",
  "posts_per_page" => -1
]);

// Determine prev/next
$thisService = $post->ID;
foreach( $services as $i => $service) {
  if($service->ID == $thisService) {
    break;
  }
}

$totalServices = sizeof($services) - 1;
$prev = $i - 1;
$next = $i + 1;

if( $prev < 0 ) {
  $prev = $totalServices;
} else if( $next > $totalServices) {
  $next = 0;
}

$nextService = get_permalink($services[$next]->ID);
$prevService = get_permalink($services[$prev]->ID);

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
                <img src="<?=$image["sizes"]["grid-image-368"]?>" alt="<?=$image["alt"]?>">
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
            <li><a href="<?=get_field('indexes', 'option')["services"];?>"><span>Our Services</span></a></li>
            <?php foreach($services as $service) { ?>
            <li<?php if( $service->ID == $post->ID ) { echo ' class="active"'; } ?>><a href="<?=get_permalink($service->ID)?>"><span><?=$service->post_title?></span></a></li>
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
