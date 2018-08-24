<?php
  get_header();
  if( have_posts() ) : while( have_posts() ) : the_post();
  $fields = get_fields();
  $thumbnail = get_the_post_thumbnail($post->ID, "bio_thumb");
?>
  <main class="main our_people_main">
    <div class="row">
      <div class="col_md_4 col_lg_7 col_xl_6 push_xl_1">

      </div>
      <div class="col_md_4 col_lg_4 col_xl_3">
        <figure class="our_people_thumb">
          <?=$thumbnail?>
        </figure>
        <div class="our_people_contact">
          <dl>
            <li><strong>Email</strong>
          </dl>
        </div>
      </div>
    </div>
    <pre><?php print_r($fields); ?></pre>
  </main>
<?php
  endwhile;
  endif;
  get_footer();
