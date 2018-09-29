<?php
/* Template Name: Case Studies */
  get_header();

  // Get Case Study list
  $caseStudies = get_posts([
    "post_type" => "case-study",
    "orderby" => "menu_order",
    "posts_per_page" => -1
  ]);

  $csThumbnails = [];
  $csHeight = 0;
  foreach($caseStudies as $i => $case_study) {
    $csThumbnails[] = wp_get_attachment_image_src( get_post_thumbnail_id( $case_study->ID ) , "case_study_listing" );
    $csHeight += $csThumbnails[$i][2];
  }
  $csBreak = $csHeight / 2;

  if( have_posts() ): while( have_posts() ): the_post();
  $fields = get_fields();
  $hero = $fields["hero_image"];

  include("blocks/block-hero.php");
?>
<main class="main case_study_main">
  <div class="row">
    <div class="col_11 col_lg_5 col_xl_4 push_xl_1">
      <div class="main_content_block">
        <h1><?=$fields["title"] ? $fields["title"] : $post->post_title?></h1>
        <?php if($fields["intro_text"]) { ?>
        <p class="intro_text"><?=$fields["intro_text"]?></p>
        <?php } ?>
        <?php the_content(); ?>
        <?php echo do_shortcode("[industry_list]"); ?>
      </div>
      <div class="case_studies_list">
        <?php
          $totalHeight = 0;
          foreach( $caseStudies as $i => $case_study ) {
            cs_block($case_study, $csThumbnails[$i]);
            $totalHeight += $csThumbnails[$i][2];
            if($totalHeight > $csBreak) {
              break;
            }
          } ?>
      </div>
    </div>
    <div class="col_11 col_lg_5 col_xl_4 push_lg_1">
      <div class="case_studies_list case_studies_list_right">
        <?php
          //foreach($caseStudies as $i => $case_study) {
          for ($j = $i + 1; $j < sizeof($caseStudies); $j++) {
            cs_block($caseStudies[$j], $csThumbnails[$j]);
          } ?>
      </div>
    </div>
  </div>
</main>
<?php cm_blocks($fields["blocks"]); ?>
<?php
  endwhile;
  endif;
  get_footer();

  function cs_block($case_study, $cs_thumb) {
    $terms = wp_get_post_terms($case_study->ID, "industry");
?>
        <article class="case_study">
          <a href="<?=get_permalink($case_study->ID)?>">
            <figure class="case_study_figure"><img src="<?=$cs_thumb[0]?>" alt=""></figure>
            <ul class="case_study_terms">
              <?php foreach($terms as $term) { ?>
              <li><?=$term->name?></li>
              <?php } ?>
            </ul>
            <h2><?=$case_study->post_title?></h2>
          </a>
        </article>
<?php
  }
