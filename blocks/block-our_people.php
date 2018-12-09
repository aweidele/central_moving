<?php
  $bios = get_posts([
    "post_type" => "our-people",
    "posts_per_page" => -1
  ]);

  $additional_people = explode("\n", $block["additional_people"]);
?>
<section class="our_people" id="our-people">
  <div class="row">
    <div class="col_md_4 col_lg_9 col_xl_6 push_xl_1">
      <header>
        <h2 class="our_people_heading"><?=$block["title"]?></h2>
      </header>
      <div class="our_people_description"><?=$block["description"]?></div>
    </div>
  </div>
  <div class="row">
    <div class="col_md_4 col_lg_11 col_xl_9 push_xl_1">
      <div class="our_people_grid">
        <?php
          foreach($bios as $bio) {
            $thumbnail = get_the_post_thumbnail($bio->ID, "bio_thumb");
            $permalink = get_permalink($bio->ID);
            $title = get_field("title", $bio->ID);
        ?>

          <article class="our_people_grid_item">
            <a href="<?=$permalink?>"><figure class="our_people_thumb">
              <?=$thumbnail?>
            </figure></a>
            <div class="our_people_grid_info">
              <h3><a href="<?=$permalink?>"><?=$bio->post_title?></a></h3>
              <p><?=$title?></p>
            </div>
          </article>

        <?php } ?>
      </div>
      <?php if( $additional_people ) { ?>
      <ul class="our_people_additional">
        <?php foreach($additional_people as $people) { ?>
        <li><?=$people?></li>
        <?php } ?>
      </ul>
      <?php } ?>
    </div>
  </div>
</section>
