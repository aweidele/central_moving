<section class="featured_case_studies <?=$block["acf_fc_layout"]?>">
  <div class="row">
    <div class="col col_lg_8 push_xl_1">
      <div class="case_studies_grid">
        <header class="case_studies_grid_header">
          <h2><?=$block["title"]?></h2>
        </header>
        <?php
          foreach( $block["featured_case_studies"] as $case_study ) {
            $thumbnail = get_the_post_thumbnail($case_study->ID, "case_study_listing");
        ?>
        <article class="case_study">
          <a href="<?=get_permalink($case_study->ID)?>"><?=$thumbnail?></a>
        </article>
        <?php
          }
        ?>
      </div>
    </div>
  </div>
</section>
