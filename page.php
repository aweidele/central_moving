<?php
  get_header();
  if( have_posts() ): while( have_posts() ): the_post();
  $fields = get_fields();
  $hero = $fields["hero_image"];

  include("blocks/block-hero.php");
?>
<main class="main">
  <div class="row">
    <div class="col_md_4 col_lg_5 col_xl_4 push_xl_1">
      <div class="main_content_block">
        <h1><?=$fields["title"] ? $fields["title"] : $post->post_title?></h1>
        <p class="intro_text"><?=$fields["intro_text"]?></p>
        <?php the_content(); ?>
      </div>
    </div>
    <div class="col_md_4 col_lg_5 col_xl_4 push_lg_1">
      Poop
    </div>
  </div>
<pre><?php print_r($fields) ?></pre>
</main>
<div class="full_width_blocks">
<?php cm_blocks($fields["blocks"]); ?>
</div>
<?php
  endwhile;
  endif;
  get_footer(); ?>
