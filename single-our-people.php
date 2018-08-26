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
        <div class="our_people_info">

          <?php if($fields["email"] || $fields["main_phone"] || $fields["direct_phone"]) { ?>
          <dl class="our_people_contact">
            <?php if($fields["email"]) { ?>

            <dt>Email</dt>
            <dd><a href="mailto:<?=$fields["email"]?>"><?=$fields["email"]?></a></dd>

            <?php }
            if($fields["main_phone"]) { ?>

            <dt>Main</dt>
            <dd><a href="tel:<?=str_replace(["(",")"," ","-"],"",$fields["main_phone"])?>"><?=$fields["main_phone"]?></a></dd>

            <?php }
            if($fields["direct_phone"]) { ?>

            <dt>Direct</dt>
            <dd><a href="tel:<?=str_replace(["(",")"," ","-"],"",$fields["direct_phone"])?>"><?=$fields["direct_phone"]?></a></dd>

            <?php } ?>
          </dl>
          <?php }
          if($fields["education"]) { ?>

          <dl>
            <dt>Education</dt>
            <dd><?=nl2br($fields["education"])?></dd>
          </dl>

          <?php }
          if($fields["affiliations"]) { ?>

          <dl>
            <dt>Affiliations</dt>
            <dd><?=nl2br($fields["affiliations"])?></dd>
          </dl>

          <?php }
          if($fields["connect"]) { ?>

          <ul>
            <?php foreach($fields["connect"] as $connect) { ?>
            <li><?=$connect["connect_text"]?> <a href="<?=$connect["link"]["url"]?>" target="_blank"><?=$connect["link"]["title"]?></a></li>
            <?php } ?>
          </ul>

          <?php } ?>

        </div>
      </div>
    </div>
  </main>
<?php
  endwhile;
  endif;
  get_footer();
