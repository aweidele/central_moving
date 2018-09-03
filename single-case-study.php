<?php
  get_header();

  // Determine next and previous links
  $allCS = get_posts([
    "post_type" => "case-study",
    "orderby" => "menu_order",
    "posts_per_page" => -1
  ]);
  $thisCS = $post->ID;
  foreach( $allCS as $i => $cs ) {
    if($cs->ID == $thisCS) {
      break;
    }
  }

  $totalCS = sizeof($allCS) - 1;
  $prev = $i - 1;
  $next = $i + 1;

  if( $prev < 0 ) {
    $prev = $totalCS;
  } else if( $next > $totalCS) {
    $next = 0;
  }

  $nextCS = get_permalink($allCS[$next]->ID);
  $prevCS = get_permalink($allCS[$prev]->ID);


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
          <?php if($fields["stat_description"]) { ?>
          <aside class="case_study_stat">
            <p>
              <span class="stat_figure"><?=$fields["stat_figure"]?></span>
              <span class="stat_description"><?=$fields["stat_description"]?></span>
            </p>
          </aside>
          <?php } ?>
          <nav class="case_study_nav">
            <a href="<?=$prevCS?>">Prev</a>
            <a href="<?=$nextCS?>">Next</a>
          </nav>
        </div>
      </div>
    </div>
    <?php if($fields["client_list"]) { ?>
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
    <?php } ?>
    <?php cm_blocks($fields["blocks"]); ?>
  </main>
<?php
  endwhile;
  endif;
  get_footer();
