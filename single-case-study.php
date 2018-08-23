<?php
  get_header();
  if( have_posts() ) : while( have_posts() ) : the_post();
  $fields = get_fields();
  $terms = wp_get_post_terms($post->ID, "industry");
  $client_list = explode("\n", $fields["client_list"]);
?>
  <div class="hero_wrapper case_study_hero">
    <figure>
      <img src="<?=$fields["hero_image"]["sizes"]["case_study_hero"]?>" alt="<?=$fields["hero_image"]["alt"] ? $fields["hero_image"]["alt"] : $post->post_title ?>">
    </figure>
  </div>
  <main class="main case_study_main">
    <div class="row">
      <div class="col_md_4 col_lg_5 col_xl_4 push_xl_1">
        <div class="main_content_block">
          <div class="case_study_term"><?=$terms[0]->name?></div>
          <h1><?=$post->post_title?></h1>
          <p class="intro_text"><?=$fields["intro_text"]?></p>
          <?=wpautop($fields["content"])?>
        </div>
        <div class="case_study_blurb">
          <?=wpautop($fields["content"])?>
        </div>
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
          <aside class="case_study_stat">
            <p>
              <span class="stat_figure"><?=$fields["stat_figure"]?></span>
              <span class="stat_description"><?=$fields["stat_description"]?></span>
            </p>
          </aside>
          <nav class="case_study_nav">
            <a href="">Prev</a>
            <a href="">Next</a>
          </nav>
        </div>
      </div>
    </div>
    <section class="client_list">
      <div class="row">
        <div class="col_xl_9 push_xl_1">
          <header>
            <h2><?php
              if($fields["client_list_title"]) {
                echo $fields["client_list_title"];
              } else {
                echo $terms[0]->name." Clients";
              }
            ?></h2>
          </header>
          <ul>
            <?php foreach($client_list as $client) { ?>
            <li><?=$client?></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </section>
    <?php cm_blocks($fields["blocks"]); ?>
  </main>
<?php
  endwhile;
  endif;
  get_footer();
