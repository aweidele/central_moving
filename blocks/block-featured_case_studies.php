<section class="<?=$block["acf_fc_layout"]?>">
  <div class="row reverse">
    <div class="col_11 col_lg_5 col_xl_4 push_xl_1">
      <div class="case_studies_grid">
        <header class="case_studies_grid_header">
          <h2><?=$block["title"]?></h2>
        </header>
        <?php
          foreach( $block["featured_case_studies_right"] as $case_study ) {
            cs_block($case_study);
          }
        ?>
        <a href="<?=$block["link"]["url"]?>" class="featured_case_studies_link right" aria-hidden="true"><?=$block["link"]["title"] ? $block["link"]["title"] : "Case Studies" ?></a>
      </div>
    </div>
    <div class="col_11 col_lg_5 col_xl_4 push_xl_1">
      <?php
        foreach( $block["featured_case_studies_left"] as $case_study ) {
          cs_block($case_study);
        }
      ?>
      <a href="<?=$block["link"]["url"]?>" class="featured_case_studies_link left"><?=$block["link"]["title"] ? $block["link"]["title"] : "Case Studies" ?></a>
    </div>
  </div>
</section>
<?php
  function cs_block($case_study) {
    $thumbnail = get_the_post_thumbnail($case_study->ID, "case_study_listing");
    $terms = wp_get_post_terms($case_study->ID, "industry");
?>

        <article class="case_study">
          <a href="<?=get_permalink($case_study->ID)?>">
            <figure class="featured_case_study_figure"><?=$thumbnail?></figure>
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
