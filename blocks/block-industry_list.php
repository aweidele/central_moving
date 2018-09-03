<?php
  $terms = get_terms([
      'taxonomy' => "industry",
      'hide_empty' => false,
  ]);
 ?>
 <section class="industry_list">
   <header>
     <div class="row align_center">
       <div class="col_md_4 col_lg_3 push_xl_1">
         <h2 class="industry_list_heading"><?=$block["heading"]?></h2>
       </div>
       <div class="col_md_4 col_lg_7">
         <p class="industry_list_statement"><?=$block["statement"]?></p>
       </div>
     </div>
   </header>
   <div class="row">
     <div class="col_md_4 col_lg_9 push_xl_1">
       <ul class="industry_terms">
         <?php foreach($terms as $term) { ?>
          <li><a href="<?=get_term_link($term->term_id, "industry") ?>"><?=$term->name?></a></li>
          <?php } ?>
          <li><a href="<?=get_field('indexes', 'option')["case_studies"];?>">View All</a></li>
       </ul>
     </div>
   </div>
 </section>
