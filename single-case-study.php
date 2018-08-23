<?php
  get_header();
  $fields = get_fields();
?>
  <div class="hero_wrapper case_study_hero">
    <figure>
      <img src="<?=$fields["hero_image"]["sizes"]["case_study_hero"]?>" alt="<?=$fields["hero_image"]["alt"] ? $fields["hero_image"]["alt"] : $post->post_title ?>">
    </figure>
  </div>
  <main class="main case_study_main">
    <div class="row">
      <div class="col_md_4 col_lg_5 col_xl_4 push_xl_1">
        Left
      </div>
      <div class="col_md_4 col_lg_5 col_xl_4 push_lg_1">
        <div class="case_study_right">
          <aside class="case_study_right_images">
            <?php foreach($fields["right_side_images"] as $image) { ?>
              <a href="<?=$image["url"]?>"><figure>
                <img src="<?=$image["sizes"]["grid-image-500"]?>" alt="<?=$image["hero_image"]["alt"] ? $image["hero_image"]["alt"] : "" ?>">
              </figure></a>
            <?php } ?>
          </aside>
        </div>
      </div>
    </div>
    <pre><?php print_r($fields); ?></pre>
  </main>
  <pre><?php print_r($post); ?></pre>
<?php
  get_footer();
